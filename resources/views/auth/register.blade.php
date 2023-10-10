<x-layout page="Registre-se">
    <x-slot:btn>
        <a href="{{ route('auth.login') }}" class="btn btn-primary">
            Já possui conta? Faça Login
        </a>
    </x-slot:btn>

    <section class="task_section">
        <h1>Registrar-se</h1>

        <form action="{{ route('auth.register_action') }}" method="POST">
            @csrf
            <x-form.text-input name="name" label="Nome" type="text" placeholder="Digite o seu nome"
                required="required" value="{{ old('name') }}">
            </x-form.text-input>
            {{ $errors->has('name') ? $errors->first('name') : '' }}

            <x-form.text-input name="email" label="E-mail" type="email" placeholder="Digite o seu e-mail"
                required="required" value="{{ old('email') }}">
            </x-form.text-input>
            {{ $errors->has('email') ? $errors->first('email') : '' }}

            <x-form.text-input name="password" label="Senha" type="password" placeholder="Digite a senha"
                required="required" value="{{ old('password') }}">
            </x-form.text-input>
            {{ $errors->has('password') ? $errors->first('password') : '' }}

            <x-form.text-input name="password_confirmation" label="Confirmar Senha" type="password"
                placeholder="Digite a confirmação de senha" required="required"
                value="{{ old('password_confirmation') }}">
            </x-form.text-input>
            {{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : '' }}

            <x-form.form-button type="reset">
                <x-form.button type="reset">
                    Limpar
                </x-form.button>

                <x-form.button type="submit">
                    Registrar-se
                </x-form.button>
            </x-form.form-button>
        </form>
    </section>
</x-layout>

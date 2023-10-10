<x-layout page="Login">
    <x-slot:btn>
        <a href="{{ route('auth.register') }}" class="btn btn-primary">
            Registre-se
        </a>
    </x-slot:btn>

    <section class="task_section">
        <h1>Login</h1>

        {{-- @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif --}}

        <form action="{{ route('auth.login_action') }}" method="POST">
            @csrf
            <x-form.text-input name="email" label="E-mail" type="email" placeholder="Digite o seu e-mail"
                required="required" value="{{ old('email') }}">
            </x-form.text-input>
            {{ $errors->has('email') ? $errors->first('email') : '' }}

            <x-form.text-input name="password" label="Senha" type="password" placeholder="Digite a senha"
                required="required" value="{{ old('password') }}">
            </x-form.text-input>
            {{ $errors->has('password') ? $errors->first('password') : '' }}

            <x-form.form-button type="reset">
                <x-form.button type="reset">
                    Limpar
                </x-form.button>

                <x-form.button type="submit">
                    Entrar
                </x-form.button>
            </x-form.form-button>
        </form>
    </section>
</x-layout>

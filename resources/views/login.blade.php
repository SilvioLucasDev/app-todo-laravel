<x-layout page="Login">
    <x-slot:btn>
        <a href="{{ route('register') }}" class="btn btn-primary">
            Registre-se
        </a>
    </x-slot:btn>

    Tela de Login &nbsp;
    <a href="{{ route('home.index') }}">
        Ir para a Home
    </a>
</x-layout>

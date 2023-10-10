<x-layout page="Tasks">
    <x-slot:btn>
        <a href="#" class="btn btn-primary">
            Criar Tarefa
        </a>
    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do Dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="{{ Vite::asset('resources/images/icon-prev.png') }}" alt="Ícone Voltar">
                13 de Dez
                <img src="{{ Vite::asset('resources/images/icon-next.png') }}" alt="Ícone Avançar">
            </div>
        </div>

        <div class="graph_header-subtitle"> Tarefas: <b>3/6</b></div>

        <div class="graph-placeholder"></div>

        <div class="tasks_left_footer">
            <img src="{{ Vite::asset('resources/images/icon-info.png') }}" alt="Logo">
            Restam 3 tarefas para serem realizadas
        </div>
    </section>

    <section class="list">
        <div class="list_header">
            <select class="list_header-select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>
        <div class="task_list">
            @php
                $tasks = [['id' => 1, 'done' => false, 'title' => 'Minha Primeira Task', 'category' => 'Categoria 1'], ['id' => 2, 'done' => true, 'title' => 'Minha Segunda Task', 'category' => 'Categoria 2'], ['id' => 3, 'done' => false, 'title' => 'Minha Terceira Task', 'category' => 'Categoria 1']];
            @endphp
            @endphp
            <x-task :data=$tasks[0] />
            <x-task :data=$tasks[1] />
            <x-task :data=$tasks[2] />
        </div>
    </section>
</x-layout>

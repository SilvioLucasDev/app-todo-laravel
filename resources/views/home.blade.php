<x-layout page="Tasks">
    <x-slot:btn>
        <a href="{{ route('task.create') }}" class="btn btn-primary">
            Criar Tarefa
        </a>

        <a href="{{ route('auth.logout') }}" class="btn btn-primary">
            Sair
        </a>
    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do Dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <a href="{{ route('home.index', ['date' => $date_prev_button]) }}">
                    <img src="{{ Vite::asset('resources/images/icon-prev.png') }}" alt="Ícone Voltar">
                </a>
                {{ $date_as_string }}
                <a href="{{ route('home.index', ['date' => $date_next_button]) }}">
                    <img src="{{ Vite::asset('resources/images/icon-next.png') }}" alt="Ícone Avançar">
                </a>
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
            <select class="list_header-select" onchange="changeStatusFilter(this)">
                <option value="all_task">Todas as tarefas</option>
                <option value="task_pending">Tarefas Pendentes</option>
                <option value="task_done">Tarefas Realizadas</option>
            </select>
        </div>
        <div class="task_list">
            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach
        </div>
    </section>
</x-layout>

<script>
    function changeStatusFilter(e) {
        showAlltasks()
        if (e.value === 'task_pending') {
            document.querySelectorAll('.task_done').forEach(element => {
                element.style.display = 'none'
            });
        } else if (e.value === 'task_done') {
            document.querySelectorAll('.task_pending').forEach(element => {
                element.style.display = 'none'
            });
        }
    }

    function showAlltasks() {
        document.querySelectorAll('.task').forEach(element => {
            element.style.display = 'block'
        });
    }
</script>

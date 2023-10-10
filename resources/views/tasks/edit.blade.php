<x-layout page="Editar">
    <x-slot:btn>
        <a href="{{ route('home.index') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section class="task_section">
        <h1>Criar Tarefa</h1>
        <form action="{{ route('task.update', $task->id) }}" method="POST">
            @csrf
            @method('put')

            <x-form.checkbox-input name="is_done" label="Tarefa Realizada?" checked="{{ $task->is_done ?? '' }}">
            </x-form.checkbox-input>

            <x-form.text-input name="title" label="Título da Tarefa" type="text"
                placeholder="Digite o título da tarefa" required="required" value="{{ $task->title ?? '' }}">
            </x-form.text-input>

            <x-form.text-input name="due_date" label="Data de Realização" type="datetime-local" required="required"
                value="{{ $task->due_date ?? '' }}">
            </x-form.text-input>

            <x-form.select-input name="category_id" label="Categoria" required="required">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id === $task->category_id) selected @endif>
                        {{ $category->title }}
                    </option>
                @endforeach
            </x-form.select-input>

            <x-form.textarea-input name="description" label="Descrição da Tarefa"
                placeholder="Digite uma descrição para a sua tarefa" value="{{ $task->description ?? '' }}">
            </x-form.textarea-input>

            <x-form.form-button type="reset">
                <x-form.button type="reset">
                    Reetar
                </x-form.button>

                <x-form.button type="submit">
                    Atualizar Tarefa
                </x-form.button>
            </x-form.form-button>
        </form>
    </section>
</x-layout>

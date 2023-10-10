<div class="task">
    <div class="title">
        <input type="checkbox" @if ($data && $data['done']) checked @endif />
        <div class="task_title">{{ $data['title'] ?? '' }}</div>
    </div>

    <div class="priority">
        <div class="sphere"></div>
        <div>{{ $data['category'] ?? '' }}</div>
    </div>

    <div class="actions">
        <a href="{{ route('task.edit', $data['id'] ?? '') }}">
            <img src="{{ Vite::asset('resources/images/icon-edit.png') }}" alt="ícone Editar">
        </a>
        <a href="{{ route('task.destroy', $data['id'] ?? '') }}">
            <img src="{{ Vite::asset('resources/images/icon-delete.png') }}" alt="ícone Deletar">
        </a>
    </div>
</div>

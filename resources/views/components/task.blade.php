<div class="task">
    <div class="title">
        <input type="checkbox" disabled @if ($data && $data['is_done']) checked @endif />
        <div class="task_title">{{ $data['title'] ?? '' }}</div>
    </div>

    <div class="priority">
        <div class="sphere"></div>
        <div>{{ $data['category']->title ?? '' }}</div>
    </div>

    <div class="actions">
        <a href="{{ route('task.edit', $data['id'] ?? '') }}">
            <img src="{{ Vite::asset('resources/images/icon-edit.png') }}" alt="ícone Editar">
        </a>
        <form id="form_{{ $data['id'] ?? '' }}" method="post" action="{{ route('task.destroy', $data['id'] ?? '') }}">
            @csrf
            @method('DELETE')
        </form>
        <a href="#" onclick="document.getElementById('form_{{ $data['id'] ?? '' }}').submit()">
            <img src="{{ Vite::asset('resources/images/icon-delete.png') }}" alt="ícone Deletar">
        </a>
    </div>
</div>

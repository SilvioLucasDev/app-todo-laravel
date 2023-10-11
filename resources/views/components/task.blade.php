<div class="task">
    <div class="title">
        <form id="form_edit_{{ $data['id'] ?? '' }}" method="post" action="{{ route('task.update', $data['id'] ?? '') }}">
            @csrf
            @method('PATCH')
            <input type="checkbox" name="is_done" value="1"
                onchange="document.getElementById('form_edit_{{ $data['id'] ?? '' }}').submit()"
                @if ($data && $data['is_done']) checked @endif />
        </form>
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

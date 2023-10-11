<div class="input-area">
    <label for="{{ $name }}">
        {{ $label ?? '' }}
    </label>
    <input id="{{ $name }}" name="{{ $name }}" type="checkbox" {{ empty($required) ? '' : 'required' }}
        value="1" {{ empty($checked) ? '' : 'checked' }}>
</div>

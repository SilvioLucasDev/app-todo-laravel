<div class="input-area">
    <label for="{{ $name }}">
        {{ $label ?? '' }}
    </label>
    <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}"
        placeholder="{{ $placeholder ?? '' }}" {{ empty($required) ? '' : 'required' }}>
</div>

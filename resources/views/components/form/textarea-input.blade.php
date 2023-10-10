<div class="input-area">
    <label for="{{ $name }}">
        {{ $label ?? '' }}
    </label>

    <textarea id="{{ $name }}" name="{{ $name }}" placeholder="{{ $placeholder ?? '' }}"
        {{ empty($required) ? '' : 'required' }}>{{ !empty($value) ? $value : '' }}</textarea>
</div>

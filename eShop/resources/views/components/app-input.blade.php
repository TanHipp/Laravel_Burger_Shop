@php
    $label = $attributes['label'] ?? '';
    $name = $attributes['name'] ?? '';
    $value = $attributes['value'] ?? '';
    $type = $attributes['type'] ?? 'text';

    $old_value = old($name);
    $value = empty($old_value) ? $value : $old_value;
@endphp

<div class="mt-3">
    <label for="form-label">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" id="{{ $name }}"
        value="{{ $value }}">
    @error($name)
        <p class="text-danger font-italic">{{ $message }}</p>
    @enderror
</div>

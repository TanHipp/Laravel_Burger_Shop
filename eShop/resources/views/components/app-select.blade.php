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

    <select name="{{ $name }}" id="{{ $name }} "class="form-select">
        <option value="">Vui lòng chọn một danh mục</option>
        @foreach ($data as $item)
            @if ($selected != null && $item->displayMember == $selected)
                <option value="{{ $item->$valueMember }}" selected>{{ $item->$displayMember }}</option>
            @else
                <option value="{{ $item->$valueMember }}">{{ $item->$displayMember }}</option>
            @endif
        @endforeach
    </select>

    @error($name)
        <p class="text-danger font-italic">{{ $message }}</p>
    @enderror
</div>

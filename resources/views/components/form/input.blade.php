<!-- resources/views/components/form/input.blade.php -->
@props(['type' => 'text', 'name', 'label', 'value' => '', 'placeholder' => '', 'required' => false])

<div class="form-group">
    @if($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'form-control']) }}
    >
    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

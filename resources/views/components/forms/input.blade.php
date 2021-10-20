@props(['label', 'id', 'disabled' => false, 'model' => false, 'element' => 'text', 'options' => false])

<div {{ $attributes->merge(['class' => 'mt-4']) }}>
    <label for="{{ $id }}" class="block font-medium text-sm text-gray-700">
        {{ $label ?? $slot }}
        <x-dynamic-component :component="'forms.' . $element" :id="$id" :disabled=$disabled :model=$model :options="$options" />
    </label>
    @error($id)
        <p class="text-sm text-red-600">
            {{ $message }}
        </p>
    @enderror
</div>

@props(['id', 'disabled', 'model'])
<textarea id="{{ $id }}"
    {{ $disabled ? 'disabled' : '' }}
    type="text"
    class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
    {{ $model ? 'wire:model.lazy=' . $model : '' }}
></textarea>

@props(['placeholder' => 'Type to search...', 'model' => 'searchQuery'])
<div class="relative flex w-full flex-wrap items-stretch px-4 mb-2 mx-auto">
    <span
        class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
        <svg class="w-4 h-4 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24">
            <path
                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
            </path>
        </svg>
    </span>
    <input wire:model="{{ $model }}" type="text" placeholder="{{ $placeholder }}"
    class="px-3 py-3 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-300 outline-none focus:outline-none focus:ring w-full pl-10" />
</div>

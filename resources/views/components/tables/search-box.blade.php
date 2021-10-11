@props(['placeholder' => 'Type to search...', 'model' => 'searchQuery'])
<div class="container flex mx-auto ">
    <div class="flex border-2 rounded">
        <button class="flex items-center justify-center px-4 border-r">
            <svg class="w-4 h-4 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24">
                <path
                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z">
                </path>
            </svg>
        </button>
        <input wire:model="{{ $model }}" type="text" class="px-4 py-2 border-0 bg-gray 100 text-gray-800" placeholder="{{ $placeholder }}">
    </div>
</div>

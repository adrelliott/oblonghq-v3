@props(['placeholder' => 'Type to search...', 'model' => 'searchQuery'])
<div class="w-full px-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
    <div class="flex focus-within:text-purple-500">
        <svg
            class="w-4 h-4"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
        >
            <x-icons.search />
        </svg>
        <input
        wire:model="{{ $model }}"
        class=" border-0"
        type="text"
        placeholder="{{ $placeholder }}"
        aria-label="Search"
        />
    </div>
</div>

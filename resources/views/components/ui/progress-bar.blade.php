<div class="relative pt-1 w-3/4 mx-auto">
    <div class="flex mb-2 items-center justify-between">
        <div>
            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-indigo-600 bg-indigo-100">
                {{ $label }}
            </span>
        </div>
        <div class="text-right">
            <span class="text-xs font-semibold inline-block text-indigo-600">
                {{ $progress }}
            </span>
        </div>
    </div>
    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-indigo-200">
        {{ $slot }}
    </div>
</div>

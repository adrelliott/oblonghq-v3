@props(['submit', 'actions' => false, 'buttonText' => 'Save', 'on' => false ])
<form wire:submit.prevent="{{ $submit }}">
    @csrf
    {{ $slot }}
    @if ($actions)
        <div class="flex items-center justify-end px-4 py-3 mt-4 text-right sm:px-6 ">
            <div x-data="{ shown: false, timeout: null }"
                x-init="@this.on('{{ $submit }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
                x-show.transition.out.opacity.duration.1500ms="shown"
                x-transition:leave.opacity.duration.1500ms
                style="display: none;"
                class="text-sm text-gray-600 px-2 py-1 bg-green-200 rounded-md"
            >
                Saved
            </div>
            <button
                type="submit"
                wire:loading.attr="disabled"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
            >
                {{ $buttonText }}
            </button>
        </div>
    @endif
</form>

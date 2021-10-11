<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <x-forms.form submit="sibmiTgoeshere">
        <x-slot name="title">
            The title
        </x-slot>

        <x-slot name="description">
            The description
        </x-slot>

        <x-slot name="form">
            The form
        </x-slot>

        <x-slot name="actions">
        <x-forms.action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-forms.action-message>

        <x-forms.button>
            {{ __('Save') }}
        </x-forms.button>
    </x-slot>
    </x-forms.form>
</div>

</div>

<div>
    <h1>{{ $survey->name }}</h1>
    <div class="bg-white max-w-2xl p-6 m-10">
        <x-form wire:submit.prevent="saveSurvey">
            @wire('defer')
                <x-form-input name="survey.name"  label="Survey name" />
                <x-form-submit class="bg-black">Save</x-form-submit>
            @endwire
        </x-form>

    </div>

    <div class="bg-white max-w-2xl p-6 mt-16">
        <h1>Sections</h1>


    </div>


</div>

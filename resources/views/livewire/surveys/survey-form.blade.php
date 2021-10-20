<div>
    <x-slot name="header">
        <div class="flex  justify-between items-end">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ $pageTitle }}
            </h2>
            @if($success)
                <div
                    x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
                    x-transition:leave.opacity.duration.1500ms
                >
                    <div class=" inset-y-0 flex items-center text-green-700 pr-4 ">
                        <svg
                            class="w-4 h-4"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 512 512"
                        >
                            <x-icons.checkmark />
                        </svg>
                        <div class="text-sm text-green-700 mr-6">
                            Saved
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto py-4 px-10 sm:px-6 lg:px-8 bg-white rounded-lg border-1 border-gray-200 border-[1px]">
        <x-forms.wizard-progress-bar :currentStep="$currentStep" :totalSteps="$totalSteps" />
        <x-forms.form submit="saveSurvey" button-text="Save & Continue">
            @if($currentStep == 1)
                <x-forms.input id="name" label="Survey Name" model="survey.name" />
                <x-forms.input id="description" label="Description" model="survey.description" element="textarea" />
                <x-forms.select id="client_id" label="Client" model="survey.client_id" :options="$clients" />
            @elseif($currentStep == 2)
                <x-forms.input id="intro_page" label="Introduction page" model="survey.intro_page" element="textarea" />
                <x-forms.input id="outro_page" label="Survey completed page" model="survey.outro_page" element="textarea" />
            @elseif($currentStep == 3)
                <code>Step 3</code>
            @else
                <code>Uh oh</code>
            @endif
            <div class="flex items-center justify-end px-4 py-3 mt-4 text-right sm:px-6 ">
                <button
                    type="submit"
                    wire:loading.attr="disabled"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                >
                    Save & continue
                </button>
            </div>

        </x-forms.form>
    </div>
    <div class="flex  mt-4 text-left ">

</div>

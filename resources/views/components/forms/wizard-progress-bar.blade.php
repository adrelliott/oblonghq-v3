@props([
    'currentStep' => 1,
    'totalSteps' => 3,
])
<div class="relative pt-1 w-3/4 mx-auto mb-6">
    <div class=" mb-2 text-right">
        <span class="text-sm xfont-semibold inline-block text-gray-500">
                Step {{ $currentStep }} of {{ $totalSteps }}
            </span>
        <!-- <div>
            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-indigo-600 bg-indigo-100">
            </span>
        </div> -->
       <!--  <div class="text-right m">

        </div> -->
    </div>
    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-indigo-200">
        <div
            style="width: {{ (intval($currentStep) / intval($totalSteps) *100) }}%"
            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500"
        ></div>
        <div style="width: {{ 100 - ((intval($currentStep) / intval($totalSteps) *100)) }}%"
            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gray-200"
        ></div>
    </div>
</div>

<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Surveys') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto xpy-10 sm:px-6 lg:px-8">
        <div class="">
            <x-tables.search-box placeholder="Find surveys or clients..." />
        </div>
        <x-tables.table>
            <x-tables.thead>
                <x-tables.th>
                    Name
                </x-tables.th>
                <x-tables.th>
                    Client
                </x-tables.th>
                <x-tables.th class="text-center">
                    No of Questions
                </x-tables.th>
                <x-tables.th class="text-center">
                    Actions
                </x-tables.th>
            </x-tables.thead>
            <x-tables.tbody>
                @forelse($surveys as $survey)
                    <x-tables.tr>
                        <x-tables.td>
                            {{ $survey->name }}
                        </x-tables.td>
                        <x-tables.td>
                            {{ $survey->client->name }}
                        </x-tables.td>
                        <x-tables.td class="text-center">
                            {{ $survey->sections->sum('question_count') }}
                        </x-tables.td>
                        <x-tables.td class="text-center">
                            <x-ui.button-link href="{{ route('app.surveys.show', ['survey' => $survey->id])}}" class="text-xs px-2 py-1">
                                View
                            </x-ui.button-link>
                            <x-ui.button-link href="{{ route('app.surveys.show', ['survey' => $survey->id])}}" class="text-xs px-2 py-1">
                                Clone
                            </x-ui.button-link>
                        </x-tables.td>
                    </x-tables.tr>
                @empty
                    <x-tables.tr>
                        <td colspan="">
                            <p class="px-4 py-4">No surveys found. <a href="{{ route('app.surveys.create') }}" class="border-b border-gray-600">Create a new one?</a></p>
                        </td>
                    </x-tables.tr>
                @endforelse
            </x-tables.tbody>
        </x-tables.table>
        <div class="mt-3">
            {{ $surveys->links() }}
        </div>
        <div class="mt-4 text-right">
            <x-ui.button-link href="{{ route('app.surveys.create') }}">
                Create a survey
            </x-ui.button-link>
        </div>
    </div>
</div>

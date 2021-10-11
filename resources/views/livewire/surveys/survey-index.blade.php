<div>
    This is all your surveys:

    <ul>
        @foreach($surveys as $survey)
            <li>
                <a href="{{ route('app.surveys.show', ['survey' => $survey->id]) }}">{{ $survey->name }}</a>
            </li>
        @endforeach
    </ul>
</div>

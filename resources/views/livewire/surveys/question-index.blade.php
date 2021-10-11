<div>
    <h1>All Questions from Survey with id {{ $survey->id }}</h1>
    <ul>
        @foreach($survey->sections as $section)
            <li>
                <a href="{{ route('app.sections.show', ['survey' => $survey->id, 'section' => $section->id]) }}">{{ $section->name }}</a>
            </li>
        @endforeach
    </ul>
</div>

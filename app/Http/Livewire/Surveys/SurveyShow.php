<?php

namespace App\Http\Livewire\Surveys;

use Livewire\Component;
use App\Models\Surveys\Survey;

class SurveyShow extends Component
{
    public Survey $survey;

    protected $rules = [
        'survey.name' => 'required|string|min:3',
        'survey.description' => 'string|max:500',
    ];

    public function render()
    {
        return view('livewire.surveys.survey-show');
    }

    public function saveSurvey()
    {
        $this->validate();
        $this->survey->save();
    }
}

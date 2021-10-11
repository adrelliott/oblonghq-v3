<?php

namespace App\Http\Livewire\Surveys;

use Livewire\Component;
use App\Models\Surveys\Survey;

class SurveyIndex extends Component
{
    public $surveys;

    public function render()
    {
        $this->surveys = Survey::select('id', 'name', 'description')->withCount('sections')->get();
        return view('livewire.surveys.survey-index');
    }
}

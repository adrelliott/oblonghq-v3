<?php

namespace App\Http\Livewire\Surveys;

use Livewire\Component;
use App\Models\Surveys\Survey;

class QuestionIndex extends Component
{
    public Survey $survey;

    public function render()
    {

        return view('livewire.surveys.question-index');
    }
}

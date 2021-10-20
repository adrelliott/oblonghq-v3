<?php

namespace App\Http\Livewire\Surveys;

use Livewire\Component;
use App\Models\Surveys\Survey;
use App\Models\Crm\Business;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Log;

class SurveyForm extends Component
{
    public $survey;
    public $clients;
    public $pageTitle;
    public $routeName;
    public $totalSteps = 3;
    public $currentStep = 1;
    public $success = false;

    protected $rules = [
        'survey.name' => 'required|min:2',
        'survey.description' => '',
        'survey.client_id' => 'required',
        'survey.intro_page' => '',
        'survey.outro_page' => '',
        'survey.current_step_no' => 'integer',
    ];

    public function mount(Survey $survey)
    {
        $this->clients = Business::select(['name', 'id'])
            ->orderBy('name')
            ->get()
            ->pluck('name', 'id')
            ->toArray();
        $this->survey = $survey;
        $this->routeName = Request::route()->getName();
        $this->pageTitle = $this->getPageTitle();
        // $this->currentStep = $this->survey->current_step_no;
    }

    public function render()
    {
        return view('livewire.surveys.survey-form');
    }

    public function saveSurvey()
    {
        log::info($this->survey);
        // Validate and save
        $data = $this->validate();
        $this->survey->save($data['survey']);

        // Display success and set next step
        $this->success = true;
        $this->setCurrentStep();
    }

    private function setCurrentStep()
    {
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }

    private function getPageTitle()
    {
        if(str_contains($this->routeName, 'create')) {
            return 'Create a new survey';
        }
        else return 'Edit this survey';
    }

    private function getProgress()
    {
        return $this->survey->current_step_no;
    }
}

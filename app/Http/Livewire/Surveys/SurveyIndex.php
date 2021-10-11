<?php

namespace App\Http\Livewire\Surveys;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Surveys\Survey;

class SurveyIndex extends Component
{
    use WithPagination;

    public $searchQuery;

    public function mount()
    {
        $this->searchQuery = '';
    }

    public function render()
    {
        $surveys = Survey::with('client')
            ->withCount('sections')
            ->latest()
            ->when($this->searchQuery != '', function($query) {
                return $query->where('name', 'like', '%' . $this->searchQuery . '%')
                        ->orWhereHas('client', function ($query)  {
                            $query->where('name', 'like', '%' . $this->searchQuery . '%');
                        });
            })
            ->paginate(7);
        return view('livewire.surveys.survey-index', compact('surveys'));
    }
}

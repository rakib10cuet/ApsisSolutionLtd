<?php

namespace App\Http\Livewire\Writer;

use Livewire\Component;

class WriterDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.writer.writer-dashboard-component')->layout('layouts.base');
    }
}

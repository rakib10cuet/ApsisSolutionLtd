<?php

namespace App\Http\Livewire\Viewer;

use Livewire\Component;

class ViewerDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.viewer.viewer-dashboard-component')->layout('layouts.base');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $status;

    public function render()
    {
        return view('livewire.welcome', [
            'status' => $this->status
        ]);
    }

    public function clickExample()
    {
        $this->status = !$this->status;
    }

    public function refreshExample() {
        
    }
}

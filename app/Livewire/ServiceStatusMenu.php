<?php

namespace App\Livewire;

use App\Models\Server;
use App\Models\Service;
use Livewire\Component;
use Livewire\Attributes\On;

class ServiceStatusMenu extends Component
{
    public $server;
    public $services;
    public $userRole;

    #[On('serverAddedToService')]
    #[On('serviceRemovedFromServer')]
    public function render()
    {
        $this->services = $this->server->services()->get();
        return view('livewire.service-status-menu');
    }
}

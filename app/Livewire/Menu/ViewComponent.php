<?php

namespace App\Livewire\Menu;

use Livewire\Component;
use App\Models\Menu;

class ViewComponent extends Component
{
    public $hideId;
    public function mount($id){
        $this->hideId = $id;
    }

    public function render()
    {
        $menu = Menu::find($this->hideId);
        return view('livewire.menu.view-component',compact('menu'));
    }
}

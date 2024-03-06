<?php

namespace App\Livewire\Page;

use Livewire\Component;
use App\Models\Menu;

class PageComponent extends Component
{
    public $hideId;
    public function mount($id){
        $this->hideId = $id;
    }

    public function render()
    {
        $menu = Menu::find($this->hideId);
        return view('livewire.page.page-component',compact('menu'));
    }
}

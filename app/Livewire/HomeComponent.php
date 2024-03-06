<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Slide;

class HomeComponent extends Component
{
    public function render()
    {

        $slide = Slide::select('name','img')->where('del',1)->orderBy('id','desc')->get();
        return view('livewire.home-component',compact('slide'));
    }
}

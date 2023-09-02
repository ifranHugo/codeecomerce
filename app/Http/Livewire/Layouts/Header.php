<?php

namespace App\Http\Livewire\Layouts;

use App\Models\Category;
use Livewire\Component;

class Header extends Component
{

    public $categoriesmen;
    public $categorieswomen;
    public function render()
    {

        $this->categoriesmen = Category::where('parent_id',1)->get();
        $this->categorieswomen= Category::where('parent_id',2)->get();
        return view('livewire.layouts.header',collect('categoriesmen','categorieswomen'));
    }
}

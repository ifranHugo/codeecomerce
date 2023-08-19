<?php

namespace App\Http\Livewire\Administrador;

use App\Models\Category;
use Livewire\Component;

class PaginaPerfilAdministrador extends Component
{

    public $categories;
    public function render()
    {
        $this->categories =Category::all();
        return view('livewire.administrador.pagina-perfil-administrador');
    }
}

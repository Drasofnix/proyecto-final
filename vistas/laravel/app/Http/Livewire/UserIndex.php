<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UserIndex extends Component
{
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/usuario');
        $usuarios = $response->json();
        return view('livewire.userindex', compact('usuarios'));
    }
}

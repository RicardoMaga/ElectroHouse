<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Produto;

class Produtos extends Component
{

    public $nome;
    public $preco;
    public $modelo;
    public function render()
    {
        return view('livewire.produtos');
    }

    public function store()
    {
        // Valida os dados de entrada
        $this->validate([
            'nome' => 'required|max:255',
            'modelo' => 'required',
            'preco' => 'required|numeric'
        ]);

        // Cria um novo produto
        Produto::create([
            'nome' => $this->nome,
            'modelo' => $this->modelo,
            'preco' => $this->preco
        ]);

    
}}

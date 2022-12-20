<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Produto;
use Livewire\WithPagination;

class Produtos extends Component
{

    use WithPagination;
    public $nome;
    public $preco;
    public $modelo;
    public $marca;
    public $modelId;
    public function render()
    {
        return view('livewire.produtos',['data'=>$this->read()]);
    }

    public function read()
    {
        return Produto::paginate(10000);
    }
 //regras de inserçao na base de dados
    public function rules(){
        return[
            'nome'=>'required',
            'modelo'=>'required',
            'preco'=>'required',
            'marca'=>'required',
        ];
    }
// Mapear o modelo do componente
    public function modelData(){
        return[
            'nome' => $this->nome,
            'modelo' => $this->modelo,
            'preco' => $this->preco,
            'marca' => $this->marca
        ];
        
    }
//carregar o modelo
    public function loadModel(){
        $data=Produto::find($this->modelId);
        $this->nome=$data->nome;
        $this->modelo=$data->modelo;
        $this->preco=$data->preco;
        $this->marca=$data->marca;

    }
    //guardar
    public function store()
    {
       $this->validate();
       Produto::create($this->modelData());
       $this->reset();

        

 
    }
}

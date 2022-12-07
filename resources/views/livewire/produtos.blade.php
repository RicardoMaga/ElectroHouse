<div>
<nav>
  <button><a href="/">Início</a></button>
  <button><a href="/login">Login</a></button>
  <button ><a href="/register">Registar</a></button>
</nav>
</br>

    <form style="text-align: center;" wire:submit.prevent="store" method="post" action="http://127.0.0.1:8000">
        <label>Nome</label>
        <input type="text" style="align: left;" wire:model="nome">
        @error('nome') <span>{{ $message }}</span> @enderror
        <br>
        <br>

        <label>Marca</label>
        <input type="text" style="align: left;" wire:model="marca">
        @error('Marca') <span>{{ $message }}</span> @enderror
        <br>
        <br>
  
        <label>Modelo</label>
        <input type="text" style="align: left;" wire:model="modelo">
        @error('modelo') <span>{{ $message }}</span> @enderror
        <br>
        <br>
    
        
        <label>Preço</label>
        <input type="text" style="text-align: left;" wire:model="preco">
        @error('preco') <span>{{ $message }}</span> @enderror
        <br>
        <br>

        <button style="background-color: #757575" type="submit">Criar produto</button>
        
    </form>
</div>
<style>
  nav {
    display: flex;
    background-color: #333;

  }
  button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
  }
  button:hover {
    background-color: #444;
  }
 


</style>



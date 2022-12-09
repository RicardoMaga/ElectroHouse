
<nav>
  <button><a href="/">Home</a></button>
  <button class="hotbar_button"><a href="/login">Login</a></button>
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
<
<style>
  nav {
    display: flex;
    background-color: #333;

  }
  button {
    padding: 10px 20px;
    font-size: 23px;
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
  }
  button:hover {
    background-color: #444;
  }
  .hotbar_button{
    position: fixed;
    top: 0;
    right: 0;
  }

</style>



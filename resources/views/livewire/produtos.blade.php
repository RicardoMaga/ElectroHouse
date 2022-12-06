<div>
<nav>
  <button><a href="/">Início</a></button>
</nav>
</br>
    <form wire:submit.prevent="store" method="post" action="http://127.0.0.1:8000">
        <label>Nome</label>
        <input type="text" wire:model="nome">
        @error('nome') <span>{{ $message }}</span> @enderror

        <label>Marca</label>
        <input type="text" wire:model="marca">
        @error('Marca') <span>{{ $message }}</span> @enderror

        <label>Modelo</label>
        <input type="text" wire:model="modelo">
        @error('modelo') <span>{{ $message }}</span> @enderror

        <label>Preço</label>
        <input type="text" wire:model="preco">
        @error('preco') <span>{{ $message }}</span> @enderror

        <button type="submit">Criar produto</button>
    </form>
</div>
<style>
  nav {
    display: flex;
    justify-content: space-between;
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



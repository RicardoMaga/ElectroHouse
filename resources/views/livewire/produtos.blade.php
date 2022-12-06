<div>
    <form wire:submit.prevent="store">
        <label>Nome</label>
        <input type="text" wire:model="nome">
        @error('nome') <span>{{ $message }}</span> @enderror

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

<nav>
  <button><a href="/">Início</button>
</nav>

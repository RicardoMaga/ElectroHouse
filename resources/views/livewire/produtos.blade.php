<div>
<nav class="bg-green-700 h-15 flex">
<a href="/" class=" hover:bg-gray-800 text-2xl pt-4 pr-4 pl-4 pb-4 bg-green-700 text-white">ElectroHouse</a>
</nav>

<div class=" text-2xl text-center" >
Produtos
</div>
<br>
<div>
    <form class= "text-center" style="" wire:submit.prevent="store()"  >
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
        <input type="text" style="align: left;" wire:model="preco">
        @error('preco') <span>{{ $message }}</span> @enderror
        <br>
        <br>
<div>
        <button class="pl-4 pr-4 pt-2 pb-2 text-2xl bg-neutral-600 text-white" type="submit">Adicionar produto</button>
        </div>
    </form>

    
    </div>
    </div>




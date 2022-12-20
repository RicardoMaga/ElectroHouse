
<div>

        <nav class="bg-green-700 h-15 flex">
             <a href="/" class="text-3xl pt-3 pr-7 pl-7 pb-3 hover:bg-gray-800 bg-green-700 text-white">ElectroHouse</a>
        </nav>

          <div class=" text-2xl text-center">
               Produtos
          </div>
  <br>
    <div>
         <form class="fixed" wire:submit.prevent="store()"  >
           <label>Nome</label>
           <input type="text" style="align: left;" wire:model="nome">
           @error('nome') <span>{{ $message }}</span> @enderror
           

           <label>Marca</label>
           <input type="text" style="align: left;" wire:model="marca">
           @error('Marca') <span>{{ $message }}</span> @enderror
    
  
           <label>Modelo</label>
        <input type="text" style="align: left;" wire:model="modelo">
        @error('modelo') <span>{{ $message }}</span> @enderror
        
    
        
        <label>Preço</label>
        <input type="text" style="align: left;" wire:model="preco">
        @error('preco') <span>{{ $message }}</span> @enderror
        <br>
        <br>
    
   <div>
        <button class=" align:center pl-4 pr-4 pt-2 pb-2 text-2xl hover:bg-gray-800 bg-neutral-600 text-white" type="submit">Adicionar produto</button>
        </div>
        <br>
      <div class="flex justify-center bg-slate-400">

        <table>
            <thead>
                <tr>
                    <th class="border">Id:</th>
                    <th class="border">Nome</th>
                    <th class="border">marca</th>
                    <th class="border">modelo</th>
                    <th class="border">preço</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $item)
                <tr>
                    <th class="border">{{$item->id}}</th>
                    <th class="border">{{$item->nome}}</th>
                    <th class="border">{{$item->marca}}</th>
                    <th class="border">{{$item->modelo}}</th>
                    <th class="border">{{$item->preco}}</th>
                </tr>
                @endforeach
            </tbody>


        </table>
    </div>
</div>
    
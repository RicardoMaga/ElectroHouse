<x-guest-layout>
    
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
          
        </x-slot>
        

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
                
            </div>
        @endif
 
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Esqueceu-se da Password?') }}
                    </a>
                @endif
</div>
<div>
                     <x-jet-button>
                        <a href="/register">
                           {{__('Registar') }}
</a>
                     </x-jet-button>
                <x-jet-button class="ml-4">
                    {{ __('Entrar') }}
                </x-jet-button>
            </div>
        </form>
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
    </x-jet-authentication-card>
</x-guest-layout>

@extends('auth.auth')
@section('auth')


        <!-- logo icon optional -->
        {{-- <div class="hidden">
          <img class="w-12" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="Socialite html template">
        </div> --}}

        <!-- title -->
        <div>
          <h2 class="text-2xl font-semibold mb-1.5"> Connectez vous </h2>
          <p class="text-sm text-gray-700 font-normal">Vous n'avez pas de compte ? <a href="{{route("register.create")}}" class="text-blue-700"> Sinscrire ici </a></p>
        </div>
 

        <!-- form -->
        <form method="POST" action="{{route("login.store")}}" class="space-y-7 text-sm text-black font-medium dark:text-white"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
            
          <!-- email -->
          <div>
              <label for="email" class="">Addresse Email</label>
              <div class="mt-2.5">
                  <input id="email" name="email" type="email" autofocus=""  placeholder="Email" required="" class="@error('email') is-invalid @enderror !w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"> 
              </div>
          </div>
          @error('email')
            <div class="text-danger" role="alert">{{ $message }}</div>
          @enderror
          <!-- password -->
          <div>
            <label for="email" class="">Mot de Passe</label>
            <div class="mt-2.5">
                <input id="password" name="password" type="password" placeholder="***"  class="@error('password') is-invalid @enderror !w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">  
            </div>
          </div>
          @error('password')
            <div class="text-danger" role="alert">{{ $message }}</div>
          @enderror

          <div class="flex items-center justify-between">

            <div class="flex items-center gap-2.5">
              <input id="rememberme" name="rememberme" type="checkbox" value="true">
              <label for="rememberme" class="font-normal">Se souvenir de moi</label>
            </div>
            <a href="{{route('forgot.create')}}" class="text-blue-700"> Mot de passe oublié </a>
          </div>

          <!-- submit button -->
          <div>
            <button type="submit" class="button bg-primary text-white w-full">Se Connecter</button>
          </div>

          <div class="text-center flex items-center gap-6"> 
            <hr class="flex-1 border-slate-200 dark:border-slate-800"> 
            Or continué avec
            <hr class="flex-1 border-slate-200 dark:border-slate-800">
          </div> 

          <!-- social login -->
          <div class="flex gap-2" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 400 ;repeat: true">
            <a href="#" class="button flex-1 flex items-center gap-2 bg-primary text-white text-sm"> <ion-icon name="logo-facebook" class="text-lg"></ion-icon> facebook  </a>
            <a href="#" class="button flex-1 flex items-center gap-2 bg-sky-600 text-white text-sm"> <ion-icon name="logo-twitter"></ion-icon> twitter  </a>
            <a href="#" class="button flex-1 flex items-center gap-2 bg-black text-white text-sm"> <ion-icon name="logo-github"></ion-icon> github  </a>
          </div>
          
        </form>


@endsection
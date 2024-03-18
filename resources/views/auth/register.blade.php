@extends('auth.auth')
@section('auth')

    <div>
        <h2 class="text-2xl font-semibold mb-1.5"> S'inscrire pour commencer </h2>
        <p class="text-sm text-gray-700 font-normal">Vous avez déjà un compte ? <a href="{{route('login')}}" class="text-blue-700">Se connecter ici!</a></p>
    </div>

    <!-- form -->
    <form method="POST" action="{{url('register')}}" class="space-y-7 text-sm text-black font-medium dark:text-white"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">

        <div class="grid grid-cols-2 gap-4 gap-y-7">
        <!-- first name -->
            <div>
                <label for="email" class="">Prénoms</label>
                <div class="mt-2.5">
                    <input id="first" name="prenom" type="text"  autofocus="" placeholder="Prénom" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"> 
                </div>
            </div>

            <!-- Last name -->
            <div>
                <label for="email" class="">Nom</label>
                <div class="mt-2.5">
                    <input id="last" name="nom" type="text" placeholder="Nom" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"> 
                </div>
            </div>
            
            <!-- email -->
            <div class="col-span-2">
                <label for="email" class="">Addresse Email</label>
                <div class="mt-2.5">
                    <input id="email" name="email" type="email" placeholder="Email" required="" class="@error('email') is-invalid @enderror !w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"> 
                </div>
            </div>
            @error('email')
                <div class="text-danger" role="alert">{{ $message }}</div>
            @enderror
            <!-- phone -->
            <div class="col-span-2">
                <label for="phone" class="">Telephone</label>
                <div class="mt-2.5">
                    <input id="phone" name="phone" type="text" placeholder="Telephone" required="" class="@error('email') is-invalid @enderror !w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"> 
                </div>
            </div>

            <!-- sexe -->
            <div >
                <label for="sexe" class="">Sexe</label>
                <div class="mt-2.5">
                    <select required class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"  name="sexe" id="sexe">
                        <option value="">---</option>
                        <option value="Masculin">Masculin</option>
                        <option value="Féminin">Féminin</option>
                    </select>
                </div>
            </div>

            <!-- Zones d'interventions -->
            <div >
                <label for="localite" class="">Zones d'interventions</label>
                <div class="mt-2.5">
                    <select required class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"  name="interventions" id="localite">
                        <option value="">---</option>
                        <option value="Cotonou">Cotonou</option>
                        <option value="Abomey-Calavi">Abomey-Calavi</option>
                        <option value="Porto-novo">Porto-novo</option>
                        <option value="Parakou">Parakou</option>
                        <option value="Bohicon">Bohicon</option>
                        <option value="Djougou">Djougou</option>
                        <option value="Abomey">Abomey</option>
                        <option value="Adjohoun">Adjohoun</option>
                    </select>
                </div>
            </div>

            <!-- statut --> 
            <div >
                <label for="statut" class="">Statut</label>
                <div className="mt-2.5">
                    <select required class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5" name="statut" id="statut">
                        <option value="">---</option>
                        <option value="Activiste">Activiste</option>
                        <option value="OSC">OSC</option>
                    </select>
                </div>
            </div>
            <!-- password -->
            <div class="col-span-2">
                <label for="email" class="">Password</label>
                <div class="mt-2.5">
                    <input id="password" name="password" type="password" placeholder="***"  class="@error('password') is-invalid @enderror !w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">  
                </div>
            </div>
            @error('password')
                <div class="text-danger" role="alert">{{ $message }}</div>
            @enderror

            <!-- Confirm Password -->
            <div class="col-span-2">
                <label for="email" class="">Confirm Password</label>
                <div class="mt-2.5">
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="***"  class="@error('password_confirmation') is-invalid @enderror !w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5">  
                </div>
            </div>
            @error('password_confirmation')
                <div class="text-danger" role="alert">{{ $message }}</div>
            @enderror

            <div class="col-span-2">

                <label for="accept" class="inline-flex items-center" id="rememberme">
                <input required type="checkbox" name="accept" id="accept-terms" class="@error('accept-terms') is-invalid @enderror !rounded-md accent-red-800" />
                <span class="ml-2">J'accepte <a href="#" class="text-blue-700 hover:underline">les termes et coditions d'utilisations </a> </span>
                </label>
            
            </div>
            @error('accept-terms')
                <div class="text-danger" role="alert">{{ $message }}</div>
            @enderror


            <!-- submit button -->
            <div class="col-span-2">
                <button type="submit" class="button bg-primary text-white w-full">Commencer</button>
            </div>
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
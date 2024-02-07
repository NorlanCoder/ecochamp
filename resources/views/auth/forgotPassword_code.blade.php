@extends('auth.auth')
@section('auth')

          <!-- form -->
          <form method="POST" action="{{route("forgot_code.store")}}" class="space-y-7 text-sm text-black font-medium dark:text-white"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
            
            <label for="email" class="">Modifier votre mot de passe</label>
           
            <!-- email -->
            <div>
                <label for="password" class="">Nouveau mot de passe</label>
                <div class="mt-2.5">
                    <input id="password" name="password" type="password" autofocus="" placeholder="password" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"> 
                </div>
            </div>

            <div>
              <label for="confirmation_password" class="">Confirmer nouveau mot de passe</label>
              <div class="mt-2.5">
                  <input id="confirmation_password" name="confirmation_password" type="confirmation_password" autofocus="" placeholder="confirmation_password" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"> 
              </div>
            </div>
  
            <!-- submit button -->
            <div>
              <button type="submit" class="button bg-primary text-white w-full">Envoyer</button>
            </div>
  
            
          </form>

@endsection
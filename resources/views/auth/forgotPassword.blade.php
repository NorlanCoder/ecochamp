@extends('auth.auth')
@section('auth')

          <!-- form -->
          <form method="POST" action="{{route("forgot.store")}}" class="space-y-7 text-sm text-black font-medium dark:text-white"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
            <!-- email -->
            <div>
                <label for="email" class="">Addresse Email</label>
                <div class="mt-2.5">
                    <input id="email" name="email" type="email" autofocus="" placeholder="Email" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"> 
                </div>
            </div>
  
            <!-- submit button -->
            <div>
              <button type="submit" class="button bg-primary text-white w-full">Envoyer</button>
            </div>
  
            
          </form>

@endsection
<div class="hidden lg:p-20" id="create-post" uk-modal="">

    <div class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white p-7 shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">

        <div class="text-center py-3 border-b -m-7 mb-0 dark:border-slate-700">
            <h2 class="text-sm font-medium"> Créer un poste </h2>

            <!-- close button -->
            <button type="button" class="button__ico absolute top-0 right-0 m-2.5 uk-modal-close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </div>
 
        <form action="{{ route('poste.store') }}" method="POST" enctype="multipart/form-data" id="form-data-post_create">
            @csrf

            <div class="space-y-5 mt-7">

                <div> 
                    <label for="activite" class="text-base">Activité </label>
                    <input type="text" id="activite"  class="w-full mt-3" required="" name="activite">
                </div>

                <div >
                    <label for="description" class="text-base">Description</label>
                    <textarea class="w-full mt-3" id="description" rows="3" name="description"></textarea>
                </div>

                <div class="mb-3">
                    <label for="tags" class="text-base">Tag:</label>
                    <input class="form-control" id="tags" type="text" data-role="tagsinput" name="tags">
                    @if ($errors->has('tags'))
                    <span class="text-danger">{{ $errors->first('tags') }}</span>
                    @endif
                </div>
    
                <div>  
                    <div class="w-full h-72 relative border1 rounded-lg overflow-hidden bg-[url('../images/ad_pattern.html')] bg-repeat">
                    
                        <label for="createpostusUrl" class="flex flex-col justify-center items-center absolute -translate-x-1/2 left-1/2 bottom-0 z-10 w-full pb-6 pt-10 cursor-pointer bg-gradient-to-t from-gray-700/60">
                            <input id="createpostusUrl" type="file" class="hidden" name="image"/>
                            <ion-icon name="image" class="text-3xl text-teal-600"></ion-icon>
                            <span class="text-white mt-2">Parcourir pour télécharger l'image </span>
                        </label>
    
                        <img id="createpostImage" alt="Uploaded Image" style="display:none;" class="w-full h-full absolute object-cover">
    
                    </div>
    
                </div>
                
                <div class="flex justify-between items-center">
    
                    <div class="flex items-start gap-2">
                        {{-- <ion-icon name="time-outline" class="text-3xl text-sky-600  rounded-full bg-blue-50 dark:bg-transparent"></ion-icon>
                        <p class="text-sm text-gray-500 font-medium"> Your Status will be available <br> for <span class="text-gray-800"> 24 Hours</span> </p> --}}
                    </div>
    
                    <button type="button" class="button bg-blue-500 text-white px-8 submit-form-post"> Créer</button>
    
                </div>
            

            </div>

    </form>
    
    </div>

</div>
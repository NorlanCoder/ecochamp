<div class="hidden lg:p-20" id="create-activity" uk-modal="">

    <div class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white p-7 shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">

            <div class="text-center py-4 border-b mb-0 dark:border-slate-700">
                <h2 class="text-sm font-medium text-black"> Créer une activité </h2>

                <!-- close button -->
                <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>

        
            <form action="{{ route('activity.store') }}" method="POST" enctype="multipart/form-data" id="form-data-activite_create">
                @csrf

                <div> 
                  <label for="nom" class="text-base">Nom de l'activité </label>
                  <input type="text" id="nom"  class="w-full mt-3" required="" name="nom">
                </div>

                <div> 
                  <label for="date_debut" class="text-base">Date de debut de l'activité </label>
                  <input type="date" id="date_debut" class="w-full mt-3" required="" name="debut">
                </div>

                <div> 
                  <label for="date_fin" class="text-base">Date de fin de l'activité </label>
                  <input type="date" id="date_fin" class="w-full mt-3" required="" name="fin">
                </div>

                <div >
                    <label for="activite_type" class="">Type d'activité </label>

                    <div class="mt-2.5">
                        <select required class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200 dark:!border-slate-800 dark:!bg-white/5"  name="activite_type" id="activite_type">
                            <option value="">---</option>
                            <option value="Campagne">Campagne</option>
                            <option value="Evénement">Evénement</option>
                            <option value="Activité">Activité</option>
                        </select>
                    </div>

                </div>

                <div >
                    <label for="description" class="text-base">Description</label>
                    <textarea class="w-full mt-3" id="description" rows="3" name="description"></textarea>
                </div>
                

                    <label class="label is-small">Besoin:</label>
                    {{-- <label for="" class="text-base">Besoin </label> --}}
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox" name="partenaire" value="1" wire:model.defer="state.football">
                                Partenaire
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="benevolat" value="1">
                                Bénévolat
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="sponsor" value="1">
                                Sponsor
                        </label>    
                        <label class="checkbox">
                            <input type="checkbox" name="participant" value="1">
                                Participant
                        </label>                   
                    </div>

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
                

                <div >
                    <label for="tags" class="text-base">Tag:</label>
                    {{-- <input class="form-control" id="tags" type="text" data-role="tagsinput" name="tags">
                    @if ($errors->has('tags'))
                        <span class="text-danger">{{ $errors->first('tags') }}</span>
                    @endif --}}
                    <div id="tag_activite">
                        @isset($tags)

                            @foreach ($tags as $item)
                                <input type="checkbox" class="btn-check" id="btn-check-tag-{{$item->id}}" autocomplete="off" name="btn_check_tag_{{$item->id}}" value="{{$item->nom}}">
                                <label  class="btn btn-primary" for="btn-check-tag-{{$item->id}}">{{$item->nom}}</label>
                            @endforeach

                        @endisset
                    </div>
                </div>

                <ul style="list-style: none;">
                  <li style="display: inline-block; margin-right: 10px">
                    <img alt="" src="mygadgeto/sites/default/files/Polyes-01.jpeg">
                  </li>
                </ul>

                <div class="flex items-center gap-2 text-sm py-2 px-4 font-medium flex-wrap">
                    <button type="button" class="flex items-center gap-1.5 bg-sky-50 text-sky-600 rounded-full py-1 px-2 border-2 border-sky-100 dark:bg-sky-950 dark:border-sky-900">  
                        <ion-icon name="image" class="text-base"></ion-icon>  
                        Image 
                            <input 
                            type="file" name="image" placeholder="Choisir image" id="image"
                                class="form-control @error('image') is-invalid @enderror">
                    </button>

                    <div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- <button type="button" class="flex items-center gap-1.5 bg-teal-50 text-teal-600 rounded-full py-1 px-2 border-2 border-teal-100 dark:bg-teal-950 dark:border-teal-900">  
                        <ion-icon name="videocam" class="text-base"></ion-icon>  
                        Video 
                    </button> --}}
                </div>     
            
                <div class="flex justify-between items-center"> 
                    <button type="button" class="float-right button bg-blue-500 text-white py-2 px-12 text-[14px] submit-form-activite"> Créer</button>
                </div>

            </form>
    
    </div>

</div>

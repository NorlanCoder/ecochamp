<div class="hidden lg:p-20" id="create-Alert" uk-modal="">

    <div class="uk-modal-dialog relative overflow-hidden mx-auto bg-white p-7 shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">

        <div class="text-center py-4 border-b mb-0 dark:border-slate-700">
            <h2 class="text-sm font-medium text-black">Créer une alerte</h2>

            <!-- Bouton de fermeture -->
            <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <form action="{{ route('alert.store') }}" method="POST" enctype="multipart/form-data" id="form-data-alert_create">
            @csrf

            <div class="mb-4">
                <label for="nom" class="text-base">Nom de l'alerte</label>
                <input type="text" id="nom" class="w-full mt-3 p-2 border rounded" required name="nom">
            </div>

            <div class="mb-4">
                <label for="debut" class="text-base">Date de la remarque</label>
                <input type="date" id="debut" class="w-full mt-3 p-2 border rounded" required name="debut">
            </div>

            <div class="mb-4">
                <label for="type_alert" class="text-base">Type d'alerte</label>
                <div class="mt-2.5">
                    <select required class="w-full rounded-lg bg-transparent shadow-sm border-slate-200 dark:border-slate-800 dark:bg-white/5" name="type_alert" id="type_alert">
                        <option value="">---</option>
                        <option value="Ordure">Ordure</option>
                        <option value="Feu de brousse">Feu de brousse</option>
                        <option value="Autre pollution">Autre pollution</option>
                    </select>
                </div>
            </div>

            <div class="mb-4">
                <label for="localite" class="text-base">Zones d'interventions</label>
                <div class="mt-2.5">
                    <select required class="w-full rounded-lg bg-transparent shadow-sm border-slate-200 dark:border-slate-800 dark:bg-white/5" name="interventions" id="localite">
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

            <div class="mb-4">
                <label for="description" class="text-base">Description</label>
                <textarea class="w-full mt-3 p-2 border rounded" id="description" rows="3" name="description"></textarea>
            </div>

            <div class="mb-4">
                <label for="tags" class="text-base">Tag:</label>
                <div id="tag_alert">
                    @isset($tags)
                        @foreach ($tags as $item)
                            <input type="checkbox" class="btn-check" id="btn-check-tag-{{ $item->id }}" autocomplete="off" name="tags[]" value="{{ $item->nom }}">
                            <label class="btn btn-primary" for="btn-check-tag-{{ $item->id }}">{{ $item->nom }}</label>
                        @endforeach
                    @endisset
                </div>
            </div>

            <ul class="list-none mb-4">
                <li class="inline-block mr-2">
                    <img alt="Image example" src="mygadgeto/sites/default/files/Polyes-01.jpeg" class="max-w-full h-auto">
                </li>
            </ul>

            <div class="flex items-center gap-2 text-sm py-2 px-4 font-medium flex-wrap">
                <label for="image" class="flex items-center gap-1.5 bg-sky-50 text-sky-600 rounded-full py-1 px-2 border-2 border-sky-100 dark:bg-sky-950 dark:border-sky-900 cursor-pointer">
                    <ion-icon name="image" class="text-base"></ion-icon>  
                    Image 
                </label>
                <input type="file" name="image" id="image" class="hidden @error('image') is-invalid @enderror">
                <div>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex justify-end items-center mt-4"> 
                <button type="submit" class="button bg-blue-500 text-white py-2 px-12 text-sm rounded">Créer</button>
            </div>
        </form>

    </div>

</div>

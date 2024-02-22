@isset($multipleSharingProfile)
    <div class="hidden lg:p-20" id="share-ecochamp" uk-modal="">

        <div class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white p-7 shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">

            <div class="text-center py-3 border-b -m-7 mb-0 dark:border-slate-700">
                <h2 class="text-sm font-medium"> Partager avec :</h2>

                <!-- close button -->
                <button type="button" class="button__ico absolute top-0 right-0 m-2.5 uk-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>

                <div class="space-y-5 mt-7">

                {!! $multipleSharingProfile !!}
                
                </div>

        
        </div>

    </div>   
@endisset


<div>
    <div class="card-information-overlay {{ $cardData ? 'active' : '' }}" wire:click="closeCard"></div>
    <div class="card-information overflow-auto {{ $cardData ? 'active' : '' }}">
        <div class="card-header position-relative d-flex justify-content-between align-items-center my-3 mx-5">
            <h3 class="mx-auto text-primary text-uppercase"><strong>{{ $cardData->title ?? '' }}</strong></h3>
            <i class="close-card-information fa-solid fa-xmark fs-2" wire:click="closeCard" style="cursor: pointer"></i>
        </div>
        <div class="card-body">
            <div class="row mx-auto d-flex align-items-center justify-content-center" style="height: 100%; width: 80%;">
                <div class="col-12 py-2 py-lg-0">
                    <div class="cardbody-information-text ">
                        <p class="text-uppercase"><i class="fa-solid fa-bullseye" style="color: #e74c3c;"></i>
                            <strong>Desafio</strong>
                        </p>
                        <p class="text-secondary">
                            {{ $cardData->challenge ?? '' }}
                        </p>
                    </div>
                    <div class="cardbody-information-text">
                        <p class="text-uppercase"><i class="fas fa-lightbulb" style="color: orange;"></i>
                            <strong>Solução</strong>
                        </p>
                        <p class="text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet
                            excepturi ullam provident voluptatem nulla deleniti nam quos earum, asperiores inventore
                            magni minus? Fuga ea facere est voluptatem, pariatur molestiae quas.</p>
                    </div>

                    <div class="cardbody-information-text">
                        <p class="text-uppercase"><i class="fas fa-trophy" style="color: #919191;"></i>
                            <strong>Resultados</strong>
                        </p>
                        <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus
                            libero laborum exercitationem placeat pariatur illum minus, fuga nihil culpa sapiente harum
                            molestias. Maxime consequatur provident, beatae nisi sunt maiores expedita?</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="" target="_blank" class="cardbody-githubrepository position-absolute bottom-0 bg-primary p-2 text-light text-center" style="width: 300px; left: 50%; transform: translateX(-50%); text-decoration: none;">
            <i class="fab fa-github"></i> <span><strong>Repositório no GitHub</strong></span>
        </a>
    </div>
</div>

@script
    <script>
        $(document).on('keydown', function(e) {
            if (e.key === "Escape") {
                Livewire.dispatch('close-card-information');
            }
        });

        Livewire.on('disable-scroll', () => {
            $('body').css('overflow', 'hidden');
        });

        Livewire.on('enable-scroll', () => {
            $('body').css('overflow', 'auto');
        });
    </script>
@endscript

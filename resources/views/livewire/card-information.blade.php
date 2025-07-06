<div>
    <div class="card-information-overlay {{ $cardData ? 'active' : '' }}" wire:click="closeCard"></div>
    <div class="card-information overflow-auto {{ $cardData ? 'active' : '' }}">
        <div class="card-header position-relative d-flex justify-content-between align-items-center my-3 mx-5">
            <div class="mx-auto">
                <h3 class="cardheader-cardTitle text-primary text-uppercase text-center">
                    <strong> <i class="{{$cardData->icon ?? ""}}"></i> {{ $cardData->title ?? '' }}</strong>
                </h3>
                <p class="text-center">
                    @if ($cardData)
                        @foreach ($cardData->technologies as $technology)
                            <span class="btn btn-sm mt-2 rounded-pill" style="background-color:#0659c5">
                                <strong class="text-white">{{ $technology }}</strong>
                            </span>
                        @endforeach
                    @endif
                </p>
                
            </div>
            <i class="close-card-information fa-solid fa-xmark fs-2" wire:click="closeCard" style="cursor: pointer"></i>
        </div>
        <div class="card-body">
            <div class="row mx-auto d-flex align-items-center justify-content-center " style="height: 100%; width: 80%;">
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
                        <p class="text-secondary">
                            {{$cardData->solution ?? ''}}
                        </p>
                    </div>

                    <div class="cardbody-information-text">
                        <p class="text-uppercase"><i class="fas fa-trophy" style="color: #919191;"></i>
                            <strong>Resultados</strong>
                        </p>
                        <p class="text-secondary">
                            {{$cardData->results ?? ''}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a href="" target="_blank"
            class="cardbody-githubrepository position-absolute bg-primary p-2 text-light text-center d-none d-lg-block bottom-0"
            style="width: 300px; left: 50%; transform: translateX(-50%); text-decoration: none;">
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

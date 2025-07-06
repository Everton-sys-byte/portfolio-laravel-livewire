<div>
    <div class="card-information-overlay {{ $cardData ? 'active' : '' }}" wire:click="closeCard"></div>
    <div class="card-information overflow-auto {{ $cardData ? 'active' : '' }}">
        <div class="card-header position-relative d-flex justify-content-between align-items-center my-3 mx-5">
            <div class="mx-auto">
                <h3 class="cardheader-cardTitle text-primary text-uppercase text-center">
                    <strong> <i class="{{ $cardData->icon ?? '' }}"></i> {{ $cardData->title ?? '' }}</strong>
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
            <div class="row mx-auto d-flex align-items-center justify-content-center py-2"
                style="height: 100%; width: 80%;">
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
                            {{ $cardData->solution ?? '' }}
                        </p>
                    </div>

                    <div class="cardbody-information-text">
                        <p class="text-uppercase"><i class="fas fa-trophy" style="color: #919191;"></i>
                            <strong>Resultados</strong>
                        </p>
                        <p class="text-secondary">
                            {{ $cardData->results ?? '' }}
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga sint, itaque similique
                            blanditiis iste facere commodi, consequatur quasi quam dolores corrupti quisquam delectus
                            voluptatem minus aspernatur inventore hic obcaecati sapiente.
                            Deleniti veniam eaque inventore velit ipsum qui. Nulla animi iste doloribus, cupiditate
                            aliquid saepe minus distinctio ab voluptatem tempore, ut laboriosam consectetur modi
                            obcaecati eos quas? Aliquid consequatur error quas?
                            Ipsa eveniet laboriosam enim hic qui cupiditate earum beatae tempore odio, culpa nulla
                            sequi, quod provident tempora odit. Odit sint optio facere nostrum voluptatum libero
                            asperiores nihil architecto repellat iste.
                            Beatae aperiam cupiditate nobis blanditiis, nesciunt fugit consequuntur dolores eum ratione,
                            repellat eius atque qui reprehenderit id! Quasi eaque nostrum explicabo excepturi beatae
                            cumque similique perferendis nemo, tempore, officiis dolore.
                            Quam, itaque voluptas non dolorum mollitia aliquid reiciendis numquam molestiae vero omnis
                            est nemo cum laudantium possimus necessitatibus doloribus unde sunt voluptatum eligendi esse
                            incidunt natus ullam soluta beatae! Beatae?
                            Odio doloremque, dolores natus cumque voluptates, facere totam nisi sed voluptas atque quae
                            quaerat esse ullam obcaecati maiores sapiente recusandae repellat veritatis? In eos eligendi
                            sapiente at dicta aut officia!
                        </p>
                    </div>
                </div>
                <div class="col-12 p-0 mt-3">
                    <a href="{{ $cardData->github_url ?? '' }}" target="_blank"
                        class="cardbody-githubrepository rounded-pill  bg-primary p-2 text-light text-center px-4"
                        style="text-decoration: none;">
                        <i class="fab fa-github"></i> <span><strong>Repositório no GitHub</strong></span>
                    </a>
                </div>
            </div>
        </div>

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

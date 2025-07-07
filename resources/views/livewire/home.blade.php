<div>
    @livewire('card-information')
    <section class="home d-flex align-items-center justify-content-around bg-primary position-relative" id="home"
        style="min-height: 100vh;">
        <div class="row align-items-center">
            <div class="col-12 text-light text-center text-lg-start mt-3 mt-lg-0">
                <h3>Olá, me chamo</h3>
                <h1 class="display-1 text-uppercase">Everton Soares</h1>
                <h1><span class="auto-typed"></span></h1>
                <x-social-medias />
                <a class="btn btn-outline-light rounded-pill px-3 py-2 mt-3" href="#contact">Entrar em contato</a>
            </div>
        </div>
        <a href="#about" class="position-absolute" style="bottom:20px; color: white;"><i
                class="fa-solid fa-chevron-down fs-1 animate-down"></i></a>
    </section>

    <section class="about container-fluid py-5" id="about">
        <div class="container">
            <x-section-header-title title='Sobre' />
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 text-center">
                    <img class="img-fluid" src="{{ asset('./images/projeto_portfolio.png') }}"
                        alt="segunda imagem de perfil" style="height: 550px;">
                </div>
                <div class="col-12 col-lg-7 mt-3 mt-lg-0">
                    <div class="row">
                        <div class="col-sm-6">
                            <h6>Nome: <span class="text-secondary">Everton Soares</span></h6>
                        </div>
                        <div class="col-sm-6">
                            <h6>Celular: <span class="text-secondary">+55 (11) 960818682</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Email: <span class="text-secondary">everton_dev@hotmail.com</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Localização: <span class="text-secondary">São Paulo, Brasil</span></h6>
                        </div>
                    </div>
                    <p class="text-secondary mt-3" style="max-width: 700px; text-align: justify;">
                        Desenvolvedor, formado em Análise e Desenvolvimento de Sistemas pela FATEC São Caetano do
                        Sul e finalizando a pós-graduação em Engenharia de Dados pela PUC Minas. Atualmente, atua em um
                        projeto focado no desenvolvimento de uma solução escalável e eficiente para locação de
                        equipamentos na construção civil, utilizando tecnologias como Laravel, MySQL, Docker, Git e
                        Bitbucket.

                        Possui experiência sólida em desenvolvimento web full stack, com foco em arquitetura limpa e
                        boas práticas de código. Tem interesse e vivência acadêmica na área de dados, com conhecimentos
                        em Big Data, computação distribuída (Hadoop, Spark, Kafka) e serviços em nuvem (AWS e GCP). É
                        familiarizado com bancos de dados relacionais e não relacionais, como PostgreSQL, MongoDB e
                        MySQL, além de ter realizado análises e visualizações de dados com Power BI em projetos
                        pessoais.
                    </p>
                    <a class="btn btn-outline-primary rounded-pill px-3 py-2 mt-3" href="#contact">Entrar em contato</a>
                </div>
            </div>
        </div>
    </section>
    <section class="formation container-fluid py-5 " id="formation">
        <div class="container ">
            <x-section-header-title title='Formação' />
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="fw-bold">Educação</h4>
                    <div class="border-start border-primary ps-4">
                        @foreach ($educations as $education)
                            <div class="position-relative">
                                <i class="far fa-dot-circle text-primary position-absolute"
                                    style="top: 3px; left: -32px;"></i>
                                <h5 class="fw-bold">{{ $education->field_of_study }}</h5>
                                <p class="mb-2 text-secondary">
                                    <strong>{{$education->place}}</strong> <small> | {{$education->degree}} | {{formatedDate($education->start_date, true)}} - {{formatedDate($education->end_date, true)}}</small>
                                </p>
                                <p>{{$education->description}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <h4 class="fw-bold">Experiência</h4>
                    <div class="border-start border-primary ps-4">
                        @foreach ($experiences as $experience)
                            <div class="position-relative">
                                <i class="far fa-dot-circle text-primary position-absolute"
                                    style="top: 3px; left: -32px;"></i>
                                <h5 class="fw-bold">{{ $experience->field_of_study }}</h5>
                                <p class="mb-2 text-secondary">
                                    <strong>{{ $experience->place }}</strong> | <small>{{ formatedDate($experience->start_date, true) }} -
                                        {{ $experience->end_date ? formatedDate($experience->end_date, true) : "Atualmente" }}</small>
                                </p>
                                <p>
                                    {{ $experience->description }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projects container py-5 " id="projects">
        <x-section-header-title title='Projetos' />
        <!-- Swiper wrapper -->
        <div class="swiper projectsSwiper px-3 py-4 p-lg-5" wire:ignore>
            <div class="swiper-wrapper">
                @foreach ($projects as $project)
                    <div class="swiper-slide">
                        <x-card wire:click="$dispatch('selected-project', {projectId: {{ $project->id }}})"
                            :title="$project->title" :icon="$project->icon" :relevant-link="$project->url" :technologies="$project->technologies">
                            <p>{{ $project->challenge }}</p>
                        </x-card>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="contact container py-5" id="contact">
        <x-section-header-title title='Contato' />
        <div class="text-center">
            <p class="text-secondary">Obrigado por visitar meu site. Para entrar em contato, envie uma mensagem pelo
                formulário e responderei em breve.</p>
        </div>
        @livewire('form.contact')
    </section>
</div>

@assets
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
@endassets

@script
    <script>
        new Typed('.auto-typed', {
            strings: ["Desenvolvedor", "Engenheiro de dados", "Analista de dados"],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true
        });

        const swiper = new Swiper('.projectsSwiper', {
            slidesPerView: 1,
            spaceBetween: 25,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    </script>
@endscript

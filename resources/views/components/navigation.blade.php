<div>
    <nav class="nav-bar bg-light text-dark py-2 w-100 fixed-top shadow">
        <div class="container d-flex flex-row justify-content-between align-items-center" style="height: 60px">
            <div class="logo">
                Everton Soares
            </div> 
            {{-- desktop navigation --}}
            <div class="d-none d-lg-flex flex-row justify-content-between align-items-center">
                <ul class="d-flex flex-row gap-4 list-unstyled m-0 text-uppercase fw-bold">
                    <li><a href="#home" class="text-dark text-decoration-none">Inicio</a></li>
                    <li><a href="#about" class="text-dark text-decoration-none">Sobre</a></li>
                    <li><a href="#formation" class="text-dark text-decoration-none">Formação</a></li>
                    <li><a href="#projects" class="text-dark text-decoration-none">Projetos</a></li>
                    <li><a href="#contact" class="text-dark text-decoration-none">Contato</a></li>
                </ul>
                <a target="_blank" href="{{ asset('documents/curriculo.pdf') }}"
                    class="text-white bg-primary px-3 py-2 rounded-pill text-decoration-none shadow-lg ms-3">
                    <i class="fa-regular fa-file-pdf"></i> Currículo
                </a>
            </div>
            {{-- mobile navigation --}}
            <div class="d-flex d-lg-none burger-button-container">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </nav>
    {{-- mobile navigation --}}
    <div class="d-flex flex-column align-items-center justify-content-center d-lg-none nav-mobile-container">
        <ul class="d-flex flex-column gap-4 list-unstyled m-0 text-uppercase fw-bold text-center">
            <li><a href="#home" class="text-dark text-decoration-none active">Inicio</a></li>
            <li><a href="#about" class="text-dark text-decoration-none">Sobre</a></li>
            <li><a href="#formation" class="text-dark text-decoration-none">Formação</a></li>
            <li><a href="#projects" class="text-dark text-decoration-none">Projetos</a></li>
            {{-- <li><a href="" class="text-dark text-decoration-none">Projects</a></li> --}}
            <li><a href="#contact" class="text-dark text-decoration-none">Contato</a></li>
        </ul>
        <a target="_blank" href="{{ asset('documents/curriculo.pdf') }}"
            class="text-white bg-primary px-3 py-2 text-decoration-none shadow-lg mt-3">
            <i class="fa-regular fa-file-pdf"></i> Baixar currículo
        </a>
    </div>
</div>

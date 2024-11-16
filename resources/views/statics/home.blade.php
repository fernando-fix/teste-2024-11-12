<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <title>Kombi</title>
</head>

<body>
    <header>
        <div class="container">
            <div id="header" class="d-flex justify-content-between align-items-center">
                <a href="#" id="home_link">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                </a>
                <nav id="menu_desktop" class="d-flex align-items-center">
                    <ul class="d-flex list-unstyled mb-0 align-items-center">
                        <li><a class="nav-link" href="#servicos">Nossos serviços</a></li>
                        <li><a class="nav-link" href="#sobrenos">Sobre nós</a></li>
                        <li><a class="button-link" href="#orcamento">SOLICITE UM ORÇAMENTO</a></li>
                    </ul>
                </nav>
                <nav id="menu_mobile">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <div class="menu-hamburger">
                            <span class="menu-line"></span>
                            <span class="menu-line"></span>
                            <span class="menu-line"></span>
                        </div>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Home</a>
                        <a class="dropdown-item" href="#servicos">Nossos serviços</a>
                        <a class="dropdown-item" href="#sobrenos">Sobre nós</a>
                        <a class="dropdown-item" href="#orcamento">SOLICITE UM ORÇAMENTO</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section id="banner">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @if ($banners->count() >= 2)
                        @foreach ($banners as $banner)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $banner->file) }}" alt="Banner">
                            </div>
                        @endforeach
                    @else
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/banner.png') }}" alt="Banner 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/banner.png') }}" alt="Banner 2">
                        </div>
                    @endif
                </div>
                <!-- Paginação -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section id="servicos">
            <div class="overview">
                <div class="inner-overview">
                    <div class="hr">
                        <hr>
                    </div>
                    <div class="title">
                        A farmácia de manipulação <br>
                        <b>sob medida para você e seu pet</b>
                    </div>
                    <div class="hr">
                        <hr>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="cards">

                    {{-- Card Item 1 --}}
                    <div class="item">
                        <div class="item-top">
                            <img class="item-img" src="{{ asset('assets/img/bannerPrancheta-1.png') }}"
                                alt="banner prancheta 1">
                            <div class="item-icon">
                                <img src="{{ asset('assets/img/bannerPranchetaIcon-1.svg') }}"
                                    alt="simbolo prancheta 1">
                            </div>
                        </div>
                        <div class="item-bottom">
                            <h2 class="item-title">
                                Manipulação de receitas
                            </h2>
                            <p class="item-content">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque dolorem ex beatae
                                facilis eaque. Perspiciatis, id. Iusto quas voluptas laudantium ea numquam explicabo
                                recusandae quis, neque impedit. Sunt, accusantium ipsum.
                            </p>
                        </div>
                    </div>

                    {{-- Card Item 2 --}}
                    <div class="item">
                        <div class="item-top">
                            <img class="item-img" src="{{ asset('assets/img/bannerPrancheta-2.png') }}"
                                alt="banner prancheta 2">
                            <div class="item-icon">
                                <img src="{{ asset('assets/img/bannerPranchetaIcon-2.svg') }}"
                                    alt="simbolo prancheta 1">
                            </div>
                        </div>
                        <div class="item-bottom">
                            <h2 class="item-title">
                                Manipulação de receitas
                            </h2>
                            <p class="item-content">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias quibusdam dolor
                                architecto! Blanditiis esse voluptate iure, cum atque recusandae? Earum exercitationem
                                quia, quidem beatae quaerat quibusdam eligendi veniam doloremque ducimus.
                            </p>
                        </div>
                    </div>

                    {{-- Card Item 3 --}}
                    <div class="item">
                        <div class="item-top">
                            <img class="item-img" src="{{ asset('assets/img/bannerPrancheta-3.png') }}"
                                alt="banner prancheta 3">
                            <div class="item-icon">
                                <img src="{{ asset('assets/img/bannerPranchetaIcon-3.svg') }}"
                                    alt="simbolo prancheta 1">
                            </div>
                        </div>
                        <div class="item-bottom">
                            <h2 class="item-title">
                                Manipulação de receitas
                            </h2>
                            <p class="item-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, suscipit consequatur
                                iste magni consectetur animi architecto voluptate repudiandae a iusto consequuntur
                                libero? Perspiciatis aspernatur ab dolor explicabo mollitia, provident minima.
                            </p>
                        </div>
                    </div>

                    {{-- Card Item 4 --}}
                    <div class="item">
                        <div class="item-top">
                            <img class="item-img" src="{{ asset('assets/img/bannerPrancheta-4.png') }}"
                                alt="banner prancheta 4">
                            <div class="item-icon">
                                <img src="{{ asset('assets/img/bannerPranchetaIcon-4.svg') }}"
                                    alt="simbolo prancheta 1">
                            </div>
                        </div>
                        <div class="item-bottom">
                            <h2 class="item-title">
                                Manipulação de receitas
                            </h2>
                            <p class="item-content">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia suscipit illo natus
                                pariatur impedit fugit atque blanditiis voluptas! Itaque, sit similique doloribus
                                dignissimos saepe cupiditate facilis tempora delectus adipisci optio.
                            </p>
                        </div>
                    </div>

                    {{-- Card Item 5 --}}
                    <div class="item">
                        <div class="item-top">
                            <img class="item-img" src="{{ asset('assets/img/bannerPrancheta-5.png') }}"
                                alt="banner prancheta 5">
                            <div class="item-icon">
                                <img src="{{ asset('assets/img/bannerPranchetaIcon-5.svg') }}"
                                    alt="simbolo prancheta 1">
                            </div>
                        </div>
                        <div class="item-bottom">
                            <h2 class="item-title">
                                Manipulação de receitas
                            </h2>
                            <p class="item-content">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta incidunt omnis libero
                                vel aliquid recusandae quasi, similique deserunt eligendi corrupti, esse doloremque
                                architecto molestias minus eius quod expedita debitis. Quidem?
                            </p>
                        </div>
                    </div>

                    {{-- Card Item 6 --}}
                    <div class="item">
                        <div class="item-top">
                            <img class="item-img" src="{{ asset('assets/img/bannerPrancheta-6.png') }}"
                                alt="banner prancheta 6">
                            <div class="item-icon">
                                <img src="{{ asset('assets/img/bannerPranchetaIcon-6.svg') }}"
                                    alt="simbolo prancheta 1">
                            </div>
                        </div>
                        <div class="item-bottom">
                            <h2 class="item-title">
                                Manipulação de receitas
                            </h2>
                            <p class="item-content">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus dolores, delectus
                                quibusdam explicabo labore praesentium repellendus expedita dolor fugiat distinctio
                                dolorum aperiam ratione, consequuntur ex rerum suscipit minima incidunt in.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="btn-solicite-orcamento">
                    <a class="button-link" href="#orcamento">SOLICITE UM ORÇAMENTO</a>
                </div>


            </div>

        </section>

        <section id="banner2">

            <img src="{{ asset('assets/img/banner-2-1.png') }}" alt="banner 2">

            <a href="#orcamento">ENVIAR RECEITA</a>

        </section>

        <section id="sobrenos">
            <div class="container">
                <div class="sobrenos">
                    <div class="texto-icones">
                        <div class="texto">
                            <h2 class="title">
                                Nosso maior compromisso é com o <b>seu bem estar</b>
                            </h2>
                            <p class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pulvinar, neque ac
                                molestie luctus, dolor purus volutpat magna, ac placerat leo enim euismod odio. In erat
                                risus, auctor ut viverra ac, rutrum id orci. Donec pellentesque leo in tempus ultrices.
                                Donec quam nunc, mattis sed consequat id, cursus nec nibh. Etiam at tincidunt mauris.
                                Nulla eleifend odio sed aliquam gravida. Phasellus placerat elit ac nisi tempor, eu
                                rhoncus arcu accumsan. Donec felis velit, ultrices pretium velit in, ultricies lacinia
                                nisl. Quisque tempus quis turpis eu luctus.
                            </p>
                        </div>
                        <div class="icones">
                            <img src="{{ asset('assets/img/crfsp.png') }}" alt="logo crfsp">
                            <img src="{{ asset('assets/img/anvisa.png') }}" alt="logo anvisa">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner">
                <img src="{{ asset('assets/img/compromisso-banner.png') }}" alt="logo compromisso">
            </div>
        </section>



        <section style="padding-top: 500px">

        </section>

        <script src="{{ asset('assets/js/jquery-3.2.1.slim.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('site/logo/logo.png') }}">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>G'Lab</title>

    <!-- CSS FILES -->
    <link href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('site/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('site/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->

</head>

<body id="section_1">


    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('accueil') }}">
                <img src="{{ asset('site/logo/logo.png') }}" class="logo img-fluid" alt="Kind Heart Charity">
                {{-- <span>
                    Kind Heart Charity
                    <small>Non-profit Organization</small>
                </span> --}}
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#top">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">Qui sommes nous?</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Nos formations</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Inscription</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_6">Contact</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="{{ route('login') }}">Se
                            connecter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('site/images/slide/formations_pro.jpg') }}"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Formation</h1>

                                        <p>Vous apprendrai au côté
                                            <br> des formateurs qualifiés et
                                            <br> expérimentés dans leur stack spécifique.

                                        </p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('site/images/slide/tech.jpg') }}"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Technologies
                                        </h1>

                                        <p>Vous serez formés sur des
                                            <br> technologies de développement
                                            <br>modernes et adaptées .
                                        </p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('site/images/slide/93121__plan.jpg.jfif') }}"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Plan de <br>carrière</h1>

                                        <p>Possibilité d'intégrer
                                            nos équipes<br> au sein
                                            de GS2E à la suite des
                                            <br> sessions de formations .
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Précédent</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Suivant</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="{{ asset('site/images/crea_glab.png') }}" class="custom-text-box-image img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                            <h2 class="mb-2">Présentation</h2>

                            <h5 class="mb-3">Qui sommes nnous ?</h5>

                            <p class="mb-0">
                                GLAB est un projet du departement de dévelopement informatique (DDI) de l'entreprise
                                GS2E filiale du groupe ERANOVE, l'objectif de cette initiative est de former les jeunes
                                au développement informatique et de promouvoir les developeurs locaux au plus au niveau
                                mondial.
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box mb-lg-0">
                                    <h5 class="mb-3">Notre Mission</h5>

                                    <p>
                                        Former des jeunes passionnés de codes aux derniers technologies
                                    </p>
                                    {{--
                                    <ul class="custom-list mt-2">
                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Charity Theme
                                        </li>

                                        <li class="custom-list-item d-flex">
                                            <i class="bi-check custom-text-box-icon me-2"></i>
                                            Semantic HTML
                                        </li>
                                    </ul> --}}
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                    <div class="counter-thumb">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="5"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text"></span>
                                        </div>

                                        <span class="counter-text">Formations</span>
                                    </div>

                                    <div class="counter-thumb mt-4">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="35"
                                                data-speed="1000"></span>
                                            <span class="counter-number-text"></span>
                                        </div>

                                        <span class="counter-text">Formés</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>Nos formations</h2>
                    </div>
                    @foreach ($formations as $formation)
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-2">
                            <div class="custom-block-wrap">
                                <img src="{{ asset('site/images/formations/scholarship.png') }}"
                                    class="custom-block-image img-fluid" alt="" width="50"
                                    height="50">
                                {{-- <img src="{{asset($formation->image)}}" class="custom-block-image img-fluid" alt="" width="100" height="100"> --}}

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">{{ $formation->libelle }} </h5>

                                        <p>{{ Str::limit($formation->description, 100, '...') }}</p>

                                        {{-- <div class="progress mt-4">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Raised:</strong>
                                            $18,500
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>Goal:</strong>
                                            $32,000
                                        </p>
                                    </div> --}}
                                    </div>

                                    {{-- <a href="donate.html" class="custom-btn btn">Donate now</a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </section>

        <section class="volunteer-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9 col-12">
                        <h2 class="text-white mb-4">Inscription</h2>
                        <div class="container">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if (session('info'))
                                <div class="alert alert-primary">{{ session('info') }}</div>
                            @endif
                            @if (session('warning'))
                                <div class="alert alert-warning">{{ session('warning') }}</div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <form class="custom-form volunteer-form mb-5 mb-lg-0" action="{{route('inscription')}}" method="post"
                            role="form" enctype="multipart/form-data">
                            @csrf
                            <h3 class="mb-4">M'inscrire à une session</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">NOM <span style="color: red">*</span> </label>
                                        <input type="text" name="nom" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">PRENOMS <span style="color: red">*</span></label>
                                        <input type="text" name="prenom" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">DATE DE NAISSANCE <span
                                                style="color: red">*</span></label>
                                        <input type="date" name="date_naissance" required class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">NIVEAU SCOLAIRE <span
                                                style="color: red">*</span></label>
                                        <select class="form-select" name="niveau"
                                            aria-label="Default select example" required>
                                            <option selected>Selectionnez un niveau</option>
                                            @if (isset($niveaux))
                                                @foreach ($niveaux as $niveau)
                                                    <option value="{{ $niveau->id }}">{{ $niveau->name }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">SEXE</label>
                                        <select class="form-select" name="sexe"
                                            aria-label="Default select example">
                                            <option selected>Selectionnez un sexe</option>
                                            <option value="1">Féminin</option>
                                            <option value="2">Masculin</option>
                                        </select>
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label">CONTACT</label>
                                        <input type="tel" name="contact" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            name="email">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">LIEU D'HABITATION</label>
                                        <input type="text" name="habitation" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">FORMATION SOUHAITEE</label>
                                        <select class="form-select" name="formation_souhaitee"
                                            aria-label="Default select example">
                                            <option selected>Selectionnez une formation</option>
                                            @if (isset($formations))
                                                @foreach ($formations as $formation)
                                                    <option value="{{ $formation->id }}">
                                                        {{ $formation->libelle }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">CV</label>
                                        <input class="form-control" name="cv" type="file" id="formFile">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">COMMENT AVEZ-VOUS ENTENDU PARLEZ DE LA
                                            FORMATION</label>
                                        <select class="form-select" name="information"
                                            aria-label="Default select example">
                                            <option selected>Selectionnez un élément</option>
                                            <option value="Réseaux sociaux">Réseaux sociaux</option>
                                            <option value="Par une connaissance">Par une connaissance</option>
                                            <option value="WhatsApp">WhatsApp</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1"
                                            class="form-label">MOTIVATIONS</label>
                                        <textarea class="form-control" rows="8" name="motivation" id="exampleFormControlTextarea1" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>



                            {{--
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="volunteer-name" id="volunteer-name" class="form-control"
                                        placeholder="Jack Doe" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="volunteer-email" id="volunteer-email"
                                        pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com"
                                        required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="text" name="volunteer-subject" id="volunteer-subject"
                                        class="form-control" placeholder="Subject" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="input-group input-group-file">
                                        <input type="file" class="form-control" id="inputGroupFile02">

                                        <label class="input-group-text" for="inputGroupFile02">Upload your CV</label>

                                        <i class="bi-cloud-arrow-up ms-auto"></i>
                                    </div>
                                </div>
                            </div>

                            <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message"
                                placeholder="Comment (Optional)"></textarea> --}}

                            <button type="submit" class="form-control">S'inscrire</button>
                        </form>
                    </div>

                    <div class="col-lg-3 col-12 mt-5">
                        <img src="{{ asset('site/images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg') }}"
                            class="volunteer-image img-fluid" alt="">

                        <div class="custom-block-body text-center">
                            <h4 class="text-white mt-lg-3 mb-lg-3">Raïssa K.</h4>

                            <p class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm
                                tokito Professional charity theme based</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <h2>Plus informations</h2>

                            <div class="contact-image-wrap d-flex flex-wrap">
                                <img src="{{ asset('site/images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg') }}"
                                    class="img-fluid avatar-image" alt="">

                                <div class="d-flex flex-column justify-content-center ms-3">
                                    <p class="mb-0">Clara Barton</p>
                                    <p class="mb-0"><strong>HR & Office Manager</strong></p>
                                </div>
                            </div>

                            <div class="contact-info">
                                <h5 class="mb-3">Plus informations</h5>

                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2"></i>
                                    Immeuble SIDM, Plateau, non loin de la mosquée du plateau
                                </p>

                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2"></i>

                                    <a href="tel: 305-240-9671">
                                        +225 00 0000 0000
                                    </a>
                                </p>

                                <p class="d-flex">
                                    <i class="bi-envelope me-2"></i>

                                    <a href="mailto:info@yourgmail.com">
                                        glab@gs2e.com
                                    </a>
                                </p>

                                {{-- <a href="#" class="custom-btn btn mt-3"></a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="#" method="post" role="form">
                            <h2>Contact </h2>

                            <p class="mb-4">Ou, ecrivez nous :
                                <a href="#">glab@gs2e.com</a>
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="first-name" id="first-name" class="form-control"
                                        placeholder="Jack" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="last-name" id="last-name" class="form-control"
                                        placeholder="Doe" required>
                                </div>
                            </div>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="Jackdoe@gmail.com" required>

                            <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you?"></textarea>

                            <button type="submit" class="form-control">Send Message</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="images/logo.png" class="logo img-fluid" alt="">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3">Quick Links</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Causes</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Become a volunteer</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Partner with us</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>

                        <a href="tel: 305-240-9671" class="site-footer-link">
                            305-240-9671
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            donate@charity.org
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                        Akershusstranda 20, 0150 Oslo, Norway
                    </p>

                    <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                </div>
            </div>
        </div> --}}

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">Copyright © 2036 <a href="#">Kind Heart</a> Charity Org.
                            Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a><br>Distribution:
                            <a href="https://themewagon.com">ThemeWagon</a>
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('site/js/jquery.min.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('site/js/click-scroll.js') }}"></script>
    <script src="{{ asset('site/js/counter.js') }}"></script>
    <script src="{{ asset('site/js/custom.js') }}"></script>

</body>

</html>

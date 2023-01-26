<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SEO Master - SEO Agency Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('site/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('site/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('site/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">
                        {{-- <i class="fa fa-search me-2"></i> --}}
                        G<span class="fs-5">'lab</span>
                    </h1>
                    <!-- <img src="site/img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Accueil</a>
                        {{-- <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="project.html" class="nav-item nav-link">Project</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
                    </div>
                    {{-- <button type="button" class="btn text-secondary ms-3" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></button> --}}
                    <a href="{{route('inscription')}} "
                        class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">S'inscrire</a>
                </div>
            </nav>

            <div class="container-fluid py-5 bg-primary hero-header mb-5">
                <div class="container-fluid my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Inscription</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Inscription à une formation</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->



        <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container-fluid px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="position-relative d-inline text-primary ps-4">Inscription</h6>
                            <h2 class="mt-2">Inscription à une formation</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <div class="row">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif

                                @if (session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                @endif
                            </div>
                            <form role="form text-left" action="#" method="POST" enctype="multipart/form-data">

                                @csrf

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
                                            <label class="form-label">DATE DE NAISSANCE  <span style="color: red">*</span></label>
                                            <input type="date" name="date_naissance" required class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">NIVEAU SCOLAIRE  <span style="color: red">*</span></label>
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
                                            <input type="email" class="form-control"
                                                id="exampleFormControlInput1" name="email">
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
                                            <input class="form-control" name="cv" type="file"
                                                id="formFile">
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


                                <button type="submit" class="btn btn-primary fs-5">Soumettre</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Popular Link</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Career</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Project Gallery</h5>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-1.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-2.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-3.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-4.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-5.jpg" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="img/portfolio-6.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('site/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('site/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('site/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('site/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('site/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('site/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('site/js/main.js')}}"></script>
</body>

</html>

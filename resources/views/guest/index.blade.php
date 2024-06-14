@extends('layouts.guest')

@section('content')
<!-- Header -->
<div class="bg_image">
    <header>
        <div class="container align-items-center justify-content-center top_content d-flex mt-5">
            <div class="col-lg-5 ">
                <h1 class="text-center text-lg-centr text-white mb-5 header-title">
                    HELLO, YOU ARE IN THE RIGHT PLACE <br>
                </h1>
                <p class="text-light mb-5 text-center text-lg-centr header-description">
                    If you expect your software to be worked with hand in hand with your best idea
                </p>
            </div>
        </div>
        <div class="service-bloc container d-flex justify-content-center mt-5">
            <div class="bloc me-3 text-center col-3">
                <h3>UI/UX </h3>
                <h3>DESIGN</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="bloc me-3 text-center col-3">
                <h3>DATA</h3>
                <h3>BASE</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="bloc text-center col-3">
                <h3>HOSTING</h3>
                <h3>SEO</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <section class="my-lg-2">
        <div class="container title d-flex flex-column justify-content-start align-items-center flex-lg-row my-5 mb-0">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <h2 class="text-white">Cu ce ne ocupăm?</h2>
                <p class="text-white">
                    Suntem o echipa de profesionisti cu capacitățile necesare pentru a crea orice proiect, indiferent de complexitatea acestuia începând cu site-uri simple corporative și finisând cu magazine online integrate cu sisteme de plată.
                    <br>De-a lungul anilor, am oferit partenerilor noștri servicii de externalizare de înaltă calitate și împreună am dezvoltat produse premiate.
                </p>
            </div>
            <div class="col-12 col-lg-6">
                <img src="{{ asset('assets/images/img3.1.svg') }}" alt="Tipuri de site-uri web" class="img-fluid rounded">
            </div>
        </div>
    </section>
    
    <section class=" my-lg-2">
        <div class="container title d-flex flex-column justify-content-center align-items-center text-center flex-lg-row my-5 mb-0">
            <div class="col-6">
                <h2 class="text-white">Tipuri de site-uri web
                </h2>
            </div>
        </div>

        <div class="contentservice container d-flex  justify-content-between flex-lg-column my-5">
            <div class="catalog d-flex justify-content-between align-items-center">
                <div class="servicii me-3 text-center col-4">
                    <div class="shad mb-2 mt-2"><i class="fa-solid fa-bullhorn frimeworck"></i></div>
                    <H4>Landing Page</H4>
                    <p>Landing Page-uri pentru produse, servicii, evenimente sau oferte promoționale.</p>
                </div>
                <div class="servicii me-3 text-center col-4 ">
                    <div class="shad mb-2 mt-2"><i class="fa-solid fa-building frimeworck"></i></div>
                    <H4>Site Web Corporativ</H4>
                    <p>Site web de prezentare a companiei. Afacerea ta merită să fie văzută în mediul online!</p>
                </div>
                <div class="servicii me-3 text-center col-4">
                    <div class="shad mb-2 mt-2"><i class="fa-solid fa-book-atlas frimeworck"></i></div>
                    <H4>Site Web tip Catalog</H4>
                    <p>Site web tip catalog/prezentare produse fără posibilitatea de a achita online.</p>
                </div>

            </div>
            <div class=" catalog d-flex justify-content-between align-items-center mt-4">
                <div class="servicii me-3 text-center col-4">
                    <div class="shad mb-2 mt-2"><i class="fa-brands fa-usps frimeworck"></i></div>
                    <H4>Portal Web</H4>
                    <p>Portale web pentru site-uri de știri. Devin-o cea mai accesibilă sursă de informare în mediul online.</p>
                </div>
                <div class="servicii me-3 text-center col-4">
                    <div class="shad mb-2 mt-2"><i class="fa-solid fa-store frimeworck"></i></div>
                    <H4>Magazin online</H4>
                    <p>Magazine online integrate cu sisteme de plată - vinde orice, oriunde, oricând.</p>
                </div>
                <div class="servicii me-3 text-center col-4">
                    <div class="shad mb-2 mt-2"><i class="fa-solid fa-blog frimeworck"></i></div>
                    <H4>Blog</H4>
                    <p>Bloguri personale sau tematice. Devin-o un scriitor mai bun sau un expert în domeniul tău.</p>
                </div>

            </div>
        </div>
        
    </section>
</div>
<!-- End About Them -->
<!-- Portfolio -->
<section class="collections my-5 py-5">
    <div class="container title d-flex flex-column justify-content-between align-items-center flex-lg-row my-5">
        <h2 class="text-white text-center text-lg-start">Portfolio</h2>
    </div>
    <div class="container">
        <div class="row">
            @foreach($collections as $collection)
                <div class="col-md-4">
                <div class="card bg-card radius">
                    <div class="card-body">
                        <div class="d-flex flex-wrap images">
                            @foreach($collection->images()->limit(4)->get() as $image)
                                <img src="{{ asset(env('UPLOADS_IMAGE'). "/" . $image->name) }}" class="w-100 p-2 radius" alt="Metaverse">
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="d-flex author flex-row align-items-center">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5 class="text-white mb-0">{{ $collection->name }}</h5>
                                    <p class="text-secondary mb-0">Created by <span class="text-white">{{ $collection->user()->get()->first()->name }}</span></p>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <i class="fa-regular fa-heart text-white text-center like-button" data-collection-id="{{ $collection->id }}"></i>
                                <span class="text-white text-center like" >{{ $collection->likes }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<div class="swiper auctionsSwiper container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><p><i class="fa-brands fa-laravel"></i></p></div>
        <div class="swiper-slide"><p><i class="fa-brands fa-html5"></i></p></div>
        <div class="swiper-slide"><p><i class="fa-brands fa-css3-alt"></i></p></div>
        <div class="swiper-slide"><p><i class="fa-brands fa-square-js"></i></p></div>
        <div class="swiper-slide"><p><i class="fa-brands fa-php"></i></p></div>
        <div class="swiper-slide"><p class="MySQL">MySQL</p></div>
    </div>
</div>
@endsection
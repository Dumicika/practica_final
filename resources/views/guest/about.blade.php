@extends('layouts.guest')

@section('content')
<!-- Header -->
<div class="about">
    <div class="top_section">
        <header>
            <div class="container align-items-center justify-content-center top_content d-flex mt-5 about-titl">
                <div class="col-lg-8 ">
                    <h1 class="text-white text-center text-lg-centr text-white mb-5 header-title">About Us</h1>
                </div>
            </div>
        </header>
    </div>
    </div>

<section class=" my-lg-2">
    <div class="container title d-flex flex-column justify-content-start align-items-center flex-lg-row my-5 mb-0 about_content">
    <div class="col-12 col-lg-6 mb-4 mb-lg-0">
    <div    class="title-top">
                        <h2 class="text-white mb-3 ">
                            Despre Milav <br>
                        </h2>
                        <p class="text-light">
                            MILAV creează produse premiate care transformă afacerile clienților săi. Și este bucuroasă să anunțe că, datorită creșterii continue, are sloturi deschise pentru dezvoltatorii React/React Native medii și seniori.
                        </p>
                    </div>
            <div class="list">
                <h4>Unele dintre produsele create pentru clienți</h4>
                <ul>
                    <li><span>Site-uri web corporative</span></li>
                    <li><span>Magazine online</span></li>
                    <li><span>Portaluri uriașe</span></li>
                    <li><span>Aplicații web și pentru întreprinderi</span></li>
                    <li><span>Aplicații mobile</span></li>
                    <li><span>Dezvoltare full-stack și componente web reutilizabile</span></li>
                </ul>
            </div>
            <div class=" d-flex butonss">
                <a href="" class="btn active text-align-center text-center">
                    <p class="text-white mb-0 text-center">Contacteazăne</p>
                </a>
                <a href="" class=" btn active ">
                    <p class="text-white">Portfoliu</p>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <img src="{{ asset('assets/images/img1-1_.svg') }}" alt="About Us Image" class="img-fluid .about_img">
        </div>
    </div>
</section>

<!-- Team Members -->
<section class="container collections my-2 py-5">
    <div class="container title d-flex flex-column justify-content-between align-items-center flex-lg-row my-5">
        <h2 class="text-white text-center text-lg-start">Team members</h2>
    </div>
    <div class="d-flex">
        <div class=" col-4 me-4">
            <div class="card bg-card radius p-4">
                <img src="https://static.independent.co.uk/2023/05/12/23/newFile.jpg?width=1200&height=1200&fit=crop" class="card-img-top" alt="Metaverse">
                <div class="card-body">
                    <div class="d-flex author flex-row align-items-center">
                        <div class="d-flex flex-column justify-content-center">
                            <h5 class="text-white mb-0">Developer</h5>
                            <p class="text-secondary mb-0"><span class="text-white">Johny Deep</span></p>
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <button class="btn card-buton text-white p-3 flex-fill place-bid-btn">
                            <i class="fa-solid fa-crown text-center"></i>
                            More info...
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div></div>
        <div class=" col-4 me-4">
            <div class="card bg-card radius p-4">
                <img src="https://pyxis.nymag.com/v1/imgs/8d7/338/2539332c5b6c02efa94f6c181042afab9e-27-terry-crews.rsquare.w330.jpg" class="card-img-top" alt="Metaverse">
                <div class="card-body">
                    <div class="d-flex author flex-row align-items-center">
                        <div class="d-flex flex-column justify-content-center">
                            <h5 class="text-white mb-0">Designer</h5>
                            <p class="text-secondary mb-0"><span class="text-white">Terry Crews</span></p>
                        </div>
                    </div>

                    <div class="d-flex mt-3">
                        <button class="btn card-buton text-white p-3 flex-fill place-bid-btn">
                            <i class="fa-solid fa-crown text-center"></i>
                            More info...
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-4">
            <div class="card bg-card radius p-4">
                <img src="https://del.h-cdn.co/assets/17/07/3200x3200/square-1487365300-delish-ryan-gosling-getty-pascal.jpg" class="card-img-top round" alt="Metaverse">
                <div class="card-body">
                    <div class="d-flex author flex-row align-items-center">
                        <div class="d-flex flex-column justify-content-center">
                            <h5 class="text-white mb-0">Developer</h5>
                            <p class="text-secondary mb-0"><span class="text-white">Ryan Gosling</span></p>
                        </div>
                    </div>

                    <div class="d-flex mt-3">
                        <button class="btn card-buton text-white p-3 flex-fill place-bid-btn">
                            <i class="fa-solid fa-crown text-center"></i>
                            More info...
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
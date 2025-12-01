@extends('profile.components.layout')

@section('content')
    <main class="main">
        <!-- Starter Section Section -->
        <section id="visi-misi" class="starter-section section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Galeri</h2>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        <!-- Food Images -->
                        <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-food">
                            <div class="gallery-wrap">
                                <img src="{{ asset('img/img-7.jpeg') }}" class="img-fluid" alt="Appetizer Platter" loading="lazy">
                                <div class="gallery-info">
                                    <h4>Pelantikan Kader Baru</h4>
                                    <p>omentum pelantikan kader baru sebagai langkah awal meneguhkan komitmen perjuangan</p>
                                    <div class="gallery-links">
                                        <a href="{{ asset('img/img-7.jpeg') }}" class="glightbox" title="Pelantikan Kader Baru"><i class="bi bi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Gallery Item -->

                        <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-interior">
                            <div class="gallery-wrap">
                                <img src="{{ asset('img/img-9.jpeg') }}" class="img-fluid" alt="Restaurant Interior" loading="lazy">
                                <div class="gallery-info">
                                    <h4>Pelatihan Kader Dasar </h4>
                                    <p>Kegiatan kaderisasi berbasis alam yang membangun solidaritas</p>
                                    <div class="gallery-links">
                                        <a href="{{ asset('img/img-9.jpeg') }}" class="glightbox" title="Pelatihan Kader Dasar "><i class="bi bi-zoom-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Gallery Item -->

                    </div><!-- End Gallery Container -->
                </div><!-- End Isotope Layout -->

            </div>


        </section><!-- /Starter Section Section -->

    </main>
@endsection

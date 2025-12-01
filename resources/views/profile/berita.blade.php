@extends('profile.components.layout')

@section('content')
    <style>
        .news-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.12);
            /* color: whitesmoke; */
        }

        .news-card img {
            height: 220px;
            object-fit: cover;
        }

        .news-card .card-body {
            padding: 20px;
        }

        .news-card .card-title {
            /* font-weight: 600; */
            /* color: #2756e5; */
            font-size: 1.2rem;
        }

        .news-card .card-text {
            color: #666;
        }

        .news-date {
            font-size: 0.9rem;
            color: #999;
        }

        .btn-readmore {
            background-color: #1447e6;
            color: white;
            transition: 0.3s;
            border-radius: 8px;
        }

        .btn-readmore:hover {
            background-color: #1944c5;
        }

        .pagination .page-link {
            color: #1447e6;
        }

        .pagination .page-link.active {
            background-color: #1447e6;
            color: white;
            border-color: #1447e6;
        }
    </style>


    <main class="main">
        <!-- Starter Section Section -->
        <section id="visi-misi" class="starter-section section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Berita PC PMII</h2>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="row g-4">

                    <!-- Berita 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card news-card">
                            <img src="{{ asset('img/img-7.jpeg') }}" class="card-img-top" alt="Berita 1">
                            <div class="card-body">
                                <div class="news-date mb-2"><i class="bi bi-calendar-event"></i> 5 Oktober 2025</div>
                                <h5 class="card-title">Pelatihan Kepemimpinan PC PMII di Probolinggo</h5>
                                <p class="card-text">PC PMII Probolinggo menggelar pelatihan kepemimpinan bagi kader muda untuk memperkuat peran perempuan dalam organisasi dan masyarakat.</p>
                                <a href="{{ route('detail-berita') }}" class="btn btn-readmore btn-sm">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <!-- Berita 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card news-card">
                            <img src="{{ asset('img/img-9.jpeg') }}" class="card-img-top" alt="Berita 2">
                            <div class="card-body">
                                <div class="news-date mb-2"><i class="bi bi-calendar-event"></i> 28 September 2025</div>
                                <h5 class="card-title">Gelar Bakti Sosial di Kecamatan Leces</h5>
                                <p class="card-text">Kegiatan bakti sosial dilakukan dalam rangka memperingati Hari Santri Nasional, dengan fokus pada pemberian bantuan kepada masyarakat kurang mampu.</p>
                                <a href="#" class="btn btn-readmore btn-sm">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <!-- Berita 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card news-card">
                            <img src="{{ asset('img/img-8.jpeg') }}" class="card-img-top" alt="Berita 3">
                            <div class="card-body">
                                <div class="news-date mb-2"><i class="bi bi-calendar-event"></i> 12 September 2025</div>
                                <h5 class="card-title">Rapat Koordinasi Bersama PAC se-Kabupaten</h5>
                                <p class="card-text">Pengurus Cabang PMII Probolinggo menggelar rapat koordinasi bersama seluruh PAC untuk evaluasi dan perencanaan kegiatan 2026.</p>
                                <a href="#" class="btn btn-readmore btn-sm">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-5">
                    <nav>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Sebelumnya</a></li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">Berikutnya</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </section><!-- /Starter Section Section -->

    </main>
@endsection

@extends('profile.components.layout')

@section('content')
    <style>
        #visi-misi {
            background: linear-gradient(180deg, #ffffff 0%, #f7f8fc 100%);
        }

        #visi-misi .visi-box {
            max-width: 800px;
            background: #e8ebf5;
            border-left: 6px solid #1447e6;
        }

        #visi-misi p {
            line-height: 1.8;
        }

        #visi-misi .misi-card {
            background: #ffffff;
            transition: all 0.3s ease;
        }

        #visi-misi .misi-card:hover {
            background: #e8edf5;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
    </style>

    <main class="main">
        <!-- Starter Section Section -->
        <section id="visi-misi" class="starter-section section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Visi Dan Misi</h2>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="row align-items-center g-5">
                    <!-- Visi -->
                    <div class="visi text-center mb-5" data-aos="zoom-out">
                        <div class="visi-box mx-auto p-4 rounded-4 shadow-sm">
                            <h4 class="fw-bold text-primary mb-3">Visi</h4>
                            <p class="fst-italic text-dark">
                                “PMII Probolinggo Cerdas Berkarakter.”
                            </p>
                        </div>
                    </div>
                    <div class="misi mt-5" data-aos="zoom-out">
                        <h4 class="fw-bold text-primary text-center mb-4">Misi</h4>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4">
                                <div class="misi-card p-4 rounded-4 shadow-sm h-100 text-center">
                                    <i class="bi bi-mortarboard fs-1 text-primary mb-3"></i>
                                    <p>Meningkatkan kualitas sumberdaya kader melalui program pendidikan dan pelatihan berkelanjutan.</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="misi-card p-4 rounded-4 shadow-sm h-100 text-center">
                                    <i class="bi bi-people fs-1 text-primary mb-3"></i>
                                    <p>Meningkatkan gerakan berbasis kerakyatan.</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="misi-card p-4 rounded-4 shadow-sm h-100 text-center">
                                    <i class="bi bi-cpu fs-1 text-primary mb-3"></i>
                                    <p>Optimalisasi Sistem Informasi (digitalisasi) yang efektif untuk mendukung pengambilan keputusan dalam organisasi.</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="misi-card p-4 rounded-4 shadow-sm h-100 text-center">
                                    <i class="bi bi-handshake fs-1 text-primary mb-3"></i>
                                    <p>Menjalin kerjasama dengan berbagai pihak untuk memperluas jaringan dan meningkatkan kapasitas organisasi serta kemandirian organisasi.</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="misi-card p-4 rounded-4 shadow-sm h-100 text-center">
                                    <i class="bi bi-heart fs-1 text-primary mb-3"></i>
                                    <p>Membangun budaya organisasi yang menjunjung tinggi akhlakul karimah dan toleransi berlandaskan ajaran Ahlus Sunnah wal Jamaah.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </section><!-- /Starter Section Section -->

    </main>
@endsection

@extends('profile.components.layout')

@section('content')
    <style>
        #sambutan {
            background: linear-gradient(180deg, #f8fdf8 0%, #ffffff 100%);
        }

        #sambutan .photo-wrapper {
            position: relative;
            display: inline-block;
        }

        #sambutan .photo-wrapper::before {
            content: "";
            position: absolute;
            top: -15px;
            left: -15px;
            right: -15px;
            bottom: -15px;
            border-radius: 20px;
            border: 2px solid #198754;
            z-index: -1;
        }

        #sambutan img {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        #sambutan img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
        }

        #sambutan p {
            text-align: justify;
            line-height: 1.8;
        }

        #sambutan h2 {
            border-left: 5px solid #198754;
            padding-left: 15px;
        }
    </style>

    <main class="main">
        <!-- Starter Section Section -->
        <section id="starter-section" class="starter-section section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Sambutan Ketua</h2>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-5 text-center" data-aos="fade-right">
                        <div class="photo-wrapper">
                            <img src="{{ asset('img/img-3_.jpg') }}" alt="Ketua Umum PMII Probolinggo" class="img-fluid rounded-4 shadow-lg">
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-left">
                        <h2 class="fw-bold mb-3">Sambutan Ketua Umum PC PMII Kabupaten Probolinggo</h2>
                        <p class="lead text-secondary">
                            Assalamu'alaikum warahmatullahi wabarakatuh,
                        </p>
                        <p style="text-align: justify;">Puji syukur kita panjatkan ke hadirat Allah SWT atas limpahan rahmat, taufik, dan hidayah-Nya. Pergerakan Mahasiswa Islam Indonesia (PMII) Cabang Kabupaten Probolinggo berkomitmen untuk terus berkhidmat kepada umat, bangsa, dan negara.</p>
                        <p style="text-align: justify;">Melalui semangat intelektual, spiritual, dan sosial, kami berupaya menghadirkan kader-kader yang progresif, kritis, dan berakhlakul karimah.</p>
                        <p class="fw-semibold mt-4">Wassalamu'alaikum warahmatullahi wabarakatuh.</p>
                        <h5 class="fw-bold mt-3 mb-0 text-dark">Dedi Bayu Angga</h5>
                        <small class="text-muted">Ketua Umum PC PMII Kabupaten Probolinggo</small>
                    </div>
                </div>
            </div>

        </section><!-- /Starter Section Section -->

    </main>
@endsection

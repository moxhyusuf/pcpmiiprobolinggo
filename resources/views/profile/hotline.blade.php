@extends('profile.components.layout')

@section('content')
    <style>
        .hotline-header {
            background-color: #1447e6;
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .hotline-header h1 {
            font-weight: 700;
        }

        .hotline-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .hotline-card:hover {
            transform: translateY(-5px);
        }

        .hotline-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #e6f4ea;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
            color: #1447e6;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 102, 51, 0.25);
            border-color: #1447e6;
        }

        .btn-hotline {
            background-color: #1447e6;
            color: white;
            transition: 0.3s;
        }

        .btn-hotline:hover {
            background-color: #193fb3;
            color: whitesmoke;
        }
    </style>
    <main class="main">
        <section class="starter-section section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Hotline</h2>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="row g-4 justify-content-center">

                    <div class="col-md-4">
                        <div class="card hotline-card text-center p-4">
                            <div class="hotline-icon mx-auto mb-3">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Telepon</h5>
                            <p>Hubungi kami melalui sambungan langsung untuk layanan mendesak.</p>
                            <p class="fw-semibold fs-5 ">+62 857-9154-0343</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card hotline-card text-center p-4">
                            <div class="hotline-icon mx-auto mb-3">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <h5 class="fw-bold mb-2">WhatsApp</h5>
                            <p>Klik untuk langsung terhubung dengan admin PC PMII Probolinggo.</p>
                            <a href="https://wa.me/+6285791540343" target="_blank" class="btn btn-hotline w-100">
                                Chat Sekarang
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card hotline-card text-center p-4">
                            <div class="hotline-icon mx-auto mb-3">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Email</h5>
                            <p>Kirimkan pertanyaan atau pengaduan Anda melalui email resmi kami.</p>
                            <p class="fw-semibold">pmiiprobolinggo87@gmail.com</p>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- /Starter Section Section -->
    </main>
@endsection

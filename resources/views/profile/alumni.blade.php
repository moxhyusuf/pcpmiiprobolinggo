@extends('profile.components.layout')

@section('content')
    <style>
        .team-grid .team-member {
            background-color: var(--surface-color);
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
        }

        .team-grid .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .team-grid .team-member:hover .overlay {
            opacity: 1;
            visibility: visible;
        }

        .team-grid .team-member:hover .member-photo img {
            transform: scale(1.1);
        }

        .team-grid .team-member .member-photo {
            position: relative;
            overflow: hidden;
            height: 280px;
        }

        .team-grid .team-member .member-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .team-grid .team-member .member-photo .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(54, 144, 231, 0.9), rgba(54, 144, 231, 0.7));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s;
        }

        .team-grid .team-member .member-photo .overlay .social-icons {
            display: flex;
            gap: 1rem;
        }

        .team-grid .team-member .member-photo .overlay .social-icons a {
            width: 45px;
            height: 45px;
            background-color: var(--surface-color);
            color: var(--accent-color);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s;
        }

        .team-grid .team-member .member-photo .overlay .social-icons a:hover {
            background-color: var(--accent-color);
            color: var(--contrast-color);
            transform: translateY(-3px);
        }

        .team-grid .team-member .member-photo .overlay .social-icons a i {
            font-size: 1.1rem;
        }

        .team-grid .team-member .member-info {
            padding: 2rem 1.5rem;
            text-align: center;
        }

        .team-grid .team-member .member-info h4 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--heading-color);
        }

        .team-grid .team-member .member-info .position {
            color: var(--accent-color);
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: block;
            margin-bottom: 1rem;
        }

        .team-grid .team-member .member-info p {
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 0;
            color: color-mix(in srgb, var(--default-color), transparent 25%);
        }
    </style>

    <main class="main">
        <!-- Starter Section Section -->
        <section id="visi-misi" class="starter-section section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Alumni PMII</h2>
            </div><!-- End Section Title -->
            <div class="container">
                <div class="team-grid" data-aos="fade-up" data-aos-delay="400">
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="team-member" data-aos="flip-left" data-aos-delay="100">
                                <div class="member-photo">
                                    <img src="{{ asset('img/img-3_.jpg') }}" class="img-fluid" alt="Team Member">
                                    <div class="overlay">
                                        <div class="social-icons">
                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Dedi Bayu Angga</h4>
                                    <span class="position">Ketua Umum</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="team-member" data-aos="flip-left" data-aos-delay="150">
                                <div class="member-photo">
                                    <img src="{{ asset('img/empty.jpg') }}" class="img-fluid" alt="Team Member">
                                    <div class="overlay">
                                        <div class="social-icons">
                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Nama </h4>
                                    <span class="position">Jabatan</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="team-member" data-aos="flip-left" data-aos-delay="200">
                                <div class="member-photo">
                                    <img src="{{ asset('img/empty.jpg') }}" class="img-fluid" alt="Team Member">
                                    <div class="overlay">
                                        <div class="social-icons">
                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Nama </h4>
                                    <span class="position">Jabatan</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="team-member" data-aos="flip-left" data-aos-delay="250">
                                <div class="member-photo">
                                    <img src="{{ asset('img/empty.jpg') }}" class="img-fluid" alt="Team Member">
                                    <div class="overlay">
                                        <div class="social-icons">
                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Nama </h4>
                                    <span class="position">Jabatan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section><!-- /Starter Section Section -->

    </main>
@endsection

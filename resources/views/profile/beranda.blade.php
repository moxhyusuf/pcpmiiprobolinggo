@extends('profile.components.layout')

@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="hero-content">
                    <div class="row align-items-center">

                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                            <div class="content">
                                <h1 class="hero-title mb-4">PC PMII Probolinggo</h1>
                                <p class="hero-subtitle mb-4">Tanpa kecintaan yang tulus, tak akan lahir semangat juang yang membara. PC PMII Probolinggo terus melangkah maju bukan hanya karena sekadar janji, tetabolkarena adanya dedikasi, loyalitas, dan komitmen yang kuat dari setiap kadernya.</p>

                                <div class="hero-actions d-flex flex-wrap gap-3 mb-4">
                                    <a href="https://wa.me/+6285791540343" target="_blank" class="btn btn-outline">Hubungi Kami</a>
                                </div>

                                <div class="hero-stats">
                                    <div class="stat-item">
                                        <h3><span data-purecounter-start="0" data-purecounter-end="2250" data-purecounter-duration="1" class="purecounter"></span>+</h3>
                                        <p>Total Anggota</p>
                                    </div>
                                    <div class="stat-item">
                                        <h3><span data-purecounter-start="0" data-purecounter-end="13" data-purecounter-duration="1" class="purecounter"></span></h3>
                                        <p>Rayon</p>
                                    </div>
                                    <div class="stat-item">
                                        <h3><span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span></h3>
                                        <p>Komisariat</p>
                                    </div>
                                    <div class="stat-item">
                                        <h3><span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="1" class="purecounter"></span>+</h3>
                                        <p>Alumni</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                            <div class="hero-images">
                                <div class="main-image">
                                    <img src="{{ asset('img/img-7.jpeg') }}" alt="Signature Mediterranean Dish" class="img-fluid">
                                </div>
                                <div class="floating-images">
                                    <!-- <div class="floating-image floating-image-1">
                                                                                                                                        <img src="assets/img/logo-pmii.png" alt="Grilled Seafood" class="img-fluid">
                                                                                                                                    </div> -->
                                    <div class="floating-image floating-image-2">
                                        <img src="{{ asset('img/logo-pmii.png') }}" alt="Mediterranean Dessert" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="about-image">
                            <img src="{{ asset('img/img-3_.jpg') }}" alt="Executive Chef" class="img-fluid rounded-lgd shadow">
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="about-content">
                            <div class="section-header">
                                <h2>Kenali Ketua Umum Kami</h2>
                                <p class="subtitle">Mewujudkan Gerakan Kaderisasi yang Progresif dan Transformatif</p>
                            </div>

                            <div class="story-text">
                                <p>PC PMII Probolinggo merupakan wadah bagi kader-kader pergerakan untuk mengembangkan potensi intelektual, spiritual, dan sosial dalam bingkai nilai-nilai Ahlussunnah wal Jamaah. Dengan semangat “Dzikir, Fikir, dan Amal Sholeh”, kami berkomitmen untuk menjadi garda terdepan dalam membangun peradaban bangsa yang berkeadilan dan berkemajuan.</p>
                                <p>Di bawah kepemimpinan Dedi Bayu Angga, PC PMII Probolinggo masa khidmat 2025–2026 berfokus pada penguatan kaderisasi, kolaborasi lintas sektor, serta optimalisasi digitalisasi organisasi.</p>
                            </div>


                            <div class="chef-quote">
                                <blockquote>
                                    "Kader PMII harus hadir sebagai motor perubahan — menjaga nilai-nilai keislaman dan kebangsaan dalam setiap langkah perjuangan."
                                </blockquote>
                                <cite>— Dedi Bayu Angga, Ketua Umum PC PMII Probolinggo</cite>
                            </div>

                            <div class="cta-buttons">
                                <a href="https://wa.me/+6285791540343" target="_blank" class="btn btn-outline">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="restaurant-gallery" data-aos="fade-up" data-aos-delay="400">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-item">
                                <img src="{{ asset('img/img-10.jpg') }}" alt="" class="img-fluid rounded">
                                <div class="gallery-caption">
                                    <h4>Pelantikan Kader Baru PC PMII Probolinggo</h4>
                                    <p>Momentum pelantikan kader baru sebagai langkah awal meneguhkan komitmen perjuangan dan penguatan nilai-nilai keislaman serta kebangsaan di lingkungan PMII.</p>
                                </div>
                            </div>
                        </div><!-- End Gallery Item -->

                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-item">
                                <img src="{{ asset('img/img-11.jpg') }}" alt="Signature Dish" class="img-fluid rounded">
                                <div class="gallery-caption">
                                    <h4>Pelatihan Kader Dasar di Alam Terbuka</h4>
                                    <p>Kegiatan kaderisasi berbasis alam yang membangun solidaritas, semangat juang, serta kepedulian sosial antar anggota PMII Probolinggo.</p>
                                </div>
                            </div>
                        </div><!-- End Gallery Item -->

                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-item">
                                <img src="{{ asset('img/img-12.jpeg') }}" alt="Wine Selection" class="img-fluid rounded">
                                <div class="gallery-caption">
                                    <h4>Focus Group Discussion: Bidang Hukum dan HAM</h4>
                                    <p>Forum diskusi strategis yang menghadirkan narasumber ahli untuk memperkuat pemahaman kader terhadap isu-isu hukum, HAM, dan kebijakan publik.</p>
                                </div>
                            </div>
                        </div><!-- End Gallery Item -->
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->


        <!-- About Section -->
        <section id="about" class="about1 section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="200">
                        <div class="about-image">
                            <img src="{{ asset('img/img-8.jpeg') }}" alt="About Our Consulting Firm" class="img-fluid main-image">
                            <div class="experience-badge">
                                <span class="years">65+</span>
                                <span class="text">Tahun Berkhidmat</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="about-content">
                            <h2>Pimpinan Cabang PMII Probolinggo</h2>
                            <p>Pergerakan Mahasiswa Islam Indonesia (PMII) Cabang Probolinggo adalah organisasi kaderisasi berbasis mahasiswa yang berlandaskan nilai-nilai Ahlussunnah wal Jamaah An-Nahdliyah. PMII Probolinggo berkomitmen mencetak kader yang berintegritas, kritis, progresif, dan berjiwa sosial tinggi, demi terwujudnya masyarakat adil dan berkeadaban.</p>
                            <div class="row features-row">
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <i class="bi bi-feather"></i>
                                        </div>
                                        <h4>Intelektual & Gerakan Pemikiran</h4>
                                        <p>Mendorong lahirnya gagasan-gagasan kritis dan solutif untuk menjawab tantangan zaman melalui forum diskusi, kajian, dan penelitian kader.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <i class="bi bi-lightbulb"></i>
                                        </div>
                                        <h4>Pendidikan & Kaderisasi</h4>
                                        <p>Membangun generasi PC PMII yang berilmu, berwawasan luas, dan berkarakter Islami.</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <i class="bi bi-universal-access-circle"></i>
                                        </div>
                                        <h4>Sosial & Kemanusiaan</h4>
                                        <p>Aktif dalam kegiatan sosial, kesehatan, dan aksi kemanusiaan untuk membantu sesama.</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <i class="bi bi-stars"></i>
                                        </div>
                                        <h4>Dakwah & Keislaman</h4>
                                        <p>Menyebarkan dakwah ahlussunnah wal jamaah annahdliyah dengan cara yang santun dan menyejukkan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Work Process Section -->
        <section id="work-process" class="work-process section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Sejarah Berdirinya</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="steps-content">
                            <h2>Sejarah PC PMII Probolinggo</h2>
                            <p class="lead" style="text-align: justify;">Pergerakan Mahasiswa Islam Indonesia (PMII) berdiri secara nasional pada tanggal 17 April 1960 di Surabaya, sebagai organisasi kaderisasi mahasiswa yang berlandaskan nilai-nilai Ahlussunnah wal Jamaah An-Nahdliyah.</p>
                            <p style="text-align: justify;">Di Kabupaten Probolinggo, PC PMII Probolinggo tumbuh menjadi wadah kaderisasi dan perjuangan mahasiswa yang aktif di berbagai bidang — mulai dari pendidikan, sosial, keagamaan, hingga pemberdayaan masyarakat. Perjalanan panjang ini menjadikan PMII Probolinggo sebagai organisasi mahasiswa yang konsisten menanamkan nilai-nilai intelektual, spiritual, dan sosial dalam kehidupan kadernya.</p>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="300">
                        <div class="steps-list">
                            <div class="step-item">
                                <div class="step-number">01</div>
                                <div class="step-content">
                                    <h3>Berdirinya PMII Nasional (1960)</h3>
                                    <p>PMII resmi berdiri di Surabaya sebagai organisasi mahasiswa yang berhaluan Islam Ahlussunnah wal Jamaah dan berafiliasi dengan Nahdlatul Ulama.</p>
                                </div>
                            </div>

                            <div class="step-item">
                                <div class="step-number">02</div>
                                <div class="step-content">
                                    <h3>Awal Gerakan di Probolinggo</h3>
                                    <p>Gerakan mahasiswa Islam di Probolinggo mulai berkembang pada akhir tahun 1980-an melalui inisiatif mahasiswa kampus-kampus berbasis NU yang bertekad membangun wadah perjuangan kader muda.</p>
                                </div>
                            </div>

                            <div class="step-item">
                                <div class="step-number">03</div>
                                <div class="step-content">
                                    <h3>Pembentukan Cabang Probolinggo</h3>
                                    <p>PC PMII Probolinggo resmi terbentuk sebagai bagian dari struktur nasional, menjadi pusat koordinasi kaderisasi dan pengembangan ideologi pergerakan di tingkat daerah.</p>
                                </div>
                            </div>

                            <div class="step-item">
                                <div class="step-number">04</div>
                                <div class="step-content">
                                    <h3>Masa Khidmat 2025–2026</h3>
                                    <p>Di bawah kepemimpinan Dedi Bayu Angga, PC PMII Probolinggo mengusung semangat “Transformasi Gerakan, Digitalisasi Organisasi” sebagai arah baru perjuangan mahasiswa Islam di era modern.</p>
                                </div>
                            </div>

                            <div class="step-item">
                                <div class="step-number">05</div>
                                <div class="step-content">
                                    <h3>Masa Khidmat 2025–2030</h3>
                                    <p>PC PMII Probolinggo mengusung tema “Berdaya untuk Ummat, Berkarya untuk Bangsa” sebagai arah perjuangan lima tahun ke depan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Work Process Section -->


        <!-- Why Choose Us Section -->
        <section id="why-choose-us" class="why-choose-us section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Bergabung Dengan Kami</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="features-content">
                            <h2>Mengapa Bergabung dengan PC PMII Probolinggo</h2>
                            <p style="text-align: justify;  text-indent: 3em">Pergerakan Mahasiswa Islam Indonesia (PMII) Cabang Probolinggo merupakan wadah bagi mahasiswa untuk berproses, belajar, dan berkontribusi bagi agama, bangsa, serta masyarakat.
                                Dengan semangat intelektualitas, spiritualitas, dan solidaritas, PMII menjadi ruang pengembangan diri bagi mahasiswa agar tumbuh menjadi kader yang kritis, mandiri, dan berkarakter Aswaja.</p>

                            <div class="features-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="bi bi-award"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Kebersamaan & Persaudaraan</h4>
                                        <p>Menjalin ukhuwah antar mahasiswa dan lintas kampus, menumbuhkan rasa solidaritas serta semangat perjuangan bersama di bawah nilai-nilai Ahlussunnah wal Jamaah.</p>
                                    </div>
                                </div>

                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Kebersamaan & Ukhuwah</h4>
                                        <p>Menjalin silaturahmi dan kerja sama antaranggota, serta mempererat ukhuwah Islamiyah di tengah masyarakat.</p>
                                    </div>
                                </div>

                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Pemberdayaan Ekonomi</h4>
                                        <p>Mendukung kemandirian ekonomi melalui pelatihan kewirausahaan, koperasi, dan program ekonomi kreatif berbasis komunitas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="features-image">
                            <img src="{{ asset('img/img-9.jpeg') }}" alt="" class="img-fluid main-image">
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Why Choose Us Section -->
    </main>
    <script>
        function toggleScrolled() {
            const selectBody = document.querySelector('body');
            const selectHeader = document.querySelector('#header');
            if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
            window.scrollY > 10 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
        }

        document.addEventListener('scroll', toggleScrolled);
        window.addEventListener('load', toggleScrolled);
    </script>
@endsection

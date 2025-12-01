@extends('profile.components.layout')

@section('content')
    <style>
        .news-image {
            border-radius: 12px;
            max-height: 500px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .news-meta {
            color: #777;
            font-size: 0.95rem;
            margin-top: 10px;
        }

        .news-content {
            margin-top: 30px;
            line-height: 1.8;
        }

        .share-section {
            border-top: 1px solid #ddd;
            margin-top: 40px;
            padding-top: 20px;
        }

        .btn-back {
            background-color: #1447e6;
            color: white;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn-back:hover {
            background-color: #002aa8;
            color: white;
        }
    </style>


    <main class="main">
        <!-- Starter Section Section -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">

                        <!-- Judul -->
                        <h2 class="fw-bold">Pelatihan Kepemimpinan PC PMII di Probolinggo</h2>
                        <div class="news-meta mb-3">
                            <i class="bi bi-calendar-event"></i> 5 Oktober 2025 &nbsp;|&nbsp;
                            <i class="bi bi-person-circle"></i> Admin PC PMII
                        </div>

                        <!-- Gambar Utama -->
                        <div class="news-image mb-4">
                            <img src="{{ asset('img/img-7.jpeg') }}" class="img-fluid" alt="Berita NU">
                        </div>

                        <!-- Isi Berita -->
                        <div class="news-content">
                            <p>
                                Pengurus Cabang Pergerakan Mahasiswa Islam Indonesia (PC PMII) Kabupaten Probolinggo menggelar pelatihan kepemimpinan yang diikuti oleh para kader muda dari berbagai Komisariat dan Rayon.
                                Kegiatan ini bertujuan untuk meningkatkan kapasitas kepemimpinan, memperkuat jiwa intelektual, serta menanamkan nilai-nilai keislaman dan kebangsaan di kalangan kader PMII.
                            </p>

                            <p>
                                Ketua PC PMII Kabupaten Probolinggo dalam sambutannya menyampaikan bahwa kader PMII harus siap menjadi garda terdepan dalam memperjuangkan nilai-nilai Islam Ahlussunnah wal Jamaah serta terus berkontribusi dalam membangun masyarakat yang berkeadaban dan berkeilmuan.
                            </p>

                            <h5>Tujuan Kegiatan</h5>
                            <ul>
                                <li>Meningkatkan kemampuan manajerial dan kepemimpinan kader PMII di tingkat Komisariat dan Rayon.</li>
                                <li>Menumbuhkan semangat kolaborasi dan solidaritas antar kader untuk memperkuat gerakan PMII di daerah.</li>
                                <li>Mendorong mahasiswa kader PMII menjadi agen perubahan sosial yang berorientasi pada nilai keislaman dan kemanusiaan.</li>
                            </ul>

                            <p>
                                Kegiatan ini berlangsung selama dua hari di Aula PC PMII Kabupaten Probolinggo dan menghadirkan narasumber dari Pengurus Wilayah PMII Jawa Timur.
                                Diharapkan seluruh peserta mampu mengimplementasikan pengetahuan dan nilai-nilai yang diperoleh dalam aktivitas organisasi serta kehidupan bermasyarakat.
                            </p>
                        </div>



                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

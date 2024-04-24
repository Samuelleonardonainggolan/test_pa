<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDS Filadelfia Tarutung</title>
    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('img/logoo.jpeg') }}">
</head>

<body>
    <div>
        <!-- Navbar -->
        @include('navbar')

        <!-- Hero image -->
        <div class="hero">
            <img src="{{ asset('img/sampul.jpeg') }}" alt="">
        </div>
    </div>
    <!-- Ketua Yayasan -->
    <div id="fh5co-pricing">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-2 text-center fh5co-heading"
                    style="margin-top: 50px; text-align: center;">
                    <h2>Ketua Yayasan Filadelfia Tarutung</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-5 animate-box fadeInUp animated-fast">
                    <div class="fh5co-blog animate-box">
                        <div class="purple-box"></div><br>
                        <div class="blog-text"
                            style="padding: 15px;box-shadow: 10px 10px 20px -5px rgba(0, 0, 0, 0.18); max-width: 300px;">
                            <img style="width: 100%;" src="{{ asset('img/logoo.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 animate-box fadeInUp animated-fast fh5co-heading pricing-text"
                    style="margin-bottom: 50px; margin-top: 10px;">
                    <p><br>
                        PUJI DAN SYUKUR KEHADIRAT TUHAN YANG MAHA KUASA KARENA RAHMATNYALAH KITA DAPAT MELALUI HARI HARI
                        KITA DENGAN PENUH SUKACITA. PERTAMA TAMA SAYA MENYAMPAIKAN TERIMAKASIH ATAS DIBUATNYA WEBSITE
                        SMA NEGERI 1 SILAEN INI. MELALUI WEBSITE INI DIHARAPKAN DAPAT MEMBANTU TERCAPAINYA KEMAJUAN DI
                        SEKOLAH KITA DAN SEMAKIN MUDAHNYA MASYARAKAT MENGAKSES KEGIATAN KEGIATAN YANG DILAKSANAKAN DI
                        SEKOLAH KITA TERCINTA.
                        SEMOGA WEBSITE INI BERMANFAAT UNTUK SEMUANYA KHUSUSNYA GURU, SISWA DAN KOMITE SEKOLAH.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Kepala Sekolah -->
    <div id="fh5co-pricing">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-2 text-center fh5co-heading"
                    style="margin-top: 50px; text-align: center;">
                    <h2>Kepala Sekolah SD Swasta Filadelfia Tarutung</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-5 animate-box fadeInUp animated-fast">
                    <div class="fh5co-blog animate-box">
                        <div class="purple-box"></div><br>
                        <div class="blog-text"
                            style="padding: 15px;box-shadow: 10px 10px 20px -5px rgba(0, 0, 0, 0.18); max-width: 300px;">
                            <img style="width: 100%;" src="{{ asset('img/logoo.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 animate-box fadeInUp animated-fast fh5co-heading pricing-text"
                    style="margin-bottom: 50px; margin-top: 10px;">
                    <p><br>
                        PUJI DAN SYUKUR KEHADIRAT TUHAN YANG MAHA KUASA KARENA RAHMATNYALAH KITA DAPAT MELALUI HARI HARI
                        KITA DENGAN PENUH SUKACITA. PERTAMA TAMA SAYA MENYAMPAIKAN TERIMAKASIH ATAS DIBUATNYA WEBSITE
                        SMA NEGERI 1 SILAEN INI. MELALUI WEBSITE INI DIHARAPKAN DAPAT MEMBANTU TERCAPAINYA KEMAJUAN DI
                        SEKOLAH KITA DAN SEMAKIN MUDAHNYA MASYARAKAT MENGAKSES KEGIATAN KEGIATAN YANG DILAKSANAKAN DI
                        SEKOLAH KITA TERCINTA.
                        SEMOGA WEBSITE INI BERMANFAAT UNTUK SEMUANYA KHUSUSNYA GURU, SISWA DAN KOMITE SEKOLAH.
                    </p>
                </div>
            </div>
        </div>
    </div><br>
    <!-- Footer -->
    @include('footer')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SDS Filadelfia Tarutung</title>
    <link rel="stylesheet" href="{{ asset('fonts/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('img/logoo.jpeg ') }}">

    <style>
        .button-container {
            display: flex;
            justify-content: space-around;
            margin: 20px;
        }

        .button {
            border: none;
            border-radius: 50%;
            padding: 20px;
            text-align: center;
            background-color: #f0f0f0;
            cursor: pointer;
            height: min-content;
        }

        .button img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .button-text {
            font-weight: bold;
        }

        .button-subtext {
            display: block;
            color: #555;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')

    <!-- content -->
    <div class="hero">
        <img style="width: 100%;" src="{{ asset('img/sampul.jpeg') }}" alt="">
    </div>
    <div class="button-container">
        <div class="button" onclick="window.location.href='data_sekolah.php';">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Capa_1" x="0px" y="0px" viewBox="0 0 70.529 75.529"
                    style="enable-background:new 0 0 70.529 70.529;" xml:space="preserve" width="200px" height="200px"
                    class="img-responsive svg replaced-svg">
                    <path id="svg-oke"
                        d="M66.421,29.17h-1.607v-4.652c0-2.343-1.907-4.25-4.25-4.25h-2.861v-1.557c0-2.343-1.907-4.25-4.25-4.25h-3.155  c-2.343,0-4.25,1.907-4.25,4.25v10.442H24.48V18.711c0-2.343-1.907-4.25-4.25-4.25h-3.155c-2.343,0-4.25,1.907-4.25,4.25v2.894  h-2.86c-2.343,0-4.25,1.907-4.25,4.25v3.883H4.107C1.843,29.737,0,31.644,0,33.987v3.122c0,2.343,1.843,4.25,4.107,4.25h1.607v4.652  c0,2.343,1.907,4.25,4.25,4.25h2.86v1.557c0,2.343,1.907,4.25,4.25,4.25h3.155c2.343,0,4.25-1.907,4.25-4.25v-11.01h21.568v11.01  c0,2.343,1.907,4.25,4.25,4.25h3.155c2.343,0,4.25-1.907,4.25-4.25v-2.894h2.861c2.343,0,4.25-1.907,4.25-4.25v-3.882h1.607  c2.265,0,4.107-1.907,4.107-4.25V33.42C70.529,31.077,68.686,29.17,66.421,29.17z M4.107,38.859c-0.886,0-1.607-0.785-1.607-1.75  v-3.122c0-0.965,0.721-1.75,1.607-1.75h1.607v6.622H4.107z M9.965,47.761c-0.965,0-1.75-0.785-1.75-1.75V25.854  c0-0.965,0.785-1.75,1.75-1.75h2.86v23.656H9.965z M21.98,51.818c0,0.965-0.785,1.75-1.75,1.75h-3.155  c-0.965,0-1.75-0.785-1.75-1.75V18.711c0-0.965,0.785-1.75,1.75-1.75h3.155c0.965,0,1.75,0.785,1.75,1.75V51.818z M24.48,38.308  v-6.655h21.568v6.655H24.48z M55.203,51.818c0,0.965-0.785,1.75-1.75,1.75h-3.155c-0.965,0-1.75-0.785-1.75-1.75V18.711  c0-0.965,0.785-1.75,1.75-1.75h3.155c0.965,0,1.75,0.785,1.75,1.75V51.818z M62.314,44.674c0,0.965-0.785,1.75-1.75,1.75h-2.861  V22.768h2.861c0.965,0,1.75,0.785,1.75,1.75V44.674z M68.029,36.542c0,0.965-0.721,1.75-1.607,1.75h-1.607V31.67h1.607  c0.886,0,1.607,0.785,1.607,1.75V36.542z"
                        fill="red"></path>
                </svg>
                </svg>
                <div class="button-text">Data Sekolah</div>
                <a href="#" class="btn btn-primary">Selanjutnya</a>
        </div>
        <div class="button" onclick="window.location.href='data_alumni.php';">
            <div class="button" onclick="window.location.href='data_sekolah.php';">
                <span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511 611"
                            style="enable-background:new 0 0 511 511;" xml:space="preserve" width="200px"
                            height="180px" class="img-responsive svg replaced-svg">
                            <g>
                                <path id="svg-oke"
                                    d="M503.5,476H487V267h16.5c2.737,0,5.257-1.491,6.575-3.891c1.317-2.4,1.222-5.327-0.247-7.636l-56-88   c-1.377-2.164-3.763-3.474-6.328-3.474H298.606L263,128.394V99h72.5c2.766,0,5.308-1.522,6.613-3.961   c1.305-2.438,1.162-5.398-0.373-7.699L328.514,67.5l13.227-19.84c1.535-2.301,1.677-5.261,0.373-7.699   C340.808,37.522,338.266,36,335.5,36H263v-8.5c0-4.142-3.358-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v100.894L212.394,164H63.5   c-2.564,0-4.951,1.31-6.328,3.474l-56,88c-1.469,2.309-1.564,5.236-0.247,7.636C2.243,265.509,4.763,267,7.5,267H24v209H7.5   c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h496c4.142,0,7.5-3.358,7.5-7.5S507.642,476,503.5,476z M443.383,179l46.455,73   H386.606l-73-73H443.383z M321.486,51l-8.227,12.34c-1.68,2.519-1.68,5.801,0,8.32L321.486,84H263V51H321.486z M67.617,179h129.776   l-73,73H21.163L67.617,179z M39,267h88.498c0.248,0,0.496-0.013,0.744-0.038c0.106-0.01,0.21-0.03,0.315-0.045   c0.137-0.02,0.274-0.036,0.411-0.063c0.122-0.024,0.24-0.058,0.36-0.088c0.117-0.029,0.235-0.056,0.351-0.09   c0.118-0.036,0.233-0.081,0.349-0.122c0.115-0.041,0.23-0.079,0.344-0.126c0.109-0.045,0.213-0.098,0.319-0.148   c0.115-0.055,0.232-0.106,0.345-0.167c0.103-0.055,0.2-0.118,0.3-0.177c0.11-0.065,0.222-0.128,0.329-0.2   c0.112-0.075,0.217-0.158,0.324-0.239c0.088-0.066,0.179-0.127,0.264-0.198c0.192-0.157,0.376-0.323,0.551-0.499L255.5,142.106   l122.696,122.695c0.175,0.175,0.36,0.341,0.551,0.499c0.085,0.07,0.175,0.131,0.263,0.197c0.108,0.081,0.214,0.165,0.326,0.24   c0.106,0.071,0.217,0.133,0.326,0.198c0.101,0.061,0.199,0.124,0.303,0.179c0.112,0.06,0.227,0.111,0.342,0.165   c0.107,0.051,0.213,0.104,0.323,0.15c0.112,0.046,0.226,0.083,0.339,0.124c0.117,0.042,0.233,0.087,0.353,0.124   c0.114,0.035,0.23,0.06,0.345,0.089c0.122,0.031,0.242,0.065,0.366,0.089c0.132,0.026,0.265,0.042,0.398,0.061   c0.109,0.016,0.217,0.036,0.328,0.047c0.246,0.024,0.493,0.037,0.74,0.037H472v209H311V371.5c0-12.958-10.542-23.5-23.5-23.5h-64   c-12.958,0-23.5,10.542-23.5,23.5V476H39V267z M296,380h-81v-8.5c0-4.687,3.813-8.5,8.5-8.5h64c4.687,0,8.5,3.813,8.5,8.5V380z    M215,395h33v81h-33V395z M263,395h33v81h-33V395z"
                                    data-original="#000000" class="active-path" data-old_color="#f85a16" fill="red">
                                </path>
                                <path id="svg-oke"
                                    d="M255.5,323c30.603,0,55.5-24.897,55.5-55.5S286.103,212,255.5,212S200,236.897,200,267.5S224.897,323,255.5,323z    M255.5,227c22.332,0,40.5,18.168,40.5,40.5S277.832,308,255.5,308S215,289.832,215,267.5S233.168,227,255.5,227z"
                                    data-original="#000000" class="active-path" data-old_color="#f85a16" fill="red">
                                </path>
                                <path id="svg-oke"
                                    d="M255.5,275c4.142,0,7.5-3.358,7.5-7.5v-24c0-4.142-3.358-7.5-7.5-7.5s-7.5,3.358-7.5,7.5V260h-16.5   c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5H255.5z"
                                    data-original="#000000" class="active-path" data-old_color="#f85a16" fill="red">
                                </path>
                                <path id="svg-oke"
                                    d="M175.5,388h-40c-4.142,0-7.5,3.358-7.5,7.5v48c0,4.142,3.358,7.5,7.5,7.5h40c4.142,0,7.5-3.358,7.5-7.5v-48   C183,391.358,179.642,388,175.5,388z M168,403v9h-25v-9H168z M143,436v-9h25v9H143z"
                                    data-original="#000000" class="active-path" data-old_color="#f85a16" fill="red">
                                </path>
                                <path id="svg-oke"
                                    d="M103.5,388h-40c-4.142,0-7.5,3.358-7.5,7.5v48c0,4.142,3.358,7.5,7.5,7.5h40c4.142,0,7.5-3.358,7.5-7.5v-48   C111,391.358,107.642,388,103.5,388z M96,403v9H71v-9H96z M71,436v-9h25v9H71z"
                                    data-original="#000000" class="active-path" data-old_color="#f85a16" fill="red">
                                </path>
                                <path id="svg-oke"
                                    d="M173,292h-35c-5.514,0-10,4.486-10,10v53.5c0,4.142,3.358,7.5,7.5,7.5h40c4.142,0,7.5-3.358,7.5-7.5V302   C183,296.486,178.514,292,173,292z M168,307v17h-25v-17H168z M143,348v-9h25v9H143z"
                                    data-original="#000000" class="active-path" data-old_color="#f85a16" fill="red">
                                </path>
                                <path id="svg-oke"
                                    d="M101,292H66c-5.514,0-10,4.486-10,10v53.5c0,4.142,3.358,7.5,7.5,7.5h40c4.142,0,7.5-3.358,7.5-7.5V302   C111,296.486,106.514,292,101,292z M96,307v17H71v-17H96z M71,348v-9h25v9H71z"
                                    data-original="#000000" class="active-path" data-old_color="#f85a16" fill="red">
                                </path>
                                <path id="svg-oke"
                                    d="M407.5,451h40c4.142,0,7.5-3.358,7.5-7.5v-48c0-4.142-3.358-7.5-7.5-7.5h-40c-4.142,0-7.5,3.358-7.5,7.5v48   C400,447.642,403.358,451,407.5,451z M415,436v-9h25v9H415z M440,403v9h-25v-9H440z"
                                    data-original="#000000" class="active-path" data-old_color="#f85a16" fill="red">
                                </path>
                                <path id="svg-oke"
                                    d="M335.5,451h40c4.142,0,7.5-3.358,7.5-7.5v-48c0-4.142-3.358-7.5-7.5-7.5h-40c-4.142,0-7.5,3.358-7.5,7.5v48   C328,447.642,331.358,451,335.5,451z M343,436v-9h25v9H343z M368,403v9h-25v-9H368z"
                                    data-original="#000000" class="active-path" data-old_color="#f85a16" fill="red">
                                </path>
                                <path id="svg-oke"
                                    d="M407.5,363h40c4.142,0,7.5-3.358,7.5-7.5V302c0-5.514-4.486-10-10-10h-35c-5.514,0-10,4.486-10,10v53.5   C400,359.642,403.358,363,407.5,363z M415,348v-9h25v9H415z M440,307v17h-25v-17H440z"
                                    data-original="#000000" class="active-path" data-old_color="#f85a16" fill="red">
                                </path>
                                <path id="svg-oke"
                                    d="M335.5,363h40c4.142,0,7.5-3.358,7.5-7.5V302c0-5.514-4.486-10-10-10h-35c-5.514,0-10,4.486-10,10v53.5   C328,359.642,331.358,363,335.5,363z M343,348v-9h25v9H343z M368,307v17h-25v-17H368z"
                                    data-original="#000000" class="active-path" data-old_color="#f85a16"
                                    fill="red"></path>
                        </svg>
                        <div class="button-text">DATA ALUMNI</div>
                        <a href="#" class="btn btn-primary">Selanjutnya</a>
            </div>
        </div>
    </div>
    <!-- content -->
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
                    <p>
                    <p>PUJI DAN SYUKUR KEHADIRAT TUHAN YANG MAHA KUASA KARENA RAHMATNYALAH KITA DAPAT MELALUI HARI HARI
                        KITA DENGAN PENUH SUKACITA. PERTAMA TAMA SAYA MENYAMPAIKAN TERIMAKASIH ATAS DIBUATNYA WEBSITE SD
                        SWASTA FILADELFIA TARUTUNG INI. MELALUI WEBSITE INI DIHARAPKAN DAPAT MEMBANTU TERCAPAINYA
                        KEMAJUAN DI SEKOLAH KITA DAN SEMAKIN MUDAHNYA MASYARAKAT MENGAKSES KEGIATAN KEGIATAN YANG
                        DILAKSANAKAN DI SEKOLAH KITA TERCINTA.&nbsp;</p>
                    <p>SEMOGA WEBSITE INI BERMANFAAT UNTUK SEMUANYA KHUSUSNYA GURU, SISWA DAN KOMITE SEKOLAH.</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
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
                    style="margin-bottom: 50xpx; margin-top: 10px;">
                    <p>
                    <p>PUJI DAN SYUKUR KEHADIRAT TUHAN YANG MAHA KUASA KARENA RAHMATNYALAH KITA DAPAT MELALUI HARI HARI
                        KITA DENGAN PENUH SUKACITA. PERTAMA TAMA SAYA MENYAMPAIKAN TERIMAKASIH ATAS DIBUATNYA WEBSITE SS
                        SWASTA FILADELFIA TARUTUNG INI. MELALUI WEBSITE INI DIHARAPKAN DAPAT MEMBANTU TERCAPAINYA
                        KEMAJUAN DI SEKOLAH KITA DAN SEMAKIN MUDAHNYA MASYARAKAT MENGAKSES KEGIATAN KEGIATAN YANG
                        DILAKSANAKAN DI SEKOLAH KITA TERCINTA.&nbsp;</p>
                    <p>SEMOGA WEBSITE INI BERMANFAAT UNTUK SEMUANYA KHUSUSNYA GURU, SISWA DAN KOMITE SEKOLAH.</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="fh5co-pricing">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-2 text-center fh5co-heading"
                    style="margin-top: 50px; text-align: center;">
                    <h2>Visi</h2>
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
                    <p>
                    <p>PUJI DAN SYUKUR KEHADIRAT TUHAN YANG MAHA KUASA KARENA RAHMATNYALAH KITA DAPAT MELALUI HARI HARI
                        KITA DENGAN PENUH SUKACITA. PERTAMA TAMA SAYA MENYAMPAIKAN TERIMAKASIH ATAS DIBUATNYA WEBSITE SD
                        SWASTA FILADELFIA TARUTUNG INI. MELALUI WEBSITE INI DIHARAPKAN DAPAT MEMBANTU TERCAPAINYA
                        KEMAJUAN DI SEKOLAH KITA DAN SEMAKIN MUDAHNYA MASYARAKAT MENGAKSES KEGIATAN KEGIATAN YANG
                        DILAKSANAKAN DI SEKOLAH KITA TERCINTA.&nbsp;</p>
                    <p>SEMOGA WEBSITE INI BERMANFAAT UNTUK SEMUANYA KHUSUSNYA GURU, SISWA DAN KOMITE SEKOLAH.</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-pricing">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-2 text-center fh5co-heading"
                    style="margin-top: 50px; text-align: center;">
                    <h2>Misi</h2>
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
                    <p>
                    <p>PUJI DAN SYUKUR KEHADIRAT TUHAN YANG MAHA KUASA KARENA RAHMATNYALAH KITA DAPAT MELALUI HARI HARI
                        KITA DENGAN PENUH SUKACITA. PERTAMA TAMA SAYA MENYAMPAIKAN TERIMAKASIH ATAS DIBUATNYA WEBSITE SD
                        SWASTA FILADELFIA TARUTUNG INI. MELALUI WEBSITE INI DIHARAPKAN DAPAT MEMBANTU TERCAPAINYA
                        KEMAJUAN DI SEKOLAH KITA DAN SEMAKIN MUDAHNYA MASYARAKAT MENGAKSES KEGIATAN KEGIATAN YANG
                        DILAKSANAKAN DI SEKOLAH KITA TERCINTA.&nbsp;</p>
                    <p>SEMOGA WEBSITE INI BERMANFAAT UNTUK SEMUANYA KHUSUSNYA GURU, SISWA DAN KOMITE SEKOLAH.</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-pricing">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-2 text-center fh5co-heading"
                    style="margin-top: 50px; text-align: center;">
                    <h2>Sejarah</h2>
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
                    <p>
                    <p>PUJI DAN SYUKUR KEHADIRAT TUHAN YANG MAHA KUASA KARENA RAHMATNYALAH KITA DAPAT MELALUI HARI HARI
                        KITA DENGAN PENUH SUKACITA. PERTAMA TAMA SAYA MENYAMPAIKAN TERIMAKASIH ATAS DIBUATNYA WEBSITE SD
                        SWASTA FILADELFIA TARUTUNG INI. MELALUI WEBSITE INI DIHARAPKAN DAPAT MEMBANTU TERCAPAINYA
                        KEMAJUAN DI SEKOLAH KITA DAN SEMAKIN MUDAHNYA MASYARAKAT MENGAKSES KEGIATAN KEGIATAN YANG
                        DILAKSANAKAN DI SEKOLAH KITA TERCINTA.&nbsp;</p>
                    <p>SEMOGA WEBSITE INI BERMANFAAT UNTUK SEMUANYA KHUSUSNYA GURU, SISWA DAN KOMITE SEKOLAH.</p>
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

<nav class="navbar navbar-expand-lg nav-orange">
    <div class="logo clearfix">
        <div class="header">
            <img src="{{ asset('img/logoo.jpeg') }}" alt="Logo Sekolah" width="80px" class="logo">
            <div class="text float-right">
                <span class="nama">SD SWASTA FILADELFIA TARUTUNG</span><br>
                <span class="motto">TUT WURI HANDAYANI</span>
            </div>
        </div>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link text-white navlink" href="{{ route('home') }}">HOME</a>
            <a class="nav-item nav-link text-white navlink" href="{{ route('berita') }}">ARTIKEL</a>
            <a class="nav-item nav-link text-white navlink" href="{{ route('siswa') }}">SISWA</a>
            <a class="nav-item nav-link text-white navlink" href="{{ route('tentang') }}">TENTANG</a>
        </div>
        <a class="nav-item nav-link text-white" href="{{ route('login') }}"><i class="fa-solid fa-user" style="color:white;"></i></a>
    </div>
</nav>

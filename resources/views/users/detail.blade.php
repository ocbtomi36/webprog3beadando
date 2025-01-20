@extends('layouts.public')
@section('page_title','Felhasználó Adatai')
@section('page_content')
<body id="home">
    <header class="hero">
        <nav id="navbar" class="navbar">
            <h1 class="logo">
                <span class="text-primary">Rendezvényszervező</span>
            </h1>
        </nav>
        <div class="content">
            <h1>Felhasználó adatai</h1>
        </div>
    </header>
    <main>
        <div id="card_container">
            <div class="cardevent">
                <div class="content">
                    <p><strong>Vezetéknév:</strong>{{$user->vezetek_nev}}</p>
                    <p><strong>Utónev:</strong>{{$user->uto_nev}}</p>
                    <p><strong>Email cím:</strong>{{$user->e_mail}}</p>
                    <p><strong>Ország:</strong>{{$user->cim->orszag}}</p>
                    <p><strong>Város:</strong>{{$user->cim->varos}}</p>
                    <p><strong>Utca:</strong>{{$user->cim->utca}}</p>
                    <p><strong>Házszám:</strong>{{$user->cim->hazszam}}</p>
                    <p><strong>Telefonszám:</strong>{{$user->profil->telefonszam}}</p>
                    <div class="buttons">
                        <a href="{{route('users.list')}}" class="btn">Vissza</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer bg-light">
        <div class="social">
            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="#"><i class="fab fa-youtube fa-2x"></i></a>
            <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
        </div>
        <p>Copyright &copy; 2024</p>
    </footer>
</body>
</html>


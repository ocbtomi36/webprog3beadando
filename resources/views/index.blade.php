@extends('layouts.public')
@section('page_title','Főoldal')
@section('page_content')
<body id="home">
    <header class="hero">
        <div id="navbar" class="navbar">
            <h1 class="logo">
               <span class="text-primary"> <i class="fa-brands fa-react"></i>Felhasználó Kezelő</span>
            </h1>
        </div>
        <div class="content">
            <h1>Fogaljon weboldalunkon keresztül</h1>
            <p>Nálunk biztos van olyan rendezvény ami érdekelheti önt!</p>
            <a href="{{route('main.page')}}" class="btn"><i class="fas fa-chevron-right"></i> Bejelentkezés</a>
            <h4>Nincs még felhasználói fiókja? <br></h4>
            <a href="{{route('user.add')}}" class="btn-little">Regisztráció</a>
        </div>
    </header>
    <main>
        <section id="rolunk" class="icons bg-dark">
            <div class="flex-items">
                <div>
                    <i class="fas fa-university fa-2x"></i>
                    <div>
                        <h3>Felhasználó Hozzáadás</h3>
                        <p>Lorem ipsum dolor, sit amet
                        consectetur adipisicing elit.
                        Tempore, repellendus?</p>
                    </div>
                </div>
                <div>
                    <i class="fa-solid fa-ticket fa-2x"></i>
                    <div>
                        <h3>Helyfoglalás</h3>
                        <p>Lorem ipsum dolor, sit amet
                        consectetur adipisicing elit.
                        Tempore, repellendus?</p>
                    </div>
                </div>
                <div>
                    <i class="fa-solid fa-user fa-2x"></i>
                    <div>
                        <h3>Tanácsadás</h3>
                        <p>Lorem ipsum dolor, sit amet
                        consectetur adipisicing elit.
                        Tempore, repellendus? Ok</p>
                    </div>
                </div>
            </div>
        </section>
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

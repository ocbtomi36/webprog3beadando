@extends('layouts.public')
@section('page_title','Felhasználók Listája')
@section('page_content')
<body id="home">
        <header class="hero">
            <div id="navbar" class="navbar">
                <h1 class="logo">
                        <span class="text-primary"> <i class="fa-brands fa-react"></i> Rendezvényszervező</span>
                </h1>
            </div>
        <div class="content">
            <h1>Regisztrált felhasználók</h1>
            <a href="{{route('user.add')}}" class="btn"><i class="fas fa-chevron-right"></i>Új felhasználó hozzáadása</a>
        </div>
        </header>
        <div id="card_container">
            <!-- Minta kártya -->
            @if(count($users) !== 0)
            @foreach ( $users as $user )
                <div class="card">
                    <div class="content">
                        <p><strong>Vezetéknév:</strong>{{$user['vezetek_nev']}}</p>
                        <p><strong>Utónév:</strong>{{$user['uto_nev']}}</p>
                        <p><strong>E-mail:</strong>{{$user['e_mail']}}</p>
                        <p><strong>Telefonszám</strong>{{$user['telefonszam']}}</p>
                        <p>{{$user['idfelhasznalo']}}</p>
                    </div>
                    <div class="buttons">
                        <a href="{{route('user.one',$user['idfelhasznalo'])}}" class="btn">Részletek</a>
                        <a href="{{route('get.update',$user['idfelhasznalo'])}}" class="btn">Módosít</a>
                        <form action="{{route('user.destroy',$user['idfelhasznalo'])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-del">Töröl</button>
                        </form>
                    </div>
                </div>
            @endforeach
            @endif
            <!-- További kártyák hasonló szerkezettel -->
        </div>
        <section id="rolunk" class="icons bg-dark">
            <div class="flex-items">
                <div>
                    <i class="fas fa-university fa-2x"></i>
                    <div>
                        <h3>Rendezvény regisztrálás</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, repellendus?</p>
                    </div>
                </div>
                <div>
                    <i class="fa-solid fa-ticket fa-2x"></i>
                    <div>
                        <h3>Helyfoglalás</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, repellendus?</p>
                    </div>
                </div>
                <div>
                    <i class="fa-solid fa-user fa-2x"></i>
                    <div>
                        <h3>Tanácsadás</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, repellendus? Ok</p>
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
@endsection

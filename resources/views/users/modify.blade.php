@extends('layouts.public')
@section('page_title','Felhasználó módosítása')
@section('page_content')
<body id="registration">
    <div class="reg-wrapper">
        <form method="post" action="{{ route('user.update',$user->idfelhasznalo) }}">
            @csrf
            @method('PUT')
            <h1>Felhasznalo adatainak a módosítása</h1>
            <p>Kérjük adja meg az adatait</p>
            <div class="input-box">
                <input type="text" id="vezetek_nev" name="vezetek_nev" placeholder="Vezetéknév" value="{{$user->vezetek_nev}}" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input type="text" id="uto_nev" name="uto_nev" placeholder="Utónév" value="{{$user->uto_nev}}" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input type="email" id="e_mail" name="e_mail" placeholder="E-mail" value="{{$user->e_mail}}" required>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-box">
                <input type="text" id="orszag" name="orszag" placeholder="Ország"value="{{$user->cim->orszag}}" required>
                <i class="fa-solid fa-home"></i>
            </div>
            <div class="input-box">
                <input type="text" id="varos" name="varos" placeholder="Város" value="{{$user->cim->varos}}" required>
                <i class="fa-solid fa-home"></i>
            </div>
            <div class="input-box">
                <input type="text" id="utca" name="utca" placeholder="Utca" value="{{$user->cim->utca}}"required>
                <i class="fa-solid fa-home"></i>
            </div>
            <div class="input-box">
                <input type="text" id="hazszam" name="hazszam" placeholder="Házszám" value="{{$user->cim->hazszam}}" required>
                <i class="fa-solid fa-home"></i>
            </div>
            <div class="input-box">
                <input type="text" id="telefonszam" name="telefonszam" placeholder="Telefonszám" value="{{$user->profil->telefonszam}}" required>
                <i class="fa-solid fa-phone"></i>
            </div>
            <br>
            <button type="submit" class="btn-reg">Módosítás</button>
        </form>
    </div>
@endsection


@extends('layouts.public')
@section('page_title','Felhasználó Regisztrálása')
@section('page_content')
<body id="registration">
    <div class="reg-wrapper">
        <form method="post" action="{{ route('user.store') }}">
            @csrf
            <h1>Regisztráció</h1>
            <p>Kérjük adja meg az adatait</p>
            <div class="input-box">
                <input type="text" id="vezetek_nev" name="vezetek_nev" placeholder="Vezetéknév" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input type="text" id="uto_nev" name="uto_nev" placeholder="Utónév" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input type="email" id="e_mail" name="e_mail" placeholder="E-mail" required>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-box">
                <input type="text" id="orszag" name="orszag" placeholder="Ország" required>
                <i class="fa-solid fa-home"></i>
            </div>
            <div class="input-box">
                <input type="text" id="varos" name="varos" placeholder="Város" required>
                <i class="fa-solid fa-home"></i>
            </div>
            <div class="input-box">
                <input type="text" id="utca" name="utca" placeholder="Utca" required>
                <i class="fa-solid fa-home"></i>
            </div>
            <div class="input-box">
                <input type="text" id="hazszam" name="hazszam" placeholder="Házszám" required>
                <i class="fa-solid fa-home"></i>
            </div>
            <div class="input-box">
                <input type="text" id="telefonszam" name="telefonszam" placeholder="Telefonszám" required>
                <i class="fa-solid fa-phone"></i>
            </div>
            <br>
            <button type="submit" class="btn-reg">Regisztráció</button>
        </form>
    </div>
</body>
</html>

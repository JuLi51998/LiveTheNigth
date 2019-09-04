@extends('layout.home')

@section('content')

<main>
    <section class="presentation">
        <div class="introduction">
            <div class="intro-text">
                <h1>LoveInTheNigth</h1>
                <p>
                    Algunos usuarios, podrán tener la oportunidad de arriesgarse en las fiestas,
                    conocer quizá a la persona indicada para ellos, con este servicio gratuito 
                    en nuestra aplicación una nueva forma de conocer a esa persona que tanto has 
                    buscado, y sin protocolos habla en la fiesta con esa chica o chico que encontraste 
                    y que esta en esa misma rumba.
                </p>
            </div>
            <div class="cta">
                <a href="/signin" class="cta-select">Inicia Sesion</a>
                <a href="/signup" class="cta-add">Registrate</a>
            </div>
        </div>
        <div class="cover">
            <img src="./img/matebook.png" alt="matebook" />
        </div>
    </section>

    {{-- <div class="laptop-select">
        <img src="./img/arrow-left.svg" alt="" />
        <img src="./img/dot.svg" alt="" />
        <img src="./img/dot-full.svg" alt="" />
        <img src="./img/dot-full.svg" alt="" />
        <img src="./img/arrow-right.svg" alt="" />
    </div> --}}

    <img class="big-circle" src="./img/big-eclipse.svg" alt="" />
    <img class="medium-circle" src="./img/mid-eclipse.svg" alt="" />
    <img class="small-circle" src="./img/small-eclipse.svg" alt="" />
</main>

@endsection
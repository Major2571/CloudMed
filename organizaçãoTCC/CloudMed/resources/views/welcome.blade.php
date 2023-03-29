<!DOCTYPE html>
<html lang="pt-Br">

@extends('templates.head')

<title> WebApp </title>

@section('contentMain')

<div class="blob-maker">
    <img src="{{url('assets/img/dividers/blobMakerSectionOne.svg')}}" alt="">
</div>

<section class="section-one">

    <div class="main-top">
        <div>
            <h1>Section One</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde qui facilis magnam, voluptatem
                consectetur officiis expedita assumenda dicta
            </p>
            <button class="btnCad"> Comece Já! </button>
        </div>
        <div>
            <img src="{{url('assets/img/svg/secOneImgLandingPage.svg')}}" alt="">
        </div>
    </div>

</section>


<section class="section-cards">
    <h1>All In One Place!</h1>

    <div class="container-cards">
        <div class="card">
            <div class="img-title">
                <img src="{{url('assets/img/icon/exame.png')}}" alt="">
                <h2>Lorem</h2>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptatem officia distinctio vitae.
                </p>
            </div>
        </div>

        <div class="card">
            <div class="img-title">
                <img src="{{url('assets/img/icon/vacinas.png')}}" alt="">
                <h2>Lorem</h2>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptatem officia distinctio vitae.
                </p>
            </div>
        </div>

        <div class="card">
            <div class="img-title">
                <img src="{{url('assets/img/icon/doutora.png')}}">
                <h2>Lorem</h2>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptatem officia distinctio vitae.
                </p>
            </div>
        </div>

        <div class="card">
            <div class="img-title">
                <img src="{{url('assets/img/icon/receita.png')}}" alt="">
                <h2>Lorem</h2>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptatem officia distinctio vitae.
                </p>
            </div>
        </div>
    </div>


</section>



<section class="section-opnions">
    <div class="custom-shape-divider-top-1676559725 shape-divider">
        <img src="{{url('assets/img/dividers/wavesOpacity.svg')}}" alt="">
    </div>

    <section class="section-cards-opnion">
        <h1>Opinions</h1>

        <div class="owl-carousel owl-theme container-cards ">
            <div class="card">
                <img src="{{url('assets/img/quotationMark.svg')}}" alt="">
                <div>
                    <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptatem officia distinctio
                        vitae."
                    </p>
                    <i> Doctor Lorem</i>
                </div>
                <img src="{{url('assets/img/quotationMark.svg')}}" alt="">
            </div>
        </div>

    </section>

    <div class="custom-shape-divider-top-1676995490 shape-divider">
        <img src="{{url('assets/img/dividers/waves-section-two.svg')}}" alt="">
    </div>
</section>


<section class="join-us">
    <div>
        <h1>Join Us!</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores expedita quam perferendis.</p>
        <button class="btnLogin"> Sing In </button>
        <div><img src="{{url('assets/img/svg/imgLastSecJoinUs.svg')}}" alt=""></div>

    </div>
</section>


<div class="toTop">
    <button onclick="backToTop()" id="toTopButton" type="button">
        <img src="{{url('https://blog.social.mg.gov.br/wp-content/plugins/photo-gallery/css/bwg-fonts/fonts/bwg-fonts-svg/angle-up-sm.svg')}}" alt="arrowUp">
    </button>
</div>


@endsection
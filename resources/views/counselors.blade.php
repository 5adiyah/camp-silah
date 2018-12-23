@extends('layout')

@section('content')
    <div class="colorful-header col12">

        <div class="colorful-text">
            <p class="green">2019 COUNSELORS</p>
            <span class="yellow">C</span>
            <span class="green">O</span>
            <span class="red">M</span>
            <span class="yellow">I</span>
            <span class="green">N</span>
            <span class="red">G</span>
            <span>&nbsp;</span>
            <span class="yellow">S</span>
            <span class="green">O</span>
            <span class="red">O</span>
            <span class="yellow">N</span>
        </div>

    </div>

    <div class="email-list col12"  style="background-image:url('{{ asset('images/email-pttrn.png') }}')">
        <h2>Sign up to be one of our counselors!</h2>
        <div class="email-cta">
            <button>Sign Up</button>
        </div>
    </div>

    <div class="title-bar col12 bg-blue">
        <h2>CAMP TESTIMONIALS</h2>
    </div>

    <div class="counselor-container col12">
        <div class="counselor-box">
            <div class="counselor-pic">
                <img src="{{ asset('images/promo-pic8.png') }}" alt="">
            </div>
            <div class="text-box-cta counselor-name">
                <button>Owis</button>
            </div>
        </div>

        <div class="counselor-box">
            <div class="counselor-pic">
                <img src="{{ asset('images/promo-pic9.png') }}" alt="">
            </div>
            <div class="text-box-cta counselor-name">
                <button>Mustafa</button>
            </div>
        </div>

        <div class="counselor-box">
            <div class="counselor-pic">
                <img src="{{ asset('images/promo-pic10.png') }}" alt="">
            </div>
            <div class="text-box-cta counselor-name">
                <button>Alaa</button>
            </div>
        </div>

        <div class="counselor-box">
            <div class="counselor-pic">
                <img src="{{ asset('images/promo-pic11.png') }}" alt="">
            </div>
            <div class="text-box-cta counselor-name">
                <button>Hannah</button>
            </div>
        </div>

        <div class="counselor-box">
            <div class="counselor-pic">
                <img src="{{ asset('images/promo-pic12.png') }}" alt="">
            </div>
            <div class="text-box-cta counselor-name">
                <button>Haneen</button>
            </div>
        </div>

        <div class="counselor-box">
            <div class="counselor-pic">
                <img src="{{ asset('images/promo-pic13.png') }}" alt="">
            </div>
            <div class="text-box-cta counselor-name">
                <button>Abdullah</button>
            </div>
        </div>

        <div class="counselor-box">
            <div class="counselor-pic">
                <img src="{{ asset('images/promo-pic14.png') }}" alt="">
            </div>
            <div class="text-box-cta counselor-name">
                <button>Basil</button>
            </div>
        </div>

        <div class="counselor-box">
            <div class="counselor-pic">
                <img src="{{ asset('images/promo-pic15.png') }}" alt="">
            </div>
            <div class="text-box-cta counselor-name">
                <button>Qutaibah</button>
            </div>
        </div>

    </div>






@endsection
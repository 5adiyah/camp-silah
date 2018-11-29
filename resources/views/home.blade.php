@extends('layout')

@section('content')
    <div class="quote-header col12">
        <div class="quote-mark-l"><img src="{{ asset('images/quote-left.png') }}" ></div>
        <div class="quote"><p>Camp silah was so much fun! I got to see some new and old friends. I loved every second of the experience!</p></div>
        <div class="quote-mark-r"><img src="{{ asset('images/quote-right.png') }}" ></div>
    </div>

    <div class="video-container col12">
        <video src="https://player.vimeo.com/video/295256019" poster="{{ asset('images/video-bckgrnd.png') }}"></video>
        <button class='button-play'></button>
    </div>

    <div class="text-box-container col12">
        <div class="title-box">
            <h2>WHAT IS CAMP SILAH?</h2>
        </div>

        <div class="text-box">
            <p>The word Silah in Arabic means connection, which is the theme of this year's camp. We are hoping that by the end of the camp, each participant will have a better connection with Allah SWT, themselves, and nature. This camp will be for both boys and girls aged 8-18.</p>
        </div>

        <div class="text-box-cta">
            <button>Learn More</button>
        </div>
    </div>

    <div class="info-box col12">
        <div class="info-pic">
            <img src="{{ asset('images/promo-pic1.png') }}" alt="">
        </div>
        <div class="info-title bg-green">
            <h2>WHAT’S IT LIKE AT CAMP SILAH?</h2>
        </div>
        <div class="info-text">
            <div class="info-links">
                <div class="link">
                    <span>About Camp Magruder</span>
                    <img src="{{ asset('images/arrow-yellow.png') }}">
                </div>
                <div class="link">
                    <span>Sleeping Arrangements</span>
                    <img src="{{ asset('images/arrow-yellow.png') }}">
                </div>
                <div class="link">
                    <span>Camper Ages & Groups</span>
                    <img src="{{ asset('images/arrow-yellow.png') }}">
                </div>
                <div class="link">
                    <span>Activities & Schedules</span>
                    <img src="{{ asset('images/arrow-yellow.png') }}">
                </div>
                <div class="link">
                    <span>Packing List & Supplies</span>
                    <img src="{{ asset('images/arrow-yellow.png') }}">
                </div>
            </div>
        </div>
    </div>

    <div class="info-box col12">
        <div class="info-pic">
            <img src="{{ asset('images/promo-pic2.png') }}" alt="">
        </div>
        <div class="info-title bg-red">
            <h2>INFO FOR PARENTS</h2>
        </div>
        <div class="info-text">
            <div class="info-links">
                <div class="link">
                    <span>Frequently Asked Q’s</span>
                    <img src="{{ asset('images/arrow-yellow.png') }}">
                </div>
                <div class="link">
                    <span>Health & Safety Info</span>
                    <img src="{{ asset('images/arrow-yellow.png') }}">
                </div>
                <div class="link">
                    <span>Food At The Camp</span>
                    <img src="{{ asset('images/arrow-yellow.png') }}">
                </div>
                <div class="link">
                    <span>About The Camp Staff</span>
                    <img src="{{ asset('images/arrow-yellow.png') }}">
                </div>
                <div class="link">
                    <span>Email The Camp Nurse</span>
                    <img src="{{ asset('images/arrow-yellow.png') }}">
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-box col12">
        <div class="testimonial-title bg-green">
            <h2>CAMP TESTIMONIALS</h2>
        </div>

        <div class="testimonial-pic">
            <img src="{{ asset('images/promo-pic3.png') }}" alt="">
        </div>
        <div class="testimonial-quote">
            <p class="camperQuote">“Camp Silah is the friendliest camp ever!"
            <span class="camperName">Fikri Ridha</span></p>
        </div>

        <div class="testimonial-pic">
            <img src="{{ asset('images/promo-pic4.png') }}" alt="">
        </div>
        <div class="testimonial-quote">
            <p class="camperQuote">"First time going to a sleep away camp and I dont want to leave!" <span class="camperName">Sarah Masalmeh</span></p>
        </div>

        <div class="testimonial-pic">
            <img src="{{ asset('images/promo-pic5.png') }}" alt="">
        </div>
        <div class="testimonial-quote">
            <p class="camperQuote">"Camp silah gave me the oppurtunity to meet and connect with people of all ages."  <span class="camperName">Yusef Shareef</span></p>
        </div>

        <div class="testimonial-pic">
            <img src="{{ asset('images/promo-pic6.png') }}" alt="">
        </div>
        <div class="testimonial-quote">
            <p class="camperQuote">"I had the best time of my life, it was an experience I will never forget."
                <span class="camperName">Ayah Hassouneh</span></p>
        </div>
    </div>

@endsection
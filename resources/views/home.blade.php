@extends('layout')

@section('content')
    <div class="quote-header col12">
        <div class="quote-mark-l"><img src="{{ asset('images/quote-left.png') }}" ></div>
        <div class="quote"><p>Camp silah was so much fun! I got to see some new and old friends. I loved every second of the experience!</p></div>
        <div class="quote-mark-r"><img src="{{ asset('images/quote-right.png') }}" ></div>
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
@endsection
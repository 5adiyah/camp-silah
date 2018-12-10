@extends('layout')

@section('content')
    <div class="quote-header col12">
        <div class="quote-mark-l"><img src="{{ asset('images/quote-left.png') }}" ></div>
        <div class="quote"><p>Tamam’s leadership training was so exciting, inspiring, & encouraging. I gained so many skills that I believe will help me succeed in school and life</p></div>
        <div class="quote-mark-r"><img src="{{ asset('images/quote-right.png') }}" ></div>
    </div>

    <div class="speaker-bckgnd col12">
        <div class="speaker-profile">
            <img src="{{ asset('images/tamam.png') }}">
            <p class="speaker-bio">Tamam Waritu has a passion for empowering others to be the best at whatever they do. As a motivational speaker, Tamam inspires and motivates young people to beat the odds and become successful in life. His message is simple: Don't let where you come from, or the circumstances you are in, define who and what you become in life.</p>
        </div>
    </div>

    <div class="text-box-container col12">
        <div class="title-box bg-blue">
            <h2>WHO IS TAMAM WARITU</h2>
        </div>

        <div class="text-box">
            <p>Tamam Waritu (AKA T_Waari) is a nationally acclaimed youth motivational speaker and prominent trainer. His message and work has impacted thousands of students in over thirty states nationwide.</p>

                <p>Born in a tiny village in East Africa, Ethiopia, to a mother who never went to school, and a father with only a 4th-grade level of education, Tamam could have become a statistic. Instead, through hard work and perseverance, he overcame huge barriers and obstacles, including learning his first word of English at the age of 16 and living on food stamps in a public housing project.<p>

                <p>Today, Tamam holds a Master’s degree from Harvard University and has spoken and conducted training at prestigious universities such as Princeton, MIT, Stanford as well as top youth leadership conferences.</p>

                <p>His ultimate goal is to inspire and empower as many young people as possible, particularly those whom he once resembled (low-income, first-generation, and ELL students).<p>

                <p>He has been featured in the Harvard Magazine as "one of the most inspiring graduate student on campus."</p>

        </div>
    </div>

@endsection

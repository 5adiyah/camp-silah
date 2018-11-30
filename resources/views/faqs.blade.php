@extends('layout')

@section('content')
    <div class="text-box-container col12">
        <div class="title-box bg-blue">
            <h2>FREQUENTLY ASKED Q’s</h2>
        </div>

        <div class="text-box faq-container">
            <div class="faq-box">
                <div class="faq-title">
                    <h3>Should my child help to decide if he/she goes to camp?</h3>
                </div>
                <div class="faq-pic">
                    <img src="{{ asset('images/faq.png') }}">
                </div>
                <div class="faq-text">
                    <p>Youth need to have a say in the decision to attend camp. Making this decision together gives your child a healthy sense of self-direction. Once the decision has been made, relaxed family conversations can help children set realistic goals for their camp experience.</p>
                </div>
            </div>
            <div class="faq-box">
                <div class="faq-title">
                    <h3>How much down time do the campers have?</h3>
                </div>
                <div class="faq-pic">
                    <img src="{{ asset('images/faq.png') }}">
                </div>
                <div class="faq-text">
                    <p>We follow a daily schedule that provides routine and comfort, particularly for first-time campers. But within that schedule, there’s flexibility with ample time to hang out, step back and experience the moment. It’s one of the beauties of camp. We don’t hurry to get to the next thing. We have time to enjoy one another and, most importantly, to have fun. For a closer look at the daily schedule, click here.</p>
                </div>
            </div>
            <div class="faq-box">
                <div class="faq-title">
                    <h3>What is the age range of the counselors?</h3>
                </div>
                <div class="faq-pic">
                    <img src="{{ asset('images/faq.png') }}">
                </div>
                <div class="faq-text">
                    <p>Youth counselors are at least 21 years old and adult counselors are above the age of 30. All counselors must have some experience working with youth and will have to attend a mandatory training before being chosen as a counselor.</p>
                </div>
            </div>
        </div>

    </div>



@endsection
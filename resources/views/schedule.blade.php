@extends('layout')

@section('content')
    <div class="img-header col12">
        <img src="{{ asset('images/promo-pic16.png') }}">
    </div>

    <div class="text-box-container col12">
        <div class="title-box bg-green">
            <h2>CAMP SILAH SCHEDULE</h2>
        </div>

        <div class="text-box">
            <p>Out 2019 schedule will be posted here soon! Until then, take a look at our schedule from last year!</p>
        </div>

        <div class="title-box bg-red">
            <h2>Wednesday</h2>
        </div>

        <div class="schedule">
            <div class="schedule-item">
                <p class="time">12:00PM</p>
                <p class="description">Departure from Bilal</p>
            </div>
            <div class="schedule-item">
                <p class="time">3:30PM</p>
                <p class="description">Arrival at Camp Magruder</p>
            </div>
            <div class="schedule-item">
                <p class="time">3:45PM</p>
                <p class="description">Room Assignments/Check-in</p>
            </div>
            <div class="schedule-item">
                <p class="time">6:00PM</p>
                <p class="description">Camp Rules & Expectations</p>
            </div>
            <div class="schedule-item">
                <p class="time">6:30PM</p>
                <p class="description">Dinner</p>
            </div>
            <div class="schedule-item">
                <p class="time">7:45PM</p>
                <p class="description">Art & team building games</p>
            </div>
            <div class="schedule-item">
                <p class="time">9:00PM</p>
                <p class="description">Campfire talk w/Dr. Omar</p>
            </div>
        </div>

        <div class="title-box bg-red">
            <h2>Thursday</h2>
        </div>
        <div class="schedule">
            <div class="schedule-item">
                <p class="time">6:00AM</p>
                <p class="description">Hike & Beach Walk</p>
            </div>
            <div class="schedule-item">
                <p class="time">9:00AM </p>
                <p class="description">Breakfast</p>
            </div>
            <div class="schedule-item">
                <p class="time">10:00AM </p>
                <p class="description">Free Time</p>
            </div>
            <div class="schedule-item">
                <p class="time">11:00AM</p>
                <p class="description">Boat Rides</p>
            </div>
            <div class="schedule-item">
                <p class="time">12:00PM</p>
                <p class="description">Sports & Games</p>
            </div>
            <div class="schedule-item">
                <p class="time">1:00PM</p>
                <p class="description">Lunch</p>
            </div>
            <div class="schedule-item">
                <p class="time">2:00PM</p>
                <p class="description">Tide Pool Hike</p>
            </div>
            <div class="schedule-item">
                <p class="time">5:30PM</p>
                <p class="description">Play Preparations</p>
            </div>
            <div class="schedule-item">
                <p class="time">6:30PM</p>
                <p class="description">Dinner</p>
            </div>
            <div class="schedule-item">
                <p class="time">7:30PM</p>
                <p class="description">Play Performances</p>
            </div>
            <div class="schedule-item">
                <p class="time">9:00PM</p>
                <p class="description">Campfire Stories</p>
            </div>
        </div>
        <div class="title-box bg-red">
            <h2>Friday</h2>
        </div>
        <div class="schedule">
            <div class="schedule-item">
                <p class="time">6:00AM</p>
                <p class="description">Hike & Beach Walk</p>
            </div>
            <div class="schedule-item">
                <p class="time">9:00AM </p>
                <p class="description">Breakfast</p>
            </div>
            <div class="schedule-item">
                <p class="time">10:00AM </p>
                <p class="description">Packup</p>
            </div>
            <div class="schedule-item">
                <p class="time">10:30AM</p>
                <p class="description">Closing Ceremony</p>
            </div>
            <div class="schedule-item">
                <p class="time">11:00AM</p>
                <p class="description">Leave Camp Magruder</p>
            </div>
        </div>

    </div>
@endsection
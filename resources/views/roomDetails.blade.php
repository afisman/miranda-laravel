@extends('layout')
@section('content')
        <section class="RoomsBanner">
            <div class="section">
                <div class="RoomsBanner__text">
                    <p>THE ULTIMATE LUXURY</p>
                    <h2>Ultimate Room</h2>
                </div>
                <div class="RoomsBanner__links">
                    <a href="./index.php" class="RoomsHome">
                        Home
                    </a>
                    <a href="#" class="RoomsSelected">
                        Room Details
                    </a>
                </div>
            </div>
        </section>
        <section class="RoomSection">
            <div class="roomInfo">
                <div class="roomInfo__info">
                    <div class="roomInfo__info__text">
                        <div class="roomInfo__info__text__title">
                            <h5>{{$room['type']}}</h5>
                            <h2>{{$room['name']}}</h2>
                        </div>
                        <h3>${{$room->calculateRate()}}<p>/Night</p>
                        </h3>
                    </div>
                    <img src={{$room->photos[0]->url}} alt="">
                </div>
                <form class="roomInfo__form" method="POST" action={{route('bookingForm')}}>
                    @csrf
                    <h4>Check Availability</h4>
                    <div class="roomInfo__form__item">
                        <label for="arrival">Check In</label>
                        <input type="date" id="arrival" name="arrival" value="2024-07-22">
                    </div>
                    <div class="roomInfo__form__item">
                        <label for="departure">Check Out</label>
                        <input type="date" id="departure" name="departure" value="2024-08-22">
                    </div>
                    <div class="roomInfo__form__item">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter full name">
                    </div>
                    <div class="roomInfo__form__item">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="roomInfo__form__item">
                        <label for="phone">Phone Number</label>
                        <input type="number" id="phone" name="phone" placeholder="Enter phone number">
                    </div>
                    <div class="roomInfo__form__item">
                        <label for="phone">Special request</label>
                        <input type="text" id="special_request" name="special_request" placeholder="Enter special request">
                    </div>
                    <input type="number" hidden value={{$room->id}} name="id">
                    <input type="submit" class="roomInfo__form__button" name="" id=""
                        value="CHECK AVAILABILITY">
                </form>
            </div>
            <div class="RoomSection__description">
                <p>{{$room->description}}</p>
            </div>
            <div class="RoomSection__amenities">
                <h4>Amenities</h4>
                <div class="RoomSection__amenities__grid">
                    @foreach($room['amenities'] as $amenity)
                            <span class="roomSection__menu-item">
                                <img src="{{ $amenity->getAmenity() }}" alt="">
                                <p>{{$amenity['name']}}</p>
                            </span>
                            @endforeach
                    
                </div>
            </div>
        </section>
        <section class="RoomFounder">
            <div class="RoomFounder__container">
                <div class="RoomFounder__circle">
                    <svg class="userInfo__check" width="14" height="10" viewBox="0 0 14 10" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14 1C14 1.25587 13.9023 1.51187 13.707 1.70687L5.70703 9.70687C5.5125 9.90312 5.25625 10 5 10C4.74375 10 4.48813 9.90234 4.29313 9.70703L0.293125 5.70703C0.0978125 5.5125 0 5.25625 0 5C0 4.42875 0.467188 4 1 4C1.25587 4 1.51188 4.09766 1.70688 4.29297L5 7.5875L12.2937 0.29375C12.4875 0.0978125 12.7437 0 13 0C13.5344 0 14 0.428125 14 1Z"
                            fill="white" />
                    </svg>
                </div>
                <img src="./assets/Img/aboutUs-hotel.jpg" alt="Founder">
                <h2>Alejandro Fisman</h2>
                <h3>FULLSTACK DEVELOPER</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore.</p>
            </div>
        </section>
        <section class="RoomCancellation">
            <div class="RoomCancellation__text">
                <h2>Cancellation</h2>
                <p>Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis,
                    consequat
                    metus nec,
                    luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full
                    refund.
                </p>
            </div>
        </section>
        <section class="OffersPopular">
            <div class="OffersPopular__slider swiper">
                <div class="swiper-wrapper">
                    @foreach($rooms as $offerRoom)
                    <div class="swiper-slide">
                        <img src={{$offerRoom->photos[0]->url}} alt="Luxury room">
                        <div class="OffersPopular__slider__icons">
                           @foreach($offerRoom['amenities'] as $amenity)
                            <span class="roomSection__menu-item">
                                <img src="{{ $amenity->getAmenity() }}" alt="">
                            </span>
                            @endforeach
                        </div>
                        <div class="OffersPopular__slider__text">
                            <h3>{{$offerRoom->type}}</h3>
                            <p>{{$offerRoom->description}}</p>
                            <div class="OffersPopular__slider__text__price">
                                <h4>${{$offerRoom->calculateRate()}}/Night</h4>
                                <h5><a href="{{route('roomDetails', ['room' => $offerRoom['id']])}}">Book Now</a></h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next buttons-offer__next"></div>
                <div class="swiper-button-prev buttons-offer__prev"></div>
            </div>
        </section>
@endsection

@extends('layout')
@section('content')
        <section class="RoomsBanner">
            <div class="section">
                <div class="RoomsBanner__text">
                    <p>THE ULTIMATE LUXURY</p>
                    <h2>Ultimate Room</h2>
                </div>
                <div class="RoomsBanner__links">
                    <a href="{{route('index')}}" class="RoomsHome">
                        Home
                    </a>
                    <a href="#" class="RoomsSelected">
                        Rooms
                    </a>
                </div>
            </div>
        </section>
        <section class="RoomsGridSection">
            <div class="RoomsGridSection__swiper swiper">
                <div class="swiper-wrapper">
                    @foreach($rooms as $room)
                    <div class="swiper-slide">
                        <img src={{$room->photos[0]->url}} alt="Luxury room">
                        <div class="RoomsGridSection__swiper__icons">
                            @foreach($room['amenities'] as $amenity)
                            <span class="roomSection__menu-item">
                                <img src="{{ $amenity->getAmenity() }}" alt="">
                            </span>
                            @endforeach
                        </div>
                        <div class="RoomsGridSection__swiper__text">
                            <h3>{{$room->type}}</h3>
                            <p>{{$room->description}}</p>
                            <div class="RoomsGridSection__swiper__text__price">
                                <h4>${{$room->calculateRate()}}/Night</h4>
                                <h5><a href="{{route('roomDetails', ['room' => $room->id])}}">Book Now</a></h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
@endsection
@extends('layout')
@section('title', 'Home')
@section('content')
        <section class="bannerSection">
            <div class="section">
                <p>THE ULTIMATE LUXURY EXPERIENCE</p>
                <h2>The Perfect</br> Base For You</h2>
                <div class="bannerSection__buttons">
                    <a href="./about.php"><button class="bannerSection__buttons--tour">TAKE A TOUR</button></a>
                    <a href="./contact.php"><button class="bannerSection__buttons--learn">LEARN MORE</button></a>
                </div>
            </div>
        </section>
        <section class="calendarSection">
            <form action="roomsList.php" class="calendarSection__form" method="GET">
                <div class="calendarSection__form__date">
                    <label for="arrival">Arrival Date
                        <input type="date" id="arrival" name="arrival" 
                            >
                    </label>
                </div>
                <div class="calendarSection__form__date">
                    <label for="departure">Departure Date
                        <input type="date" id="departure" name="departure" >
                    </label>
                </div>
                <button type="submit" class="calendarSection__form__button">
                    CHECK AVAILABILITY
                </button>
            </form>
        </section>
        <section class="aboutUsSection">
            <div class="aboutUsSection__left">
                <div class="aboutUsSection__left__strong">
                    <div class="aboutUsSection__left__strong__left">
                        <img src="{{asset('./assets/Img/aboutUs-strong.svg')}}" alt="people front" class="strong-imgFront">
                        <img src="{{asset('./assets/Img/aboutUs-strong-2.svg')}}" alt="people background">
                        <div class="aboutUsSection__left__strong__left__text">
                            <h3>Strong Team</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <img src="{{asset('./assets/Img/aboutUs-hotel.jpg')}}" alt="" class="aboutUsSection__left__strong__img">
                </div>
                <div class="aboutUsSection__left__luxury">
                    <img src="{{asset('./assets/Img/aboutUs-hotel.jpg')}}" alt="" class="aboutUsSection__left__luxury__img">
                    <div class="aboutUsSection__left__luxury__right">
                        <img src="{{asset('./assets/Img/aboutUs-luxury.svg')}}" alt="">
                        <h3>Luxury Room</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
            <div class="aboutUsSection__right">
                <h5>ABOUT US</h5>
                <h2>Discover Our Underground.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.</p>
                <button>BOOK NOW</button>
            </div>

        </section>
        <section class="roomSection">
            <h5>ROOMS</h5>
            <h2>Hand Picked Rooms</h2>
            <div class="roomSection__swiper swiper">
                <div class="swiper-wrapper">
                    @foreach($rooms as $room)
                    <div class="swiper-slide">
                        <div class="roomSection__swiper__icons">
                           @foreach($room['amenities'] as $amenity)
                            <span class="roomSection__menu-item">
                                <img src="{{ getAmenity($amenity) }}" alt="">
                            </span>
                           @endforeach
                        </div>
                        <img src={{$room['photos']}} alt="Room 1" class="roomSection__swiper__img">
                        <div class="roomSection__swiper__text">
                            <div class="roomSection__swiper__text__description">
                                <h4>{{$room['type']}}</h4>
                                <p>{{$room['description']}}</p>
                            </div>
                            <h3>{{$room['price']}}<span>/Night</span></h3>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <section class="introSection">
            <div class="introSection__container">
                <div class="introSection__container__left">
                    <h5>INTRO VIDEO</h5>
                    <h2>Meet With Our Luxury Place.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat you
                        have to understand this.</p>
                </div>
                <div class="introSection__container__right">
                    <iframe
                        src="https://www.youtube.com/embed/Bu3Doe45lcU?si=cAuDFft_5fvRJTD-&amp;clip=UgkxoGaKcl356ATRFimV2AYXN4FwamgLJGPH&amp;clipt=EKjDARj4yQQ"
                        frameborder="0" allowfullscreen></iframe>

                </div>
            </div>
            <div class="introSection__button">
                <button>BOOK NOW</button>
            </div>

        </section>
        <section class="featuresSection">
            <div class="featuresSection__title">
                <h5>FACILITIES</h5>
                <h2>Core Features</h2>
            </div>
            <div class="featuresSection__swiper swiper">
                <div class="swiper-wrapper">
                    <div class="featuresSection__swiper__item swiper-slide">
                        <div class="featuresSection__swiper__item__title">
                            <img src="./assets/Img/rating-features.svg" alt="Rating features">
                            <h2>01</h2>
                        </div>
                        <h4>Have High Rating</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna..</p>
                    </div>
                    <div class="featuresSection__swiper__item swiper-slide">
                        <div class="featuresSection__swiper__item__title">
                            <img src="./assets/Img/quietHours-features.svg" alt="Quiet hours ">
                            <h2>02</h2>
                        </div>
                        <h4>Quiet Hours</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna..</p>
                    </div>
                    <div class="featuresSection__swiper__item swiper-slide">
                        <div class="featuresSection__swiper__item__title">
                            <img src="./assets/Img/location-features.svg" alt="Location ">
                            <h2>03</h2>
                        </div>
                        <h4>Best Locations</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna..</p>
                    </div>
                    <div class="featuresSection__swiper__item swiper-slide">
                        <div class="featuresSection__swiper__item__title">
                            <img src="./assets/Img/cancellation-features.svg" alt="Cancellation ">
                            <h2>04</h2>
                        </div>
                        <h4>Free Cancellation</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna..</p>
                    </div>
                    <div class="featuresSection__swiper__item swiper-slide">
                        <div class="featuresSection__swiper__item__title">
                            <img src="./assets/Img/payment-features.svg" alt="Payment Options">
                            <h2>05</h2>
                        </div>
                        <h4>Payment Options</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna..</p>
                    </div>
                    <div class="featuresSection__swiper__item swiper-slide">
                        <div class="featuresSection__swiper__item__title">
                            <img src="./assets/Img/specialOffers-features.svg" alt="Special Offers ">
                            <h2>06</h2>
                        </div>
                        <h4>Special Offers</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section class="foodSection">
            <div class="foodSection__donut">
                <img src="./assets/Img/food-donut.svg" alt="donut" />
            </div>
            <div class="foodSection__body">
                <div class="foodSection__body__title">
                    <h5>MENU</h5>
                    <h2>Our Foods Menu</h2>
                </div>
                <div class="foodSection__body__swiper swiper">
                    <div class="swiper-wrapper">
                        <div class="foodSection__body__swiper__item swiper-slide">
                            <img src="./assets/Img/marmalade-selection-food.jpg" alt="Eggs & bacon">
                            <div class="foodSection__body__swiper__item__text">
                                <h4>Eggs & Bacon</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="foodSection__body__swiper__item__arrow">
                                <svg width="32" height="16" viewBox="0 0 32 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.6334 7.11518C31.633 7.11481 31.6327 7.11437 31.6322 7.114L25.1007 0.613996C24.6114 0.127058 23.82 0.128871 23.3329 0.618245C22.8459 1.10756 22.8478 1.899 23.3371 2.386L27.7224 6.74999H1.25C0.559625 6.74999 0 7.30962 0 7.99999C0 8.69037 0.559625 9.24999 1.25 9.24999H27.7223L23.3372 13.614C22.8479 14.101 22.846 14.8924 23.333 15.3817C23.8201 15.8712 24.6116 15.8729 25.1008 15.386L31.6323 8.88599C31.6327 8.88562 31.633 8.88518 31.6334 8.88481C32.123 8.39618 32.1214 7.60218 31.6334 7.11518Z"
                                        fill="#BEAD8E" />
                                </svg>
                            </div>
                        </div>
                        <div class="foodSection__body__swiper__item swiper-slide">
                            <img src="./assets/Img/fruit-parfait-food.jpg" alt="Fruit parfait">
                            <div class="foodSection__body__swiper__item__text">
                                <h4>Fruit Parfait</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="foodSection__body__swiper__item__arrow">
                                <svg width="32" height="16" viewBox="0 0 32 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.6334 7.11518C31.633 7.11481 31.6327 7.11437 31.6322 7.114L25.1007 0.613996C24.6114 0.127058 23.82 0.128871 23.3329 0.618245C22.8459 1.10756 22.8478 1.899 23.3371 2.386L27.7224 6.74999H1.25C0.559625 6.74999 0 7.30962 0 7.99999C0 8.69037 0.559625 9.24999 1.25 9.24999H27.7223L23.3372 13.614C22.8479 14.101 22.846 14.8924 23.333 15.3817C23.8201 15.8712 24.6116 15.8729 25.1008 15.386L31.6323 8.88599C31.6327 8.88562 31.633 8.88518 31.6334 8.88481C32.123 8.39618 32.1214 7.60218 31.6334 7.11518Z"
                                        fill="#BEAD8E" />
                                </svg>
                            </div>
                        </div>
                        <div class="foodSection__body__swiper__item swiper-slide">
                            <img src="./assets/Img/tea-coffee-food.jpg" alt="Tea or coffee">
                            <div class="foodSection__body__swiper__item__text">
                                <h4>Tea or Coffee</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="foodSection__body__swiper__item__arrow">
                                <svg width="32" height="16" viewBox="0 0 32 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.6334 7.11518C31.633 7.11481 31.6327 7.11437 31.6322 7.114L25.1007 0.613996C24.6114 0.127058 23.82 0.128871 23.3329 0.618245C22.8459 1.10756 22.8478 1.899 23.3371 2.386L27.7224 6.74999H1.25C0.559625 6.74999 0 7.30962 0 7.99999C0 8.69037 0.559625 9.24999 1.25 9.24999H27.7223L23.3372 13.614C22.8479 14.101 22.846 14.8924 23.333 15.3817C23.8201 15.8712 24.6116 15.8729 25.1008 15.386L31.6323 8.88599C31.6327 8.88562 31.633 8.88518 31.6334 8.88481C32.123 8.39618 32.1214 7.60218 31.6334 7.11518Z"
                                        fill="#BEAD8E" />
                                </svg>
                            </div>
                        </div>
                        <div class="foodSection__body__swiper__item swiper-slide">
                            <img src="./assets/Img/marmalade-selection-food.jpg" alt="Marmalade selection">
                            <div class="foodSection__body__swiper__item__text">
                                <h4>Marmalade Selection</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="foodSection__body__swiper__item__arrow">
                                <svg width="32" height="16" viewBox="0 0 32 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.6334 7.11518C31.633 7.11481 31.6327 7.11437 31.6322 7.114L25.1007 0.613996C24.6114 0.127058 23.82 0.128871 23.3329 0.618245C22.8459 1.10756 22.8478 1.899 23.3371 2.386L27.7224 6.74999H1.25C0.559625 6.74999 0 7.30962 0 7.99999C0 8.69037 0.559625 9.24999 1.25 9.24999H27.7223L23.3372 13.614C22.8479 14.101 22.846 14.8924 23.333 15.3817C23.8201 15.8712 24.6116 15.8729 25.1008 15.386L31.6323 8.88599C31.6327 8.88562 31.633 8.88518 31.6334 8.88481C32.123 8.39618 32.1214 7.60218 31.6334 7.11518Z"
                                        fill="#BEAD8E" />
                                </svg>
                            </div>
                        </div>
                        <div class="foodSection__body__swiper__item swiper-slide">
                            <img src="./assets/Img/chia-oatmeal-food.jpg" alt="Chia oatmeal">
                            <div class="foodSection__body__swiper__item__text">
                                <h4>Chia Oatmeal</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="foodSection__body__swiper__item__arrow">
                                <svg width="32" height="16" viewBox="0 0 32 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.6334 7.11518C31.633 7.11481 31.6327 7.11437 31.6322 7.114L25.1007 0.613996C24.6114 0.127058 23.82 0.128871 23.3329 0.618245C22.8459 1.10756 22.8478 1.899 23.3371 2.386L27.7224 6.74999H1.25C0.559625 6.74999 0 7.30962 0 7.99999C0 8.69037 0.559625 9.24999 1.25 9.24999H27.7223L23.3372 13.614C22.8479 14.101 22.846 14.8924 23.333 15.3817C23.8201 15.8712 24.6116 15.8729 25.1008 15.386L31.6323 8.88599C31.6327 8.88562 31.633 8.88518 31.6334 8.88481C32.123 8.39618 32.1214 7.60218 31.6334 7.11518Z"
                                        fill="#BEAD8E" />
                                </svg>
                            </div>
                        </div>
                        <div class="foodSection__body__swiper__item swiper-slide">
                            <img src="./assets/Img/cheese-board-food.jpg" alt="Cheese plate">
                            <div class="foodSection__body__swiper__item__text">
                                <h4>Cheese Plate</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="foodSection__body__swiper__item__arrow">
                                <svg width="32" height="16" viewBox="0 0 32 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.6334 7.11518C31.633 7.11481 31.6327 7.11437 31.6322 7.114L25.1007 0.613996C24.6114 0.127058 23.82 0.128871 23.3329 0.618245C22.8459 1.10756 22.8478 1.899 23.3371 2.386L27.7224 6.74999H1.25C0.559625 6.74999 0 7.30962 0 7.99999C0 8.69037 0.559625 9.24999 1.25 9.24999H27.7223L23.3372 13.614C22.8479 14.101 22.846 14.8924 23.333 15.3817C23.8201 15.8712 24.6116 15.8729 25.1008 15.386L31.6323 8.88599C31.6327 8.88562 31.633 8.88518 31.6334 8.88481C32.123 8.39618 32.1214 7.60218 31.6334 7.11518Z"
                                        fill="#BEAD8E" />
                                </svg>
                            </div>
                        </div>
                        <div class="foodSection__body__swiper__item swiper-slide">
                            <img src="./assets/Img/marmalade-selection-food.jpg" alt="Eggs & bacon">
                            <div class="foodSection__body__swiper__item__text">
                                <h4>Eggs & Bacon</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="foodSection__body__swiper__item__arrow">
                                <svg width="32" height="16" viewBox="0 0 32 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.6334 7.11518C31.633 7.11481 31.6327 7.11437 31.6322 7.114L25.1007 0.613996C24.6114 0.127058 23.82 0.128871 23.3329 0.618245C22.8459 1.10756 22.8478 1.899 23.3371 2.386L27.7224 6.74999H1.25C0.559625 6.74999 0 7.30962 0 7.99999C0 8.69037 0.559625 9.24999 1.25 9.24999H27.7223L23.3372 13.614C22.8479 14.101 22.846 14.8924 23.333 15.3817C23.8201 15.8712 24.6116 15.8729 25.1008 15.386L31.6323 8.88599C31.6327 8.88562 31.633 8.88518 31.6334 8.88481C32.123 8.39618 32.1214 7.60218 31.6334 7.11518Z"
                                        fill="#BEAD8E" />
                                </svg>
                            </div>
                        </div>
                        <div class="foodSection__body__swiper__item swiper-slide">
                            <img src="./assets/Img/fruit-parfait-food.jpg" alt="Fruit parfait">
                            <div class="foodSection__body__swiper__item__text">
                                <h4>Fruit Parfait</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="foodSection__body__swiper__item__arrow">
                                <svg width="32" height="16" viewBox="0 0 32 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.6334 7.11518C31.633 7.11481 31.6327 7.11437 31.6322 7.114L25.1007 0.613996C24.6114 0.127058 23.82 0.128871 23.3329 0.618245C22.8459 1.10756 22.8478 1.899 23.3371 2.386L27.7224 6.74999H1.25C0.559625 6.74999 0 7.30962 0 7.99999C0 8.69037 0.559625 9.24999 1.25 9.24999H27.7223L23.3372 13.614C22.8479 14.101 22.846 14.8924 23.333 15.3817C23.8201 15.8712 24.6116 15.8729 25.1008 15.386L31.6323 8.88599C31.6327 8.88562 31.633 8.88518 31.6334 8.88481C32.123 8.39618 32.1214 7.60218 31.6334 7.11518Z"
                                        fill="#BEAD8E" />
                                </svg>
                            </div>
                        </div>
                        <div class="foodSection__body__swiper__item swiper-slide">
                            <img src="./assets/Img/tea-coffee-food.jpg" alt="Tea or coffee">
                            <div class="foodSection__body__swiper__item__text">
                                <h4>Tea or Coffee</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="foodSection__body__swiper__item__arrow">
                                <svg width="32" height="16" viewBox="0 0 32 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.6334 7.11518C31.633 7.11481 31.6327 7.11437 31.6322 7.114L25.1007 0.613996C24.6114 0.127058 23.82 0.128871 23.3329 0.618245C22.8459 1.10756 22.8478 1.899 23.3371 2.386L27.7224 6.74999H1.25C0.559625 6.74999 0 7.30962 0 7.99999C0 8.69037 0.559625 9.24999 1.25 9.24999H27.7223L23.3372 13.614C22.8479 14.101 22.846 14.8924 23.333 15.3817C23.8201 15.8712 24.6116 15.8729 25.1008 15.386L31.6323 8.88599C31.6327 8.88562 31.633 8.88518 31.6334 8.88481C32.123 8.39618 32.1214 7.60218 31.6334 7.11518Z"
                                        fill="#BEAD8E" />
                                </svg>
                            </div>
                        </div>
                        <div class="foodSection__body__swiper__item swiper-slide">
                            <img src="./assets/Img/marmalade-selection-food.jpg" alt="Marmalade selection">
                            <div class="foodSection__body__swiper__item__text">
                                <h4>Marmalade Selection</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="foodSection__body__swiper__item__arrow">
                                <svg width="32" height="16" viewBox="0 0 32 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.6334 7.11518C31.633 7.11481 31.6327 7.11437 31.6322 7.114L25.1007 0.613996C24.6114 0.127058 23.82 0.128871 23.3329 0.618245C22.8459 1.10756 22.8478 1.899 23.3371 2.386L27.7224 6.74999H1.25C0.559625 6.74999 0 7.30962 0 7.99999C0 8.69037 0.559625 9.24999 1.25 9.24999H27.7223L23.3372 13.614C22.8479 14.101 22.846 14.8924 23.333 15.3817C23.8201 15.8712 24.6116 15.8729 25.1008 15.386L31.6323 8.88599C31.6327 8.88562 31.633 8.88518 31.6334 8.88481C32.123 8.39618 32.1214 7.60218 31.6334 7.11518Z"
                                        fill="#BEAD8E" />
                                </svg>
                            </div>
                        </div>
                        <div class="foodSection__body__swiper__item swiper-slide">

                            <img src="./assets/Img/chia-oatmeal-food.jpg" alt="Chia oatmeal">
                            <div class="foodSection__body__swiper__item__text">
                                <h4>Chia Oatmeal</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="foodSection__body__swiper__item__arrow">
                                <svg width="32" height="16" viewBox="0 0 32 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.6334 7.11518C31.633 7.11481 31.6327 7.11437 31.6322 7.114L25.1007 0.613996C24.6114 0.127058 23.82 0.128871 23.3329 0.618245C22.8459 1.10756 22.8478 1.899 23.3371 2.386L27.7224 6.74999H1.25C0.559625 6.74999 0 7.30962 0 7.99999C0 8.69037 0.559625 9.24999 1.25 9.24999H27.7223L23.3372 13.614C22.8479 14.101 22.846 14.8924 23.333 15.3817C23.8201 15.8712 24.6116 15.8729 25.1008 15.386L31.6323 8.88599C31.6327 8.88562 31.633 8.88518 31.6334 8.88481C32.123 8.39618 32.1214 7.60218 31.6334 7.11518Z"
                                        fill="#BEAD8E" />
                                </svg>
                            </div>
                        </div>
                        <div class="foodSection__body__swiper__item swiper-slide">
                            <img src="./assets/Img/cheese-board-food.jpg" alt="Cheese plate">
                            <div class="foodSection__body__swiper__item__text">
                                <h4>Cheese Plate</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="foodSection__body__swiper__item__arrow">
                                <svg width="32" height="16" viewBox="0 0 32 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.6334 7.11518C31.633 7.11481 31.6327 7.11437 31.6322 7.114L25.1007 0.613996C24.6114 0.127058 23.82 0.128871 23.3329 0.618245C22.8459 1.10756 22.8478 1.899 23.3371 2.386L27.7224 6.74999H1.25C0.559625 6.74999 0 7.30962 0 7.99999C0 8.69037 0.559625 9.24999 1.25 9.24999H27.7223L23.3372 13.614C22.8479 14.101 22.846 14.8924 23.333 15.3817C23.8201 15.8712 24.6116 15.8729 25.1008 15.386L31.6323 8.88599C31.6327 8.88562 31.633 8.88518 31.6334 8.88481C32.123 8.39618 32.1214 7.60218 31.6334 7.11518Z"
                                        fill="#BEAD8E" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons-menu">
                    <div class="buttons-menu__prev">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.33841 9.67603C5.29092 9.67605 5.24388 9.66671 5.2 9.64855C5.15611 9.6304 5.11623 9.60377 5.08264 9.5702L0.625466 5.11279C0.557675 5.04498 0.519592 4.95302 0.519592 4.85713C0.519592 4.76125 0.557675 4.66929 0.625466 4.60148L5.08264 0.144067C5.11621 0.110478 5.15607 0.0838309 5.19994 0.0656466C5.24381 0.0474623 5.29084 0.0380971 5.33833 0.0380859C5.38582 0.0380748 5.43285 0.0474177 5.47673 0.0655814C5.52061 0.083745 5.56048 0.110374 5.59407 0.143947C5.62766 0.17752 5.6543 0.21738 5.67249 0.261252C5.69067 0.305124 5.70004 0.352147 5.70005 0.399638C5.70006 0.447129 5.69072 0.494157 5.67255 0.538038C5.65439 0.581918 5.62776 0.621791 5.59419 0.65538L1.39256 4.85701L5.59419 9.05864C5.64479 9.10922 5.67926 9.17366 5.69323 9.24383C5.70719 9.314 5.70003 9.38673 5.67265 9.45282C5.64527 9.51892 5.59889 9.57541 5.5394 9.61514C5.4799 9.65487 5.40995 9.67606 5.33841 9.67603Z"
                                fill="#111111" />
                        </svg>
                    </div>
                    <div class="buttons-menu__next">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.661588 9.67603C0.709083 9.67605 0.756117 9.66671 0.800004 9.64855C0.843891 9.6304 0.88377 9.60377 0.917365 9.5702L5.37453 5.11279C5.44232 5.04498 5.48041 4.95302 5.48041 4.85713C5.48041 4.76125 5.44232 4.66929 5.37453 4.60148L0.917365 0.144067C0.883791 0.110478 0.843932 0.0838309 0.80006 0.0656466C0.756188 0.0474623 0.709165 0.0380971 0.661674 0.0380859C0.614182 0.0380748 0.567155 0.0474177 0.523274 0.0655814C0.479394 0.083745 0.439521 0.110374 0.405932 0.143947C0.372343 0.17752 0.345696 0.21738 0.327511 0.261252C0.309327 0.305124 0.299962 0.352147 0.29995 0.399638C0.299939 0.447129 0.309282 0.494157 0.327446 0.538038C0.34561 0.581918 0.372239 0.621791 0.405812 0.65538L4.60744 4.85701L0.405812 9.05864C0.355207 9.10922 0.320741 9.17366 0.306775 9.24383C0.292808 9.314 0.299969 9.38673 0.327352 9.45282C0.354734 9.51892 0.401109 9.57541 0.460605 9.61514C0.520101 9.65487 0.590045 9.67606 0.661588 9.67603Z"
                                fill="#111111" />
                        </svg>
                    </div>
                    <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> -->
                </div>

            </div>

        </section>
        <section class="imagesSection">
            <div class="swiper imagesSection__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide imagesSection__swiper__item">
                        <img src="./assets/Img/cake-images.jpg" alt="Cake">
                    </div>
                    <div class="swiper-slide imagesSection__swiper__item">
                        <img src="./assets/Img/salad-images.jpg" alt="Cake">
                    </div>
                    <div class="swiper-slide imagesSection__swiper__item">
                        <img src="./assets/Img/cheesee-board-images.jpg" alt="Cake">
                    </div>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </section>
        <section class="infoSection">
            <div class="infoSection__item">
                <img src="./assets/Img/rocket-info.svg" alt="Rocket">
                <div class="infoSection__item__number">
                    <h3>84k<span>+</span></h3>

                </div>
                <p>Projects are Completed</p>
            </div>
            <div class="infoSection__item">
                <img src="./assets/Img/aboutUs-strong.svg" alt="Active backers">
                <div class="infoSection__item__number">
                    <h3>10M<span>+</span></h3>

                </div>
                <p>Active Backers Around World</p>
            </div>
            <div class="infoSection__item">
                <img src="./assets/Img/graph-info.svg" alt="Categories served">
                <div class="infoSection__item__number">
                    <h3>02k<span>+</span></h3>

                </div>
                <p>Categories Served</p>
            </div>
            <div class="infoSection__item">
                <img src="./assets/Img/book-info.svg" alt="ide raised funds">
                <div class="infoSection__item__number">
                    <h3>100M<span>+</span></h3>

                </div>
                <p>Idea Raised Funds</p>
            </div>
        </section>
@endsection
@extends('layout')
@section('content')
        <section class="ContactBanner">
            <div class="section">
                <div class="ContactBanner__text">
                    <p>THE ULTIMATE LUXURY</p>
                    <h2>New Details</h2>
                </div>
                <div class="ContactBanner__links">
                    <a href="./index.php" class="ContactHome">
                        Home
                    </a>
                    <a href="#" class="ContactSelected">
                        Blog
                    </a>
                </div>
            </div>
        </section>
        <section class="ContactInfo">
            <div class="ContactInfo__item">
                <div class="ContactInfo__item__card">
                    <svg width="40" height="38" viewBox="0 0 40 38" fill="none" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="40" height="38" fill="url(#pattern0)" />
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_57_7462" transform="scale(0.025 0.0263158)" />
                            </pattern>
                            <image id="image0_57_7462" width="40" height="38"
                                xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>
                    <div class="ContactInfo__item__card__text">
                        <h2>Hotel Address</h2>
                        <p>Calle Princesa, 31, Madrid</p>
                    </div>
                </div>
                <h2 class="ContactInfo__item__number">01</h2>

            </div>
            <div class="ContactInfo__item">
                <div class="ContactInfo__item__card">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M38.9504 30.8579L30.8542 25.4587C29.8268 24.779 28.4496 25.0027 27.69 25.9726L25.3317 29.0048C25.0286 29.4044 24.4777 29.5204 24.0392 29.2768L23.5906 29.0295C22.1035 28.2189 20.2531 27.2098 16.525 23.4803C12.7969 19.7509 11.7857 17.8991 10.9751 16.4147L10.7292 15.9661C10.4823 15.5278 10.596 14.9745 10.9958 14.669L14.0259 12.3114C14.9955 11.5517 15.2194 10.1749 14.5406 9.14714L9.14136 1.051C8.4456 0.00443778 7.04971 -0.309734 5.97261 0.337748L2.58709 2.37143C1.52334 2.99681 0.742912 4.00962 0.409446 5.19765C-0.809671 9.63965 0.107458 17.3059 11.4005 28.6002C20.3838 37.5828 27.0715 39.9985 31.6682 39.9985C32.7261 40.003 33.7798 39.8654 34.8011 39.5893C35.9893 39.2562 37.0023 38.4757 37.6273 37.4116L39.663 34.0281C40.3114 32.9508 39.9974 31.554 38.9504 30.8579ZM38.5144 33.3442L36.4834 36.7297C36.0346 37.4977 35.3061 38.0624 34.4503 38.3055C30.3496 39.4313 23.1854 38.4988 12.3436 27.6571C1.50186 16.8153 0.569422 9.65168 1.69527 5.55033C1.93867 4.69358 2.50406 3.96408 3.27301 3.51462L6.65852 1.48359C7.12587 1.20238 7.73172 1.33869 8.03363 1.79284L10.9666 6.19617L13.4282 9.88828C13.723 10.3341 13.6262 10.9316 13.2056 11.2614L10.1747 13.6191C9.25235 14.3243 8.98896 15.6005 9.55684 16.6133L9.79751 17.0506C10.6494 18.613 11.7086 20.5567 15.5753 24.4228C19.4421 28.2889 21.3852 29.3481 22.9469 30.2L23.3848 30.4412C24.3975 31.0091 25.6738 30.7457 26.379 29.8234L28.7367 26.7925C29.0666 26.3722 29.6639 26.2754 30.1098 26.5699L38.2053 31.9691C38.6597 32.2707 38.796 32.8769 38.5144 33.3442Z"
                            fill="#BEAD8E" />
                        <path
                            d="M22.6656 6.67C28.921 6.67695 33.9902 11.7463 33.9972 18.0017C33.9972 18.3698 34.2956 18.6682 34.6638 18.6682C35.0319 18.6682 35.3303 18.3698 35.3303 18.0017C35.3226 11.0103 29.6569 5.34457 22.6656 5.33691C22.2974 5.33691 21.999 5.63531 21.999 6.00346C21.999 6.3716 22.2974 6.67 22.6656 6.67Z"
                            fill="#BEAD8E" />
                        <path
                            d="M22.6656 10.6695C26.7131 10.6743 29.9931 13.9543 29.9978 18.0018C29.9978 18.3699 30.2963 18.6683 30.6644 18.6683C31.0325 18.6683 31.3309 18.3699 31.3309 18.0018C31.3254 13.2183 27.449 9.34189 22.6656 9.33643C22.2974 9.33643 21.999 9.63482 21.999 10.003C21.999 10.3711 22.2974 10.6695 22.6656 10.6695Z"
                            fill="#BEAD8E" />
                        <path
                            d="M22.6656 14.669C24.5053 14.6712 25.9962 16.1621 25.9984 18.0019C25.9984 18.37 26.2969 18.6684 26.665 18.6684C27.033 18.6684 27.3315 18.37 27.3315 18.0019C27.3285 15.4262 25.2413 13.3388 22.6656 13.3359C22.2974 13.3359 21.999 13.6343 21.999 14.0025C21.999 14.3706 22.2974 14.669 22.6656 14.669Z"
                            fill="#BEAD8E" />
                    </svg>
                    <div class="ContactInfo__item__card__text">
                        <h2>Phone Number</h2>
                        <p>+34 634 11 44 32</p>
                    </div>
                </div>
                <h2 class="ContactInfo__item__number">02</h2>

            </div>
            <div class="ContactInfo__item">
                <div class="ContactInfo__item__card">
                    <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect y="0.5" width="40" height="40" fill="url(#pattern0)" />
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_57_7480" transform="scale(0.025)" />
                            </pattern>
                            <image id="image0_57_7480" width="40" height="40"
                                xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>
                    <div class="ContactInfo__item__card__text">
                        <h2>Email</h2>
                        <p>afisman@gmail.com</p>
                    </div>

                </div>
                <h2 class="ContactInfo__item__number">03</h2>
            </div>
        </section>
        <section class="ContactMap">
        <div class="ContactMap__map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.1328875022737!2d-3.717276088381854!3d40.428056271318695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229fc15efcb09%3A0xb0036150b0cd3867!2sOXYGEN%20Academy%20%7C%20Full%20Stack%20Bootcamps!5e0!3m2!1ses!2ses!4v1709047244567!5m2!1ses!2ses"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </section>
        <section class="ContactForm">
            <form  method="POST">
                @csrf
                <div class="ContactForm__input">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="14" height="14" x="0" y="0" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="hovered-paths">
                        <g>
                            <path
                                d="M333.187 237.405c32.761-23.893 54.095-62.561 54.095-106.123C387.282 58.893 328.389 0 256 0S124.718 58.893 124.718 131.282c0 43.562 21.333 82.23 54.095 106.123-81.44 31.165-139.428 110.126-139.428 202.39 0 39.814 32.391 72.205 72.205 72.205h288.82c39.814 0 72.205-32.391 72.205-72.205 0-92.264-57.988-171.225-139.428-202.39zM164.103 131.282c0-50.672 41.225-91.897 91.897-91.897s91.897 41.225 91.897 91.897S306.672 223.18 256 223.18s-91.897-41.226-91.897-91.898zM400.41 472.615H111.59c-18.097 0-32.82-14.723-32.82-32.821 0-97.726 79.504-177.231 177.231-177.231s177.231 79.504 177.231 177.231c-.001 18.098-14.724 32.821-32.822 32.821z"
                                fill="#bead8e" opacity="1" data-original="#000000" class="hovered-path"></path>
                        </g>
                    </svg>
                    <input type="text" name="name" placeholder="Your full name" required/>
                </div>
                <div class="ContactForm__input">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="14" height="14" x="0" y="0" viewBox="0 0 482.6 482.6"
                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-13.3 6.3-24.4 15.9-34l37.2-37.2c5.8-5.6 12.2-8.5 18.4-8.5 6.1 0 12.3 2.9 18 8.7 6.7 6.2 13 12.7 19.8 19.6 3.4 3.5 6.9 7 10.4 10.6l29.8 29.8c6.2 6.2 9.4 12.5 9.4 18.7s-3.2 12.5-9.4 18.7c-3.1 3.1-6.2 6.3-9.3 9.4-9.3 9.4-18 18.3-27.6 26.8l-.5.5c-8.3 8.3-7 16.2-5 22.2.1.3.2.5.3.8 7.7 18.5 18.4 36.1 35.1 57.1 30 37 61.6 65.7 96.4 87.8 4.3 2.8 8.9 5 13.2 7.2 4 2 7.7 3.9 11 6 .4.2.7.4 1.1.6 3.3 1.7 6.5 2.5 9.7 2.5 8 0 13.2-5.1 14.9-6.8l37.4-37.4c5.8-5.8 12.1-8.9 18.3-8.9 7.6 0 13.8 4.7 17.7 8.9l60.3 60.2c12 12 11.9 25-.3 37.7-4.2 4.5-8.6 8.8-13.3 13.3-7 6.8-14.3 13.8-20.9 21.7-11.5 12.4-25.2 18.2-42.9 18.2-1.7 0-3.5-.1-5.2-.2-32.8-2.1-63.3-14.9-86.2-25.8-62.2-30.1-116.8-72.8-162.1-127-37.3-44.9-62.4-86.7-79-131.5-10.3-27.5-14.2-49.6-12.6-69.7z"
                                fill="#bead8e" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                    <input type="text" name="phone" placeholder=" Add phone number" required>
                </div>
                <div class="ContactForm__input">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="14" height="14" x="0" y="0" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="M469.333 64H42.667C19.135 64 0 83.135 0 106.667v298.667C0 428.865 19.135 448 42.667 448h426.667C492.865 448 512 428.865 512 405.333V106.667C512 83.135 492.865 64 469.333 64zM42.667 85.333h426.667c1.572 0 2.957.573 4.432.897-36.939 33.807-159.423 145.859-202.286 184.478-3.354 3.021-8.76 6.625-15.479 6.625s-12.125-3.604-15.49-6.635C197.652 232.085 75.161 120.027 38.228 86.232c1.478-.324 2.866-.899 4.439-.899zm-21.334 320V106.667c0-2.09.63-3.986 1.194-5.896 28.272 25.876 113.736 104.06 169.152 154.453C136.443 302.671 50.957 383.719 22.46 410.893c-.503-1.814-1.127-3.588-1.127-5.56zm448 21.334H42.667c-1.704 0-3.219-.594-4.81-.974 29.447-28.072 115.477-109.586 169.742-156.009a7980.773 7980.773 0 0 0 18.63 16.858c8.792 7.938 19.083 12.125 29.771 12.125s20.979-4.188 29.76-12.115a8178.815 8178.815 0 0 0 18.641-16.868c54.268 46.418 140.286 127.926 169.742 156.009-1.591.38-3.104.974-4.81.974zm21.334-21.334c0 1.971-.624 3.746-1.126 5.56-28.508-27.188-113.984-108.227-169.219-155.668 55.418-50.393 140.869-128.57 169.151-154.456.564 1.91 1.194 3.807 1.194 5.897v298.667z"
                                fill="#bead8e" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                    <input type="email" name="email" placeholder=" Enter email address" required>
                </div>
                <div class="ContactForm__input">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="14" height="14" x="0" y="0" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="M88 456c-8.837 0-16-7.164-16-16V66c0-36.393 29.607-66 66-66h286c8.837 0 16 7.164 16 16v368c0 8.836-7.163 16-16 16s-16-7.164-16-16V32H138c-18.748 0-34 15.252-34 34v374c0 8.836-7.163 16-16 16z"
                                fill="#bead8e" opacity="1" data-original="#000000" class=""></path>
                            <path
                                d="M424 512H144c-39.701 0-72-32.299-72-72s32.299-72 72-72h280c8.837 0 16 7.164 16 16s-7.163 16-16 16H144c-22.056 0-40 17.944-40 40s17.944 40 40 40h280c8.837 0 16 7.164 16 16s-7.163 16-16 16z"
                                fill="#bead8e" opacity="1" data-original="#000000" class=""></path>
                            <path
                                d="M424 456H144c-8.837 0-16-7.164-16-16s7.163-16 16-16h280c8.837 0 16 7.164 16 16s-7.163 16-16 16zM160 400c-8.837 0-16-7.164-16-16V16c0-8.836 7.163-16 16-16s16 7.164 16 16v368c0 8.836-7.163 16-16 16z"
                                fill="#bead8e" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                    <input type="text" name="subject" placeholder=" Enter subject" required>
                </div>
                <div class="ContactForm__textarea">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="14" height="14" x="0" y="0" viewBox="0 0 484 484"
                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                        <g>
                            <path
                                d="M401.648 18.234c-24.394-24.351-63.898-24.351-88.293 0l-22.101 22.223-235.27 235.145-.5.503c-.12.122-.12.25-.25.25-.25.375-.625.747-.87 1.122 0 .125-.13.125-.13.25-.25.375-.37.625-.625 1-.12.125-.12.246-.246.375-.125.375-.25.625-.379 1 0 .12-.12.12-.12.25L.663 437.32a12.288 12.288 0 0 0 2.996 12.735 12.564 12.564 0 0 0 8.867 3.625c1.356-.024 2.7-.235 3.996-.625l156.848-52.325c.121 0 .121 0 .25-.12a4.523 4.523 0 0 0 1.121-.505.443.443 0 0 0 .254-.12c.371-.25.871-.505 1.246-.755.371-.246.75-.62 1.125-.87.125-.13.246-.13.246-.25.13-.126.38-.247.504-.5l257.371-257.372c24.352-24.394 24.352-63.898 0-88.289zM169.375 371.383l-86.914-86.91L299.996 66.938l86.914 86.91zm-99.156-63.809 75.93 75.926-114.016 37.96zm347.664-184.82-13.238 13.363L317.727 49.2l13.367-13.36c14.62-14.609 38.32-14.609 52.945 0l33.965 33.966c14.512 14.687 14.457 38.332-.121 52.949zm0 0"
                                fill="#bead8e" opacity="1" data-original="#000000" class=""></path>
                        </g>
                    </svg>
                    <textarea type="area" name="message" rows="8" placeholder=" Enter message" required></textarea>
                </div>
                <button type="submit" class="ContactForm__button">SEND</button>
            </form>
        </section>
@endsection
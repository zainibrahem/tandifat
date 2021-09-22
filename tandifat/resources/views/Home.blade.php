@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">

<div class="wrapper mt-8 relative z-10">
    <div class="carousel relative shadow-2xl bg-white">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:70vh;">
                <div class="h-full  w-full text-white text-5xl text-left flex flex-col justify-center items-start pl-48"
                    style="background:url({{asset('imgs/slider/slide1.png')}});background-size:cover">
                    <div class="absolute bg-black top-0 left-0 opacity-50 h-full w-full z-10"></div>
                    <span class="relative z-20  font-bold">Consequat mattis.</span>
                    <span class="text-3xl relative z-20 w-2/3 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Quam facilisis eget id amet nulla. Feugiat in.
                    </span>
                    <button class="rounded-full relative z-20 text-white text-xl w-36 mt-4 py-2 bg-primary">TRY
                        IT</button>
                </div>
            </div>
            <label for="carousel-3"
                class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black  rounded-7 border-1 border-white leading-tight text-center z-10 inset-y-0 left-0 my-auto">
                <svg class="absolute left-1/2 top-1/2 transform -translate-y-1/2 -translate-x-1/2" width="11"
                    height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.6275 0.918943C10.9878 1.25025 11.02 1.7702 10.7161 2.13294L10.6248 2.22771L1.75555 10.295C1.35853 10.6564 0.717104 10.6552 0.322793 10.2925C0.126987 10.1124 0.0270596 9.87558 0.0270596 9.63997C0.0270596 9.44158 0.0964537 9.24404 0.234462 9.07949L0.325494 8.98497L9.19479 0.917711C9.59181 0.556288 10.2332 0.55752 10.6275 0.918943ZM10.6247 17.0512C11.0231 17.4127 11.0204 17.9986 10.6274 18.36C10.266 18.6924 9.69686 18.7212 9.29872 18.4462L9.19466 18.3637L3.3043 13.0065C3.10579 12.8264 3.00586 12.5883 3.00586 12.3515C3.00586 12.1159 3.10579 11.8791 3.3016 11.699C3.66305 11.3665 4.23215 11.3378 4.63029 11.6128L4.73435 11.6953L10.6247 17.0512Z"
                        fill="#F5F5F5" />
                </svg>
            </label>
            <label for="carousel-2"
                class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black rounded-7 border-1 border-white leading-tight text-center z-10 inset-y-0 right-0 my-auto">
                <svg class="absolute left-1/2 top-1/2 transform -translate-y-1/2 -translate-x-1/2" width="11"
                    height="19" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.321641 18.0809C-0.0385731 17.7496 -0.0708604 17.2297 0.2331 16.8669L0.324342 16.7722L9.19364 8.7049C9.59065 8.34348 10.2321 8.34471 10.6264 8.70737C10.8222 8.88747 10.9221 9.1243 10.9221 9.35991C10.9221 9.5583 10.8527 9.75583 10.7147 9.92039L10.6237 10.0149L1.75439 18.0822C1.35738 18.4436 0.715952 18.4424 0.321641 18.0809ZM0.324477 1.94864C-0.0738856 1.58721 -0.0711848 1.00129 0.321776 0.639864C0.683228 0.307429 1.25233 0.278689 1.65047 0.553646L1.75453 0.636164L7.64489 5.99337C7.8434 6.17346 7.94332 6.41153 7.94332 6.64837C7.94332 6.88397 7.8434 7.12081 7.64759 7.3009C7.28614 7.63334 6.71704 7.66208 6.3189 7.38712L6.21484 7.3046L0.324477 1.94864Z"
                        fill="#F5F5F5" />
                </svg>
            </label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full bg-red-500 text-white text-5xl text-center">Slide 2</div>
            </div>
            <label for="carousel-1"
                class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3"
                class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">Slide 3</div>
            </div>
            <label for="carousel-2"
                class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1"
                class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1"
                        class="carousel-bullet cursor-pointer block text-4xl bg-default hover:bg-carousel rounded-full w-3 h-3"></label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2"
                        class="carousel-bullet cursor-pointer block text-4xl bg-default hover:bg-carousel rounded-full w-3 h-3"></label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3"
                        class="carousel-bullet cursor-pointer block text-4xl bg-default hover:bg-carousel rounded-full w-3 h-3"></label>
                </li>
            </ol>

        </div>
    </div>

    <div class="deals w-full py-20">
        <h1 class="text-center text-5xl text-blacks">Top Deals</h1>
    </div>

</div>

{{-- <svg class="absolute right-0 top-1/2 z-0" width="271" height="358" viewBox="0 0 271 358" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g opacity="0.3">
    <circle opacity="0.6" cx="179" cy="179" r="83.2394" stroke="#BB3A7D" stroke-width="10"/>
    <circle opacity="0.8" cx="179" cy="179" r="120.216" stroke="#BB3A7D" stroke-width="10"/>
    <circle opacity="0.9" cx="179" cy="179" r="174" stroke="#BB3A7D" stroke-width="10"/>
    </g>
</svg>
     --}}
<div class="w-10/12 relative left-1/2 transform -translate-x-1/2">
    <div class="" style="min-height:600px;">


        <div class="owl-carousel carousel1">
            <div class="flex flex-col justify-between items-stretch pro-item overflow-hidden">
                <div class="paddings relative">
                    <svg class="absolute addCart hidden cursor-pointer right-4" width="35" height="35"
                        viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25.5" cy="25.5" r="24.5" fill="#fff" stroke="#BB3A7D" stroke-width="2" />
                        <path
                            d="M30.9706 13.5778C28.8269 13.5778 26.8217 14.5586 25.5 16.199C24.1783 14.5586 22.1731 13.5778 20.0294 13.5778C16.1534 13.5778 13 16.7312 13 20.6071C13 23.6517 14.819 27.1771 18.4065 31.0855C21.1714 34.0978 24.1794 36.4302 25.0355 37.0733L25.4999 37.4222L25.9643 37.0734C26.8204 36.4303 29.8284 34.0979 32.5935 31.0856C36.181 27.1773 38 23.6518 38 20.6071C38 16.7312 34.8466 13.5778 30.9706 13.5778ZM31.4542 30.0399C29.153 32.5468 26.6758 34.5686 25.4998 35.4818C24.3239 34.5686 21.8467 32.5466 19.5457 30.0398C16.2751 26.4767 14.5464 23.2149 14.5464 20.6071C14.5464 17.5838 17.0061 15.1242 20.0294 15.1242C22.019 15.1242 23.856 16.2085 24.8238 17.9541L25.5 19.1739L26.1762 17.9541C27.1439 16.2085 28.981 15.1242 30.9706 15.1242C33.9939 15.1242 36.4536 17.5838 36.4536 20.6072C36.4536 23.215 34.7248 26.4768 31.4542 30.0399Z"
                            fill="#BB3A7D" />
                    </svg>
                    <svg class="absolute addCart hidden cursor-pointer top-14 right-4" width="35" height="35"
                        viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25.5" cy="25.5" r="24.5" stroke="#BB3A7D" stroke-width="2" />
                        <path
                            d="M36.545 24.0447C36.545 17.9546 31.5904 13 25.5004 13C19.4103 13 14.4556 17.9546 14.4556 24.0447C14.4556 24.4065 14.7489 24.6998 15.1107 24.6998C15.4725 24.6998 15.7658 24.4064 15.7658 24.0447C15.7658 18.6771 20.1327 14.3102 25.5003 14.3102C30.8679 14.3102 35.2348 18.6771 35.2348 24.0447C35.2348 29.4123 30.8679 33.7792 25.5003 33.7792H24.3638L25.9889 31.9601C26.2299 31.6903 26.2066 31.2762 25.9368 31.0351C25.667 30.794 25.2528 30.8175 25.0118 31.0873L22.6887 33.6876C22.3085 34.1133 22.3085 34.7553 22.6887 35.181L25.0118 37.7813C25.1412 37.9262 25.3205 38 25.5006 38C25.6559 38 25.8118 37.945 25.9368 37.8334C26.2066 37.5924 26.2299 37.1782 25.9889 36.9084L24.3638 35.0894H25.5003C31.5904 35.0894 36.545 30.1347 36.545 24.0447Z"
                            fill="#BB3A7D" />
                    </svg>

                    <img class="w-full " src="{{asset('imgs/products/coat1.png')}}" alt="">
                </div>
                <div class="bg-primary w-full badges transform hidden -translate-x-1/2 mt-2 left-0 py-1 ">
                    <h1 class="text-sm text-white text-right pr-3  w-full">15.00 Clup Points</h1>
                </div>
                <div class="paddings">
                    <h1 class="text-3xl  mt-4  text-center text-blacks">Overcoat</h1>
                    <h1 class="text-xl   mt-2 font-bold discount text-center text-primary">255,000,000 LBP</h1>
                    <h1 class="text-2xl  mt-2  font-bold  text-center text-blacks">2000,000 LBP</h1>
                    <div
                        class="mt-1 flex  justify-between items-center w-11/12 relative left-1/2 transform -translate-x-1/2">
                        <img class="provider_image rounded w-11 h-11" src="{{asset('imgs/providers/pro1.png')}}" alt="">
                        <h1 class="text-md text-blacks">Provider Name</h1>
                    </div>
                    <h1
                        class="text-sm mt-1  cursor-pointer text-primary flex justify-between items-center w-6/12 relative left-1/2 transform -translate-x-1/2 ">
                        View Details
                        <svg width="8" height="17" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.295396 18.214C-0.0648183 17.8827 -0.0971055 17.3627 0.206855 17L0.298097 16.9052L9.1674 8.83796C9.56441 8.47654 10.2058 8.47777 10.6002 8.84043C10.796 9.02052 10.8959 9.25736 10.8959 9.49296C10.8959 9.69135 10.8265 9.88889 10.6885 10.0534L10.5974 10.148L1.72815 18.2152C1.33114 18.5766 0.689707 18.5754 0.295396 18.214ZM0.298232 2.08169C-0.100131 1.72027 -0.09743 1.13434 0.295531 0.772921C0.656983 0.440486 1.22608 0.411746 1.62422 0.686702L1.72828 0.76922L7.61865 6.12642C7.81715 6.30652 7.91708 6.54459 7.91708 6.78143C7.91708 7.01703 7.81715 7.25387 7.62135 7.43396C7.25989 7.7664 6.69079 7.79514 6.29265 7.52018L6.18859 7.43766L0.298232 2.08169Z"
                                fill="#BB3A7D" />
                        </svg>
                    </h1>
                </div>
                <button class="bg-primary text-sm w-full py-2 mt-2 text-center text-white hidden addCart">Add to
                    Cart</button>
            </div>
            <div class="flex flex-col justify-between items-stretch pro-item overflow-hidden">
                <div class="paddings relative">
                    <svg class="absolute addCart hidden cursor-pointer right-4" width="35" height="35"
                        viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25.5" cy="25.5" r="24.5" fill="#fff" stroke="#BB3A7D" stroke-width="2" />
                        <path
                            d="M30.9706 13.5778C28.8269 13.5778 26.8217 14.5586 25.5 16.199C24.1783 14.5586 22.1731 13.5778 20.0294 13.5778C16.1534 13.5778 13 16.7312 13 20.6071C13 23.6517 14.819 27.1771 18.4065 31.0855C21.1714 34.0978 24.1794 36.4302 25.0355 37.0733L25.4999 37.4222L25.9643 37.0734C26.8204 36.4303 29.8284 34.0979 32.5935 31.0856C36.181 27.1773 38 23.6518 38 20.6071C38 16.7312 34.8466 13.5778 30.9706 13.5778ZM31.4542 30.0399C29.153 32.5468 26.6758 34.5686 25.4998 35.4818C24.3239 34.5686 21.8467 32.5466 19.5457 30.0398C16.2751 26.4767 14.5464 23.2149 14.5464 20.6071C14.5464 17.5838 17.0061 15.1242 20.0294 15.1242C22.019 15.1242 23.856 16.2085 24.8238 17.9541L25.5 19.1739L26.1762 17.9541C27.1439 16.2085 28.981 15.1242 30.9706 15.1242C33.9939 15.1242 36.4536 17.5838 36.4536 20.6072C36.4536 23.215 34.7248 26.4768 31.4542 30.0399Z"
                            fill="#BB3A7D" />
                    </svg>
                    <svg class="absolute addCart hidden cursor-pointer top-14 right-4" width="35" height="35"
                        viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25.5" cy="25.5" r="24.5" stroke="#BB3A7D" stroke-width="2" />
                        <path
                            d="M36.545 24.0447C36.545 17.9546 31.5904 13 25.5004 13C19.4103 13 14.4556 17.9546 14.4556 24.0447C14.4556 24.4065 14.7489 24.6998 15.1107 24.6998C15.4725 24.6998 15.7658 24.4064 15.7658 24.0447C15.7658 18.6771 20.1327 14.3102 25.5003 14.3102C30.8679 14.3102 35.2348 18.6771 35.2348 24.0447C35.2348 29.4123 30.8679 33.7792 25.5003 33.7792H24.3638L25.9889 31.9601C26.2299 31.6903 26.2066 31.2762 25.9368 31.0351C25.667 30.794 25.2528 30.8175 25.0118 31.0873L22.6887 33.6876C22.3085 34.1133 22.3085 34.7553 22.6887 35.181L25.0118 37.7813C25.1412 37.9262 25.3205 38 25.5006 38C25.6559 38 25.8118 37.945 25.9368 37.8334C26.2066 37.5924 26.2299 37.1782 25.9889 36.9084L24.3638 35.0894H25.5003C31.5904 35.0894 36.545 30.1347 36.545 24.0447Z"
                            fill="#BB3A7D" />
                    </svg>

                    <img class="w-full " src="{{asset('imgs/products/coat1.png')}}" alt="">
                </div>
                <div class="bg-primary w-full badges transform hidden -translate-x-1/2 mt-2 left-0 py-1 ">
                    <h1 class="text-sm text-white text-right pr-3  w-full">15.00 Clup Points</h1>
                </div>
                <div class="paddings">
                    <h1 class="text-3xl  mt-4  text-center text-blacks">Overcoat</h1>
                    <h1 class="text-xl   mt-2 font-bold discount text-center text-primary">255,000,000 LBP</h1>
                    <h1 class="text-2xl  mt-2  font-bold  text-center text-blacks">2000,000 LBP</h1>
                    <div
                        class="mt-1 flex  justify-between items-center w-11/12 relative left-1/2 transform -translate-x-1/2">
                        <img class="provider_image rounded w-11 h-11" src="{{asset('imgs/providers/pro1.png')}}" alt="">
                        <h1 class="text-md text-blacks">Provider Name</h1>
                    </div>
                    <h1
                        class="text-sm mt-1  cursor-pointer text-primary flex justify-between items-center w-6/12 relative left-1/2 transform -translate-x-1/2 ">
                        View Details
                        <svg width="8" height="17" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.295396 18.214C-0.0648183 17.8827 -0.0971055 17.3627 0.206855 17L0.298097 16.9052L9.1674 8.83796C9.56441 8.47654 10.2058 8.47777 10.6002 8.84043C10.796 9.02052 10.8959 9.25736 10.8959 9.49296C10.8959 9.69135 10.8265 9.88889 10.6885 10.0534L10.5974 10.148L1.72815 18.2152C1.33114 18.5766 0.689707 18.5754 0.295396 18.214ZM0.298232 2.08169C-0.100131 1.72027 -0.09743 1.13434 0.295531 0.772921C0.656983 0.440486 1.22608 0.411746 1.62422 0.686702L1.72828 0.76922L7.61865 6.12642C7.81715 6.30652 7.91708 6.54459 7.91708 6.78143C7.91708 7.01703 7.81715 7.25387 7.62135 7.43396C7.25989 7.7664 6.69079 7.79514 6.29265 7.52018L6.18859 7.43766L0.298232 2.08169Z"
                                fill="#BB3A7D" />
                        </svg>
                    </h1>
                </div>
                <h1 class="bg-primary text-sm w-full py-2 mt-2 text-center text-white hidden addCart">Add to Cart</h1>
            </div>
            <div class="flex flex-col justify-between items-stretch pro-item overflow-hidden">
                <div class="paddings relative">
                    <svg class="absolute addCart hidden cursor-pointer right-4" width="35" height="35"
                        viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25.5" cy="25.5" r="24.5" fill="#fff" stroke="#BB3A7D" stroke-width="2" />
                        <path
                            d="M30.9706 13.5778C28.8269 13.5778 26.8217 14.5586 25.5 16.199C24.1783 14.5586 22.1731 13.5778 20.0294 13.5778C16.1534 13.5778 13 16.7312 13 20.6071C13 23.6517 14.819 27.1771 18.4065 31.0855C21.1714 34.0978 24.1794 36.4302 25.0355 37.0733L25.4999 37.4222L25.9643 37.0734C26.8204 36.4303 29.8284 34.0979 32.5935 31.0856C36.181 27.1773 38 23.6518 38 20.6071C38 16.7312 34.8466 13.5778 30.9706 13.5778ZM31.4542 30.0399C29.153 32.5468 26.6758 34.5686 25.4998 35.4818C24.3239 34.5686 21.8467 32.5466 19.5457 30.0398C16.2751 26.4767 14.5464 23.2149 14.5464 20.6071C14.5464 17.5838 17.0061 15.1242 20.0294 15.1242C22.019 15.1242 23.856 16.2085 24.8238 17.9541L25.5 19.1739L26.1762 17.9541C27.1439 16.2085 28.981 15.1242 30.9706 15.1242C33.9939 15.1242 36.4536 17.5838 36.4536 20.6072C36.4536 23.215 34.7248 26.4768 31.4542 30.0399Z"
                            fill="#BB3A7D" />
                    </svg>
                    <svg class="absolute addCart hidden cursor-pointer top-14 right-4" width="35" height="35"
                        viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25.5" cy="25.5" r="24.5" stroke="#BB3A7D" stroke-width="2" />
                        <path
                            d="M36.545 24.0447C36.545 17.9546 31.5904 13 25.5004 13C19.4103 13 14.4556 17.9546 14.4556 24.0447C14.4556 24.4065 14.7489 24.6998 15.1107 24.6998C15.4725 24.6998 15.7658 24.4064 15.7658 24.0447C15.7658 18.6771 20.1327 14.3102 25.5003 14.3102C30.8679 14.3102 35.2348 18.6771 35.2348 24.0447C35.2348 29.4123 30.8679 33.7792 25.5003 33.7792H24.3638L25.9889 31.9601C26.2299 31.6903 26.2066 31.2762 25.9368 31.0351C25.667 30.794 25.2528 30.8175 25.0118 31.0873L22.6887 33.6876C22.3085 34.1133 22.3085 34.7553 22.6887 35.181L25.0118 37.7813C25.1412 37.9262 25.3205 38 25.5006 38C25.6559 38 25.8118 37.945 25.9368 37.8334C26.2066 37.5924 26.2299 37.1782 25.9889 36.9084L24.3638 35.0894H25.5003C31.5904 35.0894 36.545 30.1347 36.545 24.0447Z"
                            fill="#BB3A7D" />
                    </svg>

                    <img class="w-full " src="{{asset('imgs/products/coat1.png')}}" alt="">
                </div>
                <div class="bg-primary w-full badges transform hidden -translate-x-1/2 mt-2 left-0 py-1 ">
                    <h1 class="text-sm text-white text-right pr-3  w-full">15.00 Clup Points</h1>
                </div>
                <div class="paddings">
                    <h1 class="text-3xl  mt-4  text-center text-blacks">Overcoat</h1>
                    <h1 class="text-xl   mt-2 font-bold discount text-center text-primary">255,000,000 LBP</h1>
                    <h1 class="text-2xl  mt-2  font-bold  text-center text-blacks">2000,000 LBP</h1>
                    <div
                        class="mt-1 flex  justify-between items-center w-11/12 relative left-1/2 transform -translate-x-1/2">
                        <img class="provider_image rounded w-11 h-11" src="{{asset('imgs/providers/pro1.png')}}" alt="">
                        <h1 class="text-md text-blacks">Provider Name</h1>
                    </div>
                    <h1
                        class="text-sm mt-1  cursor-pointer text-primary flex justify-between items-center w-6/12 relative left-1/2 transform -translate-x-1/2 ">
                        View Details
                        <svg width="8" height="17" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.295396 18.214C-0.0648183 17.8827 -0.0971055 17.3627 0.206855 17L0.298097 16.9052L9.1674 8.83796C9.56441 8.47654 10.2058 8.47777 10.6002 8.84043C10.796 9.02052 10.8959 9.25736 10.8959 9.49296C10.8959 9.69135 10.8265 9.88889 10.6885 10.0534L10.5974 10.148L1.72815 18.2152C1.33114 18.5766 0.689707 18.5754 0.295396 18.214ZM0.298232 2.08169C-0.100131 1.72027 -0.09743 1.13434 0.295531 0.772921C0.656983 0.440486 1.22608 0.411746 1.62422 0.686702L1.72828 0.76922L7.61865 6.12642C7.81715 6.30652 7.91708 6.54459 7.91708 6.78143C7.91708 7.01703 7.81715 7.25387 7.62135 7.43396C7.25989 7.7664 6.69079 7.79514 6.29265 7.52018L6.18859 7.43766L0.298232 2.08169Z"
                                fill="#BB3A7D" />
                        </svg>
                    </h1>
                </div>
                <h1 class="bg-primary text-sm w-full py-2 mt-2 text-center text-white hidden addCart">Add to Cart</h1>
            </div>
            <div class="flex flex-col justify-between items-stretch pro-item overflow-hidden">
                <div class="paddings relative">
                    <svg class="absolute addCart hidden cursor-pointer right-4" width="35" height="35"
                        viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25.5" cy="25.5" r="24.5" fill="#fff" stroke="#BB3A7D" stroke-width="2" />
                        <path
                            d="M30.9706 13.5778C28.8269 13.5778 26.8217 14.5586 25.5 16.199C24.1783 14.5586 22.1731 13.5778 20.0294 13.5778C16.1534 13.5778 13 16.7312 13 20.6071C13 23.6517 14.819 27.1771 18.4065 31.0855C21.1714 34.0978 24.1794 36.4302 25.0355 37.0733L25.4999 37.4222L25.9643 37.0734C26.8204 36.4303 29.8284 34.0979 32.5935 31.0856C36.181 27.1773 38 23.6518 38 20.6071C38 16.7312 34.8466 13.5778 30.9706 13.5778ZM31.4542 30.0399C29.153 32.5468 26.6758 34.5686 25.4998 35.4818C24.3239 34.5686 21.8467 32.5466 19.5457 30.0398C16.2751 26.4767 14.5464 23.2149 14.5464 20.6071C14.5464 17.5838 17.0061 15.1242 20.0294 15.1242C22.019 15.1242 23.856 16.2085 24.8238 17.9541L25.5 19.1739L26.1762 17.9541C27.1439 16.2085 28.981 15.1242 30.9706 15.1242C33.9939 15.1242 36.4536 17.5838 36.4536 20.6072C36.4536 23.215 34.7248 26.4768 31.4542 30.0399Z"
                            fill="#BB3A7D" />
                    </svg>
                    <svg class="absolute addCart hidden cursor-pointer top-14 right-4" width="35" height="35"
                        viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25.5" cy="25.5" r="24.5" stroke="#BB3A7D" stroke-width="2" />
                        <path
                            d="M36.545 24.0447C36.545 17.9546 31.5904 13 25.5004 13C19.4103 13 14.4556 17.9546 14.4556 24.0447C14.4556 24.4065 14.7489 24.6998 15.1107 24.6998C15.4725 24.6998 15.7658 24.4064 15.7658 24.0447C15.7658 18.6771 20.1327 14.3102 25.5003 14.3102C30.8679 14.3102 35.2348 18.6771 35.2348 24.0447C35.2348 29.4123 30.8679 33.7792 25.5003 33.7792H24.3638L25.9889 31.9601C26.2299 31.6903 26.2066 31.2762 25.9368 31.0351C25.667 30.794 25.2528 30.8175 25.0118 31.0873L22.6887 33.6876C22.3085 34.1133 22.3085 34.7553 22.6887 35.181L25.0118 37.7813C25.1412 37.9262 25.3205 38 25.5006 38C25.6559 38 25.8118 37.945 25.9368 37.8334C26.2066 37.5924 26.2299 37.1782 25.9889 36.9084L24.3638 35.0894H25.5003C31.5904 35.0894 36.545 30.1347 36.545 24.0447Z"
                            fill="#BB3A7D" />
                    </svg>

                    <img class="w-full " src="{{asset('imgs/products/coat1.png')}}" alt="">
                </div>
                <div class="bg-primary w-full badges transform hidden -translate-x-1/2 mt-2 left-0 py-1 ">
                    <h1 class="text-sm text-white text-right pr-3  w-full">15.00 Clup Points</h1>
                </div>
                <div class="paddings">
                    <h1 class="text-3xl  mt-4  text-center text-blacks">Overcoat</h1>
                    <h1 class="text-xl   mt-2 font-bold discount text-center text-primary">255,000,000 LBP</h1>
                    <h1 class="text-2xl  mt-2  font-bold  text-center text-blacks">2000,000 LBP</h1>
                    <div
                        class="mt-1 flex  justify-between items-center w-11/12 relative left-1/2 transform -translate-x-1/2">
                        <img class="provider_image rounded w-11 h-11" src="{{asset('imgs/providers/pro1.png')}}" alt="">
                        <h1 class="text-md text-blacks">Provider Name</h1>
                    </div>
                    <h1
                        class="text-sm mt-1  cursor-pointer text-primary flex justify-between items-center w-6/12 relative left-1/2 transform -translate-x-1/2 ">
                        View Details
                        <svg width="8" height="17" viewBox="0 0 11 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.295396 18.214C-0.0648183 17.8827 -0.0971055 17.3627 0.206855 17L0.298097 16.9052L9.1674 8.83796C9.56441 8.47654 10.2058 8.47777 10.6002 8.84043C10.796 9.02052 10.8959 9.25736 10.8959 9.49296C10.8959 9.69135 10.8265 9.88889 10.6885 10.0534L10.5974 10.148L1.72815 18.2152C1.33114 18.5766 0.689707 18.5754 0.295396 18.214ZM0.298232 2.08169C-0.100131 1.72027 -0.09743 1.13434 0.295531 0.772921C0.656983 0.440486 1.22608 0.411746 1.62422 0.686702L1.72828 0.76922L7.61865 6.12642C7.81715 6.30652 7.91708 6.54459 7.91708 6.78143C7.91708 7.01703 7.81715 7.25387 7.62135 7.43396C7.25989 7.7664 6.69079 7.79514 6.29265 7.52018L6.18859 7.43766L0.298232 2.08169Z"
                                fill="#BB3A7D" />
                        </svg>
                    </h1>
                </div>
                <h1 class="bg-primary text-sm w-full py-2 mt-2 text-center text-white hidden addCart">Add to Cart</h1>
            </div>
        </div>
    </div>
    <button class="relative left-1/2 transform -translate-x-1/2 text-white bg-blues rounded-3xl w-48 h-11  mt-12">
        Discover More
    </button>
</div>
<div class="relative w-full grid grid-cols-12 gap-4 px-12 mt-12">
    <div class="col-span-6 px-12 h-96 bg-red-500 flex flex-col justify-end items-start"
        style="background:url({{asset('imgs/badges/left1.png')}});background-size:cover">
        <h1 class="text-5xl font-bold text-white">
            Sale of 50 %
        </h1>
        <h1 class="text-2xl mt-8 text-white">
            <span class="text-3xl">236</span>DAYS : <span class="text-3xl">15</span>HRs : <span
                class="text-3xl">06</span>MINS : <span class="text-3xl">22</span>SECS
        </h1>
        <button class="border-2 text-2xl border-white mb-16 text-white h-14 w-48 mt-8 rounded-full">
            Order Now
        </button>
    </div>
    <div class="col-span-6 px-12 h-96 bg-red-500 flex flex-col justify-end items-start"
        style="background:url({{asset('imgs/badges/right1.png')}});background-size:cover">
        <h1 class="text-5xl font-bold text-white">
            Sale of 50 %
        </h1>
        <h1 class="text-2xl mt-8 text-white">
            <span class="text-3xl">236</span>DAYS : <span class="text-3xl">15</span>HRs : <span
                class="text-3xl">06</span>MINS : <span class="text-3xl">22</span>SECS
        </h1>
        <button class="border-2 text-2xl border-white mb-16 text-white h-14 w-48 mt-8  rounded-full">
            Order Now
        </button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="flex justify-around items-center mt-8 w-10/12 relative left-1/2 transform -translate-x-1/2">
    <!--actual component start-->
    <div x-data="setup()" class="w-full">
        <ul class="flex justify-center items-center my-4 ">
            <template x-for="(tab, index) in tabs" :key="index">
                <li class="cursor-pointer py-2 px-4 text-2xl "
                    :class="activeTab===index ? 'border-b-2 font-bold text-blues border-blues' : 'text-blacks'"
                    @click="activeTab = index" x-text="tab"></li>
            </template>
        </ul>
        <div class="bg-white py-16 px-8 text-center mx-auto ">
            <div x-show="activeTab===0" class="relative">
                <div class="owl-carousel carousel2">
                    <div class="flex flex-col justify-between items-center">
                        <img src="{{asset('imgs/shops/shop.png')}}" alt="" class="rounded w-full">
                        <h1 class="text-3xl text-center mt-4  text-blacks" style="font-weight: 700">
                            Shop Name
                        </h1>
                        <p class="text-center text-sm mt-4 text-black" style="font-weight: 400">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Condimentum interdum in
                            et.
                        </p>
                        <h1 class="text-primary mt-4 font-bold text-xl">
                            <a href="" class="flex justify-between items-center">
                                Visit the Shop
                                <svg class="ml-2" width="32" height="15" viewBox="0 0 42 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M30.8753 18.2106C30.5151 17.8793 30.4828 17.3593 30.7868 16.9966L30.878 16.9018L39.7473 8.83454C40.1443 8.47312 40.7858 8.47435 41.1801 8.83701C41.3759 9.0171 41.4758 9.25394 41.4758 9.48954C41.4758 9.68794 41.4064 9.88547 41.2684 10.05L41.1774 10.1445L32.3081 18.2118C31.9111 18.5732 31.2696 18.572 30.8753 18.2106ZM30.8782 2.07827C30.4798 1.71685 30.4825 1.13093 30.8755 0.769503C31.2369 0.437068 31.806 0.408328 32.2041 0.683284L32.3082 0.765802L38.1986 6.12301C38.3971 6.3031 38.497 6.54117 38.497 6.77801C38.497 7.01361 38.3971 7.25045 38.2013 7.43054C37.8398 7.76298 37.2707 7.79172 36.8726 7.51676L36.7685 7.43424L30.8782 2.07827Z"
                                            fill="#BB3A7D" />
                                        <path d="M33 9.50024L2 9.50024" stroke="#BB3A7D" stroke-width="2"
                                            stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect x="0.5" y="0.000244141" width="41" height="19" rx="9.5"
                                                fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </h1>
                    </div>
                    <div class="flex flex-col justify-between items-center">
                        <img src="{{asset('imgs/shops/shop.png')}}" alt="" class="rounded w-full">
                        <h1 class="text-3xl text-center mt-4  text-blacks" style="font-weight: 700">
                            Shop Name
                        </h1>
                        <p class="text-center text-sm mt-4 text-black" style="font-weight: 400">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Condimentum interdum in
                            et.
                        </p>
                        <h1 class="text-primary mt-4 font-bold text-xl">
                            <a href="" class="flex justify-between items-center">
                                Visit the Shop
                                <svg class="ml-2" width="32" height="15" viewBox="0 0 42 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M30.8753 18.2106C30.5151 17.8793 30.4828 17.3593 30.7868 16.9966L30.878 16.9018L39.7473 8.83454C40.1443 8.47312 40.7858 8.47435 41.1801 8.83701C41.3759 9.0171 41.4758 9.25394 41.4758 9.48954C41.4758 9.68794 41.4064 9.88547 41.2684 10.05L41.1774 10.1445L32.3081 18.2118C31.9111 18.5732 31.2696 18.572 30.8753 18.2106ZM30.8782 2.07827C30.4798 1.71685 30.4825 1.13093 30.8755 0.769503C31.2369 0.437068 31.806 0.408328 32.2041 0.683284L32.3082 0.765802L38.1986 6.12301C38.3971 6.3031 38.497 6.54117 38.497 6.77801C38.497 7.01361 38.3971 7.25045 38.2013 7.43054C37.8398 7.76298 37.2707 7.79172 36.8726 7.51676L36.7685 7.43424L30.8782 2.07827Z"
                                            fill="#BB3A7D" />
                                        <path d="M33 9.50024L2 9.50024" stroke="#BB3A7D" stroke-width="2"
                                            stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect x="0.5" y="0.000244141" width="41" height="19" rx="9.5"
                                                fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </h1>
                    </div>
                    <div class="flex flex-col justify-between items-center">
                        <img src="{{asset('imgs/shops/shop.png')}}" alt="" class="rounded w-full">
                        <h1 class="text-3xl text-center mt-4  text-blacks" style="font-weight: 700">
                            Shop Name
                        </h1>
                        <p class="text-center text-sm mt-4 text-black" style="font-weight: 400">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Condimentum interdum in
                            et.
                        </p>
                        <h1 class="text-primary mt-4 font-bold text-xl">
                            <a href="" class="flex justify-between items-center">
                                Visit the Shop
                                <svg class="ml-2" width="32" height="15" viewBox="0 0 42 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M30.8753 18.2106C30.5151 17.8793 30.4828 17.3593 30.7868 16.9966L30.878 16.9018L39.7473 8.83454C40.1443 8.47312 40.7858 8.47435 41.1801 8.83701C41.3759 9.0171 41.4758 9.25394 41.4758 9.48954C41.4758 9.68794 41.4064 9.88547 41.2684 10.05L41.1774 10.1445L32.3081 18.2118C31.9111 18.5732 31.2696 18.572 30.8753 18.2106ZM30.8782 2.07827C30.4798 1.71685 30.4825 1.13093 30.8755 0.769503C31.2369 0.437068 31.806 0.408328 32.2041 0.683284L32.3082 0.765802L38.1986 6.12301C38.3971 6.3031 38.497 6.54117 38.497 6.77801C38.497 7.01361 38.3971 7.25045 38.2013 7.43054C37.8398 7.76298 37.2707 7.79172 36.8726 7.51676L36.7685 7.43424L30.8782 2.07827Z"
                                            fill="#BB3A7D" />
                                        <path d="M33 9.50024L2 9.50024" stroke="#BB3A7D" stroke-width="2"
                                            stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect x="0.5" y="0.000244141" width="41" height="19" rx="9.5"
                                                fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </h1>
                    </div>
                </div>
                <div class="w-full flex justify-between items-center">
                    <button class="relative left-1/2 transform -translate-x-1/2 text-white bg-blues rounded-3xl w-48 h-11  mt-12">
                        View All
                    </button>
                </div>
            </div>
            <div x-show="activeTab===1" >
                <div class="owl-carousel carousel2">
                    <div class="flex flex-col justify-between items-center">
                        <img src="{{asset('imgs/shops/shop.png')}}" alt="" class="rounded w-full">
                        <h1 class="text-3xl text-center mt-4  text-blacks" style="font-weight: 700">
                            Shop Name
                        </h1>
                        <p class="text-center text-sm mt-4 text-black" style="font-weight: 400">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Condimentum interdum in
                            et.
                        </p>
                        <h1 class="text-primary mt-4 font-bold text-xl">
                            <a href="" class="flex justify-between items-center">
                                Visit the Shop
                                <svg class="ml-2" width="32" height="15" viewBox="0 0 42 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M30.8753 18.2106C30.5151 17.8793 30.4828 17.3593 30.7868 16.9966L30.878 16.9018L39.7473 8.83454C40.1443 8.47312 40.7858 8.47435 41.1801 8.83701C41.3759 9.0171 41.4758 9.25394 41.4758 9.48954C41.4758 9.68794 41.4064 9.88547 41.2684 10.05L41.1774 10.1445L32.3081 18.2118C31.9111 18.5732 31.2696 18.572 30.8753 18.2106ZM30.8782 2.07827C30.4798 1.71685 30.4825 1.13093 30.8755 0.769503C31.2369 0.437068 31.806 0.408328 32.2041 0.683284L32.3082 0.765802L38.1986 6.12301C38.3971 6.3031 38.497 6.54117 38.497 6.77801C38.497 7.01361 38.3971 7.25045 38.2013 7.43054C37.8398 7.76298 37.2707 7.79172 36.8726 7.51676L36.7685 7.43424L30.8782 2.07827Z"
                                            fill="#BB3A7D" />
                                        <path d="M33 9.50024L2 9.50024" stroke="#BB3A7D" stroke-width="2"
                                            stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect x="0.5" y="0.000244141" width="41" height="19" rx="9.5"
                                                fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </h1>
                    </div>
                    <div class="flex flex-col justify-between items-center">
                        <img src="{{asset('imgs/shops/shop.png')}}" alt="" class="rounded w-full">
                        <h1 class="text-3xl text-center mt-4  text-blacks" style="font-weight: 700">
                            Shop Name
                        </h1>
                        <p class="text-center text-sm mt-4 text-black" style="font-weight: 400">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Condimentum interdum in
                            et.
                        </p>
                        <h1 class="text-primary mt-4 font-bold text-xl">
                            <a href="" class="flex justify-between items-center">
                                Visit the Shop
                                <svg class="ml-2" width="32" height="15" viewBox="0 0 42 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M30.8753 18.2106C30.5151 17.8793 30.4828 17.3593 30.7868 16.9966L30.878 16.9018L39.7473 8.83454C40.1443 8.47312 40.7858 8.47435 41.1801 8.83701C41.3759 9.0171 41.4758 9.25394 41.4758 9.48954C41.4758 9.68794 41.4064 9.88547 41.2684 10.05L41.1774 10.1445L32.3081 18.2118C31.9111 18.5732 31.2696 18.572 30.8753 18.2106ZM30.8782 2.07827C30.4798 1.71685 30.4825 1.13093 30.8755 0.769503C31.2369 0.437068 31.806 0.408328 32.2041 0.683284L32.3082 0.765802L38.1986 6.12301C38.3971 6.3031 38.497 6.54117 38.497 6.77801C38.497 7.01361 38.3971 7.25045 38.2013 7.43054C37.8398 7.76298 37.2707 7.79172 36.8726 7.51676L36.7685 7.43424L30.8782 2.07827Z"
                                            fill="#BB3A7D" />
                                        <path d="M33 9.50024L2 9.50024" stroke="#BB3A7D" stroke-width="2"
                                            stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect x="0.5" y="0.000244141" width="41" height="19" rx="9.5"
                                                fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </h1>
                    </div>
                    <div class="flex flex-col justify-between items-center">
                        <img src="{{asset('imgs/shops/shop.png')}}" alt="" class="rounded w-full">
                        <h1 class="text-3xl text-center mt-4  text-blacks" style="font-weight: 700">
                            Shop Name
                        </h1>
                        <p class="text-center text-sm mt-4 text-black" style="font-weight: 400">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Condimentum interdum in
                            et.
                        </p>
                        <h1 class="text-primary mt-4 font-bold text-xl">
                            <a href="" class="flex justify-between items-center">
                                Visit the Shop
                                <svg class="ml-2" width="32" height="15" viewBox="0 0 42 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M30.8753 18.2106C30.5151 17.8793 30.4828 17.3593 30.7868 16.9966L30.878 16.9018L39.7473 8.83454C40.1443 8.47312 40.7858 8.47435 41.1801 8.83701C41.3759 9.0171 41.4758 9.25394 41.4758 9.48954C41.4758 9.68794 41.4064 9.88547 41.2684 10.05L41.1774 10.1445L32.3081 18.2118C31.9111 18.5732 31.2696 18.572 30.8753 18.2106ZM30.8782 2.07827C30.4798 1.71685 30.4825 1.13093 30.8755 0.769503C31.2369 0.437068 31.806 0.408328 32.2041 0.683284L32.3082 0.765802L38.1986 6.12301C38.3971 6.3031 38.497 6.54117 38.497 6.77801C38.497 7.01361 38.3971 7.25045 38.2013 7.43054C37.8398 7.76298 37.2707 7.79172 36.8726 7.51676L36.7685 7.43424L30.8782 2.07827Z"
                                            fill="#BB3A7D" />
                                        <path d="M33 9.50024L2 9.50024" stroke="#BB3A7D" stroke-width="2"
                                            stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect x="0.5" y="0.000244141" width="41" height="19" rx="9.5"
                                                fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </h1>
                    </div>
                </div>
                <div class="w-full flex justify-between items-center">
                    <button class="relative left-1/2 transform -translate-x-1/2 text-white bg-blues rounded-3xl w-48 h-11  mt-12">
                        View All
                    </button>
                </div>
            </div>
            <div x-show="activeTab===2">
                <div class="owl-carousel carousel2">
                    <div class="flex flex-col justify-between items-center">
                        <img src="{{asset('imgs/shops/shop.png')}}" alt="" class="rounded w-full">
                        <h1 class="text-3xl text-center mt-4  text-blacks" style="font-weight: 700">
                            Shop Name
                        </h1>
                        <p class="text-center text-sm mt-4 text-black" style="font-weight: 400">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Condimentum interdum in
                            et.
                        </p>
                        <h1 class="text-primary mt-4 font-bold text-xl">
                            <a href="" class="flex justify-between items-center">
                                Visit the Shop
                                <svg class="ml-2" width="32" height="15" viewBox="0 0 42 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M30.8753 18.2106C30.5151 17.8793 30.4828 17.3593 30.7868 16.9966L30.878 16.9018L39.7473 8.83454C40.1443 8.47312 40.7858 8.47435 41.1801 8.83701C41.3759 9.0171 41.4758 9.25394 41.4758 9.48954C41.4758 9.68794 41.4064 9.88547 41.2684 10.05L41.1774 10.1445L32.3081 18.2118C31.9111 18.5732 31.2696 18.572 30.8753 18.2106ZM30.8782 2.07827C30.4798 1.71685 30.4825 1.13093 30.8755 0.769503C31.2369 0.437068 31.806 0.408328 32.2041 0.683284L32.3082 0.765802L38.1986 6.12301C38.3971 6.3031 38.497 6.54117 38.497 6.77801C38.497 7.01361 38.3971 7.25045 38.2013 7.43054C37.8398 7.76298 37.2707 7.79172 36.8726 7.51676L36.7685 7.43424L30.8782 2.07827Z"
                                            fill="#BB3A7D" />
                                        <path d="M33 9.50024L2 9.50024" stroke="#BB3A7D" stroke-width="2"
                                            stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect x="0.5" y="0.000244141" width="41" height="19" rx="9.5"
                                                fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </h1>
                    </div>
                    <div class="flex flex-col justify-between items-center">
                        <img src="{{asset('imgs/shops/shop.png')}}" alt="" class="rounded w-full">
                        <h1 class="text-3xl text-center mt-4  text-blacks" style="font-weight: 700">
                            Shop Name
                        </h1>
                        <p class="text-center text-sm mt-4 text-black" style="font-weight: 400">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Condimentum interdum in
                            et.
                        </p>
                        <h1 class="text-primary mt-4 font-bold text-xl">
                            <a href="" class="flex justify-between items-center">
                                Visit the Shop
                                <svg class="ml-2" width="32" height="15" viewBox="0 0 42 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M30.8753 18.2106C30.5151 17.8793 30.4828 17.3593 30.7868 16.9966L30.878 16.9018L39.7473 8.83454C40.1443 8.47312 40.7858 8.47435 41.1801 8.83701C41.3759 9.0171 41.4758 9.25394 41.4758 9.48954C41.4758 9.68794 41.4064 9.88547 41.2684 10.05L41.1774 10.1445L32.3081 18.2118C31.9111 18.5732 31.2696 18.572 30.8753 18.2106ZM30.8782 2.07827C30.4798 1.71685 30.4825 1.13093 30.8755 0.769503C31.2369 0.437068 31.806 0.408328 32.2041 0.683284L32.3082 0.765802L38.1986 6.12301C38.3971 6.3031 38.497 6.54117 38.497 6.77801C38.497 7.01361 38.3971 7.25045 38.2013 7.43054C37.8398 7.76298 37.2707 7.79172 36.8726 7.51676L36.7685 7.43424L30.8782 2.07827Z"
                                            fill="#BB3A7D" />
                                        <path d="M33 9.50024L2 9.50024" stroke="#BB3A7D" stroke-width="2"
                                            stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect x="0.5" y="0.000244141" width="41" height="19" rx="9.5"
                                                fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </h1>
                    </div>
                    <div class="flex flex-col justify-between items-center">
                        <img src="{{asset('imgs/shops/shop.png')}}" alt="" class="rounded w-full">
                        <h1 class="text-3xl text-center mt-4  text-blacks" style="font-weight: 700">
                            Shop Name
                        </h1>
                        <p class="text-center text-sm mt-4 text-black" style="font-weight: 400">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Condimentum interdum in
                            et.
                        </p>
                        <h1 class="text-primary mt-4 font-bold text-xl">
                            <a href="" class="flex justify-between items-center">
                                Visit the Shop
                                <svg class="ml-2" width="32" height="15" viewBox="0 0 42 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M30.8753 18.2106C30.5151 17.8793 30.4828 17.3593 30.7868 16.9966L30.878 16.9018L39.7473 8.83454C40.1443 8.47312 40.7858 8.47435 41.1801 8.83701C41.3759 9.0171 41.4758 9.25394 41.4758 9.48954C41.4758 9.68794 41.4064 9.88547 41.2684 10.05L41.1774 10.1445L32.3081 18.2118C31.9111 18.5732 31.2696 18.572 30.8753 18.2106ZM30.8782 2.07827C30.4798 1.71685 30.4825 1.13093 30.8755 0.769503C31.2369 0.437068 31.806 0.408328 32.2041 0.683284L32.3082 0.765802L38.1986 6.12301C38.3971 6.3031 38.497 6.54117 38.497 6.77801C38.497 7.01361 38.3971 7.25045 38.2013 7.43054C37.8398 7.76298 37.2707 7.79172 36.8726 7.51676L36.7685 7.43424L30.8782 2.07827Z"
                                            fill="#BB3A7D" />
                                        <path d="M33 9.50024L2 9.50024" stroke="#BB3A7D" stroke-width="2"
                                            stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect x="0.5" y="0.000244141" width="41" height="19" rx="9.5"
                                                fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </h1>
                    </div>
                </div>
                <div class="w-full flex justify-between items-center">
                    <button class="relative left-1/2 transform -translate-x-1/2 text-white bg-blues rounded-3xl w-48 h-11  mt-12">
                        View All
                    </button>
                </div>
            </div>
            <div x-show="activeTab===3">
                <div class="owl-carousel carousel2">
                    <div class="flex flex-col justify-between items-center">
                        <img src="{{asset('imgs/shops/shop.png')}}" alt="" class="rounded w-full">
                        <h1 class="text-3xl text-center mt-4  text-blacks" style="font-weight: 700">
                            Shop Name
                        </h1>
                        <p class="text-center text-sm mt-4 text-black" style="font-weight: 400">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Condimentum interdum in
                            et.
                        </p>
                        <h1 class="text-primary mt-4 font-bold text-xl">
                            <a href="" class="flex justify-between items-center">
                                Visit the Shop
                                <svg class="ml-2" width="32" height="15" viewBox="0 0 42 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M30.8753 18.2106C30.5151 17.8793 30.4828 17.3593 30.7868 16.9966L30.878 16.9018L39.7473 8.83454C40.1443 8.47312 40.7858 8.47435 41.1801 8.83701C41.3759 9.0171 41.4758 9.25394 41.4758 9.48954C41.4758 9.68794 41.4064 9.88547 41.2684 10.05L41.1774 10.1445L32.3081 18.2118C31.9111 18.5732 31.2696 18.572 30.8753 18.2106ZM30.8782 2.07827C30.4798 1.71685 30.4825 1.13093 30.8755 0.769503C31.2369 0.437068 31.806 0.408328 32.2041 0.683284L32.3082 0.765802L38.1986 6.12301C38.3971 6.3031 38.497 6.54117 38.497 6.77801C38.497 7.01361 38.3971 7.25045 38.2013 7.43054C37.8398 7.76298 37.2707 7.79172 36.8726 7.51676L36.7685 7.43424L30.8782 2.07827Z"
                                            fill="#BB3A7D" />
                                        <path d="M33 9.50024L2 9.50024" stroke="#BB3A7D" stroke-width="2"
                                            stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect x="0.5" y="0.000244141" width="41" height="19" rx="9.5"
                                                fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </h1>
                    </div>
                    <div class="flex flex-col justify-between items-center">
                        <img src="{{asset('imgs/shops/shop.png')}}" alt="" class="rounded w-full">
                        <h1 class="text-3xl text-center mt-4  text-blacks" style="font-weight: 700">
                            Shop Name
                        </h1>
                        <p class="text-center text-sm mt-4 text-black" style="font-weight: 400">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Condimentum interdum in
                            et.
                        </p>
                        <h1 class="text-primary mt-4 font-bold text-xl">
                            <a href="" class="flex justify-between items-center">
                                Visit the Shop
                                <svg class="ml-2" width="32" height="15" viewBox="0 0 42 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M30.8753 18.2106C30.5151 17.8793 30.4828 17.3593 30.7868 16.9966L30.878 16.9018L39.7473 8.83454C40.1443 8.47312 40.7858 8.47435 41.1801 8.83701C41.3759 9.0171 41.4758 9.25394 41.4758 9.48954C41.4758 9.68794 41.4064 9.88547 41.2684 10.05L41.1774 10.1445L32.3081 18.2118C31.9111 18.5732 31.2696 18.572 30.8753 18.2106ZM30.8782 2.07827C30.4798 1.71685 30.4825 1.13093 30.8755 0.769503C31.2369 0.437068 31.806 0.408328 32.2041 0.683284L32.3082 0.765802L38.1986 6.12301C38.3971 6.3031 38.497 6.54117 38.497 6.77801C38.497 7.01361 38.3971 7.25045 38.2013 7.43054C37.8398 7.76298 37.2707 7.79172 36.8726 7.51676L36.7685 7.43424L30.8782 2.07827Z"
                                            fill="#BB3A7D" />
                                        <path d="M33 9.50024L2 9.50024" stroke="#BB3A7D" stroke-width="2"
                                            stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect x="0.5" y="0.000244141" width="41" height="19" rx="9.5"
                                                fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </h1>
                    </div>
                    <div class="flex flex-col justify-between items-center">
                        <img src="{{asset('imgs/shops/shop.png')}}" alt="" class="rounded w-full">
                        <h1 class="text-3xl text-center mt-4  text-blacks" style="font-weight: 700">
                            Shop Name
                        </h1>
                        <p class="text-center text-sm mt-4 text-black" style="font-weight: 400">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Condimentum interdum in
                            et.
                        </p>
                        <h1 class="text-primary mt-4 font-bold text-xl">
                            <a href="" class="flex justify-between items-center">
                                Visit the Shop
                                <svg class="ml-2" width="32" height="15" viewBox="0 0 42 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M30.8753 18.2106C30.5151 17.8793 30.4828 17.3593 30.7868 16.9966L30.878 16.9018L39.7473 8.83454C40.1443 8.47312 40.7858 8.47435 41.1801 8.83701C41.3759 9.0171 41.4758 9.25394 41.4758 9.48954C41.4758 9.68794 41.4064 9.88547 41.2684 10.05L41.1774 10.1445L32.3081 18.2118C31.9111 18.5732 31.2696 18.572 30.8753 18.2106ZM30.8782 2.07827C30.4798 1.71685 30.4825 1.13093 30.8755 0.769503C31.2369 0.437068 31.806 0.408328 32.2041 0.683284L32.3082 0.765802L38.1986 6.12301C38.3971 6.3031 38.497 6.54117 38.497 6.77801C38.497 7.01361 38.3971 7.25045 38.2013 7.43054C37.8398 7.76298 37.2707 7.79172 36.8726 7.51676L36.7685 7.43424L30.8782 2.07827Z"
                                            fill="#BB3A7D" />
                                        <path d="M33 9.50024L2 9.50024" stroke="#BB3A7D" stroke-width="2"
                                            stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect x="0.5" y="0.000244141" width="41" height="19" rx="9.5"
                                                fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </h1>
                    </div>
                </div>
                <div class="w-full flex justify-between items-center">
                    <button class="relative left-1/2 transform -translate-x-1/2 text-white bg-blues rounded-3xl w-48 h-11  mt-12">
                        View All
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--actual component end-->
</div>

<script>
    function setup() {
        return {
            activeTab: 1,
            tabs: [
                "To Categories",
                "Our Partners",
                "Top Brands",
                "Providers",
            ]
        };
    };

</script>

<script>
    $('.carousel2').owlCarousel({
        loop: false,
        nav: true,
        margin: 20,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: true
            },
            1000: {
                items: 3,
                nav: true,
            },
            1300: {
                items: 3,
                nav: true,
            }
        }
    })
    $('.carousel1').owlCarousel({
        loop: true,
        nav: true,
        margin: 5,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: true
            },
            1000: {
                items: 4,
                nav: true,
            },
            1300: {
                items: 4,
                nav: true,
            }
        }
    })

</script>
@endsection

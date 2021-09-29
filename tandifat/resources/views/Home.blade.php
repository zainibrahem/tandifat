@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<div style="background:url({{asset('imgs/Decoration.png')}});background-size:cover">
    
<div class="wrapper md:mt-8 relative z-10">
    
    
    
    <div class="carousel relative shadow-2xl bg-white" style="min-height:450px">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                checked="checked">
            <div class="carousel-item absolute opacity-0 ">
                <div class="relative">
                    <img class="w-full" src="{{asset('imgs/slider/slide1.png')}}" alt="">
                    @if(App::getLocale() == 'ar')
                    <div
                        class="h-full absolute top-0  w-full text-white text-sm md:text-5xl text-left flex flex-col justify-center items-start pr-48  md:pr-48">
                    @else
                    <div
                        class="h-full absolute top-0  w-full text-white text-sm md:text-5xl text-left flex flex-col justify-center items-start pl-48  md:pl-48">
                    @endif
                    
                        <div class="absolute bg-black top-0 left-0 opacity-50 h-full w-full z-10"></div>
                        <span data-aos="fade-up"  data-aos-duration="1000" class="relative rtl:text-right ltr:text-left text-xs md:text-4xl z-20  font-bold">Consequat mattis.</span>
                        <span data-aos-delay="300" data-aos="fade-up"  data-aos-duration="1000" class="text-xxs md:text-3xl relative ltr:text-left rtl:text-right z-20 w-10/12 md:w-2/3 mt-1 md:mt-4">Lorem ipsum dolor
                            sit amet, consectetur adipiscing
                            elit. Quam facilisis eget id amet nulla. Feugiat in.
                        </span>
                        <button data-aos-delay="600" data-aos="fade-up"  data-aos-duration="1000"
                            class="rounded-full relative z-20 text-white text-xxs md:text-xl w-20 md:w-36 mt-1 md:mt-4 py-1 md:py-2 bg-primary">TRY
                            IT</button>
                    </div>
                </div>
            </div>
            <label for="carousel-3"
                class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black  rounded-7 border-1 border-white leading-tight text-center z-10 inset-y-0 left-0 my-auto">
                <svg class="absolute left-1/2 top-1/2 transform -translate-y-1/2  -translate-x-1/2" width="11"
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
                        class="carousel-bullet cursor-pointer block text-4xl bg-default hover:bg-carousel rounded-full w-1 h-1 md:w-3 md:h-3"></label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2"
                        class="carousel-bullet cursor-pointer block text-4xl bg-default hover:bg-carousel rounded-full w-1 h-1 md:w-3 md:h-3"></label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3"
                        class="carousel-bullet cursor-pointer block text-4xl bg-default hover:bg-carousel rounded-full w-1 h-1 md:w-3 md:h-3"></label>
                </li>
            </ol>

            </div>
        </div>

        <div class="deals w-full py-20">
            <h1 class="text-center text-3xl md:text-5xl text-blacks">{{__('front.Top Deals')}}</h1>
        </div>

    </div>

     <div class="w-full relative"  style="min-height:600px;" dir="ltr">
        <div class="w-10/12 md:w-full md:px-12 relative left-1/2 transform -translate-x-1/2">
            <div class="products" >
                <div class="owl-carousel carousel1">
                    <div data-aos="fade-up"  data-aos-duration="1000" class="flex w-10/12 flex-col justify-between items-stretch pro-item overflow-hidden">
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

                            <img class="w-1/2 md:w-full " src="{{asset('imgs/products/coat1.png')}}" alt="">
                        </div>
                        @if(App::getLocale() !='ar')
                            <div class="bg-primary w-1/2 badges transform hidden  relative mt-2 left-0 py-1 ">
                                <h1 class="text-xs md:text-sm text-white text-right pr-3  w-full">15.00 Clup Points</h1>
                            </div>
                        @else
                        <div class="bg-primary w-1/2 badges transform hidden -translate-x-full relative mt-2  py-1 ">
                            <h1 class="text-xs md:text-sm text-white text-left pl-3  w-full">15.00 Clup Points</h1>
                        </div>
                        @endif
                        <div class="paddings">
                            <h1 class="text-xl md:text-3xl  mt-4  text-center text-blacks">Overcoat</h1>
                            <h1 class="text-sm md:text-xl   mt-2 font-bold discount text-center text-primary">255,000,000 LBP</h1>
                            <h1 class="text lg md:text-2xl  mt-2  font-bold  text-center text-blacks">2000,000 LBP</h1>
                            <div
                                class="mt-1 flex rtl:flex-row-reverse justify-between items-center w-6/12 md:w-11/12 relative left-1/2 transform -translate-x-1/2">
                                <img class="provider_image  rounded h-8 md:w-11 md:h-11" src="{{asset('imgs/providers/pro1.png')}}" alt="">
                                <h1 class="text-xs md:text-md text-blacks">Provider Name</h1>
                            </div>
                            <h1
                                class="text-sm mt-1  cursor-pointer text-primary flex rtl:flex-row-reverse justify-between items-center w-6/12 md:w-8/12 relative left-1/2 transform -translate-x-1/2 ">
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
                    <div data-aos="fade-up"  data-aos-duration="1000" class="flex w-10/12 flex-col justify-between items-stretch pro-item overflow-hidden">
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

                            <img class="w-1/2 md:w-full " src="{{asset('imgs/products/coat1.png')}}" alt="">
                        </div>
                        @if(App::getLocale() !='ar')
                        <div class="bg-primary w-1/2 badges transform hidden  relative mt-2 left-0 py-1 ">
                            <h1 class="text-xs md:text-sm text-white text-right pr-3  w-full">15.00 Clup Points</h1>
                        </div>
                        @else
                        <div class="bg-primary w-1/2 badges transform hidden -translate-x-full relative mt-2  py-1 ">
                            <h1 class="text-xs md:text-sm text-white text-left pl-3  w-full">15.00 Clup Points</h1>
                        </div>
                        @endif
                        <div class="paddings">
                            <h1 class="text-xl md:text-3xl  mt-4  text-center text-blacks">Overcoat</h1>
                            <h1 class="text-sm md:text-xl   mt-2 font-bold discount text-center text-primary">255,000,000 LBP</h1>
                            <h1 class="text lg md:text-2xl  mt-2  font-bold  text-center text-blacks">2000,000 LBP</h1>
                            <div
                            class="mt-1 flex rtl:flex-row-reverse justify-between items-center w-6/12 md:w-11/12 relative left-1/2 transform -translate-x-1/2">
                            <img class="provider_image  rounded h-8 md:w-11 md:h-11" src="{{asset('imgs/providers/pro1.png')}}" alt="">
                            <h1 class="text-xs md:text-md text-blacks">Provider Name</h1>
                        </div>
                            <h1
                                class="text-sm mt-1  cursor-pointer text-primary flex rtl:flex-row-reverse justify-between items-center w-6/12 md:w-8/12 relative left-1/2 transform -translate-x-1/2 ">
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
                    <div data-aos="fade-up"  data-aos-duration="1000" class="flex w-10/12 flex-col justify-between items-stretch pro-item overflow-hidden">
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

                            <img class="w-1/2 md:w-full " src="{{asset('imgs/products/coat1.png')}}" alt="">
                        </div>
                        @if(App::getLocale() !='ar')
                        <div class="bg-primary w-1/2 badges transform hidden  mt-2 relative left-0 py-1 ">
                            <h1 class="text-xs md:text-sm text-white text-right pr-3  w-full">15.00 Clup Points</h1>
                        </div>
                        @else
                        <div class="bg-primary w-1/2 badges transform hidden -translate-x-full relative mt-2  py-1 ">
                            <h1 class="text-xs md:text-sm text-white text-left pl-3  w-full">15.00 Clup Points</h1>
                        </div>
                        @endif
                        <div class="paddings">
                            <h1 class="text-xl md:text-3xl  mt-4  text-center text-blacks">Overcoat</h1>
                            <h1 class="text-sm md:text-xl   mt-2 font-bold discount text-center text-primary">255,000,000 LBP</h1>
                            <h1 class="text lg md:text-2xl  mt-2  font-bold  text-center text-blacks">2000,000 LBP</h1>
                            <div
                            class="mt-1 flex rtl:flex-row-reverse justify-between items-center w-6/12 md:w-11/12 relative left-1/2 transform -translate-x-1/2">
                            <img class="provider_image  rounded h-8 md:w-11 md:h-11" src="{{asset('imgs/providers/pro1.png')}}" alt="">
                            <h1 class="text-xs md:text-md text-blacks">Provider Name</h1>
                        </div>
                            <h1
                                class="text-sm mt-1  cursor-pointer text-primary flex rtl:flex-row-reverse justify-between items-center w-6/12 md:w-8/12 relative left-1/2 transform -translate-x-1/2 ">
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
                    <div data-aos="fade-up"  data-aos-duration="1000" class="flex w-10/12 flex-col justify-between items-stretch pro-item overflow-hidden">
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

                            <img class="w-1/2 md:w-full " src="{{asset('imgs/products/coat1.png')}}" alt="">
                        </div>
                        @if(App::getLocale() !='ar')
                        <div class="bg-primary w-1/2 badges transform hidden  mt-2 relative left-0 py-1 ">
                            <h1 class="text-xs md:text-sm text-white text-right pr-3  w-full">15.00 Clup Points</h1>
                        </div>
                        @else
                        <div class="bg-primary w-1/2 badges transform hidden -translate-x-full relative mt-2  py-1 ">
                            <h1 class="text-xs md:text-sm text-white text-left pl-3  w-full">15.00 Clup Points</h1>
                        </div>
                        @endif
                        <div class="paddings">
                            <h1 class="text-xl md:text-3xl  mt-4  text-center text-blacks">Overcoat</h1>
                            <h1 class="text-sm md:text-xl   mt-2 font-bold discount text-center text-primary">255,000,000 LBP</h1>
                            <h1 class="text lg md:text-2xl  mt-2  font-bold  text-center text-blacks">2000,000 LBP</h1>
                            <div
                            class="mt-1 flex rtl:flex-row-reverse justify-between items-center w-6/12 md:w-11/12 relative left-1/2 transform -translate-x-1/2">
                            <img class="provider_image  rounded h-8 md:w-11 md:h-11" src="{{asset('imgs/providers/pro1.png')}}" alt="">
                            <h1 class="text-xs md:text-md text-blacks">Provider Name</h1>
                        </div>
                            <h1
                                class="text-sm mt-1  cursor-pointer text-primary flex rtl:flex-row-reverse justify-between items-center w-6/12 md:w-8/12 relative left-1/2 transform -translate-x-1/2 ">
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
                </div>
            </div>
            <button  class="relative left-1/2 transform -translate-x-1/2 text-white bg-blues rounded-3xl w-48 h-11 mt-4 md:mt-12">
                {{__('front.Discover More')}}
            </button>
        </div>
    </div>
    <div class="relative w-full grid grid-cols-12 gap-4 px-4 md:px-12 mt-12">
        <div data-aos="fade-up"  data-aos-duration="1000" class="col-span-12 md:col-span-6 px-6 md:px-12 h-60 md:h-96 bg-red-500 flex flex-col justify-end items-start"
        style="background:url({{asset('imgs/badges/left1.png')}});background-size:cover">
        <h1 class="text-xl md:text-5xl font-bold text-white">
            {{__('front.Sale of')}} 50 %
        </h1>
    
        <h1 class="text-md md:text-2xl mt-8 text-white">
            <span class="text-md md:text-3xl">236</span>{{__('front.DAYS')}} : <span class="text-md md:text-3xl">15</span>{{__('front.HRs')}} : <span
            class="text-md md:text-3xl">06</span>{{__('front.MINS')}} : <span class="text-md md:text-3xl">22</span>{{__('front.SECS')}}
        </h1>
        <button class="border-2 text-2xl border-white mb-4 md:mb-16 text-white h-14 w-48 mt-8 rounded-full">
            {{__('front.Order Now')}}
        </button>
        </div>
        <div data-aos="fade-up"  data-aos-duration="1000" class="col-span-12 md:col-span-6 px-6 md:px-12 h-60 md:h-96 bg-red-500 flex flex-col justify-end items-start"
            style="background:url({{asset('imgs/badges/left1.png')}});background-size:cover">
            <h1 class="text-xl md:text-5xl font-bold text-white">
                {{__('front.Sale of')}} 50 %
            </h1>
            <h1 class="text-md md:text-2xl mt-8 text-white">
                <span class="text-md md:text-3xl">236</span>{{__('front.DAYS')}} : <span class="text-md md:text-3xl">15</span>{{__('front.HRs')}} : <span
                    class="text-md md:text-3xl">06</span>{{__('front.MINS')}} : <span class="text-md md:text-3xl">22</span>{{__('front.SECS')}}
            </h1>
            <button class="border-2 text-2xl border-white mb-4 md:mb-16 text-white h-14 w-48 mt-8 rounded-full">
                {{__('front.Order Now')}}
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div class="w-full relative"  dir="ltr">


        <div class="flex justify-around items-center mt-8 w-full relative left-1/2 transform -translate-x-1/2">
            <!--actual component start-->
            <div x-data="setup()" class="w-full px-6">
                <ul class="flex justify-center items-center my-4 ">
                    <template x-for="(tab, index) in tabs" :key="index">
                        <li class="cursor-pointer py-2 px-4 text-sm md:text-2xl "
                            :class="activeTab===index ? 'border-b-2 font-bold text-blues border-blues' : 'text-blacks'"
                            @click="activeTab = index" x-text="tab"></li>
                    </template>
                </ul>
                <div class=" py-16 px-8 text-center mx-auto ">
                    <div x-show="activeTab===0" class="relative left-1/2 transform -translate-x-1/2" >
                        <div class="owl-carousel carousel2">
                            <div data-aos="fade-up" class="flex w-8/12 md:w-2/3 flex-col justify-between items-center">
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
                                        {{__('front.Visit the Shop')}}
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
                            <div data-aos="fade-up" class="flex w-8/12 flex-col justify-between items-center">
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
                                        {{__('front.Visit the Shop')}}
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
                            <div data-aos="fade-up" class="flex w-8/12 flex-col justify-between items-center">
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
                                        {{__('front.Visit the Shop')}}
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
                            <button
                                class="relative left-1/2 transform -translate-x-1/2 text-white bg-blues rounded-3xl w-48 h-11  mt-12">
                                View All
                            </button>
                        </div>
                    </div>
                    <div x-show="activeTab===1" class="relative left-1/2 transform -translate-x-1/2">
                        <div class="owl-carousel carousel2">
                            <div class="flex w-8/12 md:w-2/3 flex-col justify-between items-center">
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
                                        {{__('front.Visit the Shop')}}
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
                            <div class="flex w-8/12 md:w-2/3 flex-col justify-between items-center">
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
                                        {{__('front.Visit the Shop')}}
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
                            <div class="flex w-8/12 md:w-2/3 flex-col justify-between items-center">
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
                                        {{__('front.Visit the Shop')}}
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
                            <button
                                class="relative left-1/2 transform -translate-x-1/2 text-white bg-blues rounded-3xl w-48 h-11  mt-12">
                                {{__('front.View All')}}
                            </button>
                        </div>
                    </div>
                    <div x-show="activeTab===2" class="relative left-1/2 transform -translate-x-1/2">
                        <div class="owl-carousel carousel2">
                            <div class="flex w-8/12 md:w-2/3 flex-col justify-between items-center">
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
                                        {{__('front.Visit the Shop')}}
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
                            <div class="flex w-8/12 md:w-2/3 flex-col justify-between items-center">
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
                                        {{__('front.Visit the Shop')}}
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
                            <div class="flex w-8/12 md:w-2/3 flex-col justify-between items-center">
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
                                        {{__('front.Visit the Shop')}}
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
                            <button
                                class="relative left-1/2 transform -translate-x-1/2 text-white bg-blues rounded-3xl w-48 h-11  mt-12">
                                {{__('front.View All')}}
                            </button>
                        </div>
                    </div>
                    <div x-show="activeTab===3" class="relative left-1/2 transform -translate-x-1/2">
                        <div class="owl-carousel carousel2">
                            <div class="flex w-8/12 md:w-2/3 flex-col justify-between items-center">
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
                                        {{__('front.Visit the Shop')}}
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
                            <div class="flex w-8/12 md:w-2/3 flex-col justify-between items-center">
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
                                        {{__('front.Visit the Shop')}}
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
                            <div class="flex w-8/12 md:w-2/3 flex-col justify-between items-center">
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
                                        {{__('front.Visit the Shop')}}
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
                            <button
                                class="relative left-1/2 transform -translate-x-1/2 text-white bg-blues rounded-3xl w-48 h-11  mt-12">
                                {{_('front.View All')}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!--actual component end-->
        </div>
    </div>
    <div class="w-full flex flex-col justify-around items-start relative">
        <div class="relative">
            <img class="w-full" src="{{asset('imgs/slider/slide1.png')}}" alt="">
            <div class="absolute bg-black bg-opacity-60 h-full flex flex-col justify-around items-start md:pl-12 rtl:pr-12 ltr:pl-12 py-24 md:py-24 w-full top-0 left-0">
                <h1 data-aos="fade-up"  data-aos-duration="1000" class="text-white text-sm md:text-4xl">Proin enim.</h1>
                <h1 data-aos-delay="300" data-aos="fade-up"  data-aos-duration="1000" class="text-white rtl:text-right text-xs md:text-5xl mt-4 hidden md:block" style="font-weight:700;letter-spacing:2rem">TITLE</h1>
                <h1 data-aos-delay="600" data-aos="fade-up"  data-aos-duration="1000" class="text-white rtl:text-right text-xs md:text-5xl mt-4 block md:hidden" style="font-weight:700;letter-spacing:14px">TITLE</h1>
                <p  data-aos-delay="900" data-aos="fade-up"  data-aos-duration="1000" class="text-white text-xxs md:text-xl mt-4 " style="">Lorem Ipsum is simply dummy text of the printing </p>
                <p  data-aos-delay="1200" data-aos="fade-up"  data-aos-duration="1000" class="text-white text-xxs md:text-xl mt-4 " style="">Lorem Ipsum is simply dummy text of the printing </p>
                <button data-aos-delay="1500" data-aos="fade-up"  data-aos-duration="1000" class="bg-primary w-24 h-12 md:w-96 md:h-16 mt-4 text-white text-sm md:text-3xl rounded-full">{{__('front.Order Now')}}</button>
            </div>
        </div>
        <div class="relative z-10 flex flex-col justify-around items-start">
        </div>
    </div>
    <div class="deals w-full py-20">
        <h1 class="text-center text-3xl md:text-5xl text-blacks">{{__('front.Get To Know US')}}</h1>
    </div>
    <div class="w-full relative" dir="ltr">
        <div class="w-11/12 flex justify-center items-center relative left-1/2 transform -translate-x-1/2">
            <div class="grid grid-cols-12 gap-4 w-full relative">
                <div data-aos="fade-up"  data-aos-duration="1000" class="col-span-12 md:col-span-3">
                    <div class="bg-white p-4 flex flex-col justify-between items-center"
                        style="box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.16);border-radius:40px;">
                        <svg width="151" height="164" viewBox="0 0 171 184" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M163.785 135.567L142.312 114.094L104.438 88.8438H66.5625L28.6875 114.094L7.21474 135.567C5.01655 137.765 3.27285 140.374 2.08319 143.246C0.893542 146.118 0.28124 149.197 0.28125 152.305V171.695C0.28125 174.834 1.52825 177.845 3.74792 180.065C5.96758 182.284 8.9781 183.531 12.1172 183.531H22.375L25.5312 180.375H145.469L148.625 183.531H158.883C162.022 183.531 165.032 182.284 167.252 180.065C169.472 177.845 170.719 174.834 170.719 171.695V152.305C170.719 149.197 170.106 146.118 168.917 143.246C167.727 140.374 165.983 137.765 163.785 135.567Z"
                                fill="#EF5DA8" />
                            <path d="M104.438 88.8438L85.5 107.781L66.5625 88.8438L69.7188 73.0625H101.281L104.438 88.8438Z"
                                fill="#FFD4CF" />
                            <path
                                d="M102.835 80.8288L101.281 73.0625H69.7187L68.1485 80.9137L79.1259 86.402C81.109 87.3936 83.2967 87.9071 85.5139 87.9015C87.7311 87.8959 89.9161 87.3713 91.8942 86.3696L102.835 80.8288Z"
                                fill="#FBB8B0" />
                            <path
                                d="M115.484 38.3438H110.75V25.7188H60.25V38.3438H55.5156C53.4229 38.3438 51.4159 39.1751 49.9361 40.6549C48.4563 42.1346 47.625 44.1417 47.625 46.2344V49.3906C47.625 51.4833 48.4563 53.4904 49.9361 54.9701C51.4159 56.4499 53.4229 57.2812 55.5156 57.2812H60.25V62.5912C60.25 64.7893 60.862 66.944 62.0176 68.8138C63.1731 70.6836 64.8265 72.1947 66.7925 73.1777L81.9492 80.7559C83.0509 81.3067 84.2662 81.5921 85.498 81.589C86.7297 81.5859 87.9436 81.2945 89.0425 80.7381L104.262 73.0313C106.213 72.0429 107.853 70.5327 108.998 68.6687C110.144 66.8046 110.75 64.6596 110.75 62.4717V57.2812H115.484C117.577 57.2812 119.584 56.4499 121.064 54.9701C122.544 53.4904 123.375 51.4833 123.375 49.3906V46.2344C123.375 44.1417 122.544 42.1346 121.064 40.6549C119.584 39.1751 117.577 38.3438 115.484 38.3438Z"
                                fill="#FFD4CF" />
                            <path d="M69.7188 41.5H76.0312V47.8125H69.7188V41.5Z" fill="#BB3A7D" />
                            <path d="M94.9688 41.5H101.281V47.8125H94.9688V41.5Z" fill="#BB3A7D" />
                            <path
                                d="M85.5 69.9062C80.1904 69.9062 76.0312 66.4403 76.0312 62.0156H82.3438C82.3438 62.5719 83.5419 63.5938 85.5 63.5938C87.4581 63.5938 88.6562 62.5719 88.6562 62.0156H94.9688C94.9688 66.4403 90.8096 69.9062 85.5 69.9062Z"
                                fill="#BB3A7D" />
                            <path
                                d="M76.8203 0.46875H94.1797C99.4115 0.46875 104.429 2.54708 108.128 6.24653C111.828 9.94597 113.906 14.9635 113.906 20.1953V25.7188H57.0938V20.1953C57.0938 14.9635 59.1721 9.94597 62.8715 6.24653C66.571 2.54708 71.5885 0.46875 76.8203 0.46875Z"
                                fill="#BB3A7D" />
                            <path
                                d="M101.639 36.478L94.2539 31.5546C91.6615 29.8264 88.6156 28.9042 85.5 28.9042C82.3844 28.9042 79.3385 29.8264 76.7461 31.5546L69.3613 36.478C68.173 37.2702 66.7919 37.7251 65.3654 37.794C63.9388 37.863 62.5203 37.5435 61.2611 36.8696C60.0019 36.1956 58.9492 35.1926 58.2153 33.9674C57.4814 32.7422 57.0938 31.3408 57.0938 29.9126V25.7187L70.1721 18.453C74.8608 15.8483 80.136 14.4814 85.4996 14.4814C90.8632 14.4814 96.1384 15.8483 100.827 18.453L113.906 25.7187V29.9126C113.906 31.3408 113.519 32.7422 112.785 33.9674C112.051 35.1926 110.998 36.1956 109.739 36.8696C108.48 37.5435 107.061 37.863 105.635 37.794C104.208 37.7251 102.827 37.2702 101.639 36.478Z"
                                fill="#EF5DA8" />
                            <path
                                d="M138.367 101.469H32.6328C30.4539 101.469 28.6875 103.235 28.6875 105.414V179.586C28.6875 181.765 30.4539 183.531 32.6328 183.531H138.367C140.546 183.531 142.312 181.765 142.312 179.586V105.414C142.312 103.235 140.546 101.469 138.367 101.469Z"
                                fill="#BB3A7D" />
                            <path
                                d="M35 161.438H22.375V183.531H57.0938C57.0938 177.672 54.766 172.052 50.6226 167.909C46.4793 163.765 40.8596 161.438 35 161.438Z"
                                fill="#FFD4CF" />
                            <path d="M72.875 101.469H98.125V129.875H72.875V101.469Z" fill="#FCDDEC" />
                            <path d="M72.875 164.594H98.125V183.531H72.875V164.594Z" fill="#FCDDEC" />
                            <path
                                d="M136 161.438H148.625V183.531H113.906C113.906 177.672 116.234 172.052 120.377 167.909C124.521 163.765 130.14 161.438 136 161.438Z"
                                fill="#FFD4CF" />
                            <path d="M38.1562 110.938H44.4688V117.25H38.1562V110.938Z" fill="#F178B6" />
                            <path d="M50.7812 110.938H63.4062V117.25H50.7812V110.938Z" fill="#F178B6" />
                            <path d="M38.1562 123.562H63.4062V129.875H38.1562V123.562Z" fill="#F178B6" />
                            <path
                                d="M118.641 114.094H129.688V121.984C129.688 124.077 128.856 126.084 127.376 127.564C125.897 129.044 123.89 129.875 121.797 129.875H110.75V121.984C110.75 119.892 111.581 117.885 113.061 116.405C114.541 114.925 116.548 114.094 118.641 114.094Z"
                                fill="#F178B6" />
                            <path d="M148.625 161.438H158.094V167.75H148.625V161.438Z" fill="#BB3A7D" />
                            <path d="M12.9062 161.438H22.375V167.75H12.9062V161.438Z" fill="#BB3A7D" />
                        </svg>
                        <h1 class="text-blacks font-bold text-center mt-4 flex-wrap text-4xl"
                            style="line-height: 50px;min-height:6rem;max-height:6rem;overflow-hidden">
                            Pickup &
                            Delivery
                        </h1>
                        <p class="text-center mt-4 text-sm text-blacks max-h-36 overflow-hidden"
                            style="font-weight: 600;line-height:25px;min-height:9rem">
                            Your Laundry & Dry Cleaning are
                            picked up and delivered to the
                            location of your choosing, with no
                            extra delivery cost for you!
                        </p>
                        <button class="rounded-full relative z-20 text-white text-md w-56 mt-4 py-2 bg-primary">
                            {{__('front.Order Now')}}
                        </button>
                    </div>
                </div>
                <div data-aos="fade-up"  data-aos-duration="1000" class="col-span-12 md:col-span-3">
                    <div class="bg-white p-4 flex flex-col justify-between items-center"
                        style="box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.16);border-radius:40px;">
                        <svg width="164" height="164" viewBox="0 0 202 202" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M101 176.75C142.836 176.75 176.75 142.836 176.75 101C176.75 59.1644 142.836 25.25 101 25.25C59.1644 25.25 25.25 59.1644 25.25 101C25.25 142.836 59.1644 176.75 101 176.75Z"
                                fill="#E9EEF2" />
                            <circle cx="101" cy="101" r="79" fill="#FCDDEC" />
                            <path
                                d="M101 176.75C100.163 176.75 99.3601 176.417 98.7682 175.826C98.1763 175.234 97.8438 174.431 97.8438 173.594V167.281C97.8438 166.444 98.1763 165.641 98.7682 165.049C99.3601 164.458 100.163 164.125 101 164.125C101.837 164.125 102.64 164.458 103.232 165.049C103.824 165.641 104.156 166.444 104.156 167.281V173.594C104.156 174.431 103.824 175.234 103.232 175.826C102.64 176.417 101.837 176.75 101 176.75Z"
                                fill="#F178B6" />
                            <path
                                d="M101 37.875C100.163 37.875 99.3601 37.5425 98.7682 36.9506C98.1763 36.3586 97.8438 35.5558 97.8438 34.7188V28.4062C97.8438 27.5692 98.1763 26.7664 98.7682 26.1744C99.3601 25.5825 100.163 25.25 101 25.25C101.837 25.25 102.64 25.5825 103.232 26.1744C103.824 26.7664 104.156 27.5692 104.156 28.4062V34.7188C104.156 35.5558 103.824 36.3586 103.232 36.9506C102.64 37.5425 101.837 37.875 101 37.875Z"
                                fill="#F178B6" />
                            <path
                                d="M34.7188 104.156H28.4062C27.5692 104.156 26.7664 103.824 26.1744 103.232C25.5825 102.64 25.25 101.837 25.25 101C25.25 100.163 25.5825 99.3601 26.1744 98.7682C26.7664 98.1763 27.5692 97.8438 28.4062 97.8438H34.7188C35.5558 97.8438 36.3586 98.1763 36.9506 98.7682C37.5425 99.3601 37.875 100.163 37.875 101C37.875 101.837 37.5425 102.64 36.9506 103.232C36.3586 103.824 35.5558 104.156 34.7188 104.156Z"
                                fill="#F178B6" />
                            <path
                                d="M173.594 104.156H167.281C166.444 104.156 165.641 103.824 165.049 103.232C164.458 102.64 164.125 101.837 164.125 101C164.125 100.163 164.458 99.3601 165.049 98.7682C165.641 98.1763 166.444 97.8438 167.281 97.8438H173.594C174.431 97.8438 175.234 98.1763 175.826 98.7682C176.417 99.3601 176.75 100.163 176.75 101C176.75 101.837 176.417 102.64 175.826 103.232C175.234 103.824 174.431 104.156 173.594 104.156Z"
                                fill="#F178B6" />
                            <path
                                d="M54.132 57.2881C53.7175 57.2887 53.3069 57.2073 52.9238 57.0487C52.5408 56.89 52.1929 56.6573 51.9002 56.3637L47.4365 51.9004C46.8445 51.3084 46.5119 50.5055 46.5119 49.6683C46.5119 48.8311 46.8445 48.0282 47.4365 47.4363C48.0284 46.8443 48.8313 46.5117 49.6685 46.5117C50.5057 46.5117 51.3086 46.8443 51.9006 47.4363L56.3639 51.9C56.8053 52.3414 57.106 52.9038 57.2278 53.5161C57.3495 54.1283 57.287 54.763 57.0481 55.3397C56.8092 55.9165 56.4047 56.4094 55.8856 56.7562C55.3666 57.103 54.7563 57.2881 54.132 57.2881Z"
                                fill="#F178B6" />
                            <path
                                d="M152.331 155.487C151.917 155.488 151.506 155.406 151.123 155.248C150.74 155.089 150.392 154.857 150.099 154.563L145.636 150.1C145.343 149.807 145.11 149.459 144.952 149.076C144.793 148.693 144.712 148.282 144.712 147.868C144.712 147.453 144.793 147.043 144.952 146.66C145.11 146.277 145.343 145.929 145.636 145.636C145.929 145.343 146.277 145.11 146.66 144.952C147.043 144.793 147.453 144.711 147.868 144.711C148.282 144.711 148.693 144.793 149.076 144.952C149.459 145.11 149.807 145.343 150.1 145.636L154.563 150.099C155.005 150.541 155.306 151.103 155.427 151.715C155.549 152.328 155.487 152.962 155.248 153.539C155.009 154.116 154.604 154.609 154.085 154.956C153.566 155.302 152.955 155.487 152.331 155.487Z"
                                fill="#F178B6" />
                            <path
                                d="M49.6688 155.487C49.0445 155.487 48.4342 155.302 47.9151 154.956C47.3959 154.609 46.9913 154.116 46.7524 153.539C46.5134 152.962 46.4509 152.328 46.5727 151.715C46.6944 151.103 46.9951 150.541 47.4365 150.099L51.9003 145.636C52.1933 145.343 52.5413 145.11 52.9242 144.952C53.3072 144.793 53.7176 144.711 54.1321 144.711C54.5466 144.711 54.9571 144.793 55.34 144.952C55.7229 145.11 56.0709 145.343 56.364 145.636C56.6571 145.929 56.8896 146.277 57.0482 146.66C57.2068 147.043 57.2885 147.453 57.2885 147.868C57.2885 148.282 57.2068 148.693 57.0482 149.076C56.8896 149.459 56.6571 149.807 56.364 150.1L51.9007 154.563C51.6078 154.857 51.2598 155.089 50.8768 155.248C50.4938 155.406 50.0833 155.488 49.6688 155.487Z"
                                fill="#F178B6" />
                            <path
                                d="M147.868 57.2881C147.244 57.2881 146.633 57.103 146.114 56.7562C145.595 56.4094 145.191 55.9165 144.952 55.3397C144.713 54.763 144.65 54.1283 144.772 53.5161C144.894 52.9038 145.194 52.3414 145.636 51.9L150.099 47.4363C150.392 47.1432 150.74 46.9106 151.123 46.752C151.506 46.5934 151.917 46.5117 152.331 46.5117C152.746 46.5117 153.156 46.5934 153.539 46.752C153.922 46.9106 154.27 47.1432 154.563 47.4363C154.857 47.7294 155.089 48.0774 155.248 48.4603C155.406 48.8433 155.488 49.2538 155.488 49.6683C155.488 50.0829 155.406 50.4933 155.248 50.8763C155.089 51.2593 154.857 51.6073 154.563 51.9004L150.1 56.3637C149.807 56.6573 149.459 56.89 149.076 57.0487C148.693 57.2073 148.282 57.2887 147.868 57.2881Z"
                                fill="#F178B6" />
                            <path
                                d="M101 75.75C100.163 75.75 99.3601 75.4175 98.7682 74.8256C98.1763 74.2336 97.8438 73.4308 97.8438 72.5938V50.5C97.8438 49.6629 98.1763 48.8601 98.7682 48.2682C99.3601 47.6763 100.163 47.3438 101 47.3438C101.837 47.3438 102.64 47.6763 103.232 48.2682C103.824 48.8601 104.156 49.6629 104.156 50.5V72.5938C104.156 73.4308 103.824 74.2336 103.232 74.8256C102.64 75.4175 101.837 75.75 101 75.75Z"
                                fill="#BB3A7D" />
                            <path
                                d="M101 15.7812C53.9348 15.7812 15.7812 53.9352 15.7812 101C15.7812 148.065 53.9348 186.219 101 186.219C148.065 186.219 186.219 148.065 186.219 101C186.219 53.9352 148.065 15.7812 101 15.7812ZM101 173.594C86.6423 173.594 72.6071 169.336 60.6691 161.359C48.7311 153.383 39.4266 142.045 33.9321 128.78C28.4377 115.516 27.0001 100.919 29.8011 86.8377C32.6022 72.7559 39.516 59.8209 49.6685 49.6685C59.8209 39.516 72.7559 32.6022 86.8377 29.8011C100.919 27.0001 115.516 28.4377 128.78 33.9321C142.045 39.4266 153.383 48.7311 161.359 60.6691C169.336 72.6071 173.594 86.6423 173.594 101C173.594 120.253 165.945 138.718 152.332 152.332C138.718 165.945 120.253 173.594 101 173.594Z"
                                fill="#BB3A7D" />
                            <path
                                d="M63.1251 142.031C62.5009 142.031 61.8906 141.846 61.3715 141.499C60.8525 141.153 60.4479 140.66 60.209 140.083C59.9701 139.506 59.9076 138.872 60.0294 138.259C60.1512 137.647 60.4518 137.085 60.8933 136.643L76.6745 120.862C77.2664 120.27 78.0693 119.938 78.9064 119.938C79.7435 119.938 80.5463 120.27 81.1382 120.862C81.7302 121.454 82.0627 122.257 82.0627 123.094C82.0627 123.931 81.7302 124.734 81.1382 125.326L65.357 141.107C65.0642 141.4 64.7163 141.633 64.3333 141.792C63.9503 141.951 63.5397 142.032 63.1251 142.031Z"
                                fill="#BB3A7D" />
                            <path
                                d="M101 135.719C120.175 135.719 135.719 120.175 135.719 101C135.719 81.8254 120.175 66.2812 101 66.2812C81.8254 66.2812 66.2812 81.8254 66.2812 101C66.2812 120.175 81.8254 135.719 101 135.719Z"
                                fill="#EF5DA8" />
                            <path
                                d="M113.625 97.8438C115.368 97.8438 116.781 96.4306 116.781 94.6875C116.781 92.9444 115.368 91.5312 113.625 91.5312C111.882 91.5312 110.469 92.9444 110.469 94.6875C110.469 96.4306 111.882 97.8438 113.625 97.8438Z"
                                fill="#FCDDEC" />
                            <path
                                d="M88.375 97.8438C90.1181 97.8438 91.5312 96.4306 91.5312 94.6875C91.5312 92.9444 90.1181 91.5312 88.375 91.5312C86.6319 91.5312 85.2188 92.9444 85.2188 94.6875C85.2188 96.4306 86.6319 97.8438 88.375 97.8438Z"
                                fill="#FCDDEC" />
                            <path
                                d="M101 119.938C89.3898 119.938 85.5392 108.786 85.381 108.311C85.1214 107.519 85.1854 106.657 85.559 105.912C85.9326 105.168 86.5855 104.601 87.3752 104.336C88.165 104.07 89.0277 104.128 89.7751 104.496C90.5224 104.865 91.0939 105.513 91.3648 106.301C91.4832 106.645 94.0058 113.625 101 113.625C108.018 113.625 110.533 106.597 110.637 106.298C110.908 105.51 111.479 104.861 112.227 104.493C112.975 104.125 113.837 104.068 114.627 104.334C115.417 104.599 116.069 105.166 116.443 105.911C116.816 106.656 116.88 107.519 116.62 108.31C116.461 108.786 112.61 119.938 101 119.938Z"
                                fill="#FCDDEC" />
                        </svg>

                        <h1 class="text-blacks font-bold text-center mt-4 flex-wrap text-4xl"
                            style="line-height: 50px;min-height:6rem;max-height:6rem;overflow-hidden">
                            Flexible
                            Scheduling
                        </h1>
                        <p class="text-center mt-4 text-sm text-blacks max-h-36 overflow-hidden"
                            style="font-weight: 600;line-height:25px;min-height:9rem">
                            We work around your schedule.
                            Whether it s one time, bi-weekly, or
                            weekly recurring pickups, alter your
                            pickup schedule as often as you d
                            like.
                        </p>
                        <button class="rounded-full relative z-20 text-white text-md w-56 mt-4 py-2 bg-primary">
                            {{__('front.Order Now')}}
                        </button>
                    </div>
                </div>
                <div data-aos="fade-up"  data-aos-duration="1000" class="col-span-12 md:col-span-3">
                    <div class="bg-white p-4 flex flex-col justify-between items-center"
                        style="box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.16);border-radius:40px;">
                        <svg width="164" height="164" viewBox="0 0 202 202" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M174.605 0.000976562H27.3955C12.2656 0.000976562 0.000823984 12.2662 0.000823984 27.396V174.605C0.000429453 189.735 12.2656 202 27.3955 202H174.605C189.734 202 201.999 189.735 201.999 174.605V27.3957C202 12.2662 189.734 0.000976562 174.605 0.000976562Z"
                                    fill="#EF5DA8" />
                                <path
                                    d="M45.3839 201.999H27.3988C12.2674 201.999 0.00100708 189.732 0.00100708 174.605V27.3939C0.00100708 12.2664 12.2674 0 27.3988 0H45.3835C30.2564 0 17.9901 12.2664 17.9901 27.3939V174.605C17.9901 189.732 30.2564 201.999 45.3839 201.999Z"
                                    fill="#BB3A7D" />
                                <path
                                    d="M38.9351 173.708C32.7662 173.708 27.7651 168.707 27.7651 162.538V39.4634C27.7651 33.2945 32.7662 28.2935 38.9351 28.2935C45.104 28.2935 50.1051 33.2945 50.1051 39.4634V162.538C50.1051 168.707 45.104 173.708 38.9351 173.708Z"
                                    fill="#FCDDEC" />
                                <path
                                    d="M53.8051 73.6709H24.0653C17.4439 73.6709 12.0763 68.3033 12.0763 61.6819C12.0763 55.0605 17.4439 49.6929 24.0653 49.6929H53.8055C60.4269 49.6929 65.7945 55.0605 65.7945 61.6819C65.7941 68.3033 60.4265 73.6709 53.8051 73.6709Z"
                                    fill="#BB3A7D" />
                                <path
                                    d="M36.0559 73.672H24.0661C17.4451 73.672 12.0763 68.3028 12.0763 61.6822C12.0763 58.3697 13.4177 55.3744 15.588 53.2041C17.7583 51.0338 20.758 49.6924 24.0661 49.6924H36.0559C32.7474 49.6924 29.7481 51.0338 27.5778 53.2041C25.4075 55.3744 24.0661 58.3697 24.0661 61.6822C24.0661 68.3028 29.4353 73.672 36.0559 73.672Z"
                                    fill="#F178B6" />
                                <path
                                    d="M101 173.708C94.8311 173.708 89.83 168.707 89.83 162.538V39.4634C89.83 33.2945 94.8311 28.2935 101 28.2935C107.169 28.2935 112.17 33.2945 112.17 39.4634V162.538C112.17 168.707 107.169 173.708 101 173.708Z"
                                    fill="#FCDDEC" />
                                <path
                                    d="M115.87 141.45H86.1302C79.5088 141.45 74.1412 136.082 74.1412 129.461C74.1412 122.839 79.5088 117.472 86.1302 117.472H115.87C122.492 117.472 127.859 122.839 127.859 129.461C127.859 136.082 122.491 141.45 115.87 141.45Z"
                                    fill="#BB3A7D" />
                                <path
                                    d="M98.1208 141.45H86.131C79.51 141.45 74.1412 136.081 74.1412 129.461C74.1412 126.148 75.4826 123.153 77.6529 120.982C79.8232 118.812 82.8228 117.471 86.131 117.471H98.1208C94.8122 117.471 91.813 118.812 89.6427 120.982C87.4724 123.153 86.131 126.148 86.131 129.461C86.131 136.081 91.5002 141.45 98.1208 141.45Z"
                                    fill="#F178B6" />
                                <path
                                    d="M163.065 173.708C156.896 173.708 151.895 168.707 151.895 162.538V39.4634C151.895 33.2945 156.896 28.2935 163.065 28.2935C169.234 28.2935 174.235 33.2945 174.235 39.4634V162.538C174.235 168.707 169.234 173.708 163.065 173.708Z"
                                    fill="#FCDDEC" />
                                <path
                                    d="M177.935 103.273H148.195C141.573 103.273 136.206 97.9058 136.206 91.2844C136.206 84.663 141.573 79.2954 148.195 79.2954H177.935C184.556 79.2954 189.924 84.663 189.924 91.2844C189.924 97.9058 184.556 103.273 177.935 103.273Z"
                                    fill="#BB3A7D" />
                                <path
                                    d="M160.186 103.274H148.196C141.575 103.274 136.206 97.9049 136.206 91.2842C136.206 87.9718 137.547 84.9765 139.718 82.8062C141.888 80.6358 144.888 79.2944 148.196 79.2944H160.186C156.877 79.2944 153.878 80.6358 151.708 82.8062C149.537 84.9765 148.196 87.9718 148.196 91.2842C148.196 97.9053 153.565 103.274 160.186 103.274Z"
                                    fill="#F178B6" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="202" height="202" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <h1 class="text-blacks font-bold  text-center mt-4 flex-wrap text-4xl"
                            style="line-height: 50px;min-height:6rem;max-height:6rem;overflow-hidden">
                            Customizable
                            Preferences
                        </h1>
                        <p class="text-center mt-4 text-sm text-blacks max-h-36 overflow-hidden"
                            style="font-weight: 600;line-height:25px;min-height:9rem">
                            We have options! Pick your
                            detergent, softener, and starch
                            preferences for each order. We also
                            offer hang dry for your delicates!
                        </p>
                        <button class="rounded-full relative z-20 text-white text-md w-56 mt-4 py-2 bg-primary">
                            {{__('front.Order Now')}}
                        </button>
                    </div>
                </div>
                <div data-aos="fade-up"  data-aos-duration="1000" class="col-span-12 md:col-span-3">
                    <div class="bg-white p-4 flex flex-col justify-between items-center"
                        style="box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.16);border-radius:40px;">
                        <svg width="164" height="164" viewBox="0 0 202 202" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M47.7668 122.806V134.835C47.7668 135.788 48.0873 136.71 48.6779 137.458L64.5306 157.489C65.6521 158.905 67.7963 158.915 68.9307 157.512L85.1248 137.466C85.7317 136.715 86.0634 135.777 86.0634 134.811V123.075C80.3946 125.976 73.9732 127.616 67.1668 127.616C60.1564 127.616 53.557 125.871 47.7668 122.806Z"
                                fill="#F9CFCF" />
                            <path
                                d="M77.9152 146.869C74.8081 149.081 71.0181 150.39 66.9141 150.39C62.8101 150.39 59.0201 149.079 55.9147 146.869H27.3682C23.4649 151.85 21.1362 158.122 21.1362 164.942V170.814H114.1V164.942C114.1 158.121 111.766 151.85 107.861 146.869H77.9152Z"
                                fill="#FCDDEC" />
                            <path
                                d="M105.457 95.4932H102.529C96.1436 95.4932 90.9684 90.3179 90.9684 83.9338V51.8984C90.9684 45.5127 96.1436 40.3374 102.529 40.3374H105.457C111.841 40.3374 117.018 45.5127 117.018 51.8984V83.9338C117.018 90.3179 111.841 95.4932 105.457 95.4932Z"
                                fill="#F178B6" />
                            <path
                                d="M31.0952 95.1599H28.1677C21.782 95.1599 16.6068 89.9846 16.6068 83.5989V51.5634C16.6068 45.1793 21.782 40.0024 28.1677 40.0024H31.0952C37.4793 40.0024 42.6562 45.1793 42.6562 51.5634V83.5989C42.6562 89.9846 37.4793 95.1599 31.0952 95.1599Z"
                                fill="#F178B6" />
                            <path
                                d="M105.709 97.1502H102.782C95.493 97.1502 89.5636 91.2208 89.5636 83.9337V51.8983C89.5636 44.6095 95.493 38.6802 102.782 38.6802H105.709C112.998 38.6802 118.927 44.6095 118.927 51.8983V83.9337C118.927 91.2208 112.998 97.1502 105.709 97.1502ZM102.782 41.9944C97.32 41.9944 92.8778 46.4366 92.8778 51.8983V83.9337C92.8778 89.3938 97.32 93.836 102.782 93.836H105.709C111.171 93.836 115.613 89.3938 115.613 83.9337V51.8983C115.613 46.4366 111.171 41.9944 105.709 41.9944H102.782Z"
                                fill="#BB3A7D" />
                            <path
                                d="M31.3478 96.8169H28.4203C21.1316 96.8169 15.2022 90.8875 15.2022 83.5988V51.5633C15.2022 44.2762 21.1316 38.3452 28.4203 38.3452H31.3478C38.6349 38.3452 44.5659 44.2762 44.5659 51.5633V83.5988C44.5643 90.8875 38.6349 96.8169 31.3478 96.8169ZM28.4203 41.6594C22.9586 41.6594 18.5164 46.1032 18.5164 51.5633V83.5988C18.5164 89.0604 22.9586 93.5026 28.4203 93.5026H31.3478C36.8095 93.5026 41.2516 89.0604 41.2516 83.5988V51.5633C41.2516 46.1032 36.8095 41.6594 31.3478 41.6594H28.4203Z"
                                fill="#BB3A7D" />
                            <path
                                d="M108.729 70.2559C108.64 70.2559 108.554 70.2689 108.467 70.2705V66.3445C108.467 43.3957 89.863 24.792 66.9142 24.792C43.9654 24.792 25.3617 43.3957 25.3617 66.3445V70.2705C25.2743 70.2689 25.1885 70.2559 25.0995 70.2559C18.0989 70.2559 12.4219 75.9328 12.4219 82.9335C12.4219 89.9342 18.0989 95.6111 25.0995 95.6111C25.5591 95.6111 26.0122 95.5836 26.4605 95.535C30.7473 113.917 47.2263 127.616 66.9142 127.616C86.6022 127.616 103.081 113.917 107.368 95.535C107.816 95.5836 108.269 95.6111 108.729 95.6111C115.731 95.6111 121.407 89.9342 121.407 82.9335C121.407 75.9328 115.731 70.2559 108.729 70.2559Z"
                                fill="#F9CFCF" />
                            <path
                                d="M44.9783 84.5989C42.6447 84.5989 40.7529 82.7071 40.7529 80.3735V73.3308C40.7529 70.9972 42.6447 69.1055 44.9783 69.1055C47.3118 69.1055 49.2036 70.9972 49.2036 73.3308V80.3735C49.2036 82.7071 47.3118 84.5989 44.9783 84.5989Z"
                                fill="#3762CC" />
                            <path
                                d="M88.8498 84.5989C86.5147 84.5989 84.6245 82.7071 84.6245 80.3735V73.3308C84.6245 70.9972 86.5147 69.1055 88.8498 69.1055C91.1834 69.1055 93.0752 70.9972 93.0752 73.3308V80.3735C93.0752 82.7071 91.1834 84.5989 88.8498 84.5989Z"
                                fill="#3762CC" />
                            <path
                                d="M67.3721 107.627C61.2857 107.627 56.3338 103.143 56.3338 97.6307C56.3338 96.7164 57.0766 95.9736 57.9909 95.9736C58.9052 95.9736 59.648 96.7164 59.648 97.6307C59.648 101.314 63.1128 104.313 67.3721 104.313C71.6298 104.313 75.0961 101.314 75.0961 97.6307C75.0961 96.7164 75.8373 95.9736 76.7532 95.9736C77.6676 95.9736 78.4104 96.7164 78.4104 97.6307C78.4104 103.141 73.4584 107.627 67.3721 107.627Z"
                                fill="#3762CC" />
                            <path
                                d="M67.1665 129.273C47.4462 129.273 30.4834 116.183 25.436 97.2681C25.4068 97.2681 25.3793 97.2681 25.3518 97.2681C17.4465 97.2681 11.0171 90.8371 11.0171 82.9334C11.0171 75.499 16.7037 69.3706 23.9568 68.6667V66.3444C23.9568 42.5185 43.3406 23.1348 67.1665 23.1348C90.9924 23.1348 110.375 42.5185 110.375 66.3444V68.6667C117.628 69.3706 123.314 75.5006 123.314 82.9334C123.314 90.8646 116.817 97.3086 108.895 97.2665C103.85 116.183 86.8852 129.273 67.1665 129.273ZM26.7128 93.8778C27.475 93.8778 28.1498 94.4021 28.3262 95.1595C32.5548 113.294 48.5272 125.959 67.1665 125.959C85.8042 125.959 101.777 113.294 106.007 95.1595C106.196 94.3439 106.975 93.7953 107.797 93.8875C108.213 93.9312 108.599 93.9539 108.981 93.9539C115.058 93.9539 120.002 89.01 120.002 82.9334C120.002 76.8616 115.066 71.921 108.996 71.9129C108.887 71.921 108.819 71.9259 108.75 71.9275C108.738 71.9275 108.729 71.9275 108.719 71.9275C108.285 71.9275 107.868 71.7559 107.559 71.4517C107.242 71.141 107.062 70.7138 107.062 70.2704V66.3444C107.062 44.3455 89.1654 26.449 67.1665 26.449C45.1692 26.449 27.2711 44.3455 27.2711 66.3444V70.2704C27.2711 70.7154 27.0931 71.141 26.7759 71.4517C26.4587 71.7624 26.0282 71.9323 25.5832 71.9259C25.5136 71.9259 25.4424 71.921 25.3728 71.9145C25.3712 71.9145 25.3712 71.9145 25.3696 71.9145C19.2735 71.9145 14.3329 76.8584 14.3329 82.9334C14.3329 89.0084 19.2752 93.9523 25.3518 93.9523C25.7337 93.9523 26.1205 93.9312 26.5364 93.8859C26.5946 93.8811 26.6545 93.8778 26.7128 93.8778Z"
                                fill="#BB3A7D" />
                            <path
                                d="M45.2309 84.5989C42.8973 84.5989 41.0056 82.7071 41.0056 80.3735V73.3308C41.0056 70.9972 42.8973 69.1055 45.2309 69.1055C47.5644 69.1055 49.4562 70.9972 49.4562 73.3308V80.3735C49.4562 82.7071 47.5644 84.5989 45.2309 84.5989Z"
                                fill="#BB3A7D" />
                            <path
                                d="M89.1024 84.5989C86.7688 84.5989 84.8771 82.7071 84.8771 80.3735V73.3308C84.8771 70.9972 86.7688 69.1055 89.1024 69.1055C91.436 69.1055 93.3277 70.9972 93.3277 73.3308V80.3735C93.3277 82.7071 91.436 84.5989 89.1024 84.5989Z"
                                fill="#BB3A7D" />
                            <path
                                d="M67.6227 107.627C61.5364 107.627 56.5845 103.143 56.5845 97.6307C56.5845 96.7164 57.3273 95.9736 58.2416 95.9736C59.1575 95.9736 59.8987 96.7164 59.8987 97.6307C59.8987 101.314 63.3651 104.313 67.6227 104.313C71.8821 104.313 75.3468 101.314 75.3468 97.6307C75.3468 96.7164 76.0896 95.9736 77.0039 95.9736C77.9182 95.9736 78.661 96.7164 78.661 97.6307C78.661 103.141 73.7091 107.627 67.6227 107.627Z"
                                fill="#BB3A7D" />
                            <path
                                d="M102.275 11.7439H95.1353C89.4843 11.7439 84.5906 15.1245 82.1503 20.0732C81.7683 20.8467 80.7375 20.8645 80.3281 20.1055C78.0657 15.9093 73.821 13.0094 68.8917 12.7537C38.7869 11.8863 20.8402 4.53931 15.1325 1.7947C14.202 1.34644 13.1371 2.05363 13.1371 3.11198V32.6731C13.1371 43.5495 21.6897 52.3643 32.2377 52.3643H59.9426C68.0826 52.3643 75.1852 47.8299 79.0302 41.0817C79.5044 40.2482 80.6857 40.47 80.922 41.4102C82.3784 47.1777 87.3595 51.4273 93.284 51.4273H114.695C117.728 51.4273 120.188 48.8332 120.188 45.6323V30.6454C120.186 20.2059 112.166 11.7439 102.275 11.7439Z"
                                fill="#F178B6" />
                            <path
                                d="M60.1936 54.0228H32.4886C21.0442 54.0228 11.7326 44.4458 11.7326 32.6744V3.11172C11.7326 2.02747 12.2747 1.0387 13.1842 0.467448C14.071 -0.0908578 15.1617 -0.152353 16.1036 0.300765C22.2644 3.26383 39.7741 10.2483 69.1912 11.0963C74.2451 11.3568 78.7407 14.0351 81.4578 18.3252C84.4046 13.2146 89.6462 10.0849 95.3879 10.0849H102.526C113.317 10.0849 122.096 19.3074 122.096 30.6435V45.632C122.096 49.7408 118.889 53.0842 114.946 53.0842H93.5366C87.4324 53.0842 82.0274 49.0595 79.9657 43.1415C75.5721 49.8881 68.1231 54.0228 60.1936 54.0228ZM15.0468 3.46936V32.6744C15.0468 42.6188 22.8712 50.7085 32.4886 50.7085H60.1952C67.4095 50.7085 74.1723 46.7049 77.8425 40.2625C78.3863 39.3094 79.4268 38.7883 80.5014 38.9323C81.6083 39.0828 82.5032 39.8968 82.7831 41.0053C84.0842 46.166 88.507 49.7699 93.5366 49.7699H114.948C117.063 49.7699 118.783 47.9138 118.783 45.632V30.6451C118.783 21.1361 111.491 13.4007 102.528 13.4007H95.3879C90.5476 13.4007 86.1427 16.2376 83.8884 20.806C83.4369 21.7219 82.5339 22.3029 81.5338 22.3207C80.5515 22.3433 79.6081 21.7931 79.1226 20.8934C77.0512 17.0516 73.2887 14.6274 69.0585 14.4073C39.6188 13.5609 21.7174 6.61853 15.0468 3.46936Z"
                                fill="#BB3A7D" />
                            <path
                                d="M115.961 48.9738C115.961 59.4764 107.449 67.9902 96.9462 67.9902C86.4435 67.9902 77.9314 59.4764 77.9314 48.9738C77.9314 38.4727 86.4435 29.959 96.9462 29.959C107.449 29.959 115.961 38.4727 115.961 48.9738Z"
                                fill="#FCDDEC" />
                            <path
                                d="M110.328 48.9738C110.328 56.3645 104.337 62.3554 96.9462 62.3554C89.5556 62.3554 83.5647 56.3645 83.5647 48.9738C83.5647 41.5832 89.5556 35.5923 96.9462 35.5923C104.337 35.5923 110.328 41.5832 110.328 48.9738Z"
                                fill="#F178B6" />
                            <path
                                d="M117.924 42.2842H114.747C115.531 44.3653 115.961 46.6195 115.961 48.9741C115.961 51.5974 115.43 54.096 114.471 56.3697H117.924C119.173 56.3697 120.188 55.3566 120.188 54.1073V44.5465C120.186 43.2972 119.173 42.2842 117.924 42.2842Z"
                                fill="#E0EBFC" />
                            <path
                                d="M79.1451 42.2842H15.3995C14.1502 42.2842 13.1371 43.2972 13.1371 44.5465V54.1073C13.1371 55.3566 14.1502 56.3697 15.3995 56.3697H79.4218C78.4606 54.096 77.9298 51.5974 77.9298 48.9741C77.9298 46.6195 78.3619 44.3653 79.1451 42.2842Z"
                                fill="#FCDDEC" />
                            <path
                                d="M97.1988 69.6476C85.7996 69.6476 76.5253 60.3733 76.5253 48.9741C76.5253 37.575 85.7996 28.3022 97.1988 28.3022C108.598 28.3022 117.871 37.575 117.871 48.9741C117.871 60.3733 108.596 69.6476 97.1988 69.6476ZM97.1988 31.6165C87.6267 31.6165 79.8395 39.4036 79.8395 48.9741C79.8395 58.5463 87.6267 66.3334 97.1988 66.3334C106.769 66.3334 114.556 58.5463 114.556 48.9741C114.556 39.4036 106.769 31.6165 97.1988 31.6165Z"
                                fill="#BB3A7D" />
                            <path
                                d="M97.1988 64.0124C88.9068 64.0124 82.1602 57.2658 82.1602 48.9737C82.1602 40.6817 88.9068 33.9351 97.1988 33.9351C105.491 33.9351 112.236 40.6817 112.236 48.9737C112.236 57.2658 105.491 64.0124 97.1988 64.0124ZM97.1988 37.2509C90.7338 37.2509 85.4744 42.5103 85.4744 48.9753C85.4744 55.4388 90.7338 60.6998 97.1988 60.6998C103.662 60.6998 108.922 55.4388 108.922 48.9753C108.922 42.5103 103.662 37.2509 97.1988 37.2509Z"
                                fill="#BB3A7D" />
                            <path
                                d="M118.177 58.0268H114.721C114.166 58.0268 113.649 57.7485 113.341 57.2857C113.035 56.8212 112.979 56.2354 113.195 55.724C114.098 53.5879 114.556 51.3158 114.556 48.9742C114.556 46.8753 114.184 44.8201 113.45 42.8668C113.259 42.357 113.328 41.7874 113.637 41.3408C113.948 40.8925 114.456 40.6255 115 40.6255H118.177C120.339 40.6255 122.098 42.3846 122.098 44.5466V54.1058C122.096 56.2678 120.339 58.0268 118.177 58.0268ZM117.065 54.7126H118.177C118.51 54.7126 118.782 54.4407 118.782 54.1074V44.5466C118.782 44.2132 118.51 43.9413 118.177 43.9413H117.252C117.664 45.5807 117.871 47.2653 117.871 48.9742C117.871 50.9372 117.6 52.8581 117.065 54.7126Z"
                                fill="#BB3A7D" />
                            <path
                                d="M79.6744 58.0267H15.6521C13.4901 58.0267 11.7326 56.2676 11.7326 54.1072V44.5464C11.7326 42.3844 13.4901 40.627 15.6521 40.627H79.3961C79.9398 40.627 80.4496 40.894 80.7603 41.3406C81.0694 41.7889 81.139 42.3585 80.948 42.8667C80.2133 44.8215 79.8411 46.8751 79.8411 48.974C79.8411 51.3157 80.2991 53.5861 81.2005 55.7239C81.4173 56.2353 81.3623 56.8211 81.0564 57.2855C80.7473 57.7483 80.2295 58.0267 79.6744 58.0267ZM15.6521 43.9412C15.3187 43.9412 15.0468 44.2131 15.0468 44.5464V54.1072C15.0468 54.4406 15.3187 54.7125 15.6521 54.7125H77.3311C76.7971 52.8579 76.5252 50.937 76.5252 48.974C76.5252 47.2651 76.734 45.5805 77.1451 43.9412H15.6521Z"
                                fill="#BB3A7D" />
                            <path
                                d="M68.9305 157.51C67.7944 158.915 65.6502 158.904 64.5304 157.488L48.6777 137.457C48.2748 136.947 48.0077 136.35 47.8718 135.722C32.8898 137.042 21.1362 149.617 21.1362 164.943V170.814H114.1V164.943C114.1 149.146 101.615 136.271 85.9742 135.631L68.9305 157.51Z"
                                fill="#F178B6" />
                            <path
                                d="M114.1 172.471H21.1362C20.2219 172.471 19.4791 171.729 19.4791 170.814V164.943C19.4791 149.307 30.8168 136.39 46.1095 134.256V122.806C46.1095 122.224 46.4138 121.685 46.9106 121.386C47.409 121.086 48.0288 121.07 48.5418 121.342C54.2478 124.363 60.687 125.96 67.1666 125.96C73.5539 125.96 79.6581 124.493 85.3075 121.602C85.8221 121.339 86.4354 121.361 86.9274 121.662C87.4209 121.963 87.7203 122.501 87.7203 123.077V134.089C103.575 135.581 115.759 148.823 115.759 164.945V170.816C115.757 171.73 115.016 172.471 114.1 172.471ZM22.7934 169.157H112.443V164.943C112.443 150.042 100.788 137.894 85.9062 137.287C84.9919 137.25 84.2815 136.478 84.3187 135.563C84.3252 135.384 84.3624 135.211 84.4223 135.049C84.4093 134.971 84.4045 134.893 84.4045 134.811V125.695C78.9703 128.071 73.1833 129.273 67.1649 129.273C61.0543 129.273 54.9728 127.961 49.4221 125.46V134.835C49.4221 134.984 49.4432 135.156 49.4901 135.376C49.5904 135.84 49.4869 136.324 49.2037 136.707C48.9221 137.089 48.4884 137.332 48.0159 137.374C33.6358 138.64 22.7917 150.492 22.7917 164.943V169.157H22.7934Z"
                                fill="#BB3A7D" />
                            <path
                                d="M165.909 200.343H137.324C124.169 200.343 113.503 189.679 113.503 176.522V147.937C113.503 134.78 124.169 124.116 137.324 124.116H165.909C179.066 124.116 189.73 134.78 189.73 147.937V176.522C189.73 189.679 179.066 200.343 165.909 200.343Z"
                                fill="#EF5DA8" />
                            <path
                                d="M137.253 192.056C128.686 192.056 121.717 185.087 121.717 176.52V147.935C121.717 139.368 128.686 132.399 137.253 132.399H165.838C174.404 132.399 181.374 139.368 181.374 147.935V176.52C181.374 185.087 174.404 192.056 165.838 192.056H137.253Z"
                                fill="#FCDDEC" />
                            <path
                                d="M165.909 202H137.324C123.275 202 111.846 190.57 111.846 176.522V147.937C111.846 133.888 123.275 122.458 137.324 122.458H165.909C179.959 122.458 191.387 133.888 191.387 147.937V176.522C191.387 190.57 179.959 202 165.909 202ZM137.324 125.773C125.103 125.773 115.16 135.715 115.16 147.937V176.522C115.16 188.743 125.103 198.686 137.324 198.686H165.909C178.13 198.686 188.073 188.743 188.073 176.522V147.937C188.073 135.715 178.13 125.773 165.909 125.773H137.324Z"
                                fill="#BB3A7D" />
                            <path
                                d="M155.196 137.023C164.689 137.023 171.135 142.619 171.135 151.829C171.135 161.095 165.039 165.544 156.58 166.141C155.431 166.222 154.512 167.128 154.453 168.28L154.384 169.659C154.324 170.861 153.33 171.806 152.125 171.806H149.453C148.233 171.806 147.231 170.837 147.192 169.615L146.982 163.017C146.941 161.741 147.966 160.684 149.243 160.684H149.246C157.25 160.684 163.414 159.268 163.414 151.829C163.414 146.87 160.368 143.825 155.267 143.825C150.911 143.825 147.935 145.951 147.218 149.743C147.014 150.82 146.093 151.617 144.995 151.617H141.889C140.528 151.617 139.445 150.417 139.641 149.069C140.696 141.876 146.548 137.023 155.196 137.023ZM150.662 187.46C146.726 187.46 143.96 183.298 146.422 179.027C146.574 178.762 146.791 178.527 147.042 178.351C151.278 175.381 155.763 178.203 155.763 182.289C155.763 185.194 153.497 187.46 150.662 187.46Z"
                                fill="#BB3A7D" />
                        </svg>

                        <h1 class="text-blacks font-bold text-center mt-4 flex-wrap text-4xl"
                            style="line-height: 50px;min-height:6rem;max-height:6rem;overflow-hidden">
                            Care Experts
                        </h1>
                        <p class="text-center mt-4 text-sm text-blacks max-h-36  overflow-hidden"
                            style="font-weight: 600;line-height:25px;min-height:9rem">
                            We promise our Care Experts know
                            how to care for your items better
                            than anyone else. Should
                            exceptions come up, we will contact
                            you via phone or text to make sure
                            each of your items are care to your
                            exact specifications
                        </p>
                        <button class="rounded-full relative z-20 text-white text-md w-56 mt-4 py-2 bg-primary">
                            {{__('front.Order Now')}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full 2xl:h-96 p-10 md:px-20 relative py-12 mt-64 flex flex-col md:flex-row justify-between items-center"
        style="background: linear-gradient(180deg, #BB3A7D 0%, #14ABA7 100%);">
        <div class="flex flex-col justify-center items-start">
            <h1 data-aos="fade-up"  data-aos-duration="1000" class="text-4xl text-white">
                {{__('front.Download Our App Now')}}
            </h1>
            <div class="mt-8">
                <p data-aos-delay="300" data-aos="fade-up"  data-aos-duration="1000" class="text-white text-xl">
                    Lorem Ipsum is simply dummy text of the printing
                </p>
                <p data-aos-delay="600" data-aos="fade-up"  data-aos-duration="1000" class="text-white text-xl mt-2">
                    Lorem Ipsum is simply dummy text of the printing
                </p>
            </div>
        </div>
        <div class="flex flex-col justify-center  items-center md:items-end">
            <div  data-aos="fade-up"  data-aos-duration="1000" class="relative w-80 md:w-96 mt-8">
                <input type="text" class="bg-white rounded-full h-12 w-80 md:w-96 pl-6" placeholder="{{__('front.Mobile Number')}}">
                <button class="absolute right-0 bg-primary rounded-full text-white h-12 w-28 md:w-40 text-center text-md md:text-xl">
                    {{__('front.Send Link')}}
                </button>
            </div>
            <img  class="hidden md:block absolute w-72 left-1/2 transform rtl:-translate-x-2/3 ltr:-translate-x-1/3" src="{{asset('imgs/mobile.png')}}" alt="">
            <div data-aos-delay="300" data-aos="fade-up"  data-aos-duration="1000" class="flex px-12 md:px-0 justify-between items-center w-96 mt-4">
                <img class="w-28 md:w-44" src="{{asset('imgs/google.png')}}" alt="">
                <img class="w-24 md:w-40" src="{{asset('imgs/apple.png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="relative w-full grid grid-cols-12 gap-4 px-4 md:px-12  mt-40 ">
        
        <div  data-aos="fade-up"  data-aos-duration="1000" class="col-span-12 md:col-span-6 px-6 md:px-12 h-60 md:h-96 bg-red-500 flex flex-col justify-end items-start"
            style="background:linear-gradient(0deg, rgba(187, 58, 125, 0.5), rgba(187, 58, 125, 0.5)),url({{asset('imgs/badges/left1.png')}});background-size:cover">
            <h1 class="text-xl md:text-5xl font-bold text-white">
                {{__('front.Sale of')}} 50 %
            </h1>
            <h1 class="text-md md:text-2xl mt-8 text-white">
                <span class="text-md md:text-3xl">236</span>DAYS : <span class="text-md md:text-3xl">15</span>HRs : <span
                    class="text-md md:text-3xl">06</span>MINS : <span class="text-md md:text-3xl">22</span>SECS
            </h1>
            <button class="border-2 text-2xl border-white mb-4 md:mb-16 text-white h-14 w-48 mt-8 rounded-full">
                {{__('front.Order Now')}}
            </button>
        </div>
        <div  data-aos="fade-up"  data-aos-duration="1000" class="col-span-12 md:col-span-6 px-6 md:px-12 h-60 md:h-96 bg-red-500 flex flex-col justify-end items-start"
            style="background:linear-gradient(0deg, rgba(187, 58, 125, 0.5), rgba(187, 58, 125, 0.5)),url({{asset('imgs/badges/left1.png')}});background-size:cover">
            <h1 class="text-xl md:text-5xl font-bold text-white">
                {{__('front.Sale of')}} 50 %
            </h1>
            <h1 class="text-md md:text-2xl mt-8 text-white">
                <span class="text-md md:text-3xl">236</span>DAYS : <span class="text-md md:text-3xl">15</span>HRs : <span
                    class="text-md md:text-3xl">06</span>MINS : <span class="text-md md:text-3xl">22</span>SECS
            </h1>
            <button class="border-2 text-2xl border-white mb-4 md:mb-16 text-white h-14 w-48 mt-8 rounded-full">
                {{__('front.Order Now')}}
            </button>
        </div>
    </div>


    <div class="deals w-full py-20">
        <h1 class="text-center text-3xl md:text-5xl text-blacks">{{__('front.Grow With Tandifat')}}</h1>
    </div>
    <div class="w-full relative" dir="ltr">
        <div class="w-10/12 flex justify-center items-center relative left-1/2 transform -translate-x-1/2">
            <div class="grid grid-cols-12 gap-4 w-full relative">
                <div  data-aos="fade-up"  data-aos-duration="1000" class="col-span-12 md:col-span-3">
                    <div class=" p-4 flex flex-col justify-between items-center" style="border-radius:40px;">
                        <svg width="164" height="164" viewBox="0 0 202 203" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M146.016 159.136C147.204 161.456 146.588 166.727 143.503 168.924C143.243 169.112 142.965 169.274 142.674 169.409C141.964 169.75 141.201 169.966 140.418 170.048C140.477 172.775 139.344 176.203 136.725 177.572C136.657 177.612 136.587 177.647 136.516 177.679C135.628 178.114 134.652 178.342 133.663 178.345C133.817 178.98 133.824 179.641 133.683 180.279C132.933 183.044 130.183 184.78 127.741 185.344C126.976 185.54 126.182 185.594 125.398 185.506C125.113 185.465 124.836 185.384 124.573 185.265C124.557 185.344 124.542 185.427 124.522 185.51C123.914 188.063 121.52 190.832 119.784 191.258C117.673 191.779 114.505 190.26 112.745 188.059C111.925 188.84 111.139 189.55 110.394 190.17C108.33 191.89 106.598 192.923 105.395 192.923C104.161 192.939 102.941 192.665 101.832 192.122C100.702 191.569 99.7461 190.715 99.0707 189.653C98.666 189.728 98.2554 189.766 97.8438 189.767C94.8927 189.767 92.632 188.39 91.3853 186.272C90.8431 185.347 90.4966 184.321 90.3674 183.257C89.711 183.386 89.0439 183.452 88.375 183.455C87.0813 183.427 85.8117 183.1 84.6662 182.498C83.5207 181.896 82.5308 181.037 81.7745 179.987C81.1202 179.104 80.653 178.097 80.4015 177.028C79.9067 177.103 79.4068 177.141 78.9062 177.142C68.3959 177.142 66.3365 168.502 70.9288 161.846V161.842H70.9249C69.6505 159.988 68.5656 158.134 67.5003 156.279C64.2494 150.61 61.2155 144.94 53.6562 139.267L72.5938 110.861C77.6431 110.854 82.6872 111.185 87.6925 111.851C89.0391 110.825 90.5156 109.981 92.0836 109.342C96.1078 107.705 100.132 107.705 104.156 107.705C113.625 107.705 119.938 114.017 129.406 110.861L148.344 139.267C144.016 143.595 144.138 147.923 142.611 152.251C142.264 153.247 141.821 154.208 141.29 155.119C143.463 155.968 145.298 157.739 146.016 159.136Z"
                                fill="#FFD9C0" />
                            <path
                                d="M93.7643 170.829C94.0599 171.126 94.2259 171.527 94.2259 171.946C94.2259 172.364 94.0599 172.766 93.7643 173.062C92.3353 174.439 90.7791 175.676 89.1167 176.759C86.8906 178.281 84.4009 179.375 81.7745 179.986C81.1202 179.104 80.653 178.097 80.4015 177.027C86.1182 176.183 91.472 170.888 91.5312 170.829C91.8276 170.534 92.2291 170.368 92.6477 170.368C93.0664 170.368 93.4679 170.534 93.7643 170.829Z"
                                fill="#BB3A7D" />
                            <path
                                d="M121.681 137.61C120.787 138.678 119.685 139.553 118.443 140.182C117.201 140.811 115.843 141.182 114.454 141.271C114.134 141.299 113.81 141.311 113.491 141.311C110.652 141.253 107.893 140.358 105.561 138.738C103.446 137.326 101.028 136.924 98.4396 136.908C97.9425 138.695 97.3507 140.462 96.7391 142.108C93.9261 149.639 91.7286 154.606 87.7202 158.907C85.2149 161.412 77.92 165.799 70.9289 161.842H70.925C69.6506 159.988 68.5657 158.134 67.5004 156.279C69.2916 157.139 71.5089 158.244 72.5268 158.753C77.5689 161.274 83.9839 158.134 86.142 155.971C87.1205 154.993 90.9001 148.72 93.7802 141.003C94.3128 139.579 94.7546 138.265 95.1176 137.05C94.585 137.089 94.0484 137.133 93.5079 137.176C87.5189 137.673 80.7369 138.233 76.2787 131.55C76.0465 131.202 75.9621 130.775 76.0442 130.364C76.1264 129.954 76.3683 129.593 76.7167 129.36C77.0651 129.128 77.4916 129.044 77.9022 129.126C78.3128 129.208 78.674 129.45 78.9063 129.798C82.3309 134.935 87.6294 134.497 93.2396 134.032C97.8083 133.653 102.981 133.223 107.313 136.111C109.553 137.602 111.952 138.308 114.197 138.127C115.164 138.07 116.109 137.817 116.976 137.385C117.843 136.952 118.613 136.348 119.239 135.61C122.455 131.688 119.922 126.626 116.781 123.486C112.418 119.122 105.782 115.804 97.0548 113.622C93.9687 112.862 90.8433 112.27 87.6925 111.851C89.0392 110.825 90.5157 109.981 92.0837 109.342C93.9774 109.677 95.8988 110.08 97.8202 110.561C107.107 112.881 114.241 116.479 119.014 121.253C125.532 127.774 124.526 134.138 121.681 137.61Z"
                                fill="#BB3A7D" />
                            <path
                                d="M103.233 179.375C102.594 180.014 97.5203 184.926 91.3854 186.272C90.8432 185.347 90.4967 184.321 90.3675 183.257C95.8988 182.196 100.945 177.197 101 177.142C101.296 176.846 101.698 176.68 102.117 176.68C102.535 176.68 102.937 176.846 103.233 177.142C103.529 177.438 103.696 177.84 103.696 178.259C103.696 178.677 103.529 179.079 103.233 179.375Z"
                                fill="#BB3A7D" />
                            <path
                                d="M142.663 165.965C141.546 163.787 138.694 161.006 135.076 160.059C134.302 159.854 133.505 159.746 132.705 159.735C133.215 158.005 134.322 156.512 135.829 155.522C136.707 154.932 137.742 154.618 138.8 154.622C139.352 154.624 139.901 154.698 140.433 154.843C140.724 154.918 141.01 155.01 141.29 155.119C141.821 154.208 142.264 153.248 142.611 152.251C142.163 152.067 141.703 151.913 141.234 151.79C140.034 151.446 138.773 151.367 137.539 151.557C136.305 151.747 135.127 152.202 134.085 152.89C132.831 153.716 131.762 154.794 130.947 156.055C130.132 157.317 129.588 158.734 129.351 160.217C129.343 160.28 129.339 160.347 129.331 160.41C128.842 160.618 128.372 160.869 127.927 161.16C126.672 161.986 125.602 163.064 124.787 164.326C123.972 165.588 123.429 167.006 123.192 168.49C123.188 168.534 123.185 168.581 123.177 168.624C122.146 169.005 121.173 169.525 120.285 170.171C118.49 171.402 117.151 173.189 116.474 175.256C114.99 175.452 113.612 176.133 112.556 177.193C110.758 178.99 109.678 180.654 109.086 182.16C108.285 183.164 107.429 184.123 106.523 185.033C103.864 187.692 101.363 189.239 99.0708 189.653C99.7462 190.715 100.702 191.57 101.833 192.123H101.836C104.093 191.235 106.409 189.609 108.757 187.266C108.766 187.257 108.774 187.248 108.783 187.238C109.042 188.095 109.444 188.902 109.972 189.625C110.106 189.811 110.248 189.992 110.394 190.17C111.139 189.55 111.925 188.84 112.745 188.059C112.67 187.964 112.599 187.87 112.528 187.775C110.832 185.431 111.589 182.622 114.785 179.423C115.136 179.069 115.556 178.79 116.019 178.603C116.481 178.417 116.977 178.326 117.476 178.338C117.986 178.342 118.493 178.416 118.983 178.559C121.689 179.328 124.167 181.829 124.573 183.553C124.694 184.118 124.694 184.701 124.573 185.266C124.836 185.384 125.113 185.465 125.398 185.506C126.182 185.595 126.976 185.54 127.741 185.345C127.863 184.507 127.831 183.654 127.647 182.827C126.937 179.821 123.437 176.543 119.847 175.525C119.813 175.514 119.779 175.504 119.744 175.497C120.296 174.388 121.118 173.435 122.135 172.727C123.439 171.745 125.013 171.186 126.645 171.126C127.119 171.122 127.592 171.193 128.045 171.335C129.608 171.851 131.241 173.327 132.413 175.292C132.994 176.234 133.417 177.266 133.663 178.346C134.652 178.342 135.628 178.114 136.516 177.679C136.587 177.647 136.657 177.612 136.725 177.572C136.403 176.195 135.863 174.879 135.123 173.674C133.549 171.039 131.328 169.094 129.032 168.336C128.232 168.083 127.396 167.962 126.558 167.977C127.071 166.26 128.173 164.779 129.671 163.795C130.556 163.204 131.597 162.891 132.661 162.896C133.206 162.9 133.748 162.972 134.275 163.113C136.812 163.776 139.041 165.819 139.857 167.405C140.235 168.235 140.426 169.137 140.418 170.049C141.201 169.966 141.964 169.75 142.674 169.409C142.965 169.274 143.243 169.112 143.503 168.924C143.4 167.896 143.115 166.894 142.663 165.965Z"
                                fill="#BB3A7D" />
                            <path d="M126.25 110.861L148.344 142.423L157.812 136.111L135.719 101.392L126.25 110.861Z"
                                fill="#14ABA7" />
                            <path d="M195.688 44.5796L129.406 104.548L160.969 145.58L195.688 117.173V44.5796Z" fill="#BB3A7D" />
                            <path d="M75.75 110.861L53.6562 142.423L44.1875 136.111L66.2812 101.392L75.75 110.861Z"
                                fill="#14ABA7" />
                            <path d="M6.3125 44.5796L72.5938 104.548L41.0312 145.58L6.3125 117.173V44.5796Z" fill="#BB3A7D" />
                            <path
                                d="M164.125 19.3296V76.1421C164.125 78.6534 163.127 81.0618 161.352 82.8375C159.576 84.6132 157.168 85.6108 154.656 85.6108H111.522L101 101.392L90.4779 85.6108H47.3438C44.8325 85.6108 42.4241 84.6132 40.6483 82.8375C38.8726 81.0618 37.875 78.6534 37.875 76.1421V19.3296C37.875 16.8183 38.8726 14.4099 40.6483 12.6342C42.4241 10.8584 44.8325 9.86084 47.3438 9.86084H154.656C157.168 9.86084 159.576 10.8584 161.352 12.6342C163.127 14.4099 164.125 16.8183 164.125 19.3296Z"
                                fill="#F178B6" />
                            <path
                                d="M151.5 72.9858H50.5C48.7569 72.9858 47.3438 74.3989 47.3438 76.1421C47.3438 77.8852 48.7569 79.2983 50.5 79.2983H151.5C153.243 79.2983 154.656 77.8852 154.656 76.1421C154.656 74.3989 153.243 72.9858 151.5 72.9858Z"
                                fill="#14ABA7" />
                            <path d="M56.8125 54.0483H69.4375V66.6733H56.8125V54.0483Z" fill="#FCDDEC" />
                            <path d="M82.0625 44.5796H94.6875V66.6733H82.0625V44.5796Z" fill="#FCDDEC" />
                            <path d="M110.469 54.0483H123.094V66.6733H110.469V54.0483Z" fill="#FCDDEC" />
                            <path d="M135.719 41.4233H146.766V66.6733H135.719V41.4233Z" fill="#FCDDEC" />
                            <path
                                d="M151.5 19.3298H134.141L136.611 23.447L116.864 35.7888L92.0066 19.2169C90.8524 18.4474 89.4767 18.0796 88.0924 18.1702C86.7081 18.2609 85.3923 18.8051 84.3482 19.7186L61.1952 39.9775C60.8802 40.2531 60.6876 40.6426 60.6598 41.0602C60.6319 41.4778 60.7711 41.8894 61.0467 42.2043L65.2034 46.9552C65.3399 47.1112 65.5058 47.2387 65.6915 47.3306C65.8773 47.4225 66.0793 47.4769 66.2861 47.4906C66.4929 47.5044 66.7004 47.4774 66.8967 47.411C67.093 47.3446 67.2744 47.2401 67.4303 47.1037L88.7648 28.436L113.307 44.7976C114.318 45.4714 115.502 45.8393 116.716 45.8571C117.931 45.875 119.125 45.542 120.155 44.8983L141.483 31.5677L143.609 35.1111L151.5 19.3298Z"
                                fill="#14ABA7" />
                        </svg>

                        <h1 class="text-blacks font-bold text-center mt-4 flex-wrap text-3xl"
                            style="line-height: 50px;min-height:6rem;max-height:6rem;overflow-hidden">
                            {{__('front.Store Partners')}}
                        </h1>
                        <p class="text-center mt-4 text-sm text-blacks max-h-36 overflow-hidden"
                            style="font-weight: 600;line-height:25px;min-height:9rem">
                            Multiply Your Sales. Grow your
                            business with US. Know what. you
                            want. Know when. you want it.
                            Research your. potential provider.
                            Prioritise. compatibility.
                        </p>
                        <button class="rounded-full relative z-20 text-white text-md w-56 mt-4 py-2 bg-primary">
                            {{__('front.Partner with US')}}
                        </button>
                    </div>
                </div>
                <div  data-aos="fade-up"  data-aos-duration="1000" class="col-span-12 md:col-span-3">
                    <div class=" p-4 flex flex-col justify-between items-center" style="border-radius:40px;">
                        <svg width="164" height="164" viewBox="0 0 203 203" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <g clip-path="url(#clip1)">
                                    <path
                                        d="M65.4771 75.1695L65.4755 72.6396L64.3166 70.4023L122.776 40.1328L125.099 44.6172L66.6377 74.8867C66.2793 75.0725 65.8815 75.1695 65.4771 75.1695Z"
                                        fill="#14ABA7" />
                                    <path
                                        d="M122.842 163L122.707 162.924L65.8058 130.07L68.3209 125.693L68.717 125.92L125.313 158.596L122.842 163Z"
                                        fill="#14ABA7" />
                                    <path d="M160.445 80.8506H165.495V121.309H160.445V80.8506Z" fill="#14ABA7" />
                                    <path
                                        d="M162.969 3.34424C180.249 3.34588 195.471 14.7081 200.386 31.2746C205.303 47.8411 198.741 65.6685 184.259 75.0942V63.1896C184.257 56.3693 178.952 50.7277 172.147 50.3069C172.014 50.4335 171.892 50.5715 171.785 50.7195C169.612 53.371 166.339 54.8702 162.914 54.7863C159.488 54.7008 156.292 53.0406 154.254 50.2872C147.258 50.4663 141.68 56.1902 141.68 63.1896V75.0942C127.196 65.6685 120.634 47.8411 125.551 31.2746C130.466 14.7081 145.688 3.34588 162.969 3.34424ZM174.437 34.8598V28.4423C174.435 22.2976 169.454 17.3152 163.31 17.3152H162.628C156.483 17.3152 151.502 22.2976 151.502 28.4423V34.8598C151.502 41.0044 156.483 45.9852 162.628 45.9852H163.31C169.454 45.9852 174.435 41.0044 174.437 34.8598Z"
                                        fill="#BB3A7D" />
                                    <path
                                        d="M123.942 160.723C123.939 160.596 123.939 160.466 123.939 160.34C123.94 141.659 137.176 125.601 155.513 122.032C173.849 118.463 192.141 128.387 199.149 145.701C206.156 163.016 199.915 182.87 184.259 193.059V181.149C184.259 174.33 178.953 168.689 172.147 168.271C172.014 168.396 171.892 168.533 171.786 168.68C169.614 171.332 166.341 172.834 162.914 172.751C159.488 172.667 156.292 171.007 154.254 168.251C147.258 168.429 141.68 174.151 141.68 181.149V193.059C130.719 185.936 124.059 173.793 123.942 160.723ZM174.437 152.819V146.407C174.435 140.262 169.455 135.279 163.31 135.279H162.628C156.483 135.279 151.502 140.262 151.502 146.407V152.819C151.501 158.965 156.481 163.948 162.628 163.95H163.31C169.456 163.948 174.437 158.965 174.437 152.819Z"
                                        fill="#BB3A7D" />
                                    <path
                                        d="M184.259 181.149V193.059C171.314 201.475 154.625 201.475 141.68 193.059V181.149C141.68 174.151 147.258 168.429 154.254 168.251C156.292 171.007 159.488 172.667 162.914 172.751C166.341 172.834 169.614 171.332 171.785 168.681C171.892 168.533 172.014 168.396 172.147 168.271C178.953 168.689 184.259 174.33 184.259 181.149Z"
                                        fill="#FCDDEC" />
                                    <path
                                        d="M162.97 81.4065C155.41 81.418 148.011 79.2251 141.68 75.0942V63.1896C141.68 56.1901 147.258 50.4663 154.254 50.2871C156.292 53.0405 159.488 54.7008 162.914 54.7863C166.339 54.8701 169.612 53.3709 171.785 50.7194C171.892 50.5715 172.014 50.4334 172.147 50.3068C178.953 50.7277 184.257 56.3693 184.259 63.1896V75.0942C177.927 79.2251 170.528 81.418 162.97 81.4065Z"
                                        fill="#FCDDEC" />
                                    <path
                                        d="M174.437 146.407V152.819C174.437 158.966 169.456 163.948 163.31 163.95H162.628C156.482 163.948 151.501 158.966 151.502 152.819V146.407C151.502 140.262 156.483 135.28 162.628 135.28H163.31C169.455 135.28 174.435 140.262 174.437 146.407Z"
                                        fill="#FCDDEC" />
                                    <path
                                        d="M162.628 17.3149H163.31C169.455 17.3149 174.437 22.2958 174.437 28.442V34.8596C174.437 41.0042 169.455 45.985 163.31 45.985H162.628C156.483 45.985 151.502 41.0042 151.502 34.8596V28.442C151.502 22.2958 156.483 17.3149 162.628 17.3149Z"
                                        fill="#FCDDEC" />
                                    <path
                                        d="M67.4597 128.109C65.3293 130.376 62.9342 132.378 60.3271 134.076V122.167C60.3255 115.35 55.0225 109.71 48.2186 109.289C48.0855 109.414 47.9622 109.55 47.8537 109.698C45.6822 112.35 42.411 113.851 38.9852 113.767C35.5595 113.683 32.3639 112.023 30.3255 109.269C23.3294 109.445 17.7486 115.167 17.7486 122.167V134.076C3.98146 125.119 -2.70729 108.505 1.01599 92.5087C4.73927 76.5126 18.0757 64.5587 34.3825 62.6009C50.6877 60.6431 66.475 69.1022 73.8789 83.7619C81.281 98.4233 78.715 116.149 67.4597 128.109ZM50.5052 93.837V87.4244C50.5036 81.2797 45.5227 76.2973 39.3781 76.2973H38.6959C32.5513 76.2973 27.5705 81.2797 27.5705 87.4244V93.837C27.5688 99.9832 32.5496 104.967 38.6959 104.967H39.3781C45.5244 104.967 50.5052 99.9832 50.5052 93.837Z"
                                        fill="#FCDDEC" />
                                    <path
                                        d="M60.3269 122.167V134.077C47.3817 142.493 30.6935 142.493 17.7483 134.077V122.167C17.7483 115.168 23.3291 109.445 30.3253 109.27C32.3636 112.023 35.5592 113.683 38.985 113.767C42.4107 113.851 45.682 112.35 47.8535 109.699C47.962 109.551 48.0852 109.414 48.2184 109.289C55.0222 109.71 60.3252 115.35 60.3269 122.167Z"
                                        fill="#BB3A7D" />
                                    <path
                                        d="M50.5051 87.4245V93.8371C50.5051 99.9834 45.5243 104.967 39.378 104.967H38.6958C32.5496 104.967 27.5687 99.9834 27.5704 93.8371V87.4245C27.5704 81.2798 32.5512 76.2974 38.6958 76.2974H39.378C45.5227 76.2974 50.5035 81.2798 50.5051 87.4245Z"
                                        fill="#BB3A7D" />
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="202" height="202" fill="white" transform="translate(0.5 0.39209)" />
                                </clipPath>
                                <clipPath id="clip1">
                                    <rect width="202" height="202" fill="white" transform="translate(0 0.39209)" />
                                </clipPath>
                            </defs>
                        </svg>


                        <h1 class="text-blacks font-bold text-center mt-4 flex-wrap text-3xl"
                            style="line-height: 50px;min-height:6rem;max-height:6rem;overflow-hidden">
                            Affiliate
                            Partners
                        </h1>
                        <p class="text-center mt-4 text-sm text-blacks max-h-36 overflow-hidden"
                            style="font-weight: 600;line-height:25px;min-height:9rem">
                            Multiply Your Sales. Grow your
                            business with US. Know what. you
                            want. Know when. you want it.
                            Research your. potential provider.
                            Prioritise. compatibility.
                        </p>
                        <button class="rounded-full relative z-20 text-white text-md w-56 mt-4 py-2 bg-primary">
                            {{__('front.Affiliate Partner')}}
                        </button>
                    </div>
                </div>
                <div  data-aos="fade-up"  data-aos-duration="1000" class="col-span-12 md:col-span-3">
                    <div class=" p-4 flex flex-col justify-between items-center" style="border-radius:40px;">
                        <svg width="164" height="164" viewBox="0 0 202 203" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M188.365 193.148V198.526C188.365 200.66 186.633 202.392 184.499 202.392H17.5014C15.3669 202.392 13.6349 200.66 13.6349 198.526V193.148C13.6349 180.748 22.429 170.088 34.6082 167.728L43.6627 165.732L63.8391 161.29L83.1316 157.041H118.49L129.461 159.439L137.995 161.305L158.168 165.712L167.392 167.728C179.571 170.088 188.365 180.748 188.365 193.148Z"
                                    fill="#EF5DA8" />
                                <path
                                    d="M188.365 193.148V198.526C188.365 200.66 186.633 202.392 184.499 202.392H174.635C176.77 202.392 178.502 200.66 178.502 198.526V193.148C178.502 181.04 169.877 168.482 158.168 165.712L167.392 167.728C179.571 170.088 188.365 180.748 188.365 193.148Z"
                                    fill="#BB3A7D" />
                                <path d="M137.995 161.306V202.392H129.461V159.439L137.995 161.306Z" fill="#BB3A7D" />
                                <path d="M43.6628 187.009H158.168V202.392H43.6628V187.009Z" fill="#14ABA7" />
                                <path
                                    d="M59.09 96.6245C53.3468 96.6245 48.6712 90.976 48.6006 83.9526C48.5288 76.8061 53.2462 70.9658 59.09 70.9658L63.0353 83.7952L59.09 96.6245Z"
                                    fill="#FFAB8A" />
                                <path
                                    d="M142.93 96.6245C148.673 96.6245 153.348 90.976 153.419 83.9526C153.491 76.8061 148.773 70.9658 142.93 70.9658L138.984 83.7952L142.93 96.6245Z"
                                    fill="#FFAB8A" />
                                <path
                                    d="M118.174 156.409L118.489 157.041V157.743C118.489 167.492 110.559 175.418 100.81 175.418C96.1787 175.418 91.7994 173.643 88.4814 170.411C85.0332 167.054 83.1315 162.556 83.1315 157.743V157.041L83.4511 156.409C84.3072 154.713 84.8714 152.898 85.1318 151.016C85.2067 150.464 85.2541 149.911 85.2778 149.359C85.3646 147.11 85.0095 144.85 84.2323 142.735L81.8453 136.269H119.776L117.393 142.735C116.596 144.897 116.245 147.205 116.355 149.501C116.379 150.006 116.422 150.511 116.493 151.012C116.75 152.894 117.318 154.713 118.174 156.409Z"
                                    fill="#FFD9C0" />
                                <path
                                    d="M117.393 142.735C116.596 144.897 116.245 147.205 116.355 149.501C111.846 152.578 106.468 154.251 100.988 154.251H100.866C95.291 154.251 89.8306 152.527 85.2778 149.359C85.3646 147.11 85.0095 144.85 84.2323 142.735L81.8453 136.269H119.776L117.393 142.735Z"
                                    fill="#FFBCA1" />
                                <path
                                    d="M143.795 102.43C143.795 112.522 135.522 124.429 119.204 137.839C119.2 137.843 119.2 137.843 119.196 137.847C118.86 138.123 118.517 138.399 118.174 138.679C113.329 142.617 107.226 144.783 100.988 144.783H100.866C94.6087 144.783 88.4974 142.613 83.6446 138.663C66.6561 124.922 58.0396 112.727 58.0396 102.43C58.0396 101.286 58.0829 100.201 58.1737 99.2024C58.584 95.0164 58.7063 81.701 58.4617 68.2238C58.4538 67.9555 58.5564 67.703 58.7418 67.5137C58.9272 67.3243 59.1797 67.2178 59.4441 67.2178H59.448L135.348 67.2336H142.497C142.761 67.2336 143.014 67.3401 143.199 67.5255C143.385 67.7149 143.487 67.9713 143.483 68.2357C143.278 79.6258 143.203 94.5588 143.661 99.163C143.748 100.248 143.795 101.341 143.795 102.43Z"
                                    fill="#FFD9C0" />
                                <path
                                    d="M143.795 102.43C143.795 112.522 135.521 124.429 119.204 137.839C130.298 125.277 136.425 111.504 136.425 102.43C136.425 101.341 136.385 100.248 136.31 99.1628C135.936 94.5586 135.999 79.6256 136.165 68.2355C136.168 67.9712 136.086 67.7147 135.932 67.5254C135.778 67.3399 135.569 67.2334 135.348 67.2334H142.497C142.761 67.2334 143.014 67.3399 143.199 67.5254C143.384 67.7147 143.487 67.9712 143.483 68.2355C143.278 79.6256 143.203 94.5586 143.661 99.1628C143.747 100.248 143.795 101.341 143.795 102.43Z"
                                    fill="#FFBCA1" />
                                <path d="M63.8391 161.29V202.392H43.6628V165.732L63.8391 161.29Z" fill="#14ABA7" />
                                <path d="M158.167 165.712V202.392H137.995V161.305L149.634 163.846L158.167 165.712Z"
                                    fill="#14ABA7" />
                                <path
                                    d="M112.154 109.314C110.574 108.892 108.952 109.828 108.53 111.407C107.598 114.888 104.423 117.319 100.811 117.319C97.2002 117.319 94.0278 114.888 93.0955 111.407C92.6725 109.828 91.049 108.892 89.4717 109.314C87.8932 109.737 86.9562 111.36 87.3791 112.938C89.003 119.002 94.5264 123.237 100.811 123.237C107.097 123.237 112.622 119.002 114.246 112.938C114.669 111.36 113.732 109.737 112.154 109.314Z"
                                    fill="#FFAB8A" />
                                <path d="M158.168 165.712V202.392H149.634V163.846L158.168 165.712Z" fill="#4C7889" />
                                <path d="M43.6628 187.009H63.8391V202.392H43.6628V187.009Z" fill="#D4EFFF" />
                                <path d="M137.995 187.009H158.168V202.392H137.995V187.009Z" fill="#D4EFFF" />
                                <path d="M129.461 187.009H137.995V202.392H129.461V187.009Z" fill="#4C7889" />
                                <path d="M149.634 187.009H158.168V202.392H149.634V187.009Z" fill="#B7D4E2" />
                                <path
                                    d="M150.529 46.6982V62.1086C150.529 63.7459 149.208 65.0676 147.57 65.0676H54.2518C52.6185 65.0676 51.2928 63.7459 51.2928 62.1086V46.6982C51.2928 24.782 69.1257 6.95312 91.0458 6.95312H110.776C132.696 6.95312 150.529 24.782 150.529 46.6982Z"
                                    fill="#F178B6" />
                                <path
                                    d="M150.529 46.6982V62.1086C150.529 63.7459 149.208 65.0676 147.57 65.0676H140.031C141.333 65.0676 142.386 63.7459 142.386 62.1086V46.6982C142.386 24.782 128.207 6.95312 110.776 6.95312C132.696 6.95312 150.529 24.782 150.529 46.6982Z"
                                    fill="#BB3A7D" />
                                <path
                                    d="M150.529 46.6982V62.1086C150.529 63.7459 149.208 65.0676 147.57 65.0676H54.2518C52.6185 65.0676 51.2928 63.7459 51.2928 62.1086V46.6982H150.529Z"
                                    fill="#BB3A7D" />
                                <path
                                    d="M142.386 46.6982H150.529V62.1086C150.529 63.7459 149.208 65.0676 147.57 65.0676H140.031C141.333 65.0676 142.386 63.7459 142.386 62.1086V46.6982Z"
                                    fill="#BB3A7D" />
                                <path
                                    d="M110.67 3.35107V62.1086C110.67 63.7459 109.348 65.0676 107.711 65.0676H94.7231C93.0897 65.0676 91.7641 63.7459 91.7641 62.1086V3.35107C91.7641 1.71771 93.0897 0.39209 94.7231 0.39209H107.711C109.348 0.39209 110.67 1.71771 110.67 3.35107Z"
                                    fill="#BB3A7D" />
                                <path
                                    d="M110.67 46.6982V62.1086C110.67 63.7459 109.348 65.0676 107.711 65.0676H94.7231C93.0897 65.0676 91.7641 63.7459 91.7641 62.1086V46.6982H110.67Z"
                                    fill="#BB3A7D" />
                                <path
                                    d="M162.342 62.1089V67.3601C162.342 73.353 157.465 78.2294 151.468 78.2294H50.5315C44.5386 78.2294 39.6583 73.353 39.6583 67.3601V62.1089C39.6583 60.4755 40.9839 59.1499 42.6172 59.1499H159.383C161.016 59.1499 162.342 60.4755 162.342 62.1089Z"
                                    fill="#F178B6" />
                                <path
                                    d="M162.342 62.1089V67.3601C162.342 73.353 157.465 78.2294 151.468 78.2294H142.548C148.553 78.2294 153.421 73.3609 153.421 67.3601V62.1089C153.421 60.4755 152.096 59.1499 150.462 59.1499H159.383C161.016 59.1499 162.342 60.4755 162.342 62.1089Z"
                                    fill="#EF5DA8" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="202" height="202" fill="white" transform="translate(0 0.39209)" />
                                </clipPath>
                            </defs>
                        </svg>


                        <h1 class="text-blacks font-bold text-center mt-4 flex-wrap text-3xl"
                            style="line-height: 50px;min-height:6rem;max-height:6rem;overflow-hidden">
                            Workers
                        </h1>
                        <p class="text-center mt-4 text-sm text-blacks max-h-36 overflow-hidden"
                            style="font-weight: 600;line-height:25px;min-height:9rem">
                            Challenges To Match. Become a
                            worker and fit work around your life.
                            Plus great fees.
                        </p>
                        <button class="rounded-full relative z-20 text-white text-md w-56 mt-4 py-2 bg-primary">
                            {{__('front.Work with Us')}}
                        </button>
                    </div>
                </div>
                <div  data-aos="fade-up"  data-aos-duration="1000" class="col-span-12 md:col-span-3">
                    <div class=" p-4 flex flex-col justify-between items-center" style="border-radius:40px;">
                        <svg width="164" height="164" viewBox="0 0 203 203" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M82.0625 9.86084C79.5512 9.86084 77.1428 10.8584 75.3671 12.6342C73.5913 14.4099 72.5938 16.8183 72.5938 19.3296V25.6421H91.5312V19.3296C91.5312 16.8183 90.5337 14.4099 88.7579 12.6342C86.9822 10.8584 84.5738 9.86084 82.0625 9.86084Z"
                                    fill="#BB3A7D" />
                                <path
                                    d="M47.2416 126.642H116.883C121.879 126.642 126.67 128.627 130.202 132.159C133.734 135.691 135.719 140.482 135.719 145.477V192.923H28.4062V145.477C28.4062 140.482 30.3907 135.691 33.923 132.159C37.4553 128.627 42.2461 126.642 47.2416 126.642Z"
                                    fill="#EF5DA8" />
                                <path
                                    d="M56.7103 126.642H47.2416C42.2462 126.642 37.4554 128.627 33.9231 132.159C30.3908 135.691 28.4064 140.482 28.4062 145.477V192.923H37.875V145.477C37.8751 140.482 39.8596 135.691 43.3919 132.159C46.9241 128.627 51.7149 126.642 56.7103 126.642Z"
                                    fill="#BB3A7D" />
                                <path
                                    d="M179.906 132.955V114.719C179.906 112.859 179.167 111.074 177.852 109.759C176.536 108.444 174.752 107.705 172.892 107.705H142.733C140.873 107.705 139.089 108.444 137.773 109.759C136.458 111.074 135.719 112.859 135.719 114.719V132.955L123.094 148.736V192.923H192.531V148.736L179.906 132.955ZM145.188 117.173H170.438V123.486H145.188V117.173Z"
                                    fill="#14ABA7" />
                                <path
                                    d="M44.1875 47.7358H119.938V104.561C119.938 110.418 117.611 116.034 113.47 120.175C109.329 124.316 103.713 126.642 97.8568 126.642H66.2682C60.4121 126.642 54.7957 124.316 50.6548 120.175C46.5139 116.034 44.1875 110.418 44.1875 104.561V47.7358Z"
                                    fill="#FFD9C0" />
                                <path
                                    d="M110.482 120.33H78.8932C73.0371 120.33 67.4207 118.003 63.2798 113.862C59.1389 109.721 56.8125 104.105 56.8125 98.2489V47.7358H44.1875V104.561C44.1875 110.418 46.5139 116.034 50.6548 120.175C54.7957 124.316 60.4121 126.642 66.2682 126.642H97.8568C100.771 126.646 103.656 126.07 106.346 124.95C109.036 123.83 111.477 122.187 113.527 120.116C112.518 120.257 111.5 120.328 110.482 120.33Z"
                                    fill="#FFBCA1" />
                                <path
                                    d="M56.8338 22.4858H107.291C110.645 22.4858 113.862 23.8182 116.233 26.1899C118.605 28.5615 119.938 31.7781 119.938 35.1321V47.7358H44.1875V35.1321C44.1875 31.7781 45.5199 28.5615 47.8915 26.1899C50.2632 23.8182 53.4798 22.4858 56.8338 22.4858Z"
                                    fill="#BB3A7D" />
                                <path
                                    d="M69.4588 22.4858H56.8338C53.4798 22.4858 50.2632 23.8182 47.8915 26.1899C45.5199 28.5615 44.1875 31.7781 44.1875 35.1321V47.7358H56.8125V35.1321C56.8125 31.7781 58.1449 28.5615 60.5165 26.1899C62.8882 23.8182 66.1048 22.4858 69.4588 22.4858Z"
                                    fill="#14ABA7" />
                                <path
                                    d="M63.125 47.7358H120.082C123.392 47.7358 126.566 49.0508 128.907 51.3914C131.248 53.7321 132.562 56.9067 132.562 60.2168V60.3608H75.75C72.4016 60.3608 69.1904 59.0307 66.8228 56.6631C64.4551 54.2954 63.125 51.0842 63.125 47.7358Z"
                                    fill="#BB3A7D" />
                                <path
                                    d="M75.7796 22.4858H94.6579C96.3197 22.4858 97.9653 22.8132 99.5006 23.4491C101.036 24.0851 102.431 25.0172 103.606 26.1923C104.781 27.3674 105.713 28.7624 106.349 30.2977C106.985 31.8331 107.312 33.4786 107.312 35.1404V47.7358H63.125V35.1404C63.125 31.7842 64.4582 28.5655 66.8314 26.1923C69.2046 23.8191 72.4234 22.4858 75.7796 22.4858Z"
                                    fill="#E9F6FC" />
                                <path
                                    d="M104.156 126.642C104.156 131.665 102.161 136.481 98.6096 140.033C95.0581 143.584 90.2413 145.58 85.2188 145.58H78.9062C73.8837 145.58 69.0669 143.584 65.5154 140.033C61.9639 136.481 59.9688 131.665 59.9688 126.642H104.156Z"
                                    fill="#FCDDEC" />
                                <path
                                    d="M69.4375 126.642H59.9688C59.9687 131.665 61.9639 136.481 65.5154 140.033C69.0669 143.584 73.8837 145.58 78.9062 145.58H85.2188C85.7506 145.58 86.2761 145.552 86.7969 145.509C82.0647 145.114 77.6537 142.955 74.4384 139.46C71.223 135.966 69.4381 131.391 69.4375 126.642Z"
                                    fill="#BB3A7D" />
                                <path d="M78.9062 126.642H85.2188V192.923H78.9062V126.642Z" fill="#BB3A7D" />
                                <path d="M78.9062 126.642H85.2188V145.58H78.9062V126.642Z" fill="#BB3A7D" />
                                <path d="M192.531 192.923H167.281V148.736L179.906 132.955L192.531 148.736V192.923Z"
                                    fill="#107774" />
                                <path d="M179.906 132.955H135.719L123.094 148.736H167.281L179.906 132.955Z" fill="#FCDDEC" />
                                <path d="M47.3438 161.361H53.6562V192.923H47.3438V161.361Z" fill="#BB3A7D" />
                                <path d="M101 161.361H113.625V167.673H101V161.361Z" fill="#B6B6FF" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="202" height="202" fill="white" transform="translate(0.5 0.39209)" />
                                </clipPath>
                            </defs>
                        </svg>


                        <h1 class="text-blacks font-bold text-center mt-4 flex-wrap text-3xl"
                            style="line-height: 50px;min-height:6rem;max-height:6rem;overflow-hidden">
                            Riders
                        </h1>
                        <p class="text-center mt-4 text-sm text-blacks max-h-36 overflow-hidden"
                            style="font-weight: 600;line-height:25px;min-height:9rem">
                            Enjoy The Freedom. Be your own
                            boss. Flexible hours, competitive
                            incomes and the opportunity to get
                            to know your city delivering
                            outdoors.
                        </p>
                        <button class="rounded-full relative z-20 text-white text-md w-56 mt-4 py-2 bg-primary">
                            {{__('front.Ride with Us')}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


   
</div>
    <script>
        function setup() {
            return {
                activeTab: 1,
                tabs: [
                    "{{__('front.To Categories')}}",
                    "{{__('front.Our Partners')}}",
                    "{{__('front.Top Brands')}}",
                    "{{__('front.Providers')}}",
                ]
            };
        };

    </script>

    
@endsection

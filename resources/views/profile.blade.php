@extends('master')
@section('content')


<section class="section section--head">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6">
                <h1 class="section__title section__title--head">Profile</h1>
            </div>

            <div class="col-12 col-xl-6">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb__item breadcrumb__item--active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end head -->

<!-- profile -->
<div class="catalog catalog--page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="profile">
                    <div class="profile__user">
                        <div class="profile__avatar">
                            <img src="{{asset('assets/main/img/avatar.svg')}}" alt="">
                        </div>
                        <div class="profile__meta">
                            <h3>{{Auth::user()->name}}</h3>
                            <span>{{Auth::user()->email}}</span>
                        </div>
                    </div>

                    <!-- tabs nav -->
                    <ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="true" style="color: white !important">Profile</a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="false" style="color: white !important">Your Bookings</a>
                        </li>
                    </ul>
                    <!-- end tabs nav -->

                    <a class="profile__logout" href="{{ url('logout') }}" type="button">
                        <span>Sign out</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- content tabs -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-3" role="tabpanel">
                <div class="row">
                    <div class="col-12">
                        <div class="sign__wrap">
                            <div class="row">
                                <!-- details form -->
                                <div class="col-12 col-lg-6">
                                    <form action="#" class="sign__form sign__form--profile sign__form--first">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="sign__title">Profile details</h4>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="username">Login</label>
                                                    <input id="username" type="text" name="username" class="sign__input" placeholder="User123">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="email">Email</label>
                                                    <input id="email" type="text" name="email" class="sign__input" placeholder="email@email.com">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="firstname">First name</label>
                                                    <input id="firstname" type="text" name="firstname" class="sign__input" placeholder="John">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="lastname">Last name</label>
                                                    <input id="lastname" type="text" name="lastname" class="sign__input" placeholder="Doe">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="sign__btn" type="button">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end details form -->

                                <!-- password form -->
                                <div class="col-12 col-lg-6">
                                    <form action="#" class="sign__form sign__form--profile">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="sign__title">Change password</h4>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="oldpass">Old password</label>
                                                    <input id="oldpass" type="password" name="oldpass" class="sign__input">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="newpass">New password</label>
                                                    <input id="newpass" type="password" name="newpass" class="sign__input">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="confirmpass">Confirm new password</label>
                                                    <input id="confirmpass" type="password" name="confirmpass" class="sign__input">
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="select">Select</label>
                                                    <select name="select" id="select" class="sign__select">
                                                        <option value="0">Option</option>
                                                        <option value="1">Option 2</option>
                                                        <option value="2">Option 3</option>
                                                        <option value="3">Option 4</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="sign__btn" type="button">Change</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end password form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade " id="tab-1" role="tabpanel">
                <div class="row row--grid">


                    @if($bookings->isEmpty())
                    <div class="dashbox__title" style="justify-content: center; text-align:center;">
                        <h3>No Booking found</h3>
                    </div>
                    @else
                    @foreach($bookings as $booking)
                    <div class="col-12 col-xl-6">
                        <div class="booking-box">
                            <div class="booking-header">
                                <h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M21,2a1,1,0,0,0-1,1V5H18V3a1,1,0,0,0-2,0V4H8V3A1,1,0,0,0,6,3V5H4V3A1,1,0,0,0,2,3V21a1,1,0,0,0,2,0V19H6v2a1,1,0,0,0,2,0V20h8v1a1,1,0,0,0,2,0V19h2v2a1,1,0,0,0,2,0V3A1,1,0,0,0,21,2ZM6,17H4V15H6Zm0-4H4V11H6ZM6,9H4V7H6Zm10,9H8V13h8Zm0-7H8V6h8Zm4,6H18V15h2Zm0-4H18V11h2Zm0-4H18V7h2Z" />
                                    </svg>
                                    Booking Details
                                </h3>
                            </div>
                            <div class="booking-content">
                                <div class="booking-item">
                                    <span class="booking-label">Movie:</span>
                                    <span class="booking-value">{{$booking->movie}}</span>
                                </div>
                                <div class="booking-item">
                                    <span class="booking-label">Theater:</span>
                                    <span class="booking-value">{{$booking->theater}}</span>
                                </div>
                                <div class="booking-item">
                                    <span class="booking-label">Time:</span>
                                    <span class="booking-value">{{$booking->time}}</span>
                                </div>
                                <div class="booking-item">
                                    <span class="booking-label">Date:</span>
                                    <span class="booking-value">{{$booking->date}}</span>
                                </div>
                                <div class="booking-item">
                                    <span class="booking-label">Token:</span>
                                    <span class="booking-value">{{$booking->booking_number}}</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    @endforeach
                    @endif

                    <!-- end dashbox -->

                    <!-- dashbox -->

                    <!-- end dashbox -->
                </div>
            </div>




        </div>
        <!-- end content tabs -->
    </div>
</div>
<!-- end profile -->

<!-- partners -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partners owl-carousel">
                    <a href="#" class="partners__img">
                        <img src="{{asset('assets/main/img/partners/3docean-light-background.png')}}" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="{{asset('assets/main/img/partners/activeden-light-background.png')}}" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="{{asset('assets/main/img/partners/audiojungle-light-background.png')}}" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="{{asset('assets/main/img/partners/codecanyon-light-background.png')}}" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="{{asset('assets/main/img/partners/photodune-light-background.png')}}" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="{{asset('assets/main/img/partners/themeforest-light-background.png')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end partners -->
@endsection
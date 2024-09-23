<!-- Include CSRF Token -->
@extends('master');
@section('content')

    {{-- <div class="container">
        <div class="row">
            <div class="offset-lg-12 col-lg-12">
                <div class="sign__content">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form action="{{ url('booking-store') }}" class="sign__form">

                        <div class="sign__group">
                            <input type="text" class="sign__input" placeholder="Name">
                        </div>

                        <div class="sign__group">
                            <input type="text" class="sign__input" placeholder="Email">
                        </div>

                        <div class="sign__group">
                            <input type="password" class="sign__input" placeholder="Password">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="sign__group">
                                        <label for="">Name</label>
                                        <input class="sign__input" name="name" required="" type="text" placeholder="Enter your Name">
                                    </div>
                                    <div class="sign__group">
                                        <label for="">Contact No</label>
                                        <input class="sign__input" required="" type="number" name="contact" placeholder="Enter your Number">
                                    </div>
                                    <div class="sign__group">
                                        <label for="theaterSelect">Theater</label>
                                        <select class="me-sm-2 default-select sign__input wide" name="theater" id="theaterSelect">
                                            <option selected>Choose...</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="sign__group">
                                        <label for="">Email</label>
                                        <input class="sign__input" required="" type="email" name="email" placeholder="Enter your Email">
                                    </div>

                                    <div class="sign__group">
                                        <label for="quantity">No of ticket (1 to 20):</label>
                                        <input type="number" class="sign__input" id="quantity" name="quantity" min="1" max="20" value="1">
                                    </div>

                                    <div class="sign__group">
                                        <label for="showDateSelect">Show Date</label>
                                        <select class="sign__input" name="show_date" id="showDateSelect" disabled>
                                            <option selected>Choose...</option>

                                        </select>
                                    </div>
                                    <div class="sign__group">
                                        <label for="class">Class:</label>
                                        <select id="class" name="class" class="me-sm-2 default-select sign__input wide">
                                            <option value="Regular">Regular</option>
                                            <option value="Premium">Premium</option>
                                            <option value="Gold">Gold</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="sign__group">
                                        <label for="age-range">Age Range:</label>
                                        <select id="age-range" name="age_range" class="me-sm-2 default-select sign__input wide">
                                            <option value="">Select Age Range</option>
                                            <option value="3-12">3-12</option>
                                            <option value="13-19">13-19</option>
                                            <option value="20-33">20-33</option>
                                            <option value="34-45">34-45</option>
                                        </select>
                                    </div>
                                    <div class="sign__group">
                                        <label for="movieSelect">Movie</label>
                                        <select class="me-sm-2 default-select sign__input wide" name="movie" id="movieSelect">
                                            <option >Choose...</option>
                                            @foreach ($movies as $movie)
                                            <option value="{{ $movie->id }}">{{ $movie->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>



                                    <div class="form-group">
                                        <label for="showTimeSelect">Show Time</label>
                                        <select class="sign__input" name="show_time" id="showTimeSelect" disabled>
                                            <option selected>Choose...</option> --}}
                                            <!-- Options will be dynamically populated via JavaScript -->
                                        {{-- </select>
                                    </div>
                                </div>
                                <div class="price-container" id="price-display">
                                    Total Price: <span id="price">$0.00</span>
                                </div>
                                


                                <meta name="csrf-token" content="{{ csrf_token() }}">

                            </div>

                        </div>

                        
                    </form> --}}
                    <!-- registration form -->
                {{-- </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- end sign in -->

<div class="content-body default-height">
    <h1 class="book">Booking</h1>
    {{-- <div class="container-fluid">
        <div class="zmovo-breadcroumb-area">
            <div class="zmovo-breadcroumb-bg">
                <div class="container">
                    <div class="zmovo-breadcroumb-inner text-center">
                        <h2>Booking</h2>
                        <span>Booking</span>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="zmovo-inner-page">
            <div class="zmovo-login-page">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-12 col-lg-12">
                            <div class="zmovo-page-login mt-50">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <form action="{{ url('booking-store') }}">
                                    <div class="zmovo-login-input-top">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Name</label>
                                                        <input class="sign__input" name="name" required="" type="text" placeholder="Enter your Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Contact No</label>
                                                        <input class="sign__input" required="" type="number" required name="contact" placeholder="Enter your Number">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="theaterSelect">Theater</label>
                                                        <select class="me-sm-2 default-select sign__input wide" required name="theater" id="theaterSelect">
                                                            <option selected>Choose...</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="class">Class:</label>
                                                        <select id="class" name="class" required class="me-sm-2 default-select sign__input wide">
                                                            <option value="Regular">Regular</option>
                                                            <option value="Premium">Premium</option>
                                                            <option value="Gold">Gold</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input class="sign__input" required="" type="email" name="email" placeholder="Enter your Email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="quantity">No of ticket (1 to 20):</label>
                                                        <input type="number" class="sign__input" id="quantity" name="quantity" min="1" max="20" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="showDateSelect">Show Date</label>
                                                        <select class="sign__input" required name="show_date" id="showDateSelect" disabled>
                                                            <option selected>Choose...</option>

                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="age-range">Age Range:</label>
                                                        <select id="age-range" required name="age_range" class="me-sm-2 default-select sign__input wide">
                                                            <option value="">Select Age Range</option>
                                                            <option value="3-12">3-12</option>
                                                            <option value="13-19">13-19</option>
                                                            <option value="20-33">20-33</option>
                                                            <option value="34-45">34-45</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="movieSelect">Movie</label>
                                                        <select class="me-sm-2 default-select sign__input wide" required name="movie" id="movieSelect">
                                                        <option value="" selected disabled>Select Movie</option>
                                                           
                                                        <option value="{{$movies->id}}">
                                                                {{$movies->name}}
                                                           </option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="showTimeSelect">Show Time</label>
                                                        <select class="sign__input" name="show_time" id="showTimeSelect" required disabled>
                                                            <option selected>Choose...</option>
                                                            <!-- Options will be dynamically populated via JavaScript -->
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="price-container" id="price-display">
                                                    Total Price: <span id="price">$0.00</span>
                                                </div>
                                                


                                                <meta name="csrf-token" content="{{ csrf_token() }}">

                                            </div>

                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- movie feeture -->
        <!-- plan -->
<section class="section section--pb0 section--gradient">
    <div class="container">
        <div class="row">
            {{-- <div class="col-12">
                <h2 class="section__title">Select Your Plan</h2>
                <p class="section__text">No hidden fees, equipment rentals, or installation appointments.</p>
            </div> --}}
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-xl-4 order-md-2 order-xl-1">
                <div class="plan">
                    <h3 class="plan__title">Regular</h3>
                    <ul class="plan__list">
                        <li class="green"><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Standard seating</li>
                        <li class="green"><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Affordable pricing</li>
                            <li class="green"><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Clear and unobstructed view</li>
                    </ul>
                    <span class="plan__price">$10 <span>/per ticket</span></span>
                    {{-- <button class="plan__btn" type="button">Select plan</button> --}}
                </div>
            </div>

            <div class="col-12 col-xl-4 order-md-1 order-xl-2">
                <div class="plan plan--best">
                    <h3 class="plan__title">Premium</h3>
                    <ul class="plan__list">
                        <li class="green"><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Reclining seats</li>
                        <li class="green"><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Extra legroom</li>
                        <li class="green"><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Food and beverage service</li>
                    </ul>
                    <span class="plan__price">$15<span>/per ticket</span></span>
                    {{-- <button class="plan__btn" type="button">Select plan</button> --}}
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4 order-md-3 order-xl-3">
                <div class="plan">
                    <h3 class="plan__title">Gold</h3>
                    <ul class="plan__list">
                        <li class="green"><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Fully reclining seats with pillows</li>
                        <li class="green"><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Exclusive lounge access</li>
                        <li class="green"><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> High-quality food options</li>
                    </ul>
                    <span class="plan__price">$25<span>/per ticket</span></span>
                    {{-- <button class="plan__btn" type="button">Select plan</button> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end plan -->
        {{-- <div class="zmovo-trailor-info pt-30 ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="zmovo-trailor-contents">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-11">

                                    <div class="zmovo-trailor-story">
                                        <h2 style="margin-bottom: 40px;">Seat Classes & Features</h2>
                                        <div class="zmovo-trailor-dec">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h3 style="margin-bottom: 15px;">Regular Class</h3>
                                                    <h4 style="margin-bottom: 8px;">Features :</h4>
                                                    <ul style=" list-style: circle; padding-left: 17px;">
                                                        <li>Standard seating</li>
                                                        <li>Affordable pricing</li>
                                                        <li>Clear and unobstructed view</li>
                                                        <li>Price: $10 per ticket</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <h3 style="margin-bottom: 15px;">Premium Class</h3>
                                                    <h4 style="margin-bottom: 8px;">Features :</h4>
                                                    <ul style=" list-style: circle; padding-left: 17px;">
                                                        <li>Reclining seats</li>
                                                        <li>Extra legroom</li>
                                                        <li>Food and beverage service</li>
                                                        <li>Price: $15 per ticket</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <h3 style="margin-bottom: 15px;">Gold Class</h3>
                                                    <h4 style="margin-bottom: 8px;">Features :</h4>
                                                    <ul style=" list-style: circle; padding-left: 17px;">
                                                        <li>Fully reclining seats with pillows</li>
                                                        <li>Exclusive lounge access</li>
                                                        <li>High-quality food options</li>
                                                        <li>Price: $25 per ticket</li>
                                                    </ul>
                                                </div>


                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        console.log("Document is ready!");

        $('#movieSelect').on('change', function() {
            // alert()
            var movieId = $(this).val();
            console.log("Movie selected:", movieId);

            if (movieId) {
                $.ajax({
                    url: '/getTheaters/' + movieId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log("AJAX success:", data);
                        $('#theaterSelect').empty();
                        $('#theaterSelect').append('<option selected>Choose...</option>');
                        $.each(data, function(key, value) {
                            $('#theaterSelect').append('<option value="' + key + '">' + value + '</option>');
                        });
                        $('#theaterSelect').prop('disabled', false);
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error:", status, error);
                    }
                });
            } else {
                $('#theaterSelect').empty();
                $('#theaterSelect').append('<option selected>Choose...</option>');
                $('#theaterSelect').prop('disabled', true);
            }
            $('#showDateSelect').empty().append('<option selected>Choose...</option>').prop('disabled', true);
            $('#showTimeSelect').empty().append('<option selected>Choose...</option>').prop('disabled', true);
        });

        $('#theaterSelect').on('change', function() {
            var movieId = $('#movieSelect').val();
            var theaterId = $(this).val();
            console.log("Theater selected:", theaterId);

            if (movieId && theaterId) {
                $.ajax({
                    url: '/getShowDates/' + movieId + '/' + theaterId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log("AJAX success:", data);
                        $('#showDateSelect').empty();
                        $('#showDateSelect').append('<option selected>Choose...</option>');
                        $.each(data, function(index, value) {
                            $('#showDateSelect').append('<option value="' + value + '">' + value + '</option>');
                        });
                        $('#showDateSelect').prop('disabled', false);
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error:", status, error);
                    }
                });
            } else {
                $('#showDateSelect').empty();
                $('#showDateSelect').append('<option selected>Choose...</option>');
                $('#showDateSelect').prop('disabled', true);
            }
            $('#showTimeSelect').empty().append('<option selected>Choose...</option>').prop('disabled', true);
        });

        $('#showDateSelect').on('change', function() {
            var movieId = $('#movieSelect').val();
            var theaterId = $('#theaterSelect').val();
            var showDate = $(this).val();
            console.log("Show date selected:", showDate);

            if (movieId && theaterId && showDate) {
                $.ajax({
                    url: '/getShowTimes/' + movieId + '/' + theaterId + '/' + showDate,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log("AJAX success:", data);
                        $('#showTimeSelect').empty();
                        $('#showTimeSelect').append('<option selected>Choose...</option>');
                        $.each(data, function(index, value) {
                            $('#showTimeSelect').append('<option value="' + value + '">' + value + '</option>');
                        });
                        $('#showTimeSelect').prop('disabled', false);
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error:", status, error);
                    }
                });
            } else {
                $('#showTimeSelect').empty();
                $('#showTimeSelect').append('<option selected>Choose...</option>');
                $('#showTimeSelect').prop('disabled', true);
            }
        });
    });
    $(document).ready(function() {
        $('#age-range').change(function() {
            var ageRange = $(this).val();
            if (ageRange) {
                $.ajax({
                    url: '/get-price',
                    method: 'POST',
                    data: {
                        ageRange: ageRange,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#price-display').text('Price: ' + response.price);
                    }
                });
            } else {
                $('#price-display').text('Price: ');
            }
        });
    });
    $(document).ready(function() {
        function updatePrice() {
            var ageRange = $('#age-range').val();
            var selectedClass = $('#class').val();
            var quantity = $('#quantity').val();

            if (ageRange && selectedClass && quantity) {
                $.ajax({
                    url: '/get-price',
                    method: 'POST',
                    data: {
                        ageRange: ageRange,
                        class: selectedClass,
                        quantity: quantity,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#price-display').text('Total Price: ' + response.totalPrice);
                    }
                });
            } else {
                $('#price-display').text('Total Price: ');
            }
        }

        $('#age-range, #class, #quantity').change(updatePrice);
    });
</script>
@endsection
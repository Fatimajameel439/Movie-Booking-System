<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mediqu.dexignzone.com/xhtml/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jun 2024 05:10:07 GMT -->

<head>
    <!-- Title -->
    <title>FlixTV – Admin Dashboard</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">

    <meta name="keywords"
        content="admin dashboard, admin template, administration, analytics, bootstrap, disease, doctor, elegant, health, hospital admin, medical dashboard, modern, responsive admin dashboard">
    <meta name="description"
        content="Mediqu. is a Fully Mobile Responsive Admin Dashboard Templates for Hospitals dentists, doctors, surgeons, hospitals, health clinics, pediatrics, psychiatrist, psychiatry, stomatology, chiropractor, veterinary clinics. This minimal template is being packed with tons of features like Dashboard Pages, Elements pages, Shop/Store Pages, Product Pages, All Inner Pages with Total 70+ HTML Files. Mediqu. is designed for especially Mobile devices and all types of modern browsers.">

    <meta property="og:title" content="Mediqu  - Hospital Admin Dashboard Bootstrap Template">
    <meta property="og:description"
        content="Mediqu. is a Fully Mobile Responsive Admin Dashboard Templates for Hospitals dentists, doctors, surgeons, hospitals, health clinics, pediatrics, psychiatrist, psychiatry, stomatology, chiropractor, veterinary clinics. This minimal template is being packed with tons of features like Dashboard Pages, Elements pages, Shop/Store Pages, Product Pages, All Inner Pages with Total 70+ HTML Files. Mediqu. is designed for especially Mobile devices and all types of modern browsers.">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/main/img/favicon-32x32.png')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">
    <link href="{{asset('assets/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <!-- Datatable -->
    <link href="{{asset('assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
	
     {{-- <link class="main-css" href="{{asset('assets/css/style.css')}}" rel="stylesheet"> --}}
    <link rel="stylesheet"  href="{{asset('assets/css/style.css')}}">
    <link href="{{asset('assets/../../cdn.lineicons.com/2.0/LineIcons.css')}}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">

<style>
	.single-comment {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            padding: 15px;
            background-color: #f9f9f9;
            list-style: none;
        }

        /* Body of the comment */
        .comment-body {
            display: flex;
            flex-direction: column;
        }

        /* Header of the comment */
        .comment-header {
            margin-bottom: 10px;
        }

        /* Title of the comment (e.g., user's name) */
        .comment-title {
            font-size: 1.2em;
            font-weight: bold;
            margin: 0;
        }

        /* Content of the comment */
        .comment-content p {
            margin: 10px ;
            font-size:0.7em;
            line-height: 1.5;
        }

        /* Time of the comment */
        .comment-time {
            font-size: 0.8em;
            color: #666;
            margin-right: 10px;
        }

        /* Reply box for the comment */
        .blog-details-reply-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
			text-decoration: none;
			
        }
		.comment-email{
			font-size: 0.8em;
            color: #766;
            margin-right: 10px;
		}

        /* Reply and Repost links */
        .comment-reply a {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }

        .comment-reply a:hover {
            text-decoration: underline;
        }
</style>
	

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{url('admin/dashboard')}}" class="brand-logo">
                <h1>Movie</h1>
                {{-- <img class="logo-abbr" src="{{asset('assets/images/logo.png')}}" alt="">
                <img class="logo-compact" src="{{asset('assets/images/logo-text.png')}}" alt="">
                <img class="brand-title" src="{{asset('assets/images/logo-text.png')}}" alt=""> --}}
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/3.jpg')}}" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/4.jpg')}}" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/5.jpg')}}" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/3.jpg')}}" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/4.jpg')}}" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/5.jpg')}}" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/3.jpg')}}" class="rounded-circle user_img" alt="">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/4.jpg')}}" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="{{asset('assets/images/avatar/5.jpg')}}" class="rounded-circle user_img" alt="">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="#" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="#" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2021</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fas fa-trash-alt"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2021</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fas fa-trash-alt"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2021</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fas fa-trash-alt"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2021</p>
											</div>
											<div class="ms-auto">
												<a href="#" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fas fa-trash-alt"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
                                    <i id="icon-light" class="fas fa-sun"></i>
                                    <i id="icon-dark" class="fas fa-moon"></i>

                                </a>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link dz-fullscreen" href="javascript:void(0);">
                                    <svg id="icon-full" viewBox="0 0 24 24" width="26" height="26"
                                        stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" class="css-i6dzq1">
                                        <path
                                            d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                        </path>
                                    </svg>
                                    <svg id="icon-minimize" width="26" height="26" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-minimize">
                                        <path
                                            d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="javascript:void(0);">
                                    <i class="flaticon-381-pad"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0);" role="button"
                                    data-bs-toggle="dropdown">
                                    <i class="flaticon-381-ring"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3"
                                        style="height:380px;">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="{{asset('assets/images/avatar/1.jpg')}}">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2021 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-info">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2021 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-success">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2021 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="{{asset('assets/images/avatar/1.jpg')}}">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                        <small class="d-block">29 July 2021 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-danger">
                                                        KG
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Resport created successfully</h6>
                                                        <small class="d-block">29 July 2021 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-primary">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                        <small class="d-block">29 July 2021 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="javascript:void(0);">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button"
                                    data-bs-toggle="dropdown">
                                    <div class="header-info">
                                        <span>{{Auth::user()->name}}</span>
                                        <small>ADMIN</small>
                                    </div>
                                    <img src="{{asset('assets/images/profile/pic1.jpg')}}" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{asset('assets/movie/app-profile.html')}}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="{{asset('assets/movie/email-inbox.html')}}" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ms-2">Inbox </span>
                                    </a>
                                    <a href="{{asset('assets/movie/page-login.html')}}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12">
                                            </line>
                                        </svg>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets/movie/index.html')}}">Dashboard Light</a></li>
                            <li><a href="{{asset('assets/movie/index-2.html')}}">Dashboard Dark</a></li>
                            <li><a href="{{asset('assets/movie/doctors.html')}}">Doctors</a></li>
                            <li><a href="{{asset('assets/movie/doctors-details.html')}}">Doctors Details</a></li>
                            <li><a href="{{asset('assets/movie/doctors-review.html')}}">Doctors Review</a></li>
                            <li><a href="{{asset('assets/movie/patient-details.html')}}">Patient Details</a></li>
                        </ul>

                    </li> --}}
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-television"></i>
                            <span class="nav-text">Apps</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets/movie/app-profile.html')}}">Profile</a></li>
                            <li><a href="{{asset('assets/movie/edit-profile.html')}}">Edit Profile<span
                                        class="badge badge-danger badge-xs ms-1">NEW</span></a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{asset('assets/movie/email-compose.html')}}">Compose</a></li>
                                    <li><a href="{{asset('assets/movie/email-inbox.html')}}">Inbox</a></li>
                                    <li><a href="{{asset('assets/movie/email-read.html')}}">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="{{asset('assets/movie/app-calender.html')}}">Calendar</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{asset('assets/movie/ecom-product-grid.html')}}">Product Grid</a></li>
                                    <li><a href="{{asset('assets/movie/ecom-product-list.html')}}">Product List</a></li>
                                    <li><a href="{{asset('assets/movie/ecom-product-detail.html')}}">Product Details</a></li>
                                    <li><a href="{{asset('assets/movie/ecom-product-order.html')}}">Order</a></li>
                                    <li><a href="{{asset('assets/movie/ecom-checkout.html')}}">Checkout</a></li>
                                    <li><a href="{{asset('assets/movie/ecom-invoice.html')}}">Invoice</a></li>
                                    <li><a href="{{asset('assets/movie/ecom-customers.html')}}">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li><a class="ai-icon" href="{{asset('assets/movie/flat-icons.html')}}" aria-expanded="false">
                            <i class="flaticon-381-file"></i>
                            <span class="nav-text">Flat Icons<span
                                    class="badge badge-danger badge-xs ms-1">NEW</span></span>

                        </a>

                    </li> --}}
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-database-1"></i>
                            <span class="nav-text">CMS<span class="badge badge-danger badge-xs ms-1">NEW</span></span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets/movie/content.html')}}">Content</a></li>
                            <li><a href="{{asset('assets/movie/menu.html')}}">Menus</a></li>
                            <li><a href="{{asset('assets/movie/email-template.html')}}">Email Template</a></li>
                            <li><a href="{{asset('assets/movie/blog.html')}}">Blog</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-controls-3"></i>
                            <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets/movie/chart-flot.html')}}">Flot</a></li>
                            <li><a href="{{asset('assets/movie/chart-morris.html')}}">Morris</a></li>
                            <li><a href="{{asset('assets/movie/chart-chartjs.html')}}">Chartjs</a></li>
                            <li><a href="{{asset('assets/movie/chart-chartist.html')}}">Chartist</a></li>
                            <li><a href="{{asset('assets/movie/chart-sparkline.html')}}">Sparkline</a></li>
                            <li><a href="{{asset('assets/movie/chart-peity.html')}}">Peity</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-internet"></i>
                            <span class="nav-text">Bootstrap</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets/movie/ui-accordion.html')}}">Accordion</a></li>
                            <li><a href="{{asset('assets/movie/ui-alert.html')}}">Alert</a></li>
                            <li><a href="{{asset('assets/movie/ui-badge.html')}}">Badge</a></li>
                            <li><a href="{{asset('assets/movie/ui-button.html')}}">Button</a></li>
                            <li><a href="{{asset('assets/movie/ui-modal.html')}}">Modal</a></li>
                            <li><a href="{{asset('assets/movie/ui-button-group.html')}}">Button Group</a></li>
                            <li><a href="{{asset('assets/movie/ui-list-group.html')}}">List Group</a></li>
                            <li><a href="{{asset('assets/movie/ui-media-object.html')}}">Media Object</a></li>
                            <li><a href="{{asset('assets/movie/ui-card.html')}}">Cards</a></li>
                            <li><a href="{{asset('assets/movie/ui-carousel.html')}}">Carousel</a></li>
                            <li><a href="{{asset('assets/movie/ui-dropdown.html')}}">Dropdown</a></li>
                            <li><a href="{{asset('assets/movie/ui-popover.html')}}">Popover</a></li>
                            <li><a href="{{asset('assets/movie/ui-progressbar.html')}}">Progressbar</a></li>
                            <li><a href="{{asset('assets/movie/ui-tab.html')}}">Tab</a></li>
                            <li><a href="{{asset('assets/movie/ui-typography.html')}}">Typography</a></li>
                            <li><a href="{{asset('assets/movie/ui-pagination.html')}}">Pagination</a></li>
                            <li><a href="{{asset('assets/movie/ui-grid.html')}}">Grid</a></li>

                        </ul>
                    </li> --}}
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-heart"></i>
                            <span class="nav-text">Plugins</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets/movie/uc-select2.html')}}">Select 2</a></li>
                            <li><a href="{{asset('assets/movie/uc-nestable.html')}}">Nestedable</a></li>
                            <li><a href="{{asset('assets/movie/uc-noui-slider.html')}}">Noui Slider</a></li>
                            <li><a href="{{asset('assets/movie/uc-sweetalert.html')}}">Sweet Alert</a></li>
                            <li><a href="{{asset('assets/movie/uc-toastr.html')}}">Toastr</a></li>
                            <li><a href="{{asset('assets/movie/map-jqvmap.html')}}">Jqv Map</a></li>
                            <li><a href="{{asset('assets/movie/uc-lightgallery.html')}}">Light Gallery</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{ url('admin/users') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-settings-2"></i>
                            <span class="nav-text">Users</span>
                        </a>
                    </li>
                    <li><a href="{{ url('admin/show-theater') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Theaters</span>
                    </a>
                </li>
                    <li><a href="{{ url('admin/show-movie') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Movies</span>
                    </a>
                </li>
                </li>
                    <li><a href="{{ url('admin/show-showtime') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Date/Time</span>
                    </a>
                </li>
                </li>
                    <li><a href="{{ url('admin/show-bookings') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Bookings</span>
                    </a>
                </li>
                </li>
                    <li><a href="{{ url('admin/show-contacts') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Contact Message</span>
                    </a>
                </li>
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>
                            <span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets/movie/form-element.html')}}">Form Elements</a></li>
                            <li><a href="{{asset('assets/movie/form-wizard.html')}}">Wizard</a></li>
                            <li><a href="{{asset('assets/movie/editor.html')}}">Editor</a></li>
                            <li><a href="{{asset('assets/movie/form-pickers.html')}}">Pickers</a></li>
                            <li><a href="{{asset('assets/movie/form-validation-jquery.html')}}">Jquery Validate</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-network"></i>
                            <span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets/movie/table-bootstrap-basic.html')}}">Bootstrap</a></li>
                            <li><a href="{{asset('assets/movie/table-datatable-basic.html')}}">Datatable</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-layer-1"></i>
                            <span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets/movie/page-register.html')}}">Register</a></li>
                            <li><a href="{{asset('assets/movie/page-login.html')}}">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{asset('assets/movie/page-error-400.html')}}">Error 400</a></li>
                                    <li><a href="{{asset('assets/movie/page-error-403.html')}}">Error 403</a></li>
                                    <li><a href="{{asset('assets/movie/page-error-404.html')}}">Error 404</a></li>
                                    <li><a href="{{asset('assets/movie/page-error-500.html')}}">Error 500</a></li>
                                    <li><a href="{{asset('assets/movie/page-error-503.html')}}">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="{{asset('assets/movie/page-lock-screen.html')}}">Lock Screen</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->




        @yield('content')





        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/"
                        target="_blank">DexignZone</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <!-- Apex Chart -->
    <script src="{{asset('assets/vendor/apexchart/apexchart.js')}}"></script>

    <!-- Dashboard 1 -->
    <script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins-init/datatables.init.js')}}"></script>

    <script src="{{asset('assets/js/dashboard/dashboard-1.js')}}"></script>
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/js/deznav-init.js')}}"></script>
    <script src="{{asset('assets/js/demo.js')}}"></script>
    <script src="{{asset('assets/js/styleSwitcher.js')}}"></script>

    <script>
        jQuery(document).ready(function() {
            setTimeout(function() {
                dezSettingsOptions.version = 'dark';
                new dezSettings(dezSettingsOptions);
            }, 1000)
            jQuery(window).on('resize', function() {
                dezSettingsOptions.version = 'dark';
                new dezSettings(dezSettingsOptions);
                jQuery('.dz-theme-mode').addClass('active');
            });
        });
    </script>


</body>

<!-- Mirrored from mediqu.dexignzone.com/xhtml/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jun 2024 05:10:52 GMT -->

</html>

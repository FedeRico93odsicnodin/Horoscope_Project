<!DOCTYPE html>
<?php>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profile</title>
        <!-- Bootstrap 4 Default CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        crossorigin="anonymous"></script>
        <script src="{{ url('js/custom_carousel.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ url('css/styles.css') }}" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ url('css/custom_styles.css') }}" rel="stylesheet" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="{{ url('css/custom_carousel.css') }}" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Animate CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         

    </head>
    <body>

        <video autoplay muted loop id="background_Vid">
            <source src="{{ url('data/bkg_video_horoscope_onprofile.mp4') }}" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
          <div class="content_onBkg_2">
          <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <button onclick="myFunction()" class="customButton" text="+"></button>
            <div class="content_onBkg" id="myDIV">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">Log Out</a>
                
            </div>
            
                <div >
                    <center>
                    <a href="#aboutModal" data-toggle="modal" data-target="#myModal">
                        @if(session()->get('loggedUser') ->SubscriptionType_ID == 3)
                        <img src="{{ url('data/accounts/developer.jpg') }}" name="aboutme" width="140" height="140" class="img-circle"></a>
                        @elseif(session()->get('loggedUser') ->SubscriptionType_ID == 2)
                        <img src="{{ url('data/accounts/premium.jpg') }}" name="aboutme" width="140" height="140" class="img-circle"></a>
                        @elseif(session()->get('loggedUser') ->SubscriptionType_ID == 1)
                        <img src="{{ url('data/accounts/standard_2.jpg') }}" name="aboutme" width="140" height="140" class="img-circle"></a>
                        @endif
                        
                        
                    <h3 class="text-white font-weight-bold">{{ 
                        session()->get('loggedUser') ->Name
                         }} </h3>
                    <h3 class="text-white font-weight-bold">{{ 
                        
                        session()->get('loggedUser') ->Surname }}</h3>
                    @if(session()->get('loggedUser') ->SubscriptionType_ID == 3)
                    <p class="text-white small">(Developer)<p>
                        @elseif(session()->get('loggedUser') ->SubscriptionType_ID == 2)
                        <p class="text-white small">(Premium)<p>
                        @elseif(session()->get('loggedUser') ->SubscriptionType_ID == 1)
                        <p class="text-white small">(Standard)<p>
                    @endif
                    <em class="text-white font-weight-bold">{{ session()->get('loggedUser') ->Email }}</em>
                    </center>
                </div>

            </div>
            
        </nav>
         
        @if(session()->get('loggedUser') ->SubscriptionType_ID == 3) 
        <section class="page-section">
            <form class="container px-4 px-lg-5 h-100" method="POST" action="{{ url('UploadFile') }}" enctype="multipart/form-data">
            <div class="container">
            <label for="formFileLg" class="form-label text-white">Choose the CSV import file:</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file" name="file">
            </div>
            <div style="padding-top: 25px">
                <center> <button type="submit" class="btn btn-primary btn-xl" >Upload File</button></center>
                        @if(Count(session() -> get('uploadFile_result')) > 0)
                        @if(session() -> get('uploadFile_result')['result'] == false)
                          <p class="small mb-5 pb-lg-2" style="background-color:red;margin-top:25px"><a>
                            {{ session() -> get('uploadFile_result')['message'] }}
                            </a></p>
                            @elseif(session() -> get('uploadFile_result')['result'] == true) 
                            <p class="small mb-5 pb-lg-2" style="background-color:rgb(0, 255, 72);margin-top:25px"><a>
                            File uploaded successfully! 
                            </a></p>
                            @endif
                          @endif
            </div>
            </form>
            </section>
        @endif
        


        @if(session()->get('loggedUser') ->SubscriptionType_ID == 1 or session()->get('loggedUser') ->SubscriptionType_ID == 2)
        @if(session()->get('vis_day_ok')) 
        <section class="page-section">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-md-12">

                <h1 class="text-center carousel-title text-white font-weight-bold">Daily Horoscope: {{ session()->get('visualizzazione_giornaliera')['Sign'] }}</h1>
                <hr>
                <div id="carousel_custom_id_3">
                                            <div id="custom_table_page_container">
                                            </div class="text-white">
                                                    <table class="table-dark text-white" id="custom_table_page" style="width:100%">
                                                        <thead><tr><th>Day</th><th>Prevision</th></tr></thead>
                                                    <tbody>
                                                        @foreach(session()->get('visualizzazione_giornaliera')['Value'] as $currDaily)
                                                        <tr >
                                                        <td style="width: 10%">{{ $currDaily -> DatePrevision }}</td>
                                                        <td> 
                                                <div><p> 
                                                    {{ $currDaily -> Description_Prevision }}
                                                    
                                                    
                                                    </p></td>
                                                    </tr>
                                                        @endforeach
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                </div>

            
                                        </div>
                </div>


            </section>
            @else 
            <section class="page-section">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-md-12">

                <h1 class="text-center carousel-title text-white font-weight-bold">No data to display for day</h1>
             
                </div>


            </section>
            @endif
      


        

        @if(session()->get('vis_week_ok'))  
        <section class="page-section" id="contact">
            <center>
                <div class="container">

                        <div class="row">

                            <div class="col-md-12">

                                <h1 class="text-center carousel-title text-white font-weight-bold">Weekly Horoscope:</h1>
                                <hr>

                            </div>
                            <!-- End of Col-md-12 -->

                            <div id="carouselExample" class="carousel slide text-white" data-ride="carousel" style="width:100%">

                                <center>
                                <ol class="carousel-indicators" >
                                    <li data-target="#carouselExample" style="width: 100px;height:70px;background-color:rgba(255, 255, 255, 0); border : 0" data-slide-to="0" class="active">
                                        <img class="d-block w-100 h-100" src="{{ url('data/signs/Ariete.png') }}" alt="First slide">
                                    </li>

                                    <li data-target="#carouselExample" style="width: 100px;height:70px;background-color:rgba(255, 255, 255, 0); border : 0" data-slide-to="1">
                                        <img class="d-block w-100 h-100" src="{{ url('data/signs/Toro.png') }}" alt="Second slide">
                                    </li>

                                    <li data-target="#carouselExample" style="width: 100px;height:70px;background-color:rgba(255, 255, 255, 0); border : 0" data-slide-to="2">
                                        <img class="d-block w-100 h-100" src="{{ url('data/signs/gemelli.png') }}" alt="Third slide">
                                    </li>

                                    <li data-target="#carouselExample" style="width: 100px;height:70px;background-color:rgba(255, 255, 255, 0); border : 0" data-slide-to="3">
                                        <img class="d-block w-100 h-100" src="{{ url('data/signs/cancro.png') }}" alt="First slide">
                                    </li>

                                    <li data-target="#carouselExample" style="width: 100px;height:70px;background-color:rgba(255, 255, 255, 0); border : 0" data-slide-to="4">
                                        <img class="d-block w-100 h-100" src="{{ url('data/signs/leone.png') }}" alt="Second slide">
                                    </li>

                                    <li data-target="#carouselExample" style="width: 100px;height:70px;background-color:rgba(255, 255, 255, 0); border : 0" data-slide-to="5">
                                        <img class="d-block w-100 h-100" src="{{ url('data/signs/vergine.png') }}" alt="Third slide">
                                    </li>

                                    <li data-target="#carouselExample" style="width: 100px;height:70px;background-color:rgba(255, 255, 255, 0); border : 0" data-slide-to="6">
                                        <img class="d-block w-100 h-100" src="{{ url('data/signs/bilancia.png') }}" alt="Third slide">
                                    </li>

                                    <li data-target="#carouselExample" style="width: 100px;height:70px;background-color:rgba(255, 255, 255, 0); border : 0" data-slide-to="7">
                                        <img class="d-block w-100 h-100" src="{{ url('data/signs/scorpione.png') }}" alt="Third slide">
                                    </li>

                                    <li data-target="#carouselExample" style="width: 100px;height:70px;background-color:rgba(255, 255, 255, 0); border : 0" data-slide-to="8">
                                        <img class="d-block w-100 h-100" src="{{ url('data/signs/sagittario.png') }}" alt="First slide">
                                    </li>

                                    <li data-target="#carouselExample" style="width: 100px;height:70px;background-color:rgba(255, 255, 255, 0); border : 0" data-slide-to="9">
                                        <img class="d-block w-100 h-100" src="{{ url('data/signs/capricorno.png') }}" alt="Second slide">
                                    </li>

                                    <li data-target="#carouselExample" style="width: 100px;height:70px;background-color:rgba(255, 255, 255, 0); border : 0" data-slide-to="10">
                                        <img class="d-block w-100 h-100" src="{{ url('data/signs/acquario.png') }}" alt="Third slide">
                                    </li>

                                    <li data-target="#carouselExample" style="width: 100px;height:70px;background-color:rgba(255, 255, 255, 0); border : 0" data-slide-to="11">
                                        <img class="d-block w-100 h-100" src="{{ url('data/signs/pesci.png') }}" alt="Third slide">
                                    </li>
                                </ol>
                                </center>
                                <!-- Carousel Indicators -->

                                <div class="carousel-inner">
                                    <div class="carousel-item active" id="carousel_custom_id">
                                        <div id="carousel_custom_id_2">
                                            <h5>Ariete</h5>
                                            <div><p>
                                                {{ session()->get('visualizzazione_settimanale')['Ariete']-> Description_Prevision }}
                                                </p></div>
                                        </div>
                                    </div>
                                    <!-- Carousel Item 1 -->
                                    <div class="carousel-item" id="carousel_custom_id">
                                        <div id="carousel_custom_id_2">
                                            <h5>Toro</h5>
                                            <div><p> {{ session()->get('visualizzazione_settimanale')['Toro']-> Description_Prevision }}</p></div>
                                        </div>
                                    </div>
                                    <!-- Carousel Item 2 -->

                                    <div class="carousel-item" id="carousel_custom_id">
                                        <div id="carousel_custom_id_2" >
                                            
                                            <h5>Gemelli</h5>
                                            <div><p>{{ session()->get('visualizzazione_settimanale')['Gemelli']-> Description_Prevision }}</p></div>
                                        </div>
                                    </div>
                                    
                                    <!-- Carousel Item 1 -->
                                    <div class="carousel-item" id="carousel_custom_id">
                                        <div id="carousel_custom_id_2">
                                            <h5>Cancro</h5>
                                            <p>{{ session()->get('visualizzazione_settimanale')['Cancro']-> Description_Prevision }}</p>
                                        </div>
                                    </div>
                                    <!-- Carousel Item 2 -->

                                    <div class="carousel-item" id="carousel_custom_id">
                                        <div id="carousel_custom_id_2" >
                                            <h5>Leone</h5>
                                            <div><p> {{ session()->get('visualizzazione_settimanale')['Leone']-> Description_Prevision }}</p></div>
                                            

                                        </div>
                                    </div>
                                    <!-- Carousel Item 3 -->
                                    <div class="carousel-item" id="carousel_custom_id">
                                        <div id="carousel_custom_id_2" >
                                            <h5>Vergine</h5>
                                            <div><p>{{ session()->get('visualizzazione_settimanale')['Vergine']-> Description_Prevision }}</p></div>
                                            
                                        </div>
                                    </div>
                                    <!-- Carousel Item 3 -->
                                    <div class="carousel-item" id="carousel_custom_id">
                                        <div id="carousel_custom_id_2">
                                            <h5>Bilancia</h5>
                                            <p>{{ session()->get('visualizzazione_settimanale')['Bilancia']-> Description_Prevision }}</p>
                                        </div>
                                    </div>
                                    <!-- Carousel Item 3 -->
                                    <div class="carousel-item" id="carousel_custom_id">
                                        <div id="carousel_custom_id_2">
                                            <h5>Scorpione</h5>
                                            <p>{{ session()->get('visualizzazione_settimanale')['Scorpione']-> Description_Prevision }}</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" id="carousel_custom_id">
                                        <div id="carousel_custom_id_2">
                                            <h5>Sagittario</h5>
                                            <p>{{ session()->get('visualizzazione_settimanale')['Sagittario']-> Description_Prevision }}</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" id="carousel_custom_id">
                                        <div id="carousel_custom_id_2">
                                            <h5>Capricorno</h5>
                                            <p>{{ session()->get('visualizzazione_settimanale')['Capricorno']-> Description_Prevision }}</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" id="carousel_custom_id">
                                        <div id="carousel_custom_id_2">
                                            <h5>Acquario</h5>
                                            <p>{{ session()->get('visualizzazione_settimanale')['Acquario']-> Description_Prevision }}</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" id="carousel_custom_id">
                                        <div id="carousel_custom_id_2">
                                            <h5>Pesci</h5>
                                            <p>{{ session()->get('visualizzazione_settimanale')['Pesci']-> Description_Prevision }}</p>
                                        </div>
                                    </div>

                                </div>

                                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">

                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                                    <span class="sr-only">Previous</span>

                                </a>
                                <!-- Carousel Control Prev -->

                                <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">

                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                                    <span class="sr-only">Next</span>

                                </a>
                                <!-- Carousel Control Next -->

                            </div>


                        </div>
                        <!-- End of Row -->

                        </div>
                        <!-- JQuery Plugin -->

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                            <!-- Bootstrap JQuery Plugin -->

                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

                            <script
                                type="text/javascript"
                                charset="utf8"
                                src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"
                                ></script>
                                <script
                                type="text/javascript"
                                charset="utf8"
                                src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

            </center>
        </section>
        @else  
        <section class="page-section">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-md-12">

                <h1 class="text-center carousel-title text-white font-weight-bold">No data to display for week</h1>
             
                </div>


            </section>
        @endif
        @endif
       


        @if(session()->get('loggedUser') ->SubscriptionType_ID == 2)
@if(session()->get('vis_month_ok')) 
<section style="padding-top: 10em">
            <center>
                <div class="container" >
                        <div class="row" >
                            <div class="col-md-12">
                                <h1 class="text-center carousel-title text-white">Monthly Horoscope</h1>
                                <hr>
                            </div>
                            <!-- End of Col-md-12 -->
                            <div class="col-md-12 text-white" id="carouselMonthly" style="border-radius: 25px; padding-top:65px" >
                                <div id="carouselExample_2" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-md-2 offset-md-2">
                                                    <img class="rounded-circle" style="width:120px;height:120px" src="{{ url('data/signs/ariete_2.png') }}" alt="First slide">
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <blockquote class="blockquote">
                                                        <h4>Ariete</h4>
                                                    </blockquote>
                                                    <p>
                                                        {{ session()->get('visualizzazione_mensile')['Ariete'] -> Description_Prevision}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Carousel Item 1 -->
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-2 offset-md-2">
                                                    <img class="rounded-circle" style="width:120px;height:120px" src="{{ url('data/signs/Toro_2.png') }}" alt="First slide">
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <blockquote class="blockquote">
                                                        <h4>Toro</h4>
                                                    </blockquote>
                                                    <p>
                                                        {{ session()->get('visualizzazione_mensile')['Toro'] -> Description_Prevision}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Carousel Item 2 -->
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-2 offset-md-2">

                                                    <img class="rounded-circle" style="width:120px;height:120px" src="{{ url('data/signs/Gemelli_2.png') }}" alt="First slide">

                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <blockquote class="blockquote">
                                                        <h4>Gemelli</h4>.
                                                    </blockquote>
                                                    <p>
                                                        {{ session()->get('visualizzazione_mensile')['Gemelli'] -> Description_Prevision}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-2 offset-md-2">
                                                    <img class="rounded-circle" style="width:120px;height:120px" src="{{ url('data/signs/Cancro_2.png') }}" alt="First slide">
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <blockquote class="blockquote">
                                                        <h4>Cancro</h4>
                                                    </blockquote>
                                                    <p>
                                                        {{ session()->get('visualizzazione_mensile')['Cancro'] -> Description_Prevision}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-2 offset-md-2">
                                                    <img class="rounded-circle" style="width:120px;height:120px" src="{{ url('data/signs/leone_2.png') }}" alt="First slide">
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <blockquote class="blockquote">
                                                        <h4>Leone</h4>
                                                    </blockquote>
                                                    <p>
                                                        {{ session()->get('visualizzazione_mensile')['Leone'] -> Description_Prevision}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-2 offset-md-2">
                                                    <img class="rounded-circle" style="width:120px;height:120px" src="{{ url('data/signs/vergine_2.png') }}" alt="First slide">
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <blockquote class="blockquote">
                                                        <h4>Vergine</h4>
                                                    </blockquote>
                                                    <p>
                                                        {{ session()->get('visualizzazione_mensile')['Vergine'] -> Description_Prevision}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-2 offset-md-2">
                                                    <img class="rounded-circle" style="width:120px;height:120px" src="{{ url('data/signs/bilancia_2.png') }}" alt="First slide">
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <blockquote class="blockquote">
                                                        <h4>Bilancia</h4>
                                                    </blockquote>
                                                    <p>
                                                        {{ session()->get('visualizzazione_mensile')['Bilancia'] -> Description_Prevision}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-2 offset-md-2">
                                                    <img class="rounded-circle" style="width:120px;height:120px" src="{{ url('data/signs/scorpione_2.png') }}" alt="First slide">
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <blockquote class="blockquote">
                                                        <h4>Scorpione</h4>
                                                    </blockquote>
                                                    <p>
                                                        {{ session()->get('visualizzazione_mensile')['Scorpione'] -> Description_Prevision}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-2 offset-md-2">
                                                    <img class="rounded-circle" style="width:120px;height:120px" src="{{ url('data/signs/sagittario_2.png') }}" alt="First slide">
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <blockquote class="blockquote">
                                                        <h4>Sagittario</h4>
                                                    </blockquote>
                                                    <p>
                                                        {{ session()->get('visualizzazione_mensile')['Sagittario'] -> Description_Prevision}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-2 offset-md-2">
                                                    <img class="rounded-circle" style="width:120px;height:120px" src="{{ url('data/signs/capricorno_2.png') }}" alt="First slide">
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <blockquote class="blockquote">
                                                        <h4>Capricorno</h4>
                                                    </blockquote>
                                                    <p>
                                                        {{ session()->get('visualizzazione_mensile')['Capricorno'] -> Description_Prevision}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-2 offset-md-2">
                                                    <img class="rounded-circle" style="width:120px;height:120px" src="{{ url('data/signs/acquario_2.png') }}" alt="First slide">
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <blockquote class="blockquote">
                                                        <h4>Acquario</h4>
                                                    </blockquote>
                                                    <p>
                                                        {{ session()->get('visualizzazione_mensile')['Acquario'] -> Description_Prevision}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-2 offset-md-2">
                                                    <img class="rounded-circle" style="width:120px;height:120px" src="{{ url('data/signs/pesci_2.png') }}" alt="First slide">
                                                </div>
                                                <div class="col-md-6 text-left">
                                                    <blockquote class="blockquote">
                                                        <h4>Pesci</h4>
                                                    </blockquote>
                                                    <p>
                                                        {{ session()->get('visualizzazione_mensile')['Pesci'] -> Description_Prevision}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Carousel Item 3 -->
                                    </div>
                                    <!-- End of Carousel Inner -->
                                    <a class="carousel-control-prev" href="#carouselExample_2" role="button" data-slide="prev">
                                        <i class="fas fa-chevron-circle-left fa-2x"></i>
                                    </a>
                                    <!-- End of Carousel Control Prev -->
                                    <a class="carousel-control-next" href="#carouselExample_2" role="button" data-slide="next">
                                        <i class="fas fa-chevron-circle-right fa-2x"></i>
                                    </a>
                                    <!-- End of Carousel Control Next -->
                                </div>
                                <!-- End of CarouselExample -->
                            </div>
                            <!-- End of Col-md-12 -->
                        </div>
                        <!-- End of Row -->
                        </div>
                </center>
            </section>
        @else 
        <section class="page-section">
                <div class="container" id="contact">
                    <div class="row">
                        <div class="col-md-12">

                        <h1 class="text-center carousel-title text-white font-weight-bold">No data to display for month</h1>
                    
                        </div>


                    </section>
        @endif

        
        @endif
        </div>
    


        
        
    </body>
</html>

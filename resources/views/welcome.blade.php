<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w680">
        <div class="card card-1">
            <div class="card-heading"></div>
            <div class="card-body">
                <div class="" style="color: green">@if (Session::has('message')) {{ Session::get('message')}} @endif
                </div>
                <h2 class="title">Inscription</h2>
                <form method="POST" action="{{ route('participant.store')}}">
                    @csrf
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Nom du participant" name="nom" required>
                        <span style="color: red;">  @error('nom') {{ $message }} @enderror </span>
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Pr??nom du participant" name="prenoms" required>
                        <span style="color: red;">  @error('prenoms') {{ $message }} @enderror </span>
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Num??ro de t??l??phone" name="tel" required>
                        <span style="color: red;">  @error('tel') {{ $message }} @enderror </span>
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Adresse email" name="email" required>
                        <span style="color: red;">  @error('email') {{ $message }} @enderror </span>
                    </div>
                    <div class="p-t-20">
                        <button class="btn btn--radius btn--green" type="submit">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

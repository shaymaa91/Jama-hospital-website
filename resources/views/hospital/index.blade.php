<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        html{direction:rtl;}
    footer {
        padding: 0px 0px 0px 0px;
        background-color: #fff;
        margin: 0px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .fa {
        padding: 20px;
        font-size: 23px;
        width: 60px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 50%;
    }

    .fa:hover {
        opacity: 0.5;
        text-decoration: none;
    }

    .fa-facebook {
        background: #3B5998;
        color: white;
        margin-top: 30px;
    }

    .fa-whatsapp {
        background: #25d366;
        color: white;
    }

    .fa-twitter {
        background: #55ACEE;
        color: white;
    }

    .fa-instagram {
        background: #125688;
        color: white;
    }

    p {
        text-align: center;

    }

    .jumbotron {
        margin-top: 0px;
        margin-bottom: 0px;
        background-image: url({{URL('http://127.0.0.1:8000/admin/Home-Page')}}/public/static/images/bg.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }

    .jumbotron h5,
    h3 {
        text-align: center;
    }


    .alert {
        margin: 0px;
    }



    .glow {
        font-size: 50px;
        color: white;
        text-align: center;
        -webkit-animation: glow 1s ease-in-out infinite alternate;
        -moz-animation: glow 1s ease-in-out infinite alternate;
        animation: glow 1s ease-in-out infinite alternate;
    }

    @-webkit-keyframes glow {
        from {
            text-shadow: 0 0 10px #eeeeee, 0 0 20px #000000, 0 0 30px #000000, 0 0 40px #000000, 0 0 50px #9554b3, 0 0 60px #9554b3, 0 0 70px #9554b3;
        }

        to {
            text-shadow: 0 0 20px #eeeeee, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
        }
    }

    .bs-example {
        margin: 0px;

    }

    .navbar-brand {
        font-size: 20px;
        font-family: sans-serif;

    }
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
      font-family: arial;
    }

    .title {
      color: grey;
      font-size: 18px;
    }

    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #337AB7;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    button:hover,
    a:hover {
      opacity: 0.7;
    }

    .grid-container {
      display: grid;
      grid-template-columns: auto auto auto;
      padding: 10px;
    }

    a:link {
      text-decoration: none;
    }

    a {
      color: white;
    }
    .navbar a {
        color: #337AB7 !important;
    }
    </style>
</head>

<body>
    @include ("hospital.navbar" )

    @include ("hospital.homebase" )

    @include("hospital.admin-doctor-patient-cards")
    <br><br><br>
    @include ("hospital.footer")

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
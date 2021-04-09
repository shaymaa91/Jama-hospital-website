<!DOCTYPE html>
<html lang="en">

<head>

    <title>Health - Medical Website Template</title>
    <!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('hospital-theme/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('hospital-theme/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('hospital-theme/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('hospital-theme/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('hospital-theme/css/owl.theme.default.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('hospital-theme/css/tooplate-style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">




    @include ("hospital.navbar" )

    @include ("hospital.homebase" )

    @include ("hospital.footer")

    <!-- SCRIPTS -->
    <script src="{{asset('hospital-theme/js/jquery.js')}}"></script>
    <script src="{{asset('hospital-theme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('hospital-theme/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('hospital-theme/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('hospital-theme/js/wow.min.js')}}"></script>
    <script src="{{asset('hospital-theme/js/smoothscroll.js')}}"></script>
    <script src="{{asset('hospital-theme/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('hospital-theme/js/custom.js')}}"></script>

    <script type="text/javascript">
    $('#q').on('keyup', function() {
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{URL::to('
            search ')}}',
            data: {
                'q': $value
            },
            success: function(data) {
                $('tbody').html(data);
            }
        });
    })
    </script>
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
    </script>


</body>

</html>

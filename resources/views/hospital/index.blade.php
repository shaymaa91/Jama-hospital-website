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

    <link rel="stylesheet" href="{{asset('hospital-theme/css/swiper.css')}}">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{asset('hospital-theme/js/jquery.js')}}"></script>
    <script src="{{asset('hospital-theme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('hospital-theme/js/popper.min.js')}}"></script>
    <script src="{{asset('hospital-theme/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('hospital-theme/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('hospital-theme/js/wow.min.js')}}"></script>
    <script src="{{asset('hospital-theme/js/smoothscroll.js')}}"></script>
    <script src="{{asset('hospital-theme/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('hospital-theme/js/custom.js')}}"></script>
    <script src="{{asset('hospital-theme/js/swiper.js')}}"></script>

    <script type="text/javascript">
	$(document).ready(function(){

		$(document).on('change','.departmentajax',function(){

			var dept_id=$(this).val();
			var div=$(this).parent();

			let op=" ";

			$.ajax({
				type:'get',
				url:'{!!URL::to("getDoctorList")!!}',
				data:{'id':dept_id},
				success:function(data){
                    op = "";
                    console.log("test ............");
                    console.log(data);
					op+='<option value="0" selected disabled>أختر الطبيب</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].id+'">'+data[i].fullname+'</option>';
				   }
                   $('#doctorajax').html("");
                   $('#doctorajax').append(op);


				//    div.find('.doctorajax').html("test");
				//    div.find('.doctorajax').append(op);
				},
				error:function(){

				}
			});
		});



	});
</script>

    <script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 3,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 50,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
        breakpoints: {
            499: {
                slidesPerView: 1,
                spaceBetweenSlides: 10
            },
            640: {
                slidesPerView: 3,
                spaceBetweenSlides: 10
            },
            768: {
                slidesPerView: 3,
                spaceBetweenSlides: 10
            },
            999: {
                slidesPerView: 3,
                spaceBetweenSlides: 10
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 10,
            }
        }
    });
    </script>


</body>

</html>

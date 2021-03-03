<!DOCTYPE html>
<html lang="en">

<head>
 
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('/paper-dashboard-master/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('/paper-dashboard-master/assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('/paper-dashboard-master/assets/demo/demo.css')}}" rel="stylesheet" />
</head>





        <script src="{{asset('/paper-dashboard-master/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('/paper-dashboard-master/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('/paper-dashboard-master/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('/paper-dashboard-master/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('/paper-dashboard-master/assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('/paper-dashboard-master/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('/paper-dashboard-master/assets/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('/paper-dashboard-master/assets/demo/demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
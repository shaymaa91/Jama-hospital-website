<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background:#fefefe;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <a href="/" class="navbar-brand"><img src="{{asset('static/images/loader.png')}}"></a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">

          <a href="" class="nav-item nav-link">الرئيسية</a>
          <a href="/doctorclick" class="nav-item nav-link">الاقسام</a>
          <a href="/patientclick" class="nav-item nav-link">من نحن</a>


        </div>

        <div class="navbar-nav">
          <a href="/aboutus" class="nav-item nav-link">تواصل معنا</a>
          <a href="{{asset('login')}}" class="nav-item nav-link">تسجيل دخول</a>
        </div>

      </div>
    </nav>
  </div>
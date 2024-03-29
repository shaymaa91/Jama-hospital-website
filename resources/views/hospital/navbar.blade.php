<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>




<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="collapse navbar-collapse navbar-right">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="{{route('front.home.page')}}" class="navbar-brand">مستشفى جاما الطبي <i class="fa fa-heartbeat"
                    aria-hidden="true"></i></a>

        </div>
        <!-- MENU LINKS -->
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="signin-btn">
                
                    @if(auth()->user())
                        @if(auth()->user()->name=="admin")
                              <a href="{{asset('admin/')}}">تسجيل دخول</a>
                         @elseif(auth()->user()->name=="doctor")
                              <a href="{{asset('doctor/')}}">تسجيل دخول</a>
                         @elseif(auth()->user()->name=="patient")
                              <a href="{{asset('patient/')}}">تسجيل دخول</a>
                         @endif
                    @else
                         <a href="{{asset('login')}}">تسجيل دخول</a>
                    @endif     
                </li>
                <li class="appointment-btn"><a href="#appointment">حجز موعد</a></li>
                <li><a href="#google-map" class="smoothScroll">اتصل بنا</a></li>
                <li><a href="#about" class="smoothScroll">من نحن</a></li>
                <li><a href="#news" class="smoothScroll">أخبار</a></li>
                <li><a href="#team" class="smoothScroll">الأطباء</a></li>
                <li><a href="#top" class="smoothScroll">الرئيسية</a></li>
            </ul>
        </div>

    </div>
</section>
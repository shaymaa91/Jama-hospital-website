<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="owl-carousel owl-theme">
                <div class="item item-first">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>في خدمتكم على مدار الساعة</h3>
                            <h1>مستشفى جاما الطبي</h1>
                            <a href="#team" class="section-btn btn btn-default smoothScroll">احجز موعد</a>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>صحتكم أولى أولوياتنا</h3>
                            <h1>مستشفى جاما الطبي</h1>
                            <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">المزيد
                                عنا</a>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>نسعى لسلامتكم بكل جهودنا</h3>
                            <h1>مستشفى جاما الطبي</h1>
                            <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">اتصل بنا</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s">مرحبا بكم في مستشفى جاما الطبي <i
                            class="fa fa-heartbeat" aria-hidden="true"></i></h2>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <p>لقد تم تصميم مستشفى جاما الخبر وتطويرها لتوفير الراحة والرعاية الصحية المتميزة، باستخدام
                            أحدث الأجهزة والمعدات الطبية، وبوجود فريق من الأطباء المحترفين لنضمن دائما توفير
                            احتياجات المريض التشخيصية والعلاجية.</p>
                        <p>في مستشفى جاما نقدم مدى واسعا من الخدمات التخصصية التي تشمل الطب الباطني، امراض القلب،
                            الجراحة العامة، جراحة المسالك البولية، جراحة العظام، أمراض النساء والتوليد، جراحة المخ
                            والأعصاب، جراحة المناظير والسمنة ، الأنف والأذن والحنجرة، الجهاز الهضمي والمناظير، طب
                            الأطفال وحديثي الولادة، العلاج الطبيعي واصابات الملاعب، الطوارئ والعناية المركزة. باشراف
                            طاقم طبي على الكفاءة من الاخصائيين والاستشاريين. هذا وقد تم تصميم وتجهيز جميع غرف المرضى
                            في المستشفى بطريقة تعطي المريض لأقصى درجات الراحة.
                            كما ان قسم الطوارئ وسيارات الاسعاف بالمستشفى مزودين بجميع الاجهزة الحديثة والضرورية
                            وكذلك الاخصائيين المدربين على العمليات الاسعافية وجاهزين على مدار الساعة.</p>
                    </div>
                    <figure class="profile wow fadeInUp" data-wow-delay="1s">
                        <img src="{{asset('hospital-theme/images/author-image.jpg')}}" class="img-responsive" alt="">
                        <figcaption>
                            <h3>د.فداء الأسمر</h3>
                            <p>طب عام</p>
                        </figcaption>
                    </figure>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- TEAM -->
<section id="team" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">أطباء جاما</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <!-- Swiper -->
            <div class="swiper-container pb-5 pt-4">
                <div class="swiper-wrapper">
                    @foreach($doctors as $doctor)
                    <div class="swiper-slide">
                        <div class="">
                            <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                                <img src='{{asset("storage/assets/img/doctors/{$doctor->image}")}}'
                                    class="img-responsive" alt="">

                                <div class="team-info">
                                    <h3>{{$doctor->fullname}}</h3>
                                    <p>{{$doctor->specialize->name}}</p>
                                    <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> {{$doctor->mobile}}</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">{{$doctor->user->email}}</a></p>
                                    </div>
                                    <ul class="social-icon">
                                        <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </div>
</section>


<!-- NEWS -->
<section id="news" data-stellar-background-ratio="2.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <!-- SECTION TITLE -->
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>أخبار جاما</h2>
                </div>
            </div>
            @foreach($jamanews as $news)
            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                    <a href="news-detail.html">
                        <img src='{{asset("storage/assets/img/news/{$news->news_img}")}}' class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>March 08, 2018</span>
                        <h3><a href="news-detail.html">{{$news->title}}</a></h3>
                        <div class="author">
                            <img src="{{asset('hospital-theme/images/author-image.jpg')}}" class="img-responsive"
                                alt="">
                            <div class="author-info">
                                <h5>محمد الأسمر</h5>
                                <p>المدير العام</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>


<!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="{{asset('hospital-theme/images/appointment-image.jpg')}}" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
                <!-- CONTACT FORM HERE -->
                <form id="appointment-form" role="form" method="post" action="#">

                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>احجز موعد</h2>
                    </div>

                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <div class="col-md-6 col-sm-6">
                            <label for="name">الاسم</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="email">الايميل</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="select">الطبيب</label>
                            <select class="form-control doctorajax" id="doctorajax">
                                
                            </select>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="select">القسم</label>
                            <select class="form-control departmentajax" id="departmentajax">
                                <option>-أختر القسم-</option>
                                @foreach($departments as $dept)
                                    <option value="{{$dept->id}}">{{$dept->title}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="date">التاريخ</label>
                            <input type="date" name="date" value="" class="form-control">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="telephone">الهاتف</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <label for="Message">ملاحظات</label>
                            <textarea class="form-control" rows="5" id="message" name="message"
                                placeholder="Message"></textarea>
                            <button type="submit" class="form-control" id="cf-submit" name="submit">
                                احجز الان</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

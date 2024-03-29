<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
        class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
        m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon fas fa-home "></i><span class="m-menu__link-text">
                        الصفحة الرئيسية</a>

            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon fas fa-file-medical-alt "></i><span class="m-menu__link-text">
                        الإختصاصات</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">


                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("Specialize.index")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">ادارة الإختصاصات</span></a></li>

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("Specialize.create")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">إضافة أختصاص جديد</span></a></li>


                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon fab fa-dochub "></i><span class="m-menu__link-text">
                        الأقسام</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">


                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("Specialize.index")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">ادارة الأقسام</span></a></li>

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("Specialize.create")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">إضافة قسم جديد</span></a></li>


                    </ul>
                </div>
            </li>


            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon fas fa-stethoscope "></i><span
                        class="m-menu__link-text">الأطباء</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">


                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("doctors.index")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">ادارة الاطباء</span></a></li>

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("doctors.create")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">إضافة طبيب </span></a></li>


                    </ul>
                </div>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon far fa-id-card"></i><span class="m-menu__link-text">المرضى</span><i
                        class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">


                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("patients.index")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">ادارة المرضى</span></a></li>

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("patients.create")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">إضافة مريض </span></a></li>


                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon far fa-calendar-check "></i><span
                        class="m-menu__link-text">الحجوزات</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">


                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("patients.index")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">ادارة الحجوزات</span></a></li>

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("patients.create")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">إضافة حجز </span></a></li>


                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon far fa-calendar-alt "></i><span class="m-menu__link-text">أوقات دوام
                        الأطباء</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">


                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("patients.index")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">ادارة الجداول</span></a></li>

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("patients.create")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">إضافة جدولة </span></a></li>


                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon fas fa-users "></i><span class="m-menu__link-text">المستخدمين
                    </span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("user.index")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">عرض المستخدمين</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("user.create")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">إضافة مستخدم جديد</span></a></li>

                    </ul>
                </div>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon fas fa-newspaper"></i><span class="m-menu__link-text">أخبار جاما</span><i
                        class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">


                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("news.index")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">ادارة الأخبار</span></a></li>

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("news.create")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">إضافة خبر جديد </span></a></li>


                    </ul>
                </div>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon fas fa-hand-holding-heart"></i><span class="m-menu__link-text">
                        الصيدلية والدواء</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">


                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("patients.index")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">ادارة الصيدلية</span></a></li>

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("patients.create")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">إضافة دواء جديد </span></a></li>


                    </ul>
                </div>
            </li>

            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a
                    href="javascript:;" class="m-menu__link m-menu__toggle"><i
                        class="m-menu__link-icon fas fa-ambulance"></i><span class="m-menu__link-text">المعدات
                        والأدوات</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">


                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("patients.index")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">ادارة الأدوات والمعدات</span></a></li>

                        <li class="m-menu__item " aria-haspopup="true"><a href='{{route("patients.create")}}'
                                class="m-menu__link "><i
                                    class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                    class="m-menu__link-text">إضافة معدات جديدة </span></a></li>


                    </ul>
                </div>
            </li>


        </ul>
    </div>
</div>

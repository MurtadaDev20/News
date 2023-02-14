<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <h3 class=" text-center mt-3 mb-3" style="color: white ;">
        <!-- <img  alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light text-center">ال يامع</span>
    </h3>

    <!-- Sidebar -->
    <div class="sidebar">




        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href='dashbord.php' class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            لوحة التحكم
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href='dashbord.php' class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            الاخبار
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href='news_add.php' class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>اضافة خبر</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href='news_manage.php' class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ادارة الاخبار</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href='news_latest.php' class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            الاخبار المهمة
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="news_contact.php" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            الرسائل
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href='../index.php' class="nav-link" target="_blank">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            عرض الموقع
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href='logout.php' class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            تسجيل الخروج
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>

                </li>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
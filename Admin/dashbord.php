<?php include 'inc/header.php' ?>
<?php include 'function/config.php' ?>
<?php

if (!isset($_SESSION['webe'])) {
  header("location:index.php");
}

?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php include 'inc/nav.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include 'inc/aside.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">لوحة التحكم</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                <li class="breadcrumb-item active">لوحة التحكم </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <?php $value = view_news();
                  $count = 0;
                  while (mysqli_fetch_assoc($value)) {
                  ?>
                    <?php $count;
                    $count++;
                    ?>
                  <?php

                  }
                  ?>

                  <h3><?php echo $count ?><sup style="font-size: 20px"></sup></h3>

                  <p>الاخبار</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="news_manage.php" class="small-box-footer"> معلومات اكثر<i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <?php $value = last_news();
                  $count = 0;
                  while (mysqli_fetch_assoc($value)) {
                  ?>
                    <?php $count;
                    $count++;
                    ?>
                  <?php

                  }
                  ?>


                  <h3><?php echo $count ?><sup style="font-size: 20px"></sup></h3>

                  <p>الاخبار المهمة</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="news_latest.php" class="small-box-footer">معلومات اكثر<i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <?php $value = view_contact();
                  $count = 0;
                  while (mysqli_fetch_assoc($value)) {
                  ?>
                    <?php $count;
                    $count++;
                    ?>
                  <?php

                  }
                  ?>

                  <h3><?php echo $count ?><sup style="font-size: 20px"></sup></h3>

                  

                  <p>عدد الرسائل</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="news_contact.php" class="small-box-footer">معلومات اكثر<i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <!-- ./col -->
          </div>
          <!-- /.row -->

          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include 'inc/footer.php' ?>




    <?php

    function view_contact()
    {
      global $con;

      $sql = "SELECT * FROM contact  ORDER BY contact_id DESC";
      return $query = mysqli_query($con, $sql);
    }



    function view_news()
    {
      global $con;
      $sql = "SELECT * FROM news where type = '0'  ORDER BY news_id DESC";
      return mysqli_query($con, $sql);
    }



    function last_news()
    {
      global $con;
      $sql = "SELECT * FROM news where type = '1' ORDER BY news_id DESC";
      return mysqli_query($con, $sql);
    }
    ?>
<?php include 'inc/header.php' ?>
<?php include 'function/config.php' ?>
<?php

if (!isset($_SESSION['webe'])) {
  header("location:index.php");
}


?>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <?php include 'inc/nav.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include 'inc/aside.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <?php $value = view_news();
          active_status();
          //header("location:manage_news.php");
          ?>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">ادارة الاخبار</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>

            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped table-bordered  text-center">
              <thead>
                <tr>
                  <th scope="col">العدد</th>
                  <th scope="col">العنوان بالانكليزي </th>
                  <th scope="col">العنوان بالعربي </th>

                  <th scope="col">الكاتب بالانكليزي </th>
                  <th scope="col">الكاتب بالعربي</th>

                  <th scope="col">الصور</th>

                  <th scope="col"> الوصف بالانكليزي</th>
                  <th scope="col"> الوصف بالعربي</th>

                  <th scope="col">التاريخ</th>

                  <th scope="col">الحالة</th>
                  
                  <th scope="col">العمليات</th>

                  <th scope="col">اضافة للاخبار المهمة</th>

                </tr>
              </thead>
              <tbody>
                <?php
                $num = 1; //Count
                while ($row = mysqli_fetch_assoc($value)) {
                ?>
                  <tr>

                    <td><?php echo $num; ?></td>
                    <td><?php echo $row['newsTitle'] ?></td>
                    <td><?php echo $row['newsTitle_ar'] ?></td>

                    <td><?php echo $row['newsWriter'] ?></td>
                    <td><?php echo $row['newsWriter_ar'] ?></td>

                    <td><img src="img/<?php echo $row['newsImage']; ?>" height="50px" width="50px" class="img-circle"></td>

                    <td>
                      <?php
                      if (strlen($row['newsDecs']) > 150) {
                        $row['newsDecs'] = substr($row['newsDecs'], 0, 100) . ".....";
                      }
                      echo $row['newsDecs']
                      ?>
                    </td>
                    <td>
                      <?php
                      if (strlen($row['newsDecs_ar']) > 150) {
                        $row['newsDecs_ar'] = substr($row['newsDecs_ar'], 0, 100) . ".....";
                      }
                      echo $row['newsDecs_ar']
                      ?>
                    </td>


                    <td><?php echo $row['newsDate'] ?></td>


                    <td><?php 
                    
                      if($row['status'] == 1)
                      {
                        echo "مفعل";
                      }
                      else
                      {
                        echo "غير مفعل";
                      }

                    ?></td>

                      

                    <td>
                      <a class="btn btn-info btn-md" href="news_edit.php?id=<?php echo $row['news_id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                      <a class="btn btn-danger btn-md" href="news_del.php?id=<?php echo $row['news_id'] ?>"><i class="fas fa-trash"></i></a>


                      <?php
                      active_type();
                      if ($row['status'] == '1') {
                        echo " <a href='news_manage.php?opr=deactive&id=" . $row['news_id'] . "' class='btn btn-danger mt-2'><i class='fas fa-times-circle'></i></a>";
                      } else {
                        echo " <a href='news_manage.php?opr=active&id=" . $row['news_id'] . "' class='btn btn-success mt-2'><i class='fas fa-check-circle'></i></a>";
                      }

                      ?>
                    </td>

                    <td>
                      <?php

                      if ($row['type'] == '0') {
                        echo " <a href='news_manage.php?opr=activee&id=" . $row['news_id'] . "' class='btn btn-success mt-2'> <i class='fas fa-plus'></i></a>";
                      }

                      ?>
                    </td>
                  <?php
                  $num++;
                }
                  ?>

                  </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">

          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include 'inc/footer.php' ?>

    <?php
    //View News

    function view_news()
    {
      global $con;
      $sql = "SELECT * FROM news where type = '0'  ORDER BY news_id DESC";
      return mysqli_query($con, $sql);
    }

    // active_status
    function active_status()
    {
      global $con;

      if (isset($_GET['opr']) && $_GET['opr'] != "") {
        $operation = $_GET['opr'];
        $id = $_GET['id'];

        if ($operation == 'active') {
          $status = 1;
        } else {
          $status = 0;
        }

        $query = "UPDATE news SET status = '$status' WHERE news_id='$id'";
        $result = mysqli_query($con, $query);

        if ($result) {
        //header("location:news_manage.php");
        }
      }
    }

    function active_type()
    {
      global $con;

      if (isset($_GET['opr']) && $_GET['opr'] != "") {
        $operation = $_GET['opr'];
        $id = $_GET['id'];

        if ($operation == 'activee') {
          $status = 1;
        } else {
          $status = 0;
        }

        $query = "UPDATE news SET type = '$status' WHERE news_id='$id'";
        $result = mysqli_query($con, $query);

        if ($result) {
          header("location:news_manage.php");
        }
      }
    }

    ?>
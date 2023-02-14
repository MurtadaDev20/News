<?php

// if (!isset($_SESSION['webe'])) {
//     header("location:login.php");
// }

?>
<?php include 'inc/header.php' ?>
<?php
include 'function/functions.php';
include 'function/db.php';
update_news();
$edit = view_news();
$row = mysqli_fetch_assoc($edit) ;

    $news_id = $row['news_id'];

    $newsTitle = $row['newsTitle'];
    $newsTitle_ar = $row['newsTitle_ar'];

    $newsWriter = $row['newsWriter'];
    $newsWriter_ar = $row['newsWriter_ar'];

    $newsImage = $row['newsImage'];

    $newsDecs = $row['newsDecs'];
    $newsDecs_ar = $row['newsDecs_ar'];

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
                    <div class="row mb-2">


                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <?php  ?>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">تعديل الخبر</h3>
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">

                                        <h3 class="mb-4 pb-4">تعديل الخبر</h3>


                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label">عنوان الخبر بالانكليزي</label>
                                        <input type="hidden" class="form-control" id="exampleInputText1" name="news_id" value="<?php echo $news_id ?>">
                                        <input type="text" class="form-control" id="exampleInputText1" name="news_title_en" value="<?php echo $newsTitle ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label">عنوان الخبر بالعربي</label>
                                        <input type="text" class="form-control" id="exampleInputText1" name="news_title_ar" value="<?php echo $newsTitle_ar ?>">
                                    </div>

                                    <div class=" mb-3">
                                        <label for="exampleInputText1" class="form-label">كاتب الخبر بالانكليزي</label>
                                        <input type="text" class="form-control" id="exampleInputText1" name="news_writer_en" value="<?php echo $newsWriter ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label"> كاتب الخبر بالعربي </label>
                                        <input type="text" class="form-control" id="exampleInputText1" name="news_writer_ar" value="<?php echo $newsWriter_ar ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label">اضافة صورة </label>
                                        <input type="file" class="form-control" id="exampleInputText1" name="img" value="<?php echo $newsImage ?>">
                                    </div>
                                    <div class="mb-3">
                                        <img class="img-circle" height="100px" width="100px" src="img/<?php echo $newsImage; ?>" alt="">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label">الوصف بالانكليزي </label>
                                        <textarea type="text" class="form-control" cols="30" rows="10" id="summernote" name="desc_en"><?php echo $newsDecs ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label">الوصف بالعربي </label>
                                        <textarea type="text" class="form-control" cols="30" rows="10" id="summernotee" name="desc_ar"><?php echo $newsDecs_ar ?></textarea>
                                    </div>







                                    <button type="submit" class="btn btn-primary" name="news_btn_edit">ارسال</button>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
                <!-- /.card -->
        </div> -->
    </div>

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include 'inc/footer.php' ?>


    <?php

    function view_news()
    {
        global $con;
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $sql = "SELECT * FROM news where news_id ='$id'";
            return mysqli_query($con, $sql);
        }
        
    }

    //Update Recored 
    function update_news()
    {
        global $con;
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['news_btn_edit'])) {
            $news_id = $_POST['news_id'];

            $news_title_en = $_POST['news_title_en'];
            $news_title_ar = $_POST['news_title_ar'];

            $news_writer_en = $_POST['news_writer_en'];
            $news_writer_ar = $_POST['news_writer_ar'];

            $desc_en = $_POST['desc_en'];
            $desc_ar = $_POST['desc_ar'];

            $img = $_FILES['img']['name'];
            $type = $_FILES['img']['type'];
            $tmp_name = $_FILES['img']['tmp_name'];
            $size = $_FILES['img']['size'];

            $img_ext = explode('.', $img);
            $img_correct_ext = strtolower(end($img_ext));
            $allow = array('jpg', 'png', 'jpeg');
            $path = "img/" . $img;

            $msg = "";
            if (empty($news_title_en)) {
    ?>
                <script>
                    $(function() {
                        Swal.fire('حدث خطا', '  الرجاء ادخال عنوان الخبر بالانكليزي', 'error')
                    })
                </script>
            <?php
            } elseif (empty($news_title_ar)) {
            ?>
                <script>
                    $(function() {
                        Swal.fire('حدث خطا', '  الرجاء ادخال عنوان الخبر بالعربي', 'error')
                    })
                </script>
            <?php
            } elseif (empty($desc_en)) {
            ?>
                <script>
                    $(function() {
                        Swal.fire('حدث خطا', '  الرجاء ادخال الوصف بالانكليزي', 'error')
                    })
                </script>
            <?php
            } elseif (empty($desc_ar)) {
            ?>
                <script>
                    $(function() {
                        Swal.fire('حدث خطا', '  الرجاء ادخال الوصف بالعربي', 'error')
                    })
                </script>
            <?php
            } elseif (empty($img)) {
            ?>
                <script>
                    $(function() {
                        Swal.fire('حدث خطا', '  الرجاء ادخال  الصورة', 'error')
                    })
                </script>
                <?php
            } elseif (in_array($img_correct_ext, $allow)) {
                if ($size < 5000000) {

                    $exit = "SELECT * FROM news";
                    $sql = mysqli_query($con, $exit);

                    if (mysqli_fetch_assoc($sql)) {


                        $query = "UPDATE news set newsTitle='$news_title_en' , newsTitle_ar = '$news_title_ar', newsWriter = '$news_writer_en', newsWriter_ar = '$news_writer_ar', newsImage = '$img', newsDecs = '$desc_en', newsDecs_ar ='$desc_ar' where news_id = '$news_id'";
                        $result = mysqli_query($con, $query);

                        if ($result) {
                ?>
                            <script>
                                $(function() {
                                    Swal.fire(' تم تحديث الخبر', '  ', 'success')
                                })
                            </script>
                    <?php
                            header('location:news_manage.php');
                            move_uploaded_file($tmp_name, $path);
                        }
                    }
                } else {
                    ?>
                    <script>
                        $(function() {
                            Swal.fire('حجم الصورة كبير', '  ', 'error')
                        })
                    </script>
                <?php
                }
            } else {
                ?>
                <script>
                    $(function() {
                        Swal.fire('لايمكنك اضافة هذا النوع من الامتداد في الصور', '  ', 'error')
                    })
                </script>
    <?php
            }
        }
    }



    ?>
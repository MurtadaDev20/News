<?php

// if (!isset($_SESSION['webe'])) {
//     header("location:login.php");
// }

?>
<?php include 'inc/header.php' ?>
<?php include 'function/db.php' ?>
<?php  ?>

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

                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title ">الرسائل المرسلة</h3>

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
                                    <th scope="col">الاسم</th>
                                    <th scope="col">الايميل</th>
                                    <th scope="col">الرسالة</th>
                                    <th scope="col">العمليات</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $num = 1; //Count
                                $value = view_contact();
                                while ($row = mysqli_fetch_assoc($value)) {
                                ?>
                                    <tr>

                                        <td><?php echo $num; ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['message'] ?></td>
                                        <td><a href="contact_del.php?id=<?php echo $row['contact_id'] ?>" class="btn btn-danger mt-2"><i class="fas fa-trash"></i></a></td>
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
        function view_contact()
        {
            global $con;

            $sql = "SELECT * FROM contact  ORDER BY contact_id DESC";
            return mysqli_query($con, $sql);
        }

        ?>
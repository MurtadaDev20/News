<?php
include 'function/config.php';
$valew = last_news();

while ($row = mysqli_fetch_assoc($valew)) {

    $newsTitle = $row['newsTitle'];
    $news_id = $row['news_id'];
    $decs = $row['newsDecs'];
    $imge = $row['newsImage'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Aljamey</title>
    <!-- Stylesheet -->
    <link href="img/bg-img/fav.png" rel="icon">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12 col-12">
                        <!-- Breaking News Widget -->
                        <div class="ticker-wrapper-h">
                            <div class="heading">Latest News </div>
                            <ul class="news-ticker-h">
                                <?php
                                $valew = last_news();
                                while ($row = mysqli_fetch_assoc($valew)) {
                                ?>

                                    <li><a href='single-post.php?id=<?php echo $row['news_id']; ?>'><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo $row['newsTitle']; ?></a></li>

                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Social Info -->
                            <div class="top-social-info">
                                <a href="index.php">Home</a>
                                <a href="#news">News</a>
                                <a href="#contact">Contact Us</a>
                            </div>
                            <!-- Login -->
                            <a href="index.php" class="login-btn active">EN</a>
                            <a href="indexar.php" class="login-btn">????????</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="vizew-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="vizewNav">
                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/bg-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="#news">News</a></li>
                                    <li><a href="#contact">Contact Us</a></li>
                                    <li><a href="#">Language</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php">English</a></li>
                                            <li><a href="indexar.php">????????</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Hero Area Start ##### -->
    <section class="hero--area section-padding-80">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-md-7 col-lg-7">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="post-1" role="tabpanel" aria-labelledby="post-1-tab">
                            <!-- Single Feature Post -->
                            <div class="single-feature-post video-post bg-img" style="background-image: url('./Admin/img/<?php echo $imge; ?>');">
                                <!-- Post Content -->
                                <div class="post-content">

                                    <h1 class="post-title"><?php
                                                            if (empty($newsTitle)) {
                                                                echo "No news";
                                                            } else {
                                                                echo $newsTitle;
                                                            }
                                                            ?>
                                    </h1>
                                    <p>
                                        <?php
                                        if (empty($decs)) {
                                            echo " ";
                                        } elseif (strlen($decs) >= 250) {
                                            $decs = substr($decs, 0, 700) . ".....";
                                            echo $decs;
                                        }

                                        ?>
                                    </p>
                                    <a href="single-post.php?id=<?php echo $news_id ?>" class="post-cata" target="_blank">More </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-1 col-lg-1">

                </div>


                <div class="col-12 col-md-4 col-lg-4">

                    <ul class="nav vizew-nav-tab" role="tablist">

                        <li class="nav-item">
                            <?php
                            $valew = last_news();
                            while ($row = mysqli_fetch_assoc($valew)) {

                            ?>
                                <a href='single-post.php?id=<?php echo $row['news_id']; ?>' class="nav-link">

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post style-2 d-flex align-items-center">
                                        <div class="post-thumbnail">
                                            <img src="./Admin/img/<?php echo $row['newsImage']; ?>" alt="">
                                        </div>
                                        <div class="post-content">
                                            <h6 class="post-title"><?php echo $row['newsTitle']; ?></h6>

                                        </div>
                                    </div>

                                </a>
                            <?php
                            }
                            ?>

                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!--MOBILE HERO-->
    <section class="hero" class="d-flex align-items-center">
        <div class="col-12">

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Trending Posts Area Start ##### -->
    <div class="vizew-archive-list-posts-area mb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Archive Catagory & View Options -->
                    <div class="archive-catagory-view mb-50 d-flex align-items-center justify-content-between" id="news">
                        <!-- Catagory -->
                        <div class="archive-catagory">
                            <h4><i class="fa fa-spinner" aria-hidden="true"></i> Trending News </h4>
                        </div>
                    </div>

                    <!-- Single Post Area -->
                    <?php
                    $valew = view_news();
                    while ($row = mysqli_fetch_assoc($valew)) {
                    ?>
                        <div class="single-post-area style-2">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="./Admin/img/<?php echo $row['newsImage']; ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Post Content -->
                                    <div class="post-content mt-0">
                                        <a href='single-post.php?id=<?php echo $row['news_id']; ?>' class="post-title mb-2"><?php echo $row['newsTitle']; ?> </a>
                                        <p class="mb-2">
                                            <?php
                                            if (strlen($row['newsDecs']) > 150) {
                                                $row['newsDecs'] = substr($row['newsDecs'], 0, 200) . ".....";
                                            }
                                            echo $row['newsDecs']
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>


                    <!-- Pagination -->
                    <!-- <nav class="mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav> -->
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Trending Posts Area End ##### -->
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area" id="contact">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-8">
                    <div class="footer-widget mb-70">
                        <?php insert_contact(); ?>
                        <h6 class="widget-title">Contact Us</h6>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="name">Name*</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message*</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" name="message" required></textarea>
                            </div>
                            <button class="btn vizew-btn mt-30" type="submit" name="btn_cont">Send Now</button>
                        </form>
                    </div>

                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">Our Address</h6>
                        <!-- Contact Address -->
                        <div class="contact-address">
                            <p>Phone: +9647707249095</p>
                            <p>Email: admin@aljamey.org</p>
                        </div>
                        <!-- Footer Social Area -->
                        <div class="footer-social-area">
                            <a href="https://web.facebook.com/people/Al-Jamey/100082536110916/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/channel/UCifndUC5_kewlSP0FphN7GQ" target="_blank" class="google-plus"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://twitter.com/jamey_clan" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://wa.me/+9647707249095" target="_blank" class="linkedin"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved <a href="https://www.webe97.com/" target="_blank">WEBE</a>
                        </p>
                    </div>
                    <div class="col-12 col-sm-6">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>


<?php
//View News

function view_news()
{
    global $con;
    $sql = "SELECT * FROM news where type = '0' AND status = '1'  ORDER BY news_id DESC";
    return mysqli_query($con, $sql);
}

function last_news()
{
    global $con;
    $sql = "SELECT * FROM news where type = '1'  AND status = '1' ORDER BY news_id DESC";
    return mysqli_query($con, $sql);
}





function insert_contact()
{
    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_cont'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $query = "INSERT INTO  contact (name , email , message) VALUES ('$name' , '$email' , '$message')";
        $res = mysqli_query($con, $query);
        if ($res) {
            header('location:index.php');
        }
    }
}
?>
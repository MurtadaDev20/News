<?php include 'function/config.php';
$value = view_news_single();

$row = mysqli_fetch_assoc($value);

$newsTitle = $row['newsTitle'];
$newsImage = $row['newsImage'];
$newsDecs = $row['newsDecs'];
$newsWriter = $row['newsWriter'];
$newsDate = $row['newsDate'];
$new_id = $row['news_id']
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
                                $value = last_news();
                                while ($row = mysqli_fetch_assoc($value)) {
                                ?>
                                    <li><a href="single-post.php?id=<?php echo $row['news_id']; ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php echo $row['newsTitle']; ?></a></li>

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
                                <a href="index.php">News</a>
                                <a href="#contact">Contact Us</a>
                            </div>
                            <!-- Login -->
                            <a href='single-post.php?id=<?php echo $new_id; ?>' class="login-btn active">EN</a>
                            <a href="single-postar.php?id=<?php echo $new_id; ?>" class="login-btn">عربي</a>
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
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="index.html">News</a></li>
                                    <li><a href="#contact">Contact Us</a></li>
                                    <li><a href="#">Language</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">English</a></li>
                                            <li><a href="#">عربي</a></li>

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
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Article</a></li>
                            <li class="breadcrumb-item active" aria-current="page">article title </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="post-details-thumb mb-50">
                        <img src="./Admin/img/<?php echo $newsImage ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8 col-xl-7">
                    <div class="post-details-content">
                        <!-- Blog Content -->
                        <div class="blog-content">

                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="single-post.php" class="post-title mb-2"><?php echo $newsTitle ?> </a>

                                <div class="d-flex justify-content-between mb-30">
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-author">By <?php echo $newsWriter; ?></a>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <a href="#" class="post-date"><?php echo $newsDate; ?></a>
                                    </div>
                                </div>
                            </div>

                            <p>
                                <?php echo $newsDecs ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">


                </div>
            </div>
        </div>
        </div>
    </section>
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
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="message">Message*</label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" name="message"></textarea>
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
//View ID
function view_news_single()
{
    global $con;
    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $query = "SELECT * FROM news where news_id = '$id' AND type = '0' AND status = '1'";
        return mysqli_query($con, $query);
    }
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



function last_news()
{
    global $con;
    $sql = "SELECT * FROM news where type = '1' AND status = '1' ORDER BY news_id DESC";
    return mysqli_query($con, $sql);
}

?>
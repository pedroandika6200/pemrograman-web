<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>About - Portofolio Pedro</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <?php
    include_once 'koneksi.php';
    ?>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="assets/img/navbar-logo.png" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="education.php">Education</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="exp.php">Experience</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#page-top">About Me</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact.php">Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- SQL-->
        <?php
        $strSQL = "SELECT * FROM about";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        ?>

        <!-- Masthead-->
        <header class="masthead">
                <div class="text-center">
                    <h2 class="masthead-subheading text-uppercase">About Me</h2>
                    <h3 class="section-subheading text-muted">This page contains information about Pedro's bio in the form of a timeline.</h3>
                </div>
        </header>
        <!-- About-->
        <section class="page-section" id="about">
                <ul class="timeline">
                <?php if ($jmlRowData <= 0) {
                    echo 'Tidak Ada Data Dalam Database';
                }
                else {
                    while($row = mysqli_fetch_assoc($runStrSQL)) {
                        if ($row["id"]%2 == 0){
                ?>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php echo $row["tgl"] ?></h4>
                                <h4 class="subheading"><?php echo $row["ket"] ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $row["isi"] ?></p></div>
                        </div>
                    </li>
                <?php
                        }else{
                ?>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                            <h4><?php echo $row["tgl"] ?></h4>
                                <h4 class="subheading"><?php echo $row["ket"] ?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php echo $row["isi"] ?></p></div>
                        </div>
                    </li>
                <?php
                        }
                    }
                ?>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                And
                                <br />
                                it's me
                                <br />
                                Now!
                            </h4>
                        </div>
                    </li>
                <?php
                }
                ?>
                </ul>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/fedroandika.putra"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/rodr.x6/"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        Copyright © Portofolio Pedro 2020
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="admin.php">Admin? Login</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
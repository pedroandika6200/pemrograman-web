<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin About - Portofolio Pedro</title>
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
                <a class="navbar-brand js-scroll-trigger" href="admin.php"><img src="assets/img/navbar-logo.png" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="admedu.php">Education</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="admexp.php">Experience</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#page-top">About Me</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="admin.php">Messages</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<!-- Masthead-->
<header class="masthead">
                <div class="text-center">
                    <h2 class="masthead-subheading text-uppercase">Admin About</h2>
                    <h3 class="section-subheading text-muted">Your about page data list</h3>
                </div>
        </header>

        <!-- Services-->
        <section class="page-section">
        <div class="container">
        <a href="tambahabout.php" class="btn btn-info">ADD</a>
            <div class="row">
                <div class="col-md-12">
                <table id="listtable" class="table table-solid">
                <thead>
                    <tr>
                    <th>Time</th>
                    <th>Description</th>
                    <th>Content</th>
                    <th>&nbsp;<th>
                    </tr>
                </thead>
                <tbody>

            <!-- SQL-->
            <?php
            $strSQL = "SELECT * FROM about";
            $runStrSQL = mysqli_query($conn,$strSQL);
            $jmlRowData = mysqli_num_rows($runStrSQL);
            
            if ($jmlRowData < 0) {
            echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
            }
            else {
            while($row = mysqli_fetch_assoc($runStrSQL)) {
            ?>
                    <tr>
                    <td><?php echo $row["tgl"] ?></td>
                    <td><?php echo $row["ket"] ?></td>
                    <td><?php echo $row["isi"] ?></td>
                    <td>
                        <a href="editabout.php?id=<?php echo $row["id"] ?>" class="btn btn-info">EDIT</a>
                        <a href="deleteabout.php?id=<?php echo $row["id"]?>" class="btn btn-danger">DELETE</a>
                    </td>
                    </tr>
            <?php 
            }
            }
            ?>
                </tbody>
                </table>
                </div>
            </div>
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
                        <a class="mr-3" href="index.php">Logout</a>
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
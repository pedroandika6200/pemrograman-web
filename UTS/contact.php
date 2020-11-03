<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Contact - Portofolio Pedro</title>
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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="about.php">About Me</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#page-top">Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="masthead">
                <div class="text-center">
                    <h2 class="masthead-subheading text-uppercase">Contact Me</h2>
                    <h3 class="section-subheading text-muted">If you want to give me a message write in the column provided below, maybe I will reply via email or via telephone.</h3>
                </div>
        </header>

    <?php   
    $status = 2;  
    if (isset($_POST['pesan'])) {
        include_once "koneksi.php"; 
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $pesan = $_POST['pesan']; 

         //buat koneksi
         $strsql = "INSERT INTO contact (nama, email, nohp, pesan) 
         VALUES ('$nama','$email','$nohp','$pesan')";
         
         $runSQL = mysqli_query($conn,$strsql);        
         if ($runSQL) {
             $status = 1; //sukses
         }  
         else {
             $status = 0; //tidak sukses;
         }       
    }
    ?>
    <section class="page-section" id="contact">
    <div class="container">
    <!-- Modal -->
    <div class="portfolio-modal modal fade" id="modalcontact" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Confirm Message</h2>
                                    <p class="item-intro text-muted">Send this message to Pedro?</p>
                                    <img class="img-fluid d-block mx-auto" src="" alt="" />
                                    <p id="ms"></p>
                                    <ul class="list-inline">
                                        <li id="nm"></li>
                                        <li id="mail"></li>
                                        <li id="hp"></li>
                                    </ul>
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                    <button id="proses" type="button" class="btn btn-primary" data-dismiss="modal">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php 
            if ($status == 1) {
        ?>    
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Your message has been sent.
            </div>
        <?php 
            }
            else if ($status == 0){
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Sorry <?php echo $nama ?>, your message was not delivered.
            </div>
        <?php 
            }
        ?>

        <!-- Contact-->
        <form id="contactForm" method="post" action="contact.php">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input id="nama" class="form-control" placeholder="Your Name *" type="text" name="nama" required>
                    </div>
                    <div class="form-group">
                        <input id="email" class="form-control" placeholder="Your Email *" type="text" name="email" required>
                    </div>
                    <div class="form-group mb-md-0">
                        <input id="nohp" class="form-control" placeholder="Your Phone *" type="text" name="nohp" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea id="pesan" class="form-control" placeholder="Your Message *" type="text" name="pesan" required></textarea>
                    </div>
                </div>
            </div>
                <div class="text-center">
                    <div id="success"></div>         
                        <input class="btn btn-primary" type="button" id="tombol" value="Send Message">
                </div>
        </form>
        </section>       
    </div>

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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
    $(document).ready(function() {
        $('#proses').click(function(){
            $('#contactForm').submit();
        });
        $('#tombol').click(function(){
            //ambil data dari form
            const nama = $('#nama').val();
            const email = $('#email').val();
            const nohp = $('#nohp').val();
            const pesan = $('#pesan').val();

            $('#nm').text(nama);
            $('#mail').text(email);
            $('#hp').text(nohp);
            $('#ms').text(pesan);
         
            //buka modal
            $('#modalcontact').modal({
                show: true
            });
        });
        });
        </script>
    </body>
</html>

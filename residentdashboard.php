<?php
                            session_start();
                            if($_SESSION["valid"] == true)
                            {
                                $name = $_SESSION["name"];
                                $username = $_SESSION["username"];
                            }
                            ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <style>
       #cover{
        background: #222 url("images/background1.jpg") center center no-repeat;
       }
       #about{
        background: url("images/bgimage1.jpg") center center no-repeat;
       }
     </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/styles.css">

  </head>
  <body  style="background-color: black">
    <nav class="navbar navbar-dark fixed-top bg-inverse navbar-full navbar-expand-lg ml-auto row" id="nav-main" style="background-color: #0E0736;">
     <a href="residentdashboard.php" class="navbar-brand col-lg-4 col-6">EasySociety</a>
     <button class="navbar-toggler col-lg-8 col" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="navbar-collapse collapse float-right" style="margin-right:20px"id="navbarTogglerDemo01">
       <ul class="nav navbar-nav ml-auto" style="text-align:center;">
           <li class="nav-item">
               <a class="nav-link" href="#what-we-do" style="color: #C0C0C0;" onMouseOver="this.style.color='#F2F1FF'"
               onMouseOut="this.style.color='#C0C0C0'">Services</a>
           </li>
           <li class="nav-item ml-0">
               <a class="nav-link" href="#about" style="color: #C0C0C0;" onMouseOver="this.style.color='#F2F1FF'"
               onMouseOut="this.style.color='#C0C0C0'">About</a>
           </li>
		   <li class="nav-item">
		   <button type="submit" class="btn btn-outline-success" style="color:white">Welcome <?php echo $name; ?></button>
		   </li>
            <li class="nav-item">
             <button type="button" class="btn btn-outline-success" style="color:white" data-toggle="modal" data-target="#logoutModal">Logout</button>
            </li>
       </ul>
      </div>
    </nav>

                            


   <section id="cover" style="background-color: #0E0736;">
       <div id="cover-caption" style="color:black;">
           <div class="container float-left">
               <div class="col-sm-6 float-left">
                   <h1><div class="h1" style="font-size:4.5rem;">Welcome to Easy Society</div></h1>
                   <p>EasySociety is all about easing the life of a society resident by connecting them to their society and their workflow.
                      A Web-App that digitalize and revolutionalize the traditional way of housing.</p>
                     <br>
                           <!-- <a href="#what-we-do" class="btn btn-secondary-outline btn-sn" role="button">&darr;</a> -->
               </div>
           </div>
       </div>
   </section>

    <section id="what-we-do" style="background-color: #E1E6EC;">
         <div class="section-content">
             <div class="container">
                 <h2 style="color:black;">SERVICES</h2>
                 <br>
             <div class="row">
                     <div class="col-sm-12">
                         <div class="card-group">
                             <div class="card" style="background-color: #03045E;">
                                 <div class="card-block">
                                     <h4 class="card-title">View Announcements</h4>
                                     <h6 class="card-subtitle"></h6>
                                     <i class="bi bi-megaphone" style="font-size: 10rem; color: white;"></i>
                                 </div>
                                 <div class="card-block">
                                     <a href="layout backup/view_announcements.php"><button type="button" class="btn btn-success-outline" id="btn_3" style="color: #C0C0C0; border-color: #C0C0C0;">learn more</button></a>
                                 </div>
                             </div>

                             <div class="card" style="background-color: #03045E;">
                              <div class="card-block">
                                  <h4 class="card-title">Know Your Visitors</h4>
                                  <h6 class="card-subtitle"></h6>
                              <i class="bi bi-person-badge" style="font-size: 10rem; color: white;"></i>
                            </div>
                              <div class="card-block">
                                <a href="layout backup/visitors-user.php"><button type="button" class="btn btn-success-outline" id="btn_4" style="color: #C0C0C0; border-color: #C0C0C0;">learn more</button></a>
                              </div>
                             </div>

                             <div class="card" style="background-color: #03045E;">
                                 <div class="card-block">
                                     <h4 class="card-title">Manage Maintanance</h4>
                                     <h6 class="card-subtitle"></h6>
                                     <i class="bi bi-receipt" style="font-size: 10rem; color: white;"></i>
                                 </div>
                                 <div class="card-block">

                                    <a href="layout backup/viewduebill.php"><button type="button" class="btn btn-success-outline" id="btn_5" style="color: #C0C0C0; border-color: #C0C0C0;">learn more</button></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </section>

    <section id="about">
        <div class="section-content1">
            <div class="container">
                <div class="col-md-5">
                    <div class="about-text">
                        <h3>About EasySociety</h3>
                        <p class="lead">EASYSOCIETY is a Web-App that acts as a platform between the residents of a society and the activities
                          and working of the society by providing them the services through which they can keep track of important activities and announcements,
                          keeping track of visitors ,online access of the society bills and the complete freedom to share their
                          grievances & ideas at anytime and from anywhere.</p>
                        <p>EasySociety is all about easing the life of a society resident by connecting them to their society and their workflow.
                          A Web-App that digitalize and revolutionalize the traditional way of housing.</p>

                        <h5>Follow me on the web</h5>
                        <a href="#link" class="btn btn-sm btn-outline-success">twitter</a>
                        <a href="#link" class="btn btn-sm btn-outline-success">facebook</a>
                        <a href="#link" class="btn btn-sm btn-outline-success">youtube</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="footer" style="padding-bottom: 0px; padding-top: 10px;">
    <div class="container text-center">
      <h3 class="h3 d-flex justify-content-center">Connnect us!</h3>
      <!-- End newsletter-form -->
      <ul class="social-links d-flex justify-content-center" style="padding-top: 20px;margin-bottom:10px;">
        <li><a href="#link"><i class="bi bi-twitter"></i></a></li>
        <li><a href="#link"><i class="bi bi-facebook"></i></a></li>
        <li><a href="#link"><i class="bi bi-google"></i></a></li>
        <li><a href="#link"><i class="bi bi-linkedin"></i></a></li>
      </ul>
      <p class="p" style="font-size:10px">&#169;Copyright EasySociety.All Rights Reserved</p>
    </div>
  </footer>

   <!-- Modal -->
   <div class="modal fade" id="logoutModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" style="color:black">Ready to Leave?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p style="color:black">Select "Logout" below if you are ready to end your current session.</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logoutcontrol.php">Logout</a>
        </div>
      </div>
      
    </div>
  </div>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
  <script type="text/javascript">
    document.getElementById("btn_1").addEventListener("mouseover", function(){
      this.style.color = "#F2F1FF";
      this.style.border = "#F2F1FF 1px solid"
      this.style.backgroundColor = "transparent";
    });
    document.getElementById("btn_1").addEventListener("mouseout", function(){
      this.style.color = "#C0C0C0";
      this.style.border = "#C0C0C0 1px solid";
    });
    document.getElementById("btn_2").addEventListener("mouseover", function(){
      this.style.color = "#F2F1FF";
      this.style.border = "#F2F1FF 1px solid"
      this.style.backgroundColor = "transparent";
    });
    document.getElementById("btn_2").addEventListener("mouseout", function(){
      this.style.color = "#C0C0C0";
      this.style.border = "#C0C0C0 1px solid";
    });
    document.getElementById("btn_3").addEventListener("mouseover", function(){
      this.style.color = "#F2F1FF";
      this.style.border = "#F2F1FF 1px solid"
      this.style.backgroundColor = "transparent";
    });
    document.getElementById("btn_3").addEventListener("mouseout", function(){
      this.style.color = "#C0C0C0";
      this.style.border = "#C0C0C0 1px solid";
    });
    document.getElementById("btn_4").addEventListener("mouseover", function(){
      this.style.color = "#F2F1FF";
      this.style.border = "#F2F1FF 1px solid"
      this.style.backgroundColor = "transparent";
    });
    document.getElementById("btn_4").addEventListener("mouseout", function(){
      this.style.color = "#C0C0C0";
      this.style.border = "#C0C0C0 1px solid";
    });
    document.getElementById("btn_5").addEventListener("mouseover", function(){
      this.style.color = "#F2F1FF";
      this.style.border = "#F2F1FF 1px solid"
      this.style.backgroundColor = "transparent";
    });
    document.getElementById("btn_5").addEventListener("mouseout", function(){
      this.style.color = "#C0C0C0";
      this.style.border = "#C0C0C0 1px solid";
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>

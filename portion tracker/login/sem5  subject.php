<?php 

                session_start();
        
        
        include("../db/dbconfig2.php");
?>








    

          <!DOCTYPE html>
          <html>
          <head>
            <title>SUBJECT UPDATE</title>
            <!-- Meta Encoding -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=decice-width, initial sacle =1">
            <meta name="description" content="website description">
            <meta name="keyword" content="">

            <!-- Bootstrap CDN -->
            <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

          <!-- jQuery library -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

          <!-- Latest compiled JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <!-- CDN ended -->
          <!-- ICON -->
          <link rel="icon" type="image/png" href="img/logo.png">
          <!-- ICON END -->

          <style type="text/css">
          </style>
          </head>
          <body>
            <nav class="navbar navbar-inverse ">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="../">Hi <?php echo "admin"?> </a>
                </div>
                       <div>
                       <div class="collapse navbar-collapse" id="myNavbar">
                     <ul class="nav navbar-nav navbar-right">
                      <li><a href="../atten.php">Logout</a></li>
                     

                    </ul>
                        </div>
                      </div>
              </div>
            </nav>
          <div cla ss="container-fluid" style="margin-top:5%; ">
            
          <!-- smooth scroll code -->
          <script>
          $(document).ready(function(){
            // Add scrollspy to <body>
            $('body').scrollspy({target: ".navbar", offset: 50});   

             // Add smooth scrolling on all links inside the navbar
            $("#myNavbar a").on('click', function(event) {
              // Make sure this.hash has a value before overriding default behavior
              if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                  scrollTop: $(hash).offset().top
                }, 800 , function(){
             
                  // Add hash (#) to URL when done scrolling (default click behavior)
                  window.location.hash = hash;
                });
              }  // End if
            });
          });


          </script>
          <!-- smooth scroll code ends -->

           <center>
              <div class="container-fluid" style="margin-top:5%; "> 
                <h2>Subject</h2>
                <br></div></center>     
                   
              
                   <div class="container">
        

        <!--<ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#mep">Subjects</a></li>
        </ul> -->

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#up">Microprocessor</a></li>
          <li><a data-toggle="tab" href="#dbms">DBMS</a></li>
          <li><a data-toggle="tab" href="#cn">CN</a></li>
          <li><a data-toggle="tab" href="#tcs">TCS</a></li>
          <li><a data-toggle="tab" href="#mms">Multimedia System</a></li>
        </ul>



        <div class="tab-content">
          <div id="up" class="tab-pane fade in active">
            <br>

            <h3>UPDATE Microprocessor PORTION</h3>
            <br>
            <div class="table-responsive" align="center" class="row">
            
              


                <?php
           
           $result = $conn->query("SELECT * FROM `up_syllabus`");

           ?>

           <table class="table">
            
              
              <tr>
                 <th  ><h4>Chapter_name</h4></th>
                 <th ><h4>Topic_name</h4></th>
                 <th ><h4>Update_Completed_Topic as 1</h4></th>


              </tr>
              <?php 


              while($row = $result->fetch_array()) 
               {
                  echo "<tr> <form action='update up.php' method=post >";
                  echo "<td><input type='text' name='Chapter_name' value='".$row['Chapter_name']."'></td>";
                  echo "<td><input type='text' name='Topic_name' value='".$row['Topic_name']."'></td>";
                  echo "<td><input type='text' name='Check_Completed_Topic' value='".$row['Check_Completed_Topic']."'></td>";
                   echo "<td><input type='hidden' name='id1' value='".$row['id']."'></td>";
                   echo "<td><input type='submit' name='update12' value='UPDATE'></td>";
                   echo "</form> </tr>";
               }
               
               ?>
             


                </table>
             
            
          </div>
          <br>
          <br>
          <br>


            <div align="center" class="p-3 mb-2 bg-secondary text-white">
  
  <h3>UPLOAD FILES FOR STUDENTS</h3>
  <button type="button" class="btn btn-dark" > <a href="https://script.google.com/a/viva-technology.org/macros/s/AKfycbzSbGmto1Ir72wJxzqBiZuYRAJJk029Stnlk8th/exec" >UPLOAD FILES</a></button>

  <h3>VIEW UPLOADED FILE</h3>
  <button type="button" class="btn btn-dark"><a href="https://drive.google.com/open?id=15hWrmx_Nw2kIvXo2-245c-nY_rQC3aFx">VIEW FILE </a></button>

</div>


</div>

        


























        <div id="dbms" class="tab-pane fade ">
            <br>
            <h3>UPDATE DBMS PORTION</h3>
            <br>

            <div  align="center" class="table-responsive" class="row" >

              <?php
           
           $result = $conn->query("SELECT * FROM `dbms_syllabus`");

           ?>

           <table class="table">
              
              <tr>
                 <th><h4>Chapter_name</h4></th>
                 <th><h4>Topic_name</h4></th>
                 <th><h4>Update_Completed_Topic as 1</h4></th>
              </tr>
              <?php 


              while($row = $result->fetch_array()) 
               {
                  echo "<tr> <form action='update dbms.php' method=post >";
                  echo "<td><input type='text' name='Chapter_name' value='".$row['Chapter_name']."'></td>";
                  echo "<td><input type='text' name='Topic_name' value='".$row['Topic_name']."'></td>";
                  echo "<td><input type='text' name='Check_Completed_Topic' value='".$row['Check_Completed_Topic']."'></td>";
                   echo "<td><input type='hidden' name='id1' value='".$row['id']."'></td>";
                   echo "<td><input type='submit' name='update12' value='UPDATE'></td>";
                   echo "</form> </tr>";
               }
               
               ?>
             </table>




              
            </div>
            <br><br><br>







            <div align="center" class="p-3 mb-2 bg-secondary text-white">
  
  <h3>UPLOAD FILES FOR STUDENTS</h3>
  <button type="button" class="btn btn-dark" > <a href="https://script.google.com/a/viva-technology.org/macros/s/AKfycbxmCDI3JHlJsHvczL_-ZSuVwgfoWLy86YUkT-Q6/exec" >UPLOAD FILES</a></button>

  <h3>VIEW UPLOADED FILE</h3>
  <button type="button" class="btn btn-dark"><a href="https://drive.google.com/open?id=1q5UV2DSeYg3OAGxneDtAZSOQI0GQEuzZ">VIEW FILE </a></button>

</div>
            
        </div>

















      <div id="cn" class="tab-pane fade ">
            <br>
            <h3>UPDATE CN PORTION</h3>
            <br>



            <div  align="center" class="table-responsive" class="row" >

              <?php
           
           $result = $conn->query("SELECT * FROM `cn_syllabus`");

           ?>

           <table class="table">
              
              <tr>
                 <th><h4>Chapter_name</h4></th>
                 <th><h4>Topic_name</h4></th>
                 <th><h4>Update_Completed_Topic as 1</h4></th>
              </tr>
              <?php 


              while($row = $result->fetch_array()) 
               {
                  echo "<tr> <form action='update cn.php' method=post >";
                  echo "<td><input type='text' name='Chapter_name' value='".$row['Chapter_name']."'></td>";
                  echo "<td><input type='text' name='Topic_name' value='".$row['Topic_name']."'></td>";
                  echo "<td><input type='text' name='Check_Completed_Topic' value='".$row['Check_Completed_Topic']."'></td>";
                   echo "<td><input type='hidden' name='id1' value='".$row['id']."'></td>";
                   echo "<td><input type='submit' name='update12' value='UPDATE'></td>";
                   echo "</form> </tr>";
               }
               
               ?>
             </table>




              
            </div>
            <br><br><br>









            <div align="center" class="p-3 mb-2 bg-secondary text-white">
  
  <h3>UPLOAD FILES FOR STUDENTS</h3>
  <button type="button" class="btn btn-dark" > <a href="https://script.google.com/a/viva-technology.org/macros/s/AKfycbxt9DEBDp5eitEwxUmc1H4N6qUOimBH95_-Pveu/exec" >UPLOAD FILES</a></button>

  <h3>VIEW UPLOADED FILE</h3>
  <button type="button" class="btn btn-dark"><a href="https://drive.google.com/open?id=1lv4dcDp2x3jcmVEBYuuMce5Kgkh3_g4Y">VIEW FILE </a></button>

</div>
        </div>





















      <div id="tcs" class="tab-pane fade ">
            <br>
            <h3>UPDATE TCS PORTION</h3>
            <br>

            <div  align="center" class="table-responsive" class="row" >

              <?php
           
           $result = $conn->query("SELECT * FROM `tcs_syllabus`");

           ?>

           <table class="table">
              
              <tr>
                 <th><h4>Chapter_name</h4></th>
                 <th><h4>Topic_name</h4></th>
                 <th><h4>Update_Completed_Topic as 1</h4></th>
              </tr>
              <?php 


              while($row = $result->fetch_array()) 
               {
                  echo "<tr> <form action='update tcs.php' method=post >";
                  echo "<td><input type='text' name='Chapter_name' value='".$row['Chapter_name']."'></td>";
                  echo "<td><input type='text' name='Topic_name' value='".$row['Topic_name']."'></td>";
                  echo "<td><input type='text' name='Check_Completed_Topic' value='".$row['Check_Completed_Topic']."'></td>";
                   echo "<td><input type='hidden' name='id1' value='".$row['id']."'></td>";
                   echo "<td><input type='submit' name='update12' value='UPDATE'></td>";
                   echo "</form> </tr>";
               }
               
               ?>
             </table>




              
            </div>
            <br><br><br>














            <div align="center" class="p-3 mb-2 bg-secondary text-white">
  
  <h3>UPLOAD FILES FOR STUDENTS</h3>
  <button type="button" class="btn btn-dark" > <a href="https://script.google.com/a/viva-technology.org/macros/s/AKfycbza2VvZsKI59hRSpgsWF6F8Cs1U9JSLMxDEOGEt/exec" >UPLOAD FILES</a></button>

  <h3>VIEW UPLOADED FILE</h3>
  <button type="button" class="btn btn-dark"><a href="https://drive.google.com/open?id=1887PSBjzEjDJPkHWMlCe4nOTTMEJrI9C">VIEW FILE </a></button>

</div>
        </div>

















        <div id="mms" class="tab-pane fade ">
            <br>
            <h3>UPDATE MULTIMEDIA SYSTEM PORTION</h3>
            <br>



            <div  align="center" class="table-responsive" class="row" >

              <?php
           
           $result = $conn->query("SELECT * FROM `mms_syllabus`");

           ?>

           <table class="table">
              
              <tr>
                 <th><h4>Chapter_name</h4></th>
                 <th><h4>Topic_name</h4></th>
                 <th><h4>Update_Completed_Topic as 1</h4></th>
              </tr>
              <?php 


              while($row = $result->fetch_array()) 
               {
                  echo "<tr> <form action='update mms.php' method=post >";
                  echo "<td><input type='text' name='Chapter_name' value='".$row['Chapter_name']."'></td>";
                  echo "<td><input type='text' name='Topic_name' value='".$row['Topic_name']."'></td>";
                  echo "<td><input type='text' name='Check_Completed_Topic' value='".$row['Check_Completed_Topic']."'></td>";
                   echo "<td><input type='hidden' name='id1' value='".$row['id']."'></td>";
                   echo "<td><input type='submit' name='update12' value='UPDATE'></td>";
                   echo "</form> </tr>";
               }
               
               ?>
             </table>




              
            </div>
            <br><br><br>















            <div align="center" class="p-3 mb-2 bg-secondary text-white">
  
  <h3>UPLOAD FILES FOR STUDENTS</h3>
  <button type="button" class="btn btn-dark" > <a href="https://script.google.com/a/viva-technology.org/macros/s/AKfycbw8pZjoi5S_GXVPBPcc1TJCeZHJAmGIruFFXZURtw/exec" >UPLOAD FILES</a></button>

  <h3>VIEW UPLOADED FILE</h3>
  <button type="button" class="btn btn-dark"><a href="https://drive.google.com/open?id=1nEteIYRMLZfDzEMdVXhkg8YdYH8nemtu">VIEW FILE </a></button>

</div>
        </div>
      </div>


          <!--<div id="mep" class="tab-pane ">
            <h3>MEP attendance</h3>
            <form method="POST">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="number" name="tmep" class="form-control" placeholder="Total lecture" autofocus>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="number" name="pmep" class="form-control" placeholder="Total present" >
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="submit" name="submit" class="form-control btn btn-primary" VALUE="Update">
                </div>
              </div>

              <div id="ip" class="tab-pane ">

            <h3>IP attendance</h3>
            <form method="POST">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="number" name="tip" class="form-control" placeholder="Total lecture" autofocus>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="number" name="pip" class="form-control" placeholder="Total present" >
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="submit" name="submit" class="form-control btn btn-primary" VALUE="Update">
                </div>
              </div>
            </form>
          </div>

          <div id="ip" class="tab-pane ">

            <h3>BCE attendance</h3>
            <form method="POST">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="number" name="tbce" class="form-control" placeholder="Total lecture" autofocus>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="number" name="pbce" class="form-control" placeholder="Total present" >
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="submit" name="submit" class="form-control btn btn-primary" VALUE="Update">
                </div>
              </div>
            </form>
          </div>

           <h3>ADBM attendance</h3>
            <form method="POST">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="number" name="tadbm" class="form-control" placeholder="Total lecture" autofocus>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="number" name="padbm" class="form-control" placeholder="Total present" >
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="submit" name="submit" class="form-control btn btn-primary" VALUE="Update">
                </div>
              </div>
            </form>
          </div>

           <h3>ECOM attendance</h3>
            <form method="POST">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="number" name="tecom" class="form-control" placeholder="Total lecture" autofocus>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="number" name="pecom" class="form-control" placeholder="Total present" >
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input type="submit" name="submit" class="form-control btn btn-primary" VALUE="Update">
                </div>
              </div>
            </form>
          </div>

               

            </form>
          </div>
        </div>
      </div>
              
            </div> -->
          </center>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>







          <!-- Footer -->
          <nav id="footer" style="background-color: black; color: white; padding: 10px;">
          <div class="container">
              <div class="pull-left">
                <p> 2019. &copyAll Rights Reserved. Designed and coded by <a href="https://www.facebook.com/rahul.panga.336?ref=bookmarks" target="_blank">Rahul Panga & Rutuja Patil & Raj Lokhande </a> &nbsp </p>
              </div>
              
          </div>  

          </nav>
      </body>
    </html>
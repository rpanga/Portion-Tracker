<!---<?php

session_start();
            
            
            include("./db/dbconfig2.php");
   

   if(isset($_POST['update']))
   {
      $check= $_POST['$Check_Completed_Topic'];
      $id= $_POST['$id'];




      $query = "UPDATE ml_syllabus SET Check_Completed_Topic = '".$check."' WHERE 'id'= '".$id."'";
         
         $mysqli->query($query);


    }


?>-->







            
            <?php
            include("../db/dbconfig2.php");


   


               
				if(isset($_POST['update12']))
					{
						
						$Check_Completed_Topic1 = $_POST['Check_Completed_Topic'];
						$total1 = count($_POST['id1']);
						$user_id_arr1 = $_POST['id1'];


                    if(is_array($user_id_arr1 ) && is_array($Check_Completed_Topic1) )
                    {
                    	for($i = 0; $i < $total; $i++){
                         $user_id_arr1 = $id[$i];
                         $Check_Completed_Topic1= $Check_Completed_Topic[$i];
                     }


                    		# code...
                    
                    }

					
					   $u_query=" UPDATE ml_syllabus SET  Check_Completed_Topic='".$Check_Completed_Topic1."' WHERE id='". $user_id_arr1 ."'";
						$e_query=mysqli_query($conn,$u_query);

						if ($e_query)
						 {
						 	?>
						 	<script type="text/javascript">
						 		alert("Update Successfully");
						 		header('Location: sem6 subject.php');
						 	</script>


						 	<?php
						 } 
						 else
						 {
						 	?>
						 	<script type="text/javascript">
						 		alert("Update Failed");
						 		header('Location: sem6 subject.php');
						 	</script>
						 	<?php
						 }

					}
						
 ?>

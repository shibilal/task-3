<!DOCTYPE html>
<html>
<head>
	<title>resume</title>
	<link href='https://fonts.googleapis.com/css?family=Almendra SC' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="gresumestyle.css">
</head>
<body>

<div class="flex-container">
 
  <div style="flex-grow: 2"><div class="left-backcolor">

  <div class="photoalign"><img src="A.png" width="100%" height="170px"></div>

  <div class="namebox">

			<div class="shibilal"><p>
				<?php

    			$id = $_GET['id'];

				include "dbconnection.php";
				session_start();
				
    $sql = "SELECT name FROM registration_home where id=$id";
    $result = $conn->query($sql);   
            if ($result->num_rows > 0) {
                	$row = $result->fetch_assoc();
	                   echo $row["name"];
                } else {
	                   echo "0 results";}
            ?></h1>
             <br></div>
			<div class="addre"><p>Designation :   <?php
                $sql1 = "SELECT designation FROM registration_home where id=$id";
                    $result = $conn->query($sql1);
                        if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo $row["designation"];
                            } 
                        else {
                                echo "0 results";
                                }
            ?></p></div>	
			<div class="addre">	<p>Phone : <?php
                $sql1 = "SELECT phone FROM registration_home where id=$id";
                    $result = $conn->query($sql1);
                        if ($result->num_rows > 0) {
        	                   $row = $result->fetch_assoc();
	                           echo $row["phone"];
                            }
                        else {
	                           echo "0 results";
                                }
            ?></p>

			<p>Email : <?php
                $sql1 = "SELECT email FROM registration where id=$id";
                    $result = $conn->query($sql1);
                        if ($result->num_rows > 0) {
        	                   $row = $result->fetch_assoc();
	                           echo $row["email"];
                            }
                        else {
	                           echo "0 results";
                                }
            ?></p>
			</div></div>

</div></div>

  <div style="flex-grow: 8">
  	
  	<div class="resume-heading">
			RESUME
		</div>

		<div class="boxes">
			
			<div class="inside-box-head">CAREER OBJECTIVE :</div>
			<p><?php
                $sql1 = "SELECT career FROM registration_home where id=$id";
                    $result = $conn->query($sql1);
                        if ($result->num_rows > 0) {
        	                   $row = $result->fetch_assoc();
	                           echo $row["career"];
                            }
                        else {
	                           echo "0 results";
                                }
            ?></p>
		</div>

		<div class="boxes">			
			<div class="inside-box-head">ACADAMICS QUALIFICATION :</div>
			<ul>
			<li><p><?php
				$sql= "SELECT acadamic FROM registration_home ORDER BY id DESC LIMIT 1";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
    			// output data of each row
    			$row = $result->fetch_assoc();
    			echo $row["acadamic"];
				} else {
    			echo "0 results";}
				?></p></li>
			
		</ul>
		</div>

		<div class="boxes">
			
		<div class="inside-box-head">SKILLS :</div>
		<?php
		$id=$_SESSION['id'];
		$sql3 = "SELECT skills FROM skills INNER JOIN registration_home on skills.user_id=registration_home.id
		WHERE skills.user_id=$id";

		$result11 = $conn->query($sql3);
		$result11->num_rows;
			if ($result11->num_rows > 0) {
       			while ($row = $result11->fetch_assoc()) {
    	    		echo  "<li>".$row["skills"] . "</li>" ;
    				}
 					}
 					else {
    				echo "0 results";
						}
					?>
		</div>

		<div class="boxes">
			
		<div class="inside-box-head">EXPERIENCE :</div>
		<?php
		$id=$_SESSION['id'];
		$sql4 = "SELECT experience FROM experience INNER JOIN registration_home on experience.user_id=registration_home.id
		WHERE experience.user_id=$id";

		$result12 = $conn->query($sql4);
		$result12->num_rows;
			if ($result12->num_rows > 0) {
       			while ($row = $result12->fetch_assoc()) {
    	    		echo "<li>".$row["experience"] . "</li>"  ;
    				}
 					}
 					else {
    				echo "0 results";
						}
					?>
		</div>

		<div class="boxes">
			
			<div class="inside-box-head">PERSONAL INFORMATION :</div>
			<p><?php
				$sql8= "SELECT personal FROM registration_home ORDER BY id DESC LIMIT 1";
				$result = $conn->query($sql8);
				if ($result->num_rows > 0) {
    			// output data of each row
    			$row = $result->fetch_assoc();
    			echo $row["personal"];
				} else {
    			echo "0 results";}
				?></p>
		</div>

		<div class="boxes">
			
			<div class="inside-box-head">DECLARATIONS :</div>
			<p><?php
				$sql9= "SELECT declaration FROM registration_home ORDER BY id DESC LIMIT 1";
				$result = $conn->query($sql9);
				if ($result->num_rows > 0) {
    			// output data of each row
    			$row = $result->fetch_assoc();
    			echo $row["declaration"];
				} else {
    			echo "0 results";}
				?></p>
		</div>

  </div>

    
</div>
</body>
</html>
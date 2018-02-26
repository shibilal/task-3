<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <link rel="stylesheet" type="text/css" href="reg.css">

</head>

<?php 

include "dbconnection.php";
session_start();

$nameErr=$phoneErr= $emailErr ="";
$name =$designation=$career=$acadamic=$phone=$email=$experience=$personal=$declaration ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $valid = true;

  if (empty($_POST["name"])) {
    $nameErr = "First Name is required";
    $valid = false;
  } else {
    $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z ]*$/ ", $name)) {
      $nameErr = "First Name is  Invalid";
      $valid = false;
    }

  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Mobile Number is required";
    $valid = false;
  } else {
    $phone = test_input($_POST["phone"]);
    if (!preg_match('/^[0-9]*$/', $phone)) {
      $phoneErr = "invalid Mobile Number";
      $valid = false;
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $valid = false;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $valid = false;
    }
  }
   if ($valid) {
    $designation = $_POST['designation'];
    $acadamic = $_POST['acadamic'];
    $career = $_POST['career'];
    $personal = $_POST['personal'];
    $declaration = $_POST['declaration'];
    $skills = $_POST['skills'];
    $experience = $_POST['experience'];
    $file=$_FILES['Upload']['name'];


    $new_filename = '';
    if ($file != '') {
      $allowedExts = array("gif", "jpeg", "jpg", "png");
      foreach ($allowedExts as $item) {
        $flag = 0;
        if (preg_match("/$item$/", $_FILES['Upload']['name'])) {
          $pos = strrpos($file, '.');
          if ($pos === false) {
            $ext = "";
          }

          $ext = substr($file, $pos);
          $dt = date("d-m-Y"); 
          $new_filename = $name . "" . $dt . "" . $file;
          $uploaddir = 'images/';
          $uploadfile = $uploaddir . $new_filename;
          echo $_FILES['Upload']['name'] . $uploadfile; 
          // var_dump(move_uploaded_file($_FILES['Upload']['name'], $uploadfile)); die;
          if (move_uploaded_file($_FILES['Upload']['tmp_name'], $uploadfile)) {
            $flag2 = 2;
            echo "Suc"; 
          } else {
            $flag = 1;
            echo "FAil"; 
          }

        } else {
          $flag = 2;
        }

      }

      if ($flag2 == 2) {
        echo "File is valid, and was successfully uploaded.";
      } else if ($flag == 1) {
        echo "File Uploading Failed!.";
      } else if ($flag == 2) {
        echo "File Uploading Failed!.\nInvalid file format!.";
      }

    }

  
    $sql = "INSERT INTO registration_home (name,designation,phone,email,career,acadamic,personal,declaration,Upload)
              VALUES ('$name ','$designation','$phone','$email','$career','$acadamic','$personal','$declaration','$new_filename')";

        if ($conn->query($sql) === TRUE) {
            $id = mysqli_insert_id($conn);
            $_SESSION['id'] = $id;

            $columns = implode(", ",array_keys($skills));
            $escaped_values = array_map('mysql_real_escape_string', array_values($skills));
            $values  = implode(", ", $escaped_values);
            $count = count($skills);
            for ($i = 0; $i < $count; $i++) {

                $sql3 = "INSERT INTO skills (skills,user_id) VALUES ('$skills[$i]','$id')";
                $conn->query($sql3);
            }
            $columns = implode(", ",array_keys($experience));
            $escaped_values = array_map('mysql_real_escape_string', array_values($experience));
            $values  = implode(", ", $escaped_values);
            $count = count($experience);
            for ($i = 0; $i < $count; $i++) {

                $sql4 = "INSERT INTO experience (experience,user_id) VALUES ('$experience[$i]','$id')";
                $conn->query($sql4);
            }

            header('Location:http://localhost/registration-resume/resume.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

}
          }
        
      
      function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
          }

      ?>


<body>

<div class="container">
  <div class="col-sm-2"></div>
  <div class="col-sm-8 mainbox">
  <h2 class="headh">Registration</h2>
  <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10 experience_marginbottm">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        <?php if ($nameErr) { ?><span class="error">* <?php echo $nameErr;?></span> <?php } ?>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="designation">Designation:</label>
      <div class="col-sm-10 experience_marginbottm">
        <input type="text" class="form-control" id="designation" placeholder="Enter designation" name="designation">
        <?php if ($designationErr) { ?><span class="error">* <?php echo $designationErr;?></span> <?php } ?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone number:</label>
      <div class="col-sm-10 experience_marginbottm">
        <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone">
        <?php if ($phoneErr) { ?><span class="error">* <?php echo $phoneErr;?></span> <?php } ?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10 experience_marginbottm">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        <?php if ($emailErr) { ?><span class="error">* <?php echo $emailErr;?></span> <?php } ?>
      </div>
    </div>
   <div class="form-group">
          <label class="control-label col-sm-2" for="Upload">Image:</label>
          <div class="col-sm-10 experience_marginbottm">
          <input type="file" name="Upload" id="Upload">
        </div>
        </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="career">Career Objective:</label>
      <div class="col-sm-10 experience_marginbottm">
        <input type="text" class="form-control" id="career" placeholder="career objective" name="career">
        <?php if ($careerErr) { ?><span class="error">* <?php echo $careerErr;?></span> <?php } ?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="acadamic">Acadamic Qualification:</label>
      <div class="col-sm-10 experience_marginbottm">
        <input type="text" class="form-control" id="acadamic" placeholder="Acadamic qualification" name="acadamic">
        <?php if ($acadamicErr) { ?><span class="error">* <?php echo $acadamicErr;?></span> <?php } ?>
      </div>
    </div>
    <div class="form-group">

      <label class="control-label col-sm-2">Skills:</label>
      <div class="col-sm-10 experience_marginbottm">
      <DIV id="product">
              <DIV class="float-left"><input type="text" name="skills[]"  />
              <input type="button" name="add_item" value="+" onClick="addMore();" />
              <input type="button" name="del_item" value="-" onClick="deleteRow();" />
       
      </DIV>
    </DIV>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Experience:</label>
      <div class="col-sm-10 experience_marginbottm">
        <DIV id="product1">
              <DIV class="float-left"><input type="text" name="experience[]"  />
              <input type="button" name="add_item1" value="+" onClick="addMore1();" />
              <input type="button" name="del_item1" value="-" onClick="deleteRow1();" />
       
      </DIV>
    </DIV>
    </div>
  </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="personal">Personal Informations:</label>
      <div class="col-sm-10 experience_marginbottm">
        <input type="text" class="form-control" id="personal" placeholder="personal Informations" name="personal">
        <?php if ($personalErr) { ?><span class="error">* <?php echo $personalErr;?></span> <?php } ?>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="declaration">Declaration:</label>
      <div class="col-sm-10 experience_marginbottm">
        <input type="text" class="form-control" id="declaration" placeholder="Declaration" name="declaration">
        <?php if ($declarationErr) { ?><span class="error">* <?php echo $declarationErr;?></span> <?php } ?>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10 experience_marginbottm">
        <button type="submit" name="submit" class="btn btn-default cbotton">Submit</button>
      </div>
    </div>
      <div class="col-sm-2"></div>
    
  </form>
</div>


<script>
$(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });   
  });


    function addMore() {
      $("<DIV>").load("input.php", function() {
        $("#product").append($(this).html());
      });
    }
    function deleteRow() {
      $('DIV.product-item').each(function(index, item){
        jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
              $(item).remove();
            }
        });
      });
    }
    function addMore1() {
      $("<DIV>").load("input1.php", function() {
        $("#product1").append($(this).html());
      });
    }
    function deleteRow1() {
      $('DIV.product1-item1').each(function(index, item){
        jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
              $(item).remove();
            }
        });
      });
    }
    
    
</script>
</body>
</html>



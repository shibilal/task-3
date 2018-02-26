<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <SCRIPT src="http://code.jquery.com/jquery-2.1.1.js"></SCRIPT>
        <style>
            table,th,td {
                border: 1px solid black;
                padding: 9px;
            }
            th{
                background-color: #2d3c2d;
                color:white;
                text-align: center;
            }
            td{

                background-color: #a5bba6;
            }
            .button{
                background-color: black;
                border-radius: 5px;
                padding: 10px;
                color: white;
            }
            h2{
                padding-left: 15px;

            }
            .fullbackground{
                background-color: #e3eff3;
                
                }
        </style>
    </head>
    <body>

    <div class="container fullbackground">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
                <h1>Resume List<h1>
        <form action="registration.php">
            <input type="submit" class="button" value="Create Resume" name="submit">
           </form>
                   
    <?php
        include "dbconnection.php";
            $sql = "SELECT id,name,email,phone FROM registration_home ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                 echo "<table>
                 <tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th>Phone</th>
                 <th>Email</th>
                 <th>Resume</th>
                 </tr>";
                       while ($row = $result->fetch_assoc()) {
                 echo "<tr>
                 <td>" . $row["id"] . "</td>
                 <td>" . $row["name"] . "</td>
                 <td>" . $row["phone"] . "</td>
                 <td> " . $row["email"] . "</td>";
                      $id = $row[id];
                      echo "<td><a href=list-resume.php?id=" . $id . ">Open resume</td></tr>";
                   }
                 echo "</table>";
                    }
                    else {
                           echo "0 results";
                        }
                    ?>
        </div>
        <div class="col-sm-2"></div>
        
    </div>
        
	       
    </body>
    </html>
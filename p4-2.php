<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>p4-2</title>
</head>
<body>
    <style>
     table, th, td 
     {
       border:1px solid black;
     }
    </style>
    Enter the marks of subject:
    <form action="p4-2.php" method="post">
     Marks of AOOP:
     <br>   
     <input type="text" name="AOOP" require >
     <br>
     Marks of IWD:
     <br>
     <input type="text" name="IWD" require>
     <br>
     Marks of ISE:
     <br>
     <input type="text" name="ISE" require>
     <br>
     Marks of CN:
     <br>
     <input type="text" name="CN" require>
     <br>
     <input type="submit" name="submit" value="result">
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $aoop=$_POST["AOOP"];
    $iwd=$_POST["IWD"];
    $ise=$_POST["ISE"];
    $cn=$_POST["CN"];
    $subject_marks = array("AOOP" => $aoop, "IWD" => $iwd, "ISE" => $ise, "CN" => $cn);
    $subject_grades = array();

    foreach($subject_marks as $subject => $marks){
        if($marks >= 85){
            $grade='AA';
        }
        elseif($marks >= 75){
            $grade='AB';
        }
        elseif($marks >= 65){
            $grade='BB';
        }
        elseif($marks >= 55){
            $grade='BC';
        }
        elseif($marks >= 45){
            $grade='CC';
        }
        elseif($marks >= 40){
            $grade='CD';
        }
        elseif($marks >= 35){
            $grade='DD';
        }
        else{
            $grade='FF';
        }
        $subject_grades[$subject]=$grade;
    }

    echo "<table>";
    echo "<tr>
          <th>Subject</th>
          <th>\tGrade</th>
          </tr>";
    foreach($subject_grades as $subject => $grade){
        echo "<tr>
              <td>$subject</td>
              <td>$grade</td>
              </tr>";
    }
    echo "</table>";
}
?>
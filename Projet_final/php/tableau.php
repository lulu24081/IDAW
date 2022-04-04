<?php
            require_once("template_header.php");
        ?>

<?php
  
// Username is root
$user = 'root';
$password = 'root'; 
  
// Database name is gfg
$database = 'PROJET_FINAL'; 
  
// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM Aliments ORDER BY  nom ASC";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>

<!DOCTYPE html>
<html lang="fr">
  
<head>
    <meta charset="UTF-8">
    <title>Les aliments</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #black;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
        body{
            background: #095e64;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>Composition des aliments(Pour 100g) </h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>nom</th>
                <th>Calorie</th>
                <th>Lipide</th>
                <th>Glucide</th>
                <th>Fibre</th>
                <th>Proteine</th>


                
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['nom'];?></td>
                <td><?php echo $rows['Calorie'];?></td>
                <td><?php echo $rows['Lipide'];?></td>
                <td><?php echo $rows['Glucide'];?></td>
                <td><?php echo $rows['Fibre'];?></td>
                <td><?php echo $rows['Proteine'];?></td>
                
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>




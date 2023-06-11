<?php
$connect = mysqli_connect("sql10.freesqldatabase.com", "sql10618293", "wMEuIEQasK", "sql10618293");
$sql = "SELECT * FROM LED3";  
$result = mysqli_query($connect, $sql);
?>


<form method="POST" action="./excel.php">
    <input type="datetime-local" name="start_date" required>
    <input type="datetime-local" name="end_date" required>
    <input style="width:150px; height: 50px" type="submit" name="export_excel" class="btn btn-success" value="Export to Excel" /> 
</form>

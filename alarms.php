<?php
//fetch.php
$connect = mysqli_connect("sql10.freesqldatabase.com", "sql10618293", "wMEuIEQasK", "sql10618293");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>php testing</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/styles.css">
  </head>
  <body  style="background-color:#e6e8ed">
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <input><span class="material-icons-outlined">search</span></input>
        </div>
        
        <div class="dp">
              <ul>
                  <li><a href="#">Chose Section</a>
                      <ul class="dropdown">
                          <li><a href="./base.php">Section 1</a></li>
                          <li><a href="#">Section 2</a>
                          <li><a href="#">Section 3</a>
                          <li><a href="#">...</a>
                          <li><a href="#">Section n</a>
                      </ul>
                  </li>
              </ul>
          </div>
        <div class="header-right">
        <button  style=" background-color: white; height:30px"><a href="./alarms.php" style="color:black"><span class="material-icons-outlined" >notifications</span></button>
        </a>
        <button  style=" background-color: white; height:30px"><a href="./home.php" style="color:black"><span class="material-icons-outlined" >home</span></button>
        </a>
          <span class="material-icons-outlined" >account_circle</span>
        </div>
      </header>
      <!-- End Header -->
      <style>

*{
      margin: 0; 
      padding: 0;
      font-family: sans-serif;
}
.banner{
    width: 100%;
    height: 100vh;
    background-image: url(123.jpeg); 
    background-size: cover;
    background-position: center;
}

table {
    
    min-width: max-content;
    
    border-collapse: separate;
    border-spacing: 0px;    
    
}



table th{
    position: sticky; 
    top: 0px;
    
    background-color: #133b5c;
    color: rgb(241, 245, 179);
    
    text-align: center;
    font-weight: normal;
    font-size: 18px;
    outline: 0.7px solid black;
    border: 1.5px solid black;

} 



table th, table td {
    
    padding: 15px;
    padding-top: 10px;
    padding-bottom: 10px;
    
}

table td {
    text-align: left;
    
    font-size: 15px;
    border: 1px solid rgb(177, 177, 177);
    padding-left: 20px;
    
}



.navbar{
    width: 90%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.navbara{
    width: 90%;
    margin: auto;
    padding: 10px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo{
    width: 200px;
    cursor: pointer;
}
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}
.navbar ul li a{
    text-decoration: none;
    color: white;
    text-transform: uppercase;
}

.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #009688;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}
.navbar ul li:hover::after{
    width: 100%;
}
.navbara ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}
.navbara ul li a{
    text-decoration: none;
    color: black;
    text-transform: uppercase;
}

.navbara ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #009688;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}
.navbara ul li:hover::after{
    width: 100%;
}

table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 17px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
      <!-- Sidebar -->
        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <span class="material-icons-outlined"><img src="./static/1.png" class="logo" width="200"></span>
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>

            <ul style="font-size:15px" class="sidebar-list">
        <li class="sidebar-list-item">
                    <a href="./base.php">
                        <span class="material-icons-outlined">settings</span> Overall look
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./Charts.php" >
                        <span class="material-icons-outlined">battery_unknown</span> Battery SOC
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./Graphs.php" >
                        <span class="material-icons-outlined">bolt</span> Load current AND Chargecurrent AND Charge_State
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a  href="./pie-Charts.php" >
                        <span  class="material-icons-outlined">battery_0_bar</span> remaining gridcharge capacity AND remaining battery capacity
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./data4.php" >
                        <span class="material-icons-outlined">offline_bolt</span> PV Voltage AND PV Voltage goal
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./data5.php" >
                        <span class="material-icons-outlined">query_stats</span> PWM duty cycle
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./data6.php" >
                        <span class="material-icons-outlined">query_stats</span> recharged by ACgrid - counter
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./data7.php" >
                        <span class="material-icons-outlined">query_stats</span> MPP statemachine event and cwr statemachine state
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./data8.php" >
                        <span class="material-icons-outlined">battery_unknown</span> Battery Voltage AND Battery Voltage Threshold
                    </a>
                </li>
                <li class="sidebar-list-item">

                    <a href="./data9.php" >
                        <span class="material-icons-outlined">light_mode</span> Daylength AND Average Nightlength AND Nightlength
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./data10.php" >
                        <span class="material-icons-outlined">device_thermostat</span>internal Temperature AND external Temperature
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a  href="./data11.php" >
                        <span  class="material-icons-outlined">thermostat</span> FET Temperature 
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./data12.php" >
                        <span class="material-icons-outlined">query_stats</span>  MPP State
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./data13.php" >
                        <span class="material-icons-outlined">query_stats</span> PWM State
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./data14.php" >
                        <span class="material-icons-outlined">query_stats</span> Load 2 State AND Load 1 State
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./data15.php" >
                        <span class="material-icons-outlined">query_stats</span> time counter

                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./HVD_active.php">
                        <span class="material-icons-outlined">query_stats</span> HVD_active
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./wayni.php">
                    <span class="material-symbols-outlined"> database</span> Database
                    </a>
                </li>

                <li class="sidebar-list-item">
                    <a href="./alarms.php" >
                        <span class="material-icons-outlined">notifications</span> Reports
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="./home.php" >
                        <span class="material-icons-outlined">home</span> Home
                    </a>
                </li>
            </ul>

        </aside>
      <!-- End Sidebar -->








<div><?php
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM data 
  WHERE id LIKE '%".$search."%'
  OR real_time LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM LED3 order by id desc LIMIT 10 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive" style="flex:1 1 auto;padding:1rem 1rem;font-size:10px; text-align:center;padding:.5rem 1rem;margin-bottom:0;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125);position:relative;display:flex;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem; margin-top:3rem;flex:1 0 0%">
   <table style="border-collapse: separate;width: 100%; border: 10px solid;border-width:1px 0; text-align:center;border-bottom: 1px solid #ddd">
    <tr style="font-size:15px;text-align:center;background:lightblue; background-color:#212529; color:#fff;">
    <th>real_time</th>
     <th>type</th>
     <th>dataname</th>
     <th>value?</th>

    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr style="text-align:left">
   <td>'.$row["real_time"].'</td>
   <td>MINOR</td>
   <td>temperatue very high</td>

   <td>'.$row["Chargecurrent"].'</td>


   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
?>

    <div class="main-title">
                <p class="font-weight-bold">ALERTS</p>
            </div>
</div>
    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>
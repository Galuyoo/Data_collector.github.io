<?php

$username = "sql10618293";
$password = "wMEuIEQasK";
$database = "sql10618293";

try {
  $pdo = new PDO("mysql:host=sql10.freesqldatabase.com;database=$database", $username, $password);
  // Set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("ERROR: Could not connect. " . $e->getMessage());
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DATA FILTER</title>
  
  <script type="text/javascript">
    function preventback() {
      window.history.forward()
    };
    setTimeout("preventback()", 0);
    window.onunload = function() {
      null;
    }
  </script>
  <script>
    window.onload = () => {
      console.log(document.querySelector("#emp-div.dp > ul > ul:nth-child(1) > li:nth-child(2) ").innerHTML);
    };

    getUniqueValuesFromColumn()
  </script>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./css/styles.css">
  <script src="sidebar.js"></script>

  <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto);


    body {
      font-family: Roboto, sans-serif;
    }

    #chart1 {
      max-width: 750px;
      margin: 35px auto;
      width: 100%;
      height: 100%;

    }
  </style>

  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }

    ::-webkit-scrollbar {
      width: 5px;
      height: 6px;
    }

    .outer-wrapper {
      margin-top: 40px;
      margin-left: 20px;
      margin-right: 20px;
      border: 1px solid black;
      border-radius: 4px;
      box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.9);
      max-width: fit-content;
      max-height: fit-content;
    }

    .row {
      display: flex;

    }

    .sidebar {
      flex: 5%;
      background: #d79a53;
      padding: 20px;
      overflow: hidden;
      overflow-y: scroll;
      margin-top: -9999px;
      margin-bottom: -9999px;
      padding-top: 9999px;
      padding-bottom: 9999px;
      font-size: small;
      background-image: url(./img/side.png);
      color: #ffffff;



    }

    .column {
      flex: 75%;
    }


    .filteringdrops {
      border-radius: 5px;
    }

    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px #a5aaad;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #4f35a1;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background-color: #a5aaad;
    }

    div.dp ul {
      list-style: none;
      background: #cb8744;
    }

    .overflow {
      overflow: hidden;
    }

    div.dp ul li {
      display: inline-block;
      position: relative;
    }

    div.dp ul li a {
      display: block;
      padding: 20px 25px;
      color: #ffffff;
      text-decoration: none;
      text-align: center;
      font-size: 20px;
    }

    div.dp ul li ul.dropdown li {
      display: block;
    }

    div.dp ul li ul.dropdown {
      width: 100%;
      background: #22438c;
      position: absolute;
      z-index: 999;
      display: none;
      max-height: 300px;
      overflow-y: scroll;
    }

    div.dp ul li a:hover {
      background: #112c66;
    }

    div.dp ul li:hover ul.dropdown {
      display: block;
    }

    .chartMenu {
      width: 100vw;
      height: 40px;
      background: #1A1A1A;
      color: white;
    }

    .chartMenu p {
      padding: 10px;
      font-size: 20px;
    }

    .chartCard {
      width: 100vw;
      height: calc(100vh - 40px);
      background: rgba(0, 0, 49, 0.39);
      background-image: url(./static/filterb.png);
      width: 100%;
      height: 100vh;
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .waynitaha {
      background: rgba(0, 0, 49, 0.39);
    }

    .chartBox {
      width: 65%;
      padding: 20px;
      border-radius: 20px;
      border: solid 1px rgba(131, 32, 255, 0.8);
      background: #e7d4d4;
    }
  </style>
</head>

<body> <?php
        // Attempt select query execution
        try {
          $sql = "SELECT * FROM sql10618293.LED3 order by id desc LIMIT 10";
          $result = $pdo->query($sql);
          if ($result->rowCount() > 0) {
            $Load_current = array();
            $remaining_battery_capacity = array();
            $Battery_Voltage_Threshold = array();
            $Battery_SOC = array();
            $data1 = array();
            $data2 = array();
            $data3 = array();
            $Chargecurrent = array();
            $time_counter = array();
            $Average_Nightlength = array();
            $Nightlength = array();
            $Load_2_State = array();
            $PWM_State = array();
            $HVD_active = array();
            $MPP_State = array();
            $FET_Temperature = array();
            $external_Temperature = array();
            $internal_Temperature = array();
            $Battery_Voltage = array();
            $Charge_State = array();
            $Load_1_State = array();
            $Firmware_Version = array();
            $cwr_statemachine_state = array();
            $MPP_statemachine_event = array();
            $recharged_by_AC_grid_counter = array();
            $PWM_duty_cycle = array();
            $PV_Voltage_goal = array();
            $PV_Voltage = array();
            $remaining_gridcharge_capacity = array();
            $Daylength = array();
            $real_time = array();
            while ($row = $result->fetch()) {
              $Load_current[] = $row["Load current"];
              $Daylength[] = $row["Daylength"];
              $remaining_gridcharge_capacity[] = $row["remaining gridcharge capacity"];
              $remaining_battery_capacity[] = $row["remaining battery capacity"];
              $PV_Voltage[] = $row["PV Voltage"];
              $PV_Voltage_goal[] = $row["PV Voltage goal"];
              $PWM_duty_cycle[] = $row["PWM duty cycle"];
              $recharged_by_AC_grid_counter[] = $row["recharged by AC- grid - counter"];
              $MPP_statemachine_event[] = $row["MPP statemachine event"];
              $cwr_statemachine_state[] = $row["cwr statemachine state"];
              $Firmware_Version[] = $row["Firmware Version"];
              $Load_1_State[] = $row["Load 1 State"];
              $Charge_State[] = $row["Charge State"];
              $Battery_Voltage[] = $row["Battery Voltage"];
              $Battery_Voltage_Threshold[] = $row["Battery Voltage Threshold"];
              $Battery_SOC[] = $row["Battery SOC"];
              $internal_Temperature[] = $row["internal Temperature"];
              $external_Temperature[] = $row["external Temperature"];
              $FET_Temperature[] = $row["FET Temperature"];
              $MPP_State[] = $row["MPP State"];
              $HVD_active[] = $row["HVD active"];
              $PWM_State[] = $row["PWM State"];
              $Load_2_State[] = $row["Load 2 State"];
              $Nightlength[] = $row["Nightlength"];
              $Average_Nightlength[] = $row["Average Nightlength"];
              $time_counter[] = $row["time counter"];
              $Chargecurrent[] = $row["Chargecurrent"];
              $real_time[] = $row["real_time"];
            }

            unset($result);
          } else {
            echo "No records matching your query were found.";
          }
        } catch (PDOException $e) {
          die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }

        // Close connection
        unset($pdo);
        ?>

<div>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="navbar.css">
    <style>
 
  nav {
    display: flex;
    background-color: #333;
    color: #fff;
    width: 100%;
  }
   .logo {
    max-width: 50%;
    height: auto;
    margin: 0;
    padding: 0;
  }
  li {
    padding: 0px;
  }

  a {
    text-decoration: none;
    color: #fff;
  }

  .checkbtn {
    font-size: 30px;
    color: white;
    cursor: pointer;
    display: none;
  }

  #check {
    display: none;
  }

@media (max-width: 952px) {
    .checkbtn {
      display: block;
      margin-right: 20px;
    }
    .chartBox {
      width: 100%;
    }
ul {
      position: fixed;
      top: 80px;
      left: 0;
      width: 100%;
      height: 90vh;
      background: #333;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      transition: all 0.5s ease;
      opacity: 0;
      z-index: 1;
    }

ul li {
      margin: 20px 0;
      display: block;
    }

#check:checked ~ ul {
      opacity: 1;
      left: 0;
    }
  }
  @media(max-width: 858px){
    .checkbtn{
        display: block;
    }
    ul {
      position: fixed;
      width: 100%;
      height: 100vh;
      margin-left: auto;
      background: #2c3e50;
      top: 80px;
      left: -100%;
      text-align: center;
      transition: all 0.5s;
      z-index: 999; /* set a high z-index value */
    }
  }
</style>

<nav class="navbar">
  <a href="./home.php"><img src="./static/agamine_logo.png" class="logo"></a>
  <input type="checkbox" id="check">
  <label for="check" class="checkbtn">
    <i class="fa fa-bars"></i>
  </label>
  <ul>
    <li><a href="./base.php">Sections</a></li>
    <li><a href="./alarms.php">Events</a></li>
    <li><a href="./wayni.php">Database</a></li>
    <li><a href="./home.php">home</a></li>
  </ul>
</nav>


  <div class="sec-center" style="margin-left: 25%; margin-bottom: 0;"> 	
	  	<input class="dropdown" type="checkbox" id="dropdown" name="dropdown"/>
	  	<label class="for-dropdown" for="dropdown">Dropdown Menu <i class="uil uil-arrow-down"></i></label>
  		<div class="section-dropdown"> 
		  	<input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub"/>

  			<a href="#">LED1 <i class="uil uil-arrow-right"></i></a>
  			<a href="#">LED2 <i class="uil uil-arrow-right"></i></a>
        <a href="#">... <i class="uil uil-arrow-right"></i></a>

  		</div>
  	</div>
    <style>
   

*::before,
*::after {
  box-sizing: border-box;
}
body{
	color: #fff;
	background-color: #1f2029;
	overflow-x: auto;
 
}
#dropdown {
  display: none;
}
#dropdown-sub {
  display: none;
}
.sec-center {
  position: relative;
  max-width: 30%;
  text-align: center;
  z-index: 200;
}


.dropdown:checked + label,
.dropdown:not(:checked) + label{
  position: relative;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  font-size: 15px;
  line-height: 2;
  height: 50px;
  transition: all 200ms linear;
  border-radius: 4px;
  width: 220px;
  letter-spacing: 1px;
  display: flex;
  display: flex;
  display: inline-flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  text-align: center;
  border: none;
  background-color: #ffeba7;
  cursor: pointer;
  color: #102770;
  box-shadow: 0 12px 35px 0 rgba(255,235,167,.15);
}

.dropdown:not(:checked) + label .uil {
  font-size: 24px;
  margin-left: 10px;
  transition: transform 200ms linear;
}
.dropdown:checked + label .uil {
  transform: rotate(180deg);
  font-size: 24px;
  margin-left: 10px;
  transition: transform 200ms linear;
}
.section-dropdown {
  position: absolute;
  padding: 5px;
  background-color: #111;
  top: 70px;
  left: 0;
  width: 100%;
  border-radius: 4px;
  display: block;
  box-shadow: 0 14px 35px 0 rgba(9,9,12,0.4);
  z-index: 2;
  opacity: 0;
  pointer-events: none;
  transform: translateY(20px);
  transition: all 200ms linear;
}

.dropdown:checked ~ .section-dropdown{
  opacity: 1;
  pointer-events: auto;
  transform: translateY(0);
}

a {
  position: relative;
  color: #fff;
  transition: all 200ms linear;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  font-size: 15px;
  border-radius: 2px;
  padding: 5px 0;
  padding-left: 20px;
  padding-right: 15px;
  margin: 2px 0;
  text-align: left;
  text-decoration: none;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  justify-content: space-between;
    -ms-flex-pack: distribute;
}

.section-dropdown-sub {
  position: relative;
  display: block;
  width: 100%;
  pointer-events: none;
  opacity: 0;
  max-height: 0;
  padding-left: 10px;
  padding-right: 3px;
  overflow: hidden;
  transition: all 200ms linear;
}
.dropdown-sub:checked ~ .section-dropdown-sub{
  pointer-events: auto;
  opacity: 1;
  max-height: 999px;
}
.section-dropdown-sub a {
  font-size: 14px;
}
.section-dropdown-sub a .uil {
  font-size: 20px;
}



.box select {
        background-color: #0563af;
        color: white;
        padding: 12px;
        width: 200px;
        border: none;
        font-size: 20px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
        -webkit-appearance: button;
        appearance: button;
        outline: none;
        max-height: 100vh;
        /* set max height to full viewport height */
        overflow-y: auto;
        /* add scroll bar when content exceeds max height */
      }    
    </style>
  </div>
  <!-- Sidebar -->

  <!-- HTML Code -->


  
  
  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner diagonal part-1"></div>
    <div class="spinner horizontal"></div>
    <div class="spinner diagonal part-2"></div>
  </label>
  <div id="sidebarMenu">

              <input id="selectallcheckbox" type="checkbox" onclick="updateAll(this)" checked="0" style="margin: 10px 0px 10px 20px;">
              <snap style="color:#ffffffff;font-size: x-large; font-family: Geneva;"> select all</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="0" value="0" style="margin: 10px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> Nightlength</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="0" value="1" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> Average_Nightlength</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="2" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> time_counter</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="3" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> Chargecurrent</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="4" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> Load_1_State</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="5" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> Charge_State</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="6" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;">Battery_Voltage</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="7" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> Battery_Voltage_Threshold</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="8" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> Battery_SOC</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="9" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> internal_Temperature</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="10" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> external_Temperature</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="11" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> FET_Temperature</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="12" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> MPP_State</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="13" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> HVD_active</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="14" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> PWM_State</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="15" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> Load_2_State</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="16" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> Load_current</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="17" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> Daylength</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="18" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> remaining_gridcharge_capacity</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="19" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> remaining_battery_capacity</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="20" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> PV_Voltage</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="21" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> PV_Voltage_goal</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="22" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> PWM_duty_cycle</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="23" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> recharged_by_AC_grid_counter</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="24" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> MPP_statemachine_event</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="25" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> cwr_statemachine_state</snap><br>
              <input class="datacheckbox" type="checkbox" onclick="updateChart(this)" checked="" value="26" style="margin: 6.5px 0px 6.5px 0px;">
              <snap style="font-size: medium;"> Firmware_Version</snap><br>
  </div>
  <style>
   /* CSS Code */
   @import url('https://fonts.googleapis.com/css?family=Varela+Round');
html, body {
    overflow-x: hidden;
    
}
body {
    background: #1f2029;
    padding: 0;
    margin: 0;
    font-family: 'Varela Round', sans-serif;
}
#openSidebarMenu{
  display: none;
}
.header {
    display: block;
    margin: 0 auto;
    width: 100%;
    max-width: 100%;
    box-shadow: none;
    background-color: #0563af;
    position: fixed;
    height: 60px!important;
    overflow: hidden;
    z-index: 10;
}
.main {
    margin: 0 auto;
    display: block;
    height: calc(100vh - 60px); /* changed to 100vh - 60px */
    margin-top: 60px;
}
.mainInner{
    display: table;
    height: 100%;
    width: 100%;
    text-align: center;
}
.mainInner div{
    display:table-cell;
    vertical-align: middle;
    font-size: 3em;
    font-weight: bold;
    letter-spacing: 1.25px;
}
#sidebarMenu {
    height: 100%;
    position: absolute;
    left: 0;
    width: 250px;
    margin-top: 0;
    transform: translateX(-250px);
    transition: transform 250ms ease-in-out;
    background: linear-gradient(180deg, #cb8744 0%, #d79a53 100%);
    overflow: auto;
}


.sidebarMenuInner{
    margin:0;
    padding:0;
    border-top: 1px solid rgba(255, 255, 255, 0.10);
    position: fixed;
}
.sidebarMenuInner li{
    list-style: none !important;
    color: #fff !important;
    text-transform: uppercase !important;
    font-weight: bold !important;
    padding: 20px !important;
    cursor: pointer !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.10) !important;
}
.sidebarMenuInner li span{
    display: block !important;
    font-size: 14px !important;
    color: rgba(255, 255, 255, 0.50) !important;
}
.sidebarMenuInner li a{
    color: #fff !important;
    text-transform: uppercase !important;
    font-weight: bold !important;
    cursor: pointer !important;
    text-decoration: none !important;
}
input[type="checkbox"]:checked ~ #sidebarMenu {
    transform: translateX(0);
}

input[type=checkbox] { /*check boxes in the side */
    transition: all 0.3s;
    box-sizing: border-box;
    display: fixed;
}
.sidebarIconToggle {
    transition: all 0.3s;
    box-sizing: border-box;
    cursor: pointer;
    position: absolute;
    z-index: 99;
    height: 100%;
    width: 100%;
    top: 105px;
    left: 15px;
    height: 22px;
    width: 22px;
}
.spinner {
    transition: all 0.3s;
    box-sizing: border-box;
    position: absolute;
    height: 3px;
    width: 100%;
    background-color: #fff;
}
.horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
}
.diagonal.part-1 {
    position: relative;
    transition: all 0.3s;
    box-sizing: border-box;
    float: left;
}
.diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    opacity: 0;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .diagonal.part-1 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(135deg);
    margin-top: 8px;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(-135deg);
    margin-top: -9px;

}
/* for screens smaller than 768px */
@media screen and (max-width: 768px) {
  .openSidebarMenu {
    width: 100%;
    height: auto;
  }
  
}

/* for screens larger than 768px */
@media screen and (min-width: 768px) {
  .openSidebarMenu {
    width: 300px;
    height: 100%;
  }
}
@media (max-width: 768px) {
  .header {
    height: auto;
  }

  .main {
    margin-top: 0;
  }
}
@media (min-width: 768px) {
  .header {
    height: auto;
  }

  .main {
    margin-top: 0;
  }
}



  </style>

  <div class="column">
    <div class="waynitaha">
      <div class="chartCard">
        <div class="chartBox">
          <input type="date" onchange="startDateFilter(this)" value="2023-05-13" min="2023-02-28" max="2024-03-18">
          <input type="date" onchange="endDateFilter(this)" value="2023-05-20" min="2023-02-28" max="2024-03-23">
          <canvas id="myChart"></canvas>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <script>
    const Load_current = <?php echo json_encode($Load_current); ?>;
    const Nightlength = <?php echo json_encode($Nightlength); ?>;
    const Average_Nightlength = <?php echo json_encode($Average_Nightlength); ?>;
    const time_counter = <?php echo json_encode($time_counter); ?>;
    const Chargecurrent = <?php echo json_encode($Chargecurrent); ?>;
    const Load_1_State = <?php echo json_encode($Load_1_State); ?>;
    const Charge_State = <?php echo json_encode($Charge_State); ?>;
    const Battery_Voltage = <?php echo json_encode($Battery_Voltage); ?>;
    const Battery_Voltage_Threshold = <?php echo json_encode($Battery_Voltage_Threshold); ?>;
    const Battery_SOC = <?php echo json_encode($Battery_SOC); ?>;
    const internal_Temperature = <?php echo json_encode($internal_Temperature); ?>;
    const external_Temperature = <?php echo json_encode($external_Temperature); ?>;
    const FET_Temperature = <?php echo json_encode($FET_Temperature); ?>;
    const MPP_State = <?php echo json_encode($MPP_State); ?>;
    const HVD_active = <?php echo json_encode($HVD_active); ?>;
    const PWM_State = <?php echo json_encode($PWM_State); ?>;
    const Load_2_State = <?php echo json_encode($Load_2_State); ?>;
    const Daylength = <?php echo json_encode($Daylength); ?>;
    const remaining_gridcharge_capacity = <?php echo json_encode($remaining_gridcharge_capacity); ?>;
    const remaining_battery_capacity = <?php echo json_encode($remaining_battery_capacity); ?>;
    const PV_Voltage = <?php echo json_encode($PV_Voltage); ?>;
    const PV_Voltage_goal = <?php echo json_encode($PV_Voltage_goal); ?>;
    const PWM_duty_cycle = <?php echo json_encode($PWM_duty_cycle); ?>;
    const recharged_by_AC_grid_counter = <?php echo json_encode($recharged_by_AC_grid_counter); ?>;
    const MPP_statemachine_event = <?php echo json_encode($MPP_statemachine_event); ?>;
    const cwr_statemachine_state = <?php echo json_encode($cwr_statemachine_state); ?>;
    const Firmware_Version = <?php echo json_encode($Firmware_Version); ?>;
    const real_time = <?php echo json_encode($real_time); ?>;
    //console.log(real_time)
    const real_time1 = real_time.map((day, index) => {
      let dayjs = new Date(day);
      return dayjs.setHours(0, 0, 0, 0);
    });

    console.log(real_time1)
    // setup 
    const data = {
      labels: real_time1,
      datasets: [{
          label: 'Nightlength',
          data: Nightlength,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'Average_Nightlength',
          data: Average_Nightlength,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'time_counter',
          data: time_counter,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        }

        ,
        {
          label: 'Chargecurrent',
          data: Chargecurrent,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'Load_1_State',
          data: Load_1_State,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'Charge_State',
          data: Charge_State,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'Battery_Voltage',
          data: Battery_Voltage,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'Battery_Voltage_Threshold',
          data: Battery_Voltage_Threshold,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'Battery_SOC',
          data: Battery_SOC,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'internal_Temperature',
          data: internal_Temperature,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'external_Temperature',
          data: external_Temperature,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'FET_Temperature',
          data: FET_Temperature,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'MPP_State',
          data: MPP_State,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'HVD_active',
          data: HVD_active,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'PWM_State',
          data: PWM_State,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'Load_2_State',
          data: Load_2_State,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'Load_current',
          data: Load_current,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'Daylength',
          data: Daylength,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'remaining_gridcharge_capacity',
          data: remaining_gridcharge_capacity,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'remaining_battery_capacity',
          data: remaining_battery_capacity,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'PV_Voltage',
          data: PV_Voltage,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'PV_Voltage_goal',
          data: PV_Voltage_goal,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        },
        {
          label: 'PWM_duty_cycle',
          data: PWM_duty_cycle,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        }

        ,
        {
          label: 'recharged_by_AC_grid_counter',
          data: recharged_by_AC_grid_counter,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        }

        ,
        {
          label: 'MPP_statemachine_event',
          data: MPP_statemachine_event,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        }

        ,
        {
          label: 'cwr_statemachine_state',
          data: cwr_statemachine_state,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        }

        ,
        {
          label: 'Firmware_Version',
          data: Firmware_Version,
          backgroundColor: ['rgba(255, 26, 104, 0.2)'],
          borderColor: ['rgba(255, 26, 104, 1)'],
          borderWidth: 1,
          tension: 0.4
        }
      ]
    };

    // config 
    const config = {
      type: 'line',
      data,

      plugins: [ChartDataLabels],
      options: {

        scales: {
          x: {
            min: '2023-05-13',
            max: '2023-05-20',
            type: 'time',
            time: {
              unit: 'day'
            }
          },
          y: {
            beginAtZero: true
          }
        },
        plugins: {
          legend: {
            display: false
          },
          datalabels: {
            anchor: 'end',
            align: 'end'
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    function startDateFilter(date) {
      const startDate = new Date(date.value);
      console.log(startDate.setHours(0, 0, 0, 0));
      myChart.config.options.scales.x.min = startDate.setHours(0, 0, 0, 0);
      myChart.update();
    }

    function endDateFilter(date) {
      const startDate = new Date(date.value);
      console.log(startDate.setHours(0, 0, 0, 0));
      myChart.config.options.scales.x.max = startDate.setHours(0, 0, 0, 0);
      myChart.update();
    }

    function updateAll(selectall) {
      let selectallcheckbox = document.getElementById('selectallcheckbox');
      let checkboxes = document.querySelectorAll('.datacheckbox');
      console.log(checkboxes);
      if (selectall.checked == false) {
        for (let i = 0; i < checkboxes.length; i++) {
          checkboxes[i].checked = false;
          myChart.hide(i);
        }
      }
      if (selectall.checked == true) {
        for (let i = 0; i < checkboxes.length; i++) {
          checkboxes[i].checked = true;
          myChart.show(i);
        }
      }
    }

    function checkboxSelectAllChecker() {
      let selectallcheckbox = document.getElementById('selectallcheckbox');
      let checkboxes = document.querySelectorAll('.datacheckbox');
      let x = 0;
      for (let i = 0; i <= checkboxes.length - 1; i++) {
        if (checkboxes[i].checked === true) {
          x++;
        }
      };
      if (x == checkboxes.length) {
        selectallcheckbox.checked = true;
      } else {
        selectallcheckbox.checked = false;
      }



    };

    function updateChart(dataset) {
      console.log(dataset.value);
      const isDataShown = myChart.isDatasetVisible(dataset.value);
      console.log(isDataShown);

      if (isDataShown === true) {
        myChart.hide(dataset.value);
      };
      if (isDataShown === false) {
        myChart.show(dataset.value);
      };
      checkboxSelectAllChecker();


    };
    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
  </script>

</body>

</html>
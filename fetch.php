<?php
//fetch.php
$connect = mysqli_connect("sql10.freesqldatabase.com", "sql10618293", "wMEuIEQasK", "sql10618293");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM LED3 
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
    <th>id</th>  
    <th>Chargecurrent</th>  
    <th>Load_current</th>  
    <th>Daylength</th>
    <th>remaining_gridcharge_capacity</th>  
    <th>remaining_battery_capacity</th>  
    <th>PV_Voltage</th>
    <th>PV_Voltage_goal</th>  
    <th>PWM_duty_cycle</th>  
    <th>recharged_by_AC_grid_counter</th>
    <th>MPP_statemachine_event</th>  
    <th>cwr_statemachine_state</th>  
    <th>Firmware_Version</th>
    <th>Load_1_State</th>  
    <th>Charge_State</th>  
    <th>Battery_Voltage</th>
    <th>Battery_Voltage_Threshold</th>  
    <th>Battery_SOC</th>  
    <th>internal_Temperature</th>
    <th>external_Temperature</th>  
    <th>FET_Temperature</th>  
    <th>MPP_State</th>
    <th>HVD_active</th>  
    <th>PWM_State</th>  
    <th>Load_2_State</th>
    <th>Nightlength</th>  
    <th>Average_Nightlength</th>  
    <th>time_counter</th>
    <th>real_time</th>

    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr style="text-align:left">
   <td>'.$row["id"].'</td>  
   <td>'.$row["Chargecurrent"].'</td>  
   <td>'.$row["Load current"].'</td>  
   <td>'.$row["Daylength"].'</td> 
   <td>'.$row["remaining gridcharge capacity"].'</td>  
   <td>'.$row["remaining battery capacity"].'</td>  
   <td>'.$row["PV Voltage"].'</td> 
   <td>'.$row["PV Voltage goal"].'</td>  
   <td>'.$row["PWM duty cycle"].'</td>  
   <td>'.$row["recharged by AC- grid - counter"].'</td> 
   <td>'.$row["MPP statemachine event"].'</td>  
   <td>'.$row["cwr statemachine state"].'</td>  
   <td>'.$row["Firmware Version"].'</td> 
   <td>'.$row["Load 1 State"].'</td>  
   <td>'.$row["Charge State"].'</td>  
   <td>'.$row["Battery Voltage"].'</td> 
   <td>'.$row["Battery Voltage Threshold"].'</td>  
   <td>'.$row["Battery SOC"].'</td>  
   <td>'.$row["internal Temperature"].'</td> 
   <td>'.$row["external Temperature"].'</td>  
   <td>'.$row["FET Temperature"].'</td>  
   <td>'.$row["MPP State"].'</td> 
   <td>'.$row["HVD active"].'</td>  
   <td>'.$row["PWM State"].'</td>  
   <td>'.$row["Load 2 State"].'</td> 
   <td>'.$row["Nightlength"].'</td>  
   <td>'.$row["Average Nightlength"].'</td>  
   <td>'.$row["time counter"].'</td> 
   <td>'.$row["real_time"].'</td>   
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

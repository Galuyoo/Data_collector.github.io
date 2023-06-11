<?php  
//excel.php  
$connect = mysqli_connect("sql10.freesqldatabase.com", "sql10618293", "wMEuIEQasK", "sql10618293");
$output = '';
if(isset($_POST["export_excel"]))
{
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];

    // Format the input dates to the MySQL datetime format
    $start_date = date('Y-m-d H:i:s', strtotime($start_date));
    $end_date = date('Y-m-d H:i:s', strtotime($end_date));

    // Now construct your query
    $query = "SELECT * FROM LED3 WHERE real_time BETWEEN '$start_date' AND '$end_date' ORDER BY id DESC";
    //...

 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">   
                    <tr>  
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
    <tr> 
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
  $output .= '</table>';
  header('Content-Type: application/vnd.ms-excel');
  header("Content-Disposition:attachment; filename=download.xls");
  echo $output;
 }
}
?>

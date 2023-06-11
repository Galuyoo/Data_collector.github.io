<?php

$username = "sql10618293";
$password = "wMEuIEQasK";
$database = "sql10618293";

try {
  $pdo = new PDO("mysql:host=sql10.freesqldatabase.com;database=$database", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}


include_once 'conn.php';


  // Attempt select query execution
  try{
    $sql = "SELECT * FROM sql10618293.LED1 order by id desc LIMIT 10";
      $result = $pdo->query($sql);
      if($result->rowCount() > 0) {
          $Load_current3 = array();
          $remaining_battery_capacity3 = array();
          $Battery_Voltage_Threshold3 = array();
          $Battery_SOC3 = array();
          $Chargecurrent3 = array();
          $time_counter3 = array();
          $Average_Nightlength = array();
          $Nightlength3 = array();
          $Load_2_State3 = array();
          $PWM_State3 = array();
          $HVD_active3 = array();
          $MPP_State3 = array();
          $FET_Temperature3 = array();
          $external_Temperature3 = array();
          $internal_Temperature3 = array();
          $Battery_Voltage3 = array();
          $Charge_State3 = array();
          $Load_1_State3 = array();
          $Firmware_Version3 = array();
          $cwr_statemachine_state3 = array();
          $MPP_statemachine_event3 = array();
          $recharged_by_AC_grid_counter3 = array();
          $PWM_duty_cycle3 = array();
          $PV_Voltage_goal3 = array();
          $PV_Voltage3 = array();
          $remaining_gridcharge_capacity3 = array();
          $Daylength3 = array();
          $real_time = array();
          while($row = $result->fetch()) {
              $Load_current3[] = $row["Load current"];
              $Daylength3[] = $row["Daylength"];
              $remaining_gridcharge_capacity3[] = $row["remaining gridcharge capacity"];
              $remaining_battery_capacity3[] = $row["remaining battery capacity"];
              $PV_Voltage3[] = $row["PV Voltage"];
              $PV_Voltage_goal3[] = $row["PV Voltage goal"];
              $PWM_duty_cycle3[] = $row["PWM duty cycle"];
              $recharged_by_AC_grid_counter3[] = $row["recharged by AC- grid - counter"];
              $MPP_statemachine_event3[] = $row["MPP statemachine event"];
              $cwr_statemachine_state3[] = $row["cwr statemachine state"];
              $Firmware_Version3[] = $row["Firmware Version"];
              $Load_1_State3[] = $row["Load 1 State"];
              $Charge_State3[] = $row["Charge State"];
              $Battery_Voltage3[] = $row["Battery Voltage"];
              $Battery_Voltage_Threshold3[] = $row["Battery Voltage Threshold"];
              $Battery_SOC3[] = $row["Battery SOC"];
              $internal_Temperature3[] = $row["internal Temperature"];
              $external_Temperature3[] = $row["external Temperature"];
              $FET_Temperature3[] = $row["FET Temperature"];
              $MPP_State3[] = $row["MPP State"];
              $HVD_active3[] = $row["HVD active"];
              $PWM_State3[] = $row["PWM State"];
              $Load_2_State3[] = $row["Load 2 State"];
              $Nightlength3[] = $row["Nightlength"];
              $Average_Nightlength3[] = $row["Average Nightlength"];
              $time_counter3[] = $row["time counter"];
              $Chargecurrent3[] = $row["Chargecurrent"];
              $real_time[] = $row["real_time"];      
          }

          unset($result);
      } else {
          echo "No records matching your query were found.";
      }
  } catch(PDOException $e){
      die("ERROR: Could not able to execute $sql. " . $e->getMessage());
  }

  // Close connection
  unset($pdo);
  ?>

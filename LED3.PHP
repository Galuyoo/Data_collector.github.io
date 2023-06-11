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



  // Attempt select query execution
  try{
    $sql = "SELECT * FROM sql10618293.LED3 order by id desc LIMIT 10";
      $result = $pdo->query($sql);
      if($result->rowCount() > 0) {
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
          while($row = $result->fetch()) {
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
  } catch(PDOException $e){
      die("ERROR: Could not able to execute $sql. " . $e->getMessage());
  }

  // Close connection
  unset($pdo);
  ?>

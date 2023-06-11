<?php
  // Attempt select query execution


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
  
  

  try{
    $sql = "SELECT * FROM sql10618293.LED2 order by id desc LIMIT 10";
      $result = $pdo->query($sql);
      if($result->rowCount() > 0) {
        $Load_current1 = array();
        $remaining_battery_capacity1 = array();
        $Battery_Voltage_Threshold1 = array();
        $Battery_SOC1 = array();
        $Chargecurrent1 = array();
        $time_counter1 = array();
        $Average_Nightlength1 = array();
        $Nightlength1 = array();
        $Load_2_State1 = array();
        $PWM_State1 = array();
        $HVD_active1 = array();
        $MPP_State1 = array();
        $FET_Temperature1 = array();
        $external_Temperature1 = array();
        $internal_Temperature1 = array();
        $Battery_Voltage1 = array();
        $Charge_State1 = array();
        $Load_1_State1 = array();
        $Firmware_Version1 = array();
        $cwr_statemachine_state1 = array();
        $MPP_statemachine_event1 = array();
        $recharged_by_AC_grid_counter1 = array();
        $PWM_duty_cycle1 = array();
        $PV_Voltage_goal1 = array();
        $PV_Voltage1 = array();
        $remaining_gridcharge_capacity1 = array();
        $Daylength1 = array();
          while($row = $result->fetch()) {
            $Load_current1[] = $row["Load current"];
            $Daylength1[] = $row["Daylength"];
            $remaining_gridcharge_capacity1[] = $row["remaining gridcharge capacity"];
            $remaining_battery_capacity1[] = $row["remaining battery capacity"];
            $PV_Voltage1[] = $row["PV Voltage"];
            $PV_Voltage_goal1[] = $row["PV Voltage goal"];
            $PWM_duty_cycle1[] = $row["PWM duty cycle"];
            $recharged_by_AC_grid_counter1[] = $row["recharged by AC- grid - counter"];
            $MPP_statemachine_event1[] = $row["MPP statemachine event"];
            $cwr_statemachine_state1[] = $row["cwr statemachine state"];
            $Firmware_Version[] = $row["Firmware Version"];
            $Load_1_State1[] = $row["Load 1 State"];
            $Charge_State1[] = $row["Charge State"];
            $Battery_Voltage1[] = $row["Battery Voltage"];
            $Battery_Voltage_Threshold1[] = $row["Battery Voltage Threshold"];
            $Battery_SOC1[] = $row["Battery SOC"];
            $internal_Temperature1[] = $row["internal Temperature"];
            $external_Temperature1[] = $row["external Temperature"];
            $FET_Temperature1[] = $row["FET Temperature"];
            $MPP_State1[] = $row["MPP State"];
            $HVD_active1[] = $row["HVD active"];
            $PWM_State1[] = $row["PWM State"];
            $Load_2_State1[] = $row["Load 2 State"];
            $Nightlength1[] = $row["Nightlength"];
            $Average_Nightlength1[] = $row["Average Nightlength"];
            $time_counter1[] = $row["time counter"];
            $Chargecurrent1[] = $row["Chargecurrent"];
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

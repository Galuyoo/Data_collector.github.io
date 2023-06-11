<?php
include 'LED2.php';
include 'LED3.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">


  </head>
  <body>
<?php

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

      }  } 
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

      <!-- Main -->
      <main class="main-container">


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div>

<div class="charts-card">
<p class="chart-title">Comparison LED1 and LED2 PWM_duty_cycle</p>
  <div id="chart1">
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        const data1 = <?php echo json_encode($data1);?>;
    const real_time = <?php echo json_encode($real_time);?>;
    const data2 = <?php echo json_encode($data2);?>;
    const data3 = <?php echo json_encode($data3);?>;
    const Nightlength = <?php echo json_encode($Nightlength);?>;
    const Average_Nightlength = <?php echo json_encode($Average_Nightlength);?>;
    const time_counter = <?php echo json_encode($time_counter);?>;
    const Chargecurrent = <?php echo json_encode($Chargecurrent);?>;
    const Chargecurrent1 = <?php echo json_encode($Chargecurrent1);?>;

    const Load_1_State = <?php echo json_encode($Load_1_State);?>;
    const Charge_State = <?php echo json_encode($Charge_State);?>;
    const Battery_Voltage = <?php echo json_encode($Battery_Voltage);?>;
    const Battery_Voltage_Threshold = <?php echo json_encode($Battery_Voltage_Threshold);?>;
    const Battery_SOC = <?php echo json_encode($Battery_SOC);?>;
    const Battery_SOC1 = <?php echo json_encode($Battery_SOC1);?>;

    const internal_Temperature = <?php echo json_encode($internal_Temperature);?>;
    const external_Temperature = <?php echo json_encode($external_Temperature);?>;
    const FET_Temperature = <?php echo json_encode($FET_Temperature);?>;
    const MPP_State = <?php echo json_encode($MPP_State);?>;
    const HVD_active = <?php echo json_encode($HVD_active);?>;
    const PWM_State = <?php echo json_encode($PWM_State);?>;
    const Load_2_State = <?php echo json_encode($Load_2_State);?>;
    const Load_current = <?php echo json_encode($Load_current);?>;
    const Daylength = <?php echo json_encode($Daylength);?>;
    const remaining_gridcharge_capacity = <?php echo json_encode($remaining_gridcharge_capacity);?>;
    const remaining_battery_capacity = <?php echo json_encode($remaining_battery_capacity);?>;
    const PV_Voltage = <?php echo json_encode($PV_Voltage);?>;
    const PV_Voltage1 = <?php echo json_encode($PV_Voltage1);?>;
    const PV_Voltage_goal = <?php echo json_encode($PV_Voltage_goal);?>;
    const PWM_duty_cycle = <?php echo json_encode($PWM_duty_cycle);?>;
    const PWM_duty_cycle1 = <?php echo json_encode($PWM_duty_cycle1);?>;
    const recharged_by_AC_grid_counter = <?php echo json_encode($recharged_by_AC_grid_counter);?>;
    const MPP_statemachine_event = <?php echo json_encode($MPP_statemachine_event);?>;
    const cwr_statemachine_state = <?php echo json_encode($cwr_statemachine_state);?>;
    const Firmware_Version = <?php echo json_encode($Firmware_Version);?>;
    var options = {
      chart: {
    height: 350,
    type: "line",
    stacked: false
  },
  dataLabels: {
    enabled: false
  },
  colors: ["#FF1654", "#247BA0","#008C38","#d79a53"],    /*comparéson 2*/
  series: [
    {
      name: "PWM_duty_cycle LED2",
      data: PWM_duty_cycle
    },
    {
      name: "PWM_duty_cycle LED1",
      data: PWM_duty_cycle1
    },
  ],
  stroke: {
    width: [4, 4, 4]             /*comparéson 2*/
  },
  plotOptions: {
    bar: {
      columnWidth: "20%"
    }
  },
  xaxis: {
    categories: real_time
  },
  yaxis: [
    {
      axisTicks: {
        show: true
      },
      axisBorder: {
        show: true,
        color: "#FF1654"
      },
      labels: {
        style: {
          colors: "#FF1654"
        }
      },
      title: {
        style: {
          color: "#FF1654"
        }
      }
    },
    {
      opposite: true,
      axisTicks: {
        show: true
      },
      axisBorder: {
        show: true,
        color: "#008C38"
      },
      labels: {
        style: {
          colors: "#008C38"
        }
      },
      title: {
          style: {
          color: "#008C38"
        }
      }
    }
  ],
  tooltip: {
    shared: true,
    intersect: false,
    x: {
      show: false
    }


  },
  legend: {
    horizontalAlign: "left",
    offsetX: 40
  }
};

var chart = new ApexCharts(document.querySelector("#chart1"), options);

chart.render();

    </script>
  </div>
</div>


</div>



</div>  </main>

      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>
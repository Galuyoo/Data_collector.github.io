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
    <link rel="stylesheet" href="./css/styles.css">
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

  </head>
  <body style="background-color:#e6e8ed">




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
                  <li><a href="#">Chose section</a>
                      <ul class="dropdown">
                          <li><a href="./base.php">section1</a></li>
                          <li><a href="#">section2</a>
                          <li><a href="#">section3</a>
                          <li><a href="#">...</a>
                          <li><a href="#">section n</a>
                      </ul>
                  </li>
              </ul>
          </div>
        <div class="header-right">
        <button  style=" background-color: white; height:30px"><a href="./alarms.php" style="color:black"><span class="material-icons-outlined" >notifications</span></button>
        </a>
        <button  style=" background-color: white; height:30px"><a href="./home.php" style="color:black"><span class="material-icons-outlined" >home</span></button>
        </a>
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
            <div class="main-title">
                <p class="font-weight-bold">OVERALL-LOOK</p>
            </div>

            <div class="main-cards">

                <div class="card">
                    <div class="card-inner">
                        <p class="text-primary">MINOR ALERTS</p>
                        <span class="material-icons-outlined text-blue">	announcement</span>
                    </div>
                    <span class="text-primary font-weight-bold">249</span>
                </div>

                <div class="card">
                    <div class="card-inner">
                        <p class="text-primary">MAJOR ALERTS</p>
                        <span class="material-icons-outlined text-orange">notification_important</span>
                    </div>
                    <span class="text-primary font-weight-bold">83</span>
                </div>

                <div class="card">
                    <div class="card-inner">
                        <p class="text-primary">? ALERTS</p>
                        <span class="material-icons-outlined text-green">help_outline	
</span>
                    </div>
                    <span class="text-primary font-weight-bold">79</span>
                </div>

                <div class="card">
                    <div class="card-inner">
                        <p class="text-primary">CRITICAL ALERTS</p>
                        <span class="material-icons-outlined text-red">warning</span>
                    </div>
                    <span class="text-primary font-weight-bold">56</span>
                </div>

            </div>

            <div id="expandable">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Phasellus <br> interdum mass<br> a at erat temp<br> us, quis maximu<br> s nibh iaculis. Pr<br> aesent at lorem s<br> it amet sapien<br> consectetur vehicula. <br> Proin a sem nec libero u<br> llamcorper feugiat.
</div>
<button id="expandButton">Show More</button>


<div class="charts">

<div class="charts-card">
  <p class="chart-title">comparison P1 P2</p>

  <div id="chart">
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.35.3/dist/apexcharts.min.js"></script>
    <script>
            const Load_current = <?php echo json_encode($Load_current);?>;
    const Nightlength = <?php echo json_encode($Nightlength);?>;
    const Average_Nightlength = <?php echo json_encode($Average_Nightlength);?>;
    const time_counter = <?php echo json_encode($time_counter);?>;
    const Chargecurrent = <?php echo json_encode($Chargecurrent);?>;
    const Chargecurrent1 = <?php echo json_encode($Chargecurrent);?>;
    const Load_1_State = <?php echo json_encode($Load_1_State);?>;
    const Charge_State = <?php echo json_encode($Charge_State);?>;
    const Battery_Voltage = <?php echo json_encode($Battery_Voltage);?>;
    const Battery_Voltage_Threshold = <?php echo json_encode($Battery_Voltage_Threshold);?>;
    const Battery_SOC = <?php echo json_encode($Battery_SOC);?>;
    const internal_Temperature = <?php echo json_encode($internal_Temperature);?>;
    const external_Temperature = <?php echo json_encode($external_Temperature);?>;
    const FET_Temperature = <?php echo json_encode($FET_Temperature);?>;
    const MPP_State = <?php echo json_encode($MPP_State);?>;
    const HVD_active = <?php echo json_encode($HVD_active);?>;
    const PWM_State = <?php echo json_encode($PWM_State);?>;
    const Load_2_State = <?php echo json_encode($Load_2_State);?>;
    const Daylength = <?php echo json_encode($Daylength);?>;
    const Daylength1 = <?php echo json_encode($Daylength1);?>;
    const remaining_gridcharge_capacity = <?php echo json_encode($remaining_gridcharge_capacity);?>;
    const remaining_gridcharge_capacity1 = <?php echo json_encode($remaining_gridcharge_capacity1);?>;
    const remaining_battery_capacity = <?php echo json_encode($remaining_battery_capacity);?>;
    const remaining_battery_capacity1 = <?php echo json_encode($remaining_battery_capacity1);?>;

    const PV_Voltage = <?php echo json_encode($PV_Voltage);?>;
    const PV_Voltage1 = <?php echo json_encode($PV_Voltage);?>;
    const PV_Voltage_goal = <?php echo json_encode($PV_Voltage_goal);?>;
    const PWM_duty_cycle = <?php echo json_encode($PWM_duty_cycle);?>;
    const recharged_by_AC_grid_counter = <?php echo json_encode($recharged_by_AC_grid_counter);?>;
    const MPP_statemachine_event = <?php echo json_encode($MPP_statemachine_event);?>;
    const cwr_statemachine_state = <?php echo json_encode($cwr_statemachine_state);?>;
    const Firmware_Version = <?php echo json_encode($Firmware_Version);?>;
    const real_time = <?php echo json_encode($real_time);?>;
    const Load_current1 = <?php echo json_encode($Load_current1);?>;

    
var options = {
  series: [{
    name: 'remaining_gridcharge_capacity LED2',
    data: remaining_gridcharge_capacity1
    }, {
    name: 'remaining_gridcharge_capacity LED1',        /*comparéson 1*/
    data: remaining_gridcharge_capacity
    }, {
    name: 'remaining_battery_capacity LED2',
    data: remaining_battery_capacity1
    },
    {
    name: 'remaining_battery_capacity LED1',
    data: remaining_battery_capacity
    }
  ],
  chart: {
    height: 350,
    type: 'bar',
    toolbar: {
      show: false,
    },
  },
  colors: ["#b42a2a", "#257531", "#185ABF","#d79a53"],    /*comparéson 1*/
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: 'smooth'
  },
  labels: real_time,
  markers: {
    size: 0
  },  
  yaxis: [
    {
      title: {
        text: 'CAPACITY',
      },
    },
    {
      opposite: true,
      title: {
        text: 'CAPACITY',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
  },
};
var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

    </script>
  </div>
</div>

<div class="charts-card">
  <p class="chart-title">comparison P1 P2</p>

  <div id="chart1">
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
    
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
      name: "PV_Voltage LED1",
      data: PV_Voltage
    },
    {
      name: "PV_Voltage LED2",
      data: PV_Voltage1
    },
    {
      name: "Chargecurrent LED1",
      data: Chargecurrent
    },
    {
      name: "Chargecurrent LED2",
      data: Chargecurrent1
    }
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
        text: "VOLTAGE",
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
        text: "AMPERE",
        style: {
          color: "#008C38"
        }
      }
    },
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

<div class="charts-card">
  <p class="chart-title">comparison batery lvl</p>

  <div id="chart2">
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
              var d1 = <?php echo json_encode($Battery_SOC);?>;
var options1 = {
  chart: {
    height: 400,
    type: "radialBar",
  },
  series: [70, 10, 61, 100],
  plotOptions: {
    radialBar: {
      dataLabels: {
        total: {
          show: true,
          label: 'AVERAGE'
        }
      }
    }
  },
  labels: ['LED1', 'LED2', 'LED3', 'LED4']
};

new ApexCharts(document.querySelector("#chart2"), options1).render();

    </script>
  </div>
</div>


            </div>
        </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <script>
    let expanded = false;
    function toggleHeight() {
        const content = document.getElementById('expandable');
        const button = document.getElementById('expandButton');
        if (!expanded) {
            content.classList.add('expanded');
            button.textContent = 'Show Less';
            expanded = true;
        } else {
            content.classList.remove('expanded');
            button.textContent = 'Show More';
            expanded = false;
        }
    }
    
    document.getElementById('expandButton').addEventListener('click', toggleHeight);
</script>
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="js/scripts.js"></script>
  </body>
</html>
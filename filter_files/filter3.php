<?php

$username = "sql7606035";
$password = "5R15y3CNjN";
$database = "sql7606035";

try {
    $pdo = new PDO("mysql:host=sql7.freesqldatabase.com;database=$database", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Getting Started with Chart JS with www.chartjs3.com</title>
    <link rel="stylesheet"   href="./static/styles.css">
    <div class="dp">
         <ul>
            <li col-index= 1><a href="#">Chose data            
              <select class="filteringdrops">
              <option value="all"></option>

            </select> </a>

               <ul class="dropdown">
                  <li><a href="./te.php">data1 et 2</a></li>
                  <li><a href="./te-data3.php">data3</a>
                  <li><a href="#">...</a>
                  <li><a href="#">...</a>
                  <li><a href="#">data n</a>
                  </ul>
          <ul>

                </ul><li col-index= 2><a href="#">Chose Pano<select class="filteringdrops">
              <option value="all"></option>

            </select></a>
                
                        <ul class="dropdown">
                            <li><a href="./te.php">pano1</a></li>
                            <li><a href="./te-data3.php">Pano2</a>
                            <li><a href="#">...</a>
                            <li><a href="#">...</a>
                            <li><a href="#">Pano n</a>
                        </ul>
            </li>

      </div>
      <script>
        window.onload = () => {
            console.log(document.querySelector("#emp-div.dp > ul > ul:nth-child(1) > li:nth-child(2) ").innerHTML);
        };

        getUniqueValuesFromColumn()
        
    </script>
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
    max-height: fit-content;}

    


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
      div.dp ul{
  list-style: none;
  background: #666666;
}

div.dp ul li{
  display: inline-block;
  position: relative;
}
div.dp ul li a{
  display: block;
  padding: 20px 25px;
  color: #ffffff;
  text-decoration: none;
  text-align: center;
  font-size: 20px;
}
div.dp ul li ul.dropdown li{
  display: block;
}
div.dp ul li ul.dropdown{
  width: 100%;
  background: #22438c;
  position: absolute;
  z-index: 999;
  display: none;
  max-height: 300px;
overflow-y: scroll;
}
div.dp ul li a:hover{
  background: #112c66;
}
div.dp ul li:hover ul.dropdown{
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
        width: 700px;
        padding: 20px;
        border-radius: 20px;
        border: solid 1px rgba(131, 32, 255, 0.8);
        background: #e7d4d4;
      }
    </style>
  </head>
  <body>
  <?php 
// Attempt select query execution
try{
  $sql = "SELECT * FROM sql7606035.data";  
  $result = $pdo->query($sql);
  if($result->rowCount() > 0) {
    $data1 = array();
    $data2 = array();
    $data3 = array();
    $real_time = array();
    while($row = $result->fetch()) {
        $data1[] = $row["data1"];   
        $data2[] = $row["data2"];   
        $data3[] = $row["data3"];   
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
<div >
        <nav class="navbara">
            <img src="./static/1.png" class="logo">
            <ul>
                <li><a href="./base.php">Mesurements</a> </li>
                <li><a href="./alarms.php">events</a> </li>
                <li><a href="./wayni.php">Data base</a> </li>
                <li><a href="./index.php">Home</a> </li>
                <li><a href="./te.php">time filter</a> </li>
            </ul>
        </nav>
</div>
<div class="waynitaha">
    <div class="chartCard">
      <div class="chartBox">
      <input type="date" onchange="startDateFilter(this)" value="2023-03-04" min="2023-02-28" max="2024-03-04">
      <input type="date" onchange="endDateFilter(this)"  value="2023-03-04" min="2023-02-28" max="2024-03-04">
        <canvas id="myChart"></canvas>
      </div>
    </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    <script>
            const data1 = <?php echo json_encode($data1);?>;
    const real_time = <?php echo json_encode($real_time);?>;
    //console.log(real_time)
    const real_time1 = real_time.map((day, index)=>  {
        let dayjs = new Date(day);
        return dayjs.setHours(0,0,0,0);
    });
    const data2 = <?php echo json_encode($data2);?>;
    const data3 = <?php echo json_encode($data3);?>;
    console.log(real_time1)  
    // setup 
    const data = {
      labels: real_time1,
      datasets: [{
        label: 'Tension',
        data: data1,
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',

        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',

        ],
        borderWidth: 1,
        tension: 0.4

      },

      {
              label:'Courant',
              data: data3,
              backgroundColor: [

              'rgba(75, 192, 192, 0.2)',

            ],
            borderColor: [

              'rgb(75, 192, 192)',
   
            ],
            tension: 0.4,

              fill: false,
              borderColor: 'rgb(54, 162, 235)'
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
              min: '2023-03-04',
            max: '2023-03-10',
            type:'time',
            time:{
                unit:'day'
            }
        },
          y: {
            beginAtZero: true
          }
        },
        plugins:{
          datalabels:{
            anchor: 'end',
            align:'end'
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
    function startDateFilter(date){
        const startDate = new Date(date.value);
        console.log(startDate.setHours(0,0,0,0)); 
        myChart.config.options.scales.x.min = startDate.setHours(0, 0, 0, 0); 
        myChart.update();
}
function endDateFilter(date){
        const startDate = new Date(date.value);
        console.log(startDate.setHours(0,0,0,0)); 
        myChart.config.options.scales.x.max = startDate.setHours(0, 0, 0, 0); 
        myChart.update();
}
    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
    </script>

  </body>
</html>
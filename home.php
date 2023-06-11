<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <title>
        Raspberry Database Website
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="navbar.css">
</head>

<body>
    <style>
        body {
        background-image: url('./static/60883fcd610d5c2dda67fcdb_Frame6.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        }
        </style>
       
       <style>
  nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    color: #fff;
    height: 80px;
    padding: 0 20px;
  }

  .logo {
    max-width: 50%;
    height: auto;
    margin: 0;
    padding: 0;
  }

  ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
  }

  li {
    padding: 8px;
  }

  a {
    text-decoration: none;
    color: #fff;
  }
  .navbar ul li a{
    text-decoration: none;
    color: #fff;
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
</style>

<nav>
  <a href="./home.php"><img src="./static/agamine_logo.png" class="logo"></a>
  <input type="checkbox" id="check">
  <label for="check" class="checkbtn">
    <i class="fa fa-bars"></i>
  </label>
  <ul>
    <li><a  href="./base.php">Sections</a></li>
    <li><a  href="./alarms.php">Events</a></li>
    <li><a  href="./wayni.php">Data base</a></li>
    <li><a  href="./te.php">Time filter</a></li>
  </ul>
</nav>


              
                <!--   <a href="./base.php">
                <a href="./base.php">



                  <li><span class="icon">
                        <img src='./img/mesurements.png'style="width: 24px; height: 24px; margin-top:-12px; margin-right:1px" />
                        </span><span class="title" style="margin-top:30px; margin-left:8px">Mesurements</span></li>
                </a>
                <a href="./alarms.php">
                    <li><span class="icon">
                        <img src='./img/events.png' style="width: 24px;height: 24px; margin-top:-12px; margin-right:1px" />
                        </span><span class="title" style="margin-top:30px; margin-left:8px">events</span></li>
                    </a>
                <a href="./wayni.php">
                    <li><span class="icon">
                        <img src='./img/database.png' style="width: 24px; height: 24px; margin-top:-12px; margin-right:1px" />
                        </span><span class="title" style="margin-top:30px; margin-left:8px">data base</span></li>
                    </a> 
                <a href="./te.php">
                    <li><span class="icon">
                        <img src='./img/timefilter.png' style="width: 24px; height: 24px; margin-top:-12px; margin-right:1px" />
                        </span><span class="title" style="margin-top:30px; margin-left:8px">time filter</span></li>
                    </a> -->
                
                        
                    
             
        
        <div class="content">
            <h1>DATA STREAMING</h1>
            <p>This website connects with Raspberry Pi</p>
                <a href="index.php">
                    <button type="button"><span></span>Logout</button>
                </a>
        <style>
            .content {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 75vh;
  color: #fff;
}
button{
    width: 200px;
    padding: 15px 0; 
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #009688; 
    background: transparent; 
    color: #fff;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
span{
    background: #009688;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;
}
button:hover span{
    width: 100%;
}
button:hover{
    border: none;
}


        </style>
        </div>
     </div>
   
</body>
</html>
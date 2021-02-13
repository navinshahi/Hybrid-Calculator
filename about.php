<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hybrid Calculator: About Us</title>
    <link href="icon.ico" type="image" rel="icon">
    <link href="about.css" rel="stylesheet" type="text/css">
    <link href="about_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="You can calculate anything from this digital calculator. The founder of this calculator is Navin Kumar Shahi. Here you can perform Matrix Calculations, Scientific calculations, Unit conversions and many more...">
    <meta name="keywords" content="about us,about hybrid calculator,hybrid calculator,calculator,all calculator,online calculator">
    <meta name="author" content="Navin Shahi">
</head>
<body style="font-family:'Open Sans',Helvetica,Arial,sans-serif;background-color:#43e97b;">
    <div class="main_navba">
        <button type="button" class="toggle" onclick="hhh()"><span id="menu" class="glyphicon glyphicon-th-list" style="font-size:20px;"></span></button>
        <div class="Logo">
        <div class="inner_logo"><p class="logo_text">Hybrid Calculator</p></div>
        </div>
        <a href="index.php" style="text-decoration:none;"><div id="navba_2">
        <p class="nav_tex"><span class="glyphicon glyphicon-home"></span> Home</p></div></a>
        <a href="basic_calc.php" style="text-decoration:none;"><div class="subna" id="navba_3"><p class="nav_tex"><span class="glyphicon glyphicon-th-large"></span> Calculator</p></div></a>
        <a href="https://www.mygov.in/covid-19" target="_blank" style="text-decoration:none;"><div class="subna" id="navba_4"><p class="nav_tex"><span class="glyphicon glyphicon-asterisk"></span> COVID-19</p></div></a>
        <a href="contact.php" style="text-decoration:none;"><div class="subna" id="navba_5"><p class="nav_tex"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</p></div></a>
        <a href="about.php" style="text-decoration:none;"><div class="subna" id="navba_6"><p class="nav_te"><span class="glyphicon glyphicon-user"></span> About Us</p></div></a>
        <div class="flag" id="navba_7"><p class="nav_tex"><span class="glyphicon glyphicon-globe"></span> INDIA</p></div>
    </div>
    <div id="nav_toggle"></div>
    <div class="box">
          <div class="box1">About Us</div>
          <div class="box2"><ul >
            <li id="list3">You can calculate anything from this digital calculator...</li><br>
            <li id="list3">The founder of this calculator is <b>'Navin Kumar Shahi'</b>.</li><br>
            <li id="list3">Here you can perform Matrix Calculations, Scientific calculations, Unit conversions and many more...
            </li><br>
            <li id="list3">Our Other Website :- <a href="https://infinitystudy.gq" target="_blank">Infinity Study</a>
            </li><br>
            <li id="list3">Follow us on:-  <a href="https://twitter.com/NavinSh98034159" style="margin-left: 5px;" target="_blank"><img src="twitter.png" width="30" height="30"></a> <a href="https://www.youtube.com/channel/UCWLeqcR0idJYheItFl1yBqQ" style="margin-left: 5px;" target="_blank"><img src="youtube.png" width="35" height="35"></a> <a href="https://www.linkedin.com/in/navin-shahi-39a934170" style="margin-left: 5px;" target="_blank"><img src="linkedin.png" width="30" height="30"></a>  <a href="https://api.whatsapp.com/send?phone=916306043265&text=Give%20me%20further%20information%20about.." style="margin-left: 5px;" target="_blank"><img src="whatsapp.png" width="33" height="33"></a>
            <a href="https://www.facebook.com/navin.shahi.311" style="margin-left: 5px;" target="_blank"><img src="facebook.png" width="33" height="33"></a>
            </li>
            </ul>
        </div>
          <div class="box3">For more enquiry: <a href="mailto:navinkumarshahi0@gmail.com" target="_blank">Email us</a></div>
        </div>
    <script type="text/javascript">
            
            x=0;
            function hhh(){
                if(x%2==0){
            document.getElementById("menu").className="glyphicon glyphicon-remove";
                    document.getElementById("nav_toggle").style.visibility="visible";
                    document.getElementById("navba_2").style.visibility="visible";
                    document.getElementById("navba_3").style.visibility="visible";
                    document.getElementById("navba_4").style.visibility="visible";
                    document.getElementById("navba_5").style.visibility="visible";
                    document.getElementById("navba_6").style.visibility="visible";
                    document.getElementById("navba_7").style.visibility="visible";
                x=x+1;}
                else{
                    document.getElementById("menu").className="glyphicon glyphicon-th-list";
                    document.getElementById("nav_toggle").style.visibility="hidden";
                    document.getElementById("navba_2").style.visibility="hidden";
                    document.getElementById("navba_3").style.visibility="hidden";
                    document.getElementById("navba_4").style.visibility="hidden";
                    document.getElementById("navba_5").style.visibility="hidden";
                    document.getElementById("navba_6").style.visibility="hidden";
                    document.getElementById("navba_7").style.visibility="hidden";
                    x=x+1
                }
            }
            document.addEventListener('contextmenu',  
                        event => event.preventDefault()); 
                el_down.innerHTML = "Right click disabled";
    </script>
    </body>
    </html>
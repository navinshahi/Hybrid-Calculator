<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hybrid Calculator: Time Conversion</title>
    <link href="icon.ico" type="image" rel="icon">
    <link href="convert_len.css" rel="stylesheet" type="text/css">
    <link href="convert_len_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Convert between time units. Convert decimal time to seconds, minutes, hours, days, weeks, and years..">
    <meta name="keywords" content="Time conversion,convert Time,time converter,hours to minute,minute to hours,minute to days,days to minute,days to second,second to days,hours to seconds,weeks to years,years to hours,weeks to days">
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
        <a href="about.php" style="text-decoration:none;"><div class="subna" id="navba_6"><p class="nav_tex"><span class="glyphicon glyphicon-user"></span> About Us</p></div></a>
        <div class="flag" id="navba_7"><p class="nav_tex"><span class="glyphicon glyphicon-globe"></span> INDIA</p></div>
    </div> 
    <div id="nav_toggle"></div>
    <div class="main_frame">
        <div class="frame_1"></div>
        <div class="frame_2">
            <div class="subframe_1"><div class="text_1">Time Conversion</div></div>
            <div class="subframe_2">
                <div class="subsub1">
                <div class="subcont1">  
                <select id="select1" class="form-control" onchange="calculate()">
                    <option value="select1">From Time</option>
                    <option value="s">Seconds (sec)</option>
                    <option value="m">Minutes (min)</option>
                    <option value="h">Hours (h)</option>
                    <option value="d">Days (day)</option>
                    <option value="w">Weeks (week)</option>
                    <option value="y">Years (year)</option>
                </select>
                <input type="number" id="input1" class="form-control" placeholder="Enter a number" style="margin-top:2%;" disabled="true" oninput="calculate()">
                </div>  
                </div>
                <div class="subsub2">
                <div class="subcont1">  
                <select id="select2" class="form-control" onchange="calculate()">
                    <option value="select2">To Time</option>
                    <option value="s">Seconds (sec)</option>
                    <option value="m">Minutes (min)</option>
                    <option value="h">Hours (h)</option>
                    <option value="d">Days (day)</option>
                    <option value="w">Weeks (week)</option>
                    <option value="y">Years (year)</option>
                </select>
                <input type="text" id="input2" class="form-control" placeholder="Result" style="margin-top:2%;color:green;" disabled="true">
                </div>  
                </div>
            </div>
        </div>
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
    <script src="convert_time.js"></script>
    </body>
    </html>
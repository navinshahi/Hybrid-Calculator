<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hybrid Calculator: Scientific Calculator</title>
    <link href="icon.ico" type="image" rel="icon">
    <link href="basic_calc.css" rel="stylesheet" type="text/css">
    <link href="basic_calc_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="basic_calc.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A beautiful, free online scientific calculator with advanced features for evaluating percentages, fractions, exponential functions, logarithms, trigonometry, statistics and many more...">
    <meta name="keywords" content="scientific calculator,Calculator,CALCULATOR,basic calculator,bitwise calculator,hybrid calculator,hybrid,calculate and,addition,subtraction,multiplication,division,binary to decimal,decimal to binary,power of any number,sin,cos tan,cot,cosec,cot,factorial,left shift,right shift,floor,ceil">
    <meta name="author" content="Navin Shahi">
</head>
<body style="font-family:'Open Sans',Helvetica,Arial,sans-serif;">
    <div class="main_navba">
        <button type="button" class="toggle" onclick="hhh()"><span id="menu" class="glyphicon glyphicon-th-list" style="font-size:20px;"></span></button>
        <div class="Logo">
        <div class="inner_logo"><p class="logo_text">Hybrid Calculator</p></div>
        </div>
        <a href="index.php" style="text-decoration:none;"><div id="navba_2">
        <a href="index.php" style="text-decoration:none;"><p class="nav_tex"><span class="glyphicon glyphicon-home"></span> Home</p></div></a>
        <a href="basic_calc.php" style="text-decoration:none;"><div class="subna" id="navba_3"><p class="nav_te"><span class="glyphicon glyphicon-th-large"></span> Calculator</p></div></a>
        <a href="https://www.mygov.in/covid-19" target="_blank" style="text-decoration:none;"><div class="subna" id="navba_4"><p class="nav_tex"><span class="glyphicon glyphicon-asterisk"></span> COVID-19</p></div></a>
        <a href="contact.php" style="text-decoration:none;"><div class="subna" id="navba_5"><p class="nav_tex"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</p></div></a>
        <a href="about.php" style="text-decoration:none;"><div class="subna" id="navba_6"><p class="nav_tex"><span class="glyphicon glyphicon-user"></span> About Us</p></div></a>
        <div class="flag" id="navba_7"><p class="nav_tex"><span class="glyphicon glyphicon-globe"></span> INDIA</p></div>
    </div>
    <div id="nav_toggle"></div>
    <div class="first_frame">
        <div class="subframe1"></div>
        <div class="subframe2">
            <div class="calc_screen">
                <input type="text" class="form-control" placeholder="0" name="Hybrid" id="screen" autofocus>
            </div>
            <div class="calc_key">
                <a href="#"><div class="keyboard1" onclick="fkey1()"><div class="key_text">%</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey2()"><div class="key_text">CE</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey3()"><div class="key_text"><span class="glyphicon glyphicon-arrow-left"></span></div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey4()"><div class="key_text">.</div></div></a>
                <a href="#"><div class="keyboard2" onclick="fkey5()"><div class="key_text">=</div></div>
                <div class="keyboard3"></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey6()"><div class="key_text">sin</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey7()"><div class="key_text">cos</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey8()"><div class="key_text">tan</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey9()"><div class="key_text">7</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey10()"><div class="key_text">8</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey11()"><div class="key_text">9</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey12()"><div class="key_text">+</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey13()"><div class="key_text">2<sup>x</sup></div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey14()"><div class="key_text">ln</div></div></a>
                <div class="keyboard3"></div>
                <a href="#"><div class="keyboard4" onclick="fkey15()"><div class="key_text">cosec</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey16()"><div class="key_text">sec</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey17()"><div class="key_text">cot</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey18()"><div class="key_text">4</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey19()"><div class="key_text">5</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey20()"><div class="key_text">6</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey21()"><div class="key_text">-</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey22()"><div class="key_text">&#8730;</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey23()"><div class="key_text">1/x</div></div></a>
                <div class="keyboard3"></div>
                <a href="#"><div class="keyboard4" onclick="fkey24()"><div class="key_text">&</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey25()"><div class="key_text">|</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey26()"><div class="key_text">~</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey27()"><div class="key_text">1</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey28()"><div class="key_text">2</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey29()"><div class="key_text">3</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey30()"><div class="key_text">*</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey31()"><div class="key_text">&#8731;</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey32()"><div class="key_text">(</div></div></a>
                <div class="keyboard3"></div>
                <a href="#"><div class="keyboard4" onclick="fkey33()"><div class="key_text">bin</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey34()"><div class="key_text">dec</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey35()"><div class="key_text">>></div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey36()"><div class="key_text">^</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey37()"><div class="key_text">0</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey38()"><div class="key_text">!</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey39()"><div class="key_text">/</div></div></a>
                <a href="#"><div class="keyboard1" onclick="fkey40()"><div class="key_text">e<sup>x</sup></div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey41()"><div class="key_text">)</div></div></a>
                <div class="keyboard3"></div>
                <a href="#"><div class="keyboard4" onclick="fkey42()"><div class="key_text"><<</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey43()"><div class="key_text">&#8968;x&#8969;</div></div></a>
                <a href="#"><div class="keyboard4" onclick="fkey44()"><div class="key_text">&#8970;x&#8971;</div></div></a>

                <a href="#"><div class="keyboard5" onclick="fkey6()"><div class="key_text">sin</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey7()"><div class="key_text">cos</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey8()"><div class="key_text">tan</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey14()"><div class="key_text">ln</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey15()"><div class="key_text">cosec</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey16()"><div class="key_text">sec</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey17()"><div class="key_text">cot</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey24()"><div class="key_text">&</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey25()"><div class="key_text">|</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey26()"><div class="key_text">~</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey32()"><div class="key_text">(</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey33()"><div class="key_text">bin</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey34()"><div class="key_text">dec</div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey35()"><div class="key_text">>></div></div></a>
                <a href="#"><div class="keyboard5" onclick="fkey41()"><div class="key_text">)</div></div></a>
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
    </body>
    </html>
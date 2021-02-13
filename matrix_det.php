<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hybrid Calculator: Determinant of a Matrix</title>
    <link href="icon.ico" type="image" rel="icon">
    <link href="matrix_adj.css" rel="stylesheet" type="text/css">
    <link href="matrix_adj_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tool to compute a matrix determinant. The determinant of a square matrix M is a useful value computed from its inner elements and denoted det(M) or |M|.">
    <meta name="keywords" content="Determinant of matrix,matrix Determinant,matrix calculator,Calculator,CALCULATOR,Determinant matrix online,online matrix Determinant,matrix Determinant online,calculate Determinant of matrix,matrix Determinant,Determinant of matrix">
    <meta name="author" content="Navin Shahi">
</head>
<body style="font-family:'Open Sans',Helvetica,Arial,sans-serif;">
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
            <div class="subframe_1"><div class="text_1">Determinant Of A Matrix</div></div>
            <div class="subframe_2">
                <div class="subsub1">
                <div class="text_0">
                    <div class="select1">
                    <select class="form-control" id="selectRow" onchange="construct()">
                        <option value="row">Row</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select></div>
                    <div class="select1">
                     x 
                    </div>
                    <div class="select1">
                    <select class="form-control" id="selectColumn" disabled>
                        <option value="column">Column</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                    </div>
                </div>
                </div>
                <div class="subsub2">
                    <div class="text_0">
                        Result
                    </div>
                </div>
            </div>
            <div class="subframe_3">
                <div class="mat1">
                    <div class="submat2">
                    <div class="matrix1" id="matrix_1"></div>
                    </div>
                </div>
                <div class="mat2">
                <div class="submat1">
                        <div class="text_1">Result</div>
                    </div>
                    <div class="submat2">
                    <div class="text_1" id="result"></div>
                    </div>
                </div>
            </div>
            <div class="subframe_4">
            <div class="text_1"><button type="button" class="btn btn-success" style="width:200px;height:50px;font-size:20px;" onclick="calculate()">Calculate</button></div>
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
    <script src="matrix_det.js"></script>
    </body>
    </html>
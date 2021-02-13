<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hybrid Calculator: Contact Us</title>
    <link href="icon.ico" type="image" rel="icon">
    <link href="contact.css" rel="stylesheet" type="text/css">
    <link href="contact_small.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width:768px)">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Us. If you have a question or a comment, please call us on +91 6306043265 (9.30am to 5.30pm. Monday to Saturday.) or email us at ...">
    <meta name="keywords" content="contact hybrid calculator,contact us,contact,hybrid calculator">
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
        <a href="contact.php" style="text-decoration:none;"><div class="subna" id="navba_5"><p class="nav_te"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</p></div></a>
        <a href="about.php" style="text-decoration:none;"><div class="subna" id="navba_6"><p class="nav_tex"><span class="glyphicon glyphicon-user"></span> About Us</p></div></a>
        <div class="flag" id="navba_7"><p class="nav_tex"><span class="glyphicon glyphicon-globe"></span> INDIA</p></div>
    </div>
    <div id="nav_toggle"></div>
    
    <div class="box">
          <div class="box1">Contact Us</div>
          <div class="box2">
          <form action="contact_us1.php" method="post">
                                <div class="form-group">
                                    <label for="name">Name:-</label>
                                    <input type="text" pattern="[a-zA-Z\s]+"title="Must contain only a-z or A-Z or spaces..."class="form-control" name="name" placeholder="Enter your name"required>
                                </div><br>
                                <div class="form-group">
                                    <label for="email">Email:-</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email"required>
                                </div><br>
                                <div class="form-group">
                                    <label for="comment">Comment:-</label>
                                   <textarea rows="2" cols="auto" class="form-control" name="comment"placeholder="Write comment here..."required></textarea>
                                </div><br>
                                <input type="submit" value="Send" class="btn btn-success">
                                <input type="reset" value="Reset" class="btn btn-primary">
                             </form>
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
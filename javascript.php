<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="js.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>JerryAcademy PHP</title>
</head>
<body>
<header class="header">
       <div class="header_div">
            <div class="nav_logo" id="nav__logo">
                <i class="ri-book-fill"></i>JerryAcademy
            </div>

            <div class="python_logo">
                <h1 class="start_l">
                    Start Learning JavaScript
                </h1>
                <p class="learn_pp">With best Teachers around the globe</p>
                <img src="image/js.png" style="width: 30rem; margin-left:40rem; margin-top:-10.7rem; margin-bottom:1.5rem;">
            </div>

       </div>
       <div class="nav_bar">
           <ul class="nav_ex">
               <a href="python.php"><li class="nav_menu">Python</li></a>
               <a href="java.php"><li class="nav_menu">Java</li></a>
               <a href="php_page.php"><li class="nav_menu">PHP</li></a>
               <a href="javascript.php"><li class="nav_menu">JavaScript</li></a>
               <a href="c++.php"><li class="nav_menu">C ++</li></a>
               <a href="#c sharp"><li class="nav_menu">C #</li></a>
               <a href="#html"><li class="nav_menu">HTML</li></a>
               <a href="#css"><li class="nav_menu">CSS</li></a>
               <a href="index.php"><li class="nav_menu">WEBSITE</li></a>


           </ul>
       </div>


       <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Js')" id="defaultOpen">JavaScript Intro</button>
           <a href="https://www.w3schools.com/js/js_whereto.asp"> <button class="tablinks" onclick="openCity(event, 'Home')">JS Where To</button></a>
           <a href="https://www.w3schools.com/js/js_output.asp"> <button class="tablinks" onclick="openCity(event, 'Comment')">JS Output</button></a>
            <a href="https://www.w3schools.com/js/js_statements.asp"><button class="tablinks" onclick="openCity(event, 'Vari')">JS Statements</button></a>
           <a href="https://www.w3schools.com/js/js_syntax.asp"> <button class="tablinks" onclick="openCity(event, 'Strings')">JS Syntax</button></a>
            <a href="https://www.w3schools.com/js/js_comments.asp"><button class="tablinks" onclick="openCity(event, 'Scope')">JS Comments</button></a>
           <a href="https://www.w3schools.com/js/js_variables.asp"> <button class="tablinks" onclick="openCity(event, 'Array')">JS Variables</button></a>
           <a href="https://www.w3schools.com/js/js_let.asp"> <button class="tablinks" onclick="openCity(event, 'More')">JS Let</button></a>
           <a href="https://www.w3schools.com/js/js_const.asp"> <button class="tablinks" onclick="openCity(event, 'More')">JS Const</button></a>
           <a href="https://www.w3schools.com/js/js_strings.asp"> <button class="tablinks" onclick="openCity(event, 'More')">JS Strings</button></a>
           <a href="https://www.w3schools.com/js/js_events.asp"> <button class="tablinks" onclick="openCity(event, 'More')">JS Events</button></a>
           <a href="https://www.w3schools.com/js/js_dates.asp"> <button class="tablinks" onclick="openCity(event, 'More')">JS Dates</button></a>
           <a href="https://www.w3schools.com/js/js_math.asp"> <button class="tablinks" onclick="openCity(event, 'More')">JS Math</button></a>
           <a href="https://www.w3schools.com/js/js_random.asp"> <button class="tablinks" onclick="openCity(event, 'More')">JS Random</button></a>
           <a href="https://www.w3schools.com/js/js_booleans.asp"> <button class="tablinks" onclick="openCity(event, 'More')">JS Booleans</button></a>
           <a href="https://www.w3schools.com/js/js_comparisons.asp"> <button class="tablinks" onclick="openCity(event, 'More')">JS Comparisons</button></a>
            
           <a href="https://www.w3schools.com/js/js_if_else.asp"> <button class="tablinks" onclick="openCity(event, 'More')">JS Conditons</button></a>
           <a href="https://www.w3schools.com/js/js_switch.asp"> <button class="tablinks" onclick="openCity(event, 'More')">JS Switch</button></a>
           <a href="https://www.w3schools.com/js/js_switch.asp"> <button class="tablinks" onclick="openCity(event, 'More')">JS Loop For</button></a>
           <a href="https://www.w3schools.com/js/js_break.asp"> <button class="tablinks" onclick="openCity(event, 'More')">JS Break </button></a>
           <a href="https://www.w3schools.com/js/default.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> More Content</button></a>

            
        </div>


        <div class="tabcontent" id = "Js">
            <h3 class="int_js">Introduction to JavaScript</h3>
            <p class="in_sub">
                <ul class="list_js">
                    <li class="in_exe">JavaScript is the world's most popular programming language.</li>
                    <li class="in_exe">JavaScript is the programming language of the Web.</li>
                    <li class="in_exe"> JavaScript is easy to learn.</li>
                    <li class="in_exe">This tutorial will teach you JavaScript from basic to advanced.</li>
                </ul>






            

            </p>

            <p class="int_exe">Why Study JavaScript<br><br>
            JavaScript is one of the <b>3 languages</b> all web developers <b>must</b> learn:
                <ol class="text_ed">
                    <li class="exam_js"><a href="#html">HTML</a>to define the content of web pages</li>
                    <li class="exam_js"><a href="#css">CSS</a>to specify the layout of web pages</li>
                    <li class="exam_js">JavaScript to program the behavior of web pages</li>

                </ol>
            </p>
            <div class="bg_js">
            <div class="ex_jscri">
                <h3 class="txt_jsr">This tutorial covers every version of JavaScript:</h3>
                <ul class="text_vr">
                    <li class="version_js">The Original JavaScript ES1 ES2 ES3 (1997-1999)</li>
                    <li class="version_js">The First Main Revision ES5 (2009)</li>
                    <li class="version_js">The Second Revision ES6 (2015)</li>
                    <li class="version_js">The Yearly Additions (2016, 2017, 2018)</li>
                </ul>
            </div>
        </div>

        </div>
       


        





</header>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>
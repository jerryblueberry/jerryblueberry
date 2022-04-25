<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php.css">
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
                    Start Learning PHP
                </h1>
                <p class="learn_pp">With best Teachers around the globe</p>
                <img src="image/p_php.png" style="width: 10rem; margin-left:45rem; margin-top:-14.7rem; margin-bottom:1.5rem;">
            </div>
       </div>

       <div class="nav_bar">
           <ul class="nav_ex">
               <a href="python.php"><li class="nav_menu">Python</li></a>
               <a href="java.php"><li class="nav_menu">Java</li></a>
               <a href="php_page.php"><li class="nav_menu">PHP</li></a>
               <a href="javascript.php"><li class="nav_menu">JavaScript</li></a>
               <a href="c++.php"><li class="nav_menu">C ++</li></a>
               <a href="csharp.php"><li class="nav_menu">C #</li></a>
               <a href="HTML.php"><li class="nav_menu">HTML</li></a>
               <a href="CSS.php"><li class="nav_menu">CSS</li></a>
               <a href="index.php"><li class="nav_menu">WEBSITE</li></a>


           </ul>
       </div>


       <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'PHP')" id="defaultOpen">PHP Intro</button>
           <a href="https://www.w3schools.com/php/php_syntax.asp"> <button class="tablinks" onclick="openCity(event, 'Home')">PHP Syntax</button></a>
           <a href="https://www.w3schools.com/php/php_comments.asp"> <button class="tablinks" onclick="openCity(event, 'Comment')">PHP Comment</button></a>
            <a href="https://www.w3schools.com/php/php_variables.asp"><button class="tablinks" onclick="openCity(event, 'Vari')">PHP Variable</button></a>
           <a href="https://www.w3schools.com/php/php_string.asp"> <button class="tablinks" onclick="openCity(event, 'Strings')">PHP Strings</button></a>
            <a href="https://www.w3schools.com/php/php_numbers.asp"><button class="tablinks" onclick="openCity(event, 'Scope')">PHP Number</button></a>
           <a href="https://www.w3schools.com/php/php_datatypes.asp"> <button class="tablinks" onclick="openCity(event, 'Array')">Data Type</button></a>
           <a href="https://www.w3schools.com/php/php_math.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> PHP Math</button></a>
           <a href="https://www.w3schools.com/php/php_constants.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> PHP Constant</button></a>
           <a href="https://www.w3schools.com/php/php_operators.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> PHP Operators</button></a>
           <a href="https://www.w3schools.com/php/php_looping.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> PHP Loop</button></a>
           <a href="https://www.w3schools.com/php/php_switch.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> PHP Switch</button></a>
           <a href="https://www.w3schools.com/php/php_functions.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> PHP Functions</button></a>
           <a href="https://www.w3schools.com/php/php_regex.asp"> <button class="tablinks" onclick="openCity(event, 'More')">PHP RegEx</button></a>
           <a href="https://www.w3schools.com/php/php_superglobals.asp"> <button class="tablinks" onclick="openCity(event, 'More')">PHP Superglobals</button></a>
           <a href="https://www.w3schools.com/php/php_json.asp"> <button class="tablinks" onclick="openCity(event, 'More')">PHP Filters</button></a>
            
           <a href="https://www.w3schools.com/java/default.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> PHP JSON</button></a>
           <a href="https://www.w3schools.com/php/php_exceptions.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> PHP Exceptions</button></a>
           <a href="https://www.w3schools.com/php/php_cookies.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> PHP Cookies</button></a>
           <a href="https://www.w3schools.com/php/php_file_upload.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> PHP  File Upload</button></a>
           <a href="https://www.w3schools.com/php/default.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> More Content</button></a>

            
        </div>
        <div id="PHP" class="tabcontent">
            <h3 class="index">What You Should Already Know?</h3>
            <p class="intr_j">Before you continue you should have a basic understanding of the following:</p>
            <ul class="php_list">
                <a href="#html"><li class="list_ex">HTML</li></a>
                <a href="#css"><li class="list_ex">CSS</li></a>
                <a href="#js"><li class="list_ex">JavaScript</li></a>
            </ul>
            <p class="want_php">If you want to study these subjects first, find the tutorials on our <a href="#Homepage">Home page</a></p>
            <div class="int_php">
                <h3 class="php_ert">
                    What is PHP?
                </h3>
                    <ul class="list_intt">
                        <li class="bull_exe">PHP is an acronym for "PHP: Hypertext Preprocessor"</li>
                        <li class="bull_exe">PHP is a widely-used, open source scripting language</li>
                        <li class="bull_exe">PHP scripts are executed on the server</li>
                        <li class="bull_exe">PHP is free to download and use</li>
                    </ul>

                
                
            </div>
            <div class="why_php">
                <h3 class="php-wh">Why PHP? </h3>
                <ul class="why_list">
                    <li class="list_wrt">PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)</li>
                    <li class="list_wrt">PHP is compatible with almost all servers used today (Apache, IIS, etc.)</li>
                    <li class="list_wrt">PHP supports a wide range of databases</li>
                    <li class="list_wrt">PHP is free. Download it from the official PHP resource:<a href="https://www.php.net/">www.php.net</a> </li>
                    <li class="list_wrt">PHP is easy to learn and runs efficiently on the server side</li>
                </ul>
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
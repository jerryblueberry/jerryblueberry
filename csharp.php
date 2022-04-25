<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="csharp.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>JerryAcademy C #</title>
</head>
<body>
<header class="header">
       <div class="header_div">
            <div class="nav_logo" id="nav__logo">
                <i class="ri-book-fill"></i>JerryAcademy
            </div>

            <div class="python_logo">
                <h1 class="start_l">
                    Start Learning  C #
                </h1>
                <p class="learn_pp">With best Teachers around the globe</p>
                <img src="image/new_csharp.png" style="width: 30rem; margin-left:35rem; margin-top:-10.7rem; margin-bottom:1.5rem;">
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
               <a href="HTML.php"><li class="nav_menu">HTML</li></a>
               <a href="CSS.php"><li class="nav_menu">CSS</li></a>
               <a href="index.php"><li class="nav_menu">WEBSITE</li></a>


           </ul>
       </div>

       <div class="tab">
           <button class="tablinks" onclick="openCity(event,'C_sharp')" id="defaultOpen">C# Intro</button>
           <a href="https://www.w3schools.com/cs/cs_comments.php"> <button class="tablinks" onclick="openCity(event, 'Home')">C# Comment</button></a>
           <a href="https://www.w3schools.com/cs/cs_syntax.php"> <button class="tablinks" onclick="openCity(event, 'Comment')">C# Syntax</button></a>
            <a href="https://www.w3schools.com/cs/cs_variables.php"><button class="tablinks" onclick="openCity(event, 'Vari')">C# Variables</button></a>
           <a href="https://www.w3schools.com/cs/cs_data_types.php"> <button class="tablinks" onclick="openCity(event, 'Strings')">C# Data Types</button></a>
            <a href="https://www.w3schools.com/cs/cs_type_casting.php"><button class="tablinks" onclick="openCity(event, 'Scope')">C# Type Casting</button></a>
           <a href="https://www.w3schools.com/cs/cs_user_input.php"> <button class="tablinks" onclick="openCity(event, 'Array')">C# User Input</button></a>
           <a href="https://www.w3schools.com/cs/cs_operators.php"> <button class="tablinks" onclick="openCity(event, 'More')">C# Operators</button></a>
           <a href="https://www.w3schools.com/cs/cs_math.php"> <button class="tablinks" onclick="openCity(event, 'More')">C# Math</button></a>
           <a href="https://www.w3schools.com/cs/cs_strings.php"> <button class="tablinks" onclick="openCity(event, 'More')">C# Strings</button></a>
           <a href="https://www.w3schools.com/cs/cs_booleans.php"> <button class="tablinks" onclick="openCity(event, 'More')">C# Booleans</button></a>
           <a href="https://www.w3schools.com/cs/cs_switch.php"> <button class="tablinks" onclick="openCity(event, 'More')">C# Switch</button></a>
           <a href="https://www.w3schools.com/cs/cs_for_loop.php"> <button class="tablinks" onclick="openCity(event, 'More')">C# For Loop</button></a>
           <a href="https://www.w3schools.com/cs/cs_break.php"> <button class="tablinks" onclick="openCity(event, 'More')">C# Break/Continue</button></a>
           <a href="https://www.w3schools.com/cs/cs_arrays.php"> <button class="tablinks" onclick="openCity(event, 'More')">C# Arrays</button></a>
           <a href="https://www.w3schools.com/cs/cs_methods.php"> <button class="tablinks" onclick="openCity(event, 'More')">C# Methods</button></a>
            
           <a href="https://www.w3schools.com/cs/cs_oop.php"> <button class="tablinks" onclick="openCity(event, 'More')">C# OOP</button></a>
           <a href="https://www.w3schools.com/cs/cs_classes.php"> <button class="tablinks" onclick="openCity(event, 'More')">C#  Classes/Objects</button></a>
           <a href="https://www.w3schools.com/cs/cs_constructors.php"> <button class="tablinks" onclick="openCity(event, 'More')">C# Constructors</button></a>
           <a href="https://www.w3schools.com/cs/cs_properties.php"> <button class="tablinks" onclick="openCity(event, 'More')">C# Properties </button></a>
           <a href="https://www.w3schools.com/cs/index.php"> <button class="tablinks" onclick="openCity(event, 'More')"> More Content</button></a>
       </div>


       <div class="tabcontent" id="C_sharp">
           <h3 class="Wha_c">
               What is C #?

           </h3>
           <p class="sub_c">C# is pronounced "C-Sharp".</p>
           <p class="sub_c">It is an object-oriented programming language created by Microsoft that runs on the .NET Framework.</p>
           <p class="sub_c">C# has roots from the C family, and the language is close to other popular languages like <a href="c++.php">C++</a> and <a href="java.php">Java.</a></p>
           <p class="sub_c">The first version was released in year 2002. The latest version, C# 8, was released in September 2019.</p>
           <p class="sub_c">C# is used for:</p>
           <ul class="sub_list">
               <li class="list_sub">Mobile applications</li>
               <li class="list_sub">Desktop applications</li>
               <li class="list_sub">Web applications</li>
               <li class="list_sub">Web services</li>
               <li class="list_sub">Web sites</li>
               <li class="list_sub">Games</li>
               <li class="list_sub">VR</li>
               <li class="list_sub">Database applications</li>
               <li class="list_sub">And much, much more!</li>


           </ul>

           <div class="why_c">
               <h3 class="title_c">Why Use C# ?</h3>
               <ul class="why_list">
                   <li class="sub_why">It is one of the most popular programming language in the world</li>
                   <li class="sub_why">It is easy to learn and simple to use</li>
                   <li class="sub_why">It has a huge community support</li>
                   <li class="sub_why">C# is an object oriented language which gives a clear structure to programs and allows code to be reused, lowering development costs.</li>
                   <li class="sub_why">As C# is close to C,<a href="c++.php"> C++</a> and <a href="java.php">Java</a>, it makes it easy for programmers to switch to C# or vice versa</li>

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HTML.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>JerryAcademy CSS</title>
</head>
<body>
<header class="header">
       <div class="header_div">
            <div class="nav_logo" id="nav__logo">
                <i class="ri-book-fill"></i>JerryAcademy
            </div>

            <div class="python_logo">
                <h1 class="start_l">
                    Start Learning  CSS
                </h1>
                <p class="learn_pp">With best Teachers around the globe</p>
                <img src="image/css.png" style="width: 30rem; margin-left:35rem; margin-top:-12rem; margin-bottom:1.5rem;">
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
           <button class="tablinks" onclick="openCity(event,'css')" id="defaultOpen">CSS Intro</button>
           <a href="https://www.w3schools.com/Css/css_syntax.asp"> <button class="tablinks" onclick="openCity(event, 'Home')">CSS Syntax</button></a>
           <a href="https://www.w3schools.com/Css/css_selectors.asp"> <button class="tablinks" onclick="openCity(event, 'Comment')">CSS Selectors</button></a>
            <a href="https://www.w3schools.com/Css/css_howto.asp"><button class="tablinks" onclick="openCity(event, 'Vari')">CSS How To</button></a>
           <a href="https://www.w3schools.com/Css/css_comments.asp"> <button class="tablinks" onclick="openCity(event, 'Strings')">CSS Comments</button></a>
            <a href="https://www.w3schools.com/Css/css_colors.asp"><button class="tablinks" onclick="openCity(event, 'Scope')">CSS Color</button></a>
           <a href="https://www.w3schools.com/Css/css_text.asp"> <button class="tablinks" onclick="openCity(event, 'Array')">CSS Text</button></a>
           <a href="https://www.w3schools.com/Css/css_font.asp"> <button class="tablinks" onclick="openCity(event, 'More')">CSS Fonts</button></a>
           <a href="https://www.w3schools.com/Css/css_counters.asp"> <button class="tablinks" onclick="openCity(event, 'More')">CSS Counter</button></a>
           <a href="https://www.w3schools.com/Css/css_website_layout.asp"> <button class="tablinks" onclick="openCity(event, 'More')">CSS Website Layout</button></a>
           <a href="https://www.w3schools.com/Css/css_units.asp"> <button class="tablinks" onclick="openCity(event, 'More')">CSS Units</button></a>
           <a href="https://www.w3schools.com/Css/css_specificity.asp"> <button class="tablinks" onclick="openCity(event, 'More')">CSS Specifity</button></a>
           <a href="https://www.w3schools.com/Css/css_math_functions.asp"> <button class="tablinks" onclick="openCity(event, 'More')">CSS Math Function</button></a>
           <a href="https://www.w3schools.com/Css/css3_borders.asp"> <button class="tablinks" onclick="openCity(event, 'More')">CSS Rounded Borders</button></a>
           <a href="https://www.w3schools.com/Css/css3_border_images.asp"> <button class="tablinks" onclick="openCity(event, 'More')">CSS Border Images</button></a>
           <a href="https://www.w3schools.com/Css/css3_2dtransforms.asp"> <button class="tablinks" onclick="openCity(event, 'More')">CSS 2D Transforms</button></a>
            
           <a href="https://www.w3schools.com/Css/css3_3dtransforms.asp"> <button class="tablinks" onclick="openCity(event, 'More')">CSS 3D Transform</button></a>
           <a href="https://www.w3schools.com/Css/css3_transitions.asp"> <button class="tablinks" onclick="openCity(event, 'More')">CSS Transitions</button></a>
           <a href="https://www.w3schools.com/Css/css3_animations.asp"> <button class="tablinks" onclick="openCity(event, 'More')">CSS Animations</button></a>
           <a href="https://www.w3schools.com/Css/css_tooltip.asp"> <button class="tablinks" onclick="openCity(event, 'More')">CSS Tooltip </button></a>
           <a href="https://www.w3schools.com/css/default.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> More Content</button></a>
       </div>

       <div id="css" class="tabcontent">
           <h3 class="what_css">What is CSS ? </h3>
           CSS is the language we use to style an HTML document.<br><br>
           CSS describes how HTML elements should be displayed<br><br>
           This tutorial will teach you CSS from basic to advanced.
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
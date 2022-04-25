<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HTML.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>JerryAcademy HTML</title>
</head>
<body>
<header class="header">
       <div class="header_div">
            <div class="nav_logo" id="nav__logo">
                <i class="ri-book-fill"></i>JerryAcademy
            </div>

            <div class="python_logo">
                <h1 class="start_l">
                    Start Learning  HTML
                </h1>
                <p class="learn_pp">With best Teachers around the globe</p>
                <img src="image/html_.png" style="width: 30rem; margin-left:35rem; margin-top:-12.7rem; margin-bottom:1.5rem;">
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
           <button class="tablinks" onclick="openCity(event,'html')" id="defaultOpen">HTML Intro</button>
           <a href="https://www.w3schools.com/cs/cs_comments.php"> <button class="tablinks" onclick="openCity(event, 'Home')">HTML Comment</button></a>
           <a href="https://www.w3schools.com/html/html_styles.asp"> <button class="tablinks" onclick="openCity(event, 'Comment')">HTML Styles</button></a>
            <a href="https://www.w3schools.com/html/html_elements.asp"><button class="tablinks" onclick="openCity(event, 'Vari')">HTMl Elements</button></a>
           <a href="https://www.w3schools.com/html/html_headings.asp"> <button class="tablinks" onclick="openCity(event, 'Strings')">HTML Headings</button></a>
            <a href="https://www.w3schools.com/html/html_paragraphs.asp"><button class="tablinks" onclick="openCity(event, 'Scope')">HTML Paragraphs</button></a>
           <a href="https://www.w3schools.com/html/html_formatting.asp"> <button class="tablinks" onclick="openCity(event, 'Array')">HTML Formatting</button></a>
           <a href="https://www.w3schools.com/html/html_colors.asp"> <button class="tablinks" onclick="openCity(event, 'More')">HTMl Color</button></a>
           <a href="https://www.w3schools.com/html/html_id.asp"> <button class="tablinks" onclick="openCity(event, 'More')">HTML ID</button></a>
           
           
           <a href="https://www.w3schools.com/html/default.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> More Content</button></a>
       </div>

       <div class="tabcontent" id="html">
           <h3 class="titl_html">What is HTML ?</h3>
           <ul class="html_list">
               <li class="txt_html">HTML stands for Hyper Text Markup Language</li>
               <li class="txt_html">HTML is the standard markup language for creating Web pages</li>
               <li class="txt_html">HTML describes the structure of a Web page</li>
               <li class="txt_html">HTML consists of a series of elements</li>
               <li class="txt_html">HTML elements tell the browser how to display the content</li>
               <li class="txt_html">HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.</li>
           </ul>
       </div>

      <!-- <div class="ex_html">
           <div class="example_dd">
               <h3 class="txt_ex"></h3>
               
               <code class="code_html">
                   <p class="text"><span class="blue_col"><</span><span class="brown_col">!DOCTYPE</span> <span class="red_col">html</span><span class="blue_col">></span></p>
                   <p class="text"><span class="blue_col"><</span><span class="brown_col">html</span><span class="blue_col">></span></p>
                   <p class="text"><span class="blue_col"><</span><span class="brown_col">head</span><span class="blue_col">></span></p>
                   <p class="text"><span class="blue_col"><</span><span class="brown_col">title</span><span class="blue_col">></span>Page Title<span class="blue_col"><</span><span class="brown_col">/title</span><span class="blue_col">></span></p>
                   <p class="text"><span class="blue_col"><</span><span class="brown_col">/head</span><span class="blue_col">></span></p>
                   <p class="text"><span class="blue_col"><</span><span class="brown_col">body</span><span class="blue_col">></span></p>
                   <p class="sec_txt"><span class="blue_col"><</span><span class="brown_col">h1</span><span class="blue_col">></span>My First Heading<span class="blue_col"><</span><span class="brown_col">/h1</span><span class="blue_col">></span></p>
                   <p class="sec_txt"><span class="blue_col"><</span><span class="brown_col">p</span><span class="blue_col">></span>My first paragraph.<span class="blue_col"><</span><span class="brown_col">/p</span><span class="blue_col">></span></p>
                   <p class="thr_txt"><span class="blue_col"><</span><span class="brown_col">/body</span><span class="blue_col">></span></p>
                   <p class="thr_txt"><span class="blue_col"><</span><span class="brown_col">/html</span><span class="blue_col">></span></p>


               </code>
           </div>
       </div>--->


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
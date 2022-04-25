<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="c++.css">
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
                    Start Learning C + +
                </h1>
                <p class="learn_pp">With best Teachers around the globe</p>
                <img src="image/c++.png" style="width: 15rem; margin-left:42rem; margin-top:-14.7rem; margin-bottom:1.5rem;">
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
            <button class="tablinks" onclick="openCity(event, 'C+')" id="defaultOpen"> C++ Intro</button>
           <a href="https://www.w3schools.com/cpp/cpp_syntax.asp"> <button class="tablinks" onclick="openCity(event, 'Home')">C++ Syntax</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_output.asp"> <button class="tablinks" onclick="openCity(event, 'Comment')">C++ Output</button></a>
            <a href="https://www.w3schools.com/cpp/cpp_comments.asp"><button class="tablinks" onclick="openCity(event, 'Vari')">C++ Comment</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_variables.asp"> <button class="tablinks" onclick="openCity(event, 'Strings')">C++ Variables</button></a>
            <a href="https://www.w3schools.com/cpp/cpp_user_input.asp"><button class="tablinks" onclick="openCity(event, 'Scope')">C++ User Input</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_data_types.asp"> <button class="tablinks" onclick="openCity(event, 'Array')"> C++ Data Type</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_operators.asp"> <button class="tablinks" onclick="openCity(event, 'More')">C++ Operators</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_strings.asp"> <button class="tablinks" onclick="openCity(event, 'More')">C++ Strings</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_math.asp"> <button class="tablinks" onclick="openCity(event, 'More')">C++ Math</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_booleans.asp"> <button class="tablinks" onclick="openCity(event, 'More')">C++ Booleans</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_conditions.asp"> <button class="tablinks" onclick="openCity(event, 'More')">C++ Conditions</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_switch.asp"> <button class="tablinks" onclick="openCity(event, 'More')">C++ Switch</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_while_loop.asp"> <button class="tablinks" onclick="openCity(event, 'More')">C++  While Loop</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_for_loop.asp"> <button class="tablinks" onclick="openCity(event, 'More')">C++ For Loop</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_break.asp"> <button class="tablinks" onclick="openCity(event, 'More')">C++ Break/Continue</button></a>
            
           <a href="https://www.w3schools.com/cpp/cpp_arrays.asp"> <button class="tablinks" onclick="openCity(event, 'More')">C++ Arrays</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_references.asp"> <button class="tablinks" onclick="openCity(event, 'More')">C++ References</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_pointers.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> C++ Pointers</button></a>
           <a href="https://www.w3schools.com/cpp/cpp_functions.asp"> <button class="tablinks" onclick="openCity(event, 'More')">C++ Functions</button></a>
           <a href="https://www.w3schools.com/cpp/default.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> More Content</button></a>

            
        </div>

        <div class="tabcontent" id="C+">
            <h3 class="int_c">
                What is C++?
            </h3>
            <p class="one_c">C++ is a cross-platform language that can be used to create high-performance applications.</p>
            <p class="two_c">C++ was developed by Bjarne Stroustrup, as an extension to the C language.</p>
            <p class="third_c">C++ was developed by Bjarne Stroustrup, as an extension to the C language.</p>
            <p class="fo_c">The language was updated 3 major times in 2011, 2014, and 2017 to C++11, C++14, and C++17.</p>

            <div class="why_c">
                <h3 class="ti_why">
                    Why Use C++

                </h3>
                <p class="c_one">C++ is one of the world's most popular programming languages.</p>
                <p class="c_one">C++ can be found in today's operating systems, Graphical User Interfaces, and embedded systems.</p>
                <p class="c_one">C++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs.</p>
                <p class="c_one">C++ is portable and can be used to develop applications that can be adapted to multiple platforms.</p>
                <p class="c_one">C++ is fun and easy to learn!</p>
                <p class="c_one">As C++ is close to C# and Java, it makes it easy for programmers to switch to C++ or vice versa</p>
            </div>
        </div>


</header>
</body>
</html>
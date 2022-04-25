<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="python.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
   <header class="header">
       <div class="header_div">
            <div class="nav_logo" id="nav__logo">
                <i class="ri-book-fill"></i>JerryAcademy
            </div>

            <div class="python_logo">
                <h1 class="start_l">
                    Start Learning Python
                </h1>
                <p class="learn_pp">With best Teachers around the globe</p>
                <img src="image/python.png" style="width: 15rem; margin-left:45rem; margin-top:-11.7rem;">
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
            <button class="tablinks" onclick="openCity(event, 'Python')" id="defaultOpen">Python  Intro</button>
            <button class="tablinks" onclick="openCity(event, 'Home')">Python Syntax</button>
            <button class="tablinks" onclick="openCity(event, 'Comment')">Python Comment</button>
            <button class="tablinks" onclick="openCity(event, 'Casting')">Python Casting</button>
            <button class="tablinks" onclick="openCity(event, 'Strings')">Python Strings</button>
            <button class="tablinks" onclick="openCity(event, 'Concat')"> Concatenate Strings</button>
            <button class="tablinks" onclick="openCity(event, 'Array')">Python Array</button>
            <a href="https://www.w3schools.com/python/python_json.asp"> <button class="tablinks" onclick="openCity(event, 'More')">Python JSON</button></a>
            <a href="https://www.w3schools.com/python/python_regex.asp"> <button class="tablinks" onclick="openCity(event, 'More')">Python RegEx</button></a>
           <a href="https://www.w3schools.com/python/python_pip.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> Python PIP</button></a>
           <a href="https://www.w3schools.com/python/numpy/default.asp"> <button class="tablinks" onclick="openCity(event, 'More')">Python Numpy</button></a>
           <a href="https://www.w3schools.com/python/numpy/numpy_intro.asp"> <button class="tablinks" onclick="openCity(event, 'More')">Numpy Intro</button></a>
           <a href="https://www.w3schools.com/python/numpy/numpy_random.asp"> <button class="tablinks" onclick="openCity(event, 'More')">Random Intro</button></a>
           <a href="https://www.w3schools.com/python/numpy/numpy_random_distribution.asp"> <button class="tablinks" onclick="openCity(event, 'More')">Data Distribution</button></a>
           <a href="https://www.w3schools.com/python/default.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> More Content</button></a>

            
        </div>

        <div id="Python" class="tabcontent">
  <h3 class="intro_pp"> What is Python?</h3>
  <p class="int_pp"> Python is a popular programming language. It was created by Guido van Rossum ,and released in 1991. </p>
  <p class="used_pp">It is used for: 
      <ul class="listed">
          <li class="uses-p">Web development(server-side) </li>
          <li class="uses-p">software development </li>
          <li class="uses-p">mathematics </li>
          <li class="uses-p">system scripting </li>

      </ul>
  </p>
  
  <p class="do_pp">
      What can Python do?
      <ul class="do-p">
          <li class="uses-p">Python can be used on a server to create web applications. </li>
          <li class="uses-p"> Python can be used alongside software to create workflows.</li>
          <li class="uses-p"> Python can connect to database systems. It can also read and modify files.</li>
          <li class="uses-p">Python can be used to handle big data and perform complex mathematics. </li>
          <li class="uses-p"> Python can be used for rapid prototyping, or for production-ready software development.</li>
      </ul>


  </p>

  <p class="why_p">
      Why Python?
      <ul class="why-pp">
          <li class="pyth_why">Python works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc).</li>
          <li class="pyth_why">Python has a simple syntax similar to the English language.</li>
          <li class="pyth_why">Python has syntax that allows developers to write programs with fewer lines than some other programming languages.</li>
          <li class="pyth_why">Python runs on an interpreter system, meaning that code can be executed as soon as it is written. This means that prototyping can be very quick.</li>
          <li class="pyth_why">Python can be treated in a procedural way, an object-oriented way or a functional way.</li>
          
      </ul>
  </p>

  <p class="goos_knw">
      Good to Know
      <ul class="know">
          <li class="python_kno">The most recent major version of Python is Python 3, which we shall be using in this tutorial. However, Python 2, although not being updated with anything other than security updates, is still quite popular.</li>
          <li class="python_kno">In this tutorial Python will be written in a text editor. It is possible to write Python in an Integrated Development Environment, such as Thonny, Pycharm, Netbeans or Eclipse which are particularly useful when managing larger collections of Python files.</li>
          
      </ul>
  </p>

  <p class="Syntax">
  Python Syntax compared to other programming languages
      <ul class="syn_comp">
         <li class="comp-sy">Python was designed for readability, and has some similarities to the English language with influence from mathematics.</li>
         <li class="comp-sy">Python uses new lines to complete a command, as opposed to other programming languages which often use semicolons or parentheses.</li>
         <li class="comp-sy">Python relies on indentation, using whitespace, to define scope; such as the scope of loops, functions and classes. Other programming languages often use curly-brackets for this purpose.</li>

        
      </ul>
  </p>
  <div class="ex_py">
      <div class="main_exp">
          <h1 class="ex_tt">Example</h1>
          <div class="syntax_exp">
              <span class="print">print</span><span class="sybx">("Hello World!")</span>

          </div>
      </div>
  </div>
</div>

<div id="Home" class="tabcontent">
  <h3 class="exc"> Excute Python Syntax</h3>
  <p class="sub_exe">As we learned in the previous page,Python Syntax can be<br> executed by writing  directly in the Command Line.</p> 
  <div class="back_ex">

      <div class="exe_col">
          <span class="text_sn">
              >>>> print("Hello, World !")
          </span>
          <div class="out_ex">
              Hello,World !
          </div>

      </div>

  </div>
  <div class="opp">
      <h1 class="text_opp">Or by creating a python file on the server, using the .py file extension, and running it in the Command Line:</h1>
      <div class="opp_back">
          <span class="text-back">
          C:\Users\Your Name>python myfile.py
          </span>

      </div>
  </div>
</div>

<div id="Comment" class="tabcontent">
  <h3 class="title_comm">Python Comments</h3>
  <p class="syb_comm"> Comment can be used to explain Python code.</p>
  <p class="sym_com">Comments can be used to make the code more readable.</p>
  <p class="symm-comn">Comments can be used to prevent execution when testing code.</p>
  <h3 class="creating_co">Creating a Comment</h3>
  <p class="creat_tt">Comments start with a #,and Python will ignore them</p>
  <div class="exa_com">
      <div class="ex_tittle">
          Example
          <div class="per-ex">
              <p class="comment_ex"># This is a comment </p>
              <span class="print_ex">print</span><span class="Hell0_ex">("Hello,World")</span>
          </div>
      </div>

      <div class="multiple_com">
          <h3 class="multi_line">
              Multiline Comment 
          </h3>
          <p class="sub_ee"> Python will ignore string literals that are not assigned to a variable, you can add a multiline string (triple quotes) in your code, and place your comment inside it:" </p>
          <div class="ex_mult">
              Example
              <div class="examp_txt">
                  """" THIS IS a comment Example written in more than just one line<br>
                  """"
                  <div class="helo_wrld">
                      <span class="prr">print</span><span class="examp_pr">("Hello World")</span>
                  </div>
              </div>
              
          </div>

      </div>
  </div>
</div>
<div id="Strings" class="tabcontent">
  <h3>Strings</h3>
  <p class="def_str"> Strings in python are surrounded by either single quotation marks, or double quotation marks.</p>
  <h1 class="hwlo">'hello'</h1>
  <div class="bll_cc">is the same as</div>
  <h2 class="red_col">"hello"</h2>
  <h2 class="demo">You can display a string literal with the<span class="pp_edd"> print() </span> function:</h2>
  <div class="ex_str">
      <div class="exap-string">
          <h1 class="exampe-str">Example</h1>
          <div class="final_str">
              <h1 class="print_nur">print<span class="blue_str">("Hello")</span></h1>
              <h1 class="print_nur">print<span class="blue_str">('Hello')</span></h1>
          </div>
      </div>
  </div>
</div>




<div id="Casting" class="tabcontent">
  <h3 class="cass_ess">Casting</h3>
  <p class="var_sub">Specify a Variable Type</p>
  <p class="tio_cas">
  There may be times when you want to specify a type on to a variable. This can be done with casting. Python is an object-orientated language, and as such it uses classes to define data types, including its primitive types.
  </p>
  <p class="Sec_cast">Casting in python is therefore done using constructor functions:
      <ul class="int_sec">
          <li class="flo_sec"><span class="red_int">int()  </span>-  constructs an integer number from an integer literal, a float literal (by removing all decimals), or a string literal (providing the string represents a whole number)</li>
          <li class="flo_sec"><span class="red_int">float()</span>-   constructs a float number from an integer literal, a float literal or a string literal (providing the string represents a float or an integer)</li>
          <li class="flo_sec"><span class="red_int">str()</span>-  constructs a string from a wide variety of data types, including strings, integer literals and float literals</li>        
          
      </ul>
  </p>

 
  
</div>

<div id="More" class="tabcontent">
    
</div>
<div id="Concat" class="tabcontent">
  <h3 class="concat">String Concatenation</h3>
  <p class="con_st">To concatenate, or combine, two strings you can use the + operator.</p>
  <div class="con_exp">
      <div class="text_con">
          <h1 class="Exam_con">Example</h1>
          <h1 class="mer_con">Merge variable <span class="a_con">a </span> with variable<span class="b_con"> b</span>  into variable <span class="c_cont">c</span></h1>
          <div class="text_nums">
              a=<span class="red_tr">"Hello"</span>
              <div class="raf_c">
                b=<span class="red_ss">"World"</span>
              </div>
              c = a + b 
              <span class="pr_cc">print</span><span class="random_cc">(c)</span>
          </div>
      </div>
  </div>
</div>


<div id="Array" class="tabcontent">
  <h3 class="w_array">What is Array?</h3>
  <p class="sub_arr">An array is a special variable, which can hold more than one value at a time.<br><br>
  If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:

  </p>
  <div class="bor_array">
      <h3 class="car1">car1= <span class="com_arr">"Ford"</span></h3>
      <h3 class="car1">car2= <span class="com_arr">"BMW"</span></h3>
      <h3 class="car1">car3= <span class="com_arr">"Subaru"</span></h3>
  </div>
  <div class="des_arry">
  However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?<br><br>
  The solution is an array!<br><br>
  An array can hold many values under a single name, and you can access the values by referring to an index number.
  </div>

  <div class="more_arr">
      Access the Elements of Array
      <p class="m_array">
      You refer to an array element by referring to the index number.
      </p>
  </div>
  
  <div class="access_ex">
      Example 
      <div class="val_arr">
      Get the value of the first array item:
      <div class="ep_arrr">
          x= cars[<span class="red_array">0</span>]
      </div
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
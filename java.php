<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="java.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>JerryAcademy Java</title>
</head>
<body>
<header class="header">
       <div class="header_div">
            <div class="nav_logo" id="nav__logo">
                <i class="ri-book-fill"></i>JerryAcademy
            </div>

            <div class="python_logo">
                <h1 class="start_l">
                    Start Learning Java
                </h1>
                <p class="learn_pp">With best Teachers around the globe</p>
                <img src="image/new_java.png" style="width: 35rem; margin-left:35rem; margin-top:-12.7rem;">
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
            <button class="tablinks" onclick="openCity(event, 'Java')" id="defaultOpen">Java  Intro</button>
            <button class="tablinks" onclick="openCity(event, 'Home')">Java Syntax</button>
            <button class="tablinks" onclick="openCity(event, 'Comment')">Java  Comment</button>
            <button class="tablinks" onclick="openCity(event, 'Vari')">Java Variable</button>
            <button class="tablinks" onclick="openCity(event, 'Strings')">Java Strings</button>
            <a href="https://www.w3schools.com/java/java_scope.asp"><button class="tablinks" onclick="openCity(event, 'Scope')">Java Scope</button></a>
           <a href="https://www.w3schools.com/java/java_break.asp"> <button class="tablinks" onclick="openCity(event, 'Array')">Break/Continue</button></a>
           <a href="https://www.w3schools.com/java/java_interface.asp"> <button class="tablinks" onclick="openCity(event, 'More')">Java Interface</button></a>
           <a href="https://www.w3schools.com/java/java_enums.asp"> <button class="tablinks" onclick="openCity(event, 'More')">Java Enums</button></a>
           <a href="https://www.w3schools.com/java/java_user_input.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> Java User Input</button></a>
           <a href="https://www.w3schools.com/java/java_date.asp"> <button class="tablinks" onclick="openCity(event, 'More')">Java Date</button></a>
           <a href="https://www.w3schools.com/java/java_arraylist.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> Java ArrayList</button></a>
           <a href="https://www.w3schools.com/java/java_hashmap.asp"> <button class="tablinks" onclick="openCity(event, 'More')">Java HashMap</button></a>
           <a href="https://www.w3schools.com/java/default.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> Java Iterator</button></a>
           <a href="https://www.w3schools.com/java/default.asp"> <button class="tablinks" onclick="openCity(event, 'More')"> More Content</button></a>
            
        </div>


        <div id="Java" class="tabcontent">
            <h3 class="index">What is Java?</h3>
            <p class="intr_j">Java is a popular programming language, created in 1995.</p>
            <p class="java-ut">It is owned by Oracle, and more than 3 billion devices run Java.</p>
            <h4 class="uses_java">
            It is used for:
                <ul class="list_j">
                    <li class="j_li">Mobile applications (specially Android apps)</li>
                    <li class="j_li">Desktop applications</li>
                    <li class="j_li">Web applications</li>
                    <li class="j_li">Web applications</li>
                    <li class="j_li">Games</li>
                    <li class="j_li">Database connection</li>
                    <li class="j_li">And much, much more!</li>
                </ul>
            </h4>
            <div class="why_jav">
                <p class="w_jaba">Why Use Java?</p>
                <ul class="why_jad">
                    <li class="case_jaba">Java works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc.)</li>
                    <li class="case_jaba">It is one of the most popular programming language in the world</li>
                    <li class="case_jaba">It is easy to learn and simple to use</li>
                    <li class="case_jaba">It is open-source and free</li>
                    <li class="case_jaba">It is secure, fast and powerful</li>
                    <li class="case_jaba">It has a huge community support (tens of millions of developers)</li>
                    <li class="case_jaba">Java is an object oriented language which gives a clear structure to programs and allows code to be reused, lowering development costs</li>
                    <li class="case_jaba">As Java is close to C++ and C#, it makes it easy for programmers to switch to Java or vice versa</li>
                </ul>
            </div>
        </div>


        <div id ="Home" class="tabcontent">
            <h3 class="syn_jab">Java Syntax</h3>
            <p class="sy_java">In the previous chapter, we created a Java file called<span class="main_ja"> Main.java </span>, and we used the following code to print "Hello World" to the screen:</p>
            <div class="box_java">
                <div class="main_java">
                    <h3 class="ma_jaba">Main.java</h3>
                    <code class="code_java"> 
                        <div class="fir_com"> <span class="blue-col">public class</span> <span class="red_col">Main</span> <span class="light_black"> {</span></div>
                            <div class="sec_com"> <span class="blue-col">public static void</span> <span class="red_col">main</span><span class="light_black">(</span><span class="red_col">String</span><span class="light_black">[]</span>args<span class="light_black">) {</div>
                                <div class="third_com"><span class="red_col">System</span><span class="light_black">.</span>out<span class="light_black">.</span><span class="red_col">printIn</span><span class="light_black">(</span><span class="light_green">"Hello World"</span><span class="light_black">) ;</span></div>
                                <div class="four_com"><span class="light_black">}</span></div>
                                <div class="fif_com"><span class="light_black">}</span></div>

                       <div class="exp_java">
                           <h3 class="exam_exp">Example explained</h3>
                           <p class="explain_jaba">
                           Every line of code that runs in Java must be inside a class. In our example, we named the  Main A class should always start with an uppercase first letter.<br><br>

                            <b>Note</b>: Java is case-sensitive: "MyClass" and "myclass" has different meaning.<br><br>

                            The name of the java file must match the class name. When saving the file, save it using the class name and add ".java" to the end of the filename. To run the example above on your computer, make sure that Java is properly installed: Go to the Get Started Chapter for how to install Java. The output should be:
                           </p>
                       </div>
                

                    </code>
                </div>
            </div>
        </div>


        <div id="Comment" class="tabcontent">
            <h3 class="comment_ex">
                Java Comments
            </h3>

            <p class="exp_comn">
            Comments can be used to explain Java code, and to make it more readable. It can also be used to prevent execution when testing alternative code.
            </p>

            <h3 class="sin_comn">
                Single-Line Comments
            </h3>
            <p class="desc_sing">
            Single-line comments start with two forward slashes ( <span class="red_col">//</span> ).<br><br>
            Any text between <span class="red_col">//</span> and the end of the line is ignored by Java (will not be executed).
            </p>
            <div class="ex_comnnn">
                <div class="exapm_lin">
                    <h3 class="text_sin">Example</h3>
                    <p class="comment_texo">// This is a comment</p>
                    <code class="sys_exap"><span class="red_col">System</span><span class="light_black">.</span>out<span class="light_black">.</span><span class="red_col">printIn</span><span class="light_black">(</span><span class="light_green">"Hello World"</span><span class="light_black">) ; </span></code>
                </div>
            </div>
            <div class="multi_comn">
                <h3 class="text_multi">
                Java Multi-line Comments
                </h3>
                <p class="sub_multi">
                Multi-line comments start with<span class="red_cols"> /*</span> and ends with<span class="red_cols"> */</span>.<br><br>
                Any text between  <span class="red_cols">/*</span> and <span class="red_cols">*/</span> will be ignored by Java.<br><br>
                This example uses a multi-line comment (a comment block) to explain the code:

                </p>
            </div>
            <div class="ex_comnnn">
                <div class="exapm_lin">
                    <h3 class="text_sin">Example</h3>
                    <p class="comment_texo">/* The code below will print the words Hello World
                    to the screen, and it is amazing */</p>
                    <code class="sys_exap"><span class="red_col">System</span><span class="light_black">.</span>out<span class="light_black">.</span><span class="red_col">printIn</span><span class="light_black">(</span><span class="light_green">"Hello World"</span><span class="light_black">) ; </span></code>
                </div>
            </div>
        </div>

        <div class="tabcontent" id="Vari">
            <h3 class="jav_vari">Java Variables</h3>
            <p class="sub_vari">
            Variables are containers for storing data values.<br><br>
            In Java, there are different types of variables, for example:<br><br>
            <ul class="vari_list">
                <li class="list_exva"><span class="red_cols">String </span>- stores text, such as "Hello". String values are surrounded by double quotes</li>
                <li class="list_exva"><span class="red_cols">int </span> - stores integers (whole numbers), without decimals, such as 123 or -123</li>
                <li class="list_exva"><span class="red_cols">float </span> - stores floating point numbers, with decimals, such as 19.99 or -19.99</li>
                <li class="list_exva"><span class="red_cols">char </span> - stores single characters, such as 'a' or 'B'. Char values are surrounded by single quotes</li>
                <li class="list_exva"><span class="red_cols">boolean </span> - stores values with two states: true or false </li>
            </ul>

            </p>
            <h4 class="declare_var">Declaring (Creating) Variables</h4>
            <p class="dec_var">To create a variable, you must specify the type and assign it a value:</p>
            <div class="box_cre">
                <div class="synt">
                    <h2 class="syn_txt">Syntax</h2>
                    <code class="syn_var"><em>
                    type variableName = value;
                    </em></code>
                </div>
            </div>

            <div class="explain_var">
                <p class="text_expli">
                Where type is one of Java's types (such as <span class="red_cols">int</span> or <span class="red_cols">String</span>), and<em> variableName</em> is the name of the<br>
                variable (such as <b>x</b> or <b>name</b>). The<b> equal sign</b> is used to assign values to the variable.<br><br>
                To create a variable that should store text, look at the following example:



                </p>

            </div>
            <div class="synt_dec">
                <div class="box_dex">
                    <h2 class="main_txt">Example</h2>
                    <p class="creat_var">Create a variable called<b> name</b> of type<span class="red_cols"> String</span> and assign it the value<b> "John"</b>:</p>
                    <code class="code-inf">
                        <span class="red_col">String</span> name <span class="light_black">=</span> <span class="light_green">"John";</span><br>
                        <span class="red_col">System</span><span class="light_black">.</span>out<span class="light_black">.</span><span class="red_col">printIn</span><span class="light_black">( </span> name <span class="light_black">);</span>
                    </code>
                </div>
            </div>
            
        </div>


        <div class="tabcontent" id="Strings">
            <h2 class="string_ja">Java Strings</h2>
            <p class="str_jaba">
                    Strings are used for storing text.<br><br>
                    A <span class="red_cols">String</span> variable contains a collection of characters surrounded by double quotes:<br>
             </p>

             <div class="box_str">
                 <div class="str_tes">
                     <h2 class="txt_str">Example</h2>
                     <p class="exam_str">Create a variable of type <span class="red_cols">String</span> and assign it a value:</p>
                     <code class="code_str">
                         <span class="red_col">String</span> greeting <span class="light_black">= </span> <span class="light_greeen">"Hello"</span><span class="light_black">;</span>
                     </code>

                        
                 </div>
             </div>
             <div class="str_leng">
                 <p class="length">String Length</p>
                 <p class="sub_lengt">A String in Java is actually an object, which contain methods that can perform certain operations on strings. For example, the length of a string can be found with the <span class="red_cols">length()</span> method:</p>
             </div>

             <div class="len_box">
                 <div class="tes_box">
                     <p class="ex_len">Example</p>
                     <code class="test_lengt">
                         <span class="red_col">String</span> txt <span class="light_black"> = </span> <span class="light_green">"ABCDEFGHIJKLMNOPQRSTUVWXYZ"</span><span class="light_black">;</span><br>
                         <span class="red_col">System</span><span class="light_black">.</span> out <span class="light_black">.</span><span class="red_col">printIn<span class="light_black">(</span></span><span class="light_green">"The length of the txt string is: "</span> <span class="light_black"> + </span>txt<span class="light_black">.</span><span class="red_col">length</span><span class="light_black">()) ;</span>
                     </code>
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
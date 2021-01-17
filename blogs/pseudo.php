<?php include('header.php') ?>


<div class="headImage">
</div>
<div class="heading">
    Flowchart and Pseudocode
</div>

<div class="page">
    <div class="blog-page">
    <div class="blogHeading">Flowchart</div>
    As we said, during writing code, coders often can get confused due to the complexity of various algorithms. As a result, it becomes difficult to shape the flow of the program.  Flowcharts are interesting tools to help us out and to get a broad idea of our code. Let us understand them by making a flowchart of the GCD algorithm we discussed earlier.
    <img src="../img/images/pseudo/image2.png" class="img-responsive floating-image center">
<br>
Try and understand the flowchart
<br>
- After starting the program, we take two numbers as input from the user. <br>
- The blue diamond-shaped box is what is called a decision box or a conditional(more on conditionals later). Here we find whether the first number is the greater one or not. If not, we exchange the numbers and compare them again. <br>
- The yellow rectangle-shaped boxes are processing boxes. We find the remainder here and then again compare the remainder obtained with zero in the blue decision box. <br>
- If the remainder does not come out to be zero,  we repeat the process by changing the value of A and B as in the algorithm. <br>
- After a certain number of repeated processes, the remainder becomes zero and the smaller number at that moment of time is our G.C.D. <br>
<center>Try tracing the flowchart for our example of 6 and 8. Now,
</center> <br>
<img src="../img/images/pseudo/image1.jpg" class="img-responsive floating-image center">
<br><br><br>
<div class="blogHeading">Pseudocode</div>
Pseudocode is the third and the last step after writing an algorithm and drawing the flowchart which is suggested before we start actual coding. Pseudocode is an informal way of programming that does not require any strict programming language syntax or underlying technological considerations. It is used for creating an outline or a rough draft of the actual program. We will use the same G.C.D. example to maintain a flow.
<br>
Input a and b
 <br>
 <ol>
 <li><pre>if(a is greater than b)
                c= Remainder of a/b
          else 
                a=b and b=c</pre>  <br>
    <li>
    <pre>
    if(c is 0)
        Print b is the g.c.d.
    else 
        Go to step 1

    </pre>
    </li>

 </li>
 </ol>
 <br><br>
 You are advised to <a href="http://theteacher.info/websites/ocr_alevel/WebPages/F452_ProgTechn/DryRuns/DryRuns.html">dry run</a> this pseudo code and try to visualize it. The pseudo-code will become more clear once we move further in the blog.       
 <br><br>
        <table style="border: 2px solid black;">
            <tr>
                <td>
                    Mail your assignment answers to <a href="mailto:rahul@zine.co.in">rahul@zine.co.in</a> and contact
                    us in communication channel with doubts.
                </td>
            </tr>
        </table>
        <br><br><br>

        <ul class="pager">
        <li class="previous"><a href="./algorithms.php">Previous</a></li>

            <li class="next"><a href="./variables.php">Next</a></li>
        </ul>



    </div>
</div>

<?php include('footer-1.php') ?>

</html>
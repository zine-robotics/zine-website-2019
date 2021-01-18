<?php include('header.php') ?>


<div class="headImage">
</div>
<div class="heading">
    Conditional Statements
</div>

<div class="page">
    <div class="blog-page">

    As we discussed in the flowchart (the diamond box), conditional statements are used to define the flow of the program. It is very well explained by this image.
        <br><br>

        <img src="../img/images/conditional/image15.jpg" class="img-responsive floating-image center">
        <br><br>
        Conditional statements are used for decision making. The process is similar to what we do in real life. If a specified condition is true then a particular block of statements is executed and if not then the other one. Notice how we used ‘if’ and ‘if not’ in the previous lines? That’s what actually ‘if-else’ statements are in the world of programming.
        <br><br> 
        <strong>
        Now that we are approaching the first real programming construct of this blog, one thing you must understand that even though our general syntaxes will be following the C language, these constructs are common to all programming languages in different forms.
        </strong>
        <img src="../img/images/conditional/image9.jpg" class="img-responsive floating-image center">
        <br><br>
        <strong>
        If statement:
        </strong>
        <br><br>
        An “if statement” is a well known conditional statement in programming. In an, if statement a condition is given inside the parentheses (), and the code tests and evaluates the condition, and if the condition is true then the if block is executed otherwise not. 
        <br><br>
        Syntax:
        <br><br>
        <pre>
        if(condition) 
         {
            "Code to be executed if the condition is true."
         }
        </pre>
        <br><br>
        Let's take an example:
        <br><br>
        <img src="../img/images/conditional/image2-1.png" class="img-responsive floating-image center">
        <img src="../img/images/conditional/image2-2.png" class="img-responsive floating-image center">
        <br>
        If the condition is true the code inside the ‘if block’ will be executed and “Hello World” will be printed. (printf is used to print something to the user in C).
        <br><br>
        <strong>
        The if statements are usually used in 4 forms if, if-else, if-else ladder, and nested if.
        </strong>
        <br><br>
        We have understood the If statement above,
        <br><br>
        <strong>If-else statement:</strong> <br><br>
        In if-else statements, the condition is tested and evaluated and if it is true then the block inside the if statement is executed and if it is false then instead of doing nothing, the block inside the else statement is executed. 
        <br><br>
        Let’s take an example. Say we have to check whether a given person is above 18 or not and print “Person is above 18” if he/she is and “Person is not above 18” if not.
        <br><br> <i>Remember: ‘scanf’ is used to take input from users in the C programming language.</i>
        <br><br> 
        <img src="../img/images/conditional/image4-1.png" class="img-responsive floating-image center">
        <img src="../img/images/conditional/image4-12.png" class="img-responsive floating-image center">
        <br><br>
        In the above example, the age input given by the user is 12 which is less than 18. So the condition (age>=18) is false and its block of code is not executed. So the else condition is true and its block of code is executed.
        <br><br> 
        <img src="../img/images/conditional/image4-1.png" class="img-responsive floating-image center">
        <img src="../img/images/conditional/image4-2.png" class="img-responsive floating-image center">
        <br><br>
        When age 20>18, if condition is true and its corresponding block of code is executed.
        <br><br>
        <strong>Nested if:</strong><br><br>
        A “nested if”  is an if statement that is the target of another if statement. In other words, nested if statements have an if statement inside another if statement.
        <br><br>
        <pre>
        if (condition1)
         {
            <i>//Executes when condition1 is true</i>
            if(condition2)
            {
               <i>//Executes when condition2 is true</i>
            }
         }
        </pre>
        <br><br>
        Try an example:
        <br><br>
        <img src="../img/images/conditional/image8-1.png" class="img-responsive floating-image center">
        <img src="../img/images/conditional/image8-12.png" class="img-responsive floating-image center">
        <br><br>
        What will be printed in this case? Will putting num =12 change the output?<br><br>
        Let’s check it out.
        <br><br>
        <img src="../img/images/conditional/image8-1.png" class="img-responsive floating-image center">
        <img src="../img/images/conditional/image8-2.png" class="img-responsive floating-image center">
        <br><br>
        <strong>If else ladder:</strong><br><br>
        We know that the if-else statement allows us to check between two possibilities: when the condition is true and when it is false. But what if there are more than two possibilities. Here’s where the if-else ladder comes into place. 
        <br><br>
        <pre>
        if(condition1)
         {
            <i>//Executes when condition1 is true</i>
         }
         else if(condition2)
         {
            <i>//Executes when condition 2 is true</i>
         }
         else
         {
            <i>//Executes when no condition  is true</i>
         }
        </pre>
        <br><br>
        Let’s have a look at an example. Suppose we want to grade students on the basis of their marks such that marks greater than 90 are given “A”, between 80 - 90 “B” and below 80 “C”. Don’t worry this is just an example, you won’t actually be graded this harshly. 
        <br><br>
        <img src="../img/images/conditional/image17-1.png" class="img-responsive floating-image center">
        <img src="../img/images/conditional/image17-2.png" class="img-responsive floating-image center">
        <br><br>
        <strong>Note that if starting from the top, any condition is found to be true, the rest of the blocks won’t be executed, even if their conditions come out to be true.</strong>
        <br><br>
        Understand this in the context of our example. Say a student has marks 85. Then first the, ”if condition” will be checked and found to be false and hence “A”, will be not printed. However, “B” will be printed as marks>80 being true. The code will skip the rest of the conditions, once one is found to be true.
        <br><br>
        <strong>We have now understood the if construct. It is</strong>
        <br><br>
        <img src="../img/images/conditional/image10.gif" class="img-responsive floating-image center">
        <br><br>
        <img src="../img/images/conditional/image7.png" class="img-responsive floating-image center">
        <br>
        <strong>What should be the output of this code? Note the absence of {}. What difference does that make? (Do use the concepts of operators we learned previously)</strong>
        <br><br>
        Before moving to the next programming construct, consider a situation. Say you have to print your name 10 times. How will you do it? Simple, right? Use a print statement 10 times. What about 100 or 1000? Writing the same statement this many times would be a tedious task and a waste of valuable time. This is where loops come in.
        <br><br>
        <img src="../img/images/conditional/image16.png" class="img-responsive floating-image center">
        <br>
         Focus on the simplicity and shortness of code on the right side. This will not change much even when we increase the number of required print statements. Don’t worry we will discuss the syntax soon. Hence, loops make our work as a coder easier and are an integral part of any programming language.
         <br><br>
         <blogPageSubHeading><strong>Loops</strong></blogPageSubHeading>
         <br>
         <img src="../img/images/conditional/image5.gif" class="img-responsive floating-image center">
         <br><br>
         So, Loops are used to repeat a set of statements until a condition is met. Two kinds of loops are commonly used: the <strong>for loop</strong> and the <strong>while loop</strong>.
         <br><br>
         <strong>for loop</strong>
         <br><br>
         Syntax  of for loop:
         <br><br>
         <pre>
         for(initialization statement; condition ; update statement)
         {
            <i>//statements inside the body of loop</i>
         }
         </pre>
         <br><br>
         <strong>How does it work?</strong>
         <br><br>
         <img src="../img/images/conditional/image3.png" class="img-responsive floating-image center">
         <br>
         The flowchart given above gives us a basic idea about working for loops. For better understanding let’s see a few examples.
         <br><br>
         <img src="../img/images/conditional/image14.png" class="img-responsive floating-image center">
         <br>
         - First, we initialized i=1, this initialization statement is executed only once. Here, we initialize the counter for the loop.
         <br>
         - Then, the condition is evaluated. If the test expression is evaluated to true, statements inside the body of for loop are executed. Here the block of code: [printf(%d, i)] is executed as i=1 which is less than 10.
         <br>
         - The next counter is updated. Here we have to increment i by +1.
         <br>
         - Again, the test expression is evaluated. This process goes on until the test expression is false. When the test expression is false, the loop terminates. So all natural numbers from 1 to 10 are printed and when condition i<=10 becomes false i.e i=11, the loop terminates.
         <br><br>
         <strong>Note: <pre>%d</pre> is a format specifier that is used to output an integer in C. Simply put, this is the syntax to print out an integer.</strong><br><br>
         <strong>While Loop:</strong><br><br>
         Syntax:
         <br><br>
         <pre>
         while(condition)
         {
            <i>//statements
            //also change the value here that will make the condition false at some point.</i>
         }
         </pre>
         <br>
         <strong>How does it work?</strong>
         <br><br>
         Here the counter will be initialized before the while loop. A condition is specified in the parenthesis of the ‘while’ loop that will be checked <strong>before</strong> each iteration until it becomes false.  Make sure to change the value of the counter in the while block otherwise it will become an infinite loop.
         <br><br>
         Let’s see some basic examples of while loop:
         <br><br>
         <img src="../img/images/conditional/image18.gif" class="img-responsive floating-image center">
         <br><br>
         Let’s print the first 10 natural numbers using a while loop for which we earlier used for loop.
         <br><br>
         <img src="../img/images/conditional/image11.png" class="img-responsive floating-image center">
         <br><br>
         <strong>Note that any problem involving loops can be implemented using any of the two loops.</strong><br><br>
         <strong>Take a look at another illustration of the working of loops.</strong><br>
         <img src="../img/images/conditional/image13.png" class="img-responsive floating-image center">
         The first step is the initialization. Buying candy through coins is the body of the loop and updating of the counter. Finally, when all coins are over, the loop terminates.
        
         <br><br>

        <table style="border: 2px solid black;">
            <tr>
                <td>
                    Write pseudocode along with the flowchart to store the age of 10 people and count how many of them are above 30 years of age.<br>
                  Suppose you are driving at a speed of 80km/h. After every 5 min, your speed decreases by 2km/h. Find the maximum distance you can cover at an average speed during the journey.
                  <br>
                  Write pseudocode for this problem and see how you can apply loops here.

                </td>
            </tr>
        </table>
        <br><br><br>
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
            <li class="previous"><a href="./variables.php">Previous</a></li>
            <li class="next"><a href="./functions.php">Next</a></li>
        </ul>



    </div>
</div>

<?php include('footer-1.php') ?>

</html>
<?php include('header.php') ?>


<div class="headImage">
</div>
<div class="heading">
    Algorithm
</div>

<div class="page">
    <div class="blog-page">
    Now that we have understood the basics of how information is actually stored in a computer;  let's get right into the crux of this blog. ALGORITHMS !
<br><br>
<img src="../img/images/algorithms/image1.jpg" class="img-responsive floating-image center">
Algorithms are everywhere! They are so incorporated and embedded in our daily lives that they completely escape our notice.  How does your mom prepare her mouth-wateringly delicious dishes? She has a secret recipe. This recipe is an algorithm. Remember the mechanics problems you used to solve. In most of the questions, you first drew the free body diagrams, then resolved the components in the desired axis, and only then proceeded further. This was an algorithm.  
<br><br>
<div class="blogPageHeading">What is an Algorithm?</div>
So what exactly is the algorithm then?  An algorithm put simply, is a sequence of steps that we follow to solve a problem.
<br> Let us further try to understand the use and implementation of algorithms through an example that you all must have come across in your school days.
<br> <strong> Algorithm to find the G.C.D of two numbers </strong>(Let’s take 6 and 8 for our example) (G.C.D stands for Greatest Common Divisor)
<br><br>
Method 1
<br>
- Divide 6 and 8 by 1. <br>
- As the remainder comes out to be 0, write 1 on a page. <br>
- Divide both the numbers by 2 this time. <br>
- As the remainder comes out to be 0, write 2 on a page. <br>
- Divide both the numbers by 3. <br>
- As the remainder is not 0 for both, discard 3. <br>
- Repeat the same process for all numbers till the smallest of the given numbers (6 in this case). <br>
- Now the largest number amongst the numbers written on our page is our G.C.D.(2 in our case as after 2 we will not find any number which is totally divisible by 6 and 8). <br> <br> <br>
Method 2 <br>
- Divide the larger number by the smaller one and find out the remainder(8/6=2 in this case) <br>
- Now, forget about the bigger number and consider the remainder and the smaller number. So, divide the larger one of the two by the smaller one and find the remainder (6/2=0 in this case) <br>
- Repeat until we get remainder as 0 (6/2 is the last step). <br>
- The smaller number at the time when the remainder is 0 is the G.C.D.(2 in this case) <br>
<br><br>
If you closely observe both the algorithms by taking a few more examples, you will find that the second algorithm takes less number of steps and hence less time in general. This is a core concept. The search for “efficient” algorithms is evergoing in the world of computers.  It is the driving force behind so many new inventions. So before writing any code we always try to think of an algorithm that both takes less time and is memory efficient. 
<br><br>
In this search, algorithms often get complex and difficult to understand. So, after writing an algorithm, we usually make a flowchart to make it simpler and understandable. Flowcharts are going to be our next topic. But before that, try a question.
 <br>
 <br> <strong> Try finding out a time-efficient algorithm for calculating the LCM of two numbers. </strong> <br>

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
        <li class="previous"><a href="./memory.php">Previous</a></li>

            <li class="next"><a href="./pseudo.php">Next</a></li>
        </ul>



    </div>
</div>

<?php include('footer-1.php') ?>

</html>
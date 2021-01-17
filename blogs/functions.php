<?php include('header.php') ?>


<div class="headImage">
</div>
<div class="heading">
    Functions and Arrays
</div>

<div class="page">
    <div class="blog-page">
        <div class="blogHeading">Functions</div>
        Remember scanf and printf discussed in the input and output section of this blog? We gave a hint that these were functions and briefly discussed what functions are. Let’s elaborate on that in this section. So, we know that when we write printf(“zine”), the computer gets a command to print “zine” on the screen. Behind the scenes, a separate code was written while designing the  C language according to which the special task of printing is assigned whenever we write or call a print function in our code i.e. to display something on the screen. “Calling” a function is the technical term to use a function.
<br><br>
<img src="../img/images/functions/image26.gif" class="img-responsive floating-image center">

<br>
Similar to printf() we can also define our own functions that do some specific tasks and can be used simply by calling them as we call print. This is an integral part of programming.  Let us start with a definition.
<br><br> A function is a <strong>block of statements</strong> that performs a specific task. Let’s say you are writing a program and you need to perform the same task in that program more than once. In such a case you have two options:
<br><br>
a) Use the same set of statements every time you want to perform the task. <br>
b) Or, create a function to perform that task and just call it every time you need to perform that task. <br>
Using option (b) is easier and concise, and a good programmer always uses functions while writing code. In other words,<br><br>
Functions are used because of the following reasons – <br>
a) To improve the readability of code. <br>
b) Improves the reusability of the code, the same function can be used in any program rather than writing the same code from scratch. <br>
Now let us try to understand how they actually work. In essence, functions accept some input (called arguments), do some processing on this input, through the block of statements present, and give an output.
<br><br>
<img src="../img/images/functions/image24.gif" class="img-responsive floating-image center">
Let’s see an example of a simple function that takes two numbers and prints their sum.
<img src="../img/images/functions/image2.png" class="img-responsive floating-image center">
<br>
We know a,b are the arguments to the function. But what is this “void”? This denotes the return type of the function. We can return values in a function. Essentially, it means that if we try to assign the function value to a variable as 
<br><br> variable = sum(a,b); 
<br><br> This is the type of variable required. “Void” in this case denotes no value is returned and hence the function cannot be assigned to a variable. The return type can be int, char, float, or any other data type.  
<br><br> So when we call or sum function as
<img src="../img/images/functions/image17.png" class="img-responsive floating-image center">
<br>
<img src="../img/images/functions/image19.png" class="img-responsive floating-image center">
<br> <br>
We totally understand that the concepts of functions can be confusing sometimes, so we suggest you visit this <a href="https://www.youtube.com/watch?v=yONAqJWVH60">video</a>.
<br> Try to find out the output of the following codes.
<img src="../img/images/functions/image20.png" class="img-responsive floating-image center">
<br>
A function calc() is made outside the main function. The value returned from the function calc() is printed again in the main.
 <br><br>
 Try doing a similar problem using the concept of arguments.
 <br><br>
 <img src="../img/images/functions/image7.png" class="img-responsive floating-image center">
<br>
Try sketching the flow(not flowchart) of this program showing the function calls.
<div class="blogHeading">Concept of Arrays</div>
We have already learned about variables and how we use them to store various data during the course of programming. Now think of a problem where we need to store many variables(of same data type) for ex:- adding 10 natural numbers. Here we need to store them in a new data type called an array.
 <br><br>
Taking the reference from the variables part of the blog, recall that different variables are randomly distributed in the RAM. Arrays have special features where all the variables of the same array are stored in a sequence as shown in the figure below. We will discuss further the use and importance of this property.
<br>
<img src="../img/images/functions/image25.png" class="img-responsive floating-image center">
<br>
<img src="../img/images/functions/image18.png" class="img-responsive floating-image center">
<br>
<strong>An array is a contiguous memory location that contains a group of elements, such as an integer or string. Arrays are commonly used in computer programs to organize data so that a related set of values can be easily sorted or searched.
</strong>  <br><br>
 
Instead of declaring individual variables, such as number0, number1, ..., and number99, you declare one array variable such as numbers and use numbers[0], numbers[1], and ..., numbers[99] to represent individual variables. A specific element in an array is accessed by an index.
<br><br> All arrays consist of contiguous memory locations. The first box corresponds to the first element and the last block to the last element.
<img src="../img/images/functions/image9.jpg" class="img-responsive floating-image center">
<br>
<div class="blogPageSubHeading">Declaring Arrays</div>
<br>
To declare an array in C, a programmer specifies the type of the elements and the number of elements required by an array as follows −
<pre>type arrayName [ array size ];</pre>
<br>
This is called a single-dimensional array. The array size must be an integer constant greater than zero and the type can be any valid C data type. For example, to declare a 10-element array called the balance of type double, use this statement −
<pre>int balance[10];</pre> 
  To explore more about arrays click on the topics below:- <br>
<a href="https://www.ibm.com/support/knowledgecenter/SSLTBW_2.4.0/com.ibm.zos.v2r4.cbclx01/aryin.htm">Initializing array and Multidimensional arrays</a>    
 
Can we find out the address for a certain specified block in a 2-D array if we are given the address of its first data(first-row first column) and its data type? Think of a generalized formula.
 <br>
 Can we find out the address for a certain specified block in a 2-D array if we are given the address of its first data(first-row first column) and its data type? Think of a generalized formula.
<br><br>
<img src="../img/images/functions/image11.png" class="img-responsive floating-image center">
<br>
Above is a simple example of printing the first 10 natural numbers. Now it’s your task to print the first 1000 natural numbers. Can you? Of course, you can! But will you do it with the same method? Oh common guys TIME IS MONEY!!
<br><br> Arrays save us from the tedious task of declaring too many variables and using multiple statements. Wanna know how? 
<br>
<img src="../img/images/functions/image8.png" class="img-responsive floating-image center">
<br>
See how we can solve the same problem in 3-4 lines which took 10-12 lines without arrays. In arrays, we just need to define the array variable name. Its value is directly accessed by its index. Using loops with arrays can do wonders! We can store thousands of elements in arrays and access them with just one simple loop directly by its index.
 <br><br>
               <strong>Limitation of the array over variables</strong>   
<br><br>
All the elements in an array should have the same data type whereas when we define a number of variables, we can have a variety of elements having different data types. Let us see this by an example: <br>
<strong> int a[10];</strong>
 Here we can store 10 different variables in a but the constraint being they all must be of the same data type i.e. int.
 
 <br><br>
<strong>int a; float b; char c;</strong>
<br><br>
Here we have reserved three blocks in memory but are free of the constraint we had in our array example. We can store 3 variables of different data types.  
   <br><br>                                                 
We have learned the basic and necessary tools used to develop and think of an algorithm to get a solution. Now let’s implement that knowledge.
 <br><br>
How are contacts in our mobile phones sorted according to names? How come we just type the names in the search bar and it pops up from the long list? All these tasks are accomplished using the most widely used algorithms - Searching and Sorting algorithms. These algorithms are quite interesting and can handle simple tasks of sorting and searching files in your pc to complex computing problems. In this era of the digital economy, data is the new mineral oil. And anything that helps in managing data is highly valuable, so are searching and sorting algorithms.
Let’s learn some of the basic searching and sorting algorithms:
<br><br>
<div class="blogHeading">Searching</div>
Suppose we are given a data set of integers in an array and we need to find out whether a certain integer is present in it or not. One simple way would be to compare each and every data with our integer that you all must have thought till now. Let us now look at various algorithms and your task would be to find out which one is the most effective and time-efficient.
<br><br> We will start with the simplest one which is a linear search.
<br><br> Linear search is a very simple search algorithm. In this type of search, a sequential search is made over all items one by one. Every item is checked and if a match is found then that particular item is returned, otherwise the search continues till the end of the data collection.
<img src="../img/images/functions/image23.gif" class="img-responsive floating-image center">
<br><br>
<strong>Algorithm:</strong> <br>
1. Compare the first element with the data.
<br> 2. If the first element is equal to the data i.e. A[0], type data found and exit.
<br> 3. If the first element is not equal to the data, go to the next element i.e.     A[1].
<br> 4. Repeat the process until data does not match with any of the elements.
<br> 5. If we reach the end element during this process and A[last element] is not equal to data, then print “data not found”.
br 6. Exit.
There is a more time-efficient algorithm for searching known as <a href="https://www.geeksforgeeks.org/binary-search/">binary search</a>.
<br><br>
<div class="blogHeading">Sorting</div>
<br>
A Sorting Algorithm is used to rearrange a given array or list elements according to a comparison operator on the elements. The comparison operator is used to decide the new order of elements in the respective data structure.
<br> <br> For example, The below list of characters is sorted in increasing order of their ASCII values. That is, the character with lesser ASCII value will be placed first than the character with higher ASCII value.
<img src="../img/images/functions/image21.jpg" class="img-responsive floating-image center">
  <br>
  There are many sorting algorithms. Some commonly used have been mentioned here: <br>
<strong>Bubble Sort</strong> <br>
Bubble Sort is the simplest sorting algorithm that works by repeatedly swapping the adjacent elements if they are in the wrong order. Let us look at it with the help of an example.
 Let the array to be sorted is <br>
 <img src="../img/images/functions/image10.jpg" class="img-responsive floating-image center">
 Bubble sort starts with the very first two elements, comparing them to check which one is greater. <br><br>
 <img src="../img/images/functions/image5.jpg" class="img-responsive floating-image center"><br>
 In this case, value 33 is greater than 14, so it is already in sorted locations. Next, we compare 33 with 27.
 <br><br>
 We find that 27 is smaller than 33 and these two values must be swapped.
 <br>
 <img src="../img/images/functions/image14.jpg" class="img-responsive floating-image left">

 <img src="../img/images/functions/image16.jpg" class="img-responsive floating-image right">
 The new array should look like this −

 <img src="../img/images/functions/image15.jpg" class="img-responsive floating-image center">

<br><br>
Next, we compare 33 and 35. We find that both are already sorted positions.
<br><br>
<img src="../img/images/functions/image6.jpg" class="img-responsive floating-image center">
<br><br>
Then we move to the next two values, 35 and 10.
<img src="../img/images/functions/image13.jpg" class="img-responsive floating-image center">
We know then that 10 is smaller than 35. Hence they are not sorted.
<br><br>
<img src="../img/images/functions/image1.jpg" class="img-responsive floating-image center">
<br><br>
We swap these values. We find that we have reached the end of the array. After one iteration, the array should look like this −
<br><br>
<img src="../img/images/functions/image22.jpg" class="img-responsive floating-image center">
To be precise, we are now showing how an array should look like after each iteration. After the second iteration, it should look like this −
<img src="../img/images/functions/image12.jpg" class="img-responsive floating-image center">
<br><br>
Notice that after each iteration, at least one value moves at the end.
<br><br>
<img src="../img/images/functions/image4.jpg" class="img-responsive floating-image center">
<br><br>
And when there's no swap required, bubble sorts learns that an array is completely sorted.
<br><br>
<img src="../img/images/functions/image3.jpg" class="img-responsive floating-image center">
<br><br>
Another example for better understanding is given below, try to visualize it without explanation. <br><br>
Eg: We have a simple array  [5,3,8,2,1,4] <br><br>
We have some more algorithms for sorting such as  <a href="https://www.geeksforgeeks.org/selection-sort/">selection sort</a> and <a href="https://www.geeksforgeeks.org/insertion-sort/">insertion sort</a>.

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
            <li class="previous"><a href="./pseudo.php">Previous</a></li>

            <li class="next"><a href="./conditional.php">Next</a></li>
        </ul>



    </div>
</div>

<?php include('footer-1.php') ?>

</html>
<?php include('header.php') ?>


<div class="headImage">
</div>
<div class="heading">
    Variables Data types and Operators
</div>

<div class="page">
    <div class="blog-page">
        <div class="blogHeading">Variables and Constants</div>
        Remember those questions in maths whose solutions started with the famous “Let’s assume the answer to be x ”.
        You used to dutifully solve tedious equations to find the value of x and this value came out different for
        different questions. X here was a variable and the value we found for it was a constant. Variables and constants
        in programming are very similar to this.
        <br> <br> They act like “containers” that help store, retrieve, and sometimes, modify data. Variables hold
        values that can be modified when a program is executed. Constants, on the other hand, hold values that remain
        unchanged throughout the execution of a program. Behind the scenes, variables and constants define areas in
        memory in which values(data) are stored. Let’s have a brief look at how through an example.
        <br><br> The image represents memory in a computer. Each cell has a capacity of 1 byte and an address indicated
        on the left. Say you want to store the number 3.14 in memory. 3.14 requires 4 bytes of memory. But why? We’ll
        discuss this in the very next topic . For now, take it as is. So first, the computer allocates 4 bytes of memory
        at some random address, 248,440 to 248,444 in this case. Then the value 3.14 is stored at that address in binary
        form. Once the value is stored, what if we want to retrieve it from its random address. This is the role of
        variables and constants, they act as “identifiers” for these blocks of memory, and provide the user with access
        to this memory and its data. So instead of having to remember these memory locations, the user can simply refer
        to the memory by a set name.
        <br><br> This is all well and good, but how do actually put this all into effect in code?
        <br><br>
        <img src="../img/images/variables/image5.jpg" class="img-responsive floating-image center">
        <br><br>
        This is technically called Declaration of a variable, and is done in three parts:-
        <br>
        <div class="blogHeading">Data Type</div>
        These are special words in every language used to define how much memory the variable requires. In the example
        above, our variable has type “int” which tells the computer that it requires 4 bytes of memory. We will discuss
        more these data types, in just the next topic.
        <br>
        <div class="blogHeading">Variable name</div>
        The next part is the variable name. This is that user-defined name, we referred to earlier. This is the
        identifier by which the memory block will be referred. Can we use “int” as a variable name? Won’t that be
        confusing? No, “int” cannot be used as a variable name. There are some special predefined words in every
        language that cannot be used as identifiers. These are called keywords. These keywords are language-specific,
        i.e different languages have different keywords.
        <br><br>
        To know more about these keywords, visit this <a
            href="https://www.geeksforgeeks.org/variables-and-keywords-in-c/">link</a>. <br><br>
        What about “$money”? Can we name our variable “$money”? No, other than not using keywords, there are some more
        rules that need to be followed while naming variables. To know more, visit the link. <br><br>
        <div class="blogHeading">Value</div>
        The last part is the value. It is the actual data to be stored in memory.
        <br><br> Note while discussing the parts we used only “variables” and not “variables and constants”. Were these
        parts only applicable to variables? No, constants also have a very similar declaration, the only difference
        being that usually some extra special word is appended at the beginning such as “const”.
        <br><br>

        Let’s summarize,
        <br><br>
        <img src="../img/images/variables/image12.jpg" class="img-responsive floating-image center" width="600px"
            height="600px"> <br>
        <img src="../img/images/variables/image1.gif" class="img-responsive floating-image center" width="600px"
            height="600px">
        <br>
        <br><br>
        <div class="blogHeading">DATA TYPES
        </div>
        <center> 4 + 5 = ? &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ajay - 1 = ?
        </center> <br>
        <br>
        We have briefly discussed data types. Let’s elaborate on that in this section.
        <br> Suppose we want our program to do simple operations like addition and subtraction. So, I gave the above
        instructions to the computer through my program. What do you think the output will be?
        <br><br> Of course, 4+5=9. But Ajay-1 will give an error because we can add and subtract integers but not an
        integer and a word. How does the computer decide this? This is the role of data types. All programming languages
        have predefined data types that indicate how much memory some data requires(we touched on this in variables and
        constants) and specify the operations that are allowed on that data.
        <br><br> All programming languages support data in the form of integers, floating-point numbers, and characters,
        and use different keywords to specify them. Let’s see some basic data types of the C programming language:
        <br><br>
        <strong>- char: </strong>It stores a single character and requires a single byte of memory in almost all
        compilers.
        <br>
        <strong>- int: </strong>As the name suggests, an int variable is used to store an integer. It requires four
        bytes of memory.
        <br>
        <strong>- float: </strong> It is used to store decimal numbers (numbers with floating-point value) with 7 digits
        of precision. It also requires four bytes of memory. This is the reason why in the previous section we said 3.14
        requires 4 bytes of memory.
        <br><br>
        <img src="../img/images/variables/image4.png" class="img-responsive floating-image center" width="600px"
            height="600px">
        <br><br>
        Note that these are not all, there are many more data types but those are smaller or larger memory versions of
        the same three data types. To learn about these visit this <a
            href="https://www.geeksforgeeks.org/data-types-in-c/">link</a>.
        <br><br> We now know how much memory each data type requires. But that is not very useful for us as a user. We
        are more concerned with the range of values. Let’s learn how to find the range of values for a four-byte
        integer.
        <br><br> We know that each byte contains 8 bits and so 4 bytes will contain 32 bits. And each bit can be either
        zero or one. So the number of possible combinations will be 2³²(Simple P and C, right?). So, if we were to have
        only non-negative numbers, we could have numbers from 0 to 2³²-1. However, generally, when we use the integer
        data type it is convenient to have both positive and negative numbers. Hence, the range is taken as -2³¹ to
        2³¹-1. Note that the total number still remains 2³² ( 2³¹ negative + zero + 2³¹-1 positive). We have found out
        the range for the int data type. It can be similarly applied to any data type for integer values. Now for a
        small assignment.
        <strong>Try finding out how you can determine the range of float and char data types.
        </strong> <br><br>
        The range of an integer is all well and good now. But what if we try putting a value out of the range inside a
        variable. This leads to something called an overflow. So as values go above the highest value, they start again
        from the lowest value. Something like,
        <img src="../img/images/variables/image10.png" class="img-responsive floating-image center" width="600px"
            height="600px">
        <br><br>
        <strong>A very important point to be kept in mind is that different data types cannot be compared or operated
            together by the computer. That is why “Ajay - 5” failed. </strong>
        <br><br>
        For eg :- Int + float (not acceptable)
        <br>
        In certain cases, however, it is possible to override this, by something called casting.
        To learn more about casting, <a href="https://www.tutorialspoint.com/cprogramming/c_type_casting.htm">click
            here</a>.
        <div class="blogHeading">Operators</div>
        <img src="../img/images/variables/image3.jpg" class="img-responsive floating-image center" width="600px"
            height="600px">
        What does the computer say, when asked “What do we tell death?”. It says “!Today”. “!” is actually an operator
        that signifies “not”. We have already seen some operators - “+”, “-”; now let's have a look at some more
        operators commonly used in programming. But first a proper definition.
        <br><br> Operators are the special symbols used in programming languages that have a specific meaning. They may
        vary across languages but they are a core concept in them all. Arithmetic, relational and logical operators are
        the most common types of operators. You are recommended to visit this <a
            href="https://www.studytonight.com/c/operators-in-c.php#">link</a> and have a look at various types of
        operators in the C language.
        <br><br> You all must have used BODMAS in your school times to solve simple mathematical expressions, Similarly
        computer also follows some set of rules to evaluate its expressions, let us read them
        <strong>Precedence</strong> determines which operator is performed first in an expression with several operators
        with different precedences.
        <strong>Associativity</strong> is used when two operators of the same precedence appear in an expression.
        Associativity can either be from Left to Right or from Right to Left.
        <strong>For example:</strong> ‘*’ and ‘/’ have the same precedence and their associativity is Left to Right, so
        the expression “100 / 10 * 10” is treated as “(100 / 10) * 10”.
        The precedence and associativity chart of operators is as follows:- <br>
        <img src="../img/images/variables/image11.png" class="img-responsive floating-image center" width="600px"
            height="600px">
        This is what is followed by the computer.
        <br>
        Let’s solve a basic maths problem:
        <br>
        100 + 3 * 200 / 10 - 10
        <br><br>
        <pre>
1.    (100 + 3 * 200 / 10  - 10)       //   * and / has higher precedence than + and - 
2.   (100 + 600 / 10 - 100)            // associativity of * and / is left to right
3.   (100 + 60 - 10)                          // associativity of + and - is again left to right
4.   (160 - 10)
5.   150
</pre>
        <strong>Q:</strong> You are given various operators and operands in a distorted manner. Arrange them and form an
        equation keeping in mind operator precedence and associativity such that the output comes out to be 8. The
        operators are
        <table style="border: 2px solid black;">
            <tr>
                <th>+</th> &nbsp; &nbsp;
                <th>5</th>&nbsp;&nbsp;
                <th>/</th>&nbsp;&nbsp;
                <th>5</th>&nbsp;&nbsp;
                <th>4</th>&nbsp;&nbsp;
                <th>+</th>&nbsp;&nbsp;
                <th>2</th>&nbsp;&nbsp;
                <th>+</th>&nbsp;&nbsp;
                <th>4</th>&nbsp;&nbsp;
                <th>4</th>&nbsp;&nbsp;
                <th>/</th>&nbsp;&nbsp;
                <th>*</th>&nbsp;&nbsp;
                <th>8</th>&nbsp;&nbsp;
                <th>3</th>&nbsp;&nbsp;
                <th>-</th>&nbsp;&nbsp;
                <th>2</th>&nbsp;&nbsp;
                <th>/</th>&nbsp;&nbsp;
            </tr>
        </table> <br><br>
        Go to this link to learn more about operators and operands to solve the next question. <br>
        <pre>
   int a = 5;
   int b = 5;
   int c = a || --b;
   int d = a-- && --b;
   int e = a++ + ++a; </pre>
        <br><br>
        What will be the values of a, b, c, d and e?


        <div class="blogHeading">Input Output</div>

        Before moving on to programming constructs, it is imperative to discuss the basics of input-output in some
        common languages, so that our code for them does not leave you confused.
        <br>
        <img src="../img/images/variables/image7.jpg" class="img-responsive floating-image center" width="600px"
            height="600px">
        <br>
        We won’t bore you with the definitions of input and output. However, we are going to be taking a look at how we
        can take user input and output in the C language. But before that, a slight hint of functions. Functions in
        programming are similar to their counterparts in math. <br><br>
        These take some values and perform operations on these values. They are also denoted similarly as a function().
        This will do for now. We have a dedicated topic later.
        <br><br>
        <strong>- C</strong> <br><br>
        For C, input and output is done using the scanf() and printf() functions . Let’s see how they work.
        <br><br> So suppose you want to take a number input to your program and store it in an integer variable num. You
        will do this as
        <pre>scanf(“%d”, &num); 
</pre>
        <br>
        Whoa! too many things at once. Let’s break this down. First, everything written in () brackets are the values
        passed to the scanf() function.
        <br><br> Now, what is this “%d”? This is a format specifier; it denotes the data type of value being taken as
        input. “%d” for example denotes that an integer is being taken as input. We will take a look at some more format
        specifiers in the next subtopic.
        <br><br> The, “,” separates the two values being passed to the function. “num” is the variable where the value
        is to be stored, but what is this weird “&” before it. Is it bitwise AND we saw earlier? No, this is the address
        operator. Note that bitwise AND operates on two numbers, and the address operator works on variables. As the
        name suggests, it gets us the address in memory for our variable. This is required to instruct the computer
        where to store the input value.
        <br><br>
        Now, for the printf() function. So say you want to output the value of an integer variable num on the screen.
        You will do so as
        <pre>printf(“%d”, num);
</pre><br>
        Things seem a little familiar this time. “%d” is again the same format specifier, this time denoting the data
        type of the value to output.Have a look at an example.
        <br>
        <img src="../img/images/variables/image9.png" class="img-responsive floating-image center">
        <br>
        <img src="../img/images/variables/image8.png" class="img-responsive floating-image center">
        <br>
        Carefully notice how we can also print text as well as combination of text and integers using the printf
        function.
        <br><br> Now for the revisit of format specifiers as promised.
        <div class="blogPageSubHeading">Format Specifiers:
        </div>
        Format specifiers are an important part of input and output in the C language. They help the computer determine
        the data type of the input and output. The format starts with the ‘%’ character. We have already discussed the
        format specifier for integer. We should also keep in mind the specifiers for the other data types we discussed.
        <br><br><br>
        <pre>
int                     %d
char                    %c
float                   %f
</pre>
        To know more about format specifiers <a href="https://www.geeksforgeeks.org/format-specifiers-in-c/"></a> click
        here. <br>
        Now for a very simple question <br>
        <img src="../img/images/variables/image6.png" class="img-responsive floating-image center">
        <br>
        What should be the output for this code snippet if the user inputs 1 and “a”? <br>
        <br>
        <strong>It is now time to move to the first major programming construct of this blog - Conditional
            Statements.</strong>
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
            <li class="previous"><a href="./pseudo.php">Previous</a></li>

            <li class="next"><a href="./conditional.php">Next</a></li>
        </ul>



    </div>
</div>

<?php include('footer-1.php') ?>

</html>
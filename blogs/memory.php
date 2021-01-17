<?php include('header.php') ?>


<div class="headImage">
</div>
<div class="heading">
    Concept of Memory and Binary
</div>

<div class="page">
    <div class="blog-page">

        Imagine yourself in a dark room having only one light bulb off. You will just have two options then, either to
        remain in the dark or turn on the lights. These “on” and “off” conditions can be treated as a signal for a
        person outside the window of the room. Now if you have two lights in the room, four such signals can be made.
        “Off and off”, “off and on”, “on and off”, “on and on”.
        <br><br>

        <img src="../img/images/memory/image3.gif" class="img-responsive floating-image center">
        <br><br>
        Computers use the same concept to use store data. The smallest unit of its memory is bit which can be related
        with the single light bulb in the room. We store “1” in it relating to the “on” condition of the light and “0”
        for ”off” condition. As explained earlier, four signals can be made then with two bits of memory.
        <br><br> With one light bulb, we can store 1 bit of information. With 8 light bulbs, we could do 8 bits. 8 bits
        means we could have 2⁸ possible options (Simple P & C right?)
        <img src="../img/images/memory/image6.png" class="img-responsive floating-image center">
        <br><br>
        So, if we had enough light bulbs, we could store any amount of data we wanted in a digital form.
        <br><br>
        <img src="../img/images/memory/image8.png" class="img-responsive floating-image center" width="600px" height="600px">
        Here, one cell represents one bit.
        <br>
        Now, not many light bulbs would fit inside our computer! So computers store bits of data by holding electrons in
        capacitors, for example. This technology is used in the RAM memory. However, we shall continue using this
        metaphor of light bulbs as it is simpler to visualize.
        <br>
        So, how many such light bulbs fit into your RAM exactly?
        <br> Let’s assume your computer has 4GB RAM, for example. If you convert 4 GB according to the above chart, it
        will be approximately equal to 32000000000 bits.
        <br> That means your 4GB of RAM holds 32 billion bits. That’s 32 billion light bulbs!
        <br><br>
        <i> But, what does it actually mean to have 32 billion bits to store and represent information?</i><br>
        <strong> To understand what these bits can do for us, let’s take a closer look at the binary number system. It
            only uses 0’s and 1’s to represent any further numeral values – and other types of data, too.</strong><br>
        Have a look at how the number 216 is stored in the memory. <br><br>
        <img src="../img/images/memory/image2.png" class="img-responsive floating-image center">
        <br>
        The blue boxes represent a single bit of memory in the RAM. Computers store 216 input by the user in its memory
        in the following way. This decoded form is obtained by a decimal to binary conversion. To learn about more
        conversions <a href="https://www.geeksforgeeks.org/number-system-and-base-conversions/">click here</a>.
        <br><br>
        We have learned about how numbers are stored in memory, but what about characters?
        <br><br>
        At this point of time,we are capable of representing any number in binary form. We will use this to store
        alphabets. We will assign every character with a number. Let us understand this by looking at how “A” is stored
        in memory.
        <br><br>
        <img src="../img/images/memory/image1.png" class="img-responsive floating-image center">
        <br>
        This image gives a clear view of how different alphabets are stored in the binary form. <br>
        Take a look at “A”. Its ASCII code is 65 and when we convert 65 to binary form, we get
        “01000001”. So, the computer stores “A” as “01000001” in its memory. But how does it differentiate between
        integer 65 and “A” then? This is done with the int and char data types. We will discuss them in-depth later.
        Click on the <a href="http://www.asciitable.com/"></a> link to view the ASCII codes of other characters.
        <br><br>
        Now, let us look at how computers store images in memory. We will understand this with an example.
        <img src="../img/images/memory/image7.png" class="img-responsive floating-image center">
        Assume the rows and columns of this excel sheet to be the pixels of the image. Now the computer will give every
        pixel a special bit in its ram and then specify their value as 0 or 1 according to the black or white color we
        want in our image. 0 for white and 1 for black. This is how simple it is to store a black and white image in
        memory.
        <br><br>
        Now, <br>
        <img src="../img/images/memory/image4.gif" class="img-responsive floating-image center">
        <center>Don't worry, it isn't you typical boring one!</center>
        <br><br>
        <table style="border: 2px solid black;">
            <tr>
                <td>
                    You want to save the below image on your computer. Suggest a suitable way for the computer to store
                    such an image in its memory.
                    <br><br>
                    Hint: Try applying the concepts of storing a black and white image discussed above.
                    <img src="../img/images/memory/image5.png" class="img-responsive floating-image center">

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
        <li class="previous"><a href="./algo-intro.php">Previous</a></li>

            <li class="next"><a href="./algorithms.php">Next</a></li>
        </ul>



    </div>
</div>

<?php include('footer-1.php') ?>

</html>
<?php include('header.php') ?>


<div class="headIcImage">
</div>
<div class="heading">
    Programming Arduino Uno
</div>
<div class="page">
    <div class="blog-page">
        Hello there! In the previous blog, we introduced you to Arduino. Now, it is time to try your hand at
        programming.<br><br>

        Generally, we code in Arduino IDE, compile it and upload it to the Arduino. And the Arduino mostly behaves as
        expected. Simple? The programming language we use for programming the Arduino devices is Arduino Programming
        Language. But this is nothing to be scared of, it is just a <a
            href="https://techterms.com/definition/framework#:~:text=A%20framework,new%20application.<br><br>">framework</a>
        built on top of C++, which means most syntax is the same. <br><br>

        But there are quite a few differences too. One of the main differences is that unlike C++, it doesn’t have a
        main() function, but it does require two main functions: setup() and loop(). A program written in Arduino
        Programming Language is called Sketch. <br><br>

        Now let’s start programming our Arduino board. If you’ve been following the blogs so far, you must know what we
        are going to use for simulation.<br><br>
        <ol><br>
            <li>Go to <a href="https://www.tinkercad.com/join">tinkercad</a> and create a new personal account. You can
                sign in with google for your ease.</li><br>
            <li>You will see a screen like this after completing the signup process.</li><br>
            <img src="../img/images/arduino2/image1.png" class="img-responsive floating-image center"><br>

            Select Circuits from the left panel and then create new circuit.<br><br>
            <img src="../img/images/arduino2/image3.png" class="img-responsive floating-image center"><br>
            <li>Next, you should see a blank screen with some components listed on the right side. Search for Arduino
                Uno R3, LED, and a resistor and drag them on the blank screen one by one.</li><br>
            <li>Make connections like the ones shown below and click on the Start Simulation button on the top right.
            </li><br>
            <img src="../img/images/arduino2/image4.png" class="img-responsive floating-image center"><br>
            <li>Wow! The led is blinking. Note that not only the LED which we connected to the Arduino but the LED on
                the board is also blinking.</li><br>
        </ol><br><br>
        <img src="../img/images/arduino2/image5.jpg" class="img-responsive floating-image center"><br>
        But you didn’t program it to do so. How did it happen? Let’s figure that out. First, Stop Simulation. Click on
        that little code button near the Start Simulation button. Open the Blocks menu and click on Text. You should see
        this:<br><br>
        <img src="../img/images/arduino2/image2.png" class="img-responsive floating-image center"><br>

        This is the default program that is causing the led to blink.<br><br>

        Let’s try to understand how this program is doing so.<br><br>
        <pre>
void setup()
{
  pinMode(13, OUTPUT);
}

void loop()
{
  digitalWrite(13, HIGH);
  delay(1000); // Wait for 1000 millisecond(s)
  digitalWrite(13, LOW);
  delay(1000); // Wait for 1000 millisecond(s)
}
</pre>
        <br><br>
        The first thing is you can see two functions: setup() and loop().<br><br>
        setup(): This function is called at the very beginning and only once, when the program starts, and when the
        Arduino is shut down and restarted. So, for example, if you wanted something to be done only once, you will
        include those tasks in the setup.<br><br>
        loop(): This function is repeatedly called while the program is running, this function governs the regular
        functioning of the Arduino board. So, if you want a task to be done repeatedly by an Arduino board then those
        tasks must reside in a loop().<br><br>

        Line 3: pinMode(13, OUTPUT);<br><br>
        This sets pin 13 on the Arduino board as an output pin.<br><br>
        Lines 8, 10: digitalWrite(13, HIGH); and digitalWrite(13, LOW);<br><br>
        These lines are used to set pin 13 high and low respectively.<br><br>
        Lines 9, 12: delay(1000);<br><br>
        These lines are giving a delay of 1000 milliseconds between setting pin HIGH and LOW.<br><br>

        As the loop() is called repeatedly, the led starts blinking.<br><br>
        <img src="../img/images/arduino2/image7.jpg" class="img-responsive floating-image center"><br>
        Isn’t it amazing? Congratulations! You learned the “Hello World” of Arduino today. For more information on
        Arduino programming language you can refer to the <a
            href="https://flaviocopes.com/arduino-programming-language/#:~:text=The%20Arduino%20Programming%20Language%20is,Programming%20Language%20is%20called%20sketch.">this
            link.</a><br><br>


        Now it's the time for you to do a small assignment (Mail your answers to puneet@zine.co.in):<br><br>

        <ol>
            <li>Why is the led on the Arduino Uno Board blinking?</li><br>
            <li>What will happen if we remove “delay(1000)” from the last line in the above program? Why do you think it
                is happening?</li><br>
            <li>What is the extension of a sketch?</li><br>
            <li>Redraw the circuit shown below.</li><br>
            <img src="../img/images/arduino2/image6.png" class="img-responsive floating-image center"><br>

            Write a program such that the led lights up when the push button is pressed and turns off when we release
            the push button. Submit the code below.<br><br>
            <li>Simulate the hypothetical circuit you studied in <a
                    href="http://zine.co.in/circuitElements.php">Circuits Elements</a> blog on tinkercad and share the
                link.</li>
        </ol>
        <br><br>

<br><br><br><br>
<ul class="pager">
            <li class="previous"><a href="./arduino1.php">Previous</a></li>
            <li class="next"><a href="./SensorIntro.php">Next</a></li>

        </ul>
    </div>
</div>

<ul class="pager">
        <li class="previous"><a href="./arduino1.php">Previous</a></li>

        </ul>

</div>
</div>

<?php include('footer-1.php') ?>

</html>
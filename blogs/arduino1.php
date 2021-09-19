<?php include('header.php') ?>


<div class="headIcImage">
</div>
<div class="heading">
    Development Boards
</div>

<div class="page">
    <div class="blog-page">
        <br />Hello everyone! Here we are with another fascinating topic for you to learn -<strong> Development
            Boards</strong>, more specifically,<strong> Arduino Uno</strong>.
        <br /><br />
        <div class="blogPageHeading">
            What is a Development Board?
        </div>
        <br />
        A <strong>development board</strong> is a printed circuit <strong>board</strong> with circuitry and hardware
        designed to facilitate experimentation with a certain microcontroller. Some everyday development boards are-
        Arduino Boards like Uno, Nano, Mega, and many more non-arduino boards like ESP32.

        <img src="../img/images/arduino1/image2.gif" class="img-responsive floating-image center">
        <br /><br />
        <div class="blogPageHeading">
            Why do we need Development boards?
        </div>
        <br />
        Imagine you have a microcontroller, and you wish to do some cool projects, say a maze solver bot or a burglar
        alarm. Now, every time you would have to set up the elementary circuit on a breadboard, and you know that some
        of the electric circuits would be the same each time, like power circuits. That makes it redundant and
        frustrating. Imagine a PCB containing all this basic circuitry. That’s the reason why we use a Development
        Board.
        <br />
        Regarding Arduino boards:
        <br /><br />
        Arduino boards are the pivotal components for thousands of ongoing projects in the field of robotics. With
        Arduino boards, you can convert input, like light, temperature, etc., from the sensors and govern an output,
        like activating an arm, a motor, or even sending information online.<br />
        This is done by sending a set of instructions to the Arduino board using Arduino Programming Language, using
        Arduino Integrated Development Environment (Arduino <a
            href="https://www.codecademy.com/articles/what-is-an-ide#:~:text=An%20IDE%2C%20or%20Integrated%20Development,%2C%20building%20executables%2C%20and%20debugging.">IDE</a>).
        The language can be expanded through C++ libraries, and people wanting to understand the technical details can
        make the leap from Arduino to the AVR C programming language on which it is based. Similarly, you can add AVR-C
        code directly into your Arduino programs if you want to.
        <br /><br />
        Wondering what exactly is an Arduino and what’s with this new term AVR? Hold on! Let’s see what they mean.
        <br /><br />
        <strong>Arduino</strong> is an open-source hardware and software company which helps us build exciting
        electronics projects with easy-to-use hardware and software. All Arduino boards have one thing in common - a
        <strong>MICROCONTROLLER</strong>. The microcontroller is a comp...but you know what a microcontroller is?
        <br><br>
        <strong>AVR</strong> is a microcontroller family developed by Atmel. Some of the examples are the ATmega series,
        ATtiny, ATxmega.
        <br><br>
        Some sample projects that you could do using Arduino as brain include building a <a
            href="https://www.instructables.com/Simple-Arduino-Wireless-Burglar-Alarm/">burglar alarm</a>, <a
            href="https://www.instructables.com/How-to-Make-Line-Follower-Robot/">line follower bot</a>, <a
            href="https://www.instructables.com/Obstacle-Avoiding-Robot-Arduino-1/">obstacle avoiding robot</a>, <a
            href="https://www.instructables.com/Room-Temperature-Monitoring-Using-Arduino-and-LM-3/">temperature
            monitoring systems</a>, <a
            href="https://www.instructables.com/Smartphone-Controlled-RC-Car-Using-Arduino/">RC car</a>, or even <a
            href="https://www.instructables.com/Home-Automation-Using-Arduino-Uno/">home automation</a>.. or, you could
        also make some 'useless machines' like the one shown in <a
            href="https://www.youtube.com/watch?v=kproPsch7i0&feature=youtu.be">this</a> video.
        <br>
        Now you know how interesting and important it is to learn about Arduino.

        As per requirements, Arduino CC manufactures many boards, (you can see them here: <a
            href="https://www.arduino.cc/en/Main/Products">Arduino - Products</a>).
        <br />
        <img src="../img/images/arduino1/image3.png" class="img-responsive floating-image center">
        <br />
        <div class="blogPageHeading">
            Why are we studying Arduino boards, and why are they so popular?
        </div>
        <br />
        Arduino development boards are so popular because of their simple IDE, straightforward code, and lots of
        Open-source libraries. But this is not it. Arduino Hardware is also Open-source, which means several other
        companies make Arduino compatible boards programmable with Arduino IDE. Some of the common arduino boards are
        Arduino Nano, Arduino Uno, Arduino Mega, etc
        <br><br>
        In this tutorial, we will study an everyday Arduino board - Arduino Uno. We will also do some simulations on
        Arduino Uno but let’s go through the hardware part first.
        <br><br>
        <img src="../img/images/arduino1/image4.gif" class="img-responsive floating-image center">
        <br>
        <img src="../img/images/arduino1/image1.png" class="img-responsive floating-image center">
        <br>
        <br>
        This is how an Arduino Uno looks like.
        <br><br>
        Some numbers have been marked on the image corresponding to components on the board. Let’s know about these
        components in detail
        <br><br>
        <ol>
            <li>An Arduino Uno board can be powered using a USB cable from your computer. All you need to do is connect
                the wire to the USB connection. It helps to upload the sketch to the Arduino Uno board. Sometimes it is
                used to send <a href="https://en.wikipedia.org/wiki/Serial_communication">serial data</a> to Arduino Uno
                too.<br><br></li>
            <li>The Arduino Uno board can also be powered using an AC-to-DC adapter or a battery. The power source can
                be connected by plugging in a 2.1mm center-positive plug into the power jack of the board.<br><br></li>
            <li>It is a voltage regulator. <br><br></li>
            <li><strong>Crystal Oscillator</strong>: The crystal oscillator helps Arduino Uno in dealing with time
                issues. How does Arduino Uno calculate time? The crystal oscillator is what helps here. Its frequency is
                16,000,000 Hertz or 16 MHz.<br><br></li>
            <li>You can reset your Arduino Uno board, i.e., start your program from the beginning. You can reset the UNO
                board in two ways. First, by using the reset button (15) on the board. Second, you can connect an
                external reset button to the Arduino Uno pin labeled RESET(5).<br><br></li>
            <li>It supplies 3.3V output once the board is powered up.<br><br></li>
            <li>It supplies 5V output once the board is powered up.<br><br></li>
            <li>There are several GND pins on the Arduino Uno, any of which can be used to ground your circuit.<br><br>
            </li>
            <li> This pin also powers up the Arduino Uno board. Arduino Uno can operate on an external supply from
                <strong>6 to 20</strong> volts. If supplied with less than 7V, the 5V pin may supply less than five
                volts, and the board may become unstable. If using more than 12V, the voltage regulator may overheat and
                damage the board. The recommended range is <strong>7 to 12</strong> volts.<br><br></li>
            <li>The Arduino Uno board has six analog input pins A0 through A5.<br><br></li>
            <li>It is a microcontroller IC. The main IC on the Arduino is slightly different from board to board but is
                usually from the ATmega line of IC’s from the ATMEL company. Arduino Uno uses ATmega328P.<br><br></li>
            <li>This LED should light up when you plug your Arduino Uno into a power source to indicate that your board
                is powered up correctly. If this light does not turn on, then there is something wrong with the
                connection.<br><br></li>
            <li> On the board, you will see two labels: TX (transmit) and RX (receive). They appear in two places on the
                Arduino Uno board. First, at the digital pins 0 and 1, indicate the pins responsible for serial
                communication. Second, the TX and RX led (13). The TX led flashes with different speeds while sending
                the serial data. The speed of flashing depends on the <strong>baud rate</strong> used by the board. RX
                flashes during the receiving process.<br><br></li>
            <li>The Arduino Uno board has 14 digital I/O pins (of which 6 provide PWM (Pulse Width Modulation) output.
                These pins can be configured to work as input digital pins to read logic values (0 or 1) or as digital
                output pins to drive different modules like LEDs, relays, etc. The pins labeled “~” can be used to
                generate PWM.<br><br></li>
            <br><br>
        </ol>
        <div class="blogPageHeading">
            What is a PWM signal?
        </div>
        <br />
        Pulse Width Modulation is a method of reducing the average power delivered by an electrical signal, by
        effectively chopping it up into discrete parts. The term <strong>duty cycle</strong> describes the proportion of
        'on' time to the regular interval or 'period' of time; a low duty cycle corresponds to low power, because the
        power is off for most of the time. Duty cycle is expressed in percent, 100% being fully on. When a digital
        signal is on half of the time and off the other half of the time, the digital signal has a duty cycle of 50% and
        resembles a "square" wave.
        <br><br>
        <img src="../img/images/arduino1/image5.png" class="img-responsive floating-image center">
        <br><br>
        That was pretty much all about the Uno board. But it's not over yet. In the next blog, we will do some
        simulations on an Arduino Uno board online on <a href="https://www.tinkercad.com/">tinkercad</a>. Till then,
        complete the given assignment.

        <br /> <br />
        <table style="border: 2px solid black;">
            <tr>
                <td>
                    Assignment questions (mail them to <a href="mailto:puneet@zine.co.in">puneet@zine.co.in</a>):<br>
                    <ol>
                        <li>What is flash memory? What is the size of flash memory for Arduino Uno?<br><br></li>
                        <li>What is the baud rate mentioned in the blog?<br><br></li>
                        <br>
                    </ol>
                </td>
            </tr>
        </table>


<br><br><br><br>



        <ul class="pager">
<<<<<<< HEAD
        <li class="previous"><a href="./micro.php">Previous</a></li>
=======
            <li class="previous"><a href="./microcontroller.php">Previous</a></li>
            <li class="next"><a href="./arduino2.php">Next</a></li>

        </ul>

>>>>>>> 04be375ab3ee5537ad3f0543fe9d292745e611ba

            <li class="next"><a href="./arduino2.php">Next</a></li>
        </ul>

    </div>
</div>

<?php include('footer-1.php') ?>

</html>
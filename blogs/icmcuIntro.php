<?php include('header.php') ?>

<style>
    table,
    th,
    td {
        border: 1px solid black;
    }

    table {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<div class="headIcImage">
</div>
<div class="heading">
    Introduction
</div>

<div class="page">
    <div class="blog-page">
        <br><br>

        <img src="../img/images/icmcuIntro/image5.gif" class="img-responsive floating-image left">
        Oh! Hello there. How is this journey of yours with robotics going? Awesome? Good! Shall we proceed? Ok! But
        before proceeding, if I ask you how a digital watch calculates time so precisely every time. If you try to count
        up to a minute, it all gets messed up sometimes.
        <br><br>
        <img src="../img/images/icmcuIntro/image2.gif" class="img-responsive floating-image right">
        What lies in the core of your computer? How does it know that 2+2 is equal to 4? Who is that genius saint
        sitting at the center, doing all the work, and how on earth can a phone recognize a fingerprint within a sec!
        Isn’t it impossible for a human being to figure out a fingerprint with a touch unless he is a superhuman or
        terminator?
        <br><br> No idea? Getting curious? Not to worry, we have got you covered! We’re going to unfold some concepts
        which will solve all these doubts.
        <br> We’ll first introduce the ICs and then we’ll dive deep into what types of ICs we have, how they are
        classified, how an IC looks, and pretty much everything necessary for you to know.
        <br> Then we shall continue with the processing unit in which you’ll get along with microcontrollers and the
        genius saints sitting inside the core of computers.
        <br> And then, we’ll descend into the sensors, their types, classification, etc.
        <br> So, starting with ICs. Any idea where to find them?
        <br> In your phone? Yes!
        <br> In cameras? Sí!
        <br> But can an IC be present in a mouse? Absolutely! There too.
        <br> P.S.- an electronic Mouse
        <img src="../img/images/icmcuIntro/image12.gif" class="img-responsive floating-image center">

        But, what are ICs? <br>
        For a layman, those little black chips you see in most of the circuit boards are ICs...but let’s dive a little
        deeper.
        <br>

        <img src="../img/images/icmcuIntro/image11.png" class="img-responsive floating-image left" width="350px">
        <img src="../img/images/icmcuIntro/image1.png" class="img-responsive floating-image right" width="350px">

        <img src="../img/images/icmcuIntro/image7.jpg" class="img-responsive floating-image left" width="350px">
        <img src="../img/images/icmcuIntro/image4.jpg" class="img-responsive floating-image right" width="350px">
        <br><br>
        <img src="../img/images/icmcuIntro/image6.png" class="img-responsive floating-image center" width="350px">

        <br><br>
        This is what ICs looks like.
        <br><br>
        So, ICs or Integrated Circuits are the building blocks of most electronic devices. They are the basis of modern
        electronics, hearts, and brains of most of the electronic circuits. Without ICs most of electronic devices are
        meaningless 🤷‍♂️.
        <br> You have studied circuits <a href="http://zine.co.in/circuitElements.php">here</a>. Let’s move one step
        forward and know the types of circuits first in which you’ll understand clearly about ICs:

        <br><br>
        <div class="blogPageHeading">Discrete Circuits</div>
        It is a circuit built using components such as transistors, resistors, capacitors, etc. that are fabricated
        separately and are connected using conducting wires on a circuit board or a <a
            href="https://www.elprocus.com/different-types-printed-circuit-boards/">printed circuit board</a>, or a
        breadboard.
        <br>
        <img src="../img/images/icmcuIntro/image9.gif" class="img-responsive floating-image center" width="350px">
        <br>
        <center>A simple discrete circuit we created earlier</center>
        <br>
        So, we see we have a working circuit from discrete components, right? Then why are integrated circuits needed in
        the first place? Can you think of some reasons for yourself? If you figured it out, you might want to write it
        somewhere. We will discuss them after the integrated circuits. So, let us see what an integrated circuit is.

        <br><br>
        <div class="blogPageHeading">Integrated Circuits
        </div>
        In simple words, an IC is a collection of several tiny electronic components (resistors, capacitors, etc.), all
        stuffed on a semiconductor wafer and connected to achieve a common goal (e.g. we have an IC for the regulation
        of voltage. Several tiny electronic components are fabricated inside the IC to achieve a common goal of
        regulation of voltage). But the surprising part is that the components in an IC are microscopic and range in
        millions. What these small things can do is pretty astonishing too. <br>
        They can function as <br>
        - Logic Gates (<a href="https://en.wikipedia.org/wiki/7400-series_integrated_circuits">74xx</a> series) - an
        electronic circuit that relates input and output via certain logic <br>
        - Timer (IC 555) - helps in calculating the time <br>
        - Voltage Regulator (IC 7805) - helps maintain the voltage of a power source within acceptable limits <br>
        <img src="../img/images/icmcuIntro/image3.gif" class="img-responsive floating-image right" width="250px">

        - Motors Driver (IC L293D, L298N) - amplifies the input voltage and current to drive motors and much more, we’ll
        talk in detail later <br>
        - Microcontrollers(ATmega328)* <br>
        - Microprocessors(Intel 8085)* <br>

        *will talk about these later
        <br><br>
        We discussed discrete circuits and integrated circuits but why are integrated circuits required if we already
        have discrete circuits?

        <br><br>

        So here is a difference table between discrete and integrated circuits - <br><br>
        <table style="height: 347px; width: 700px;" border="2">
            <tbody>
                <tr style="height: 23px;">
                    <td style="width: 252px; background-color: black; color: white; height: 23px;">Discrete Circuits
                    </td>
                    <td style="width: 255px; background-color: black; color: white; height: 23px;">Integrated Circuits
                    </td>
                </tr>
                <tr style="height: 97px;">
                    <td style="width: 252px; height: 97px;">&nbsp;<br />Takes more space for a number of components.
                    </td>
                    <td style="width: 255px; height: 97px;">&nbsp;<br />Takes less space and can fit a number of
                        components inside a single pack.</td>
                </tr>
                <tr style="height: 77px;">
                    <td style="width: 252px; height: 77px;">&nbsp;<br />Can handle high power input and output.</td>
                    <td style="width: 255px; height: 77px;">&nbsp;<br />High power input and output might cause damage.
                    </td>
                </tr>
                <tr style="height: 117px;">
                    <td style="width: 252px; height: 117px;">Can change components of discrete circuits which in turn
                        helps in repairing and changing parameters of the circuit.</td>
                    <td style="width: 255px; height: 117px;">Once fabricated, components of ICs cannot be changed or
                        repaired. Whole IC has to be replaced.&nbsp;</td>
                </tr>
                <tr style="height: 157px;">
                    <td style="width: 252px; height: 157px;">Assembling and wiring of separate components will take time
                        and it usually occupies space that makes the circuitry bulky. If the circuit is complex, it only
                        introduces more mess.</td>
                    <td style="width: 255px; height: 157px;">Complex circuits are fabricated within a single chip.
                        Therefore, the designing a complex circuit will be simplified into a single chip which is done
                        in the case of ICs.&nbsp;</td>
                </tr>
                <tr style="height: 177px;">
                    <td style="width: 252px; height: 177px;">Uses point contacts or soldering to make connections with
                        wires and components which is unreliable and bad soldering can also introduce external
                        resistance to circuits.</td>
                    <td style="width: 255px; height: 177px;">Circuits are incorporated on a single chip making it with
                        fewer connections. Thus, the soldering process will be done only on the significant terminals of
                        ICs to introduce it to the circuit thus increasing reliability.&nbsp;</td>
                </tr>
                <tr style="height: 137px;">
                    <td style="width: 252px; height: 137px;">Power consumption is increased by factors such as
                        resistance of wires, resistance due to bad solder, the introduction of parasitic capacitance,
                        etc.</td>
                    <td style="width: 255px; height: 137px;">Low power is consumed due to the use of silicon wafers
                        which decreases the factor of resistance and parasitic capacitances.</td>
                </tr>
                <tr style="height: 137px;">
                    <td style="width: 252px; height: 137px;">Example- <br>
                        <img src="../img/images/icmcuIntro/image10.png" class="img-responsive floating-image center"
                            width="350px">
                        <br>A counter that counts up to 10 where 1 is represented by LED on and 0 is represented by LED
                        off and the binary state has to be considered from right to left, rightmost being 20.
                    </td>
                    <td style="width: 255px; height: 137px;">Example- <br>
                        <img src="../img/images/icmcuIntro/image7.jpg" class="img-responsive floating-image center"
                            width="350px">
                        <br>An IC 74LS90 is used for counters.

                    </td>
                </tr>
            </tbody>
        </table>
        <br><br><br>
        <div class="blogPageHeading">
            Importance of ICs in Robotics
        </div>
        We now know what ICs are but why are ICs important in robotics? Because ICs interact with electric current to
        achieve different tasks despite their small size that is all we need to handle electronic data in robotics and
        other electronic devices. Some ICs are used for basic decision-making in robots and some are used in circuits
        for voltage regulation, amplification, etc. Some of them are used for calculating time (which we’ll study in
        detail in 555 timer IC later) while some are used for handling heavy processing tasks for robots.
        <br> ICs not only revolutionized the field of robotics but also innovated electronics to great extent.


        <br><br><br>

        <ul class="pager">
            <li class="next"><a href="./more-ic.php">Next</a></li>
        </ul>



    </div>
</div>

<?php include('footer-1.php') ?>

</html>
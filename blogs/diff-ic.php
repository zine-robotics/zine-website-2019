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

<div class="headAlgoImage">
</div>
<div class="heading">
    Different IC's and their usage.
</div>

<div class="page">
    <div class="blog-page">
        <br><br>

        Now that we know how fabulous ICs are, let’s dive into their usage in robotics.
<br><br>
        <div class="blogPageHeading">Motor Driver ICs</div>

        The microcontroller used in our robots can't control the motors directly because most of the microcontrollers
        operate on low voltages and require small amounts of current to operate while the motors require relatively
        higher voltages and current. Thus, the current cannot be supplied to the motors from the microcontroller. This
        is the primary need for motor driver IC. Motor drivers act as an interface between the motors and the
        Microcontroller.
<br>
<img src="../img/images/diff-IC/image10.png" class="img-responsive floating-image center">
<br><br>

        There are different types of motor driver modules used:
<br><br>
        <div class="blogPageSubHeading">L293D Motor Driver:</div>
        <img src="../img/images/diff-IC/image8.png" class="img-responsive floating-image right">
<br>

        L293D is a typical Motor driver or Motor Driver IC which allows DC motors to drive in either direction. L293D is
        a 16-pin IC that can control a set of two DC motors simultaneously. The direction can be controlled too. It
        means that you can control two DC motors with a single L293D IC!
<br><br><br><br>
        <div class="blogPageSubHeading">L293D IC Pinout Diagram</div>

        <b>Power Supply: </b>
<br>
<img src="../img/images/diff-IC/image5.png" class="img-responsive floating-image right">

        The L293D motor driver IC actually has two power input pins ‘ Vcc1’ and ‘Vcc2’.
        Vcc1 is used for driving the internal logic circuitry of the motor driver IC, which should be 5V.
        ( It must not be greater than 5 V )
        From Vcc2 pin the H-Bridge gets its power for driving the motors which can be
        4.5V to 36V (for L293D IC). And they both sink to a common ground named GND.
<br><br>
        <b>Output Terminals:</b>
        <br>
        The L293D motor driver’s output channels for the motor A and B are brought out to pins OUTPUT1, OUTPUT2 and
        OUTPUT3, OUTPUT4 respectively. <br>
        You can connect two DC motors having voltages between 4.5 to 36V to these terminals. It can supply a maximum
        current of 1.2A. <br>
        <b>Direction Control Pins:</b>
        <br>
        Using the direction control pins, we can control whether the motor spins forward or backward. These pins
        actually control the switches of the H-Bridge circuit inside L293D IC. It contains two H-bridge circuits
        controlling direction of one motor each. <br>
        How does the H-bridge control the direction of the motor? Try to recall. You already know this answer from the
        concepts shared in previous blogs. <br><br>
        If you can recall, Kudos! If not, refer to <a href="http://zine.co.in/Switch-Relays.php">this</a> link.
<br><br>
        The spinning direction of a motor can be controlled by applying either a logic HIGH(5 Volts relative to ground)
        or logic LOW(Ground) to input pins. <br>
        The IC has two direction control pins for each channel. The INPUT1, INPUT2 pins control the spinning direction
        of the motor A while INPUT3, INPUT4 control motor B. <br><br>
<br><br>
<table style="height: 213px; width: 731px;">
<tbody>
<tr>
<td style="width: 146px; background-color: black; color: white;">&nbsp;<strong>INPUT1</strong></td>
<td style="width: 146px; background-color: black; color: white;">&nbsp;<strong>INPUT2</strong></td>
<td style="width: 146px; background-color: black; color: white;">&nbsp;<strong>OUTPUT1</strong></td>
<td style="width: 146px; background-color: black; color: white;">&nbsp;<strong>OUTPUT2</strong></td>
<td style="width: 146px; background-color: black; color: white;">&nbsp;<strong>Spin Direction</strong></td>
</tr>
<tr>
<td style="width: 146px;">&nbsp;LOW</td>
<td style="width: 146px;">LOW</td>
<td style="width: 146px;">LOW</td>
<td style="width: 146px;">LOW</td>
<td style="width: 146px;">Motor OFF</td>
</tr>
<tr>
<td style="width: 146px;">HIGH</td>
<td style="width: 146px;">&nbsp;LOW</td>
<td style="width: 146px;">&nbsp;HIGH</td>
<td style="width: 146px;">&nbsp;LOW</td>
<td style="width: 146px;">&nbsp;Clockwise(Forward)</td>
</tr>
<tr>
<td style="width: 146px;">LOW&nbsp;</td>
<td style="width: 146px;">HIGH&nbsp;</td>
<td style="width: 146px;">LOW&nbsp;</td>
<td style="width: 146px;">&nbsp;HIGH</td>
<td style="width: 146px;">&nbsp;Anticlockwise(Backward)</td>
</tr>
<tr>
<td style="width: 146px;">HIGH&nbsp;</td>
<td style="width: 146px;">HIGH&nbsp;</td>
<td style="width: 146px;">LOW&nbsp;</td>
<td style="width: 146px;">&nbsp;LOW</td>
<td style="width: 146px;">&nbsp;Motor OFF</td>
</tr>
</tbody>
</table>
<br><br><br>
        <b>Speed Control Pins:</b> <br>
        ENABLE 1, 2 and ENABLE 3, 4 are used to turn ON, OFF and control speed of motor A and motor B respectively. <br> <br>
        The ENABLE 1, 2 pin controls the H-bridge of left side (one with INPUT1 and INPUT2 pins). When ENABLE 1,2 pin is
        high i.e it has 5V supply then Ieft side input and output pins are enabled and H-bridge is turned ON. When
        ENABLE 1,2 is low then H-bridge is turned off, making motors stop in all conditions. However, when PWM power
        supply is provided to these pins we can actually control the speed of motors. We can also control speed by
        giving pwm power supply to INPUT pins. We will study about PWM (Pulse Width Modulation) in detail in further
        blogs.
<br><br>
        <div class="blogPageSubHeading">L298N Motor driver module</div><br>
        <img src="../img/images/diff-IC/image9.png" class="img-responsive floating-image left" width="200px">
        L298N Motor Driver Module contains a 78M05 5V Regulator along with the L298 IC. It works the same as L293D but
        is more powerful. It can take power supply upto 46 volts. It can supply a maximum current of 2A.
<br><br><br><br><br><br><br>
        <div class="blogPageHeading">Op-amp:</div>
<br>
        An Op-Amp, short for an Operational Amplifier, is the workhorse for all analog electronics. It’s a type of an
        amplifier, and an amplifier is defined as a circuit that produces output signal greater than its input signal.
        Generally, the ratio of value of output signal and input signal is called gain. More precisely it is the ratio
        of the output signal amplitude to the input signal amplitude, and is given the symbol "A".
<br>
<img src="../img/images/diff-IC/image23.jpg" class="img-responsive floating-image center">

        Internally, it has a complex circuit (a bunch of resistors, some capacitors, etc), but for now, let’s just
        concentrate on its properties.
<br><br>
        Like other amplifiers, it also has some “gain”. That means if we put an X signal here, then I will get a signal
        AX, where, A is the gain factor. <br>
        <img src="../img/images/diff-IC/image19.png" class="img-responsive floating-image right" width="350px">

        <center>(input) x --> [A] --> Ax (output)</center> <br>
        The gain A is generally high, i.e, in the range of 10<sup>5</sup> to 10<sup>6</sup>. <br>
        The op-amp is represented by the symbol shown here.
<br><br>

        The two input pins, V+ and V-, are called non-inverting and inverting pins respectively. And Vs+ and Vs- are
        supply pins.
<br><br>
        Now the output voltage, Vout is proportional to the voltage between the two input pins, i.e,<br>
        <center>V0 = A * ( V+ - V-- )</center>
        <br><br>

        Vout or V0 can go both positive or negative w.r.t. the ground. <br>
        <img src="../img/images/diff-IC/image21.png" class="img-responsive floating-image left" width="400px">

        So this output is proportional to the difference of input voltages. The results are plotted on the graph given
        left. Notice the graph after Vsat? This Vsat ,the saturation voltage, is less than the highest possible gain
        voltage of an op-amp and is the maximum possible voltage, reason being, the gain voltage is very high and it is
        impractical for op-amp to produce such voltage. Thus the limit is capped to the supply voltage and Vout = Vsat. <br>
        The slope in this graph is the gain A.
<br><br>
        Coming back to the question of the meaning of inverting and non-inverting voltages, let’s take a look at the
        equations given above the diagram.
<br><br>
        As the Vin varies, let’s say V+ increases, the difference Vin also increases, thus increasing the gain.
<br>        <img src="../img/images/diff-IC/image14.png" class="img-responsive floating-image center">

        As the V- increases, the difference Vin decreases, thereby decreasing the overall gain.
<br>
<img src="../img/images/diff-IC/image17.png" class="img-responsive floating-image center">

        Thus, V- is inversely proportional to the overall gain. Therefore it is called an inverting voltage. On the
        other hand, on increasing the V+, the gain also increases. Hence, it is called the non-inverting voltage. If
        this explanation is bit clumsy for you, look it another way.
<br><br>
<img src="../img/images/diff-IC/image24.png" class="img-responsive floating-image left" width="350px">

        Let’s set the V- voltage to ground (zero) and then calculate the Vout using the same equation,
        Vout = A*(V1) .Here the voltage Vout is directly proportional to the Voltage V1. Hence the voltage V1 is called
        the non-inverting voltage. <br>
        For the V- , the equation for Vin would be: <br>
        Vin = A*(0-V2)
<br>
<br>
<img src="../img/images/diff-IC/image20.png" class="img-responsive floating-image right" width="350px">

        Vin = -A*(V2) <br>
        The Vin and V- are in opposite phase, i.e, if V- increases, the Vin decreases. Hence it is called the inverting
        phase. <br>
        Now beware, when schematics of the op-amp are drawn on paper, the plus and minus could be reversed, and
        accordingly, you have to make sure you are proceeding with the correct signs!
<br><br><br><br><br>
<div class="blogPageSubHeading">Op-amp as a comparator:</div>
       <br>

        So what do you understand by comparator? A tool to compare things, right? Here we compare two voltages. The next
        question that will pop-up in your mind is HOW? Well, when you have learned how an op-amp works as an amplifier
        then the answer to this question is not so difficult. <br>
        Let’s assume we have two voltages V1 and V2 to compare. Let’s give V1 as input to V+ and V2 as input to V--.
        There are two types of comparators, depending on the reference point we choose to compare i.e. whether we take
        V1 as a reference and compare V2 respect to it or vice-versa. <br> <br>
        <b>Inverting Comparator:</b> If the input voltage is applied to the inverting terminal and the reference voltage to the
        non-inverting terminal.
        <img src="../img/images/diff-IC/image15.png" class="img-responsive floating-image center" width="350px">
<br><br>

        [Here V+= Vref and V-- = Vi and Vp equal supply voltage] <br><br>
        The operation of inverting comparators is quite simple. The output which is equal to (A* ( Vin - Vref )) equals
        to either +Vsat or -Vsat depending on the values of input voltage Vi and reference voltage Vref.
<br><br>
<img src="../img/images/diff-IC/image13-1.png" class="img-responsive floating-image right" width="450px">
<br><br><br><br>
        Vin > Vref : Vout = A(Vin - Vref) = +Vsat
        Vin < Vref : Vout=A(Vin - Vref)=-Vsat 
        <br><br><br><br>
        Why Vout=+Vsat when input voltage is greater than reference voltage. <br>
            Answer to this question lies above in the explanation of the graph of op-amp. <br><br> The amplifying factor is so
            large( 10<sup>5</sup> to 10<sup>6</sup>) that even if there is very little difference between input and reference voltages the
            output voltage equals saturation voltage. For output voltage to be 10V difference of voltages should be
            maximum 0.0001V. <br><br><br>
            <b>Non-Inverting Comparator:</b> If the reference voltage is applied to the inverting terminal and
            the input voltage to the non-inverting terminal. Rest is very much similar to an inverting comparator, try
            to figure it out with the help of the given diagram. <br>
            <img src="../img/images/diff-IC/image13-2.png" class="img-responsive floating-image center" width="450px">

             You all must have observed that analog signals are
            converted into digital form when we learnt comparators. Acting as analog to digital signal converter is
            another important application of op-amp. <br><br> Still wondering what you can do with a comparator? See this cool
            project! A LM358 Op-Amp IC is used as a comparator for making <a href="https://www.electronicshub.org/burglar-alarm-system/">this</a> project.
            <br><br>
            To understand better have a look
            <a href="https://www.youtube.com/watch?v=k9zQjEaKtfk">here</a>. 
            <br><br><br>
            <div class="blogPageHeading">555 Timer IC</div> <br><br>
            <img src="../img/images/diff-IC/image11.png" class="img-responsive floating-image left">

            It is used in a variety of one-shot or delay timers, pulse generation, LED and lamp
            flashers, alarms and tone generation, logic clocks, frequency division, power supplies, and converters, etc,
            in fact, any circuit that requires some form of time control as the list is endless. The internal block
            diagram and working of 555 Timer IC are given below. <br>
            <img src="../img/images/diff-IC/image22.png" class="img-responsive floating-image center">
<br><br>
<img src="../img/images/diff-IC/image12.png" class="img-responsive floating-image center">
<br><br>
             As you might have learned through your secondary
            school, these three resistors are used to create reference voltages, creating 1/3 Vcc and 2/3 Vcc of supply
            voltage Vcc. <br><br>
            Next-up is a comparator, it is used to “compare voltage”, for example, for its two input
            terminals, inverting and non-inverting, if the input voltage is higher for the positive terminal, the
            comparator will output 1, otherwise, it will output 0. The first comparator negative input terminal is
            connected to the 2/3 reference voltage at the voltage divider and the external “control” pin, while the
            positive input terminal to the external “Threshold” pin. <br><br>
             On the other hand, the second comparator negative
            input terminal is connected to the “Trigger” pin, while the positive input terminal to the 1/3 reference
            voltage at the voltage divider. <br><br>
            So using the three pins, Trigger, Threshold, and Control, we can control the
            output of the two comparators which are then fed to the R and S inputs of the flip-flop. The flip flop can
            also be reset anytime using the reset pin, additionally resetting the whole 555 Timer IC. <br><br>
            The Q-bar output
            of the flip-flip goes to the output stage or the output drivers which can either source or sink a current of
            200mA to the load. The output of the flip-flip is also connected to a transistor that connects the
            “Discharge” pin to the ground. <br><br>
             There are primarily three modes of operations named Astable, Monostable, and
            Bistable. Each mode represents a different type of circuit that has a particular output. Learn more about it
            <a href="https://youtu.be/i0SNb__dkYI">here</a>.  <br><br>

            <div class="blogPageHeading">Voltage Regulator</div> <br>
            <img src="../img/images/diff-IC/image4.gif" class="img-responsive floating-image right" width="350px">

             For a start, different electronics require different voltages. A microcontroller may
            require 5V, your motors perhaps 12V Batteries are never at a constant voltage. A 6V battery will be at
            around 7V when fully charged, and can drop to 3-4V when drained. The image shows how a typical battery
            voltage changes over time. <br><br>
            See the drained battery zone, what if the sensor you are using is sensitive to 5V
            and then the battery drops!! Thus we need a Voltage Regulator to rectify this issue. <br><br>
         While using some
            electronic components, we might need to increase or decrease the voltage to fulfil our purpose. As the name
            suggests, the Voltage Regulator also adjusts the incoming voltage to the desired and acceptable limits. <br><br>
            There are two types of VRs: linear and switching. <br><br>

            <b>Linear Regulators:</b>  It works by automatically adjusting
            the resistance via a feedback loop(“Feedback” is the process by which a fraction of the output signal,
            either a voltage or a current, is used as an input, in this circuit, <a href="https://www.allaboutcircuits.com/technical-articles/negative-feedback-part-1-general-structure-and-essential-concepts/">negative feedback</a> is used), accounting
            for changes in both output current and input, all while keeping the output voltage constant. <br>
             The 78xx series
            voltage regulators are the most popular linear voltage regulators which produce positive fixed DC voltages.
            For negative voltages we have 79xx series. “xx” corresponds to a two-digit number and represents the amount
            (magnitude) of voltage that voltage regulator IC produces. <br>
            <strong>Eg: LM7805 produces +5V and LM7812 produces +12V.</strong> <br>
            <img src="../img/images/diff-IC/image18.png" class="img-responsive floating-image center">
<br><br>
            1. Input voltage : (5V-18V) <br> 2. Ground : (0V) <br> 3. Regulated output : 5V (4.8V-5.2V) <br><br>
             All other IC’s of this
            series have similar structure. <br>
            <img src="../img/images/diff-IC/image7.jpg" class="img-responsive floating-image center">
<br>
            <center>Four 7800 series linear voltage regulators, each with a different voltage
            output: 5V, 9V, 12V, 15V</center> <br><br>
            78xx series ICs have built-in protection against a circuit drawing too much power.
            They have protection against overheating and short-circuits, making them quite robust in most applications. <br><br>

            <b>Switching Regulators:</b>  These regulators such as buck (step-down), Boost (step-up), and buck-boost
            (step-up/step-down), require a few more components as well as increased complexity of how various components
            will affect the output. Switching regulators are far more efficient in terms of power conversion where
            efficiency plays a big role, but linear regulators work very well as voltage regulators in low-voltage
            applications. <br><br>
            There are three types of switching VRs: <br><br>
             Buck(step-down): A Buck Regulator is used to step down
            the voltage at the output, we can even use the voltage divider circuit to reduce the output voltage but the
            efficiency of the voltage divider circuit is low because resistors dissipate energy as heat. 
            <br>
            <img src="../img/images/diff-IC/image16.jpg" class="img-responsive floating-image center" width="250px">
<br><br>
            Boost
            (step-up): Increases the voltage, while decreasing the current. Buck-Boost (step-up/down): Lowers or boosts
            the input voltage according to the requirement. 
            <br>
            <img src="../img/images/diff-IC/image26.jpg" class="img-responsive floating-image center" width="250px">
<br><br>
Buck-Boost (step-up/down): Lowers or boosts the input voltage according to the requirement.
<br>
<img src="../img/images/diff-IC/image25.jpg" class="img-responsive floating-image center" width="250px">

            <br><br><br><br>

            <ul class="pager">
                <li class="previous"><a href="./more-ic.php">Previous</a></li>

                <li class="next"><a href="./microcontroller.php">Next</a></li>
            </ul>


    </div>
</div>

<?php include('footer-1.php') ?>
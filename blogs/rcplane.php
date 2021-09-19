<?php include('header.php') ?>


<div class="headAlgoImage">
</div>
<div class="heading">
    RC Plane DIY
</div>



<div class="page">
    <div class="blog-page"><br><br>
        We have studied the physics and those lengthy theories, we have seen how the plane is controlled, <i>but how
            about actually building one of those</i>?
        <br> In this section we will build a Radio Controlled plane.
        <br><br>
        Components Required: <br>
        <b>Frame:</b>
        <br><br>
        Arguably the most important part of the entire RC plane has to be the frame. When it comes to making an RC
        aircraft, choosing the right frame is the first hurdle you need to cross. Our plane will encounter many stresses
        during its flight, also flying an RC plane takes some time getting used to, so we need to choose the best
        material for the flight. What are the qualities we can look for? Light-weight, not too pricey, should have good
        strength. You can use carbon fibre, it is really lightweight and five times stronger than steel! The drawback?
        It's pricey. So sometimes the fuselage/ only wings are made of carbon fibre.
        <br> Another material which is more popular, is polystyrene foam, comes under the name of depron, has good
        rigidity and flexibility. And it is affordable too!
        <br> Balsa Wood is also used, it is relatively inexpensive, easy to carve.

        <br> <br>
        <img src="../img/images/aero/image33.png" class="img-responsive floating-image center">
        <br>
        <b>Tail:</b> <br><br>
        Tail is an important part of a RC plane, reason being, they are a crucial factor for stability and
        maneuverability. It consists of stabilizers, rudder and elevators.
        <br><br>
        <b>Motor:</b><br><br>
        There are two types of motors: Brushed and brushless motors. [Refer to BME]. We generally use brushless motors
        DC motors(BLDC). A DC motor converts the electric current into Torque and the voltage into rotations per
        minute(RPM). This motor is used to generate thrust for the aircraft. Learn more <a
            href="https://rcplanes.online/guide5.htm#:~:text=There%20are%20two%20main%20different,The%20brushed%20and%20the%20brushless.">here</a>.
        <br><br>
        <b>ESC:</b><br><br>
        ESCs or electronic speed controllers, control the power going through motors, convert DC to AC current for
        brushless motors. Also, Receivers require 5V, so ESCs convert voltage provided by batteries. While choosing an
        ESC, we should consider its amperage rating, preferably more than that required by motors. Also remember that
        ESC can get very warm, so it is always advisable to use an ESC with a rating more than that required by the
        motors.
        <img src="../img/images/aero/image10.png" class="img-responsive floating-image center">
        <br><br>

        <b>Assignment:</b> <br><br>
        Tell us the connection of each wire of esc shown in the diagram with other electronic components of the RC
        plane.
        <br><br>
        <b>Servo:</b><br><br>
        Servo motors are used for adjusting control surfaces while in motion for maneuvering. They are used because of
        their ability to stop precisely and hold the position.
        <img src="../img/images/aero/image45.png" class="img-responsive floating-image center">
        <br><br>

        <b>Assignment:</b><br><br>
        Find out how servo motors mechanically control the control surfaces(rudder, elevator, ailerons).
        Also tell what is the weight of a normal servo motor?
        <br><br>
        <b>Battery:</b> <br><br>
        Generally LiPo batteries are used for RC systems. Each cell of LiPo battery has a nominal voltage of 3.7V and
        maximum voltage of 4.2V.
        <br><br>
        <b>Transmitter-Receiver:</b><br><br>
        Radio Transmitter is an electronic device that uses radio signals to transmit commands wirelessly via a set
        radio frequency over to the Radio Receiver, which is connected to our aircraft. In other words, it’s the device
        that translates pilot’s commands to be received by the receiver.
        Transmitter (with the pilot) and the Receiver (on the airborne vehicle) work on Electromagnetic signals. A
        typical RC Transmitter has about 4 to 6 channels with some being proportional, (i.e. controlled surfaces move
        proportion the movements of the control sticks).
        <br><br>


        So what does a channel mean? Radio Transmitter transmits commands via channels. Each channel is an individual
        action being sent to the aircraft.
        <br><br>
        Throttle, Yaw, Pitch and Roll are the four main inputs required to control the plane. Each of them uses one
        channel, so there is a minimum of four channels required. Every switch, slider or knob on the transmitter uses
        one channel to send the information through to the receiver.
        <br> Additional channels may function in an "on-off" manner for some additional components.
        <img src="../img/images/aero/image32.jpg" class="img-responsive floating-image center">

        <br><br>
        A receiver on the other hand facilitates and communicates the transmitter instructions of the pilot
        <img src="../img/images/aero/image7.jpg" class="img-responsive floating-image left">

        Receiver passes on the signal to the flight controller to be further processed. <br>
        A Receiver must be compatible with the Radio Transmitter which in most cases means that the same brand of Rx and
        Tx need to be purchased in order to establish a communication. There are however radio receivers that may work
        with the same protocol but are not from the same brand.
        <br><br> Frequencies (oscillation rate at which these radios work) must also be the same on both Rx and Tx. For
        instance; a 2.4GHz Transmitter can only work with a 2.4GHz Radio Receiver.


        <b><i>How do these components fit together?</i></b> <br>
        <a href="https://www.youtube.com/watch?v=KJWg5HJBGGc">Here</a> is an excellent tutorial.
        <br><br>


        <div class="blogPageSubHeading">Propulsion System </div> <br>
        A propulsion system is a machine that produces thrust to push an object forward.
        <br><br>

        <div class="blogPageSubHeading"> Types of propulsion systems:-</div>
        <br><br>
        <b>1.Tractor</b> : Such propulsion systems have propellers in front
        <img src="../img/images/aero/image42.png" class="img-responsive floating-image center">
        <center> It has propeller at front</center>
        <br><br>
        <b>2. Pusher</b> : Such propulsion systems have propellers at their back.
        <img src="../img/images/aero/image24.png" class="img-responsive floating-image center">

        <center>Propeller fans are at back of plane</center>


        <br><br>
        <ul class="pager">
            <li class="previous"><a href="./memory.php">Previous</a></li>

            <li class="next"><a href="./pseudo.php">Next</a></li>
        </ul>



    </div>
</div>

<?php include('footer-1.php') ?>

</html>
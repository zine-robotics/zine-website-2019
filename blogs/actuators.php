<?php include('header.php') ?>


<div class="headAlgoImage">
</div>
<div class="heading">
  Actuators
</div>

<div class="page">
  <div class="blog-page">
    <br><br>

    <div class="blogPageHeading">Actuators</div>
    <img src="../img/images/BME-blog/image2.png" class="img-responsive floating-image center">
    <br /><br />
    What is an actuator?<br />
    Actuators are used for moving the robot’s joints (such as picking up a block and placing it somewhere else). To be
    more specific, they require a control signal and a source of energy to provide a mechanical output. It is because of
    these actuators that robots can do work rather than just drive on the floor. A good analogy would be- Muscles are to
    humans as actuators are to robots.
    <br /><br />
    <strong>The Types of Actuators that are observed on a typical robot:</strong>
    <br /><br />

    <div class="blogPageSubHeading">Hydraulic:</div>
    <br /><br />
    Well does this picture remind you of Pascal’s Law, because if it does then you are going in the right direction.
    This is the basic principle of how hydraulic actuators work.
    It consists of a cylinder or fluid motor that uses hydraulic power. As liquids are nearly impossible to compress, a
    hydraulic actuator can exert a large force. The drawback of this approach is its limited acceleration.
    <br /><br />
    <img src="../img/images/BME-blog/image73.png" class="img-responsive floating-image center">
    <img src="../img/images/BME-blog/image66.png" class="img-responsive floating-image center">
    <br />
    Excavators have hydraulic actuators for the movement of its arm.
    <br /><br />
    <div class="blogPageSubHeading">Pneumatic:</div>
    <br />
    Pneumatic actuators, unlike hydraulic actuators, don’t need any hydraulic fluid (such as oil). They have air as the
    working fluid. Therefore, they need a compressed air network system for its working. These enable considerable
    forces to be produced from relatively small pressure changes. It can quickly respond as the power source does not
    need to be stored in reserve for operation. Moreover, pneumatic actuators are cheaper.
    <br /><br />
    <img src="../img/images/BME-blog/image19.png" class="img-responsive floating-image center">
    <br /><br />
    Time to ponder. What will you choose for making your robot: A hydraulic actuator or a pneumatic one?<br />
    Since leaks are of less concern with pneumatics, and they require low maintenance this makes them more suitable for
    robotics.<br />
    <br />
    <div class="blogPageSubHeading">Electrical:</div>
    <br /><br />
    An electric actuator is a mechanical device used to convert electricity into kinetic energy. You must have studied
    how motors work, so we won't go into the detail of how it works.
    <br /><br />• Alternating Current (AC) Motors- Synchronous, Asynchronous (since these are bulky and are of
    industrial use, we won’t discuss them here)
    <br />• Direct-Current (DC) Motors- Brushed, Brushless
    <br />• Servo Motors
    <br />• Stepper Motors
    <br /><br />
    <strong>1. DC MOTORS:</strong>
    <br /><br />
    DC motors are used often because of the ease of controlling speed and direction. They quickly respond to changes in
    the controlling signal.
    <br /><br />
    <strong>Brushed: </strong>
    <br />
    They are simple to construct, require no controllers and are cost-efficient motors. These motors generally have low
    torque and high speed. They, however, offer high resistance (due to the presence of brushes), causing a lot of heat
    dissipation and jerky motion.
    Uses: In hand-drills, small water-pumps.
    <br />
    <img src="../img/images/BME-blog/image6.png" class="img-responsive floating-image center">
    <img src="../img/images/BME-blog/image18.png" class="img-responsive floating-image center">
    <strong>Brushless (BLDC): </strong>
    <img src="../img/images/BME-blog/image15.jpg" class="img-responsive floating-image center">
    <img src="../img/images/BME-blog/image24.png" class="img-responsive floating-image center">
    <br /><br />
    Brushless DC electric motors also known as electronically commutated motors (ECMs, EC motors). <br />
    <br />Primary efficiency is a most important feature for BLDC motors. Because the rotor is the sole bearer of the
    magnets and it doesn’t require any power. i.e. no connections, no commutator and no brushes.
    <br /><br />
    <strong>Construction of Brushless DC motor</strong>
    <br /><br />In this motor, the permanent magnets attach to the rotor. The current-carrying conductors or armature
    windings are located on the stator. They use electrical commutation to convert electrical energy into mechanical
    energy.
    <img src="../img/images/BME-blog/image70.png" class="img-responsive floating-image center">
    <br />
    (Diagram for Inrunner Motor)
    <br /><br />
    Brushless motors do not have any current carrying commutators.<br />
    The layout of a DC brushless motor can vary depending on whether it is in “Out runner” style or “Inrunner”
    style.<br />
    <br /><strong>Outrunner</strong> – The field magnet is a drum rotor which rotates around the stator. This style is
    preferred for applications that require high torque and where high rpm isn’t a requirement.
    <br /><strong>Inrunner</strong> – The stator is a fixed drum in which the field magnet rotates. This motor is known
    for producing less torque than the out runner style, but is capable of spinning at very high rpm.
    <br /><img src="../img/images/BME-blog/image54.png" class="img-responsive floating-image center">
    <center>Inrunner and Outrunner</center>
    <br /><img src="../img/images/BME-blog/image56.gif" class="img-responsive floating-image center">
    A trapezoidal AC waveform <strong>[Assignment*]</strong> is used to electro-magnetise the stator coils.<br />
    When one pair of stator coils is at high voltage, the other two are at low voltage. This forms a moving
    electromagnet. The rotor rotates, when attracted to this moving electromagnet. These motors are less jerky and more
    power-efficient. They are more efficient at high speeds.
    <br /><br />
    Uses: In multirotors, CD Drives, & Electric Vehicles
    <br /><br />
    <strong>ASSIGNMENT*: Question yourself, if BLDC motors are DC motors, why do they run on AC waveform? And if they do
      run on AC current, how do we decide the frequency of the waveform?</strong>
    <br />
    [Hint: ESC or Electronic Speed Controller are Inverters that are used with BLDCs to convert the DC Waveform into a
    Trapezoidal AC waveform.]
    <br /><br />
    <strong>2. SERVO MOTORS:</strong><br /><br />
    <img src="../img/images/BME-blog/image68.png" class="img-responsive floating-image center">
    Servo motors are used in closed-loop systems with a digital controller. The controller sends velocity commands to a
    driver amplifier, which in turn feeds the servo motor. Some form of feedback device, such as a resolver or encoder,
    provides information on the servo motor’s position and speed. These motors thus are capable of actuating motion with
    precision and have a holding torque which makes them useful in cases like aileron control in RC planes.
    <br />
    <img src="../img/images/BME-blog/image52.png" class="img-responsive floating-image center">
    <br />
    <img src="../img/images/BME-blog/image45.jpg" class="img-responsive floating-image right"
      style="height:300px; width:300px;">
    This is how it looks from the inside. Did I read it right? A potentiometer in a motor? Yup, that’s right, the
    potentiometer is connected to the final output shaft of the servo motor, this produces a variable voltage across the
    potentiometer which changes relative to the angle of the shaft. This reading is then compared (in the control
    circuit) to the angle input by the user. When the difference comes to zero, the motor stops rotation indicating it
    has reached the position it was supposed to. Since the potentiometer has a limited range, the standard (not modified
    ones) have a range of 180 degrees only.
    <br />To find out more about Servo Motors, watch this video.
    <br />Uses: To control ‘Control Surfaces’ of an RC aircraft
    <br /><br />
    <strong>3. STEPPER MOTORS:</strong>
    <br /><br />
    Stepper motors can operate with or without feedback, with the rotation of the motor broken up into small angular
    steps. This helps to control the rotation with steps precisely, but unlike servo motors this allows complete
    rotational freedom for the stator. It is controlled by pulsed command signals and can stop precisely at a commanded
    point without the need for brakes or clutch assemblies. When power is
    removed, a permanent-magnet stepper motor generally remains in its last position.
    <br />
    <img src="../img/images/BME-blog/image35.png" class="img-responsive floating-image center">
    <img src="../img/images/BME-blog/image5.png" class="img-responsive floating-image center">
    <br />
    Multiple stepper motors can be maintained in synchronization by driving them from a common source.
    <br /><br />
    Uses: To Drive Coordinate Axes in 3d Printers
    <br /><br />

    <strong>Advanced Actuators</strong>
    <br /><br />
    Actuators that can be actuated by applying thermal or magnetic energy to a solid-state material. Thermal actuators
    use shape-memory materials such as <strong>shape-memory alloy (SMAs).</strong>
    <br />Here is how the training is done for the Thermal Actuators:

    <br />1. Fix the SMA into the desired shape (using clamps)
    <br />2. Heat it up to 400°C for 8-10 mins
    <br />3. Drench it in cold water
    <br />4. Take out the SMA from the clamps
    <br />5. Test it in hot water
    <br />6. Redo steps 1 to 4 in case the SMA doesn’t retain its shape
    <br />Similarly, magnetic actuators use <strong>Magnetic shape-memory alloys (MSMAs)</strong>. Objects made up of
    these materials are trained (by applying strong magnetic fields for the MSMAs) to take up a certain shape when
    introduced to some specific conditions.




    <strong>Mechanical:</strong>


    <br><br>
    A mechanical actuator functions to execute movement by converting one kind of motion into another kind. The
    operation of mechanical actuators is based on combinations of structural components, such as gears and rails, or
    pulleys and chains. More on this later in the blog.

<br><br><br><br>

<ul class="pager">
        <li class="previous"><a href="./bmeIntro.php">Previous</a></li>

            <li class="next"><a href="./locomotion.php">Next</a></li>
        </ul>


  </div>
</div>

<?php include('footer-1.php') ?>
<?php include('header.php') ?>


<div class="headImage">
</div>
<div class="heading">
    Locomotion and Drive Systems
</div>
<div class="page">
    <div class="blog-page">
        <div class="blogPageHeading">WHEELS</div><br><br><br><br><br>
        <img src="../img/images/BME-blog/image25.gif" class="img-responsive floating-image center">

        Ever since wheels got invented, various facets of development have rolled in *Pun intended*. Wheels are your
        best bet for robots as they are easy to design, implement, and practical for robots that require speed. They
        also do not suffer from static or dynamic stability as the center of gravity of the robot does not change when
        they are in motion or just standing still and do not require complex models, designs, and algorithms (as long as
        the terrain on which the robot is supposed to traverse is even and has a decent friction coefficient). In this
        section, we shall study different types of wheels and their properties.<br><br>
        Simple/Fixed wheel :<br><br>
        <img src="../img/images/BME-blog/image4.jpg" class="img-responsive floating-image center">

        This wheel has one degree of freedom and can traverse Front or Reverse. The center of the wheel is fixed to the
        robot chassis. The angle between the robot chassis and wheel plane is constant.<br><br>
        Castor wheels:<br><br>
        <img src="../img/images/BME-blog/image74.jpg" class="img-responsive floating-image left">
        <br>
        <img src="../img/images/BME-blog/image30.jpg" class="img-responsive floating-image right" width="400px">
<br><br><br><br><br><br><br><br><br><br><br>
<br><br><br>
        An example of an assembled ball castor wheel on a robot chassis
        These castor wheels contain a spherical metal or nylon ball (or any hard spherical material these days)
        positioned within a holder. The ball has 360° of freedom and is normally used to balance a robot. The
        disadvantage is that these castors usually have high traction and require more power to push and support the
        driving wheels. They are also not suitable for uneven, dusty, and greasy surfaces.<br><br>
        Omni wheels:<br><br>
        <img src="../img/images/BME-blog/image69.jpg" class="img-responsive floating-image left" width="400px">
        <img src="../img/images/BME-blog/image65.jpg" class="img-responsive floating-image right" width="400px">
        <br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br>
        The best choice for a robot that requires multi-directional movement. These wheels are normal wheels with
        passive wheels (rollers) attached around the circumference of the center wheel. Omni wheels can move in any
        direction but exhibit high resistance when they move in any direction. The small wheels are attached in such a
        way that the axis of the small wheels is perpendicular to the axis of the bigger center wheel which makes the
        wheel rotate even parallel to its own axis. Omni wheels are sometimes known as Swedish wheels and can be used to
        both drive and steer a robot.
        <br><br>
        <strong>Assignment: Look carefully at the 2 pictures of Omni wheels above and figure out which one is better to
            use and why?</strong><br><br>

        <div class="blogPageSubHeading">Mecanum Wheel</div><br>
        Mecanum wheel is also a type of Omni wheel with the exception that rollers are attached at a 45° angle around
        the circumference of another bigger wheel.<br><br>
        <img src="../img/images/BME-blog/image39.jpg" class="img-responsive floating-image center">
<br><br><br>
        <div class="blogPageHeading">DRIVE SYSTEMS</div><br>
        Till now you must be knowing various types of wheels and about components that power the wheel to rotate. But
        <strong>have you ever wondered how these wheels synchronize themselves to get the desired movement of the
            robots? How do they take exact turns? Ever been curious to know the physics behind it? Well, let us check it
            out.</strong>
            <img src="../img/images/BME-blog/image16.gif" class="img-responsive floating-image center">

        We will learn about 5 most important drives for robots:-<br><br>
        <ol>
            <li>Differential drive<br></li>
            <li>Skid steering<br></li>
            <li>Synchronous drive<br></li>
            <li>Mecanum drive<br></li>
            <li>Holonomic drive<br></li>
            <br><br>
        </ol>
        To understand the drives, you need to enhance your power to visualize things. However, we have tried our best to
        make things simple below.<br><br>

        <div class="blogPageSubHeading">Differential drive</div><br>
        This is the most common control mechanism for robot builders, especially for beginners. Let us start with a
        question.<br><br>
        Think of walking with both your legs having different pace i.e. step length of both your legs are different.
        Will you be able to walk in a straight line?<br><br>
        The same concept applies here. <strong>The velocity difference between the two wheels drives the robot in any
            required path and direction.</strong> Hence the name “Differential” drive.<br><br>
            <img src="../img/images/BME-blog/image14.gif" class="img-responsive floating-image center">

        In this figure,<br>
        <ul class="pager">
            <li class="previous">N = no. of rotations per minute.</li><br>
            <li class="next">The angular velocity of the left wheel is greater due to which it covers more path as
                compared to the right wheel resulting in the curved motion of the center of mass of the system.
            <li>
                ICR(instantaneous center of rotation) - It is the point such that the velocity vectors are perpendicular
                to the line joining the point to the wheel.<br>
            </li>
            </li>
        </ul>
        <img src="../img/images/BME-blog/image37.png" class="img-responsive floating-image center">

        <br><br>
        Velocity(right) is greater than velocity(left). Here it is clearly shown that due to the difference in
        velocities if both the wheels the center of mass of the system moves in a circle having a center of
        rotation(ICR).<br><br>
        For differential drives, the ICR is the point about which our chassis rotates.<br><br>

        A caster wheel is present as the passive wheel in the front part of the chassis to support the whole
        system<br><br>
        Let us now look at the various cases in the case of differential drive.<br><br>
        <img src="../img/images/BME-blog/image41.jpg" class="img-responsive floating-image center">
<br>
        The direction of wheels(blue arrow) is directly proportional to the velocity vector and the red arrow vector
        shows the resultant direction of the bot.<br><br>
        <div class="blogPageSubHeading">Skid steering</div><br>
        <img src="../img/images/BME-blog/image62.gif" class="img-responsive floating-image center">
<br>
        Skid-steer is closely related to the differential drive system, replacing the caster wheel with extra drive
        wheels. If you have understood the differential drive concept, then you won’t face problems in understanding the
        skid drive. Unlike differential drive, the castor is replaced with two driving wheels.<br><br>
        <img src="../img/images/BME-blog/image29.png" class="img-responsive floating-image center">

        Some of the features of a skid steer are:-<br><br>
        <ul>
            <li>The wheels on the same side of the chassis have the same velocity.</li><br>
            <li>Some of the wheels skids during the course of motion, so given the name skid steering(the reason has
                been described below).</li><br>
            <li>Centre of rotation:- center of rotation at that certain instant is the point about which the whole robot
                rotates for two given velocities of the wheel. For a skid drive, it is dependent on the instant axis of
                rotation of the two systems(where one system consists of a pair of wheels on one side of the chassis).
            </li><br>
        </ul>
        <img src="../img/images/BME-blog/image44.png" class="img-responsive floating-image center">
<br>

        Now let us understand the reason behind the skid of wheels. As clearly seen in the figure, due to the same
        velocity of the wheels on the same side of the chassis,<i>the wheels do not have the same center of rotation as
            of the COM of the system</i>. This causes the wheels to skid and in turn causes wear and tear.<br><br>
        <div class="blogPageSubHeading">Synchronous drive</div><br>
        <img src="../img/images/BME-blog/image75.png" class="img-responsive floating-image center">

<br>
        The synchro drive system is a two motor, three/four wheeled drive.<br><br>
        The working of synchronous drive is explained below :-<br><br>
        <ul>
            <li>one motor rotates all wheels to produce motion.</li><br>
            <li>The other motor turns all wheels to change direction.</li><br>
            <li>The wheels are connected with a belt to provide the same motion</li><br>
        </ul>
        <br>
        <img src="../img/images/BME-blog/image33.png" class="img-responsive floating-image center">
        <center> Fig. 1 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Fig. 2
</center>
<br>
        Let us understand this with the help of an image.<br><br>
        You will see two types of arrows here(thick and thin). Thick arrow represents the direction caused by the motion
        motor(this arrow will point forward or backward only). This arrow shows the direction due to the motor which is
        responsible for changing direction of the robot(all the directions can be achieved for a range of 0 to 180
        degrees). Let us understand the motion of the drive in the image now.<br><br>
        The fig. 1 shows the wheels in the 0-degree position--in this position, the robot will move up(only the motion
        producing motor will work). Fig. 2 shows the wheels turned -45 degrees(both the turning and motion wheels will
        work). The resultant motion in the left image is forward and in the right image is at an angle of 45 degrees to
        the vertical/horizontal axis.<br><br>
        <img src="../img/images/BME-blog/image33.png" class="img-responsive floating-image center">
<br>
        <div class="blogPageSubHeading">Holonomic drive</div><br>
        It is a special kind of drive. The controllable degrees of freedom is equal to total degrees of freedom. In
        simple terms, it is not bound to go in any one specified direction and <strong><i>can traverse anywhere in the x
                y plane.</i></strong>
        An Omni wheel is generally suggested for the holonomic drives but mecanum wheels can also fit the desired
        conditions of holonomic systems.<br><br>
        Let us understand it by some clear examples:-<br><br>
        <div class="blogPageSubHeading">Holonomic drive by using omni wheels.</div>
        <img src="../img/images/BME-blog/image48.png" class="img-responsive floating-image center">
<br>
        <ul>
            <li>The pink arrows represent the velocity vectors of the wheels.<br></li>
            <li>The red vector represents the actual movement of the system. Basically, the red vector is the sum of the
                velocity vectors of the wheels.<br></li>
        </ul><br>
        <img src="../img/images/BME-blog/image50.png" class="img-responsive floating-image center">
<br>
        Now let us try to achieve the same direction using a 4 wheel omni drive.<br><br>
        Pink and red directions represent the same as in the above example.<br><br>
        <ul>
            <li>One interesting thing to note in this example is that we just need to provide velocity to the right and
                left wheels, the upper and the lower wheels will automatically move forward due to two degrees of
                freedom of the wheels as explained in the section containing wheels above.<br><br></li>
        </ul>
        Adjusting the velocity and direction of the individual wheels in a 3/4 wheel drive, we can achieve any desired
        direction.<br><br>
        <strong>You are now assigned to draw the vector diagram of both 3 and 4 wheel Omni drive so that the robot can
            move diagonally keeping the axis the same as used in the above example.<br><br></strong>
        Just to make it very clear that omni wheel is not the necessary condition for the drive to be holonomic, we have
        explained the rotation of a 3 wheel drive on its axis through normal wheels. Did you get it? Well, here is a
        hint.<br><br>
        All the wheels are given equal velocities in the same rotational order to rotate about its own centre
        clockwise/anti-clockwise.<br>
        <img src="../img/images/BME-blog/image40.gif" class="img-responsive floating-image center">

        <br><br><br>
        <div class="blogPageSubHeading">Mecanum drive</div><br><br>
        <img src="../img/images/BME-blog/image11.gif" class="img-responsive floating-image center">

        We expect you to have an understanding of the design of mecanum wheels before starting about mecanum drive.
        Also, we would suggest you visit this <a href="https://www.youtube.com/watch?v=VYl4cleQwfk"> video </a>and know
        the importance of friction in the movement of wheels.<br><br>
        Mecanum drive is also a type of holonomic drive i.e., the robot can move in any direction by keeping the x,y
        axis of the robot constant. Try to notice the constant(only shifts parallel) x,y axis in the gif below.<br><br>
        <img src="../img/images/BME-blog/image23.gif" class="img-responsive floating-image center">

        We have explained the forward movement of the robot in this image<br><br>
        <img src="../img/images/BME-blog/image42.png" class="img-responsive floating-image center">

        All the wheels are rotated towards the front direction and the resultant vector force direction occurs due to
        the design of the mecanum wheel. If we add all the frictional force vectors, we will get a net forward force
        resulting in the forward movement of the chassis. The above paragraph has been explained in the below
        image.<br><br>
        <img src="../img/images/BME-blog/image34.png" class="img-responsive floating-image center">

        The black arrow is the resultant vector.<br><br>
        The image below shows all the possible combinations of the mecanum wheel direction to attain different
        directional movements.<br><br>
        <img src="../img/images/BME-blog/image26.png" class="img-responsive floating-image center">

        How will we harness the different energy from different power sources to make our robot do the work we want.
        Surely the wheels won’t power themselves up. The answer to this lies in actuators!<br><br>

        <br><br><br><br>
        <ul class="pager">
        <li class="previous"><a href="./actuators.php">Previous</a></li>

            <li class="next"><a href="./gears.php">Next</a></li>
        </ul>


  </div>
</div>


    </div>
</div>

<?php include('footer-1.php') ?>

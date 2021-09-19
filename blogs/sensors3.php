<?php include('header.php') ?>


<div class="headImage">
</div>

<div class="page">
    <div class="blog-page">
        
        <br><br>
        <div class="blogPageHeading">
        Flex Sensors
      </div> <br><br>
      Some sensors have a straightforward working principle but challenging tasks can be achieved by them. Flex sensors are one of them. A flex sensor or bend sensor is a sensor that measures the amount of deflection or bending. Usually, the sensor is stuck to the surface, and the resistance of the sensor element is varied by bending the surface.
        <br><br>
        <b>Working</b><br><br>
        This sensor works on the bending strip principle which means whenever the strip is twisted then its resistance will be changed. This change can be measured. The sensor is composed of flexible long plastic sheets as shown below on which the conduction ink is printed.
        <br><br>
        <img src="../img/images/sensors/image16.png" class="img-responsive floating-image center"><br><br>
        This sensor works similarly to a variable resistance because when twisted the resistance will change. If the sensor is bent in such a way that the surface on which conduction ink is printed is reduced, then the total resistance decreases according to the above-mentioned formula. Both length and area are reduced and resistance also decreases.
        <br><br>
        If the sensor is bent so that the surface with conduction ink expands, its length increase causing an increase in resistance. Two terminals are provided with the sensor and the change in resistance due to bending can be observed between those terminals and thus a flex sensor detects the amount of deflection in terms of resistance.
        <br><br>
        <img src="../img/images/sensors/image87.gif" class="img-responsive floating-image right"><br>
        Suppose you have to create a glove to simulate hand gestures taking input from the glove. Now, if you use a rotary encoder to observe the changes done in real life, you need 12 rotary encoders just for fingers (excluding the thumb) and there will be a mesh of wires which makes motion and maintenance of your project difficult. Also, your glove will be fragile. So, flex sensors can be used instead to measure the degree of bend and the goal for our project can be achieved with less space being occupied and a more robust robot.
        <br><br>
        <div class="blogPageHeading">
        Touch Screen Technology
      </div> <br><br>
      <img src="../img/images/sensors/image24.png" class="img-responsive floating-image right"><br>
      Most of the devices with which we interact now have this touch screen sensor. Be it smartwatches, or your touch screen laptop There are many different touch sensor technologies on the market today, each using a different method to detect touch input. Fundamentally, these technologies all use an electrical current running through the panel that, when touched, causes a voltage or signal change. This voltage change is sensed by the touch controller to determine the location of the touch on the screen. And remember, the display and touch sensor are two different things. One is an output device and the other is an input device. You can alternatively try a key and a match stick to see which one works and why? Now, you know.<br><br>
      Now, different types of touch sensor available are as follows:
      <br><br>
      <div class="blogPageSubHeading">
        a. Capacity Touch Sensors
      </div> <br><br>
      <img src="../img/images/sensors/image53.png" class="img-responsive floating-image left"><br>
      It’s called capacitive because the technology is based on the capacitive coupling that detects anything that is conductive or has a dielectric different from air. In this case, the human body (your fingers) is being used as an electrical charge conductor.
      <br><br>
      <img src="../img/images/sensors/image69.jpg" class="img-responsive floating-image left"><br>
      The way it locates where your finger is on the screen is the change of the local electrostatic field when your finger touches the glass of the capacitive surface. An image processing controller continuously monitors the electrostatic field (or the movement of each tiny capacitor) to find where exactly the finger touched the screen. The figure below shows a helpful diagram on how it tracks the electrostatic field.
         <br><br>
         <img src="../img/images/sensors/image40.png" class="img-responsive floating-image center"><br>
      The advantages of using capacitive touchscreens include a brighter and sharper image due to the glass layer, highly touch-sensitive, and supportive of multi-touch functions. This makes it great for smartphones and why you see it on iPhones, Samsung Galaxy, and HTC phones. Some disadvantages of using this touchscreen over a resistive one are that it is dependent on the conductivity of the human body, so a person can’t wear gloves (unless it has a conductive material on it). It’s also more expensive, and glass is prone to breaking more often.<br><br>
      There is also a capacitive touch sensor available to work with Arduino. Follow this <a href="https://create.arduino.cc/projecthub/arcaegecengiz/how-to-use-a-touch-sensor-81b7f4">link</a> to know more about the touch sensor.
      <br><br>
      <div class="blogPageSubHeading">
        b. Resistive Touch Sensors
      </div> <br><br>
      <img src="../img/images/sensors/image67.png" class="img-responsive floating-image left"><br>
      The other type of touch screen/sensor is resistive. Unlike capacitive touch sensors which have a glass layer only, resistive touch sensors have several layers, where the two main layers are the flexible plastic (top circuit) and glass layer (bottom layer). The front surface has a flexible scratch-resistant plastic with a coating of conductive material (usually Indium Tin Oxide) on the underside.
      <br><br>
      <img src="../img/images/sensors/image11.png" class="img-responsive floating-image center"><br>
      The second layer is also coated with ITO and is made of either glass or hard plastic. When a finger (or a stylus) presses down on the flexible plastic, it contacts the second layer (as shown in the figure on left) and measures the resistance of both the layers at wherever the point of contact was. The figure below shows a diagram of how it works.
      But what does spacer dots do? Think about it!
      <br><br>
      Resistive touch sensors can be used with fingers, gloves, and stylus, and are resistive to dust and water, with low production costs but they are not as sensitive as capacitive ones. They require more pressure on the screen, have poor contrast due to additional reflection from the extra layer of material placed over the screen, and do not support multi-touch.
      <br><br>
      A <a href="https://www.pcmag.com/encyclopedia/term/membrane-keyboard">membrane keyboard</a> uses the same concept as a resistive touchscreen. You can try it on your keyboard if you want.
      <br><br>
      <div class="blogPageSubHeading">
        b. IR Touch Sensors
      </div> <br><br>
      You might remember that we used IR sensors to detect obstacles and we also used sharp sensors which work on IR sensors to measure the distance of an obstacle from the sensor with high accuracy and precision within a given range. What if we use two linear arrays of sharp sensors and place them on the edge of a rectangular frame, one array in horizontal and another array in vertical as shown below. Now let’s connect each sensor with a microcontroller. 
      <br><br>
      <img src="../img/images/sensors/image83.png" class="img-responsive floating-image right"><br>
      Your configuration might look like this - 
      Ok, now try to put an obstacle, say your finger in the rectangle as shown above. You’ll see you can now detect the x-coordinate of your finger with the help of a horizontally placed array of sharp sensors and y-coordinate with the help of a vertically placed array of sharp sensors.<br>
      The same principle can be applied to create a touch sensor with the help of IR sensors for regular use and there are multiple IR-based touch sensors available in the market. But IR touch screens too don’t support the multi-touch feature. Why don’t you try to figure that out by yourself! Would be fun!
         <br><br>
         <img src="../img/images/sensors/image27.gif" class="img-responsive floating-image right"><br>
         A virtual keyboard using a camera and IR sensor for determining the x,y coordinate of touch to provide input to the controller circuit of the keyboard.
         <br><br><br><br>
         <div class="blogPageHeading">
        Fingerprint Sensor
      </div> <br><br>
      We now know about the touch screen of our mobile device, but most of these mobile phones also come with a sensor for added security, and they are (drum rolls) - Fingerprint sensors!
         <br><br>
         <img src="../img/images/sensors/image13.png" class="img-responsive floating-image right"><br>
         These advanced sensors are widely used in mobiles, modern IoT applications, and smart home appliances for user identification and better data security. They record the data of your fingerprint which is basically valleys and ridges.<br><br>
         There are different types of fingerprint sensors such as:
            <br><br>
            <div class="blogPageSubHeading">
        a. Optical Fingerprint Sensors
      </div> <br><br>
         <img src="../img/images/sensors/image84.png" class="img-responsive floating-image left"><br>
         You must have come across these types of sensors while getting your Aadhar card. They have a machine where you have to press your fingers with all your strength on the panel just to find one of your fingers is not scanned correctly and you have to do it again. The way an optical scanner works is by shining a bright light over your fingerprint and taking a digital photo. The light-sensitive microchip makes the digital image by looking at the ridges and valleys of the fingerprint, turning them into 1’s and 0’s, and creates the user’s own personal code. The figure below shows how the light source reads the fingerprint and where that information goes. The disadvantage to this, while highly unlikely, is that a digital photo can be replicated.
         <br><br>
         <img src="../img/images/sensors/image28.png" class="img-responsive floating-image center"><br>
         <div class="blogPageSubHeading">
        b. Capacitive Fingerprint Sensors
      </div> <br><br>
      In today’s world, capacitive fingerprint scanners are more common and used in most smartphones. Similar to the capacitive touchscreen, it measures your finger by using human conductivity, creating an electrostatic field, and creating a digital image based on the electrostatic field.
      <br>
      <img src="../img/images/sensors/image62.jpg" class="img-responsive floating-image center"><br>
      To go into more detail, the capacitive fingerprint scanner uses tiny capacitor array circuits that track the detail of a fingerprint. The charge of the capacitor changes where ridges of our fingers make contact with conductive plates while it remains unchanged in air gaps. An operational amplifier integrator circuit tracks these changes that can then be recorded by an analog-to-digital converter, where this digital data can be analyzed. The figure below shows the physics behind this.
      <img src="../img/images/sensors/image72.png" class="img-responsive floating-image center"><br><br>

      This technology is a lot harder to bypass since an image cannot get past the capacitive fingerprint sensor and other materials will record different changes in charge on the capacitor. But more security needs more money so it is more expensive, it’s also more complex.
      <br><br>

      <div class="blogPageSubHeading">
        c. Ultrasonic Fingerprint Sensors
      </div> <br><br>
      Ok, so we used ultrasonic sound waves for distance measurement. We also used ultrasonic sound waves for the touchscreen sensor (which is indirectly distance determination in x,y - coordinates). But can we use ultrasonic sound for a fingerprint sensor?
      <br><br>
      <img src="../img/images/sensors/image78.jpg" class="img-responsive floating-image center"><br><br>
      Yes, to determine the fingerprint, ultrasonic waves are emitted from the sensors, and the ones reaching first after reflection register as a ridge, and another one that takes more time registers as a valley as shown in the figure above.
         <br><br>
         <div class="blogPageSubHeading">
        d. Thermal Fingerprint Sensors
      </div> <br><br>
      The sensing principle of this sensor works by measuring heat conductivity. A low-power heat pulse is applied to each sensor pixel over a short period and a response is measured. This response is different for pixels in proximity to a finger’s ridge or valley – to more effectively record fingerprint data.
      <br><br>
      <img src="../img/images/sensors/image90.jpg" class="img-responsive floating-image center"><br><br>
      This type of fingerprint sensor is still new and not so popular but who knows what place they will take in near future. <a href="https://www.nextbiometrics.com/technology/">NEXT</a> Biometrics is one of the manufacturers of Thermal fingerprint sensor. Take a look at what they have created!
      <br>
      So you know a lot about fingerprint sensors and their types. Why don’t you explore some phones which use different types of fingerprint scanning technology? You might learn something new about them.
      <br><br>      

    </div>
</div>




<?php include('footer-1.php') ?>

</html>
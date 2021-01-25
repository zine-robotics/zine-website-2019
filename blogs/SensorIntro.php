<?php include('header.php') ?>


<div class="headImage">
</div>
<div class="heading">
    SENSORS
</div>
<div class="page">
    <div class="blog-page">
    Aight! It is time to learn about sensors now. Let’s cut to the chase!<br><br>

What is a sensor?<br><br>

Any device that measures physical input from its environment and converts it into data that can be interpreted by us or a machine. <br><br>
Let’s make it simpler with the example of an eye.<br><br>

The eye is a sensor of sight for us and the electronic counterpart of it is a camera. Both gather visual information from the surrounding environment and convert it into data that can be interpreted by their respective data processing units, i.e., brain for us and microcontroller or microprocessor for machines.<br><br>

Fact: The average resolution of a human eye is approximated to be 576 megapixels meanwhile the highest resolution camera devices ever created has a resolution of 108 megapixel created by <a href="https://www.theverge.com/circuitbreaker/2019/11/5/20949438/xiaomi-cc9-pro-108-megapixel-camera-phone-samsung-sensor">Xiaomi</a> and <a href="https://www.theverge.com/2020/2/12/21134366/samsung-108-megapixel-sensor-size-image-quality-noise-vs-iphone-xiaomi">Samsung.</a><br><br>

Now, we know what are sensors, but why do we need sensors in robotics?<br><br>
To answer this question, let’s take an example- You want your device to function according to the light, say a light follower bot. So, the bot you built must act to detect where the light is and to follow the light, it needs to maximize the input of light. As the intensity of light increases, the distance between the source and bot decreases. Isn’t it?  But how will you give the intensity of light as input to the microcontroller directly as the visual data can’t be directly interpreted by a microcontroller? We need an intermediate to bridge this gap. <br><br>

There exists a need to convert light intensity into signals to feed them into our ICs or a microcontroller so the data can be interpreted and output can be obtained. We need a device that can sense the intensity of light in the surroundings and provide that information in the form of electrical signals to make a robot that acts on the intensity of light. Sensors, come to the rescue. Just like you have your senses to interact with the surroundings, such as<br><br>

<ol>
    <li>Eyes for visual input (discussed above)</li>
    <li>Ears for auditory inputs</li>
    <li>Tongue for the sense of taste (or sense of pH indirectly)</li>
    <li>Skin for the sense of touch, change in temperature, etc</li>
    <li>Nose for the sense of smell</li>
</ol><br><br>

<img src="../img/images/sensorintro/image1.jpg" class="img-responsive floating-image center"><br><br>
Similarly, fields of electronics also have several sensors so that the ICs and microcontrollers can interact with their surroundings. Although most of the sensors provide output in the form of electrical signals, some sensors provide data in some other form too. <br><br>

For example, a thermometer is a sensor or a temperature sensor that senses the temperature and provides data in the form of visual information. In our case, we are going to use an LDR(sensor) to detect the intensity of light which in return feeds that data into our device to process further.<br><br>

In a nutshell, sensors are the devices that detect the alteration in electrical or physical, or other quantities and provide the compatible data to the devices you are using to process the information.  For a robot utilizing electronic circuitry or system to perform any useful task or function, it needs to be able to communicate with the “real world” whether this is by reading an input signal from an “ON/OFF” switch or by activating some form of the output device to illuminate a single light.<br><br>

Now, we’ve mentioned some sensors. We need you to think which electronic sensors are associated directly with our sense organs and how. This is an assignment to help you understand the relation between sensors in humans and machines.<br><br>

<img src="../img/images/sensorintro/image2.png" class="img-responsive floating-image center"><br><br>

In the next blog, we’ll learn about how to choose sensors. We’ll also classify a wide range of sensors on different bases, and how they work.<br><br>

Till then, try to think about more sensors that provide the data but not in the form of electric signals.<br><br>


    </div>
</div>


    </div>
</div>

<?php include('footer-1.php') ?>

</html>
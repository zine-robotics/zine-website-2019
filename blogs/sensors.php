<?php include('header.php') ?>


<div class="headImage">
</div>
<div class="heading">
    Sensors and their applications
</div>
<div class="page">
    <div class="blog-page">
    <br><br>
    The sensors are great. Aren’t they? We can’t coordinate, communicate, or even interact with the surrounding environment without senses. Just like the human body, we have added the “ability to sense” to our robots!
<br><br>
There are several sensors available in the market to work with, but how to choose a sensor according to our requirements? We can’t just buy a camera for our robot if sensing the light intensity is our only need 
<br><br>
<img src="../img/images/sensors/image30.png" class="img-responsive floating-image right" width="300px"><br><br>

And can we use our eyes to listen and ears to see? We can’t (but why?). We need eyes to see and ears to listen. The specific sensor can sense specific physical changes. The same is the case with the sensors for machines.
So, how to choose a sensor???					
<br><br>
No worries! Here we’ve categorized how to choose a sensor that is best suitable for your robot.
<br><br>
<b><u>1. Based on accuracy and precision: 
</u></b> <br><br>
Accuracy and precision are the two factors that determine the quality of a sensor. Let’s define them respectively.
<b>Accuracy: </b> Accuracy is how close a measured value is to the actual (true) value. In the context of sensors, a sensor is said to be accurate if the measured physical input is close to the physical data of real life.
    
<br><br>
<b>Precision: </b> 
Precision is how close the measured values are to each other. In the context of sensors, suppose I measured the distance of my sensor A from the wall multiple times. And if all the measurements are very close to each other then my sensor is said to be precise. 
<br><br>
But how do they differ? To answer this, I’ve thrown four darts on a dartboard four times. Don’t judge me. I ain’t <a href="https://marvelcinematicuniverse.fandom.com/wiki/Hawkeye">hawkeye</a>.
<br>
<img src="../img/images/sensors/image85.png" class="img-responsive floating-image center"><br><br>
<br>
So, the outcomes are shown above. <br>
They all are different outcomes of throwing darts as well as they all differ in terms of precision and accuracy. But how? Aren’t both precision and accuracy the degree of how close the value is? 
<br><br>
Yes, both are the degree of how close the value is but …
<br><br>
Accuracy is the degree of how close the outcome is to the real value and precision is the degree of how close every outcome so obtained is, with each other.
Now, to test your concept, comment on the accuracy and precision of all the outcomes we have of dart-throwing above. If you need more help in understanding accuracy and precision, follow this video, <a href="https://www.youtube.com/watch?v=hRAFPdDppzs">video on accuracy v/s precision</a>.
<br><br>
<u><b>2. Based on the Environment in which it is going to be used
</b></u> <br>
The selection of the proper sensor requires a good understanding of the environment in which the robot has to operate. Many sensors can be affected by the non-ideal conditions of a production floor (such as temperature variation, vibration, humidity, chemicals, etc.) It is important to take the environment into account when selecting the sensor and its packaging, mounting, and other options. 
For example, if we are creating a robot that has to detect an obstacle, then this can be achieved by both IR sensors and ultrasonic distance measuring sensors (will discuss in detail later). But if the bot has to operate in a well-lit environment or an outdoor environment with bright sunlight, then the functioning of an IR sensor is interrupted as it works on the principle of light falling on the receiver transmitted by a transmitter. An ultrasonic sensor also contains a transmitter (transmits an ultrasonic sound of <a href="https://en.wikipedia.org/wiki/Pulse_(signal_processing)">pulse</a> given by microcontroller) and a receiver and it works on the principle of reflection of sound.
<br>
<img src="../img/images/sensors/image22.png" class="img-responsive floating-image center"><br><br>
<br>
So, using an ultrasonic sensor is more suitable in such cases which reduces the chances of errors in our robots.
<br><br>
<u><b>3. Based on Calibration
</b></u><br>
Calibration is the act of comparing a device under test (DUT) of an unknown value with a reference standard of a known value. 
<br><br>
A sensor that requires less correction after calibration is required as this sensor can accommodate 
<img src="../img/images/sensors/image19.png" class="img-responsive floating-image center"><br><br>
<br>
the changes in different environments and conditions.
<br><br>
A sensor with less calibration offset is always favored.
<br><br>
<u><b>4. Based on the working range
</b></u><br>
<img src="../img/images/sensors/image50.gif" class="img-responsive floating-image right" width="300px"><br><br>

Sensors must be selected keeping in mind which range they are about to operate. Once again, an IR sensor can be used to detect an obstacle and an ultrasonic sensor can also be used. Let’s specify a specific ultrasonic sensor, HC-SR04, an ultrasonic sensor used for measurement of distance, and the range of measuring a distance of this sensor is 2 cm to 400 cm. So what do we do if we need to detect an obstacle placed within 2 cm? Yes, an IR sensor is our best bet in such a case. 
Radar is used for obstacle detection within a range of hundreds of meters.

<br><br>

<b><u>5. Based on Field of View
</u></b><br>
So, I was working with my ultrasonic sensor and I started to wonder what if I put two obstacles, obstacle A and obstacle B as shown below.
<br>
<img src="../img/images/sensors/image63.png" class="img-responsive floating-image center"><br><br>
<br>

Will my ultrasonic sensor detect both obstacles? 
<br>
It has to, isn’t it? After all, this sensor is made to detect the distance between it and the obstacle but no, the sensor will only detect obstacle A and it will ignore obstacle B totally because it has a <a href="https://en.wikipedia.org/wiki/Field_of_view">field of view</a> as shown below: 
<br>
<img src="../img/images/sensors/image15.jpg" class="img-responsive floating-image center"><br><br>
<br>
You’ll understand why this sensor has this type of field of view further in ultrasonic sensors. Till then keep in mind that the field of view also plays an important role in selecting a sensor for our bot.
<br><br>
<b><u>6. Based on Resolution:
</u></b><br>
You must have heard about the resolution of images, videos (720p, 1080p, etc), and monitors. 
But what is resolution? Resolution is the measure of the amount of basic information(data) present that makes up the output. It refers to the clarity of data. For example, the number of pixels shows the amount of data present that makes up an image or images that are compiled in a sequence to make a video. More number of pixels means more resolution which means amplification of that high-resolution image still contains data rather than getting pixelated.
Similarly, audio data can also have a resolution, but their resolution is referred to as <a href="https://techterms.com/definition/bitrate#:~:text=Bitrate%2C%20as%20the%20name%20implies,megabits%20per%20second%20(Mbps).">bitrate</a>.
So, the sensor must be selected according to the required resolution. If you want to work with more data, then a high-resolution sensor is always recommended (for example high-resolution camera for more visual data to store in a picture).
<br><br>
Now let’s talk about different types of sensors, how they work, and their applications.
<br><br><br>

<div class="blogPageHeading">Proximity and Distance sensors
</div><br><br>
<div class="blogPageSubHeading">a. Inductive proximity sensors
</div> <br><br>
<img src="../img/images/sensors/image94.png" class="img-responsive floating-image left">
Proximity sensors are commonly used in many automation applications. They’re used to sense the presence of objects and don’t require physical contact with the target or object being sensed, which is why they’re often referred to  <br>
<img src="../img/images/sensors/image41.jpg" class="img-responsive floating-image center">
<br>
as non-contact sensors. Common proximity sensor types include photoelectric, capacitive, and inductive sensors.
<br><br>
<img src="../img/images/sensors/image81.gif" class="img-responsive floating-image right">

The operation of a typical inductive proximity sensor is shown here. The oscillator generates an electromagnetic field that radiates out from the sensing face, inducing eddy currents in nearby metallic objects. This causes a change in the oscillation amplitude that triggers a change in the output state.
Inductive sensor operation is based on the principle of Faraday’s Law.
<br><br>
When and where to be used?
<br><br>
As only ferromagnetic materials have inductive properties, inductive sensors won't work for plastic, cardboard, or any non-metallic object. However, some distinction exists for different elements. Ferromagnetic metals(like steel) will have greater sensing ranges than Non-ferrous ones(like copper). Also, the inductive effect wears off as distance increases, thus these sensors are well suited for shorter-range applications.
But are they affected by barriers? Think! <br>
Inductive proximity sensors hold up well in dirty environments where contaminants don’t interfere with the sensor’s ability to detect metallic objects. For example, they’re resistant to dirt, dust, and smoke in the environment between the sensor and the object to be detected. <br>
However, metallic contaminants such as metal chips in machining applications will impact sensor operation. 
<br><br>
<b>Application</b> <br>
<img src="../img/images/sensors/image1.png" class="img-responsive floating-image center">
<br>
<br>
<div class="blogPageSubHeading">b. Hall Effect Sensors</div> <br><br>
<img src="../img/images/sensors/image32.png" class="img-responsive floating-image right">

Hall Effect Sensors are devices that are activated by an external magnetic field. We know that a magnetic field has two important characteristics- flux density, (B) and polarity (North and South Poles). The output signal from a Hall effect sensor is the function of magnetic field density around the device. When the magnetic flux density around the sensor exceeds a certain pre-set threshold, the sensor detects it and generates an output voltage called the Hall Voltage, VH. Consider the diagram.
These sensors are capable of detecting magnetic fields which helps in many applications.
<br><br>
<b>Applications</b><br><br>
- It is used in <a href="https://www.tomshardware.com/news/how-hall-effect-switches-work,33105.html">Hall effect keyboard switches</a> <br>
<img src="../img/images/sensors/image26.gif" class="img-responsive floating-image center">
<br>
- It is used in RPM measurement (<a href="https://engineerexperiences.com/tachometer-using-arduino.html">tachometer</a>) <br>
<img src="../img/images/sensors/image39.gif" class="img-responsive floating-image center">
<br>
- Can also be used as a fuel level indicator <br>
<img src="../img/images/sensors/image8.gif" class="img-responsive floating-image center">
<br><br>
<div class="blogPageSubHeading">Ultrasonic sensor (HC-SR04)
</div><br><br>
<img src="../img/images/sensors/image44.png" class="img-responsive floating-image right">

The HC-SR04 ultrasonic sensor uses SONAR to determine the distance of an object just like the bats do. It offers excellent non-contact range detection with high accuracy and stable readings in an easy-to-use package from 2 cm to 400 cm. It comes complete with an ultrasonic transmitter and receiver module. Things become more clear if you go through <a href="https://www.youtube.com/watch?v=ZejQOX69K5M">this</a> video.
<br><br>
<img src="../img/images/sensors/image73" class="img-responsive floating-image left">

You are going to use this sensor a lot in your projects.  <br><br>
This sensor works with an Arduino board. <br>
Follow this link to know how to use this sensor with an Arduino board and try yourself the same on Tinkercad. <br>
Link: <a href="https://create.arduino.cc/projecthub/jake/how-to-use-an-ultrasonic-sensor-with-an-arduino-63527b">How To Use An Ultrasonic Sensor With An Arduino</a> <br><br>
A bot was created to avoid collision with the help of Arduino nano and HC-SR04 to detect obstacles.
 <br>
 <img src="../img/images/sensors/image17.gif" class="img-responsive floating-image center">
<br><br>
<div class="blogPageHeading">Speakers and Microphones
</div> <br><br>
Speakers (and microphones) are sensors that interact (generate) with sound from the surrounding. It is defined as a module that detects sound waves through their intensity and converts it to electrical signals (and vice versa). But do you know how sound sensors work? What is it used for? and How to pair a sound sensor with an Arduino? Fear not, we’ll be answering all of these questions! <br>
A sound detection sensor or a sound sensor works similarly to our Ears, having a diaphragm that converts vibration into signals. However, what’s different is that a sound sensor consists of a wire coil, permanent-magnet and a diaphragm. You can see the structure and working in the gif below. <br><br>
With these components, it allows for the sensor to work: <br>
<br>
<img src="../img/images/sensors/image47.gif" class="img-responsive floating-image right"> <br>
-Sound waves propagate through air molecules. <br>
- The diaphragm is attached to the coil.
<br>- When the diaphragm vibrates in response to incoming sound waves, the coil moves backwards and forwards past the magnet.
<br>- Due to the principle of magnetic induction, this creates an audio signal in the form of voltage.
<br>- Voltage change is then recorded or stored by devices. <br>
<img src="../img/images/sensors/image54.gif" class="img-responsive floating-image center"> <br>
<center>Sound waves propagating through air molecules
</center><br><br>
So, now we know how sound sensors work. But what is its application? <br><br>
Apart from building various electronic projects with Arduino and more, sound sensors are used in many other day to day applications including: <br>

- Consumer electronics such as phones, computers, music systems.
<br>- Security and Monitoring systems such as burglar alarms, door alarms, etc.
<br>- Home automation such as lighting your house by detecting whistle/clap instead of physically turning the light switch.
<br>- Ambient sound recognition and sound level recognition.
<br>- A microphone is also a sound sensor and you can use a microphone with an Arduino, but the signals from the microphone are too weak so they need to be amplified before feeding them to the Arduino board. There are various modules available having both a microphone and an amplifier in one single module and they are ready to use with the Arduino board. So we use those modules with an Arduino board to sense audio signals.
 
<div class="blogPageHeading">Optical sensors
</div> <br><br>
    </div>
</div>


    </div>
</div>

<?php include('footer-1.php') ?>

</html>
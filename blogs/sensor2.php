<?php include('header.php') ?>


<div class="headAlgoImage">
</div>
<div class="heading">
  Actuators
</div>

<div class="page">
  <div class="blog-page">
    <br><br>
    <div class="blogPageHeading"> Passive IR sensor </div>
    <br>
    <img src="../img/images/sensors/image61.gif" class="img-responsive floating-image center">
    <br>
Ever happened that when you walk through the door of a mall or office or theatres or hotels and the door automatically opens as you reach near to it and closes as you go far from it? Or do we all have superpowers?
<br><br>
How does the door know we are near and we are far from it? 
<br><br>
<img src="../img/images/sensors/image12.gif" class="img-responsive floating-image center">
<br>
Is ‘someone’ watching us from a camera the whole time (other than the FBI or Mark Zuckerberg) and then opening and closing the door?
<br><br>
The answer is no if ‘someone’ above refers to a human but yes if ‘someone’ refers to a microcontroller and sensor. The sensor responsible for this is PIR or Passive Infrared Sensor. This sensor uses infrared light emitted by objects and then detects objects in its field of view.
<br> 
<img src="../img/images/sensors/image70.png" class="img-responsive floating-image center">
<br>
The PIR sensors are more complicated than the other sensors as they consist of two slots. <br>
The <a href="https://science.howstuffworks.com/question244.htm">Fresnel lens</a> is used to see that the two slots of the PIR can see out past some distance. When the sensor is inactive, then the two slots sense the same amount of IR. The ambient amount radiates from the outdoors, walls or room, etc.
<br>
<img src="../img/images/sensors/image2.gif" class="img-responsive floating-image center"> 
<br>
When a human body or any animal passes by, then it intercepts the first slot of the PIR sensor. This causes a positive differential change between the two bisects. When a human body leaves the sensing area, the sensor generates a negative differential change between the two bisects. The infrared sensor itself is housed in a hermetically (airtight) sealed metal to improve humidity/temperature/ noise/ immunity. There is a window that is made of 
<br><br>
An application of a PIR sensor to sense the presence of a person to switch the lights on and off automatically.
<img src="../img/images/sensors/image25.gif" class="img-responsive floating-image center"> 
<br>
<div class="blogPageSubHeading"> Applications </div>
<br>* Used in automatic opening doors
<br>* Used as a security alarm systems
<br>* Robots that can detect humans
<br><br>

<div class="blogPageHeading">Rotary Encoders</div>

<br>Before jumping to Rotary Encoders, let’s talk through encoders first, and then follow up the rotary encoders.
<br>To understand what encoders are, let’s use a real-life scenario. You went to a mall for let’s say, dominos, and the mall main door automatically opens for you and now you know why. You want to go to the third floor but you already are exhausted as you were collecting components from different shops for building a robot for a competition . So, you reach for the elevator and enter it. Currently, the elevator is on the ground floor and you pressed the button for the third floor, simple and easy. But as you reached the third floor, you started to wonder how this elevator or the very powerful motors pulling the elevator knew that elevator reached the third floor?
<br>Here the encoder does his job to tell the system (which is responsible for the functioning of the elevator) where the elevator is.
<br>
<br>Simply put, an encoder is a sensing device that provides <a href="https://www.analogictips.com/faq-what-is-feedback/#:~:text=In%20electronics%2C%20feedback%20is%20defined,and%20in%20many%20other%20areas.">feedback.</a> Encoders convert the motion to an electrical signal that can be read by some type of control device in a motion control system, such as a counter. Yes, the counter we created with the help of an IR sensor is also an encoder.
<br><br>The encoder sends a feedback signal that can be used to determine position, count, speed, or direction. A control device can use this information to send a command for a particular function. Most of the functions of getting feedback from moving devices can be accomplished by linear and rotary encoders.
<br><br>In our scenario, let’s assume our motors pulling the elevator are embedded with encoders so the system uses the data from encoders and generates a signal for the elevator to stop. The encoder provides the speed, position, and direction of the elevator in which it is moving.
<br><br>Linear encoders provide feedback from linear motion and rotary encoders provide feedback from rotary motion.<br>
<img src="../img/images/sensors/image10.png" class="img-responsive floating-image center"> 
<br>Rotary Encoders can be fixed with the motor shaft to provide feedback of motor motion to the control system.
<br>To understand how rotary encoders work, follow this <a href="https://www.youtube.com/watch?v=oLBYHbLO8W0">video</a> by Sparkfun.<br>
<img src="../img/images/sensors/image68.png" class="img-responsive floating-image right"> 
<br><br>In the above scenario, the encoder used is a rotary encoder embedded in motors but what if we need to create an elevator with a linear encoder also what is the need of encoders if motors work on the voltage provided? We can simply provide enough voltage according to the revolutions needed and rotation speed of the motor and determine the position after providing voltage for a fixed amount of time.
<br><br>Try to think whether  the elevator you were on can be created with the help of linear encoders or not and the need of encoders with motors? Why is feedback needed?
<br><br>
<div class="blogPageSubHeading"> Applications</div>
<br>
<img src="../img/images/sensors/image64.jpg" class="img-responsive floating-image center"> 
<br>* Trackball mouses use this rotary encoder to determine the position of the pointer according to the input fed by the trackball motion.
<br>* Mouses with scroll wheels use rotary encoders for determining the number of revolutions or scrolls done by the user.
<br>
<img src="../img/images/sensors/image75.jpg" class="img-responsive floating-image center"> 
<br>* Rotary encoders are used in the <a href="https://en.wikipedia.org/wiki/Tachometer#:~:text=A%20tachometer%20(revolution%2Dcounter%2C,digital%20displays%20are%20increasingly%20common.">tachometer</a> to determine the revolutions. Timer ICs are used for the calculation of time and then it outputs the rotary speed of the shaft it is attached to, in revolutions per unit time.
<br>
<br>
<div class="blogPageHeading">Image sensors</div>
<br>
We talked a lot about optical sensors but still, a sensor is left in optical sensors which revolutionized the way of sharing information.
<br>From the tedious task of drawing images to capturing high-resolution images in one-click? Yes, we’re talking about cameras. 
<br>What made the tedious task of drawing images as simple as capturing high-resolution images in one-click? Yes, we’re talking about cameras. The camera has some similarities to the human eye, your iris controls how much light enters your eye, the lens helps focus the light and the retina is a light-sensitive surface at the back of your eye. It captures an image of what you’re looking at. Then, the retina sends impulses to your brain along the optic nerve. Finally, the brain interprets what you’re seeing. When a camera captures an image, First, light hits the surface of the camera’s lens. The aperture controls how much light enters the camera. Then, the light makes its way to a light-sensitive surface. For a long time, this surface was the camera’s film. In today’s digital cameras, this surface is an imaging sensor chip, converting information from photons into digital signals.
<br>An image sensor is a sensor that detects and conveys information used to make an image. It does so by converting the variable attenuation of light waves (as they pass through or reflect off objects) into signals, small bursts of current that convey the information.
<br>A simplified way to think about these sensors is to think of a 2-D array of thousands or millions of tiny solar cells. Once the sensor converts the light into electrons, it reads the value (accumulated charge) of each cell in the image. But reading the value from each cell is done in two different ways which divides the image sensors in two types:
    <br><br>
    <div class="blogPageSubHeading">  CCD image sensors (Charged-coupled device sensors)</div>
    <br><img src="../img/images/sensors/image37.gif" class="img-responsive floating-image center"> 
    <br>A CCD transports the charge across the chip to the adjacent vertical shift register. Then the charge is transferred by vertical shift register to a horizontal shift register which is then amplified and passed to an analog- to- digital converter (ADC) then turns each pixel's value into a digital value by measuring the amount of charge at each photosite and converting that measurement to binary form.
    <br>It creates high-quality, low-noise images. CCD sensors have been mass-produced for a longer period of time, so they are more mature. They tend to have higher quality pixels, and more of them.
    <br><br>
    <div class="blogPageSubHeading"> CMOS image sensors (Complementary Metal-Oxide Semiconductor sensors)</div>
    <br>
    <br><img src="../img/images/sensors/image93.gif" class="img-responsive floating-image center"> 
    <br>CMOS devices use several transistors at each pixel to amplify and move the charge using more traditional wires.
    <br>Because each pixel on this sensor has several transistors located next to it, the light sensitivity of a CMOS chip is lower. Many of the photons hit the transistors instead of the photodiode.
    <br>CMOS sensors traditionally consume little power. CCDs, on the other hand, use a process that consumes lots of power. CCDs consume as much as 100 times more power than an equivalent CMOS sensor.
    <br> <br>To understand the concepts and differences better, follow this <a href="https://www.youtube.com/watch?v=MytCfECfqWc">video link</a> by Filmmaker.
<br>
<br><img src="../img/images/sensors/image89.jpg" class="img-responsive floating-image center"> 
        Now you know how both image sensors work. It’s time to implement your knowledge. Determine which image sensor is used for capturing the image on the top. Also, determine the name of the effect responsible and explain the effect.
        <br><br>

        <div class="blogPageHeading"> Temperature sensor</div>
        <br>
There are various sensors available to detect temperature and provide the output in electric signals. A temperature sensor is defined as a device that collects the data about temperature from a particular source and converts the data into an understandable form for a device or an observer.
<br><br>
<div class="blogPageSubHeading">Types of Temperature Sensors</div>
<br>
There are different types of temperature sensors that have sensing capacity depending upon their range of application. They are as follows:


    <br><br>
    <div class="blogPageSubHeading">Thermocouples</div>
    <br>
    <br><img src="../img/images/sensors/image88.png" class="img-responsive floating-image center"> 
The thermocouple sensor is the most commonly used temperature sensor. This sensor follows the following principle-
<br>When a closed circuit is formed by joining two dissimilar metals (chromel and alumel as shown below) at two junctions, and junctions are maintained at different temperatures then an electromotive force (e.m.f.) is induced in this closed circuit. The amount of induced e.m.f. is different for different metal combinations and is proportional to the temperature difference of the junctions. The change in temperature is thus perceived as change in e.m.f using this sensor. It is extremely rugged, low-cost, self-powered, and can be used for longer periods.
<br><img src="../img/images/sensors/gum.png" class="img-responsive floating-image center">
<br> 
The most important property of the thermocouple is nonlinearity – the output voltage of the thermocouple is not linear with respect to temperature. Thus, converting an output voltage to a temperature requires mathematical linearization.
<br>
<div class="blogPageSubHeading">Resistor temperature detectors</div>
<br>RTD sensor is one of the most accurate sensors. In a resistor temperature detector, the resistance is proportional to the temperature. This sensor is made from platinum, nickel, and copper metals. It has a wide range of temperature measurement capabilities as it can be used to measure temperature in the range between -270°C to +850°C. RTD requires an external current source to function properly. However, the current produces heat in a resistive element causing an error in the temperature measurements.
<br><img src="../img/images/sensors/image52.png" class="img-responsive floating-image center">
<br>
<div class="blogPageSubHeading">Thermistors</div>
<br><img src="../img/images/sensors/image4.png" class="img-responsive floating-image center">
<br>Another type of sensor is a thermistor temperature sensor, which is relatively inexpensive, adaptable, and easy to use. It changes its resistance when the temperature changes like an RTD sensor. Thermistors are made from manganese and oxides of nickel, which make them susceptible to damages. These materials are called ceramic materials. Thermistor offers higher sensitivity than the resistor temperature detectors. Most of the thermistors have a negative temperature coefficient. It means when the temperature increases the resistance decreases.
<br>
<div class="blogPageSubHeading">Semiconductor based sensors</div>
<br><img src="../img/images/sensors/image80.png" class="img-responsive floating-image center">
<br>Semiconductor sensors are the devices that come in the form of ICs. Popularly, these sensors are known as an IC temperature sensor. They are classified into different types: Current output temperature sensor, Voltage output temperature sensor, Resistance output silicon temperature sensor, Diode temperature sensors, and Digital output temperature sensor. Present semiconductor temperature sensors offer high linearity and high accuracy over an operating range of about 55°C to +150°C. 
<br>LM35 is widely used in projects to detect temperature.
<br><img src="../img/images/sensors/image57.png" class="img-responsive floating-image center">
<br>Follow this <a href="https://create.arduino.cc/projecthub/infoelectorials/project-003-arduino-lm35-temperature-sensor-project-0a43ba">link</a> to know how LM35 can be used with an Arduino board and try to simulate the same in tinkercad.
<br><div class="blogPageSubHeading">IR based</div>
<br><img src="../img/images/sensors/image92.png" class="img-responsive floating-image center">
<br>IR sensor is an electronic instrument that is used to sense certain characteristics of its surroundings by either emitting or detecting IR radiation. These sensors are non-contacting. For example, if you hold an IR sensor in front of your desk without establishing any contact, the sensor detects the temperature of the desk based on the merit of its radiation.
<br>
<div class="blogPageSubHeading">Optical Pyrometer</div>
<br><img src="../img/images/sensors/image46.png" class="img-responsive floating-image center">
<br>We can see example of optical pyrometers which are used to detect temperature of furnaces, molten metals, and other overheated material or liquids is a non-contact temperature sensor which compares brightness of object to brightness of filament placed inside it.



    </div>
</div>

<?php include('footer-1.php') ?>



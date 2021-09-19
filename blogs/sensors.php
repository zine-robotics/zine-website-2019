<?php include('header.php') ?>


<div class="headIcImage">
</div>
<div class="heading">
    Sensors and their applications
</div>
<div class="page">
    <div class="blog-page">
        <br><br>
        The sensors are great. Aren’t they? We can’t coordinate, communicate, or even interact with the surrounding
        environment without senses. Just like the human body, we have added the “ability to sense” to our robots!
        <br><br>
        There are several sensors available in the market to work with, but how to choose a sensor according to our
        requirements? We can’t just buy a camera for our robot if sensing the light intensity is our only need
        <br><br>
        <img src="../img/images/sensors/image30.png" class="img-responsive floating-image right" width="300px"><br><br>

        And can we use our eyes to listen and ears to see? We can’t (but why?). We need eyes to see and ears to listen.
        The specific sensor can sense specific physical changes. The same is the case with the sensors for machines.
        So, how to choose a sensor???
        <br><br>
        No worries! Here we’ve categorized how to choose a sensor that is best suitable for your robot.
        <br><br>
        <b><u>1. Based on accuracy and precision:
            </u></b> <br><br>
        Accuracy and precision are the two factors that determine the quality of a sensor. Let’s define them
        respectively.
        <b>Accuracy: </b> Accuracy is how close a measured value is to the actual (true) value. In the context of
        sensors, a sensor is said to be accurate if the measured physical input is close to the physical data of real
        life.

        <br><br>
        <b>Precision: </b>
        Precision is how close the measured values are to each other. In the context of sensors, suppose I measured the
        distance of my sensor A from the wall multiple times. And if all the measurements are very close to each other
        then my sensor is said to be precise.
        <br><br>
        But how do they differ? To answer this, I’ve thrown four darts on a dartboard four times. Don’t judge me. I
        ain’t <a href="https://marvelcinematicuniverse.fandom.com/wiki/Hawkeye">hawkeye</a>.
        <br>
        <img src="../img/images/sensors/image85.png" class="img-responsive floating-image center"><br><br>
        <br>
        So, the outcomes are shown above. <br>
        They all are different outcomes of throwing darts as well as they all differ in terms of precision and accuracy.
        But how? Aren’t both precision and accuracy the degree of how close the value is?
        <br><br>
        Yes, both are the degree of how close the value is but …
        <br><br>
        Accuracy is the degree of how close the outcome is to the real value and precision is the degree of how close
        every outcome so obtained is, with each other.
        Now, to test your concept, comment on the accuracy and precision of all the outcomes we have of dart-throwing
        above. If you need more help in understanding accuracy and precision, follow this video, <a
            href="https://www.youtube.com/watch?v=hRAFPdDppzs">video on accuracy v/s precision</a>.
        <br><br>
        <u><b>2. Based on the Environment in which it is going to be used
            </b></u> <br>
        The selection of the proper sensor requires a good understanding of the environment in which the robot has to
        operate. Many sensors can be affected by the non-ideal conditions of a production floor (such as temperature
        variation, vibration, humidity, chemicals, etc.) It is important to take the environment into account when
        selecting the sensor and its packaging, mounting, and other options.
        For example, if we are creating a robot that has to detect an obstacle, then this can be achieved by both IR
        sensors and ultrasonic distance measuring sensors (will discuss in detail later). But if the bot has to operate
        in a well-lit environment or an outdoor environment with bright sunlight, then the functioning of an IR sensor
        is interrupted as it works on the principle of light falling on the receiver transmitted by a transmitter. An
        ultrasonic sensor also contains a transmitter (transmits an ultrasonic sound of <a
            href="https://en.wikipedia.org/wiki/Pulse_(signal_processing)">pulse</a> given by microcontroller) and a
        receiver and it works on the principle of reflection of sound.
        <br>
        <img src="../img/images/sensors/image22.png" class="img-responsive floating-image center"><br><br>
        <br>
        So, using an ultrasonic sensor is more suitable in such cases which reduces the chances of errors in our robots.
        <br><br>
        <u><b>3. Based on Calibration
            </b></u><br>
        Calibration is the act of comparing a device under test (DUT) of an unknown value with a reference standard of a
        known value.
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

        Sensors must be selected keeping in mind which range they are about to operate. Once again, an IR sensor can be
        used to detect an obstacle and an ultrasonic sensor can also be used. Let’s specify a specific ultrasonic
        sensor, HC-SR04, an ultrasonic sensor used for measurement of distance, and the range of measuring a distance of
        this sensor is 2 cm to 400 cm. So what do we do if we need to detect an obstacle placed within 2 cm? Yes, an IR
        sensor is our best bet in such a case.
        Radar is used for obstacle detection within a range of hundreds of meters.

        <br><br>

        <b><u>5. Based on Field of View
            </u></b><br>
        So, I was working with my ultrasonic sensor and I started to wonder what if I put two obstacles, obstacle A and
        obstacle B as shown below.
        <br>
        <img src="../img/images/sensors/image63.png" class="img-responsive floating-image center"><br><br>
        <br>

        Will my ultrasonic sensor detect both obstacles?
        <br>
        It has to, isn’t it? After all, this sensor is made to detect the distance between it and the obstacle but no,
        the sensor will only detect obstacle A and it will ignore obstacle B totally because it has a <a
            href="https://en.wikipedia.org/wiki/Field_of_view">field of view</a> as shown below:
        <br>
        <img src="../img/images/sensors/image15.jpg" class="img-responsive floating-image center"><br><br>
        <br>
        You’ll understand why this sensor has this type of field of view further in ultrasonic sensors. Till then keep
        in mind that the field of view also plays an important role in selecting a sensor for our bot.
        <br><br>
        <b><u>6. Based on Resolution:
            </u></b><br>
        You must have heard about the resolution of images, videos (720p, 1080p, etc), and monitors.
        But what is resolution? Resolution is the measure of the amount of basic information(data) present that makes up
        the output. It refers to the clarity of data. For example, the number of pixels shows the amount of data present
        that makes up an image or images that are compiled in a sequence to make a video. More number of pixels means
        more resolution which means amplification of that high-resolution image still contains data rather than getting
        pixelated.
        Similarly, audio data can also have a resolution, but their resolution is referred to as <a
            href="https://techterms.com/definition/bitrate#:~:text=Bitrate%2C%20as%20the%20name%20implies,megabits%20per%20second%20(Mbps).">bitrate</a>.
        So, the sensor must be selected according to the required resolution. If you want to work with more data, then a
        high-resolution sensor is always recommended (for example high-resolution camera for more visual data to store
        in a picture).
        <br><br>
        Now let’s talk about different types of sensors, how they work, and their applications.
        <br><br><br>

        <div class="blogPageHeading">Proximity and Distance sensors
        </div><br><br>
        <div class="blogPageSubHeading">a. Inductive proximity sensors
        </div> <br><br>
        <img src="../img/images/sensors/image94.png" class="img-responsive floating-image left">
        Proximity sensors are commonly used in many automation applications. They’re used to sense the presence of
        objects and don’t require physical contact with the target or object being sensed, which is why they’re often
        referred to <br>
        <img src="../img/images/sensors/image41.jpg" class="img-responsive floating-image center">
        <br>
        as non-contact sensors. Common proximity sensor types include photoelectric, capacitive, and inductive sensors.
        <br><br>
        <img src="../img/images/sensors/image81.gif" class="img-responsive floating-image right">

        The operation of a typical inductive proximity sensor is shown here. The oscillator generates an electromagnetic
        field that radiates out from the sensing face, inducing eddy currents in nearby metallic objects. This causes a
        change in the oscillation amplitude that triggers a change in the output state.
        Inductive sensor operation is based on the principle of Faraday’s Law.
        <br><br>
        When and where to be used?
        <br><br>
        As only ferromagnetic materials have inductive properties, inductive sensors won't work for plastic, cardboard,
        or any non-metallic object. However, some distinction exists for different elements. Ferromagnetic metals(like
        steel) will have greater sensing ranges than Non-ferrous ones(like copper). Also, the inductive effect wears off
        as distance increases, thus these sensors are well suited for shorter-range applications.
        But are they affected by barriers? Think! <br>
        Inductive proximity sensors hold up well in dirty environments where contaminants don’t interfere with the
        sensor’s ability to detect metallic objects. For example, they’re resistant to dirt, dust, and smoke in the
        environment between the sensor and the object to be detected. <br>
        However, metallic contaminants such as metal chips in machining applications will impact sensor operation.
        <br><br>
        <b>Application</b> <br>
        <img src="../img/images/sensors/image1.png" class="img-responsive floating-image center">
        <br>
        <br>
        <div class="blogPageSubHeading">b. Hall Effect Sensors</div> <br><br>
        <img src="../img/images/sensors/image32.png" class="img-responsive floating-image right">

        Hall Effect Sensors are devices that are activated by an external magnetic field. We know that a magnetic field
        has two important characteristics- flux density, (B) and polarity (North and South Poles). The output signal
        from a Hall effect sensor is the function of magnetic field density around the device. When the magnetic flux
        density around the sensor exceeds a certain pre-set threshold, the sensor detects it and generates an output
        voltage called the Hall Voltage, VH. Consider the diagram.
        These sensors are capable of detecting magnetic fields which helps in many applications.
        <br><br>
        <b>Applications</b><br><br>
        - It is used in <a href="https://www.tomshardware.com/news/how-hall-effect-switches-work,33105.html">Hall effect
            keyboard switches</a> <br>
        <img src="../img/images/sensors/image26.gif" class="img-responsive floating-image center">
        <br>
        - It is used in RPM measurement (<a
            href="https://engineerexperiences.com/tachometer-using-arduino.html">tachometer</a>) <br>
        <img src="../img/images/sensors/image39.gif" class="img-responsive floating-image center">
        <br>
        - Can also be used as a fuel level indicator <br>
        <img src="../img/images/sensors/image8.gif" class="img-responsive floating-image center">
        <br><br>
        <div class="blogPageSubHeading">Ultrasonic sensor (HC-SR04)
        </div><br><br>
        <img src="../img/images/sensors/image44.png" class="img-responsive floating-image right" width="300px">

        The HC-SR04 ultrasonic sensor uses SONAR to determine the distance of an object just like the bats do. It offers
        excellent non-contact range detection with high accuracy and stable readings in an easy-to-use package from 2 cm
        to 400 cm. It comes complete with an ultrasonic transmitter and receiver module. Things become more clear if you
        go through <a href="https://www.youtube.com/watch?v=ZejQOX69K5M">this</a> video.
        <br><br>
        <img src="../img/images/sensors/image73.gif" class="img-responsive floating-image left" width="500px">

        You are going to use this sensor a lot in your projects. <br><br>
        This sensor works with an Arduino board. <br>
        Follow this link to know how to use this sensor with an Arduino board and try yourself the same on Tinkercad.
        <br>
        Link: <a
            href="https://create.arduino.cc/projecthub/jake/how-to-use-an-ultrasonic-sensor-with-an-arduino-63527b">How
            To Use An Ultrasonic Sensor With An Arduino</a> <br><br>
        A bot was created to avoid collision with the help of Arduino nano and HC-SR04 to detect obstacles.
        <br>
        <img src="../img/images/sensors/image17.gif" class="img-responsive floating-image center">
        <br><br>
        <div class="blogPageHeading">Speakers and Microphones
        </div> <br><br>
        Speakers (and microphones) are sensors that interact (generate) with sound from the surrounding. It is defined
        as a module that detects sound waves through their intensity and converts it to electrical signals (and vice
        versa). But do you know how sound sensors work? What is it used for? and How to pair a sound sensor with an
        Arduino? Fear not, we’ll be answering all of these questions! <br>
        A sound detection sensor or a sound sensor works similarly to our Ears, having a diaphragm that converts
        vibration into signals. However, what’s different is that a sound sensor consists of a wire coil,
        permanent-magnet and a diaphragm. You can see the structure and working in the gif below. <br><br>
        With these components, it allows for the sensor to work: <br>
        <br>
        <img src="../img/images/sensors/image47.gif" class="img-responsive floating-image right"> <br>
        -Sound waves propagate through air molecules. <br>
        - The diaphragm is attached to the coil.
        <br>- When the diaphragm vibrates in response to incoming sound waves, the coil moves backwards and forwards
        past the magnet.
        <br>- Due to the principle of magnetic induction, this creates an audio signal in the form of voltage.
        <br>- Voltage change is then recorded or stored by devices. <br>
        <img src="../img/images/sensors/image54.gif" class="img-responsive floating-image center"> <br>
        <center>Sound waves propagating through air molecules
        </center><br><br>
        So, now we know how sound sensors work. But what is its application? <br><br>
        Apart from building various electronic projects with Arduino and more, sound sensors are used in many other day
        to day applications including: <br>

        - Consumer electronics such as phones, computers, music systems.
        <br>- Security and Monitoring systems such as burglar alarms, door alarms, etc.
        <br>- Home automation such as lighting your house by detecting whistle/clap instead of physically turning the
        light switch.
        <br>- Ambient sound recognition and sound level recognition.
        <br>- A microphone is also a sound sensor and you can use a microphone with an Arduino, but the signals from the
        microphone are too weak so they need to be amplified before feeding them to the Arduino board. There are various
        modules available having both a microphone and an amplifier in one single module and they are ready to use with
        the Arduino board. So we use those modules with an Arduino board to sense audio signals.

        <div class="blogPageHeading">Optical sensors
        </div> <br><br>
        This category includes those sensors that deal with optical signals.
        <div class="blogPageSubHeading">a. LDR (Light Dependent Resistor)
        </div> <br>

        <img src="../img/images/sensors/image76.png" class="img-responsive floating-image right" width="200px"> <br>

        Do you remember we talked earlier about light? Something about creating a light follower bot. Yes, we’re going
        to talk about the very same sensor we used in the introduction of sensors. As the name suggests, this sensor
        deals with light and it is a resistor whose value of resistance depends totally on the intensity of light that
        falls on the sensor. It is also called a <b>photoresistor</b> or a <b>cadmium sulfide cell</b> (based on the
        material used to create it) or <b>photoconductor</b>. It is a photocell that works on the principle of
        photoconductivity. The passive component is a sulfide resistor whose resistance value decreases when the
        intensity of light decreases. LDR is mostly used in light varying sensor circuits and light-dependent switching
        circuits. Some of its applications include street lights, light beam alarms, reflective smoke alarms, and
        outdoor clocks.
        <br><br>
        Here are some projects using LDR we would encourage you to explore: <br>
        - <a href="https://www.circuitstoday.com/street-light-circuit">Automatic Street Light Circuit</a>
        <br>- <a href="https://www.circuitstoday.com/fire-alarm-circuit">Simple Fire Alarm Circuit</a>
        <br>- <a href="https://www.circuitstoday.com/light-activated-switch-circuit">Light Activated Switch Circuit</a>
        <br>- <a href="https://www.circuitstoday.com/automatic-led-emergency-light">Automatic LED Emergency Light</a>
        <br>- <a href="https://www.circuitstoday.com/night-security-light">Night Security Light</a>
        <br><br>
        <b>Structure and Working</b><br><br>

        The basic structure of an LDR is shown below.
        <br><img src="../img/images/sensors/image65.png" class="img-responsive floating-image center"> <br>

        In the absence of light, it is designed to have a high resistance in the range of MΩs. As soon as light falls on
        the sensor, the electrons are liberated and the conductivity of the material increases. When the light intensity
        exceeds a certain frequency, the photons absorbed by the semiconductor give band electrons the energy required
        to jump into the conduction band. This causes the free electrons or holes to conduct electricity and thus
        dropping the resistance dramatically (< 1 KΩ). But why is there a snake-like track of Cadmium Sulphide? Why
            don’t you try to figure that out by yourself? <br>
            <br><img src="../img/images/sensors/image60.png" class="img-responsive floating-image center"> <br>

            <br><br>
            <!-- A gif showing the working of an LDR in a circuit -->
            <b>Advantages</b> <br><br>
            LDR’s are cheap and are readily available in many sizes and shapes. Practical LDRs are available in a
            variety of sizes and package styles, the most popular size having a face diameter of roughly 10 mm. They
            need very small power and voltage for their operation.
            <br><br>
            <b>Disadvantages</b><br><br>
            Highly inaccurate with a response time of about tens or hundreds of milliseconds.
            <br><br>
            <div class="blogPageSubHeading">b. IR LED
            </div><br><br>
            <br><img src="../img/images/sensors/image77.png" class="img-responsive floating-image right"> <br>

            An Infrared light-emitting diode (IR LED) is a special purpose LED emitting infrared rays ranging from 700
            nm to 1 mm wavelength. Different IR LEDs may produce infrared light of differing wavelengths, just like
            different LEDs produce light of different colors. <br>
            IR LEDs are usually made of gallium arsenide or aluminum gallium arsenide. In complement with IR receivers,
            these are commonly used as sensors. <br>
            The appearance of an IR LED is the same as a common LED. Since the human eye cannot see infrared radiations,
            a person can’t identify if an IR LED is working. A camera on a cell phone camera solves this problem. The IR
            rays from the IR LED in the circuit are shown in the camera. <br><br>

            You can try this by pointing the TV remote’s led into your phone camera.
            <br><br>



            Fact: Not all phone cameras can detect this IR light because some phone cameras contain IR filters to
            improve the color quality of captured images.
            <br><br>

            <b>Pin diagram of an IR LED</b> <br><br>
            <br><img src="../img/images/sensors/image6.png" class="img-responsive floating-image right" width="200px">
            <br>
            An IR LED is a type of diode or simple semiconductor. Electric current is allowed to flow in only one
            direction in diodes. From anode to cathode. As the current flows, electrons fall from one part of the diode
            into holes on another part. To fall into these holes, the electrons must shed energy in the form of photons,
            which produce light.
            <div class="blogPageSubHeading">c. Photodiode
            </div> <br><br>
            It is a form of light-weight sensor that converts light energy into electrical voltage or current. It is
            also known as a photodetector or photosensor. You must have studied it in Basic Electrical and Electronics
            blog. It operates in reverse biased mode and converts light energy into electrical energy. <br>
            So, how is it used as a sensor?<br>
            The diode used in this mode is more commonly reverse-biased i.e. the cathode becomes positive with respect
            to the anode. The application of reverse voltage increases the width of the depletion layer, which in turn
            increases the amount of incident light. This mode increases sensitivity of this sensor.

            <br><br>
            <br><img src="../img/images/sensors/image79.png" class="img-responsive floating-image left" width="250px">
            <br>

            Did you notice that the top part of the diode (encircled in black) is covered in black packing material, but
            why is it so? Any guesses? Sure, black is the best absorbent of light but what it has to do with our
            photodiode. The reason is the photodiode is covered in black but the tip of the diode is transparent or
            semi-transparent to let the light fall only on the junction of the diode. And any other sources of light
            won’t affect the functioning of our diode as we mostly need the light to enter from the top part only in our
            diode, blocking any other light from the surroundings.
            <br><br>
            <b>Active & Passive IR sensors
            </b> <br><br>
            To study further about optical sensors, we need to know about what active and passive sensors are,
            <br><br>
            Active sensors have their source of light or illumination. In particular, it actively sends a pulse of IR
            usually and measures the backscatter reflected by the sensor.
            <br><br>
            But passive sensors don’t have their own source of light, they either measure reflected sunlight emitted
            from the sun or infrared light emitted from objects.
            <img src="../img/images/sensors/image55.jpg" class="img-responsive floating-image center"> <br>
            In the image shown above, the sensor on the left receiving the IR radiation emitted by the human in front of
            the sensor falls under the category of Passive IR sensor and the sensor on the right with its own source of
            illumination i.e. IR LED emitting IR light shown by red-colored waves with a receiver i.e. photodiode falls
            under the category of Active IR sensor.
            <br><br>
            <div class="blogPageHeading">Active IR Sensors
            </div> <br><br>
            <div class="blogPageSubHeading">a. IR sensors</div>
            An IR sensor is an electronic device that detects IR radiation falling on it. <a
                href="https://www.electronicsforu.com/videos-slideshows/introduction-proximity-sensor">Proximity
                sensors</a> (used in touchscreen phones and edge avoiding robots), reflectance sensors (used in line
            following robots) and break beam sensors (used for counting goods and in burglar alarms) are some
            applications involving IR sensors.
            <b>Principle of Working</b><br>

            An IR sensor consists of two parts, the emitter circuit, and the receiver circuit. This is collectively
            known as a photo-coupler or an optocoupler. <br><br>
            The emitter is an IR LED and the detector is an IR photodiode. The IR photodiode is sensitive to the IR
            light emitted by an IR LED. The photodiode’s resistance and output voltage change in proportion to the IR
            light received. This is the underlying working principle of the IR sensor. <br><br>
            This principle of Active IR sensor can be used in two ways: <br> <br>

            <b>- Break Beam Configuration</b> <br>
            This configuration of the Active IR sensor has an emitter and receiver placed in such a way that the IR
            emitted by the emitter falls directly into the receiver (as shown below). During the operation, an IR beam
            is emitted continuously towards the receiver. The flow of IR can be interrupted by placing an object between
            the emitter and the receiver. If the IR is transmitted but altered then the receiver generates an output
            based on the change in radiation. Similarly, if the radiation is completely blocked the receiver can detect
            it and provide the desired output. Below is a demonstration of Break Beam Configuration, when an opaque
            object interrupts the IR flow the receiver doesn’t receive any signal responding to the change to the
            circuit.
            <img src="../img/images/sensors/image42.gif" class="img-responsive floating-image center"> <br>
            <br><br>

            <b>Reflectance configuration</b> <br>
            These types of sensors use the reflective property of IR. The emitter/transmitter emits an IR beam which is
            reflected by the object. The reflected IR is detected by the receiver. The object causes a change in the
            property of the reflected IR or the amount of IR received by the receiver varies. The degree of change is
            dependent on the reflectance of the object. Thus detecting the change in the amount of received IR helps in
            figuring out the properties of objects such as surface geography and reflectance. Below is a demonstration
            of the above configuration.
            <img src="../img/images/sensors/image29.png" class="img-responsive floating-image center"> <br>

            But how can the reflectance property of a surface help us? <br>
            <br><img src="../img/images/sensors/image45.gif" class="img-responsive floating-image right" width="350px">

            The reflectance property of a surface is responsible for the color of the surface. IR sensors can’t
            discriminate between different colors very accurately but they can discriminate between black and white
            accurately.
            <br>
            When IR is incident on a black surface or dark surface, most of the energy gets absorbed due to the very low
            reflectance of the surface. Thus, this configuration can be used to distinguish between black surfaces and
            other surfaces that have a good reflecting capacity.

            <br><br>


            <b>Applications</b><br>
            IR sensors find a wide variety of applications in various fields. Let’s take a look at a few of them.
            <u>Line Follower Robots</u> <br><br>
            In the line following robots, IR sensors detect the color of the surface underneath it and send a signal to
            the microcontroller or the main circuit which then makes decisions according to the algorithm set by the
            creator of the bot. <br>
            <img src="../img/images/sensors/image91.gif" class="img-responsive floating-image center">
            The IR is reflected to the module from the white surface around the black line. But IR radiation is absorbed
            completely by black color. There is no reflection of the IR radiation going back to the sensor module in
            black color.
            The project is available at <a href="https://www.instructables.com/How-to-Make-Line-Follower-Robot/">line
                follower robot</a> <br><br>

            <u>Item Counter</u> <br><br>
            Whenever an item obstructs the invisible line of IR radiation, the value of a stored variable in a
            computer/microcontroller is incremented. This is indicated by LEDs, seven-segment displays, and LCDs.
            Monitoring systems of large factories use these counters for counting products on conveyor belts.

            The project is available at <a href="https://www.instructables.com/Object-Counter-Using-IR/">Infrared Object
                Counter</a>
            <u>Burglar Alarm
            </u><br><br>
            The IR LED is fit on one side of the door frame and the photodiode on the other. The IR radiation emitted by
            the IR LED falls on the photodiode directly under normal circumstances. As soon as a person obstructs the IR
            path and triggers an alarm.
            <br><br>
            This mechanism is used extensively in security systems and is replicated on a smaller scale for smaller
            objects, such as exhibits in an exhibition.
            <br><br>
            The project is available at <a
                href="https://www.instructables.com/How-to-Make-IR-Security-Alarm-a-IR-Detector-Using-/">Infrared
                Burglar Alarm</a>
            <br><br>
            <div class="blogPageSubHeading">b. IR Proximity Sensor</div> <br><br>
            <br><img src="../img/images/sensors/image86.jpg" class="img-responsive floating-image right" width="350px">

            The photodiode receives the radiation emitted by the IR LED once reflected by the object. The closer the
            object, the higher will be the intensity of the incident radiation on the photodiode. This intensity is
            converted to voltage to determine the distance.

            Proximity sensors (marked by a red arrow) find use in touchscreen phones, among other devices. The display
            is disabled during calls so that even if the cheek makes contact with the touchscreen, there is no effect.
            You can see the same effect below.
            <br>
            <img src="../img/images/sensors/image59.gif" class="img-responsive floating-image center">
            <br><br>
            <div class="blogPageSubHeading">c. Sharp Sensor</div>
            <img src="../img/images/sensors/image3.png" class="img-responsive floating-image right" style="width:300px; height:300px;">
            <br>
            A sharp Distance sensor is used to detect the presence of nearby objects with the help of an IR transmitter
            and receiver. This sensor takes a continuous distance reading and reports the distance as an analog voltage
            that can be used to determine how close the nearest object is. These sensors are good for short-range
            detection i.e, from 10cm to 80cm.
            <img src="../img/images/sensors/image82.png" class="img-responsive floating-image center">
            <br><br>


            <b>Working</b> <br>
            A sharp sensor uses a beam of infrared light to reflect off an object to measure its distance. The distance
            is calculated using the <a
                href="https://insights.globalspec.com/article/6114/triangulation-and-light-barriers-the-basics#:~:text=When%20using%20the%20triangulation%20method,measured%20object%20and%20the%20detector.">triangulation
                of the beam of light</a>. The sensor consists of an IR LED and a light detector or PSD (<a
                href="https://en.wikipedia.org/wiki/Position_sensitive_device#:~:text=A%20position%20sensitive%20device%20and,dimensions%20on%20a%20sensor%20surface.">Position
                Sensing Device</a>.
            <img src="../img/images/sensors/image43.png" class="img-responsive floating-image center">

            When the beam of light gets reflected by an object, the reflected beam will reach the light detector and an
            ‘optical spot’ will form on the PSD.
            <img src="../img/images/sensors/image56.png" class="img-responsive floating-image right">

            Using simple geometry, the distance between sensor and object can be found. The figure on the right shows
            the difference between the distance of two points, A and B which can be seen as a change of angle thus a
            change of position of reflected light on PSD.
            The sensor has a built-in signal processing circuit. This circuit processes the position of the optical spot
            on the PSD to determine the position (distance) of the reflective object. It outputs an analog signal which
            depends on the position of the object in front of the sensor.
            <br><br>
            But why name a sharp sensor? Try to figure it out. Also, figure out why we require a sharp sensor if we
            already have an ultrasonic sensor for distance measurement.
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
<br><img src="../img/images/sensors/image46.png" class="img-responsive floating-image center" style="height:400px; width:400px;">
<br>We can see example of optical pyrometers which are used to detect temperature of furnaces, molten metals, and other overheated material or liquids is a non-contact temperature sensor which compares brightness of object to brightness of filament placed inside it.
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
         <img src="../img/images/sensors/image84.png" class="img-responsive floating-image left" style="width:250px; height:300px;"><br>
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
      
      <div class="blogPageHeading">MEMS</div> <br><br>
            What do you mean I am missing an ‘e’ in MEMS? Although they might sound similar but MEMS refer to
            <b><u>M</u>icro<u>E</u>lectro<u>M</u>echanical <u>S</u>ystems</b> . It is a miniature machine that has both mechanical and electronic components.
            A system comprising Electronic and mechanical components with size as small as possible. Can you believe that
            the physical dimension of a MEMS can range from less than a few micrometers to several millimeters, a dimension
            many times smaller than the width of a human hair?
            <img src="../img/images/sensors/image35.png" class="img-responsive floating-image center"> <br> <br>
            We’ll see some <strike>memes</strike> MEMS working in successive sensors.<br> <br>

            <div class="blogPageHeading">Balance, acceleration, and position sensors</div> <br><br>

            <div class="blogPageSubHeading">a. Accelerometer</div><br>

            Whenever you lie down on the bed with one side and use your phone and suddenly boom! Your phone rotates horizontally from vertical. Yeah,
            this sensor is the culprit for all that. But this is the very sensor that helps your phone to rotate to landscape when needed.
            <br>
            <img src="../img/images/sensors/image58.png" class="img-responsive floating-image left" width="250px">
            An accelerometer is an electronic sensor that measures the acceleration forces acting on an object, to determine the object’s position in
            space and monitor the object’s movement. An accelerometer measures the linear acceleration of movement and acceleration, which is a vector
            quantity, the rate of change of an object’s velocity. It is used in various devices to determine orientation.
            <img src="../img/images/sensors/image33.png" class="img-responsive floating-image right" width="250px"> <br> <br>
            &nbsp &nbsp &nbsp There are two types of acceleration forces: static forces and dynamic forces. Static forces are forces that are constantly
            being applied to the object (such as friction or gravity). Dynamic forces are “moving” forces applied to the object at
            various rates (such as vibration, or the force exerted on a cue ball in a game of pool). This is why accelerometers are
            used in automobile collision safety systems, for example. When a powerful dynamic force acts on a car, the accelerometer
            (sensing a rapid deceleration) sends an electronic signal to an embedded computer, which in turn deploys the airbags
            which is an excellent application of this sensor.<br><br>


            There are two common types of accelerometer:
            <br><br>
            <b>1. Piezoelectric accelerometer</b> <br>
            <img src="../img/images/sensors/image7.gif" class="img-responsive floating-image right"> <br>
            A piezoelectric accelerometer consists of a mass attached to a piezoelectric crystal which is mounted on a case. When the
            accelerometer body is subjected to vibration, the mass on the crystal remains undisturbed in space due to inertia. As a
            result, the mass compresses and stretches the piezoelectric crystal. This force is proportional to acceleration following
            Newton’s second law, F = ma, and generates a charge. The charge output is then converted into low impedance voltage output
            with the help of electronics.
            <br><br>
            <b>2. MEMS Accelerometer</b> <br><br>
            An accelerometer that uses MEMS to determine acceleration in given directions.The most common type of MEMS accelerometer is
            a capacitive type.<br><br>
            <b>Working</b><br><br>
            It measures acceleration by measuring the change in capacitance.It has a mass attached to a spring which is confined to
            move along one direction and fixed outer plates. So when an acceleration in a particular direction is applied the mass
            will move, and the capacitance between the plates and the mass will change. This change in capacitance will be measured,
            processed and it will correspond to a particular acceleration value.<br><br>
            <img src="../img/images/sensors/image71.gif" class="img-responsive floating-image center"> <br>
            MEMS accelerometers are widely used in portable electronic devices such as mobile phones (as we mentioned) and game
            controllers to determine the orientation of devices.<br>
            It is also used in UAVs (<b><u>U</b></u>nmanned <b><u>A</b></u>erial <b><u>V</b></u>ehicles) and drones to provide stabilization to drones in real-time which
            in turn aids in their flight.<br><br>
            <b>Analog vs Digital accelerometers</b><br><br>
            Analog accelerometers have an output that is a continuous voltage proportional to the acceleration. Digital accelerometers typically use pulse width modulation so that there is a square wave at a certain frequency. In this case, the period of high voltage is proportional to the amount of acceleration.
            On the digital accelerometer, measurement is done in the accelerometer itself. On the analog one, it is done at the MCU.
            For simple arrangements where the accelerometer is near the MCU that makes more susceptible to noise. With longer wires/traces between the accelerometer and the MCU, you can get less accurate results with an analog one since it picks up noise which you are then sampling and including in your results.
            One other main difference is that you are limited to the ADC that is in the digital accelerometer. If you want a different resolution you have to use a different accelerometer. With analog, since it has no inherent resolution, you sample at the resolution of your MCU's ADC.
            <img src="../img/images/sensors/image48.png" class="img-responsive floating-image left" width="450px"> <br><br><br><br>
            <img src="../img/images/sensors/image31.png" class="img-responsive floating-image right" width="450px"><br><br><br><br>

            <br><br><br><br><br><br><br><br><br><br>
            <div class="blogPageSubHeading">b. Gyroscopes</div><br>
            So, you see that an accelerometer is used to determine the orientation. We change the orientation once, our accelerometer will pick that change but what if I want to know that with what angular velocity, the orientation of my device is being changed.
            Accelerometer only provides me the data of changes in linear acceleration, how do I determine the angular position, velocity (the units of angular velocity are measured in degrees per second (°/s) or revolutions per second (RPS). Angular velocity is simply a measurement of the speed of rotation) and acceleration of my device? Gyroscopes are invented to serve this purpose.
            <br><br>
            Gyroscopes, or gyros, are devices that measure or maintain rotational motion.
            <br><br>
            <b>1. Mechanical Gyroscope</b>
            <img src="../img/images/sensors/image18.gif" class="img-responsive floating-image right" width="250px"> <br><br>
            The principle of a mechanical gyroscope is based on the gyroscopic effect.To understand what this effect is, we need a coin.
            No, credit cards won’t work, it’s not about capital guys.Now, take a coin to a plane surface and try to hit the coin with
            fingers to make it rotate on the surface like this, just like you did in your childhood.<br><br>
            You’ll observe that when the coin starts to rotate, it rotates on a steady axis perpendicular to the surface. The coin might change its position while rotating but it won’t fall flat until the speed of rotation isn’t enough to fight the friction of the surface.
            You’ll observe that coin was balancing itself. This tendency of our coin or any other rotating body to maintain a steady direction of its axis of rotation is known as a gyroscopic effect.
            <br><br><img src="../img/images/sensors/image5.png" class="img-responsive floating-image left">
            &nbsp &nbsp &nbsp Now, back to the mechanical gyros, it essentially consists of a spinning mass i.e rotor that rotates around its axis. In particular, when the mass is rotating on its axis, it tends to remain parallel to itself and to oppose any attempt to change its orientation. This mechanism was invented in 1852 by physicist Léon Foucault during his studies of the Earth’s rotation. If a gyroscope is installed on gimbals that allows the mass to navigate freely in the three directions of space, its spinning axis will remain oriented in the same direction, even if it changes direction.
            <br><br><br><br>
            <b>2. Vibration-based MEMS gyros</b><br><br>

            <br><img src="../img/images/sensors/image20.png" class="img-responsive floating-image left" width="400px">
            MEMS (microelectromechanical system) gyros are small, inexpensive sensors that measure angular velocity. It is the smaller electromechanical equivalent to a mechanical gyroscope. But how does a MEMS gyro detect angular velocity?
            The gyroscope measures angular rate using the Coriolis Effect. When a mass is moving in a particular direction with a particular velocity and when an external angular rate will be applied as shown with the green arrow a force will occur, as shown with the blue-red arrow, which will cause perpendicular displacement of the mass. So similar to the accelerometer, this displacement will cause a change in capacitance which will be measured, processed, and will correspond to a particular angular rate.
            <br><img src="../img/images/sensors/image51.gif" class="img-responsive floating-image right"><br>
            The microstructure of the gyroscope looks something like this. A mass that is constantly moving, or oscillating, and when the external angular rate will be applied a flexible part of the mass would move and make the perpendicular displacement.
            <br><br><img src="../img/images/sensors/image21.gif" class="img-responsive floating-image center"><br>
            <br><br><img src="../img/images/sensors/image49.png" class="img-responsive floating-image center"><br>
            <b>Applications</b><br><br>
            <br><br><img src="../img/images/sensors/image74.jpg" class="img-responsive floating-image center"><br>
            <div class="blogPageSubHeading">c. GPS</div><br>
            <img src="../img/images/sensors/image34.png" class="img-responsive floating-image right"><br>
            Earlier, travelers used stars to figure out their position on Earth. Now, you just need to enable the location services, open the map application on your
            smartphone, and within seconds, you have your location accurate within a few meters. But we still need objects high in the sky to figure out where we are
            and how we get to other places. Instead of stars, we use satellites. Over 30 navigation satellites are zipping around high above Earth. These satellites
            can tell us exactly where we are. This system of 30 satellites circling Earth is a crucial part of a GPS or Global Positioning System. GPS is a system
            of three parts: satellites, ground stations, and receivers.<br>
            <br><br><img src="../img/images/sensors/image23.png" class="img-responsive floating-image left"><br>
            &nbsp &nbsp &nbsp &nbsp Satellites equipped with high precision atomic clocks act like the stars in constellations—we know where satellites are supposed to be at any given time. These satellites broadcast signals constantly at the speed of light.
            The ground stations use radar to make sure satellites are actually where we think they are.
            And receivers in your mobile devices, trackers, cars receive the signal from those satellites.
            To determine the position on Earth, receivers receive the signals broadcasted by those satellites and records the signal arrival time, and calculate the distance between satellites and receiver using simple formula i.e.
            Distance = speed X time
            <br><img src="../img/images/sensors/image14.png" class="img-responsive floating-image right"><br>
            GPS works on the principle of trilateration. In trilateration, the position of an entity is determined with the help geometry of circles, spheres, or
            triangles. In GPS we use spheres to determine the real-time position.
            <br><br> &nbsp &nbsp &nbsp &nbsp After determining the distance of the device from the satellite, it is sure that a device must lie on the sphere of radius the same as the distance of the device from the satellite. Increase the number of spheres to at-least five (one being the Earth itself) and you have the location of your device.
            <br><br>As the number of satellites increases, the accuracy of your location increases that determines the longitude and latitude of your position. At each point in time, at least four such satellites cover every place on Earth that is sufficient enough to provide locations accurate within a few meters. With the help of the internet and map application, your location is presented in user-friendly UI rather than coordinates.
            <br><br>So, it ends with GPS and you know now where you are ¬‿¬
            We will soon come with our next and final blog which helps you to reach sky-high.
            Till then, keep learning kudos!


            <ul class="pager">
        <li class="previous"><a href="./SensorIntro.php">Previous</a></li>

        </ul>



    </div>
</div>




<?php include('footer-1.php') ?>

</html>
<?php include('header.php') ?>


<div class="headIcImage">
</div>
<div class="heading">
  More About IC's
</div>

<div class="page">
  <div class="blog-page">
    <br><br>
    <img src="../img/images/more-ic/image15.gif" class="img-responsive floating-image center" style="height:400px;width:650px;">  
    <br>

When you work with ICs, you need to know the difference between various ICs to ensure that you choose the correct IC you need for your work. When you take a look at these tiny black chips, you might find it back-breaking to differentiate them from the ICs lying around, or you might even wonder about what would happen if you put them in any orientation. What is the possible worst outcome that can happen? 
<br>
<img src="../img/images/more-ic/image16.gif" class="img-responsive floating-image right" style="height:150px;width:350px;">  
<br>  <br>
Well, as difficult as it might sound, you have to know the basic knowledge of ICs because placing ICs in their incorrect configuration can wreck your hardware!
<br>  <br>  

Before proceeding further, we suggest you take a brief look at this <a href="https://components101.com/sites/default/files/component_datasheet/L293D%20Datasheet.pdf">page.</a>
This is called a datasheet, and this is a datasheet of L293D Motor Driver IC (yep, ICs are generally named like that, but once you start using them, they are as easy to remember as your friend’s name!)
<br>
<img src="../img/images/more-ic/image9.png" class="img-responsive floating-image center">  	          
<br>                     
This diagram is called a pinout diagram and is arguably the most important diagram while using ICs. How this IC works is not something of our concern at the moment since you will be learning about it later, but our goal is to make you understand the significance of a datasheet. Take a datasheet as a reference tool for your IC. A datasheet contains all the schematics, the safe voltage ranges, where the internal components are kept, etc. 
<br> <br> 
And how do we read a datasheet? Refer to this <a href="https://www.sparkfun.com/tutorials/223">tutorial.</a>
<br> <br> 
Coming back to our topic of concern, let’s understand a bit more about ICs. Amongst many ICs lying around, how would you know which IC are you holding? The IC number is stamped on the IC itself. Check the naming and numbering below. 
<br> 
<img src="../img/images/more-ic/image10.jpg" class="img-responsive floating-image left" style="height:300px;width:300px;">   
<img src="../img/images/more-ic/image14.png" class="img-responsive floating-image left" style="height:300px;width:300px;">                    
<br> 
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
You’ve got your components and your datasheet, and you’re ready to start hacking.
<br>                   
<img src="../img/images/more-ic/image12.png" class="img-responsive floating-image center">  
<br />
But which way does the chip go? Where is Pin 23? If you’re lucky, the orientation is already marked, or perhaps diagrammed in the datasheet. But if it isn’t, or if you’re just new at this, it’s helpful to know what to look for. Notice the U shape notch at the top? Yes, with the help of this notch we can identify the correct position.
<br>The first pin is to the <b>left of the notch,</b> and the remaining PINs increase sequentially as you move <b>counterclockwise</b> around the chip. 

<br><br>
Now we know how to use IC’s in correct configuration in our circuits.
<br><br>

Before we move to the next section, have a look here. You all must have seen these processors in your laptops and computers or heard of them.
<br>
<img src="../img/images/more-ic/image5.png" class="img-responsive floating-image center">  
<br>
Have you ever wondered how many transistors is it made up of?
Can you count them? Well this question is as ridiculous as it sounds!
These small compact chips control your whole system. No wonder they are made up of billions of transistors.
<br><br>
And this number doesn't stop here. As the technology keeps developing, this number keeps increasing dramatically. That’s the glory of technology, every few years these ICs become more and more compact while the number of transistors keeps increasing. This brings us to the classification of these ICs based on the number of transistors.
<br><br>
<div class="blogPageHeading">Classification based on level of Integration</div>
<img src="../img/images/more-ic/image1.png" class="img-responsive floating-image center">  
<br> <br> 
<img src="../img/images/more-ic/image3.jpg" class="img-responsive floating-image left" style="height:300px;width:300px;">   
<img src="../img/images/more-ic/image4.jpg" class="img-responsive floating-image left" style="height:300px;width:300px;">  
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>  <br>
# The development of VLSI chips paved the way to the manufacturing of the first microprocessor, by the fabrication of a CPU on a single microchip.
 <br> <br> 
What do you think will be the number of transistors in your intel processor after 10 years? Can you guess? Well a very calculated guess was made to answer this question which we know as Moore’s law.
<br><br>
<div class="blogPageSubHeading">Moore’s Law:</div>
<br>
“As the technology keeps developing, this number keeps increasing dramatically.”, quoting lines given above in classification, did any of your inquisitive minds think of what rate these transistors increase? Well, there is an empirical relationship regarding this fact, called Moore's law(which is more like an observation),  put forth by the scientist Gordon Moore, stating that the number of components in a circuit roughly doubles every two years. 
<br>
<img src="../img/images/more-ic/image19.png" class="img-responsive floating-image center"> 
<div style="font-size:14px;color:#808080;">Transistors per Square Millimeter by Year, 1971–2018. Logarithmic scale. Data from Wikipedia. Chart by Eric Martin.</div>
<br>
So, what should be the effect of moore’s law on the price of the semiconductor chip we use today? How much smaller can the chips go? And how long is Moore's law gonna be valid?
<br>
Check out this debate. 
<br><br>
<div class="blogPageSubHeading">Let’s see classification of ICs on the basis of manufacturing:</div>
<br>
For manufacturing ICs, all the components, like transistors and wiring, are all built into a semiconductor wafer. How these ICs are formed determines the type.
<br><br><div class="blogPageSubHeading">Monolithic ICs:</div> A monolithic circuit is built into a single stone or single-crystal, i.e. in monolithic ICs, all circuit components are integrated on a single layer. 
<br><br><div class="blogPageSubHeading">Hybrid or multichip ICs:</div> As the name implies, the circuit is fabricated by interconnecting several individual chips. Hybrid ICs are widely used for high-power audio-amplifier applications from 5W to more than 50W.
<br>
<img src="../img/images/more-ic/image11.png" class="img-responsive floating-image center"> 
<br><br>
But this in not the only basis for classification of ICs, for reference ICs can also be <b>classified based the arrangement of pins :</b>
<br>
<br><div class="blogPageSubHeading">Single-in-line package:</div> A single row of pins protruding from the bottom of the body of the IC, numbering is done by holding the IC upwards and reading from left to right.
<img src="../img/images/more-ic/image17.jpg" class="img-responsive floating-image center">       
<br>
<br><div class="blogPageSubHeading">Dual-in-line package:</div> Two rows of pins protruding from the bottom of the IC’s body. Their numbering is done just like we saw earlier, it starts anticlockwise from notch. There is an exclusive space in the breadboard for DIL Packaging:
  <img src="../img/images/more-ic/image7.gif" class="img-responsive floating-image center">             
  <br>
<br><div class="blogPageSubHeading">Quad-flat package (mounted on the surface):</div> The pins splay on from all four directions. QFP ICs might have anywhere from eight pins per side (32 total) to upwards of seventy (300+ total). How is their naming done? They do have a notch too, and thus, we pick the first pin and move anticlockwise.
<br>                             
<br><div class="blogPageSubHeading">Ball Grid-array package:</div> (e.g microprocessors)
      
For really advanced ICs, there are Ball Grid Array (BGA) packages. These are amazingly intricate little packages where little solder balls are positioned in a 2-D grid on the bottom of the IC. Sometimes the solder balls are attached directly to the die! The numbering is done just like how positions are assigned in a cartesian coordinate system, along the horizontal axis, alphabetically, and numbers on the vertical axis. If the row is 1 and B column, then the pin is labelled as B1. These packages are generally used for advanced microprocessors, like the raspberry pi.

So how do we use these ICs? We mount them to our circuit boards. Do you know how these are mounted? IC’s are mounted mainly using two techniques:
<br> 
<br><div class="blogPageSubHeading">Through Hole Mounting:</div> There are holes in the boards, and in these holes, the pins of ICs are stuck in, and then soldered on the other side. Through hole mounting is more robust and is used in military equipment.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
<br> 
<img src="../img/images/more-ic/image7.gif" class="img-responsive floating-image center"> 
<br> 
<br><div class="blogPageSubHeading">Surface Mounting:</div> They are a bit difficult to mount, as they have to be soldered “on” the surface, and thus require some equipment.
<img src="../img/images/more-ic/image13.jpg" class="img-responsive floating-image center"> 
<br> 
                                    
 Above IC’s are permanently mounted, they can’t be replaced easily. What if we need different ICs 
  
 These ICs can either be permanently mounted, or can be mounted on a stand, and can be easily replaced.
  
 <br> 
 <br><div class="blogPageSubHeading">Based on whether they are programmable or non-programmable:</div>
 <br><div class="blogPageSubHeading">A programmable logic device (PLD)</div> It is an electronic component used to build reconfigurable digital circuits. These PLDs have undefined functions at the time of manufacture. Before the PLD can be used in a circuit, it must be programmed (reconfigured) by using a specialized program.
 <br>
 <br><div class="blogPageSubHeading">Non-Programmable Logic Devices:</div> The operation of these ICs cannot be configured by a program. The internal circuit design or “wiring” consists of logic gates and has a fixed function.
 
 <br>
 <br><div class="blogPageHeading">Naming and numbering of an IC:</div><br>
 
 Before jumping further, you should know a bit of IC Logic Families. A logic family refers to digital integrated circuit devices which are constructed with a combination of electronic gates. A family has its own power supply voltage and distinct logic levels.
 All IC chips have a two-part serial number. The first part of the serial number delineates the information of the manufacturer. The second part of the serial number indicates the technical specifications. 
 Many IC manufacturers produce identical chips with the same technical specifications. In the case of the serial number “MC74HC00", the “MC” field indicates the manufacturer Motorola and the “74HC00” field indicates that the chip is a Quad 2-input NAND gate IC. 
 
 Another naming convention for the 7400 Series ICs: 
   
    <img src="../img/images/more-ic/image8.png" class="img-responsive floating-image center">                      
                        
        
 SN - Manufacturer (Texas Electronics)
 74 Series - Shows the series the corresponding temperature range belongs to.
 HCT - The sub-family
 04 - Shows the device type. 
 
 But it should be noted that there is no global naming standard for naming ICs. The part or manufacturer details are provided so that they can be used for reference purposes. Not to mention, you can always google a series number to find its datasheet.
                 
 <img src="../img/images/more-ic/image6.png" class="img-responsive floating-image center" style="height:220px;width:500px;">  
 
 


    <br><br><br><br>

<ul class="pager">
        <li class="previous"><a href="./icmcuIntro.php">Previous</a></li>

            <li class="next"><a href="./diff-ic.php">Next</a></li>
        </ul>


  </div>
</div>

<?php include('footer-1.php') ?>  
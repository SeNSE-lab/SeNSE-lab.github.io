<!--
    IF YOU OPENED THIS IN ANYTHING BUT A PLAIN-TEXT EDITOR,
    CLOSE IT WITHOUT SAVING NOW.
-->

<?php
   require('/var/www/sites/mecheng/www/hartmann/test/scripts/pathvars.php');
   require($ROOTPATH . 'scripts/header.php');
?>
    <div class="content">
      <div class="box">
	<!-- I need a picture of you, sized 140 x 140 pixels. 
	     Please name it yourLastName_pic.png, and set the filename
             and alt text below. -->
	<?php
	   echo '<img width="140" src="';
           echo $ROOTURL . 'people/hobbs_pic.png';
	   echo '" alt="Jennifer Hobbs"/>'
	?>
      </div>
      
      <!-- Set your name, email address, title, and department -->
      <h2>Jennifer Hobbs</h2>
      <p><a href="mailto:jenniferhobbs2008 &lt;AT&gt; u.northwestern &lt;DOT&gt; edu">jenniferhobbs2008 &lt;AT&gt; u.northwestern &lt;DOT&gt; edu</a></p>
      <p>
	<b>Graduate Student</b><br />
	Physics and Astronomy<br />
	<br />
      </p>

      <!-- Set the title of your research here and write a blurb. Separate
	   paragraphs with <p> </p> tags. -->
      <h3>Current Research: Shape Detection and Perception in Rats</h3>
      <p>
	Possessing naturally limited eyesight, rats use their whiskers
	as a primary sensory mechanism to tactually detect the contours, 
	textures, and orientation of objects in their environment.  As a
	rat engages in &quot;whisking,&quot; mechanoreceptors in the
	whisker follicle send tactile information via the trigeminal 
	ganglion (Vg) to all subsequent stages of the brain.  This means
	that all of the tactile information about object shape that the
	rat has from its whiskers is represented in the spatiotemporal
	patterns of input across the vibrissal array. 
      </p>
      <div class="leftbox">
	<img width="140" src="lls.jpg" alt="Laser light sheet" />
      </div>
      <p>
	By using a laser light sheet, we aim to fully quantify the
	patterns of whisker-object contact during the rat's exploratory 
	behavior to determine the mechanical parameters associated with
	the extraction of object curvature.  As the rat's whiskers contact
	a flat or curved plane of glass, they are illuminated by the
	cascading infrared light from above.  These contact points are
	then detected by a high-speed camera and analyzed for contact 
	pattern, timing, and the corresponding force and torque 
	experienced at the base of the whisker.
      </p>

      <!-- Needs some space so the picture doesn't run off the page... -->
      <br class="clear" />
      <br class="clear" />
      <br class="clear" />
      <br class="clear" />
      
    </div>
    
<?php
   require($ROOTPATH . 'scripts/footer.php');
 ?>

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
           echo $ROOTURL . 'people/schroeder_pic.png';
	   echo '" alt="Chris Schroeder"/>'
	?>
      </div>
      
      <!-- Set your name, email address, title, and department -->
      <h2>Chris Schroeder</h2>
      <p><a href="mailto:c.schro &lt;AT&gt; u.northwestern &lt;DOT&gt; edu">c.schro &lt;AT&gt; u.northwestern &lt;DOT&gt; edu</a></p>
      <p>
	<b>PhD Candidate</b><br />
	Biomedical Engineering<br />
	<br />
      </p>

      <!-- Set the title of your research here and write a blurb. Separate
	   paragraphs with <p> </p> tags. -->
      <h3>Current Research: An Analysis of the Dynamic and Kinematic Variables Encoded by Rat Trigeminal Ganglion Neurons</h3>
      <p>
	The rat vibrissal-trigeminal pathway is a commonly-used model system
	to study how tactile perceptions are generated during active sensing
	behaviors. Numerous behavioral and electrophysiological experiments 
	have shown that rats are capable of determining whether an object is
	present, the distance to an object, an object's shape or orientation,
	and an object's texture using only their whiskers. 
      </p>
      <p>
	The sensory pathway for whisker (tactile) sensation in the rat begins
	at the follicle and ultimately arrives at the cortex. Mechanoreceptors
	in the whisker follicle transduce some combination of moments, forces,
	whisker rotations, and their derivatives into neural spikes in the
	trigeminal ganglion (Vg). Vg responses move to the trigeminal nuclei
	in the brainstem, where receptive fields and lateral inhibition can
	be found. The thalamus and primary somatosensory cortex are involved 
	in higher level processing. Each of these structures can be studied
	to elucidate sensory mechanisms, but meaningful conclusions are 
	difficult because the input to this system is not fully known.
	Though there are many prior studies of Vg response, most experiments
	have been performed in anesthetized rats, or rats made to artificially
	whisk. The ganglion response in awake, naturally whisking rats has
	not been sufficiently studied.
      </p>
      <p>
	The objective of this work is to determine which dynamic and 
	kinematic variables are preferentially encoded by the trigeminal 
	ganglion of the rat, based on an analysis of the mechanics of the
	rat whisker during awake whisking and neural recordings from the
	ganglion. Defining which variables the awake rat finds to be
	important could address questions such as how the rat extracts
	information about an object, why stereotyped head and body
	movements occur, and even what type of information higher order
	brain structures are primed to process. 
      </p>
    </div>
    
<?php
   require($ROOTPATH . 'scripts/footer.php');
 ?>

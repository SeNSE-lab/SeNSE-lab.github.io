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
           echo $ROOTURL . 'people/huet_pic.png';
	   echo '" alt="Lucie Huet"/>'
	?>
      </div>
      
      <!-- Set your name, email address, title, and department -->
      <h2>Lucie Huet</h2>
      <p><a href="mailto:lahuet &lt;AT&gt; u.northwestern &lt;DOT&gt; edu">lahuet &lt;AT&gt; u.northwestern &lt;DOT&gt; edu</a></p>
      <p>
	<b>Graduate Student</b><br />
	Mechanical Engineering<br />
	<br />
      </p>

      <!-- Set the title of your research here and write a blurb. Separate
	   paragraphs with <p> </p> tags. -->
      <h3>Current Research: Dynamic Behavior of Rat Whiskers</h3>
      <p>
	Rats rely heavily on their whiskers, or vibrissae, for exploration
	and navigation.  By calculating the forces and moments experienced 
	at the base of each whisker, we can determine the exact inputs to
	the rat's vibrissal sensory system.  This project aims to create a 
	dynamic model of the rat's whiskers that can simulate the rat 
	whiskers &quot;whisking&quot; into or colliding with an object and
	then calculate the reaction forces and moments at the whisker bases.
	Later, in a process reversal, these results can be analyzed to 
	determine the shape of the encountered object.  In the end, by
	constructing artificial whiskers with strain gauge sensors at 
	the bases, we can create a whole new tactile sensory system for
	robotics.
      </p>
    </div>
    
<?php
   require($ROOTPATH . 'scripts/footer.php');
 ?>

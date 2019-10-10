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
           echo $ROOTURL . 'people/locascio_pic.png';
	   echo '" alt="Mark Locascio"/>'
	?>
      </div>
      
      <!-- Set your name, email address, title, and department -->
      <h2>Mark Locascio</h2>
      <p><a href="mailto:locascio &lt;AT&gt; u.northwestern &lt;DOT&gt; edu">locascio &lt;AT&gt; u.northwestern &lt;DOT&gt; edu</a></p>
      <p>
	<b>PhD Candidate</b><br />
	Mechanical Engineering<br />
	<br />
      </p>

      <!-- Set the title of your research here and write a blurb. Separate
	   paragraphs with <p> </p> tags. -->
      <h3>Current Research: A Reflexive Controller for Robotic Bipedal Locomotion</h3>
      <p>
	Wheeled and tracked robots are very well suited for many tasks.
	The Mars rovers, Spirit and Opportunity, have been extremely
	successful in a very unforgiving environment. However, wheeled
	robots would not necessarily be successful in an environment
	dominated by humans. Stairs, narrow doorways, and other obstacles
	are only navigable via bipedal locomotion.
      </p>
      <p>
	Unfortunately, the current state-of-the-art biped robots have
	several drawbacks. The methods used to maintain a stable gait
	tend to overconstrain their motion. As a result, bipeds like
	Honda's ASIMO and Sony's QRIO walk with an unnaturally slow,
	shuffling gait.
      </p>
      <p>
	The Hartmann lab has developed a novel walking controller which
	does not require these constraints, but rather takes a machine 
	learning approach to walking. In this way, controllers are trained
	to deal with rugged terrain, sensor error, etc. The result is
	a biped which is insensitive to perturbations, yet still
	exhibits a very natural-looking gait.
      </p>
    </div>
    
<?php
   require($ROOTPATH . 'scripts/footer.php');
 ?>

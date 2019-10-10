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
           echo $ROOTURL . 'people/quist_pic.png';
	   echo '" alt="Brian Quist"/>'
	?>
      </div>
      
      <!-- Set your name, email address, title, and department -->
      <h2>Brian Quist</h2>
      <p><a href="mailto:BrianQuist2008 &lt;AT&gt; u.northwestern &lt;DOT&gt; edu">BrianQuist2008 &lt;AT&gt; u.northwestern &lt;DOT&gt; edu</a></p>
      <p>
	<b>PhD Candidate</b><br />
	Biomedical Engineering<br />
	<br />
      </p>

      <!-- Set the title of your research here and write a blurb. Separate
	   paragraphs with <p> </p> tags. -->
      
      <h3>Current Research: Biomechanics of the Rat Vibrissae</h3>
      <p>
	The rat vibrissal system serves as an ideal model toward
	understanding somatosensory processing and active touch. Rats 
	actively control the movement of their vibrissae (whiskers), and
	can use the specialized hairs to determine object features, such
	as location, shape, and texture. 
      </p>
      <p>
	The biomechanics of the vibrissae are the critical link between
	the rat's physical environment and its internal representation
	of touch. Whisker-object contact causes bending of the whisker
	that leads to deformation of mechanoreceptors at the whisker 
	base, which ultimately convert the mechanical energy to a neural
	code. Vibrissal mechanics, therefore, are the &quot;window&quot;
	through which the rat is tactilely experiencing its world. 
      </p>
      <p>
	My research is focused on accurately modeling vibrissal mechanics,
	and, in doing so, to determine the entire mechanical input to
	the vibrissal system. This has included quasi-static whisker
	modeling, dynamic whisker modeling, and models of the complete
	vibrissal 3D architecture.
      </p>
    </div>
    
<?php
   require($ROOTPATH . 'scripts/footer.php');
 ?>

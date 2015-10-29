<?php
// Assign Value
$employee1 = 'Sally Meyers';
$employee2 = 'George Smith';
$employee3 = 'Peter Hengel';
?>

<html>
<head>
	<title>Lesson 6a</title>
	<style>
		ul li {
			list-style-type: none;
		}
	</style>
</head>
<body>
	<h1>Employee List</h1>
	<p><?php echo $employee1; ?></p>
	<p><?php echo $employee2; ?></p>
	<p><?php echo date('c'); ?></p>
	<p><?php echo date('m/d/Y'); ?></p>
	<p><?php echo date('l, F n, Y'); ?></p>
	<p><?php echo date('l ga'); ?></p>
	<p>
		<?php 
			echo date('c') . '<br />';
			echo date('m/d/Y') . '<br />';
			echo date('l, F n, Y') . '<br />';
			echo date('l ga') . '<br />';
			echo date('h:i a') . '<br />';
			echo date('l, F j, Y') . '<br />';
		?>
	</p>
	<p>
		<?php
			echo date('l, F j, Y', strtotime('12/5/2011')) . '<br />';
			echo date('l, F j, Y', strtotime('yesterday', strtotime('12/5/2011'))) . '<br />';
			echo date('l, F j, Y', strtotime('yesterday')) . '<br />';
			echo date('l, F j, Y', strtotime('now')) . '<br />';
			echo date('l, F j, Y', strtotime('Dec 5 2011')) . '<br />';
			echo date('l, F j, Y', strtotime('+4 hours')) . '<br />';
			echo date('l, F j, Y', strtotime('+1 week')) . '<br />';
			echo date('l, F j, Y', strtotime('+2 weeks 1 day 4 hours 10 seconds')) . '<br />';
			echo date('l, F j, Y', strtotime('next Tuesday')) . '<br />';
			echo date('l, F j, Y', strtotime('last Monday')); 
		?>
	</p>
	

	<!--============================-->
	<!--$_POST method-->
	<!--============================-->

	<form action='getMethod.php' method='post'>
		<label for='nama'>User Name:</label><br />
		<input type='text' id='nama' name='nama' /><br />
		<label for='katakunci'>Password</label><br />
		<input type='text' name='katakunci' /><br />
		<button type='submit'>Submit</button>
	</form>
	
	
	<!--============================-->
	<!--ternary operator-->
	<!--============================-->

	<?php

		$gender = 'F';
		echo ($gender == 'M') ? 'Man' : 'Woman';

	?>
	

	<!--============================-->
	<!--OR (||)statements-->
	<!--============================-->

	<p>
		Looks! The news says: 
	</p>

	<?php

		$weather = 'freezing';

		if ($weather == 'snowing' OR $weather == 'sleeting' OR $weather == 'raining') {
		echo '<p>Something is falling from the sky.</p>';
		} elseif ($weather == 'sunny' OR $weather == 'partly sunny') {
		echo '<p>I need my sunglasses.</p>';
		} else {
		echo '<p>The weather is ' . $weather .'.</p>';
		}

	?>

	<p>
		Looks! The news says: 
	</p>

	<?php

		$weather = 'partly sunny';

		if ($weather == 'snowing' || $weather == 'sleeting' || $weather == 'raining') {
		echo '<p>Something is falling from the sky.</p>';
		} elseif ($weather == 'sunny' || $weather == 'partly sunny') {
		echo '<p>I need my sunglasses.</p>';
		} else {
		echo '<p>The weather is ' . $weather .'.</p>';
		}

	?>
	

	<!--============================-->
	<!--AND (&&) statements-->
	<!--============================-->

	<?php 

		$author = 'Dodie Smith';
		$title = 'I Capture the Castle';

		if ($author == 'Dodie Smith' AND $title == 'I Capture the Castle') {
		echo '<p>Found the book.</p>';
		} else {
		echo '<p>$title by $author is the wrong book.</p>';
		}

	?>

	<?php 

		$author = 'Dodie Smith';
		$title = 'I Capture the Castle';

		if ($author == 'Dodie Smith' && $title == 'I Capture the Castle') {
		echo '<p>Found the book.</p>';
		} else {
		echo '<p>$title by $author is the wrong book.</p>';
		}

	?>


	<!--============================-->
	<!--NOT (negate) statements-->
	<!--============================-->

	<?php 

		$weather = 'sunny';

		if (!($weather == 'rainy')) {
		echo '<p>Put away your umbrella.</p>';
		} else {
		echo '<p>It’s raining!</p>';
		}

	?>


	<!--============================-->
	<!--SWITCH statements-->
	<!--============================-->

	<?php

		$weather = 'stormy';

		switch ($weather) {
		case 'rainy':
		echo '<p>It will be rainy today. Use your umbrella.</p>';
		break;

		case 'sunny':
		echo '<p>It will be sunny today. Wear your sunglasses.</p>';
		break;

		case 'snowy':
		echo '<p>It will be snowy today. Bring your shovel.</p>';
		break;

		default:
		echo '<p>I don’t know what the weather is doing today.</p>';
		}

	?>


	<!--============================================-->
	<!--Alternative statements -->
	<!--Alternative statements (colon and endif)-->
	<!--============================================-->

	<?php 

		$weather = 'sunny';

		if (!($weather == 'rainy')) :
			echo '<p>Put away your umbrella.</p>';
		else :
			echo '<p>It’s raining!</p>';
		endif;

	?>
	

	<!--============================================-->
	<!--Alternative statements -->
	<!--Alternative statements (colon and endswitch)-->
	<!--============================================-->

	<?php

		$weather = 'stormy';

		switch ($weather) :
		case 'rainy':
		echo '<p>It will be rainy today. Use your umbrella.</p>';
		break;

		case 'sunny':
		echo '<p>It will be sunny today. Wear your sunglasses.</p>';
		break;

		case 'snowy':
		echo '<p>It will be snowy today. Bring your shovel.</p>';
		break;

		default:
		echo '<p>I don’t know what the weather is doing today.</p>';
		endswitch;

	?>
	

	<!--============================-->
	<!--REPEATING STEPS
		for (init; condition; increment) :
			lines of code here;
			as many as you need;
		endfor;-->
	<!--============================-->

	<?php
		for ($i = 0; $i <= 8; $i++) :
			echo "<p>The processed number are $i.</p>";
		endfor;
	?>
	

	<!--==================================================-->
	<!--lists out the contacts in the array-->
	<!--refactoring using for (init; condition; increment)-->
	<!--==================================================-->

	<h1>Contacts</h1>
	<?php

		$contacts = array(
			array('name' => 'George Smith', 'email' => 'george@example.com', 'phone' => '555-555-1212'),
			array('name' => 'Sally Carpenter', 'email' => 'sally@example.com', 'phone' => '555-555-1212'),
			array('name' => 'Peter Jason', 'email' => 'peter@example.com', 'phone' => '555-555-1212'),
			array('name' => 'Lila Carhausen', 'email' => 'lila@example.com', 'phone' => '555-555-1212')
		);

	?>

	<!--=========-->
	<!--sample 01-->
	<!--=========-->
	<ol>
	<?php for ($i=0, $size=count($contacts); $i < $size; $i++) : ?>
		<li>
			<?php echo $contacts[$i]['name']; ?><br />
			<?php echo $contacts[$i]['email']; ?>
		</li>
	<?php endfor; ?>
	</ol>
	
	<ol>
	<?php for ($i=0, $size=count($contacts); $i < $size; $i++) : ?>
		<li>
			<?php echo $contacts[$i]['name'] .' - ' ;?>
			<?php echo $contacts[$i]['email']; ?>
		</li>
	<?php endfor; ?>
	</ol>
	

	<!--=========-->
	<!--sample 02a-->
	<!--=========-->
	<ol>
	<?php foreach ($contacts as $contact): ?>
		<li>
			<?php echo $contact['name'] .'<br/>';?>
			<?php echo $contact['email'] .'<br/>'; ?>
			<?php echo $contact['phone']; ?>
		</li>
	<?php endforeach; ?>
			
	</ol>
	

	<!--=======================-->
	<!--sample 02b $key=>$value-->
	<!--=======================-->
	<ul>
	<?php foreach ($contact as $key=>$value): ?>
		<li>
			<?php echo ucfirst($key) .': '; ?>
			<?php echo ($value); ?>
		</li>
	<?php endforeach; ?>
	</ul>


	<!--=======================-->
	<!--sample 02c $key=>$value-->
	<!--=======================-->
	<?php

	$myArr = array('name' => 'George Smith', 'email' => 'george@example.com', 'phone' => '555-555-1212');

	?>

	<ul>
	<?php foreach ($myArr as $key=>$value): ?>
		<li>
			<?php echo ucfirst($key) .': '; ?>
			<?php echo ($value); ?>
		</li>
	<?php endforeach; ?>
	</ul>


	<!--=========================================-->
	<!--sample 02d $key=>$value with skipping key-->
	<!--=========================================-->
	<?php

	$myArr = array('name' => 'George Smith', 'email' => 'george@example.com', 'phone' => '555-555-1212');

	?>

	<ul>
	<?php foreach ($myArr as $key=>$value): ?>

		<?php if ($key == 'email'): ?>
			<?php continue; ?>
		<?php endif; ?>

		<li>
			<?php echo ucfirst($key) .': '; ?>
			<?php echo ($value); ?>
		</li>
	<?php endforeach; ?>
	</ul>

	<!--============================-->
	<!--create FUNCTION-->
	<!--============================-->

	<?php 
		function getName() {
			$name = "Gema Buj";
			echo $name;
		}
	?>

	<h2>Calling getName function: </h2>
	<p><?php getName(); ?></p>


	<!--============================-->
	<!--STATIC VARIABLE on FUNCTION-->
	<!--============================-->

	<?php
		function countStatic() {
			static $count;
			$count++;
			echo 'Count: ' . $count. '<br />';
		}
	?>
	<h1>Count</h1>
	<p>
		<?php 
			for ($i=0; $i < 5; $i++) :
			countStatic();
			endfor; 
		?>
	</p>


	<!--===============================-->
	<!--NON STATIC VARIABLE on FUNCTION-->
	<!--===============================-->

	<?php
		function NonStatic() {
			$count++;
			echo 'Count: ' . $count. '<br />';
		}
	?>
	<h1>Count</h1>
	<p>
		<?php 
			for ($i=0; $i < 5; $i++) :
			NonStatic();
			endfor; 
		?>
	</p>


	
	<!--===============================-->
	<!--PASSING PARAMETERS on FUNCTION-->
	<!--===============================-->
	
	<?php 
		function callName($name){
			echo $name;
		}
	?>

	<h1>Calling Names: </h1>
	<p><?php callName("Sally Margaret"); ?></p>
	<p><?php callName("Baby Margaret"); ?></p>



	<!--==========================================-->
	<!--PASSING PARAMETERS as VARIABLE on FUNCTION-->
	<!--==========================================-->
	
	<?php 
		function jojoName($name){
			echo $name;
		}
	?>

	<?php 
		$name1 = "Kujo Joestar";
		$name2 = "Jotaro Joestar";
	?>

	<h1>Calling Names: </h1>
	<p><?php jojoName($name1); ?></p>
	<p><?php jojoName($name2); ?></p>



	<!--================================================-->
	<!--PASSING MULTI PARAMETERS as VARIABLE on FUNCTION-->
	<!--================================================-->




	<!--================================================-->
	<!--CHAPTER 11 FORMS with LEGENDS-->
	<!--================================================-->
	<!--==============-->
	<!--radio-button-->
	<!--==============-->

	<fieldset>
		<legend>What is your gender?</legend>
		<input type='radio' id='genderf' name='gender' value='f' checked='checked'/>
		<label for='genderf'> Female</label>
		<input type='radio' id='genderm' name='gender' value='m'/>
		<label for='genderm'> Male</label>
		<input type='radio' id='shemale' name='gender' value='sh'/>
		<label for='shemale'>Shemale</label>
	</fieldset>

	<!--==============-->
	<!--checkbox-->
	<!--==============-->
	
	<fieldset>
		<legend>What OS did you use?</legend>
		<input type="checkbox" id="computerpc" name="computer" value="pc">
		<label for="computerpc">Windows</label>
		<input type="checkbox" id="computermac" name="computer" value="mac">
		<label for="computermac">Mac</label>
		<input type="checkbox" id="computerlinux" name="computer" value="linux">
		<label for="computerlinux">Linux</label>
	</fieldset>
	
	<!--==============-->
	<!--levels-->
	<!--==============-->

	<fieldset>
		<legend>What level are you?</legend>
		<select id="level" name="level">
			<option value="">Select a representative level</option>
			<option value="diamond">Diamond</option>
			<option value="corrundum">Corrundum</option>
			<option value="quartz">Quartz</option>
		</select>
	</fieldset>

	<!--==============-->
	<!--forms-->
	<!--==============-->
	<form action="form.php" method="post">
		<fieldset>
			<legend>We need to know you better!</legend>
			<label for="fullname" value="Name"> Name</label>
			<input type="text" id="fullname" name="fullname"/>
			<input type="submit" value="Submit My Name" name="contactForm"/>
		</fieldset>
	</form>

	

	<!--=================-->
	<!--long single forms-->
	<!--=================-->

	<form action="form-complete.php" method="get">
		<fieldset>
			<ul>
					<li>
						<legend>We need to know you better, honestly!</legend>
						<label for="fullname" value="Insert Name"></label>
						<input type="text" id="fullname" name="fullname"/>
						<input type="submit" value="Submit My Name" name="contactForm"/>
					</li>
					<hr>
					<li>
						<legend>What is your gender (for research purpose only)?</legend>
						<input type='radio' id='genderf' name='gender' value='Female' checked='checked'/>
						<label for='genderf'> Female</label>
						<input type='radio' id='genderm' name='gender' value='Male'/>
						<label for='genderm'> Male</label>
						<input type='radio' id='shemale' name='gender' value='Shemale'/>
						<label for='shemale'>Shemale</label>
					</li>
					<hr>
					<li>
						<legend>What OS did you use?</legend>
						<input type="checkbox" id="computerpc" name="computers[]" value="Windows">
						<label for="computerpc">Windows</label>
						<input type="checkbox" id="computermac" name="computers[]" value="Mac">
						<label for="computermac">Mac</label>
						<input type="checkbox" id="computerlinux" name="computers[]" value="Linux">
						<label for="computerlinux">Linux</label>
					</li>
					<hr>
					<li>
						<legend>What level are you?</legend>
						<select id="level" name="level">
							<option value="">Select a representative level(s)</option>
							<option value="diamond">Diamonds</option>
							<option value="corrundum">Corrundums</option>
							<option value="quartz">Quartzes</option>
						</select>
					</li>
			</ul>
			<input type='submit' value='Beam my data up, Scotty!' name='contactForm' />
			<input type='reset' value='Reset all data' />
		</fieldset>
	</form>

	
</body>
</html>
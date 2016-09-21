<?php
	$most_enjoy = ( isset($_POST['most_enjoy']) ) ? $_POST['most_enjoy'] : false;
	$want_improve = ( isset($_POST['want_improve']) ) ? $_POST['want_improve'] : false;
	$want_to = ( isset($_POST['want_to']) ) ? $_POST['want_to'] : false; ?>

<form id="formideal" action="email.php" method="post">
	<div id="formstore">
		<div class="blk_most_enjoy">
			<h2>Find your ideal course:</h2>
				<legend>I most enjoy</legend>
				<label class="radio"><input type="radio" name="most_enjoy" id="being_operational" value="Diploma of Business"><span class="outer"><span class="inner"></span></span>Being operational</label>
				<label class="radio"><input type="radio" name="most_enjoy" id="being_leader" value="Diploma of Leadership & Management"><span class="outer"><span class="inner"></span></span>Being a leader</label>
				<label class="radio"><input type="radio" name="most_enjoy" id="being_creative" value="Diploma of Marketing"><span class="outer"><span class="inner"></span></span>Being creative</label>
				<label class="radio"><input type="radio" name="most_enjoy" id="being_organised" value="Diploma of Project Management"><span class="outer"><span class="inner"></span></span>Being organised</label>
		</div>
		<div class="blk_want_improve">
			<h2>Find your ideal course:</h2>
				<legend>I want to improve</legend>
				<label class="radio"><input type="radio" name="want_improve" id="experience" value="Diploma of Business"><span class="outer"><span class="inner"></span></span>Experience</label>
				<label class="radio"><input type="radio" name="want_improve" id="working_people" value="Diploma of Leadership & Management"><span class="outer"><span class="inner"></span></span>Working with people</label>
				<label class="radio"><input type="radio" name="want_improve" id="time_management" value="Diploma of Project Management"><span class="outer"><span class="inner"></span></span>Time management</label>
				<label class="radio"><input type="radio" name="want_improve" id="problem_solving" value="Diploma of Marketing"><span class="outer"><span class="inner"></span></span>Problem solving</label>
		</div>
		<div class="blk_want_to">
			<h2>Find your ideal course:</h2>
				<legend>I want to...</legend>
				<label class="radio"><input type="radio" name="want_to" id="clarify_goals" value="Diploma of Business"><span class="outer"><span class="inner"></span></span>Clarify my business goals</label>
				<label class="radio"><input type="radio" name="want_to" id="support_individuals" value="Diploma of Leadership & Management"><span class="outer"><span class="inner"></span></span>Support individuals in a team</label>
				<label class="radio"><input type="radio" name="want_to" id="embrance_criativity" value="Diploma of Marketing"><span class="outer"><span class="inner"></span></span>Embrance my creativity</label>
				<label class="radio"><input type="radio" name="want_to" id="master_project" value="Diploma of Project Management"><span class="outer"><span class="inner"></span></span>Master project based work across any industry</label>
		</div>
		<div class="blk_main_form">
			<h3>Congratulations!</h3>
			<div class="ideal_for_you">
				<h4>Ideal for you:</h4>
				<!--/* Diplomas -->
				<div class="blk_diplomas">
					<div id="diploma_pm">Diploma of Project Management</div>
					<div id="diploma_business">Diploma of Business</div>
					<div id="diploma_marketing">Diploma of Marketing</div>
					<div id="diploma_ls_man">Diploma of Leadership & Management</div>
				</div>
			</div>
			<!--/* Form -->
			<label for="name">Name</label>
			<input type="text" id="name" name="name">
			<label for="email">Email</label>
			<input type="text" id="email" name="email">
			<label for="phone">Phone</label>
			<input type="text" id="phone" name="phone">
			<div class="check_accept">
				<label class="ip_check">
					<input type="checkbox" class="checkbox" id="accept" name="accept">
					<span class="outer"><span class="inner"></span></span>I accept that I will be contacted by an Entamio representative with the purpose of discussing education options, coaching and/or career planning.
				</label>
				<div class="blk-submit">
					<div class="ipt-submit">
						<span class="spa-loader">
							<div class="la-ball-clip-rotate">
								<div></div>
							</div>
						</span>
						<input type="submit" value="Upskil." name="submit" id="submit">
					</div>
				</div>
			</div>
		</div>
		<div class="msg_contact">
			<h2>Thank you for your enquiry with Entamio Education Group.</h2>
			<h2>One of our friendly team members will be in touch shortly.</h2>
		</div>
	</div>
</form>

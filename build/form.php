	<form id="formstore" action="email.php" method="post">

		<legend>I most enjoy</legend>
		<input type="radio" name="most_enjoy" id="being_operational" value="being_operational"><label for="being_operational">Being operational</label><br>
		<input type="radio" name="most_enjoy" id="being_leader" value="being_leader"><label for="being_leader">Being a leader</label><br>
		<input type="radio" name="most_enjoy" id="being_creative" value="being_creative"><label for="being_creative">Being creative</label><br>
		<input type="radio" name="most_enjoy" id="being_organised" value="being_organised"><label for="being_organised">Being organised</label><br>

		<legend>I want to improve</legend>
		<input type="radio" name="want_improve" id="experience" value="experience"><label for="experience">Experience</label><br>
		<input type="radio" name="want_improve" id="working_people" value="working_people"><label for="working_people">Working with people</label><br>
		<input type="radio" name="want_improve" id="time_management" value="time_management"><label for="time_management">Time management</label><br>
		<input type="radio" name="want_improve" id="problem_solving" value="problem_solving"><label for="problem_solving">Problem solving</label><br>

		<legend>I want to...</legend>
		<input type="radio" name="want_to" id="clarify_goals" value="clarify_goals"><label for="clarify_goals">Clarify my business goals</label><br>
		<input type="radio" name="want_to" id="support_individuals" value="support_individuals"><label for="support_individuals">Support individuals in a team</label><br>
		<input type="radio" name="want_to" id="embrance_criativity" value="embrance_criativity"><label for="embrance_criativity">Embrance my creativity</label><br>
		<input type="radio" name="want_to" id="master_project" value="master_project"><label for="master_project">Master project based work across any industry</label><br>

		<!--/* Diplomas -->
		<div id="diploma_pm">Diploma of Project Management</div>
		<div id="diploma_business">Diploma of Business</div>
		<div id="diploma_marketing">Diploma of Marketing</div>
		<div id="diploma_ls_man">Diploma of Leadership & Management</div>

		<!--/* Form -->
		<label for="name">Name</label>
		<input type="text" id="name" name="name">
		<label for="email">Email</label>
		<input type="text" id="email" name="email">
		<label for="phone">Phone</label>
		<input type="text" id="phone" name="phone">
		<div class="check_accept">
			<label for="accept">
				I accept that I will be contacted by an Entamio representative with the purpose of discussing education options, coaching and/or career planning.
				<input type="checkbox" class="checkbox" id="accept" name="accept">
				<div class="switchthree switchthreeOn"></div>
			</label>
		</div>
		<div class="blk-submit">
			<div class="ipt-submit">
				<span class="spa-loader">
					<div class="la-ball-clip-rotate la-sm">
						<div></div>
					</div>
				</span>
				<input type="submit" value="submit" name="submit" id="submit">
			</div>
		</div>
		<div class="msg-contact">We are going to keep in touch soon. Thank you!!</div>
		<input type="button" value="localStorageTest" name="localStorageTest" id="localStorageTest">
	</form>

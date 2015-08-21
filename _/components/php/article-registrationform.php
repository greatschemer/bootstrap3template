<article class="registrationform">
	<h2>Registration form</h2>
	<p>We're not currently taking registrations for the Roux Academy Conference, but if you want to be placed into our mailing list for more information, please complete the form below.</p>

	<form class="registration form-horizontal col-lg-12" action="#">

	  <fieldset id="personalinfo">
		<div class="form-group">
			<legend class="col">Personal Info</legend>
		</div>
		<div class="form-group">
			<label for="myname" class="col-lg-4 control-label">Name</label>
			<div class="controls col-lg-8">
				<input class="form-control" type="text" name="myname" id="myname" autofocus placeholder="Last, First" required>
			</div>	
		</div>
		<div class="form-group">
			<label for="companyname" class="col-lg-4 control-label">Company Name</label>
			<div class="controls col-lg-8">
				<input class="form-control" type="text" name="companybname" id="companyname" />
			</div>
		</div>
		<div class="form-group">
			<label for="myemail" class="col-lg-4 control-label">Email</label>
			<div class="controls col-lg-8">
				<input class="form-control" type="email" name="myemail" id="myemail" required autocomplete="off" />
			</div>
		</div>
	
	  </fieldset><!-- personal info -->
		
	  <fieldset id="otherinfo">
	  		<div class="form-group">
	  			<legend>Other Info</legend>
	  		</div>
			<div class="form-group">
				<label  class="col-lg-4 control-label">Request Type</label>
				<div class="col-lg-8">
					<div class="radio">
						<label>
							<input type="radio" name="requesttype" value="question" /> Question
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="requesttype" value="comment" /> Comment
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-lg-4 control-label">Subscribe</label>
				<div class="col-lg-8">
				  	<div class="checkbox">
				  		<label>
							<input type="checkbox" id="subscribe" name="subscribe" CHECKED value="yes" />
							Would you like to subscribe to our e-mail list?
						</label>
				  	</div>
			  	</div>	
			</div>
		  	<div class="form-group">
		  		<label  class="col-lg-4 control-label" for="reference">How did you hear about the Roux Academy Conference?</label>
		  		<div class="col-lg-8">
		  			<select class="form-control"   name="reference" id="reference">
						<option>Choose...</option>
						<option value="friend">A friend</option>
						<option value="facebook">Facebook</option>
						<option value="twitter">Twitter</option>
					</select>
		  		</div>
		  	</div>	
	  </fieldset>
	  <div class="form-group">
	  	<button class="btn" type="submit">Submit</button>
	  </div>
	</form>
</article>


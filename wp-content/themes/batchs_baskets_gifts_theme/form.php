
<form class="cd-form floating-labels">
	<fieldset>
		<legend>Account Info</legend>

		<div class="error-message">
			<p>Please enter a valid email address</p>
		</div>
 
		<div class="icon">
			<label class="cd-label" for="cd-name">Name</label>
			<input class="user" type="text" name="cd-name" id="cd-name" required>
	    </div>
	    
	</fieldset>

	<fieldset>
		<legend>Project Info</legend>

		<div>
			<h4>Budget</h4>

			<p class="cd-select icon">
				<select class="budget">
					<option value="0">Select Budget</option>
				</select>
			</p>
		</div>

		<div>
			<h4>Project type</h4>

			<ul class="cd-form-list">
				<li>
					<input type="radio" name="radio-button" id="cd-radio-1" checked>
					<label for="cd-radio-1">Choice 1</label>
				</li>
				<li>
					<input type="radio" name="radio-button" id="cd-radio-2">
					<label for="cd-radio-2">Choice 2</label>
				</li>

				<li>
					<input type="radio" name="radio-button" id="cd-radio-3">
					<label for="cd-radio-3">Choice 3</label>
				</li>
			</ul>
		</div>

		<div class="icon">
			<label class="cd-label" for="cd-textarea">Project description</label>
  			<textarea class="message" name="cd-textarea" id="cd-textarea" required></textarea>
		</div>

		<div>
	      	<input type="submit" value="Send Message">
	    </div>
	</fieldset>
</form>



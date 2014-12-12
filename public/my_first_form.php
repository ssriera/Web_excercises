<?php
	var_dump($_POST);
	var_dump($_GET);

?>


<!DOCTYPE html>
<html>
<head>
	<h3>My First HTML Form</h3>
</head>
<body>
<form method="POST" action="http://requestb.in/1ie0jfd1">
	<title>User form</title>
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="Enter your username">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Type your password">
    </p>
    <p>
    	<!-- <button>Loggy</button> -->
        <input type="submit" name="asdf" value="Loggy">
    </p>
    	<textarea id="email_body" name="email_body">Content Here</textarea>
    <button type="submit">Submit</button>
</form>

<hr>

<form method="POST" action="http://requestb.in/1ie0jfd1">
	<h3>Compose an Email</h3>
    <p>
        <label for="username">To</label>
        <input id="username" name="username" type="text" placeholder="Email to">
    </p>
    <p>
        <label for="password">From</label>
        <input id="password" name="password" type="password" placeholder="Senders email">
    </p>
    <p>
        <label for="subject">Subject</label>
        <input id="subject" name="subject" type="text" placeholder="Enter subject">
    </p>
    <p>
        <label for="body">Body</label>
        <input id="body" name="body" type="text" placeholder="Type">
    </p>
<label for="mailing_list">
    <input type="checkbox" id="mailing_list" name="mailing_list" value="yes">
    <label for="mailing_list">Do you want a copy of the email sent to you?</label>
</label>

    <p>
    	<button>Send</button>
        
       <label for="mailing_list">
			    <input type="checkbox" id="mailing_list" name="mailing_list" value="yes">
			    <label for="mailing_list">Sign me up for the mailing list!</label>
		</label>
<hr>
<br>
	<h3>Multiple Choice Test</h3>
		<p>What year did the Titanic sink?</p>
			<p>
			<label>
			    <input type="radio" id="q1b" name="q1" value="1906">
			    1906
			</label>
			<label>
			    <input type="radio" id="q1c" name="q1" value="1908">
			    1908
			</label>
			<label>
		    <input type="radio" id="q1d" name="q1" value="1912">
	    		1912
			</label>
			<label>
			<input type="radio" id="q1a" name="q1" value="1914">
			    1914
			</label>
		</p>
<br>
	<p>STOP!..</p>
	<p>
			<label>
				<input type="radio" id="a" name="stp" value="frst"> drop and roll
			</label>
			<label>
				<input type="radio" id="b" name="rlx" value="scd"> relax, don't do it
			</label>
			<label>
				<input type="radio" id="c" name="hmr" value="trd"> hammer time!
			</label>
	</p>
<br>
	<p>What food do you want to eat right MEOW?!</p>

<label><input type="checkbox" id="os1" name="fd[]" value="sashimi"> Sashimi</label>
<label><input type="checkbox" id="os2" name="fd[]" value="indian"> Indian</label>
<label><input type="checkbox" id="os3" name="fd[]" value="tapas"> Tapas</label>
<label><input type="checkbox" id="os4" name="fd[]" value="mexican"> Mexican</label>
<br>
<br>
	
<label for="favstate"> What is your favorite state?</label>
<select id="favstate" name="favstate">
	<option value="1">CA</option>
	<option value="2">FL</option>
	<option value="3">TX</option>
	<option value="4">NY</option>
</select>
<button type="submit">Submit</button>
</form>

<br>

	<form method="POST" action="http://requestb.in/1ie0jfd1">
	<p>Select Testing</p>
<label for="foodchoice">Are you a vegitarian? </label>
<select id="foodchoice" name="foodchoice">
    <option value="1">Yes</option>
    <option selected value="0">No</option>
</select>
<button type="submit">Submit</button>
</form>
</body>
</html>
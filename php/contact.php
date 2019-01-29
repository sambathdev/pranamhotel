<?php
  define('TITLE','Contact Us');
  include('../html/template/header.html');
?>

<div class="indexbody">
  <!-- write your html here -->
  <div id="contactForm">
	<style>
		#contactForm a{text-decoration:underline;white-space: nowrap;}
		#contactForm .heading{color:red; font-weight:bold; font-size:130%}
		#contactForm h4{color:#CC3784;line-height: 1em;padding-bottom: 1em;padding-top: 1em;}
	</style>
<table>
	<td>
	<h2>
		Get In Touch
	</h2>
	<br/>
	<p>
		Please complete all fields below.
	</p>

	<form id="contactUsForm" action="" method="post">
		<div class="form-group">
			<label id="labelFName" for="custSer_fName">First Name</label>
			<input id="custSer_fName" name="custSer_fName" class="form-control" aria-describedby="emailHelp" placeholder="Enter First Name" type="text">
			<div id="custSer_fName_err" class="input-error"></div>
		<br/>
			<label id="labelLName" for="custSer_lName">Last Name</label>
			<input id="custSer_lName" name="custSer_lName" class="form-control" aria-describedby="emailHelp" placeholder="Enter Last Name" type="text">
			<div id="custSer_lName_err" class="input-error"></div>
		<br/>
			<label id="labelAddress" for="custSer_address">Address</label>
			<input id="custSer_address" name="custSer_address" class="form-control" aria-describedby="emailHelp" placeholder="Enter Address, City, State, Zip/Postal, Country" type="text">
			<div id="custSer_address_err" class="input-error"></div>
		<!-- br/>
			<label id="labelCityStateZip" for="custSer_cityStateZip">City, State, and Zip / Postal Code</label>
			<input id="custSer_address" name="custSer_cityStateZip" class="form-control" aria-describedby="emailHelp" placeholder="Enter City, State, and Zip / Postal Code" type="text">
			<div id="custSer_cityStateZip_err" class="input-error"></div>
		<br/>
			<label id="labelCountry" for="custSer_country">Country</label>
			<input id="custSer_country" name="custSer_country" class="form-control" aria-describedby="emailHelp" placeholder="Enter Country" type="text">
			<div id="custSer_country_err" class="input-error"></div -->
		
		<br/>
			<label id="labelPhone" for="custSer_phone">Phone#</label>
			<input id="custSer_phone" name="custSer_phone" class="form-control" aria-describedby="emailHelp" placeholder="Enter Phone#" type="tel">
			<div id="custSer_email_err" class="input-error"></div>
		<br/>
			<label id="labelEmail" for="email">Email address</label>
			<input id="custSer_email" name="custSer_email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" type="email">
			<div id="custSer_email_err" class="input-error"></div>
		</div>
		<div class="form-group">
			<label id="labelComment" for="email">Comments</label>
			<textarea id="custSer_comments" name="custSer_comments" class="form-control"></textarea>
			<div id="custSer_comments_err" class="input-error"></div>
		</div>
		<div class="contactus-privacy-statement">
			<p><font size="2">We care about your privacy and want you to be informed about our practices.<br/> Review our privacy statement for full details on how we use and protect information.</font><p>
		</div>
		<div class="form-group">
			<button id="contactUsSubmit" title="Click To Submit" class="btn btn-primary" type="submit">Submit</button>
		</div>
	</form>
</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
	<h2>
		Contact Us
</h2>
	<p>
		<strong><br />Call Us</strong>
	</p>
	<p>
        +855 67 666 067<br/>
        +855 17 506 244<br/>
        +855 70 666 067<br/>
		Monday to Sunday from 8 a.m. – 10 p.m. Eastern Time. Holiday hours may vary. 
	</p>
	<p>
		<strong><br />Email Us</strong>
	</p>
	<p>
		<a href="https://Contacts.pranomhotel@gmail.com" target="_blank">contacts.pranomhotel@gmail.com</a>
	</p>
	<p>
		<strong><br/>Visit Our Site</strong>
</P>
Vattanac Capital Tower, No. 66, Preah Monivong Blvd, Sangkat Wat Phnom,<br/> Khan Daun Penh, Phnom Penh, Kingdom of Cambodia., Daun Penh, Phnom Penh, Cambodia
	<p>
		<strong><br/>Find Us On Facebook</strong>
<p>
	<p> 
		<a href="www.facebook.com/pranomhotel" target="_blank">www.facebook.com/pranomhotel</a>

</td>
</table>


</div>

<?php
include('../html/template/footer.html');
 ?>

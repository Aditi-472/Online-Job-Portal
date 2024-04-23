<?php
include("header.php");
?>
<section class="contact py-5" id="contact us">
		<div class="container">
		<div class="text-center my-5">
		<h1>car<span class="text-primary">eer</span></h1>
		<hr/class="w-25 m-auto">
		</div>
		<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-6 col-12"data-aos="fade-up">
		<form class="row g-3">
  <div class="col-md-6">
    <label for="inputFirst Name" class="form-label">first Name</label>
    <input type="first Name"  name="firstname" class="form-control" id="inputfirstName4">
  </div>
  <div class="col-md-6">
    <label for="inputLast Name4" class="form-label">Last Name</label>
    <input type="Last Name" name="lastname" class="form-control" id="inp4">
  </div>
  <div class="col-md-6">
    <label for="inputE-mail" class="form-label">E-mail</label>
    <input type="text" name="email" class="form-control" id="inputE-mail" placeholder="">
  </div>

  <div class="col-md-6">
    <label for="inputPhoneno" name="phoneno" class="form-label">Phone no.</label>
    <input type="text" name="first name"
	class="form-control" id="inputPhoneno">
  </div>
<div class="col-md-6">
  <select class="form-select"  name="experience" id="autoSizingSelect">
      <option selected>Experience</option>
      <option value="1">0-2 years</option>
      <option value="2">2-4 years</option>
      <option value="3">4-6 years</option>
	   <option value="3">6-8 years</option>
	    <option value="3">8-10 years</option>
		 <option value="3">10-12 years</option>
    </select></div><div class="col-md-6">
  <select class="form-select" name="designation" id="autoSizingSelect">
      <option selected>Designation</option>
      <option value="1">IT and Computers</option>
      <option value="2">civil and Construction</option>
      <option value="3">Administration jobs</option>
	   <option value="3">Marketing intelligence</option>
	    <option value="3">Receptionist</option>
		 <option value="3">call center and BPO</option>
    </select></div>
	<div class="mb-3">
    <input type="file" class="form-control" name="choosefile" aria-label="file example" required>
    <div class="invalid-feedback">Example invalid form file feedback</div>
  </div>

  </div>
  <div class="col-12">
    <button type="submit" class="save">Sign in</button>
  </div>
</form>
		</div>
			<div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-end p-5"data-aos="fade-up-right">
			<img src="images/about us.jpeg" class="img-fluid img-thumbnail p-3"> </div>
		<div>
		</section>
		<?php
include("footer.php");
?>
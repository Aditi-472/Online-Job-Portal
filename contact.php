<?php
include("header.php");
?>
<section class="contact py-5" id="contact us">
		<div class="container">
		<div class="text-center my-5">
		<h1>contact <span class="text-primary">us</span></h1>
		<hr/class="w-25 m-auto">
		</div>
		<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-6 col-12"data-aos="fade-up">
		<form action="contact2.php" method="post" class="row g-3">
  <div class="col-md-6">
    <label for="inputFirst Name" class="form-label">first Name</label>
    <input type="first Name" name="firstname" class="form-control" id="inputfirstName4" na>
  </div>
  <div class="col-md-6">
    <label for="inputLast Name4" class="form-label">Last Name</label>
    <input type="Last Name" name="lastname" class="form-control" id="inp4">
  </div>
  <div class="col-12">
    <label for="inputE-mail" class="form-label">E-mail</label>
    <input type="text"  name="email" class="form-control" id="inputE-mail" placeholder="">
  </div>

  <div class="col-md-6">
    <label for="inputpassword" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="inputpassword">
  </div>

  <label for="inputPassword5">Message</label>
<input type="meassage"  name="message" id="inputmeassage5" class="form-control" aria-describedby="messageHelpBlock">
<small id="messageHelpBlock" class="form-text text-muted">
</small>
	

  <div class="col-12">
    <input type="submit" name="save" value="submit">
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
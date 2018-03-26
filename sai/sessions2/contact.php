<?php


 include("menu.php"); ?>


<div class="container">
  <div class="title-div">
    <h2 class="text-center">CONTACT US</h2>
  </div>
  <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.3763524467627!2d83.30258001488113!3d17.726897487876027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39433b56d1b169%3A0xea319be955d8036e!2sTrileo+Digital+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1521449451328" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <div>
    <form class="contact-form" method="post" action="./">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="name">Full Name <span class="required">*</span> </label>
            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
          </div>
          <div class="form-group">
            <label for="email">Email address <span class="required">*</span> </label>
            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="subject">Subject <span class="required">*</span> </label>
            <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
          </div>
        </div>
        <div class="col-sm-6">
          <p class="contact-form-message">
            <label for="message">Message</label>
            <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <p class="contact-form-submit text-center topmargin_30">
            <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1">Send Message</button>
          </p>
        </div>
      </div>
    </form>
  </div>
</div>

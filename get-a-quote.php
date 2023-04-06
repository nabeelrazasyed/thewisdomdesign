<?php
include('header.php');
?>
<Style>
    footer {
    padding: 50px 0 50px;}
</Style>
<div class="">
  <section class=" order-pg">
    <div class="item">
      <div class="home-banner " style="background:#fff;height: 100%;">
        <div class="container ">
          <div class="row">
            <div class=" col-lg-12 col-xl-12 text-center">
              <div class="home-banner-content">
                <div class="col-lg-8 offset-lg-2   inner-content mtpx-100 text-left">
                  <div class="form-box-main clearfix">
                    <h2 class="main-heading">Let’s talk about your next Big thing!</h2>
                    <p class="main-pera">Heads up! We require that you sign up for The Wisdom Design services and packages. We make all your dreams come true in a successful project.</p>
                    <form id="ordernow-form">
                    <div class="alert alert-danger error" style="display: none;"></div>
                      <div class="row">
                        <div class="col-md-12">
                          <label class="field-txt">Name <span>*</span></label>
                          <input id="username" name="name" minlength="2" type="text" placeholder="" required /> </div>
                        <div class="col-md-6">
                          <label class="field-txt">Email <span>*</span></label>
                          <input id="cemail" type="email" name="email" placeholder="" required> </div>
                        <div class="col-md-6">
                          <label class="field-txt">Phone Number<span>*</span></label>
                          <!-- <input id="phone-country" name="Number" type="number" placeholder="" required/>  -->

                          <input type="text" name="contact" id="phone-country" class="masking" placeholder="Phone*" onkeypress="return isNumber(event)" data-inputmask="'mask': '(999) 999-9999'" required>
                          <span class="bg-danger col-lg-offset-3 contact_error " style="display: none;">Contact No Incorrect</span>
                          <input type="hidden" class="form-control" placeholder="Url" id="url" name="url" value="/get-a-quote" required>
                          <input type="tel" name="brand_id" id="brand_id" value=15 hidden>

                        </div>
                        <div class="col-md-12">
                          <div class="forarrowselect">
                            <label class="field-txt">Select Services <span>*</span></label>
                            <select name="Interest" id="packages" class="valid safari_only" aria-invalid="false">
                              <option value="" pack="0">Type Of Services</option>
                              
                                <option value="Logo Design" pack="5">Logo Design</option>
                                <option value="Website" pack="6">Website</option>
                                <option value="Video Animation" pack="7">Video Animation</option>
                                <option value="E-commerce" pack="8">E-commerce</option>
                                <option value="Branding" pack="9">Branding</option>
                              
                            </select>
                          </div>
                        </div>
                     
                         
                        
                        <div class="col-md-12 pb-0">
                          <label class="field-txt">Talk About Your Project <span></span></label>
                          <textarea name="Message" placeholder="" /></textarea>
                        </div>
                        <div class="col-md-12">
                          <div class="check-list col-lg-12 nopaddding">
                            <input id="checkbox22" type="checkbox" name="NDA" value="Required NDA">
                            <label for="checkbox22">Please send me a Non Disclosure Agreement for a Confidential Consultation</label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <input class="submit" type="submit" value="Submit" /> </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  </div><div class="bubbles_wrap"><div class="bubble x1"></div><div class="bubble x2"></div><div class="bubble x3"></div><div class="bubble x4"></div><div class="bubble x5"></div><div class="bubble x6"></div><div class="bubble x7"></div><div class="bubble x8"></div><div class="bubble x9"></div><div class="bubble x10"></div></div> 
  <?php
include('footer.php');
?>
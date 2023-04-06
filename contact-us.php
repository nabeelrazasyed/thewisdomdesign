<?php
include('header.php');
?>


<section class="btmform contact-pg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="txtwrp text-center">
          <h2 class="main-heading">Alright! Let’s Do It Now</h2>
          <p class="main-pera">Fill up the form, write your tailored requirement and receive a free estimation</p>
        </div>
      </div>
      <div class="col-md-12 d-flex">
      <div class="sec-left">
        <div class="wrapper">
          <div class="second-sec-cont">           
            <h2 class="wow fadeInUp"  >Feel free to make a <br> call request now</h2>
          </div>
          <form id="ordernow-form">  
          <div class="alert alert-danger error" style="display: none;"></div>
            <div class="row">           
              <div class="col-md-6">
                <div class="field">
                  <input type="text" placeholder="Name" name="name" required>
                </div>
                <div class="field">
                  <input type="email" placeholder="Email Address" name="email" required>
                </div>
                <div class="field">
                  <!-- <input type="number" id="phone-country" placeholder="Phone Number" name="contact" required> -->
                  
                  <input type="text" name="contact" id="free_cons_phone1" class="masking" placeholder="Phone*" onkeypress="return isNumber(event)" data-inputmask="'mask': '(999) 999-9999'" required>
                  <span class="bg-danger col-lg-offset-3 contact_error " style="display: none;">Contact No Incorrect</span>
                  <input type="hidden" class="form-control" placeholder="Url" id="url" name="url" value="/contact-us" required>
                  <input type="tel" name="brand_id" id="brand_id" value=15 hidden>

                </div>
                <div class="field">
                  <select name="Services" id="Services" class="Services" required>
                    <option value="">I Am Interested In</option>
                    <option value="Mobile App Development">Mobile App Development</option>
                    <option value="IOS App Development">IOS App Development</option>
                    <option value="Industries">Industries</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="field-msg">
                  <textarea placeholder="Message here." name="message" ></textarea>
                </div>
                <div class="field-btn">
                  <input type="submit">
                   
                </div>
              </div>
            </div>
          </form> 
        </div>
      </div>
      <div class="sec-right">
        <div class="ver-cta">
          <div class="box">
            <p>For any inquiries call now</p>
            <div class="imgwrp"><i class="fa fa-phone" aria-hidden="true"></i></div>
            <span>8662179772</span>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>  
</section><div class="bubbles_wrap"><div class="bubble x1"></div><div class="bubble x2"></div><div class="bubble x3"></div><div class="bubble x4"></div><div class="bubble x5"></div><div class="bubble x6"></div><div class="bubble x7"></div><div class="bubble x8"></div><div class="bubble x9"></div><div class="bubble x10"></div></div> 
<?php
include('footer.php');
?>
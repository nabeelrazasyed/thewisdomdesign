<?php
include('header.php');
?>
<Style>
    footer {
    padding: 50px 0 50px;}
</Style>
<div class="belowform" style="background-image: url(../theprimedesign.com/assets/images/contact-bg.php);">
  <div class="container ">
    <div class="row justify-content-center">

      <div class=" col-lg-8 my-auto">
        <div class="home-banner-content">
          <div class="col-lg-12 inner-content">
            <div class="form-box-main clearfix">
              <h2 class="main-heading">Let’s Discuss About Your Next Big Thing!</h2>
              <p class="main-pera">We aim to provide you the best solutions for your business needs and we believe in quality. Work with us to ensure success for all your business endeavors.</p>
              <form class="cmxform" id="ordernow-form">
                <div class="row">
                    <div class="alert alert-danger error" style="display: none;"></div>
                  <div class="col-md-12">
                    <!--<label class="field-txt"> <span>*</span></label>-->
                    <input onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" id="username" name="name" minlength="2" type="text" placeholder="Enter Name" required />
                  </div>
                  <div class="col-md-6">
                    <!--<label class="field-txt"> <span>*</span></label>-->
                    <input id="cemail" type="email" name="email" placeholder="Enter Email" required>
                  </div>
                  <div class="col-md-6">
                    <!--<label class="field-txt">Phone Number<span>*</span></label>-->
                    <input type="text" name="contact" id="phone-coun" class="phone-country masking contact" placeholder="Enter Phone Number" onkeypress="return isNumber(event)" data-inputmask="'mask': '(999) 999-9999'">
                    
                      <span class="bg-danger col-lg-offset-3 contact_error " style="display: none;">Contact No Incorrect</span>
                  </div>
          
          
           <div class="col-md-12">
                    <select id="select_box" name="Services" required>
                      <option value="" disabled selected >I’m interested in</option>
                      <option value="Website Design" attr="webPack">Website Design</option>
                      <option value="E-commerce" attr="ecompkge">E-commerce</option>
                      <option value="Logo Design" attr="logopkge">Logo Design</option>
                       <option value="Branding" attr="brandpkge">Branding</option>
                      <option value="Video Animation" attr="videopkge">Video Animation</option>
                    </select>
                  </div>

                  <div class="col-md-12">

                <select name="package_id" id="webPack" class="hide"  >
                  <option value="" pack="0">Select Your Package</option>
                  <option value="182" >Basic Website packages - $199</option>
                  <option value="183" >Startup Website Packages - 499</option>
                  <option value="184" >Professional Website Package - $899</option>
                  <option value="185" >Elite Website Package - $1,599</option>
                  <option value="186" >Corporate Website Package - $2,399</option>
                  <option value="187" >Business Website Package - $2,899</option>
                </select>
                
                <select name="package_id" id="ecompkge" class="hide secPac">           
                    <option value="194">Startup E-Commerce Package - $799</option>
                    <option value="195">Professional E-Commerce Package - $1,499</option>
                    <option value="196">Elite E-Commerce Package - $3,999</option>
                </select>
    
                <select name="package_id" id="logopkge" class="hide webPac">               
                  <option value="191" >Basic Logo Package - $44</option>
                  <option value="192" >Start Up Logo Package - $84</option>
                  <option value="193" >Professional Logo Package - $124</option>
                   <option value="191" >Elite Logo Package - $174</option>
                  <option value="192" >Business Logo Package - $244</option>
                  <option value="193" >Gold Logo Package - $514</option>
                   <option value="191" >3D Logo Package - $534</option>
                  <option value="192" >Basic Illustrative Package - $284</option>
                  <option value="193" >Startup Illustrative Package - $384</option>
                  <option value="193" >Professional Illustrative Package - $584</option>
                </select>
                
                <select name="package_id" id="brandpkge" class="hide animationPac">
                    <option value="209" >SMM Startup Package - $500</option>
                    <option value="210" >SMM Basic Package - $800</option>
                    <option value="211" >SMM Plus Package - $1,500</option>
                     <option value="209" >SEO Basic Package - $299</option>
                    <option value="210" >SEO Standard Package - $499</option>
                    <option value="211" >SEO Professional Package - $799</option>
                     <option value="209" >SEO Enterprise Package - $1,499</option>
                    <option value="210" >Startup Collateral Package - $99</option>
                    <option value="211" >Collateral Classic Package - $199</option>
                     <option value="209" >Premium Collateral Package - $399</option>
                    <option value="210" >Unlimited Collateral Package - $499</option>
                </select>

                <select name="package_id" id="videopkge" class="hide BrandPac">
                    <option value="179" >Startup Video Package - $499</option>
                   <option value="180" >Classic Video Package - $999</option>
                   <option value="181" >Premium Video Package - $1,499</option>
                    <option value="189" >Unlimited Video Packages - $2,299</option>
                 </select>

                

            


            </div>
            
                
                    <div class="col-md-12">
                        <textarea name="message" id="" rows="7" placeholder="Talk About Your Project"></textarea>
                  </div>

                  
                  <div class="col-md-12">
                    
<!--<input type="tel" name="brand_id" id="brand_id" value=11 hidden>-->
<input type="hidden" class="form-control" placeholder="Url" id="url" name="url" value="/get-started" required>
                    <input type="tel" name="brand_id" id="brand_id" value=15 hidden>

                    <input class="" type="hidden" name="ctry" value="" />
                    <input type="hidden" name="pc" value="">
                    <input type="hidden" name="hiddencapcha" value="">
                    <input type="hidden" name="cip" >
                    <input type="hidden" name="form_name" value="Bottom Form">
                    <input type="hidden" id="blocation" name="locationURL" value="" />
                    <button class="submit secondary-btn submitbtn" type="submit"  />Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div><div class="bubbles_wrap"><div class="bubble x1"></div><div class="bubble x2"></div><div class="bubble x3"></div><div class="bubble x4"></div><div class="bubble x5"></div><div class="bubble x6"></div><div class="bubble x7"></div><div class="bubble x8"></div><div class="bubble x9"></div><div class="bubble x10"></div></div> 
<?php
include('footer.php');
?>
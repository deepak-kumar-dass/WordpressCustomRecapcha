<?php
   /**
   * Template Name: Microsoft Dynamic 365 Contact US 
   *
   * @package WordPress
   * @subpackage Twenty_Fourteen
   * @since Twenty Fourteen 1.0
   */
get_header();?>
<!-- intlTelInput cdn added -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/js/utils.js" integrity="sha512-wPy1fNW7ZZpTsbOIUHi0FOpKiEmyeFUH3GXMk7EBE/SbyAzAUEMa8V0JVORN9UmLhHfhRJPog0lGC7Zb9Ab1Ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div id="contactShowCase" class="showCase showCaseInner carousel slide" data-bs-ride="carousel">
   <div class="carousel-inner">
      <div class="carousel-item active">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 order-lg-1">
                  <div class="slider-img-bloc">
                     <img class="slider-img w-100" src="<?php the_field('contact_us_banner_image')  ?>">
                  </div>
               </div>
               <div class="col-lg-6 d-flex align-items-center  slide-left-bloc">
                  <div class="carousel-caption d-lg-block">
                     <h2><?php $value = get_field( "contact_us_title" );
                        if( $value ) {
                            echo $value;
                        } else {
                            the_title();
                        }
                        ?></h2>
                     <p><?=the_field('contact_us_text');?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="contactInnerContent new-contact-f">
   <div class="container">
      <div class="row contactInnerbg">
         <div class="col-lg-4 contact-left-section d-lg-flex flex-column ">
          <?php the_field('contact_us_details');?>
         </div>
         <div class="col-lg-8">
            <div class="card contact-form-block ">
               <div class="card-body">
                  <!-- Microsoft Lead Form :: Start -->
                  <form id="MicrosoftLeadForm" class="MicrosoftLeadForm">
                     <div class="row">
                       <div class="col text-start">
                         <input type="text" class="form-control" name="ms_lead_firstname" id="ms_lead_firstname" placeholder="First name*" aria-label="First name*" required>
                       </div>
                       <div class="col text-start">
                         <input type="text" class="form-control" name="ms_lead_lastname" id="ms_lead_lastname" placeholder="Last name*" aria-label="Last name*" required>
                       </div>
                     </div>
                     <div class="row mt-5">
                        <div class="col text-start">
                           <input type="email" name="ms_lead_emailaddress1"  id="ms_lead_emailaddress1" class="form-control" placeholder="Email*" required>
                        </div>
                     </div>
                     <div class="row mt-5">
                       <div class="col text-start">
                         <input type="text" class="form-control" name="ms_lead_phone" id="ms_lead_phone" placeholder="Phone number*" aria-label="Phone number*"  value="+1" required>
                       </div>
                       <div class="col text-start">
                         <input type="text" class="form-control" name="ms_lead_country" id="ms_lead_country" placeholder="Country/Region*" aria-label="Country/Region*" required>
                       </div>
                     </div>
                     <div class="row mt-5">
                        <div class="col text-start">
                           <select id="ms_lead_opportunitytype" name="ms_lead_opportunitytype" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                              <option selected value="100000001">Opportunity Type</option>
                              <option value="100000001">Infostride</option>
                           </select>
                        </div>
                     </div>
                     <div class="row mt-5">
                       <div class="col text-start">
                         <textarea class="form-control" name="ms_lead_message" placeholder="Leave a message here" id="ms_lead_message" style="height: 100px"></textarea>
                       </div>
                     </div>
                     <div class="row mt-5">
                        <div class="col text-start">
                           <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Captcha" required>
                        </div>
                        <div class="col text-start">
                           <img src="<?php echo get_template_directory_uri();?>/captcha.php?<?php echo rand ( 1000000000000 , 9999999999999 ); ?>" alt="CAPTCHA" id="image-captcha">
                           <a href="javascript:void(0);" onclick="return refreshCaptcha(event); event.preventDefault();" id="refresh-captcha" class="align-middle" title="refresh">
                              <i class="fa fa-refresh align-middle" aria-hidden="true"></i>
                           </a>   
                        </div>
                     </div>
                     <div class="row mt-5">
                       <div class="col">
                          <button type="submit" name="submit" class="btn btn-primary float-end">Submit</button>
                       </div>
                     </div>
                  </form>
                  <div id="success_message" class="alert mt-5" role="alert"></div> 
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Message Popup-->
<div class="modal fade bd-example-modal-lg success-msg-modal" id="myModal2" style="display:none;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-body success-msg-popup py-lg-5 my-4" style="">
            <button type="button" data-bs-dismiss="modal" aria-label="Close" class="close-button">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/infostride/assets/images/close-btn.png" class="img-fluid skip-lazy">
            </button>
            <div class="card">
               <div class="row g-0">
                  <div class="col-2">
                     <img src="<?php echo get_site_url(); ?>/wp-content/themes/infostride/assets/images/tick-icon.png" alt="..." class="img-fluid skip-lazy">
                  </div>
                  <div class="col-10 d-flex align-items-center">
                     <div class="card-body ps-4 py-0 pe-0 ">
                        <h5 class="card-title text-primary mb-0">Thank you for contacting us.<br>
                           We will revert you back at earliest.
                        </h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- jquery.validate.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Scripts :: START -->
<script type="text/javascript">
     jQuery(document).ready(function(){
      var dialCode;
      var input = document.querySelector("#ms_lead_phone");
        window.intlTelInput(input, {
          // any initialisation options go here
        });
         intlTelInput(input, {
           initialCountry: "auto",
           geoIpLookup: function(success, failure) {
            jQuery.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
               var countryCode = (resp && resp.country) ? resp.country : "us";
               success(countryCode);
             });
           },
         });
         var iti = intlTelInput(input);
         input.addEventListener("countrychange", function() {
             dialCode = iti.getSelectedCountryData().dialCode;
             jQuery('#ms_lead_country').val(iti.getSelectedCountryData().name);
         });
      });
</script>
<!-- Microsoft Lead Form Submission Script. -->
<script type="text/javascript">
    jQuery("#MicrosoftLeadForm").validate({
        rules: {
            ms_lead_firstname: { required: true },
            ms_lead_lastname: { required: true},
            ms_lead_emailaddress1: { required: true,email: true },
            ms_lead_phone: { required: true },
            ms_lead_country: { required: true },
            captcha:{ required:true,remote: function(){
                  jQuery.ajax({
                     url: "<?php echo admin_url('admin-ajax.php'); ?>",
                     type: "POST",
                     data: {
                         action: 'reCapchaVerify',
                         captchacode: function() {
                           return $( "#captcha" ).val();
                         }
                       },
                       success: function(data){ 
                        const obj = JSON.parse(data);
                        console.log(obj); 
                          if (obj.status == false) {
                             $('#captcha-error').show().text(obj.message);
                             return true;
                          }else{
                             return false;
                          }
                        }
                  });
               }
            },
        }, 
        messages: {
          captcha: {required:"Captcha is required.",remote:"Captcha is not valid!"} 
        },
        submitHandler: function (form) {
         $("#loader").show();
         jQuery.ajax({
                 url: "<?php echo admin_url('admin-ajax.php'); ?>",
                 type: 'POST',
                 data: {
                     action: 'microsoftLeadSubmit',
                     firstname:$('#ms_lead_firstname').val(), 
                     lastname:$('#ms_lead_lastname').val(),
                     emailaddress1:$('#ms_lead_emailaddress1').val(),
                     phone:$('#ms_lead_phone').val(),
                     country:$('#ms_lead_country').val(),
                     opportunitytype:$('#ms_lead_opportunitytype').val(),
                     message:$('#ms_lead_message').val(),
                 },
                 success: function(response) {
                     const obj = JSON.parse(JSON.stringify(response));
                     $("#loader").hide();
                     $('#MicrosoftLeadForm')[0].reset();
                     if (response.status == true) {
                        jQuery('#myModal2').modal('show');
                     }else if (response.status == false){
                         $('#success_message').addClass('alert-danger');
                         $('#success_message').text(obj.message);
                         $('#success_message').delay(5000).fadeOut('slow');
                     }
                 },
                 error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.warn(textStatus)
                 }
          });
        }
    });

   function refreshCaptcha(){
      var refreshButton = document.getElementById("refresh-captcha");
      var captchaImage  = document.getElementById("image-captcha");
      captchaImage.src  = '<?php echo get_template_directory_uri();?>/captcha.php?' + Date.now();
   }

</script>
<!-- Scripts :: END -->
<style type="text/css">
   .iti.iti--allow-dropdown {
       display: block !important;
   }
   form.MicrosoftLeadForm label.error {
       color: #E64646;
   }
   i.fa-refresh {
       font-size: 24px!important;
       background-color: #f6a077;
       color: #fff;
       padding: 4px 6px;
   }
</style>

<?php get_footer();?>
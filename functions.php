<?php

/**
 * Custom ReCapcha validation method. 
 */

function reCapchaVerify(){

  if (!session_id()) {
      session_start();
  }

  $captcha = $_POST['captchacode'];
  $captcha_code = $_SESSION['captcha_code'];

  if (isset($captcha_code) && !empty($captcha)) {

      if($captcha == $captcha_code){

        echo json_encode(array('status' => true, 'message' => 'Correct captcha'));

      }else{

        echo json_encode(array('status' => false, 'message' => 'Invalid Captcha!'));

      }

  }else{

    echo json_encode(array('status' => false, 'message' => 'Captcha is required.'));

  }

  wp_die();
}

add_action( 'wp_ajax_nopriv_reCapchaVerify', 'reCapchaVerify' );
add_action( 'wp_ajax_reCapchaVerify', 'reCapchaVerify' );






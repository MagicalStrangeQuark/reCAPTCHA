<?php

require_once "recaptchalib.php";

$reCaptcha = new ReCaptcha("6LccFiEaAAAAAIA5SZoJ5vr5BfL_qtWtkMCJ5H_Y");

if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
}

if ($response->success === true) {
    var_dump($_POST);
}

<?php

namespace App\Controllers;
use App\Helpers\HttpResponses\Success;

class SignUpController extends BaseController {
  public function index() {
    $body = $this->requestBody();

    new Success($body);
  }
}
<?php

namespace App\Controllers;
use App\Helpers\HttpResponses\BadRequest;

class BaseController {
  public function requestBody() {
    $json = json_decode(file_get_contents('php://input'), true);
    
    if (json_last_error() != JSON_ERROR_NONE) {
      new BadRequest('Bad JSON format');
      exit;
    }
    return $json;
  }
}
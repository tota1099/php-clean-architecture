<?php

namespace App\Helpers\HttpResponses;

class Success {
  public function __construct(string $data) {
    http_response_code(200);
    echo json_encode($data);
  }
}
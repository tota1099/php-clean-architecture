<?php

namespace App\Helpers\HttpResponses;

class BadRequest {
  public function __construct(string $error) {
    http_response_code(400);
    echo json_encode([
      'error' => $error
    ]);
  }
}
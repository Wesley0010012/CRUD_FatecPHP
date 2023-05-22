<?php

namespace Src\Presentation\Errors;

use Error;

class InternalServerError extends Error {
  public function __construct($message) {
    parent::__construct("Internal Server Error");
    $this->message = "Internal Server Error";
  }
}
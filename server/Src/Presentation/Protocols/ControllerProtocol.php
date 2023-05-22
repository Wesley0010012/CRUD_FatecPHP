<?php

namespace Src\Presentation\Protocols;


interface ControllerProtocol {
  public function index(HttpRequest $request): HttpResponse;
}
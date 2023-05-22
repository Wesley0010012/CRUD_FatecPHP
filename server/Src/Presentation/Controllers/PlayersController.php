<?php

namespace Src\Presentation\Controllers;

use Exception;
use Src\Infra\Protocols\DaoProtocol;
use Src\Presentation\Errors\InternalServerError;
use Src\Presentation\Errors\InvalidParamError;
use Src\Presentation\Errors\MissingParamError;
use Src\Presentation\Helpers\HttpHelpers;
use Src\Presentation\Protocols\ControllerProtocol;
use Src\Presentation\Protocols\HttpRequest;
use Src\Presentation\Protocols\HttpResponse;

class PlayersController implements ControllerProtocol {
  private DaoProtocol $dao;

  public function __construct(DaoProtocol $dao) {
    $this->dao = $dao;
  }

  public function index(HttpRequest $request): HttpResponse {
    $list = ['everything', 'ordered'];

    foreach($list as $l)
      if(!$request->body[$l])
        return HttpHelpers::badRequest(new MissingParamError($l));

    $everything = strtoupper($request->body['everything']);
    $ordered = strtoupper($request->body['ordered']);

    if($everything !== 'Y')
      return HttpHelpers::badRequest(new InvalidParamError("everything"));

    try {
      if(strtoupper($ordered) === 'Y')
        $result = $this->dao->getAllOrdered();
      else if(strtoupper($ordered) === 'N')
        $result = $this->dao->getAll();
      else
        return HttpHelpers::badRequest(new InvalidParamError("ordered"));

      return HttpHelpers::success(json_encode($result));
    } catch (Exception $e) {
      return HttpHelpers::serverError(new InternalServerError($e->getMessage()));
    }
  }
}
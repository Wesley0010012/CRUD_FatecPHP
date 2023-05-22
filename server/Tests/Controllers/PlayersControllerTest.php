<?php

namespace Tests\Controllers;

use PHPUnit\Framework\TestCase;
use Src\Presentation\Controllers\PlayersController;
use Src\Presentation\Errors\InternalServerError;
use Src\Presentation\Errors\InvalidParamError;
use Src\Presentation\Errors\MissingParamError;
use Src\Presentation\Protocols\HttpRequest;
use Tests\Stubs\DaoStubs\DaoStub;
use Tests\Stubs\DaoStubs\FakeDaoStub;

class PlayersControllerTest extends TestCase {
  private PlayersController $sut;

  public function fakeFactory(): void {
    $fakeDaoStub = new FakeDaoStub;

    $this->sut = new PlayersController($fakeDaoStub);
  }

  public function realFactory(): void {
    $daoStub = new DaoStub;

    $this->sut = new PlayersController($daoStub);
  }

  public function setUp(): void {
    $this->fakeFactory();
  }

  public function testShouldReturn400IfNoEverythingIsProvided(): void {
    $error = new MissingParamError('everything');
    
    $request = new HttpRequest;
    $request->body = array('everything' => '', 'ordered' => 'Y');

    $response = $this->sut->index($request);
    $this->assertEquals(400, $response->statusCode);
    $this->assertEquals($error->getMessage(), $response->body->getMessage());
  }

  public function testShouldReturn400IfNoOrderedIsProvided(): void {
    $error = new MissingParamError('ordered');
    
    $request = new HttpRequest;
    $request->body = array('everything' => 'Y', 'ordered' => '');

    $response = $this->sut->index($request);
    $this->assertEquals(400, $response->statusCode);
    $this->assertEquals($error->getMessage(), $response->body->getMessage());
  }

  public function testShouldReturn400IfInvalidEverythingIsProvided(): void {
    $error = new InvalidParamError('everything');
    
    $request = new HttpRequest;
    $request->body = array('everything' => 'something', 'ordered' => 'Y');

    $response = $this->sut->index($request);
    $this->assertEquals(400, $response->statusCode);
    $this->assertEquals($error->getMessage(), $response->body->getMessage());
  }

  public function testShouldReturn400IfInvalidOrderedIsProvided(): void {
    $error = new InvalidParamError('everything');
    
    $request = new HttpRequest;
    $request->body = array('everything' => 'Y', 'ordered' => 'something');

    $response = $this->sut->index($request);
    $this->assertEquals(400, $response->statusCode);
    $this->assertEquals($error->getMessage(), $response->body->getMessage());
  }

  public function testExampleShouldReturn500IfInternalServerError(): void {
    $error = new InternalServerError('any');

    $request = new HttpRequest;
    $request->body = array('everything' => 'Y', 'ordered' => 'Y');

    $response = $this->sut->index($request);
    $this->assertEquals(500, $response->statusCode);
    $this->assertEquals($error->getMessage(), $response->body->getMessage());
  }

  public function testExampleShouldReturn200IfDaoReturnWasProvided(): void {
    $this->realFactory();

    $result = DaoStub::getAll();

    $request = new HttpRequest;
    $request->body = array('everything' => 'Y', 'ordered' => 'Y');

    $response = $this->sut->index($request);

    $this->assertEquals(200, $response->statusCode);
    // $this->assertSame($result, json_decode($response->body));
  }
}
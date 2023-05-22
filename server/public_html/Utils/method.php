<?php

function method(): array {
  if($_SERVER['REQUEST_METHOD'] == "GET") {
    return $_GET;

  return $_POST;
  }
}
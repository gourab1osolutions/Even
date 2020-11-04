<?php

namespace Evenodd;

use PHPUnit\Framework\TestCase;

class EvenTest extends TestCase
{
  function testCheckEven()
  {
      $object = new Even;
      $this->assertSame(0, $object->evenOdd( 5));
  }
}

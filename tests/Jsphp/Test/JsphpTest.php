<?php

namespace Jsphp\Test;

// use Jsphp\Jsphp;
use Jsphp\TestCase;

/**
 * @author Ibrahim Abdullah <ibrahim@ingeniousdev.nl>
 */


class JsphpTest extends TestCase
{
    public function testEmptyJsObject()
    {
        $js = new \Jsphp\Jsphp();
        $this->assertSame($js->toJson(), json_encode([]));
    }
}
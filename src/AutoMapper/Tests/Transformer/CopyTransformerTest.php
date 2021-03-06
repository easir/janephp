<?php

namespace Jane\AutoMapper\Tests\Transformer;

use Jane\AutoMapper\Transformer\CopyTransformer;
use PHPUnit\Framework\TestCase;

class CopyTransformerTest extends TestCase
{
    use EvalTransformerTrait;

    public function testCopyTransformer()
    {
        $transformer = new CopyTransformer();

        $output = $this->evalTransformer($transformer, 'foo');

        self::assertSame('foo', $output);
    }
}

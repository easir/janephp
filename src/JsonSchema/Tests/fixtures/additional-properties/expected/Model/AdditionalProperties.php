<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class AdditionalProperties extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $foo;
    /**
     * 
     *
     * @return string
     */
    public function getFoo() : string
    {
        return $this->foo;
    }
    /**
     * 
     *
     * @param string $foo
     *
     * @return self
     */
    public function setFoo(string $foo) : self
    {
        $this->foo = $foo;
        return $this;
    }
}
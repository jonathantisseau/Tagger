<?php

declare(strict_types=1);

namespace jonathantisseau\Tagger;

use PHPUnit\Framework\TestCase;

class TaggerTest extends TestCase
{
    /**
     * @var Tagger
     */
    protected $tagger;

    protected function setUp() : void
    {
        $this->tagger = new Tagger;
    }

    public function testIsInstanceOfTagger() : void
    {
        $actual = $this->tagger;
        $this->assertInstanceOf(Tagger::class, $actual);
    }
}

<?php

declare(strict_types=1);

namespace Tagger;

require "./vendor/autoload.php";

use PHPUnit\Framework\TestCase;

class TaggerTest extends TestCase
{
	/**
	 * Undocumented variable
	 *
	 * @var ContainerTag
	 */
    protected $tag;

    protected function setUp() : void
    {
        $this->tag = new ContainerTag('html');
    }

    public function testIsInstanceOfTagger() : void
    {
        // $actual = $this->tag;
		// $this->assertInstanceOf(Tag::class, $actual);

		$this->tag
			->body()
				->form()
					->end()
				->ul()
					->li()
						->end()
					->li()
						// ->set_class('sdcflkj')
						->span()
							->text('')
							->end()
						->end()
					->li()
						->text('test')
						->br()
						->text('test')
						->hr()
							->set_color('red')
							;
    }
}

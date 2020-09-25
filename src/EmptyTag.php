<?php

declare(strict_types=1);

namespace Tagger;

/**
 * Define an empty tag (no content, no attributes).
 */
class EmptyTag
{
    /**
     * Html Tag
     *
     * @var string
     */
    public $tag;

    /**
     * Parent tag
     *
     * @var ContainerTag
     */
    public $parent;

    /**
     * Constructor
     *
     * @param string $tag
     */
    public function __construct($tag = 'br')
    {
        $this->tag = $tag;
    }

    /**
     * Find a list of tags matching the selector (only the tag is looked) in this item and all its children
     *
     * @param string $selector A tag name
     *
     * @return _EmptyTag[]
     */
    public function find($selector)
    {
        $results = [];
        if ($this->tag === $selector) {
            $results[] = $this;
		}

        return $results;
    }

    /**
     * Find the closest parent matching the selector (only the tag is looked)
     *
     * @param string $selector
     *
     * @return null|_ContainerTag
     */
    public function closest($selector)
    {
        if ($this->parent) {
            if ($this->parent->tag === $selector) {
                return $this->parent;
            }
        }

        return $this->parent->closest($selector);
    }

    /**
     * Get this tag to HTML
     *
     * @return string
     */
    public function to_html()
    {
        return "<{$this->tag} />";
	}

	/**
	 * Return this parent
	 *
	 * @return ContainerTag
	 */
	public function end()
	{
		return $this->parent;
	}
}

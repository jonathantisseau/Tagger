<?php

declare(strict_types=1);

namespace Tagger;

/**
 * Defines a tag with content and attributes.
 */
class ContainerTag extends Tag
{
	use Tags;

    /**
     * List of child tags
     *
     * @var mixed[]
     */
    public $items;

    /**
     * Build a new tag
     *
     * @param string $tag
     */
    public function __construct($tag = 'div')
    {
        parent::__construct($tag);
        $this->items = [];
	}

    /**
     * Find a list of tags matching the selector (only the tag is looked) in this item and all its children
     *
     * @param string $selector A tag name
     *
     * @return mixed[]
     */
    public function find($selector)
    {
        $results = [];
        if ($this->tag === $selector) {
            $results[] = $this;
        }
        foreach ($this->items as $item) {
            $results = array_merge($results, $item->find($selector));
        }

        return $results;
    }

    #region Items manipulation

    /**
     * Add an item at the end of the childs' list
     *
     * @param _EmptyTag $item
     *
     * @return mixed The new item
     */
    public function append($item)
    {
        $this->items[] = $item;
        $item->parent = $this;

        return $item;
    }

    /**
     * Add a new Tag at the beginning of the childs' list
     *
     * @param _EmptyTag $item
     *
     * @return mixed The new item
     */
    public function prepend($item)
    {
        array_splice($this->items, 0, 0, [$item]);
        $item->parent = $this;

        return $item;
    }

    /**
     * Insert a tag at a given position
     *
     * @param _EmptyTag $item
     * @param int  $index
     *
     * @return mixed The new item
     */
    public function insert($item, $index)
    {
        array_splice($this->items, $index, 0, [$item]);
        $item->parent = $this;

        return $item;
    }

    /**
     * Return the parent tag
     *
     * @return ContainerTag
     */
    public function end()
    {
        return $this->parent;
    }

    #endregion

    #region Display

    /**
     * Get this tag to HTML
     *
     * @return string
     */
    public function to_html()
    {
		$attributes = $this->attr_to_string();
		if ($attributes)
			$attributes .= " $attributes";
        $html = "<{$this->tag}{$attributes}>";
        foreach ($this->items as $item) {
            $html .= $item->to_html();
        }
        $html .= "</{$this->tag}>";

        return $html;
    }

	#endregion

	/**
	 * Add a text
	 *
	 * @param string $value
	 * @param bool $esc_html
	 *
	 * @return self
	 */
	public function text($value, $esc_html = true)
	{
		$this->append(new TextTag($value, $esc_html));
		return $this;
	}
}

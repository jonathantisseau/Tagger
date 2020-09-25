<?php

declare(strict_types=1);

namespace Tagger;

/**
 * Defines an empty tag (no content) with attributes.
 */
class Tag extends EmptyTag
{
    use Attributes;

    /**
     * List of attributes
     *
     * @var array
     */
    public $attributes;

    /**
     * Build a new tag
     *
     * @param string $tag
     */
    public function __construct($tag = 'input')
    {
        parent::__construct($tag);
        $this->attributes = [];
    }

    /**
     * Get this tag to HTML
     *
     * @return string
     */
    public function to_html()
    {
        return "<{$this->tag} {$this->attr_to_string()} />";
    }

    /**
     * Convert attributes to HTML
     *
     * @return string
     */
    public function attr_to_string()
    {
        return implode(' ', array_map(function ($key, $value) {
            return !is_array($value) ? "${key}=\"${value}\""
                : implode(' ', array_map(function ($css, $val) {
                    return "${css}: ${val};";
                }, array_keys($value), $value));
        }, array_keys($this->attributes), $this->attributes));
    }

    #region Attributes manipulation

    /**
     * Get, set or remove an attribute
     *
     * @param string                $name  Attribute name
     * @param string|null $value Attribute value. Null to remove the attribute, empty string to get the attribute's value or any other value to set the attribute's value.
     *
     * @return string|self
     */
    public function attr($name, $value = '')
    {
        return $value === null ? $this->remove_attr($name)
            : ($value === '' ? $this->get_attr($name)
            : $this->set_attr($name, $value));
    }

    /**
     * Set an attribute value
     *
     * @param string                $name
     * @param string $value Attribute value
     *
     * @return self
     */
    public function set_attr($name, $value)
    {
        $this->attributes[$name] = $value;

        return $this;
    }

    /**
     * Get an attribute value
     *
     * @param string $name
     *
     * @return string
     */
    public function get_attr($name)
    {
        return array_key_exists($name, $this->attributes) ? $this->attributes[$name] : null;
    }

    /**
     * Remove an attribute
     *
     * @param string $name
     *
     * @return self
     */
    public function remove_attr($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            unset($this->attributes[$name]);
        }

        return $this;
    }

    #endregion

    #region Class manipulation

    /**
     * Split the class attribute into an array of classes
     *
     * @return array
     */
    public function get_classes()
    {
        return explode(' ', $this->get_class());
    }

    /**
     * Set classes from array
     *
     * @param string[] $values
	 *
	 * @return self
     */
    public function set_classes($values)
    {
        if (is_string($values)) {
            $this->set_class($values);
        } elseif (is_array($values)) {
            $this->set_class(implode(' ', $values));
        }

        return $this;
    }

    /**
     * Add a class in the class attribute
     *
     * @param string $class
	 *
	 * @return self
     */
    public function add_class($class)
    {
        $classes = $this->get_classes();
        if (array_search($class, $classes, true) === false) {
            $classes[] = $class;
        }
        $this->set_classes($classes);

        return $this;
    }

    /**
     * Remove a class in the class attribute
     *
     * @param string $class
	 *
	 * @return self
     */
    public function remove_class($class)
    {
        $classes = $this->get_classes();
        if (($index = array_search($class, $classes, true)) !== false) {
            unset($classes[$index]);
        }
        $this->set_classes($classes);

        return $this;
    }

    #endregion

    #region Style manipulation

    /**
     * Split style attribute into an associative array of property with their values (eg: ['margin' => 0, 'padding' => '10px 20px'])
     *
     * @return array
     */
    public function get_styles()
    {
        $styles = array_map('trim', explode(';', $this->get_style()));
        $results = [];
        foreach ($styles as $key => $style) {
            $prop_value = explode(':', $style);
            $results[$prop_value[0]] = $prop_value[1];
        }

        return $results;
    }

    /**
     * Set styles from array
     *
     * @param array|string $values Styles string, array of attributes already formed properly with their values (eg: ['margin: 0', 'padding: 10px 20px']) or an associative array of property => value (eg: ['margin' => 0, 'padding' => '10px 20px'])
	 *
	 * @return self
     */
    public function set_styles($values)
    {
        if (is_string($values)) {
            $this->set_style($values);
        } else {
            $this->set_style(implode(';', array_map(function ($key, $value) {
                return is_int($key) ? $value : "${key}: ${value}";
            }, array_keys($values), $values)));
        }

        return $this;
    }

    /**
     * Add a style
     *
     * @param string                $property CSS property name
     * @param bool|float|int|string $value    CSS property value
	 *
	 * @return self
     */
    public function add_style($property, $value)
    {
        $styles = $this->get_styles();
        $styles[$property] = $value;
        $this->set_styles($styles);

        return $this;
    }

    /**
     * Remove a style
     *
     * @param string $property CSS property name
	 *
	 * @return self
     */
    public function remove_style($property)
    {
        $styles = $this->get_styles();
        if (array_key_exists($property, $styles)) {
            unset($styles[$property]);
            $this->set_styles($styles);
        }

        return $this;
    }

    #endregion
}

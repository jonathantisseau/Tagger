<?php

declare(strict_types=1);

namespace Tagger;

/**
 * Defines a text tag (no content, no attributes).
 */
class TextTag extends EmptyTag
{
    /**
     * Content of the tag
     *
     * @var string
     */
    public $value;

    /**
     * Escape HTML (default true)
     *
     * @var bool
     */
	public $esc_html = true;

    /**
     * Text charset to use
     *
     * @var string
     */
    protected static $charset = 'UTF-8';

    /**
     * Indicates if utf8 is supported by PCRE
     *
     * @var null|bool
     */
    protected static $utf8_pcre = null;

    /**
     * Create a text tag
     *
     * @param string $value    The text to display
     * @param bool   $esc_html
     */
    public function __construct($value, $esc_html = true)
    {
        parent::__construct('');
        $this->value = $value;
        $this->esc_html = $esc_html;
    }

    /**
     * Set the charset to use
     *
     * @param string $charset
     *
     * @return void
     */
    public static function set_charset($charset)
    {
        if (in_array($charset, ['utf8', 'utf-8', 'UTF8'], true)) {
            $charset = 'UTF-8';
        }
        static::$charset = $charset;
    }

    /**
     * Get the charset used (UTF-8 by default)
     *
     * @return string
     */
    public static function get_charset()
    {
        return static::$charset;
    }

    /**
     * Indicates if the current charset if UTF-8
     *
     * @return bool
     */
    public static function is_utf8_charset()
    {
        return static::$charset === 'UTF-8';
    }

    /**
     * Convert this tag to HTML
     *
     * @return string
     */
    public function to_html()
    {
        return $this->esc_html ? $this->esc_html($this->value) : $this->value;
    }

    /**
     * Escaping for HTML blocks.
     *
     * @param string $text
     *
     * @return string
     */
    protected function esc_html($text)
    {
        $safe_text = $this->check_invalid_utf8($text);
        return htmlspecialchars($safe_text, ENT_QUOTES, static::$charset, false);
    }

    /**
     * Checks for invalid UTF8 in a string.
     *
     * @since 2.8.0
     *
     * @global bool $is_utf8
     * @global bool $utf8_pcre
     *
     * @param string $string the text which is to be checked
     * @param bool   $strip  Optional. Whether to attempt to strip out invalid UTF8. Default is false.
     *
     * @return string the checked text
     */
    protected function check_invalid_utf8($string, $strip = false)
    {
        $string = (string) $string;

        if (strlen($string) === 0) {
            return '';
        }
        if (!static::is_utf8_charset()) {
            return $string;
        }

        // Check for support for utf8 in the installed PCRE library once and store the result in a static
        if (static::$utf8_pcre === null) {
            static::$utf8_pcre = @preg_match('/^./u', 'a');
        }

        // We can't demand utf8 in the PCRE installation, so just return the string in those cases
        if (!static::$utf8_pcre) {
            return $string;
        }

        // preg_match fails when it encounters invalid UTF8 in $string
        if (@preg_match('/^./us', $string) === 1) {
            return $string;
        }

        // Attempt to strip the bad chars if requested (not recommended)
        if ($strip && function_exists('iconv')) {
            return iconv('utf-8', 'utf-8', $string);
        }

        return '';
    }
}

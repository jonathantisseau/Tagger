<?php
namespace Tagger;

trait Attributes
{
	/**
	 * Get the accept attribute value.MDN: List of types the server accepts, typically a file type.
	 * 
	 * Parent tags allowed: <form>, <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/accept
	 * 
	 * @return string
	 */
	public function get_accept()
	{
		return $this->get_attr('accept');
	}

	/**
	 * Set the accept attribute value.MDN: List of types the server accepts, typically a file type.
	 * 
	 * Parent tags allowed: <form>, <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/accept
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_accept($value)
	{
		return $this->set_attr('accept', $value);
	}

	/**
	 * Get the accept-charset attribute value.MDN: List of supported charsets.
	 * 
	 * Parent tags allowed: <form>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_accept_charset()
	{
		return $this->get_attr('accept-charset');
	}

	/**
	 * Set the accept-charset attribute value.MDN: List of supported charsets.
	 * 
	 * Parent tags allowed: <form>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_accept_charset($value)
	{
		return $this->set_attr('accept-charset', $value);
	}

	/**
	 * Get the accesskey attribute value.MDN: Keyboard shortcut to activate or add focus to the element.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/accesskey
	 * 
	 * @return string
	 */
	public function get_accesskey()
	{
		return $this->get_attr('accesskey');
	}

	/**
	 * Set the accesskey attribute value.MDN: Keyboard shortcut to activate or add focus to the element.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/accesskey
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_accesskey($value)
	{
		return $this->set_attr('accesskey', $value);
	}

	/**
	 * Get the action attribute value.MDN: The URI of a program that processes the information submitted via the form.
	 * 
	 * Parent tags allowed: <form>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_action()
	{
		return $this->get_attr('action');
	}

	/**
	 * Set the action attribute value.MDN: The URI of a program that processes the information submitted via the form.
	 * 
	 * Parent tags allowed: <form>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_action($value)
	{
		return $this->set_attr('action', $value);
	}

	/**
	 * Get the align attribute value.MDN: Specifies the horizontal alignment of the element.
	 * 
	 * Parent tags allowed: <applet>, <caption>, <col>, <colgroup>, <hr>, <iframe>, <img>, <table>, <tbody>, <td>, <tfoot >, <th>, <thead>, <tr>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_align()
	{
		return $this->get_attr('align');
	}

	/**
	 * Set the align attribute value.MDN: Specifies the horizontal alignment of the element.
	 * 
	 * Parent tags allowed: <applet>, <caption>, <col>, <colgroup>, <hr>, <iframe>, <img>, <table>, <tbody>, <td>, <tfoot >, <th>, <thead>, <tr>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_align($value)
	{
		return $this->set_attr('align', $value);
	}

	/**
	 * Get the allow attribute value.MDN: Specifies a feature-policy for the iframe.
	 * 
	 * Parent tags allowed: <iframe>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_allow()
	{
		return $this->get_attr('allow');
	}

	/**
	 * Set the allow attribute value.MDN: Specifies a feature-policy for the iframe.
	 * 
	 * Parent tags allowed: <iframe>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_allow($value)
	{
		return $this->set_attr('allow', $value);
	}

	/**
	 * Get the alt attribute value.MDN: Alternative text in case an image can't be displayed.
	 * 
	 * Parent tags allowed: <applet>, <area>, <img>, <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_alt()
	{
		return $this->get_attr('alt');
	}

	/**
	 * Set the alt attribute value.MDN: Alternative text in case an image can't be displayed.
	 * 
	 * Parent tags allowed: <applet>, <area>, <img>, <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_alt($value)
	{
		return $this->set_attr('alt', $value);
	}

	/**
	 * Get the aria-* attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $key
	 * @return string
	 */
	public function get_aria_key($key)
	{
		if (!$key) {
			throw new \InvalidArgumentException('You must provide a valid key');
		}

		return $this->get_attr("aria-$key");
	}

	/**
	 * Set the aria-* attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $key
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_aria_key($key, $value)
	{
		if (!$key) {
			throw new \InvalidArgumentException('You must provide a valid key');
		}

		return $this->set_attr("aria-$key", $value);
	}

	/**
	 * Get the async attribute value.MDN: Executes the script asynchronously.
	 * 
	 * Parent tags allowed: <script>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_async()
	{
		return $this->get_attr('async') === 'async';
	}

	/**
	 * Set the async attribute value.MDN: Executes the script asynchronously.
	 * 
	 * Parent tags allowed: <script>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_async($value = true)
	{
		if (!$value) {
			return $this->remove_attr('async');
		}

		return $this->set_attr('async', 'async');
	}

	/**
	 * Get the autocapitalize attribute value.MDN: Sets whether input is automatically capitalized when entered by user
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/autocapitalize
	 * 
	 * @return string
	 */
	public function get_autocapitalize()
	{
		return $this->get_attr('autocapitalize');
	}

	/**
	 * Set the autocapitalize attribute value.MDN: Sets whether input is automatically capitalized when entered by user
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/autocapitalize
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_autocapitalize($value)
	{
		return $this->set_attr('autocapitalize', $value);
	}

	/**
	 * Get the autocomplete attribute value.MDN: Indicates whether controls in this form can by default have their values automatically completed by the browser.
	 * 
	 * Parent tags allowed: <form>, <input>, <select>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/autocomplete
	 * 
	 * @return bool
	 */
	public function get_autocomplete()
	{
		return $this->get_attr('autocomplete') === 'autocomplete';
	}

	/**
	 * Set the autocomplete attribute value.MDN: Indicates whether controls in this form can by default have their values automatically completed by the browser.
	 * 
	 * Parent tags allowed: <form>, <input>, <select>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/autocomplete
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_autocomplete($value = true)
	{
		if (!$value) {
			return $this->remove_attr('autocomplete');
		}

		return $this->set_attr('autocomplete', 'autocomplete');
	}

	/**
	 * Get the autofocus attribute value.MDN: The element should be automatically focused after the page loaded.
	 * 
	 * Parent tags allowed: <button>, <input>, <keygen>, <select>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_autofocus()
	{
		return $this->get_attr('autofocus') === 'autofocus';
	}

	/**
	 * Set the autofocus attribute value.MDN: The element should be automatically focused after the page loaded.
	 * 
	 * Parent tags allowed: <button>, <input>, <keygen>, <select>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_autofocus($value = true)
	{
		if (!$value) {
			return $this->remove_attr('autofocus');
		}

		return $this->set_attr('autofocus', 'autofocus');
	}

	/**
	 * Get the autoplay attribute value.MDN: The audio or video should play as soon as possible.
	 * 
	 * Parent tags allowed: <audio>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_autoplay()
	{
		return $this->get_attr('autoplay') === 'autoplay';
	}

	/**
	 * Set the autoplay attribute value.MDN: The audio or video should play as soon as possible.
	 * 
	 * Parent tags allowed: <audio>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_autoplay($value = true)
	{
		if (!$value) {
			return $this->remove_attr('autoplay');
		}

		return $this->set_attr('autoplay', 'autoplay');
	}

	/**
	 * Get the background attribute value.MDN: Specifies the URL of an image file. Note: Although browsers and email clients may still support this attribute, it is obsolete. Use CSS background-image instead.
	 * 
	 * Parent tags allowed: <body>, <table>, <td>, <th>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @return string
	 */
	public function get_background()
	{
		return $this->get_attr('background');
	}

	/**
	 * Set the background attribute value.MDN: Specifies the URL of an image file. Note: Although browsers and email clients may still support this attribute, it is obsolete. Use CSS background-image instead.
	 * 
	 * Parent tags allowed: <body>, <table>, <td>, <th>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_background($value)
	{
		return $this->set_attr('background', $value);
	}

	/**
	 * Get the bgcolor attribute value.MDN: Background color of the element. Note: This is a legacy attribute. Please use the CSS background-color property instead.
	 * 
	 * Parent tags allowed: <body>, <col>, <colgroup>, <marquee>, <table>, <tbody>, <tfoot>, <td>, <th>, <tr>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_bgcolor()
	{
		return $this->get_attr('bgcolor');
	}

	/**
	 * Set the bgcolor attribute value.MDN: Background color of the element. Note: This is a legacy attribute. Please use the CSS background-color property instead.
	 * 
	 * Parent tags allowed: <body>, <col>, <colgroup>, <marquee>, <table>, <tbody>, <tfoot>, <td>, <th>, <tr>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_bgcolor($value)
	{
		return $this->set_attr('bgcolor', $value);
	}

	/**
	 * Get the border attribute value.MDN: The border width. Note: This is a legacy attribute. Please use the CSS border property instead.
	 * 
	 * Parent tags allowed: <img>, <object>, <table>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_border()
	{
		return $this->get_attr('border');
	}

	/**
	 * Set the border attribute value.MDN: The border width. Note: This is a legacy attribute. Please use the CSS border property instead.
	 * 
	 * Parent tags allowed: <img>, <object>, <table>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_border($value)
	{
		return $this->set_attr('border', $value);
	}

	/**
	 * Get the buffered attribute value.MDN: Contains the time range of already buffered media.
	 * 
	 * Parent tags allowed: <audio>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_buffered()
	{
		return $this->get_attr('buffered');
	}

	/**
	 * Set the buffered attribute value.MDN: Contains the time range of already buffered media.
	 * 
	 * Parent tags allowed: <audio>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_buffered($value)
	{
		return $this->set_attr('buffered', $value);
	}

	/**
	 * Get the capture attribute value.MDN: From the HTML Media Capture. The definition of 'media capture' in that specification.spec, specifies a new file can be captured.
	 * 
	 * Parent tags allowed: <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/capture
	 * 
	 * @return string
	 */
	public function get_capture()
	{
		return $this->get_attr('capture');
	}

	/**
	 * Set the capture attribute value.MDN: From the HTML Media Capture. The definition of 'media capture' in that specification.spec, specifies a new file can be captured.
	 * 
	 * Parent tags allowed: <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/capture
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_capture($value)
	{
		return $this->set_attr('capture', $value);
	}

	/**
	 * Get the challenge attribute value.MDN: A challenge string that is submitted along with the public key.
	 * 
	 * Parent tags allowed: <keygen>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @return string
	 */
	public function get_challenge()
	{
		return $this->get_attr('challenge');
	}

	/**
	 * Set the challenge attribute value.MDN: A challenge string that is submitted along with the public key.
	 * 
	 * Parent tags allowed: <keygen>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_challenge($value)
	{
		return $this->set_attr('challenge', $value);
	}

	/**
	 * Get the charset attribute value.MDN: Declares the character encoding of the page or script.
	 * 
	 * Parent tags allowed: <meta>, <script>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_charset()
	{
		return $this->get_attr('charset');
	}

	/**
	 * Set the charset attribute value.MDN: Declares the character encoding of the page or script.
	 * 
	 * Parent tags allowed: <meta>, <script>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_charset($value)
	{
		return $this->set_attr('charset', $value);
	}

	/**
	 * Get the checked attribute value.MDN: Indicates whether the element should be checked on page load.
	 * 
	 * Parent tags allowed: <command>, <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_checked()
	{
		return $this->get_attr('checked') === 'checked';
	}

	/**
	 * Set the checked attribute value.MDN: Indicates whether the element should be checked on page load.
	 * 
	 * Parent tags allowed: <command>, <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_checked($value = true)
	{
		if (!$value) {
			return $this->remove_attr('checked');
		}

		return $this->set_attr('checked', 'checked');
	}

	/**
	 * Get the cite attribute value.MDN: Contains a URI which points to the source of the quote or change.
	 * 
	 * Parent tags allowed: <blockquote>, <del>, <ins>, <q>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_cite()
	{
		return $this->get_attr('cite');
	}

	/**
	 * Set the cite attribute value.MDN: Contains a URI which points to the source of the quote or change.
	 * 
	 * Parent tags allowed: <blockquote>, <del>, <ins>, <q>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_cite($value)
	{
		return $this->set_attr('cite', $value);
	}

	/**
	 * Get the class attribute value.MDN: Often used with CSS to style elements with common properties.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/class
	 * 
	 * @return string
	 */
	public function get_class()
	{
		return $this->get_attr('class');
	}

	/**
	 * Set the class attribute value.MDN: Often used with CSS to style elements with common properties.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/class
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_class($value)
	{
		return $this->set_attr('class', $value);
	}

	/**
	 * Get the code attribute value.MDN: Specifies the URL of the applet's class file to be loaded and executed.
	 * 
	 * Parent tags allowed: <applet>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @return string
	 */
	public function get_code()
	{
		return $this->get_attr('code');
	}

	/**
	 * Set the code attribute value.MDN: Specifies the URL of the applet's class file to be loaded and executed.
	 * 
	 * Parent tags allowed: <applet>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_code($value)
	{
		return $this->set_attr('code', $value);
	}

	/**
	 * Get the codebase attribute value.MDN: This attribute gives the absolute or relative URL of the directory where applets' .class files referenced by the code attribute are stored.
	 * 
	 * Parent tags allowed: <applet>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @return string
	 */
	public function get_codebase()
	{
		return $this->get_attr('codebase');
	}

	/**
	 * Set the codebase attribute value.MDN: This attribute gives the absolute or relative URL of the directory where applets' .class files referenced by the code attribute are stored.
	 * 
	 * Parent tags allowed: <applet>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_codebase($value)
	{
		return $this->set_attr('codebase', $value);
	}

	/**
	 * Get the color attribute value.MDN: This attribute sets the text color using either a named color or a color specified in the hexadecimal #RRGGBB format. Note: This is a legacy attribute. Please use the CSS color property instead.
	 * 
	 * Parent tags allowed: <basefont>, <font>, <hr>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_color()
	{
		return $this->get_attr('color');
	}

	/**
	 * Set the color attribute value.MDN: This attribute sets the text color using either a named color or a color specified in the hexadecimal #RRGGBB format. Note: This is a legacy attribute. Please use the CSS color property instead.
	 * 
	 * Parent tags allowed: <basefont>, <font>, <hr>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_color($value)
	{
		return $this->set_attr('color', $value);
	}

	/**
	 * Get the cols attribute value.MDN: Defines the number of columns in a textarea.
	 * 
	 * Parent tags allowed: <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_cols()
	{
		return $this->get_attr('cols');
	}

	/**
	 * Set the cols attribute value.MDN: Defines the number of columns in a textarea.
	 * 
	 * Parent tags allowed: <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_cols($value)
	{
		return $this->set_attr('cols', $value);
	}

	/**
	 * Get the colspan attribute value.MDN: The colspan attribute defines the number of columns a cell should span.
	 * 
	 * Parent tags allowed: <td>, <th>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_colspan()
	{
		return $this->get_attr('colspan');
	}

	/**
	 * Set the colspan attribute value.MDN: The colspan attribute defines the number of columns a cell should span.
	 * 
	 * Parent tags allowed: <td>, <th>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_colspan($value)
	{
		return $this->set_attr('colspan', $value);
	}

	/**
	 * Get the content attribute value.MDN: A value associated with http-equiv or name depending on the context.
	 * 
	 * Parent tags allowed: <meta>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_content()
	{
		return $this->get_attr('content');
	}

	/**
	 * Set the content attribute value.MDN: A value associated with http-equiv or name depending on the context.
	 * 
	 * Parent tags allowed: <meta>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_content($value)
	{
		return $this->set_attr('content', $value);
	}

	/**
	 * Get the contenteditable attribute value.MDN: Indicates whether the element's content is editable.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/contenteditable
	 * 
	 * @return bool
	 */
	public function get_contenteditable()
	{
		return $this->get_attr('contenteditable') === 'contenteditable';
	}

	/**
	 * Set the contenteditable attribute value.MDN: Indicates whether the element's content is editable.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/contenteditable
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_contenteditable($value = true)
	{
		if (!$value) {
			return $this->remove_attr('contenteditable');
		}

		return $this->set_attr('contenteditable', 'contenteditable');
	}

	/**
	 * Get the contextmenu attribute value.MDN: Defines the ID of a <menu> element which will serve as the element's context menu.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_contextmenu()
	{
		return $this->get_attr('contextmenu');
	}

	/**
	 * Set the contextmenu attribute value.MDN: Defines the ID of a <menu> element which will serve as the element's context menu.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_contextmenu($value)
	{
		return $this->set_attr('contextmenu', $value);
	}

	/**
	 * Get the controls attribute value.MDN: Indicates whether the browser should show playback controls to the user.
	 * 
	 * Parent tags allowed: <audio>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_controls()
	{
		return $this->get_attr('controls') === 'controls';
	}

	/**
	 * Set the controls attribute value.MDN: Indicates whether the browser should show playback controls to the user.
	 * 
	 * Parent tags allowed: <audio>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_controls($value = true)
	{
		if (!$value) {
			return $this->remove_attr('controls');
		}

		return $this->set_attr('controls', 'controls');
	}

	/**
	 * Get the coords attribute value.MDN: A set of values specifying the coordinates of the hot-spot region.
	 * 
	 * Parent tags allowed: <area>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_coords()
	{
		return $this->get_attr('coords');
	}

	/**
	 * Set the coords attribute value.MDN: A set of values specifying the coordinates of the hot-spot region.
	 * 
	 * Parent tags allowed: <area>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_coords($value)
	{
		return $this->set_attr('coords', $value);
	}

	/**
	 * Get the crossorigin attribute value.MDN: How the element handles cross-origin requests
	 * 
	 * Parent tags allowed: <audio>, <img>, <link>, <script>, <video>
	 *
	 * @see https://developer.mozilla.org/docs/Web/HTML/CORS_settings_attributes
	 * 
	 * @return string
	 */
	public function get_crossorigin()
	{
		return $this->get_attr('crossorigin');
	}

	/**
	 * Set the crossorigin attribute value.MDN: How the element handles cross-origin requests
	 * 
	 * Parent tags allowed: <audio>, <img>, <link>, <script>, <video>
	 *
	 * @see https://developer.mozilla.org/docs/Web/HTML/CORS_settings_attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_crossorigin($value)
	{
		return $this->set_attr('crossorigin', $value);
	}

	/**
	 * Get the csp attribute value.MDN: Specifies the Content Security Policy that an embedded document must agree to enforce upon itself.
	 * 
	 * Parent tags allowed: <iframe>
	 *
	 * @see https://developer.mozilla.org/docs/Web/API/HTMLiframeElement/csp
	 * 
	 * @return string
	 */
	public function get_csp()
	{
		return $this->get_attr('csp');
	}

	/**
	 * Set the csp attribute value.MDN: Specifies the Content Security Policy that an embedded document must agree to enforce upon itself.
	 * 
	 * Parent tags allowed: <iframe>
	 *
	 * @see https://developer.mozilla.org/docs/Web/API/HTMLiframeElement/csp
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_csp($value)
	{
		return $this->set_attr('csp', $value);
	}

	/**
	 * Get the data attribute value.MDN: Specifies the URL of the resource.
	 * 
	 * Parent tags allowed: <object>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_data()
	{
		return $this->get_attr('data');
	}

	/**
	 * Set the data attribute value.MDN: Specifies the URL of the resource.
	 * 
	 * Parent tags allowed: <object>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_data($value)
	{
		return $this->set_attr('data', $value);
	}

	/**
	 * Get the data-* attribute value.MDN: Lets you attach custom attributes to an HTML element.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/data-*
	 * 
	 * @param string $key
	 * @return string
	 */
	public function get_data_key($key)
	{
		if (!$key) {
			throw new \InvalidArgumentException('You must provide a valid key');
		}

		return $this->get_attr("data-$key");
	}

	/**
	 * Set the data-* attribute value.MDN: Lets you attach custom attributes to an HTML element.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/data-*
	 * 
	 * @param string $key
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_data_key($key, $value)
	{
		if (!$key) {
			throw new \InvalidArgumentException('You must provide a valid key');
		}

		return $this->set_attr("data-$key", $value);
	}

	/**
	 * Get the datetime attribute value.MDN: Indicates the date and time associated with the element.
	 * 
	 * Parent tags allowed: <del>, <ins>, <time>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_datetime()
	{
		return $this->get_attr('datetime');
	}

	/**
	 * Set the datetime attribute value.MDN: Indicates the date and time associated with the element.
	 * 
	 * Parent tags allowed: <del>, <ins>, <time>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_datetime($value)
	{
		return $this->set_attr('datetime', $value);
	}

	/**
	 * Get the decoding attribute value.MDN: Indicates the preferred method to decode the image.
	 * 
	 * Parent tags allowed: <img>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_decoding()
	{
		return $this->get_attr('decoding');
	}

	/**
	 * Set the decoding attribute value.MDN: Indicates the preferred method to decode the image.
	 * 
	 * Parent tags allowed: <img>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_decoding($value)
	{
		return $this->set_attr('decoding', $value);
	}

	/**
	 * Get the default attribute value.MDN: Indicates that the track should be enabled unless the user's preferences indicate something different.
	 * 
	 * Parent tags allowed: <track>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_default()
	{
		return $this->get_attr('default') === 'default';
	}

	/**
	 * Set the default attribute value.MDN: Indicates that the track should be enabled unless the user's preferences indicate something different.
	 * 
	 * Parent tags allowed: <track>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_default($value = true)
	{
		if (!$value) {
			return $this->remove_attr('default');
		}

		return $this->set_attr('default', 'default');
	}

	/**
	 * Get the defer attribute value.MDN: Indicates that the script should be executed after the page has been parsed.
	 * 
	 * Parent tags allowed: <script>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_defer()
	{
		return $this->get_attr('defer') === 'defer';
	}

	/**
	 * Set the defer attribute value.MDN: Indicates that the script should be executed after the page has been parsed.
	 * 
	 * Parent tags allowed: <script>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_defer($value = true)
	{
		if (!$value) {
			return $this->remove_attr('defer');
		}

		return $this->set_attr('defer', 'defer');
	}

	/**
	 * Get the dir attribute value.MDN: Defines the text direction. Allowed values are ltr (Left-To-Right) or rtl (Right-To-Left)
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/dir
	 * 
	 * @return string
	 */
	public function get_dir()
	{
		return $this->get_attr('dir');
	}

	/**
	 * Set the dir attribute value.MDN: Defines the text direction. Allowed values are ltr (Left-To-Right) or rtl (Right-To-Left)
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/dir
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_dir($value)
	{
		return $this->set_attr('dir', $value);
	}

	/**
	 * Get the dirname attribute value.
	 * 
	 * Parent tags allowed: <input>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_dirname()
	{
		return $this->get_attr('dirname');
	}

	/**
	 * Set the dirname attribute value.
	 * 
	 * Parent tags allowed: <input>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_dirname($value)
	{
		return $this->set_attr('dirname', $value);
	}

	/**
	 * Get the disabled attribute value.MDN: Indicates whether the user can interact with the element.
	 * 
	 * Parent tags allowed: <button>, <command>, <fieldset>, <input>, <keygen>, <optgroup>, <option>, <select>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/disabled
	 * 
	 * @return bool
	 */
	public function get_disabled()
	{
		return $this->get_attr('disabled') === 'disabled';
	}

	/**
	 * Set the disabled attribute value.MDN: Indicates whether the user can interact with the element.
	 * 
	 * Parent tags allowed: <button>, <command>, <fieldset>, <input>, <keygen>, <optgroup>, <option>, <select>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/disabled
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_disabled($value = true)
	{
		if (!$value) {
			return $this->remove_attr('disabled');
		}

		return $this->set_attr('disabled', 'disabled');
	}

	/**
	 * Get the download attribute value.MDN: Indicates that the hyperlink is to be used for downloading a resource.
	 * 
	 * Parent tags allowed: <a>, <area>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_download()
	{
		return $this->get_attr('download');
	}

	/**
	 * Set the download attribute value.MDN: Indicates that the hyperlink is to be used for downloading a resource.
	 * 
	 * Parent tags allowed: <a>, <area>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_download($value)
	{
		return $this->set_attr('download', $value);
	}

	/**
	 * Get the draggable attribute value.MDN: Defines whether the element can be dragged.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_draggable()
	{
		return $this->get_attr('draggable');
	}

	/**
	 * Set the draggable attribute value.MDN: Defines whether the element can be dragged.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_draggable($value)
	{
		return $this->set_attr('draggable', $value);
	}

	/**
	 * Get the dropzone attribute value.MDN: Indicates that the element accepts the dropping of content onto it.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_dropzone()
	{
		return $this->get_attr('dropzone');
	}

	/**
	 * Set the dropzone attribute value.MDN: Indicates that the element accepts the dropping of content onto it.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_dropzone($value)
	{
		return $this->set_attr('dropzone', $value);
	}

	/**
	 * Get the enctype attribute value.MDN: Defines the content type of the form date when the method is POST.
	 * 
	 * Parent tags allowed: <form>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_enctype()
	{
		return $this->get_attr('enctype');
	}

	/**
	 * Set the enctype attribute value.MDN: Defines the content type of the form date when the method is POST.
	 * 
	 * Parent tags allowed: <form>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_enctype($value)
	{
		return $this->set_attr('enctype', $value);
	}

	/**
	 * Get the enterkeyhint attribute value.MDN: The enterkeyhint specifies what action label (or icon) to present for the enter key on virtual keyboards. The attribute can be used with form controls (such as the value of textarea elements), or in elements in an editing host (e.g., using contenteditable attribute).
	 * 
	 * Parent tags allowed: <textarea>, <contenteditable>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_enterkeyhint()
	{
		return $this->get_attr('enterkeyhint');
	}

	/**
	 * Set the enterkeyhint attribute value.MDN: The enterkeyhint specifies what action label (or icon) to present for the enter key on virtual keyboards. The attribute can be used with form controls (such as the value of textarea elements), or in elements in an editing host (e.g., using contenteditable attribute).
	 * 
	 * Parent tags allowed: <textarea>, <contenteditable>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_enterkeyhint($value)
	{
		return $this->set_attr('enterkeyhint', $value);
	}

	/**
	 * Get the for attribute value.MDN: Describes elements which belongs to this one.
	 * 
	 * Parent tags allowed: <label>, <output>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_for()
	{
		return $this->get_attr('for');
	}

	/**
	 * Set the for attribute value.MDN: Describes elements which belongs to this one.
	 * 
	 * Parent tags allowed: <label>, <output>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_for($value)
	{
		return $this->set_attr('for', $value);
	}

	/**
	 * Get the form attribute value.MDN: Indicates the form that is the owner of the element.
	 * 
	 * Parent tags allowed: <button>, <fieldset>, <input>, <keygen>, <label>, <meter>, <object>, <output>, <progress>, <select>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_form()
	{
		return $this->get_attr('form');
	}

	/**
	 * Set the form attribute value.MDN: Indicates the form that is the owner of the element.
	 * 
	 * Parent tags allowed: <button>, <fieldset>, <input>, <keygen>, <label>, <meter>, <object>, <output>, <progress>, <select>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_form($value)
	{
		return $this->set_attr('form', $value);
	}

	/**
	 * Get the formaction attribute value.MDN: Indicates the action of the element, overriding the action defined in the <form>.
	 * 
	 * Parent tags allowed: <input>, <button>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_formaction()
	{
		return $this->get_attr('formaction');
	}

	/**
	 * Set the formaction attribute value.MDN: Indicates the action of the element, overriding the action defined in the <form>.
	 * 
	 * Parent tags allowed: <input>, <button>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_formaction($value)
	{
		return $this->set_attr('formaction', $value);
	}

	/**
	 * Get the formenctype attribute value.MDN: If the button/input is a submit button (type="submit"), this attribute sets the encoding type to use during form submission. If this attribute is specified, it overrides the enctype attribute of the button's form owner.
	 * 
	 * Parent tags allowed: <button>, <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_formenctype()
	{
		return $this->get_attr('formenctype');
	}

	/**
	 * Set the formenctype attribute value.MDN: If the button/input is a submit button (type="submit"), this attribute sets the encoding type to use during form submission. If this attribute is specified, it overrides the enctype attribute of the button's form owner.
	 * 
	 * Parent tags allowed: <button>, <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_formenctype($value)
	{
		return $this->set_attr('formenctype', $value);
	}

	/**
	 * Get the formmethod attribute value.MDN: If the button/input is a submit button (type="submit"), this attribute sets the submission method to use during form submission (GET, POST, etc.). If this attribute is specified, it overrides the method attribute of the button's form owner.
	 * 
	 * Parent tags allowed: <button>, <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_formmethod()
	{
		return $this->get_attr('formmethod');
	}

	/**
	 * Set the formmethod attribute value.MDN: If the button/input is a submit button (type="submit"), this attribute sets the submission method to use during form submission (GET, POST, etc.). If this attribute is specified, it overrides the method attribute of the button's form owner.
	 * 
	 * Parent tags allowed: <button>, <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_formmethod($value)
	{
		return $this->set_attr('formmethod', $value);
	}

	/**
	 * Get the formnovalidate attribute value.MDN: If the button/input is a submit button (type="submit"), this boolean attribute specifies that the form is not to be validated when it is submitted. If this attribute is specified, it overrides the novalidate attribute of the button's form owner.
	 * 
	 * Parent tags allowed: <button>, <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_formnovalidate()
	{
		return $this->get_attr('formnovalidate') === 'formnovalidate';
	}

	/**
	 * Set the formnovalidate attribute value.MDN: If the button/input is a submit button (type="submit"), this boolean attribute specifies that the form is not to be validated when it is submitted. If this attribute is specified, it overrides the novalidate attribute of the button's form owner.
	 * 
	 * Parent tags allowed: <button>, <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_formnovalidate($value = true)
	{
		if (!$value) {
			return $this->remove_attr('formnovalidate');
		}

		return $this->set_attr('formnovalidate', 'formnovalidate');
	}

	/**
	 * Get the formtarget attribute value.MDN: If the button/input is a submit button (type="submit"), this attribute specifies the browsing context (for example, tab, window, or inline frame) in which to display the response that is received after submitting the form. If this attribute is specified, it overrides the target attribute of the button's form owner.
	 * 
	 * Parent tags allowed: <button>, <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_formtarget()
	{
		return $this->get_attr('formtarget');
	}

	/**
	 * Set the formtarget attribute value.MDN: If the button/input is a submit button (type="submit"), this attribute specifies the browsing context (for example, tab, window, or inline frame) in which to display the response that is received after submitting the form. If this attribute is specified, it overrides the target attribute of the button's form owner.
	 * 
	 * Parent tags allowed: <button>, <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_formtarget($value)
	{
		return $this->set_attr('formtarget', $value);
	}

	/**
	 * Get the headers attribute value.MDN: IDs of the <th> elements which applies to this element.
	 * 
	 * Parent tags allowed: <td>, <th>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_headers()
	{
		return $this->get_attr('headers');
	}

	/**
	 * Set the headers attribute value.MDN: IDs of the <th> elements which applies to this element.
	 * 
	 * Parent tags allowed: <td>, <th>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_headers($value)
	{
		return $this->set_attr('headers', $value);
	}

	/**
	 * Get the height attribute value.MDN: Specifies the height of elements listed here. For all other elements, use the CSS height property. Note: In some instances, such as <div>, this is a legacy attribute, in which case the CSS height property should be used instead.
	 * 
	 * Parent tags allowed: <canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_height()
	{
		return $this->get_attr('height');
	}

	/**
	 * Set the height attribute value.MDN: Specifies the height of elements listed here. For all other elements, use the CSS height property. Note: In some instances, such as <div>, this is a legacy attribute, in which case the CSS height property should be used instead.
	 * 
	 * Parent tags allowed: <canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_height($value)
	{
		return $this->set_attr('height', $value);
	}

	/**
	 * Get the hidden attribute value.MDN: Prevents rendering of given element, while keeping child elements, e.g. script elements, active.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/hidden
	 * 
	 * @return bool
	 */
	public function get_hidden()
	{
		return $this->get_attr('hidden') === 'hidden';
	}

	/**
	 * Set the hidden attribute value.MDN: Prevents rendering of given element, while keeping child elements, e.g. script elements, active.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/hidden
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_hidden($value = true)
	{
		if (!$value) {
			return $this->remove_attr('hidden');
		}

		return $this->set_attr('hidden', 'hidden');
	}

	/**
	 * Get the high attribute value.MDN: Indicates the lower bound of the upper range.
	 * 
	 * Parent tags allowed: <meter>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_high()
	{
		return $this->get_attr('high');
	}

	/**
	 * Set the high attribute value.MDN: Indicates the lower bound of the upper range.
	 * 
	 * Parent tags allowed: <meter>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_high($value)
	{
		return $this->set_attr('high', $value);
	}

	/**
	 * Get the href attribute value.MDN: The URL of a linked resource.
	 * 
	 * Parent tags allowed: <a>, <area>, <base>, <link>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_href()
	{
		return $this->get_attr('href');
	}

	/**
	 * Set the href attribute value.MDN: The URL of a linked resource.
	 * 
	 * Parent tags allowed: <a>, <area>, <base>, <link>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_href($value)
	{
		return $this->set_attr('href', $value);
	}

	/**
	 * Get the hreflang attribute value.MDN: Specifies the language of the linked resource.
	 * 
	 * Parent tags allowed: <a>, <area>, <link>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_hreflang()
	{
		return $this->get_attr('hreflang');
	}

	/**
	 * Set the hreflang attribute value.MDN: Specifies the language of the linked resource.
	 * 
	 * Parent tags allowed: <a>, <area>, <link>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_hreflang($value)
	{
		return $this->set_attr('hreflang', $value);
	}

	/**
	 * Get the http-equiv attribute value.MDN: Defines a pragma directive.
	 * 
	 * Parent tags allowed: <meta>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_http_equiv()
	{
		return $this->get_attr('http-equiv');
	}

	/**
	 * Set the http-equiv attribute value.MDN: Defines a pragma directive.
	 * 
	 * Parent tags allowed: <meta>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_http_equiv($value)
	{
		return $this->set_attr('http-equiv', $value);
	}

	/**
	 * Get the icon attribute value.MDN: Specifies a picture which represents the command.
	 * 
	 * Parent tags allowed: <command>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @return string
	 */
	public function get_icon()
	{
		return $this->get_attr('icon');
	}

	/**
	 * Set the icon attribute value.MDN: Specifies a picture which represents the command.
	 * 
	 * Parent tags allowed: <command>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_icon($value)
	{
		return $this->set_attr('icon', $value);
	}

	/**
	 * Get the id attribute value.MDN: Often used with CSS to style a specific element. The value of this attribute must be unique.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/id
	 * 
	 * @return string
	 */
	public function get_id()
	{
		return $this->get_attr('id');
	}

	/**
	 * Set the id attribute value.MDN: Often used with CSS to style a specific element. The value of this attribute must be unique.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/id
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_id($value)
	{
		return $this->set_attr('id', $value);
	}

	/**
	 * Get the importance attribute value.MDN: Indicates the relative fetch priority for the resource.
	 * 
	 * Parent tags allowed: <iframe>, <img>, <link>, <script>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_importance()
	{
		return $this->get_attr('importance');
	}

	/**
	 * Set the importance attribute value.MDN: Indicates the relative fetch priority for the resource.
	 * 
	 * Parent tags allowed: <iframe>, <img>, <link>, <script>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_importance($value)
	{
		return $this->set_attr('importance', $value);
	}

	/**
	 * Get the integrity attribute value.MDN: Specifies a Subresource Integrity value that allows browsers to verify what they fetch.
	 * 
	 * Parent tags allowed: <link>, <script>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/Security/Subresource_Integrity
	 * 
	 * @return string
	 */
	public function get_integrity()
	{
		return $this->get_attr('integrity');
	}

	/**
	 * Set the integrity attribute value.MDN: Specifies a Subresource Integrity value that allows browsers to verify what they fetch.
	 * 
	 * Parent tags allowed: <link>, <script>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/Security/Subresource_Integrity
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_integrity($value)
	{
		return $this->set_attr('integrity', $value);
	}

	/**
	 * Get the intrinsicsize attribute value.MDN: This attribute tells the browser to ignore the actual intrinsic size of the image and pretend it’s the size specified in the attribute.
	 * 
	 * Parent tags allowed: <img>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img#attr-intrinsicsize
	 * 
	 * @return string
	 */
	public function get_intrinsicsize()
	{
		return $this->get_attr('intrinsicsize');
	}

	/**
	 * Set the intrinsicsize attribute value.MDN: This attribute tells the browser to ignore the actual intrinsic size of the image and pretend it’s the size specified in the attribute.
	 * 
	 * Parent tags allowed: <img>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img#attr-intrinsicsize
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_intrinsicsize($value)
	{
		return $this->set_attr('intrinsicsize', $value);
	}

	/**
	 * Get the inputmode attribute value.MDN: Provides a hint as to the type of data that might be entered by the user while editing the element or its contents. The attribute can be used with form controls (such as the value of textarea elements), or in elements in an editing host (e.g., using contenteditable attribute).
	 * 
	 * Parent tags allowed: <textarea>, <contenteditable>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/inputmode
	 * 
	 * @return string
	 */
	public function get_inputmode()
	{
		return $this->get_attr('inputmode');
	}

	/**
	 * Set the inputmode attribute value.MDN: Provides a hint as to the type of data that might be entered by the user while editing the element or its contents. The attribute can be used with form controls (such as the value of textarea elements), or in elements in an editing host (e.g., using contenteditable attribute).
	 * 
	 * Parent tags allowed: <textarea>, <contenteditable>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/inputmode
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_inputmode($value)
	{
		return $this->set_attr('inputmode', $value);
	}

	/**
	 * Get the ismap attribute value.MDN: Indicates that the image is part of a server-side image map.
	 * 
	 * Parent tags allowed: <img>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_ismap()
	{
		return $this->get_attr('ismap') === 'ismap';
	}

	/**
	 * Set the ismap attribute value.MDN: Indicates that the image is part of a server-side image map.
	 * 
	 * Parent tags allowed: <img>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_ismap($value = true)
	{
		if (!$value) {
			return $this->remove_attr('ismap');
		}

		return $this->set_attr('ismap', 'ismap');
	}

	/**
	 * Get the itemprop attribute value.MDN: The itemprop global attribute is used to add properties to an item. Every HTML element can have an itemprop attribute specified, and an itemprop consists of a name-value pair. Each name-value pair is called a property, and a group of one or more properties forms an item. Property values are either a string or a URL and can be associated with a very wide range of elements including <audio>, <embed>, <iframe>, <img>, <link>, <object>, <source> , <track>, and <video>.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/itemprop
	 * 
	 * @return string
	 */
	public function get_itemprop()
	{
		return $this->get_attr('itemprop');
	}

	/**
	 * Set the itemprop attribute value.MDN: The itemprop global attribute is used to add properties to an item. Every HTML element can have an itemprop attribute specified, and an itemprop consists of a name-value pair. Each name-value pair is called a property, and a group of one or more properties forms an item. Property values are either a string or a URL and can be associated with a very wide range of elements including <audio>, <embed>, <iframe>, <img>, <link>, <object>, <source> , <track>, and <video>.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/itemprop
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_itemprop($value)
	{
		return $this->set_attr('itemprop', $value);
	}

	/**
	 * Get the keytype attribute value.MDN: Specifies the type of key generated.
	 * 
	 * Parent tags allowed: <keygen>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @return string
	 */
	public function get_keytype()
	{
		return $this->get_attr('keytype');
	}

	/**
	 * Set the keytype attribute value.MDN: Specifies the type of key generated.
	 * 
	 * Parent tags allowed: <keygen>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_keytype($value)
	{
		return $this->set_attr('keytype', $value);
	}

	/**
	 * Get the kind attribute value.MDN: Specifies the kind of text track.
	 * 
	 * Parent tags allowed: <track>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_kind()
	{
		return $this->get_attr('kind');
	}

	/**
	 * Set the kind attribute value.MDN: Specifies the kind of text track.
	 * 
	 * Parent tags allowed: <track>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_kind($value)
	{
		return $this->set_attr('kind', $value);
	}

	/**
	 * Get the label attribute value.MDN: Specifies a user-readable title of the element.
	 * 
	 * Parent tags allowed: <optgroup>, <option>, <track>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_label()
	{
		return $this->get_attr('label');
	}

	/**
	 * Set the label attribute value.MDN: Specifies a user-readable title of the element.
	 * 
	 * Parent tags allowed: <optgroup>, <option>, <track>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_label($value)
	{
		return $this->set_attr('label', $value);
	}

	/**
	 * Get the lang attribute value.MDN: Defines the language used in the element.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/lang
	 * 
	 * @return string
	 */
	public function get_lang()
	{
		return $this->get_attr('lang');
	}

	/**
	 * Set the lang attribute value.MDN: Defines the language used in the element.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/lang
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_lang($value)
	{
		return $this->set_attr('lang', $value);
	}

	/**
	 * Get the language attribute value.MDN: Defines the script language used in the element.
	 * 
	 * Parent tags allowed: <script>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_language()
	{
		return $this->get_attr('language');
	}

	/**
	 * Set the language attribute value.MDN: Defines the script language used in the element.
	 * 
	 * Parent tags allowed: <script>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_language($value)
	{
		return $this->set_attr('language', $value);
	}

	/**
	 * Get the loading attribute value.MDN: Indicates if the element should be loaded lazily (loading="lazy") or loaded immediately (loading="eager"). WIP: WHATWG PR #3752
	 * 
	 * Parent tags allowed: <img>, <iframe>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_loading()
	{
		return $this->get_attr('loading');
	}

	/**
	 * Set the loading attribute value.MDN: Indicates if the element should be loaded lazily (loading="lazy") or loaded immediately (loading="eager"). WIP: WHATWG PR #3752
	 * 
	 * Parent tags allowed: <img>, <iframe>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_loading($value)
	{
		return $this->set_attr('loading', $value);
	}

	/**
	 * Get the list attribute value.MDN: Identifies a list of pre-defined options to suggest to the user.
	 * 
	 * Parent tags allowed: <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_list()
	{
		return $this->get_attr('list');
	}

	/**
	 * Set the list attribute value.MDN: Identifies a list of pre-defined options to suggest to the user.
	 * 
	 * Parent tags allowed: <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_list($value)
	{
		return $this->set_attr('list', $value);
	}

	/**
	 * Get the loop attribute value.MDN: Indicates whether the media should start playing from the start when it's finished.
	 * 
	 * Parent tags allowed: <audio>, <bgsound>, <marquee>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_loop()
	{
		return $this->get_attr('loop') === 'loop';
	}

	/**
	 * Set the loop attribute value.MDN: Indicates whether the media should start playing from the start when it's finished.
	 * 
	 * Parent tags allowed: <audio>, <bgsound>, <marquee>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_loop($value = true)
	{
		if (!$value) {
			return $this->remove_attr('loop');
		}

		return $this->set_attr('loop', 'loop');
	}

	/**
	 * Get the low attribute value.MDN: Indicates the upper bound of the lower range.
	 * 
	 * Parent tags allowed: <meter>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_low()
	{
		return $this->get_attr('low');
	}

	/**
	 * Set the low attribute value.MDN: Indicates the upper bound of the lower range.
	 * 
	 * Parent tags allowed: <meter>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_low($value)
	{
		return $this->set_attr('low', $value);
	}

	/**
	 * Get the manifest attribute value.MDN: Specifies the URL of the document's cache manifest. Note: This attribute is obsolete, use <link rel="manifest"> instead.
	 * 
	 * Parent tags allowed: <html>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @return string
	 */
	public function get_manifest()
	{
		return $this->get_attr('manifest');
	}

	/**
	 * Set the manifest attribute value.MDN: Specifies the URL of the document's cache manifest. Note: This attribute is obsolete, use <link rel="manifest"> instead.
	 * 
	 * Parent tags allowed: <html>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_manifest($value)
	{
		return $this->set_attr('manifest', $value);
	}

	/**
	 * Get the max attribute value.MDN: Indicates the maximum value allowed.
	 * 
	 * Parent tags allowed: <input>, <meter>, <progress>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/max
	 * 
	 * @return string
	 */
	public function get_max()
	{
		return $this->get_attr('max');
	}

	/**
	 * Set the max attribute value.MDN: Indicates the maximum value allowed.
	 * 
	 * Parent tags allowed: <input>, <meter>, <progress>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/max
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_max($value)
	{
		return $this->set_attr('max', $value);
	}

	/**
	 * Get the maxlength attribute value.MDN: Defines the maximum number of characters allowed in the element.
	 * 
	 * Parent tags allowed: <input>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/maxlength
	 * 
	 * @return string
	 */
	public function get_maxlength()
	{
		return $this->get_attr('maxlength');
	}

	/**
	 * Set the maxlength attribute value.MDN: Defines the maximum number of characters allowed in the element.
	 * 
	 * Parent tags allowed: <input>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/maxlength
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_maxlength($value)
	{
		return $this->set_attr('maxlength', $value);
	}

	/**
	 * Get the minlength attribute value.MDN: Defines the minimum number of characters allowed in the element.
	 * 
	 * Parent tags allowed: <input>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/minlength
	 * 
	 * @return string
	 */
	public function get_minlength()
	{
		return $this->get_attr('minlength');
	}

	/**
	 * Set the minlength attribute value.MDN: Defines the minimum number of characters allowed in the element.
	 * 
	 * Parent tags allowed: <input>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/minlength
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_minlength($value)
	{
		return $this->set_attr('minlength', $value);
	}

	/**
	 * Get the media attribute value.MDN: Specifies a hint of the media for which the linked resource was designed.
	 * 
	 * Parent tags allowed: <a>, <area>, <link>, <source>, <style>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_media()
	{
		return $this->get_attr('media');
	}

	/**
	 * Set the media attribute value.MDN: Specifies a hint of the media for which the linked resource was designed.
	 * 
	 * Parent tags allowed: <a>, <area>, <link>, <source>, <style>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_media($value)
	{
		return $this->set_attr('media', $value);
	}

	/**
	 * Get the method attribute value.MDN: Defines which HTTP method to use when submitting the form. Can be GET (default) or POST.
	 * 
	 * Parent tags allowed: <form>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_method()
	{
		return $this->get_attr('method');
	}

	/**
	 * Set the method attribute value.MDN: Defines which HTTP method to use when submitting the form. Can be GET (default) or POST.
	 * 
	 * Parent tags allowed: <form>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_method($value)
	{
		return $this->set_attr('method', $value);
	}

	/**
	 * Get the min attribute value.MDN: Indicates the minimum value allowed.
	 * 
	 * Parent tags allowed: <input>, <meter>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/min
	 * 
	 * @return string
	 */
	public function get_min()
	{
		return $this->get_attr('min');
	}

	/**
	 * Set the min attribute value.MDN: Indicates the minimum value allowed.
	 * 
	 * Parent tags allowed: <input>, <meter>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/min
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_min($value)
	{
		return $this->set_attr('min', $value);
	}

	/**
	 * Get the multiple attribute value.MDN: Indicates whether multiple values can be entered in an input of the type email or file.
	 * 
	 * Parent tags allowed: <input>, <select>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/multiple
	 * 
	 * @return bool
	 */
	public function get_multiple()
	{
		return $this->get_attr('multiple') === 'multiple';
	}

	/**
	 * Set the multiple attribute value.MDN: Indicates whether multiple values can be entered in an input of the type email or file.
	 * 
	 * Parent tags allowed: <input>, <select>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/multiple
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_multiple($value = true)
	{
		if (!$value) {
			return $this->remove_attr('multiple');
		}

		return $this->set_attr('multiple', 'multiple');
	}

	/**
	 * Get the muted attribute value.MDN: Indicates whether the audio will be initially silenced on page load.
	 * 
	 * Parent tags allowed: <audio>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_muted()
	{
		return $this->get_attr('muted') === 'muted';
	}

	/**
	 * Set the muted attribute value.MDN: Indicates whether the audio will be initially silenced on page load.
	 * 
	 * Parent tags allowed: <audio>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_muted($value = true)
	{
		if (!$value) {
			return $this->remove_attr('muted');
		}

		return $this->set_attr('muted', 'muted');
	}

	/**
	 * Get the name attribute value.MDN: Name of the element. For example used by the server to identify the fields in form submits.
	 * 
	 * Parent tags allowed: <button>, <form>, <fieldset>, <iframe>, <input>, <keygen>, <object>, <output>, <select>, <textarea>, <map>, <meta>, <param>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_name()
	{
		return $this->get_attr('name');
	}

	/**
	 * Set the name attribute value.MDN: Name of the element. For example used by the server to identify the fields in form submits.
	 * 
	 * Parent tags allowed: <button>, <form>, <fieldset>, <iframe>, <input>, <keygen>, <object>, <output>, <select>, <textarea>, <map>, <meta>, <param>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_name($value)
	{
		return $this->set_attr('name', $value);
	}

	/**
	 * Get the novalidate attribute value.MDN: This attribute indicates that the form shouldn't be validated when submitted.
	 * 
	 * Parent tags allowed: <form>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_novalidate()
	{
		return $this->get_attr('novalidate') === 'novalidate';
	}

	/**
	 * Set the novalidate attribute value.MDN: This attribute indicates that the form shouldn't be validated when submitted.
	 * 
	 * Parent tags allowed: <form>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_novalidate($value = true)
	{
		if (!$value) {
			return $this->remove_attr('novalidate');
		}

		return $this->set_attr('novalidate', 'novalidate');
	}

	/**
	 * Get the open attribute value.MDN: Indicates whether the details will be shown on page load.
	 * 
	 * Parent tags allowed: <details>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_open()
	{
		return $this->get_attr('open') === 'open';
	}

	/**
	 * Set the open attribute value.MDN: Indicates whether the details will be shown on page load.
	 * 
	 * Parent tags allowed: <details>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_open($value = true)
	{
		if (!$value) {
			return $this->remove_attr('open');
		}

		return $this->set_attr('open', 'open');
	}

	/**
	 * Get the optimum attribute value.MDN: Indicates the optimal numeric value.
	 * 
	 * Parent tags allowed: <meter>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_optimum()
	{
		return $this->get_attr('optimum');
	}

	/**
	 * Set the optimum attribute value.MDN: Indicates the optimal numeric value.
	 * 
	 * Parent tags allowed: <meter>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_optimum($value)
	{
		return $this->set_attr('optimum', $value);
	}

	/**
	 * Get the pattern attribute value.MDN: Defines a regular expression which the element's value will be validated against.
	 * 
	 * Parent tags allowed: <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/pattern
	 * 
	 * @return string
	 */
	public function get_pattern()
	{
		return $this->get_attr('pattern');
	}

	/**
	 * Set the pattern attribute value.MDN: Defines a regular expression which the element's value will be validated against.
	 * 
	 * Parent tags allowed: <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/pattern
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_pattern($value)
	{
		return $this->set_attr('pattern', $value);
	}

	/**
	 * Get the ping attribute value.MDN: The ping attribute specifies a space-separated list of URLs to be notified if a user follows the hyperlink.
	 * 
	 * Parent tags allowed: <a>, <area>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-ping
	 * 
	 * @return string
	 */
	public function get_ping()
	{
		return $this->get_attr('ping');
	}

	/**
	 * Set the ping attribute value.MDN: The ping attribute specifies a space-separated list of URLs to be notified if a user follows the hyperlink.
	 * 
	 * Parent tags allowed: <a>, <area>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#attr-ping
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_ping($value)
	{
		return $this->set_attr('ping', $value);
	}

	/**
	 * Get the placeholder attribute value.MDN: Provides a hint to the user of what can be entered in the field.
	 * 
	 * Parent tags allowed: <input>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_placeholder()
	{
		return $this->get_attr('placeholder');
	}

	/**
	 * Set the placeholder attribute value.MDN: Provides a hint to the user of what can be entered in the field.
	 * 
	 * Parent tags allowed: <input>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_placeholder($value)
	{
		return $this->set_attr('placeholder', $value);
	}

	/**
	 * Get the poster attribute value.MDN: A URL indicating a poster frame to show until the user plays or seeks.
	 * 
	 * Parent tags allowed: <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_poster()
	{
		return $this->get_attr('poster');
	}

	/**
	 * Set the poster attribute value.MDN: A URL indicating a poster frame to show until the user plays or seeks.
	 * 
	 * Parent tags allowed: <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_poster($value)
	{
		return $this->set_attr('poster', $value);
	}

	/**
	 * Get the preload attribute value.MDN: Indicates whether the whole resource, parts of it or nothing should be preloaded.
	 * 
	 * Parent tags allowed: <audio>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_preload()
	{
		return $this->get_attr('preload');
	}

	/**
	 * Set the preload attribute value.MDN: Indicates whether the whole resource, parts of it or nothing should be preloaded.
	 * 
	 * Parent tags allowed: <audio>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_preload($value)
	{
		return $this->set_attr('preload', $value);
	}

	/**
	 * Get the radiogroup attribute value.
	 * 
	 * Parent tags allowed: <command>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @return string
	 */
	public function get_radiogroup()
	{
		return $this->get_attr('radiogroup');
	}

	/**
	 * Set the radiogroup attribute value.
	 * 
	 * Parent tags allowed: <command>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * @deprecated
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_radiogroup($value)
	{
		return $this->set_attr('radiogroup', $value);
	}

	/**
	 * Get the readonly attribute value.MDN: Indicates whether the element can be edited.
	 * 
	 * Parent tags allowed: <input>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/readonly
	 * 
	 * @return bool
	 */
	public function get_readonly()
	{
		return $this->get_attr('readonly') === 'readonly';
	}

	/**
	 * Set the readonly attribute value.MDN: Indicates whether the element can be edited.
	 * 
	 * Parent tags allowed: <input>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/readonly
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_readonly($value = true)
	{
		if (!$value) {
			return $this->remove_attr('readonly');
		}

		return $this->set_attr('readonly', 'readonly');
	}

	/**
	 * Get the referrerpolicy attribute value.MDN: Specifies which referrer is sent when fetching the resource.
	 * 
	 * Parent tags allowed: <a>, <area>, <iframe>, <img>, <link>, <script>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_referrerpolicy()
	{
		return $this->get_attr('referrerpolicy');
	}

	/**
	 * Set the referrerpolicy attribute value.MDN: Specifies which referrer is sent when fetching the resource.
	 * 
	 * Parent tags allowed: <a>, <area>, <iframe>, <img>, <link>, <script>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_referrerpolicy($value)
	{
		return $this->set_attr('referrerpolicy', $value);
	}

	/**
	 * Get the rel attribute value.MDN: Specifies the relationship of the target object to the link object.
	 * 
	 * Parent tags allowed: <a>, <area>, <link>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/rel
	 * 
	 * @return string
	 */
	public function get_rel()
	{
		return $this->get_attr('rel');
	}

	/**
	 * Set the rel attribute value.MDN: Specifies the relationship of the target object to the link object.
	 * 
	 * Parent tags allowed: <a>, <area>, <link>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/rel
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_rel($value)
	{
		return $this->set_attr('rel', $value);
	}

	/**
	 * Get the required attribute value.MDN: Indicates whether this element is required to fill out or not.
	 * 
	 * Parent tags allowed: <input>, <select>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/required
	 * 
	 * @return bool
	 */
	public function get_required()
	{
		return $this->get_attr('required') === 'required';
	}

	/**
	 * Set the required attribute value.MDN: Indicates whether this element is required to fill out or not.
	 * 
	 * Parent tags allowed: <input>, <select>, <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/required
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_required($value = true)
	{
		if (!$value) {
			return $this->remove_attr('required');
		}

		return $this->set_attr('required', 'required');
	}

	/**
	 * Get the reversed attribute value.MDN: Indicates whether the list should be displayed in a descending order instead of a ascending.
	 * 
	 * Parent tags allowed: <ol>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_reversed()
	{
		return $this->get_attr('reversed') === 'reversed';
	}

	/**
	 * Set the reversed attribute value.MDN: Indicates whether the list should be displayed in a descending order instead of a ascending.
	 * 
	 * Parent tags allowed: <ol>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_reversed($value = true)
	{
		if (!$value) {
			return $this->remove_attr('reversed');
		}

		return $this->set_attr('reversed', 'reversed');
	}

	/**
	 * Get the rows attribute value.MDN: Defines the number of rows in a text area.
	 * 
	 * Parent tags allowed: <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_rows()
	{
		return $this->get_attr('rows');
	}

	/**
	 * Set the rows attribute value.MDN: Defines the number of rows in a text area.
	 * 
	 * Parent tags allowed: <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_rows($value)
	{
		return $this->set_attr('rows', $value);
	}

	/**
	 * Get the rowspan attribute value.MDN: Defines the number of rows a table cell should span over.
	 * 
	 * Parent tags allowed: <td>, <th>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_rowspan()
	{
		return $this->get_attr('rowspan');
	}

	/**
	 * Set the rowspan attribute value.MDN: Defines the number of rows a table cell should span over.
	 * 
	 * Parent tags allowed: <td>, <th>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_rowspan($value)
	{
		return $this->set_attr('rowspan', $value);
	}

	/**
	 * Get the sandbox attribute value.MDN: Stops a document loaded in an iframe from using certain features (such as submitting forms or opening new windows).
	 * 
	 * Parent tags allowed: <iframe>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe#attr-sandbox
	 * 
	 * @return string
	 */
	public function get_sandbox()
	{
		return $this->get_attr('sandbox');
	}

	/**
	 * Set the sandbox attribute value.MDN: Stops a document loaded in an iframe from using certain features (such as submitting forms or opening new windows).
	 * 
	 * Parent tags allowed: <iframe>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe#attr-sandbox
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_sandbox($value)
	{
		return $this->set_attr('sandbox', $value);
	}

	/**
	 * Get the scope attribute value.MDN: Defines the cells that the header test (defined in the th element) relates to.
	 * 
	 * Parent tags allowed: <th>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_scope()
	{
		return $this->get_attr('scope');
	}

	/**
	 * Set the scope attribute value.MDN: Defines the cells that the header test (defined in the th element) relates to.
	 * 
	 * Parent tags allowed: <th>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_scope($value)
	{
		return $this->set_attr('scope', $value);
	}

	/**
	 * Get the scoped attribute value.
	 * 
	 * Parent tags allowed: <style>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_scoped()
	{
		return $this->get_attr('scoped') === 'scoped';
	}

	/**
	 * Set the scoped attribute value.
	 * 
	 * Parent tags allowed: <style>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_scoped($value = true)
	{
		if (!$value) {
			return $this->remove_attr('scoped');
		}

		return $this->set_attr('scoped', 'scoped');
	}

	/**
	 * Get the selected attribute value.MDN: Defines a value which will be selected on page load.
	 * 
	 * Parent tags allowed: <option>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_selected()
	{
		return $this->get_attr('selected') === 'selected';
	}

	/**
	 * Set the selected attribute value.MDN: Defines a value which will be selected on page load.
	 * 
	 * Parent tags allowed: <option>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_selected($value = true)
	{
		if (!$value) {
			return $this->remove_attr('selected');
		}

		return $this->set_attr('selected', 'selected');
	}

	/**
	 * Get the shape attribute value.
	 * 
	 * Parent tags allowed: <a>, <area>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_shape()
	{
		return $this->get_attr('shape');
	}

	/**
	 * Set the shape attribute value.
	 * 
	 * Parent tags allowed: <a>, <area>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_shape($value)
	{
		return $this->set_attr('shape', $value);
	}

	/**
	 * Get the size attribute value.MDN: Defines the width of the element (in pixels). If the element's type attribute is text or password then it's the number of characters.
	 * 
	 * Parent tags allowed: <input>, <select>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/size
	 * 
	 * @return string
	 */
	public function get_size()
	{
		return $this->get_attr('size');
	}

	/**
	 * Set the size attribute value.MDN: Defines the width of the element (in pixels). If the element's type attribute is text or password then it's the number of characters.
	 * 
	 * Parent tags allowed: <input>, <select>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/size
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_size($value)
	{
		return $this->set_attr('size', $value);
	}

	/**
	 * Get the sizes attribute value.
	 * 
	 * Parent tags allowed: <link>, <img>, <source>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_sizes()
	{
		return $this->get_attr('sizes');
	}

	/**
	 * Set the sizes attribute value.
	 * 
	 * Parent tags allowed: <link>, <img>, <source>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_sizes($value)
	{
		return $this->set_attr('sizes', $value);
	}

	/**
	 * Get the slot attribute value.MDN: Assigns a slot in a shadow DOM shadow tree to an element.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_slot()
	{
		return $this->get_attr('slot');
	}

	/**
	 * Set the slot attribute value.MDN: Assigns a slot in a shadow DOM shadow tree to an element.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_slot($value)
	{
		return $this->set_attr('slot', $value);
	}

	/**
	 * Get the span attribute value.
	 * 
	 * Parent tags allowed: <col>, <colgroup>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_span()
	{
		return $this->get_attr('span');
	}

	/**
	 * Set the span attribute value.
	 * 
	 * Parent tags allowed: <col>, <colgroup>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_span($value)
	{
		return $this->set_attr('span', $value);
	}

	/**
	 * Get the spellcheck attribute value.MDN: Indicates whether spell checking is allowed for the element.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_spellcheck()
	{
		return $this->get_attr('spellcheck') === 'spellcheck';
	}

	/**
	 * Set the spellcheck attribute value.MDN: Indicates whether spell checking is allowed for the element.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_spellcheck($value = true)
	{
		if (!$value) {
			return $this->remove_attr('spellcheck');
		}

		return $this->set_attr('spellcheck', 'spellcheck');
	}

	/**
	 * Get the src attribute value.MDN: The URL of the embeddable content.
	 * 
	 * Parent tags allowed: <audio>, <embed>, <iframe>, <img>, <input>, <script>, <source>, <track>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_src()
	{
		return $this->get_attr('src');
	}

	/**
	 * Set the src attribute value.MDN: The URL of the embeddable content.
	 * 
	 * Parent tags allowed: <audio>, <embed>, <iframe>, <img>, <input>, <script>, <source>, <track>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_src($value)
	{
		return $this->set_attr('src', $value);
	}

	/**
	 * Get the srcdoc attribute value.
	 * 
	 * Parent tags allowed: <iframe>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_srcdoc()
	{
		return $this->get_attr('srcdoc');
	}

	/**
	 * Set the srcdoc attribute value.
	 * 
	 * Parent tags allowed: <iframe>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_srcdoc($value)
	{
		return $this->set_attr('srcdoc', $value);
	}

	/**
	 * Get the srclang attribute value.
	 * 
	 * Parent tags allowed: <track>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_srclang()
	{
		return $this->get_attr('srclang');
	}

	/**
	 * Set the srclang attribute value.
	 * 
	 * Parent tags allowed: <track>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_srclang($value)
	{
		return $this->set_attr('srclang', $value);
	}

	/**
	 * Get the srcset attribute value.MDN: One or more responsive image candidates.
	 * 
	 * Parent tags allowed: <img>, <source>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_srcset()
	{
		return $this->get_attr('srcset');
	}

	/**
	 * Set the srcset attribute value.MDN: One or more responsive image candidates.
	 * 
	 * Parent tags allowed: <img>, <source>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_srcset($value)
	{
		return $this->set_attr('srcset', $value);
	}

	/**
	 * Get the start attribute value.MDN: Defines the first number if other than 1.
	 * 
	 * Parent tags allowed: <ol>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_start()
	{
		return $this->get_attr('start');
	}

	/**
	 * Set the start attribute value.MDN: Defines the first number if other than 1.
	 * 
	 * Parent tags allowed: <ol>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_start($value)
	{
		return $this->set_attr('start', $value);
	}

	/**
	 * Get the step attribute value.
	 * 
	 * Parent tags allowed: <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/step
	 * 
	 * @return string
	 */
	public function get_step()
	{
		return $this->get_attr('step');
	}

	/**
	 * Set the step attribute value.
	 * 
	 * Parent tags allowed: <input>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/step
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_step($value)
	{
		return $this->set_attr('step', $value);
	}

	/**
	 * Get the style attribute value.MDN: Defines CSS styles which will override styles previously set.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/style
	 * 
	 * @return string
	 */
	public function get_style()
	{
		return $this->get_attr('style');
	}

	/**
	 * Set the style attribute value.MDN: Defines CSS styles which will override styles previously set.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/style
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_style($value)
	{
		return $this->set_attr('style', $value);
	}

	/**
	 * Get the summary attribute value.
	 * 
	 * Parent tags allowed: <table>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_summary()
	{
		return $this->get_attr('summary');
	}

	/**
	 * Set the summary attribute value.
	 * 
	 * Parent tags allowed: <table>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_summary($value)
	{
		return $this->set_attr('summary', $value);
	}

	/**
	 * Get the tabindex attribute value.MDN: Overrides the browser's default tab order and follows the one specified instead.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/tabindex
	 * 
	 * @return string
	 */
	public function get_tabindex()
	{
		return $this->get_attr('tabindex');
	}

	/**
	 * Set the tabindex attribute value.MDN: Overrides the browser's default tab order and follows the one specified instead.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/tabindex
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_tabindex($value)
	{
		return $this->set_attr('tabindex', $value);
	}

	/**
	 * Get the target attribute value.
	 * 
	 * Parent tags allowed: <a>, <area>, <base>, <form>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_target()
	{
		return $this->get_attr('target');
	}

	/**
	 * Set the target attribute value.
	 * 
	 * Parent tags allowed: <a>, <area>, <base>, <form>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_target($value)
	{
		return $this->set_attr('target', $value);
	}

	/**
	 * Get the title attribute value.MDN: Text to be displayed in a tooltip when hovering over the element.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/title
	 * 
	 * @return string
	 */
	public function get_title()
	{
		return $this->get_attr('title');
	}

	/**
	 * Set the title attribute value.MDN: Text to be displayed in a tooltip when hovering over the element.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/title
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_title($value)
	{
		return $this->set_attr('title', $value);
	}

	/**
	 * Get the translate attribute value.MDN: Specify whether an element’s attribute values and the values of its Text node children are to be translated when the page is localized, or whether to leave them unchanged.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return bool
	 */
	public function get_translate()
	{
		return $this->get_attr('translate') === 'translate';
	}

	/**
	 * Set the translate attribute value.MDN: Specify whether an element’s attribute values and the values of its Text node children are to be translated when the page is localized, or whether to leave them unchanged.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param bool $value Enable the attribute by passing true (default), or remove it otherwise
	 *
	 * @return self
	 */
	public function set_translate($value = true)
	{
		if (!$value) {
			return $this->remove_attr('translate');
		}

		return $this->set_attr('translate', 'translate');
	}

	/**
	 * Get the type attribute value.MDN: Defines the type of the element.
	 * 
	 * Parent tags allowed: <button>, <input>, <command>, <embed>, <object>, <script>, <source>, <style>, <menu>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_type()
	{
		return $this->get_attr('type');
	}

	/**
	 * Set the type attribute value.MDN: Defines the type of the element.
	 * 
	 * Parent tags allowed: <button>, <input>, <command>, <embed>, <object>, <script>, <source>, <style>, <menu>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_type($value)
	{
		return $this->set_attr('type', $value);
	}

	/**
	 * Get the usemap attribute value.
	 * 
	 * Parent tags allowed: <img>, <input>, <object>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_usemap()
	{
		return $this->get_attr('usemap');
	}

	/**
	 * Set the usemap attribute value.
	 * 
	 * Parent tags allowed: <img>, <input>, <object>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_usemap($value)
	{
		return $this->set_attr('usemap', $value);
	}

	/**
	 * Get the value attribute value.MDN: Defines a default value which will be displayed in the element on page load.
	 * 
	 * Parent tags allowed: <button>, <data>, <input>, <li>, <meter>, <option>, <progress>, <param>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_value()
	{
		return $this->get_attr('value');
	}

	/**
	 * Set the value attribute value.MDN: Defines a default value which will be displayed in the element on page load.
	 * 
	 * Parent tags allowed: <button>, <data>, <input>, <li>, <meter>, <option>, <progress>, <param>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_value($value)
	{
		return $this->set_attr('value', $value);
	}

	/**
	 * Get the width attribute value.MDN: For the elements listed here, this establishes the element's width. Note: For all other instances, such as <div>, this is a legacy attribute, in which case the CSS width property should be used instead.
	 * 
	 * Parent tags allowed: <canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_width()
	{
		return $this->get_attr('width');
	}

	/**
	 * Set the width attribute value.MDN: For the elements listed here, this establishes the element's width. Note: For all other instances, such as <div>, this is a legacy attribute, in which case the CSS width property should be used instead.
	 * 
	 * Parent tags allowed: <canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_width($value)
	{
		return $this->set_attr('width', $value);
	}

	/**
	 * Get the wrap attribute value.MDN: Indicates whether the text should be wrapped.
	 * 
	 * Parent tags allowed: <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_wrap()
	{
		return $this->get_attr('wrap');
	}

	/**
	 * Set the wrap attribute value.MDN: Indicates whether the text should be wrapped.
	 * 
	 * Parent tags allowed: <textarea>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_wrap($value)
	{
		return $this->set_attr('wrap', $value);
	}

	/**
	 * Get the onabort attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onabort()
	{
		return $this->get_attr('onabort');
	}

	/**
	 * Set the onabort attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onabort($value)
	{
		return $this->set_attr('onabort', $value);
	}

	/**
	 * Get the onautocomplete attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onautocomplete()
	{
		return $this->get_attr('onautocomplete');
	}

	/**
	 * Set the onautocomplete attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onautocomplete($value)
	{
		return $this->set_attr('onautocomplete', $value);
	}

	/**
	 * Get the onautocompleteerror attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onautocompleteerror()
	{
		return $this->get_attr('onautocompleteerror');
	}

	/**
	 * Set the onautocompleteerror attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onautocompleteerror($value)
	{
		return $this->set_attr('onautocompleteerror', $value);
	}

	/**
	 * Get the onblur attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onblur()
	{
		return $this->get_attr('onblur');
	}

	/**
	 * Set the onblur attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onblur($value)
	{
		return $this->set_attr('onblur', $value);
	}

	/**
	 * Get the oncancel attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_oncancel()
	{
		return $this->get_attr('oncancel');
	}

	/**
	 * Set the oncancel attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_oncancel($value)
	{
		return $this->set_attr('oncancel', $value);
	}

	/**
	 * Get the oncanplay attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_oncanplay()
	{
		return $this->get_attr('oncanplay');
	}

	/**
	 * Set the oncanplay attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_oncanplay($value)
	{
		return $this->set_attr('oncanplay', $value);
	}

	/**
	 * Get the oncanplaythrough attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_oncanplaythrough()
	{
		return $this->get_attr('oncanplaythrough');
	}

	/**
	 * Set the oncanplaythrough attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_oncanplaythrough($value)
	{
		return $this->set_attr('oncanplaythrough', $value);
	}

	/**
	 * Get the onchange attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onchange()
	{
		return $this->get_attr('onchange');
	}

	/**
	 * Set the onchange attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onchange($value)
	{
		return $this->set_attr('onchange', $value);
	}

	/**
	 * Get the onclick attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onclick()
	{
		return $this->get_attr('onclick');
	}

	/**
	 * Set the onclick attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onclick($value)
	{
		return $this->set_attr('onclick', $value);
	}

	/**
	 * Get the onclose attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onclose()
	{
		return $this->get_attr('onclose');
	}

	/**
	 * Set the onclose attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onclose($value)
	{
		return $this->set_attr('onclose', $value);
	}

	/**
	 * Get the oncontextmenu attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_oncontextmenu()
	{
		return $this->get_attr('oncontextmenu');
	}

	/**
	 * Set the oncontextmenu attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_oncontextmenu($value)
	{
		return $this->set_attr('oncontextmenu', $value);
	}

	/**
	 * Get the oncuechange attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_oncuechange()
	{
		return $this->get_attr('oncuechange');
	}

	/**
	 * Set the oncuechange attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_oncuechange($value)
	{
		return $this->set_attr('oncuechange', $value);
	}

	/**
	 * Get the ondblclick attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_ondblclick()
	{
		return $this->get_attr('ondblclick');
	}

	/**
	 * Set the ondblclick attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_ondblclick($value)
	{
		return $this->set_attr('ondblclick', $value);
	}

	/**
	 * Get the ondrag attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_ondrag()
	{
		return $this->get_attr('ondrag');
	}

	/**
	 * Set the ondrag attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_ondrag($value)
	{
		return $this->set_attr('ondrag', $value);
	}

	/**
	 * Get the ondragend attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_ondragend()
	{
		return $this->get_attr('ondragend');
	}

	/**
	 * Set the ondragend attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_ondragend($value)
	{
		return $this->set_attr('ondragend', $value);
	}

	/**
	 * Get the ondragenter attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_ondragenter()
	{
		return $this->get_attr('ondragenter');
	}

	/**
	 * Set the ondragenter attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_ondragenter($value)
	{
		return $this->set_attr('ondragenter', $value);
	}

	/**
	 * Get the ondragexit attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_ondragexit()
	{
		return $this->get_attr('ondragexit');
	}

	/**
	 * Set the ondragexit attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_ondragexit($value)
	{
		return $this->set_attr('ondragexit', $value);
	}

	/**
	 * Get the ondragleave attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_ondragleave()
	{
		return $this->get_attr('ondragleave');
	}

	/**
	 * Set the ondragleave attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_ondragleave($value)
	{
		return $this->set_attr('ondragleave', $value);
	}

	/**
	 * Get the ondragover attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_ondragover()
	{
		return $this->get_attr('ondragover');
	}

	/**
	 * Set the ondragover attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_ondragover($value)
	{
		return $this->set_attr('ondragover', $value);
	}

	/**
	 * Get the ondragstart attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_ondragstart()
	{
		return $this->get_attr('ondragstart');
	}

	/**
	 * Set the ondragstart attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_ondragstart($value)
	{
		return $this->set_attr('ondragstart', $value);
	}

	/**
	 * Get the ondrop attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_ondrop()
	{
		return $this->get_attr('ondrop');
	}

	/**
	 * Set the ondrop attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_ondrop($value)
	{
		return $this->set_attr('ondrop', $value);
	}

	/**
	 * Get the ondurationchange attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_ondurationchange()
	{
		return $this->get_attr('ondurationchange');
	}

	/**
	 * Set the ondurationchange attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_ondurationchange($value)
	{
		return $this->set_attr('ondurationchange', $value);
	}

	/**
	 * Get the onemptied attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onemptied()
	{
		return $this->get_attr('onemptied');
	}

	/**
	 * Set the onemptied attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onemptied($value)
	{
		return $this->set_attr('onemptied', $value);
	}

	/**
	 * Get the onended attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onended()
	{
		return $this->get_attr('onended');
	}

	/**
	 * Set the onended attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onended($value)
	{
		return $this->set_attr('onended', $value);
	}

	/**
	 * Get the onerror attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onerror()
	{
		return $this->get_attr('onerror');
	}

	/**
	 * Set the onerror attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onerror($value)
	{
		return $this->set_attr('onerror', $value);
	}

	/**
	 * Get the onfocus attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onfocus()
	{
		return $this->get_attr('onfocus');
	}

	/**
	 * Set the onfocus attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onfocus($value)
	{
		return $this->set_attr('onfocus', $value);
	}

	/**
	 * Get the oninput attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_oninput()
	{
		return $this->get_attr('oninput');
	}

	/**
	 * Set the oninput attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_oninput($value)
	{
		return $this->set_attr('oninput', $value);
	}

	/**
	 * Get the oninvalid attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_oninvalid()
	{
		return $this->get_attr('oninvalid');
	}

	/**
	 * Set the oninvalid attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_oninvalid($value)
	{
		return $this->set_attr('oninvalid', $value);
	}

	/**
	 * Get the onkeydown attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onkeydown()
	{
		return $this->get_attr('onkeydown');
	}

	/**
	 * Set the onkeydown attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onkeydown($value)
	{
		return $this->set_attr('onkeydown', $value);
	}

	/**
	 * Get the onkeypress attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onkeypress()
	{
		return $this->get_attr('onkeypress');
	}

	/**
	 * Set the onkeypress attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onkeypress($value)
	{
		return $this->set_attr('onkeypress', $value);
	}

	/**
	 * Get the onkeyup attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onkeyup()
	{
		return $this->get_attr('onkeyup');
	}

	/**
	 * Set the onkeyup attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onkeyup($value)
	{
		return $this->set_attr('onkeyup', $value);
	}

	/**
	 * Get the onload attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onload()
	{
		return $this->get_attr('onload');
	}

	/**
	 * Set the onload attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onload($value)
	{
		return $this->set_attr('onload', $value);
	}

	/**
	 * Get the onloadeddata attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onloadeddata()
	{
		return $this->get_attr('onloadeddata');
	}

	/**
	 * Set the onloadeddata attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onloadeddata($value)
	{
		return $this->set_attr('onloadeddata', $value);
	}

	/**
	 * Get the onloadedmetadata attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onloadedmetadata()
	{
		return $this->get_attr('onloadedmetadata');
	}

	/**
	 * Set the onloadedmetadata attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onloadedmetadata($value)
	{
		return $this->set_attr('onloadedmetadata', $value);
	}

	/**
	 * Get the onloadstart attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onloadstart()
	{
		return $this->get_attr('onloadstart');
	}

	/**
	 * Set the onloadstart attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onloadstart($value)
	{
		return $this->set_attr('onloadstart', $value);
	}

	/**
	 * Get the onmousedown attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onmousedown()
	{
		return $this->get_attr('onmousedown');
	}

	/**
	 * Set the onmousedown attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onmousedown($value)
	{
		return $this->set_attr('onmousedown', $value);
	}

	/**
	 * Get the onmouseenter attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onmouseenter()
	{
		return $this->get_attr('onmouseenter');
	}

	/**
	 * Set the onmouseenter attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onmouseenter($value)
	{
		return $this->set_attr('onmouseenter', $value);
	}

	/**
	 * Get the onmouseleave attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onmouseleave()
	{
		return $this->get_attr('onmouseleave');
	}

	/**
	 * Set the onmouseleave attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onmouseleave($value)
	{
		return $this->set_attr('onmouseleave', $value);
	}

	/**
	 * Get the onmousemove attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onmousemove()
	{
		return $this->get_attr('onmousemove');
	}

	/**
	 * Set the onmousemove attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onmousemove($value)
	{
		return $this->set_attr('onmousemove', $value);
	}

	/**
	 * Get the onmouseout attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onmouseout()
	{
		return $this->get_attr('onmouseout');
	}

	/**
	 * Set the onmouseout attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onmouseout($value)
	{
		return $this->set_attr('onmouseout', $value);
	}

	/**
	 * Get the onmouseover attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onmouseover()
	{
		return $this->get_attr('onmouseover');
	}

	/**
	 * Set the onmouseover attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onmouseover($value)
	{
		return $this->set_attr('onmouseover', $value);
	}

	/**
	 * Get the onmouseup attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onmouseup()
	{
		return $this->get_attr('onmouseup');
	}

	/**
	 * Set the onmouseup attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onmouseup($value)
	{
		return $this->set_attr('onmouseup', $value);
	}

	/**
	 * Get the onmousewheel attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onmousewheel()
	{
		return $this->get_attr('onmousewheel');
	}

	/**
	 * Set the onmousewheel attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onmousewheel($value)
	{
		return $this->set_attr('onmousewheel', $value);
	}

	/**
	 * Get the onpause attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onpause()
	{
		return $this->get_attr('onpause');
	}

	/**
	 * Set the onpause attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onpause($value)
	{
		return $this->set_attr('onpause', $value);
	}

	/**
	 * Get the onplay attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onplay()
	{
		return $this->get_attr('onplay');
	}

	/**
	 * Set the onplay attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onplay($value)
	{
		return $this->set_attr('onplay', $value);
	}

	/**
	 * Get the onplaying attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onplaying()
	{
		return $this->get_attr('onplaying');
	}

	/**
	 * Set the onplaying attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onplaying($value)
	{
		return $this->set_attr('onplaying', $value);
	}

	/**
	 * Get the onprogress attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onprogress()
	{
		return $this->get_attr('onprogress');
	}

	/**
	 * Set the onprogress attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onprogress($value)
	{
		return $this->set_attr('onprogress', $value);
	}

	/**
	 * Get the onratechange attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onratechange()
	{
		return $this->get_attr('onratechange');
	}

	/**
	 * Set the onratechange attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onratechange($value)
	{
		return $this->set_attr('onratechange', $value);
	}

	/**
	 * Get the onreset attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onreset()
	{
		return $this->get_attr('onreset');
	}

	/**
	 * Set the onreset attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onreset($value)
	{
		return $this->set_attr('onreset', $value);
	}

	/**
	 * Get the onresize attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onresize()
	{
		return $this->get_attr('onresize');
	}

	/**
	 * Set the onresize attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onresize($value)
	{
		return $this->set_attr('onresize', $value);
	}

	/**
	 * Get the onscroll attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onscroll()
	{
		return $this->get_attr('onscroll');
	}

	/**
	 * Set the onscroll attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onscroll($value)
	{
		return $this->set_attr('onscroll', $value);
	}

	/**
	 * Get the onseeked attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onseeked()
	{
		return $this->get_attr('onseeked');
	}

	/**
	 * Set the onseeked attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onseeked($value)
	{
		return $this->set_attr('onseeked', $value);
	}

	/**
	 * Get the onseeking attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onseeking()
	{
		return $this->get_attr('onseeking');
	}

	/**
	 * Set the onseeking attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onseeking($value)
	{
		return $this->set_attr('onseeking', $value);
	}

	/**
	 * Get the onselect attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onselect()
	{
		return $this->get_attr('onselect');
	}

	/**
	 * Set the onselect attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onselect($value)
	{
		return $this->set_attr('onselect', $value);
	}

	/**
	 * Get the onshow attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onshow()
	{
		return $this->get_attr('onshow');
	}

	/**
	 * Set the onshow attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onshow($value)
	{
		return $this->set_attr('onshow', $value);
	}

	/**
	 * Get the onsort attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onsort()
	{
		return $this->get_attr('onsort');
	}

	/**
	 * Set the onsort attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onsort($value)
	{
		return $this->set_attr('onsort', $value);
	}

	/**
	 * Get the onstalled attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onstalled()
	{
		return $this->get_attr('onstalled');
	}

	/**
	 * Set the onstalled attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onstalled($value)
	{
		return $this->set_attr('onstalled', $value);
	}

	/**
	 * Get the onsubmit attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onsubmit()
	{
		return $this->get_attr('onsubmit');
	}

	/**
	 * Set the onsubmit attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onsubmit($value)
	{
		return $this->set_attr('onsubmit', $value);
	}

	/**
	 * Get the onsuspend attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onsuspend()
	{
		return $this->get_attr('onsuspend');
	}

	/**
	 * Set the onsuspend attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onsuspend($value)
	{
		return $this->set_attr('onsuspend', $value);
	}

	/**
	 * Get the ontimeupdate attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_ontimeupdate()
	{
		return $this->get_attr('ontimeupdate');
	}

	/**
	 * Set the ontimeupdate attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_ontimeupdate($value)
	{
		return $this->set_attr('ontimeupdate', $value);
	}

	/**
	 * Get the ontoggle attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_ontoggle()
	{
		return $this->get_attr('ontoggle');
	}

	/**
	 * Set the ontoggle attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_ontoggle($value)
	{
		return $this->set_attr('ontoggle', $value);
	}

	/**
	 * Get the onvolumechange attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onvolumechange()
	{
		return $this->get_attr('onvolumechange');
	}

	/**
	 * Set the onvolumechange attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onvolumechange($value)
	{
		return $this->set_attr('onvolumechange', $value);
	}

	/**
	 * Get the onwaiting attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @return string
	 */
	public function get_onwaiting()
	{
		return $this->get_attr('onwaiting');
	}

	/**
	 * Set the onwaiting attribute value.
	 * 
	 * Parent tags allowed: all
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
	 * 
	 * @param string $value 
	 *
	 * @return self
	 */
	public function set_onwaiting($value)
	{
		return $this->set_attr('onwaiting', $value);
	}
}

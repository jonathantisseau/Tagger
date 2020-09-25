<?php
namespace Tagger;

/**
 * Container Tag
 */
trait Tags
{
	/**
	 * Append a <a> tag.
	 * MDN: The HTML <a> element (or anchor element), with its href attribute, creates a hyperlink to web pages, files, email addresses, locations in the same page, or anything else a URL can address.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a
	 *
	 * @return ContainerTag
	 */
	public function a()
	{
		return $this->append(new ContainerTag('a'));
	}

	/**
	 * Append a <abbr> tag.
	 * MDN: The HTML Abbreviation element (<abbr>) represents an abbreviation or acronym, the optional title attribute can provide an expansion or description for the abbreviation.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/abbr
	 *
	 * @return ContainerTag
	 */
	public function abbr()
	{
		return $this->append(new ContainerTag('abbr'));
	}

	/**
	 * Append a <acronym> tag.
	 * MDN: The HTML Acronym Element (<acronym>) allows authors to clearly indicate a sequence of characters that compose an acronym or abbreviation for a word.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/acronym
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function acronym()
	{
		return $this->append(new ContainerTag('acronym'));
	}

	/**
	 * Append a <address> tag.
	 * MDN: The HTML <address> element indicates that the enclosed HTML provides contact information for a person or people, or for an organization.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/address
	 *
	 * @return ContainerTag
	 */
	public function address()
	{
		return $this->append(new ContainerTag('address'));
	}

	/**
	 * Append a <applet> tag.
	 * MDN: The obsolete HTML Applet Element (<applet>) embeds a Java applet into the document, this element has been deprecated in favor of <object>.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/applet
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function applet()
	{
		return $this->append(new ContainerTag('applet'));
	}

	/**
	 * Append a <area> tag.
	 * MDN: The HTML <area> element defines a hot-spot region on an image, and optionally associates it with a hypertext link. This element is used only within a <map> element.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/area
	 *
	 * @return Tag
	 */
	public function area()
	{
		return $this->append(new Tag('area'));
	}

	/**
	 * Append a <article> tag.
	 * MDN: The HTML <article> element represents a self-contained composition in a document, page, application, or site, which is intended to be independently distributable or reusable (e.g., in syndication).
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article
	 *
	 * @return ContainerTag
	 */
	public function article()
	{
		return $this->append(new ContainerTag('article'));
	}

	/**
	 * Append a <aside> tag.
	 * MDN: The HTML <aside> element represents a portion of a document whose content is only indirectly related to the document's main content.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/aside
	 *
	 * @return ContainerTag
	 */
	public function aside()
	{
		return $this->append(new ContainerTag('aside'));
	}

	/**
	 * Append a <audio> tag.
	 * MDN: The HTML <audio> element is used to embed sound content in documents. It may contain one or more audio sources, represented using the src attribute or the <source> element: the browser will choose the most suitable one. It can also be the destination for streamed media, using a MediaStream.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/audio
	 *
	 * @return ContainerTag
	 */
	public function audio()
	{
		return $this->append(new ContainerTag('audio'));
	}

	/**
	 * Append a <b> tag.
	 * MDN: The HTML Bring Attention To element (<b>)  is used to draw the reader's attention to the element's contents, which are not otherwise granted special importance.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/b
	 *
	 * @return ContainerTag
	 */
	public function b()
	{
		return $this->append(new ContainerTag('b'));
	}

	/**
	 * Append a <base> tag.
	 * MDN: The HTML <base> element specifies the base URL to use for all relative URLs in a document.
	 * 
	 * Parent tags allowed: <head>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/base
	 *
	 * @return Tag
	 */
	public function base()
	{
		return $this->append(new Tag('base'));
	}

	/**
	 * Append a <basefont> tag.
	 * MDN: The obsolete HTML Base Font element (<basefont>) sets a default font face, size, and color for the other elements which are descended from its parent element.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/basefont
	 * @deprecated
	 *
	 * @return Tag
	 */
	public function basefont()
	{
		return $this->append(new Tag('basefont'));
	}

	/**
	 * Append a <bdi> tag.
	 * MDN: The HTML Bidirectional Isolate element (<bdi>)  tells the browser's bidirectional algorithm to treat the text it contains in isolation from its surrounding text.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bdi
	 *
	 * @return ContainerTag
	 */
	public function bdi()
	{
		return $this->append(new ContainerTag('bdi'));
	}

	/**
	 * Append a <bdo> tag.
	 * MDN: The HTML Bidirectional Text Override element (<bdo>) overrides the current directionality of text, so that the text within is rendered in a different direction.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bdo
	 *
	 * @return ContainerTag
	 */
	public function bdo()
	{
		return $this->append(new ContainerTag('bdo'));
	}

	/**
	 * Append a <bgsound> tag.
	 * MDN: The Internet Explorer only HTML Background Sound element (<bgsound>) sets up a sound file to play in the background while the page is used, use <audio> instead.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bgsound
	 * @deprecated
	 *
	 * @return Tag
	 */
	public function bgsound()
	{
		return $this->append(new Tag('bgsound'));
	}

	/**
	 * Append a <big> tag.
	 * MDN: The obsolete HTML Big Element (<big>) renders the enclosed text at a font size one level larger than the surrounding text (medium becomes large, for example).
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/big
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function big()
	{
		return $this->append(new ContainerTag('big'));
	}

	/**
	 * Append a <blink> tag.
	 * MDN: The HTML Blink Element (<blink>) is a non-standard element which causes the enclosed text to flash slowly.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blink
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function blink()
	{
		return $this->append(new ContainerTag('blink'));
	}

	/**
	 * Append a <blockquote> tag.
	 * MDN: The HTML <blockquote> Element (or HTML Block Quotation Element) indicates that the enclosed text is an extended quotation. Usually, this is rendered visually by indentation (see Notes for how to change it). A URL for the source of the quotation may be given using the cite attribute, while a text representation of the source can be given using the <cite> element.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote
	 *
	 * @return ContainerTag
	 */
	public function blockquote()
	{
		return $this->append(new ContainerTag('blockquote'));
	}

	/**
	 * Append a <body> tag.
	 * MDN: The HTML <body> Element represents the content of an HTML document. There can be only one <body> element in a document.
	 * 
	 * Parent tags allowed: <html>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/body
	 *
	 * @return ContainerTag
	 */
	public function body()
	{
		return $this->append(new ContainerTag('body'));
	}

	/**
	 * Append a <br> tag.
	 * MDN: The HTML <br> element produces a line break in text (carriage-return). It is useful for writing a poem or an address, where the division of lines is significant.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/br
	 *
	 * @return self As <br> is empty, returns this instance. You do not need to call end().
	 */
	public function br()
	{
		$this->append(new EmptyTag('br'));
		return $this;
	}

	/**
	 * Append a <button> tag.
	 * MDN: The HTML <button> element represents a clickable button, used to submit forms or anywhere in a document for accessible, standard button functionality.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button
	 *
	 * @return ContainerTag
	 */
	public function button()
	{
		return $this->append(new ContainerTag('button'));
	}

	/**
	 * Append a <canvas> tag.
	 * MDN: Use the HTML <canvas> element with either the canvas scripting API or the WebGL API to draw graphics and animations.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/canvas
	 *
	 * @return ContainerTag
	 */
	public function canvas()
	{
		return $this->append(new ContainerTag('canvas'));
	}

	/**
	 * Append a <caption> tag.
	 * MDN: The HTML <caption> element specifies the caption (or title) of a table.
	 * 
	 * Parent tags allowed: <table>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/caption
	 *
	 * @return ContainerTag
	 */
	public function caption()
	{
		return $this->append(new ContainerTag('caption'));
	}

	/**
	 * Append a <center> tag.
	 * MDN: The obsolete HTML Center Element (<center>) is a block-level element that displays its block-level or inline contents centered horizontally within its containing element.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/center
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function center()
	{
		return $this->append(new ContainerTag('center'));
	}

	/**
	 * Append a <cite> tag.
	 * MDN: The HTML Citation element (<cite>) is used to describe a reference to a cited creative work, and must include the title of that work.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/cite
	 *
	 * @return ContainerTag
	 */
	public function cite()
	{
		return $this->append(new ContainerTag('cite'));
	}

	/**
	 * Append a <code> tag.
	 * MDN: The HTML <code> element displays its contents styled in a fashion intended to indicate that the text is a short fragment of computer code.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/code
	 *
	 * @return ContainerTag
	 */
	public function code()
	{
		return $this->append(new ContainerTag('code'));
	}

	/**
	 * Append a <col> tag.
	 * MDN: The HTML <col> element defines a column within a table and is used for defining common semantics on all common cells. It is generally found within a <colgroup> element.
	 * 
	 * Parent tags allowed: <colgroup>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/col
	 *
	 * @return Tag
	 */
	public function col()
	{
		return $this->append(new Tag('col'));
	}

	/**
	 * Append a <colgroup> tag.
	 * MDN: The HTML <colgroup> element defines a group of columns within a table.
	 * 
	 * Parent tags allowed: <table>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/colgroup
	 *
	 * @return ContainerTag
	 */
	public function colgroup()
	{
		return $this->append(new ContainerTag('colgroup'));
	}

	/**
	 * Append a <command> tag.
	 * MDN: The HTML Command element (<command>) represents a command which the user can invoke. Commands are often used as part of a context menu or toolbar.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/command
	 * @deprecated
	 *
	 * @return Tag
	 */
	public function command()
	{
		return $this->append(new Tag('command'));
	}

	/**
	 * Append a <content> tag.
	 * MDN: The HTML <content> element—an obsolete part of the Web Components suite of technologies—was used inside of Shadow DOM as an insertion point, and wasn't meant to be used in ordinary HTML.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/content
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function content()
	{
		return $this->append(new ContainerTag('content'));
	}

	/**
	 * Append a <data> tag.
	 * MDN: The HTML <data> element links a given content with a machine-readable translation. If the content is time- or date-related, the <time> element must be used.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/data
	 *
	 * @return ContainerTag
	 */
	public function data()
	{
		return $this->append(new ContainerTag('data'));
	}

	/**
	 * Append a <datalist> tag.
	 * MDN: The HTML <datalist> element contains a set of <option> elements that represent the permissible or recommended options available to choose from within other controls.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/datalist
	 *
	 * @return ContainerTag
	 */
	public function datalist()
	{
		return $this->append(new ContainerTag('datalist'));
	}

	/**
	 * Append a <dd> tag.
	 * MDN: The HTML <dd> element provides the description, definition, or value for the preceding term (<dt>) in a description list (<dl>).
	 * 
	 * Parent tags allowed: <dl>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dd
	 *
	 * @return ContainerTag
	 */
	public function dd()
	{
		return $this->append(new ContainerTag('dd'));
	}

	/**
	 * Append a <del> tag.
	 * MDN: The HTML <del> element represents a range of text that has been deleted from a document.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/del
	 *
	 * @return ContainerTag
	 */
	public function del()
	{
		return $this->append(new ContainerTag('del'));
	}

	/**
	 * Append a <details> tag.
	 * MDN: The HTML Details Element (<details>) creates a disclosure widget in which information is visible only when the widget is toggled into an "open" state.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/details
	 *
	 * @return ContainerTag
	 */
	public function details()
	{
		return $this->append(new ContainerTag('details'));
	}

	/**
	 * Append a <dfn> tag.
	 * MDN: The HTML Definition element (<dfn>) is used to indicate the term being defined within the context of a definition phrase or sentence.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dfn
	 *
	 * @return ContainerTag
	 */
	public function dfn()
	{
		return $this->append(new ContainerTag('dfn'));
	}

	/**
	 * Append a <dialog> tag.
	 * MDN: The HTML <dialog> element represents a dialog box or other interactive component, such as a dismissable alert, inspector, or subwindow.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog
	 *
	 * @return ContainerTag
	 */
	public function dialog()
	{
		return $this->append(new ContainerTag('dialog'));
	}

	/**
	 * Append a <dir> tag.
	 * MDN: The obsolete HTML Directory element (<dir>) is used as a container for a directory of files and/or folders, potentially with styles and icons applied by the user agent.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dir
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function dir()
	{
		return $this->append(new ContainerTag('dir'));
	}

	/**
	 * Append a <div> tag.
	 * MDN: The HTML Content Division element (<div>) is the generic container for flow content. It has no effect on the content or layout until styled using CSS.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div
	 *
	 * @return ContainerTag
	 */
	public function div()
	{
		return $this->append(new ContainerTag('div'));
	}

	/**
	 * Append a <dl> tag.
	 * MDN: The HTML <dl> element represents a description list. The element encloses a list of groups of terms (specified using the <dt> element) and descriptions (provided by <dd> elements). Common uses for this element are to implement a glossary or to display metadata (a list of key-value pairs).
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dl
	 *
	 * @return ContainerTag
	 */
	public function dl()
	{
		return $this->append(new ContainerTag('dl'));
	}

	/**
	 * Append a <dt> tag.
	 * MDN: The HTML <dt> element specifies a term in a description or definition list, and as such must be used inside a <dl> element.
	 * 
	 * Parent tags allowed: <dl>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dt
	 *
	 * @return ContainerTag
	 */
	public function dt()
	{
		return $this->append(new ContainerTag('dt'));
	}

	/**
	 * Append a <element> tag.
	 * MDN: The obsolete HTML <element> element was part of the Web Components specification, it was intended to be used to define new custom DOM elements.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/element
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function element()
	{
		return $this->append(new ContainerTag('element'));
	}

	/**
	 * Append a <em> tag.
	 * MDN: The HTML <em> element marks text that has stress emphasis. The <em> element can be nested, with each level of nesting indicating a greater degree of emphasis.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/em
	 *
	 * @return ContainerTag
	 */
	public function em()
	{
		return $this->append(new ContainerTag('em'));
	}

	/**
	 * Append a <embed> tag.
	 * MDN: The HTML <embed> element embeds external content at the specified point in the document. This content is provided by an external application or other source of interactive content such as a browser plug-in.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/embed
	 *
	 * @return Tag
	 */
	public function embed()
	{
		return $this->append(new Tag('embed'));
	}

	/**
	 * Append a <fieldset> tag.
	 * MDN: The HTML <fieldset> element is used to group several controls as well as labels (<label>) within a web form.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset
	 *
	 * @return ContainerTag
	 */
	public function fieldset()
	{
		return $this->append(new ContainerTag('fieldset'));
	}

	/**
	 * Append a <figcaption> tag.
	 * MDN: The HTML <figcaption> or Figure Caption element represents a caption or legend describing the rest of the contents of its parent <figure> element.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figcaption
	 *
	 * @return ContainerTag
	 */
	public function figcaption()
	{
		return $this->append(new ContainerTag('figcaption'));
	}

	/**
	 * Append a <figure> tag.
	 * MDN: The HTML <figure> (Figure With Optional Caption) element represents self-contained content, potentially with an optional caption, which is specified using the (<figcaption>) element.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figure
	 *
	 * @return ContainerTag
	 */
	public function figure()
	{
		return $this->append(new ContainerTag('figure'));
	}

	/**
	 * Append a <font> tag.
	 * MDN: The HTML Font Element (<font>) defines the font size, color and face for its content.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/font
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function font()
	{
		return $this->append(new ContainerTag('font'));
	}

	/**
	 * Append a <footer> tag.
	 * MDN: The HTML <footer> element represents a footer for its nearest sectioning content or sectioning root element. A footer typically contains information about the author of the section, copyright data or links to related documents.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/footer
	 *
	 * @return ContainerTag
	 */
	public function footer()
	{
		return $this->append(new ContainerTag('footer'));
	}

	/**
	 * Append a <form> tag.
	 * MDN: The HTML <form> element represents a document section containing interactive controls for submitting information.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form
	 *
	 * @return ContainerTag
	 */
	public function form()
	{
		return $this->append(new ContainerTag('form'));
	}

	/**
	 * Append a <frame> tag.
	 * MDN: <frame> is an HTML element which defines a particular area in which another HTML document can be displayed. A frame should be used within a <frameset>.
	 * 
	 * Parent tags allowed: <frameset>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/frame
	 * @deprecated
	 *
	 * @return Tag
	 */
	public function frame()
	{
		return $this->append(new Tag('frame'));
	}

	/**
	 * Append a <frameset> tag.
	 * MDN: The HTML <frameset> element is used to contain <frame> elements.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/frameset
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function frameset()
	{
		return $this->append(new ContainerTag('frameset'));
	}

	/**
	 * Append a <h1> tag.
	 * MDN: The HTML <h1>–<h6> elements represent six levels of section headings. <h1> is the highest section level and <h6> is the lowest.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h1
	 *
	 * @return ContainerTag
	 */
	public function h1()
	{
		return $this->append(new ContainerTag('h1'));
	}

	/**
	 * Append a <h2> tag.
	 * MDN: The HTML <h1>–<h6> elements represent six levels of section headings. <h1> is the highest section level and <h6> is the lowest.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h2
	 *
	 * @return ContainerTag
	 */
	public function h2()
	{
		return $this->append(new ContainerTag('h2'));
	}

	/**
	 * Append a <h3> tag.
	 * MDN: The HTML <h1>–<h6> elements represent six levels of section headings. <h1> is the highest section level and <h6> is the lowest.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h3
	 *
	 * @return ContainerTag
	 */
	public function h3()
	{
		return $this->append(new ContainerTag('h3'));
	}

	/**
	 * Append a <h4> tag.
	 * MDN: The HTML <h1>–<h6> elements represent six levels of section headings. <h1> is the highest section level and <h6> is the lowest.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h4
	 *
	 * @return ContainerTag
	 */
	public function h4()
	{
		return $this->append(new ContainerTag('h4'));
	}

	/**
	 * Append a <h5> tag.
	 * MDN: The HTML <h1>–<h6> elements represent six levels of section headings. <h1> is the highest section level and <h6> is the lowest.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h5
	 *
	 * @return ContainerTag
	 */
	public function h5()
	{
		return $this->append(new ContainerTag('h5'));
	}

	/**
	 * Append a <h6> tag.
	 * MDN: The HTML <h1>–<h6> elements represent six levels of section headings. <h1> is the highest section level and <h6> is the lowest.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h6
	 *
	 * @return ContainerTag
	 */
	public function h6()
	{
		return $this->append(new ContainerTag('h6'));
	}

	/**
	 * Append a <head> tag.
	 * MDN: The HTML <head> element contains machine-readable information (metadata) about the document, like its title, scripts, and style sheets.
	 * 
	 * Parent tags allowed: <html>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/head
	 *
	 * @return ContainerTag
	 */
	public function head()
	{
		return $this->append(new ContainerTag('head'));
	}

	/**
	 * Append a <header> tag.
	 * MDN: The HTML <header> element represents introductory content, typically a group of introductory or navigational aids. It may contain some heading elements but also a logo, a search form, an author name, and other elements.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header
	 *
	 * @return ContainerTag
	 */
	public function header()
	{
		return $this->append(new ContainerTag('header'));
	}

	/**
	 * Append a <hgroup> tag.
	 * MDN: The HTML <hgroup> element represents a multi-level heading for a section of a document. It groups a set of <h1>–<h6> elements.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hgroup
	 *
	 * @return ContainerTag
	 */
	public function hgroup()
	{
		return $this->append(new ContainerTag('hgroup'));
	}

	/**
	 * Append a <hr> tag.
	 * MDN: The HTML <hr> element represents a thematic break between paragraph-level elements: for example, a change of scene in a story, or a shift of topic within a section.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hr
	 *
	 * @return Tag
	 */
	public function hr()
	{
		return $this->append(new Tag('hr'));
	}

	/**
	 * Append a <html> tag.
	 * MDN: The HTML <html> element represents the root (top-level element) of an HTML document, so it is also referred to as the root element. All other elements must be descendants of this element.
	 * 
	 * Parent tags allowed: none
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/html
	 *
	 * @return ContainerTag
	 */
	public function html()
	{
		return $this->append(new ContainerTag('html'));
	}

	/**
	 * Append a <i> tag.
	 * MDN: The HTML <i> element represents a range of text that is set off from the normal text for some reason.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/i
	 *
	 * @return ContainerTag
	 */
	public function i()
	{
		return $this->append(new ContainerTag('i'));
	}

	/**
	 * Append a <iframe> tag.
	 * MDN: The HTML Inline Frame element (<iframe>) represents a nested browsing context, embedding another HTML page into the current one.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe
	 *
	 * @return Tag
	 */
	public function iframe()
	{
		return $this->append(new Tag('iframe'));
	}

	/**
	 * Append a <image> tag.
	 * MDN: The obsolete HTML Image element (<image>) is an obsolete remnant of an ancient version of HTML lost in the mists of time, use the standard <img> element instead.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/image
	 * @deprecated
	 *
	 * @return Tag
	 */
	public function image()
	{
		return $this->append(new Tag('image'));
	}

	/**
	 * Append a <img> tag.
	 * MDN: The HTML <img> element embeds an image into the document.
	 * 
	 * Parent tags allowed: Global tag, <picture>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img
	 *
	 * @return Tag
	 */
	public function img()
	{
		return $this->append(new Tag('img'));
	}

	/**
	 * Append a <input> tag.
	 * MDN: The HTML <input> element is used to create interactive controls for web-based forms in order to accept data from the user, a wide variety of types of input data and control widgets are available, depending on the device and user agent.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input
	 *
	 * @return Tag
	 */
	public function input()
	{
		return $this->append(new Tag('input'));
	}

	/**
	 * Append a <ins> tag.
	 * MDN: The HTML <ins> element represents a range of text that has been added to a document.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ins
	 *
	 * @return ContainerTag
	 */
	public function ins()
	{
		return $this->append(new ContainerTag('ins'));
	}

	/**
	 * Append a <isindex> tag.
	 * MDN: <isindex> was an obsolete HTML element that put a text field in a page for querying the document.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/isindex
	 * @deprecated
	 *
	 * @return Tag
	 */
	public function isindex()
	{
		return $this->append(new Tag('isindex'));
	}

	/**
	 * Append a <kbd> tag.
	 * MDN: The HTML Keyboard Input element (<kbd>) represents a span of inline text denoting textual user input from a keyboard, voice input, or any other text entry device.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/kbd
	 *
	 * @return ContainerTag
	 */
	public function kbd()
	{
		return $this->append(new ContainerTag('kbd'));
	}

	/**
	 * Append a <keygen> tag.
	 * MDN: The HTML <keygen> element exists to facilitate generation of key material, and submission of the public key as part of an HTML form. This mechanism is designed for use with Web-based certificate management systems. It is expected that the <keygen> element will be used in an HTML form along with other information needed to construct a certificate request, and that the result of the process will be a signed certificate.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/keygen
	 * @deprecated
	 *
	 * @return Tag
	 */
	public function keygen()
	{
		return $this->append(new Tag('keygen'));
	}

	/**
	 * Append a <label> tag.
	 * MDN: The HTML <label> element represents a caption for an item in a user interface.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label
	 *
	 * @return ContainerTag
	 */
	public function label()
	{
		return $this->append(new ContainerTag('label'));
	}

	/**
	 * Append a <legend> tag.
	 * MDN: The HTML <legend> element represents a caption for the content of its parent <fieldset>.
	 * 
	 * Parent tags allowed: <fieldset>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/legend
	 *
	 * @return ContainerTag
	 */
	public function legend()
	{
		return $this->append(new ContainerTag('legend'));
	}

	/**
	 * Append a <li> tag.
	 * MDN: The HTML <li> element is used to represent an item in a list.
	 * 
	 * Parent tags allowed: <ul>, <ol>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/li
	 *
	 * @return ContainerTag
	 */
	public function li()
	{
		return $this->append(new ContainerTag('li'));
	}

	/**
	 * Append a <link> tag.
	 * MDN: The HTML External Resource Link element (<link>) specifies relationships between the current document and an external resource. This element is most commonly used to link to stylesheets, but is also used to establish site icons (both "favicon" style icons and icons for the home screen and apps on mobile devices) among other things.
	 * 
	 * Parent tags allowed: <head>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link
	 *
	 * @return Tag
	 */
	public function link()
	{
		return $this->append(new Tag('link'));
	}

	/**
	 * Append a <listing> tag.
	 * MDN: The HTML Listing Element (<listing>) renders text between the start and end tags without interpreting the HTML in between and using a monospaced font. The HTML 2 standard recommended that lines shouldn't be broken when not greater than 132 characters.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/listing
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function listing()
	{
		return $this->append(new ContainerTag('listing'));
	}

	/**
	 * Append a <main> tag.
	 * MDN: The HTML <main> element represents the dominant content of the <body> of a document. The main content area consists of content that is directly related to or expands upon the central topic of a document, or the central functionality of an application.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main
	 *
	 * @return ContainerTag
	 */
	public function main()
	{
		return $this->append(new ContainerTag('main'));
	}

	/**
	 * Append a <map> tag.
	 * MDN: The HTML <map> element is used with <area> elements to define an image map (a clickable link area).
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/map
	 *
	 * @return ContainerTag
	 */
	public function map()
	{
		return $this->append(new ContainerTag('map'));
	}

	/**
	 * Append a <mark> tag.
	 * MDN: The HTML Mark Text element (<mark>) represents text which is marked or highlighted for reference or notation purposes, due to the marked passage's relevance or importance in the enclosing context.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/mark
	 *
	 * @return ContainerTag
	 */
	public function mark()
	{
		return $this->append(new ContainerTag('mark'));
	}

	/**
	 * Append a <marquee> tag.
	 * MDN: The HTML <marquee> element is used to insert a scrolling area of text. You can control what happens when the text reaches the edges of its content area using its attributes.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/marquee
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function marquee()
	{
		return $this->append(new ContainerTag('marquee'));
	}

	/**
	 * Append a <menu> tag.
	 * MDN: The HTML <menu> element represents a group of commands that a user can perform or activate. This includes both list menus, which might appear across the top of a screen, as well as context menus, such as those that might appear underneath a button after it has been clicked.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/menu
	 *
	 * @return ContainerTag
	 */
	public function menu()
	{
		return $this->append(new ContainerTag('menu'));
	}

	/**
	 * Append a <menuitem> tag.
	 * MDN: The HTML <menuitem> element represents a command that a user is able to invoke through a popup menu. This includes context menus, as well as menus that might be attached to a menu button.
	 * 
	 * Parent tags allowed: <menu>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/menuitem
	 * @deprecated
	 *
	 * @return Tag
	 */
	public function menuitem()
	{
		return $this->append(new Tag('menuitem'));
	}

	/**
	 * Append a <meta> tag.
	 * MDN: The HTML <meta> element represents metadata that cannot be represented by other HTML meta-related elements, like <base>, <link>, <script>, <style> or <title>.
	 * 
	 * Parent tags allowed: <head>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta
	 *
	 * @return Tag
	 */
	public function meta()
	{
		return $this->append(new Tag('meta'));
	}

	/**
	 * Append a <meter> tag.
	 * MDN: The HTML <meter> element represents either a scalar value within a known range or a fractional value.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meter
	 *
	 * @return ContainerTag
	 */
	public function meter()
	{
		return $this->append(new ContainerTag('meter'));
	}

	/**
	 * Append a <multicol> tag.
	 * MDN: The HTML Multi-Column Layout element (<multicol>) was an experimental element designed to allow multi-column layouts and must not be used.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/multicol
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function multicol()
	{
		return $this->append(new ContainerTag('multicol'));
	}

	/**
	 * Append a <nav> tag.
	 * MDN: The HTML <nav> element represents a section of a page whose purpose is to provide navigation links, either within the current document or to other documents. Common examples of navigation sections are menus, tables of contents, and indexes.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav
	 *
	 * @return ContainerTag
	 */
	public function nav()
	{
		return $this->append(new ContainerTag('nav'));
	}

	/**
	 * Append a <nextid> tag.
	 * MDN: <nextid> is an obsolete HTML element that served to enable the NeXT web designing tool to generate automatic NAME labels for its anchors.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nextid
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function nextid()
	{
		return $this->append(new ContainerTag('nextid'));
	}

	/**
	 * Append a <nobr> tag.
	 * MDN: The non-standard, obsolete HTML <nobr> element prevents the text it contains from automatically wrapping across multiple lines, potentially resulting in the user having to scroll horizontally to see the entire width of the text.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nobr
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function nobr()
	{
		return $this->append(new ContainerTag('nobr'));
	}

	/**
	 * Append a <noembed> tag.
	 * MDN: The <noembed> element is an obsolete, non-standard way to provide alternative, or "fallback", content for browsers that do not support the <embed> element or do not support the type of embedded content an author wishes to use.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/noembed
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function noembed()
	{
		return $this->append(new ContainerTag('noembed'));
	}

	/**
	 * Append a <noframes> tag.
	 * MDN: The obsolete HTML No Frames or frame fallback element, <noframes>, provides content to be presented in browsers that don't support (or have disabled support for) the <frame> element.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/noframes
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function noframes()
	{
		return $this->append(new ContainerTag('noframes'));
	}

	/**
	 * Append a <noscript> tag.
	 * MDN: The HTML <noscript> element defines a section of HTML to be inserted if a script type on the page is unsupported or if scripting is currently turned off in the browser.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/noscript
	 *
	 * @return ContainerTag
	 */
	public function noscript()
	{
		return $this->append(new ContainerTag('noscript'));
	}

	/**
	 * Append a <object> tag.
	 * MDN: The HTML <object> element represents an external resource, which can be treated as an image, a nested browsing context, or a resource to be handled by a plugin.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/object
	 *
	 * @return ContainerTag
	 */
	public function object()
	{
		return $this->append(new ContainerTag('object'));
	}

	/**
	 * Append a <ol> tag.
	 * MDN: The HTML <ol> element represents an ordered list of items — typically rendered as a numbered list.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol
	 *
	 * @return ContainerTag
	 */
	public function ol()
	{
		return $this->append(new ContainerTag('ol'));
	}

	/**
	 * Append a <optgroup> tag.
	 * MDN: The HTML <optgroup> element creates a grouping of options within a <select> element.
	 * 
	 * Parent tags allowed: <select>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/optgroup
	 *
	 * @return ContainerTag
	 */
	public function optgroup()
	{
		return $this->append(new ContainerTag('optgroup'));
	}

	/**
	 * Append a <option> tag.
	 * MDN: The HTML <option> element is used to define an item contained in a <select>, an <optgroup>, or a <datalist> element. As such, <option> can represent menu items in popups and other lists of items in an HTML document.
	 * 
	 * Parent tags allowed: <select>, <optgroup>, <datalist>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/option
	 *
	 * @return ContainerTag
	 */
	public function option()
	{
		return $this->append(new ContainerTag('option'));
	}

	/**
	 * Append a <output> tag.
	 * MDN: The HTML Output element (<output>) is a container element into which a site or app can inject the results of a calculation or the outcome of a user action.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/output
	 *
	 * @return ContainerTag
	 */
	public function output()
	{
		return $this->append(new ContainerTag('output'));
	}

	/**
	 * Append a <p> tag.
	 * MDN: The HTML <p> element represents a paragraph.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/p
	 *
	 * @return ContainerTag
	 */
	public function p()
	{
		return $this->append(new ContainerTag('p'));
	}

	/**
	 * Append a <param> tag.
	 * MDN: The HTML <param> element defines parameters for an <object> element.
	 * 
	 * Parent tags allowed: <object>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/param
	 *
	 * @return Tag
	 */
	public function param()
	{
		return $this->append(new Tag('param'));
	}

	/**
	 * Append a <picture> tag.
	 * MDN: The HTML <picture> element contains zero or more <source> elements and one <img> element to offer alternative versions of an image for different display/device scenarios.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/picture
	 *
	 * @return ContainerTag
	 */
	public function picture()
	{
		return $this->append(new ContainerTag('picture'));
	}

	/**
	 * Append a <plaintext> tag.
	 * MDN: The HTML Plaintext Element (<plaintext>) renders everything following the start tag as raw text, ignoring any following HTML.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/plaintext
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function plaintext()
	{
		return $this->append(new ContainerTag('plaintext'));
	}

	/**
	 * Append a <pre> tag.
	 * MDN: The HTML <pre> element represents preformatted text which is to be presented exactly as written in the HTML file.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/pre
	 *
	 * @return ContainerTag
	 */
	public function pre()
	{
		return $this->append(new ContainerTag('pre'));
	}

	/**
	 * Append a <progress> tag.
	 * MDN: The HTML <progress> element displays an indicator showing the completion progress of a task, typically displayed as a progress bar.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/progress
	 *
	 * @return ContainerTag
	 */
	public function progress()
	{
		return $this->append(new ContainerTag('progress'));
	}

	/**
	 * Append a <q> tag.
	 * MDN: The HTML <q> element indicates that the enclosed text is a short inline quotation. Most modern browsers implement this by surrounding the text in quotation marks.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/q
	 *
	 * @return ContainerTag
	 */
	public function q()
	{
		return $this->append(new ContainerTag('q'));
	}

	/**
	 * Append a <rb> tag.
	 * MDN: The HTML Ruby Base (<rb>) element is used to delimit the base text component of a  <ruby> annotation, i.e. the text that is being annotated.
	 * 
	 * Parent tags allowed: <ruby>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rb
	 *
	 * @return ContainerTag
	 */
	public function rb()
	{
		return $this->append(new ContainerTag('rb'));
	}

	/**
	 * Append a <rp> tag.
	 * MDN: The HTML Ruby Fallback Parenthesis (<rp>) element is used to provide fall-back parentheses for browsers that do not support display of ruby annotations using the <ruby> element.
	 * 
	 * Parent tags allowed: <ruby>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rp
	 *
	 * @return ContainerTag
	 */
	public function rp()
	{
		return $this->append(new ContainerTag('rp'));
	}

	/**
	 * Append a <rt> tag.
	 * MDN: The HTML Ruby Text (<rt>) element specifies the ruby text component of a ruby annotation, which is used to provide pronunciation, translation, or transliteration information for East Asian typography. The <rt> element must always be contained within a <ruby> element.
	 * 
	 * Parent tags allowed: <ruby>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rt
	 *
	 * @return ContainerTag
	 */
	public function rt()
	{
		return $this->append(new ContainerTag('rt'));
	}

	/**
	 * Append a <rtc> tag.
	 * MDN: The HTML Ruby Text Container (<rtc>) element embraces semantic annotations of characters presented in a ruby of <rb> elements used inside of <ruby> element. <rb> elements can have both pronunciation (<rt>) and semantic (<rtc>) annotations.
	 * 
	 * Parent tags allowed: <ruby>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rtc
	 *
	 * @return ContainerTag
	 */
	public function rtc()
	{
		return $this->append(new ContainerTag('rtc'));
	}

	/**
	 * Append a <ruby> tag.
	 * MDN: The HTML <ruby> element represents a ruby annotation. Ruby annotations are for showing pronunciation of East Asian characters.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ruby
	 *
	 * @return ContainerTag
	 */
	public function ruby()
	{
		return $this->append(new ContainerTag('ruby'));
	}

	/**
	 * Append a <s> tag.
	 * MDN: The HTML <s> element renders text with a strikethrough, or a line through it. Use the <s> element to represent things that are no longer relevant or no longer accurate. However, <s> is not appropriate when indicating document edits, for that, use the <del> and <ins> elements, as appropriate.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/s
	 *
	 * @return ContainerTag
	 */
	public function s()
	{
		return $this->append(new ContainerTag('s'));
	}

	/**
	 * Append a <samp> tag.
	 * MDN: The HTML Sample Element (<samp>) is used to enclose inline text which represents sample (or quoted) output from a computer program.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/samp
	 *
	 * @return ContainerTag
	 */
	public function samp()
	{
		return $this->append(new ContainerTag('samp'));
	}

	/**
	 * Append a <script> tag.
	 * MDN: The HTML <script> element is used to embed or reference executable code, this is typically used to embed or refer to JavaScript code.
	 * 
	 * Parent tags allowed: Global tag, <head>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script
	 *
	 * @return ContainerTag
	 */
	public function script()
	{
		return $this->append(new ContainerTag('script'));
	}

	/**
	 * Append a <section> tag.
	 * MDN: The HTML <section> element represents a standalone section — which doesn't have a more specific semantic element to represent it — contained within an HTML document.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section
	 *
	 * @return ContainerTag
	 */
	public function section()
	{
		return $this->append(new ContainerTag('section'));
	}

	/**
	 * Append a <select> tag.
	 * MDN: The HTML <select> element represents a control that provides a menu of options
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/select
	 *
	 * @return ContainerTag
	 */
	public function select()
	{
		return $this->append(new ContainerTag('select'));
	}

	/**
	 * Append a <shadow> tag.
	 * MDN: The HTML <shadow> element—an obsolete part of the Web Components technology suite—was intended to be used as a shadow DOM insertion point.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/shadow
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function shadow()
	{
		return $this->append(new ContainerTag('shadow'));
	}

	/**
	 * Append a <slot> tag.
	 * MDN: The HTML <slot> element—part of the Web Components technology suite—is a placeholder inside a web component that you can fill with your own markup, which lets you create separate DOM trees and present them together.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/slot
	 *
	 * @return ContainerTag
	 */
	public function slot()
	{
		return $this->append(new ContainerTag('slot'));
	}

	/**
	 * Append a <small> tag.
	 * MDN: The HTML <small> element represents side-comments and small print, like copyright and legal text, independent of its styled presentation. By default, it renders text within it one font-size smaller, such as from small to x-small.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/small
	 *
	 * @return ContainerTag
	 */
	public function small()
	{
		return $this->append(new ContainerTag('small'));
	}

	/**
	 * Append a <source> tag.
	 * MDN: The HTML <source> element specifies multiple media resources for the <picture>, the <audio> element, or the <video> element.
	 * 
	 * Parent tags allowed: <audio>, <video>, <picture>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/source
	 *
	 * @return Tag
	 */
	public function source()
	{
		return $this->append(new Tag('source'));
	}

	/**
	 * Append a <spacer> tag.
	 * MDN: <spacer> is an obsolete HTML element which allowed insertion of empty spaces on pages. It was devised by Netscape to accomplish the same effect as a single-pixel layout image, which was something web designers used to use to add white spaces to web pages without actually using an image. However, <spacer> no longer supported by any major browser and the same effects can now be achieved using simple CSS.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/spacer
	 * @deprecated
	 *
	 * @return Tag
	 */
	public function spacer()
	{
		return $this->append(new Tag('spacer'));
	}

	/**
	 * Append a <span> tag.
	 * MDN: The HTML <span> element is a generic inline container for phrasing content, which does not inherently represent anything. It can be used to group elements for styling purposes (using the class or id attributes), or because they share attribute values, such as lang.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/span
	 *
	 * @return ContainerTag
	 */
	public function span()
	{
		return $this->append(new ContainerTag('span'));
	}

	/**
	 * Append a <strike> tag.
	 * MDN: The HTML <strike> element (or HTML Strikethrough Element) places a strikethrough (horizontal line) over text.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/strike
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function strike()
	{
		return $this->append(new ContainerTag('strike'));
	}

	/**
	 * Append a <strong> tag.
	 * MDN: The HTML Strong Importance Element (<strong>) indicates that its contents have strong importance, seriousness, or urgency. Browsers typically render the contents in bold type.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/strong
	 *
	 * @return ContainerTag
	 */
	public function strong()
	{
		return $this->append(new ContainerTag('strong'));
	}

	/**
	 * Append a <style> tag.
	 * MDN: The HTML <style> element contains style information for a document, or part of a document.
	 * 
	 * Parent tags allowed: Global tag, <head>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/style
	 *
	 * @return ContainerTag
	 */
	public function style()
	{
		return $this->append(new ContainerTag('style'));
	}

	/**
	 * Append a <sub> tag.
	 * MDN: The HTML Subscript element (<sub>) specifies inline text which should be displayed as subscript for solely typographical reasons.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/sub
	 *
	 * @return ContainerTag
	 */
	public function sub()
	{
		return $this->append(new ContainerTag('sub'));
	}

	/**
	 * Append a <summary> tag.
	 * MDN: The HTML Disclosure Summary element (<summary>) element specifies a summary, caption, or legend for a <details> element's disclosure box.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/summary
	 *
	 * @return ContainerTag
	 */
	public function summary()
	{
		return $this->append(new ContainerTag('summary'));
	}

	/**
	 * Append a <sup> tag.
	 * MDN: The HTML Superscript element (<sup>) specifies inline text which is to be displayed as superscript for solely typographical reasons.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/sup
	 *
	 * @return ContainerTag
	 */
	public function sup()
	{
		return $this->append(new ContainerTag('sup'));
	}

	/**
	 * Append a <table> tag.
	 * MDN: The HTML <table> element represents tabular data — that is, information presented in a two-dimensional table comprised of rows and columns of cells containing data.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table
	 *
	 * @return ContainerTag
	 */
	public function table()
	{
		return $this->append(new ContainerTag('table'));
	}

	/**
	 * Append a <tbody> tag.
	 * MDN: The HTML Table Body element (<tbody>) encapsulates a set of table rows (<tr> elements), indicating that they comprise the body of the table (<table>).
	 * 
	 * Parent tags allowed: <table>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tbody
	 *
	 * @return ContainerTag
	 */
	public function tbody()
	{
		return $this->append(new ContainerTag('tbody'));
	}

	/**
	 * Append a <td> tag.
	 * MDN: The HTML <td> element defines a cell of a table that contains data. It participates in the table model.
	 * 
	 * Parent tags allowed: <tr>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/td
	 *
	 * @return ContainerTag
	 */
	public function td()
	{
		return $this->append(new ContainerTag('td'));
	}

	/**
	 * Append a <template> tag.
	 * MDN: The HTML Content Template (<template>) element is a mechanism for holding HTML that is not to be rendered immediately when a page is loaded but may be instantiated subsequently during runtime using JavaScript.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/template
	 *
	 * @return ContainerTag
	 */
	public function template()
	{
		return $this->append(new ContainerTag('template'));
	}

	/**
	 * Append a <textarea> tag.
	 * MDN: The HTML <textarea> element represents a multi-line plain-text editing control, useful when you want to allow users to enter a sizeable amount of free-form text, for example a comment on a review or feedback form.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/textarea
	 *
	 * @return ContainerTag
	 */
	public function textarea()
	{
		return $this->append(new ContainerTag('textarea'));
	}

	/**
	 * Append a <tfoot> tag.
	 * MDN: The HTML <tfoot> element defines a set of rows summarizing the columns of the table.
	 * 
	 * Parent tags allowed: <table>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tfoot
	 *
	 * @return ContainerTag
	 */
	public function tfoot()
	{
		return $this->append(new ContainerTag('tfoot'));
	}

	/**
	 * Append a <th> tag.
	 * MDN: The HTML <th> element defines a cell as header of a group of table cells. The exact nature of this group is defined by the scope and headers attributes.
	 * 
	 * Parent tags allowed: <tr>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/th
	 *
	 * @return ContainerTag
	 */
	public function th()
	{
		return $this->append(new ContainerTag('th'));
	}

	/**
	 * Append a <thead> tag.
	 * MDN: The HTML <thead> element defines a set of rows defining the head of the columns of the table.
	 * 
	 * Parent tags allowed: <table>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/thead
	 *
	 * @return ContainerTag
	 */
	public function thead()
	{
		return $this->append(new ContainerTag('thead'));
	}

	/**
	 * Append a <time> tag.
	 * MDN: The HTML <time> element represents a specific period in time.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/time
	 *
	 * @return ContainerTag
	 */
	public function time()
	{
		return $this->append(new ContainerTag('time'));
	}

	/**
	 * Append a <title> tag.
	 * MDN: The HTML Title element (<title>) defines the document's title that is shown in a browser's title bar or a page's tab.
	 * 
	 * Parent tags allowed: <head>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/title
	 *
	 * @return ContainerTag
	 */
	public function title()
	{
		return $this->append(new ContainerTag('title'));
	}

	/**
	 * Append a <tr> tag.
	 * MDN: The HTML <tr> element defines a row of cells in a table. The row's cells can then be established using a mix of <td> (data cell) and <th> (header cell) elements.
	 * 
	 * Parent tags allowed: <table>, <thead>, <tbody>, <tfoot>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tr
	 *
	 * @return ContainerTag
	 */
	public function tr()
	{
		return $this->append(new ContainerTag('tr'));
	}

	/**
	 * Append a <track> tag.
	 * MDN: The HTML <track> element is used as a child of the media elements <audio> and <video>. It lets you specify timed text tracks (or time-based data), for example to automatically handle subtitles. The tracks are formatted in WebVTT format (.vtt files) — Web Video Text Tracks or Timed Text Markup Language (TTML).
	 * 
	 * Parent tags allowed: <audio>, <video>
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/track
	 *
	 * @return Tag
	 */
	public function track()
	{
		return $this->append(new Tag('track'));
	}

	/**
	 * Append a <tt> tag.
	 * MDN: The obsolete HTML Teletype Text element (<tt>) creates inline text which is presented using the user agent's default monospace font face.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tt
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function tt()
	{
		return $this->append(new ContainerTag('tt'));
	}

	/**
	 * Append a <u> tag.
	 * MDN: The HTML Unarticulated Annotation Element (<u>) represents a span of inline text which should be rendered in a way that indicates that it has a non-textual annotation.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/u
	 *
	 * @return ContainerTag
	 */
	public function u()
	{
		return $this->append(new ContainerTag('u'));
	}

	/**
	 * Append a <ul> tag.
	 * MDN: The HTML <ul> element represents an unordered list of items, typically rendered as a bulleted list.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ul
	 *
	 * @return ContainerTag
	 */
	public function ul()
	{
		return $this->append(new ContainerTag('ul'));
	}

	/**
	 * Append a <var> tag.
	 * MDN: The HTML Variable element (<var>) represents the name of a variable in a mathematical expression or a programming context.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/var
	 *
	 * @return ContainerTag
	 */
	public function var()
	{
		return $this->append(new ContainerTag('var'));
	}

	/**
	 * Append a <video> tag.
	 * MDN: The HTML Video element (<video>) embeds a media player which supports video playback into the document. You can use <video> for audio content as well, but the <audio> element may provide a more appropriate user experience.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video
	 *
	 * @return ContainerTag
	 */
	public function video()
	{
		return $this->append(new ContainerTag('video'));
	}

	/**
	 * Append a <wbr> tag.
	 * MDN: The HTML <wbr> element represents a word break opportunity—a position within text where the browser may optionally break a line, though its line-breaking rules would not otherwise create a break at that location.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/wbr
	 *
	 * @return ContainerTag
	 */
	public function wbr()
	{
		return $this->append(new ContainerTag('wbr'));
	}

	/**
	 * Append a <xmp> tag.
	 * MDN: The HTML Example Element (<xmp>) renders text between the start and end tags without interpreting the HTML in between and using a monospaced font. The HTML2 specification recommended that it should be rendered wide enough to allow 80 characters per line.
	 * 
	 * Parent tags allowed: Global tag
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/xmp
	 * @deprecated
	 *
	 * @return ContainerTag
	 */
	public function xmp()
	{
		return $this->append(new ContainerTag('xmp'));
	}
}

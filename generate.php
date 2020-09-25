<?php

declare(strict_types = 1);
require './vendor/autoload.php';

use PHPTools\BoolHelper;
use PHPTools\StringHelper;

$attributes = file_get_contents('./attributes.txt');
$attributes = explode("\n", $attributes);
// $tags_attributes = [];

// $count = preg_match_all('/^([\w*-]+)\s+([\w<>, ]+)(?:[\t ]*([^\n]*))?$/m', $attributes, $matches);

if (count($attributes) > 1) {
	$keys = array_map('trim', explode(';', $attributes[0])) ?: [];
	unset($attributes[0]);
	// $global_attributes = [];

	foreach ($attributes as $index => $attribute) {
		$attribute = (object) array_combine($keys, explode(';', $attribute));
		$attribute->snake = StringHelper::snake_case($attribute->attr);
		$attribute->boolean = BoolHelper::to_bool($attribute->boolean);
		$attribute->deprecated = BoolHelper::to_bool($attribute->deprecated);
		$attribute->doc = trim($attribute->doc);
		$attribute->url = trim($attribute->url);
		$attribute->tags = explode(',', $attribute->tags);
		$attributes[$attribute->attr] = $attribute;
		unset($attributes[$index]);
	}

	$content = [];
	foreach ($attributes as $attribute) {
		$valid_attr = $attribute->attr;
		$deprecated = $attribute->deprecated ? "\n\t * @deprecated" : '';
		$mdn_doc = $attribute->doc ? 'MDN: '.trim($attribute->doc) : '';
		$tags = implode(', ', array_map(function ($tag) {
			return $tag === 'global' ? 'all' : "<$tag>";
		}, $attribute->tags));
		if ($tags)
			$tags = "\n\t * \n\t * Parent tags allowed: $tags";

		$key_param = '';
		$key_doc = '';
		$key_call = "'{$valid_attr}'";
		$key_check = '';

		$value_type = 'string';
		$value_param = '$value';
		$value_doc = '';
		$value_check = '';
		$value_call = '$value';
		$value_compare = '';

		if (preg_match('/-\*$/', $attribute->attr)) {
			$valid_attr = str_replace('*', 'key', $attribute->attr);
			$key_param = '$key';
			$key_doc = "\n\t * @param string \$key";
			$key_call = '"'.str_replace('*', '$key', $attribute->attr).'"';
			$key_check .= "\n\t\tif (!\$key) {\n\t\t\tthrow new \InvalidArgumentException('You must provide a valid key');\n\t\t}\n";
		}

		if ($attribute->boolean) {
			$value_type = 'bool';
			$value_check .= "\n\t\tif (!\$value) {\n\t\t\treturn \$this->remove_attr({$key_call});\n\t\t}\n";
			$value_param = '$value = true';
			$value_doc = "Enable the attribute by passing true (default), or remove it otherwise";
			$value_call = "'{$attribute->attr}'";
			$value_compare = " === '{$attribute->attr}'";
		}
		$func_name = StringHelper::snake_case($valid_attr);
		$params = implode(', ', array_filter([$key_param, $value_param]));

		$content[] = "/**
	 * Get the {$attribute->attr} attribute value.{$mdn_doc}{$tags}
	 *
	 * @see {$attribute->url}{$deprecated}
	 * {$key_doc}
	 * @return {$value_type}
	 */
	public function get_{$func_name}({$key_param})
	{{$key_check}
		return \$this->get_attr({$key_call}){$value_compare};
	}";

		$content[] = "/**
	 * Set the {$attribute->attr} attribute value.{$mdn_doc}{$tags}
	 *
	 * @see {$attribute->url}{$deprecated}
	 * {$key_doc}
	 * @param {$value_type} \$value {$value_doc}
	 *
	 * @return self
	 */
	public function set_{$func_name}({$params})
	{{$key_check}{$value_check}
		return \$this->set_attr({$key_call}, {$value_call});
	}";
	}

	$content = implode("\n\n\t", $content);
	$content = "<?php
namespace Tagger;

trait Attributes
{
	$content
}
";

	$path = __DIR__.'/src/Attributes.php';
	if (file_exists($path)) {
		unlink($path);
	}
	file_put_contents($path, $content);

// 	foreach ($matches[1] as $index => $attr) {
// 		$tags = trim($matches[2][$index]);
// 		$doc = trim($matches[3][$index]);

// 		if ($tags === 'Global attribute') {
// 			$global_attributes[$attr] = $doc;

// 			continue;
// 		}

// 		$valid_attr = str_replace('*', 'key', $attr);
// 		$pascal_attr = StringHelper::pascal_case($valid_attr);

// 		$tags_list = explode(', ', preg_replace('/<|>/', '', $tags));
// 		foreach ($tags_list as $tag) {
// 			if (!array_key_exists($tag, $tags_attributes)) {
// 				$tags_attributes[$tag] = [];
// 			}
// 			$tags_attributes[$tag][] = $pascal_attr;
// 		}

// 		$filename = "{$pascal_attr}Attribute.php";
// 		$path = __DIR__."/src/Attributes/${filename}";
// 		$content = parse_attr_trait($attr, $tags, $doc);

// 		if (file_exists($path)) {
// 			unlink($path);
// 		}
// 		file_put_contents($path, $content);
// 	}

// 	$content = [];
// 	foreach ($global_attributes as $attr => $doc) {
// 		$content[] = parse_attr($attr, 'Global attribute', $doc);
// 	}

// 	$content = implode("\n\n\t", $content);
// 	$content = "<?php
// namespace Tagger\\Attributes;

// /**
//  * Add a set of getter and setter functions to control global attributes
//  */
// trait GlobalAttributes
// {
// 	${content}
// }
// ";
// 	$path = __DIR__.'/src/Attributes/GlobalAttributes.php';
// 	if (file_exists($path)) {
// 		unlink($path);
// 	}
// 	file_put_contents($path, $content);
}

$tags = file_get_contents('./tags.txt');
$tags = explode("\n", $tags);
if (count($tags) > 1) {
	$keys = explode(';', $tags[0]) ?: [];
	unset($tags[0]);

	foreach ($tags as $index => $tag) {
		if (strpos($tag, '<') !== 0) {
			unset($tags[$index]);

			continue;
		}
		$tag = (object) array_combine($keys, explode(';', $tag));
		$tag->tag = StringHelper::kebab_case($tag->tag);
		$tag->url = "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/{$tag->tag}";
		$tag->pascal = StringHelper::pascal_case($tag->tag);
		$tag->snake = StringHelper::snake_case($tag->tag);
		$tag->deprecated = BoolHelper::to_bool($tag->deprecated);
		$tag->global = strpos($tag->parents, 'Global tag') !== false;
		$tag->global_tag = $tag->global && in_array($tag->inherit, ['_Tag', 'Tag'], true);
		$tag->global_container_tag = $tag->global && in_array($tag->inherit, ['_ContainerTag', 'ContainerTag'], true);
		// $tag->attributes = array_key_exists($tag->tag, $tags_attributes) ? $tags_attributes[$tag->tag] : [];
		$tag->parents = explode(', ', preg_replace('/<|>/', '', $tag->parents));
		$tag->children = [];
		$tags[$tag->tag] = $tag;
		unset($tags[$index]);
	}

	// foreach ($tags as &$tag) {
	// 	foreach ($tag->parents as $parent) {
	// 		if ($parent === 'Global tag') {
	// 			continue;
	// 		}
	// 		if (array_key_exists($parent, $tags)) {
	// 			$tags[$parent]->children[] = $tag->tag;
	// 		}
	// 	}
	// }

// 	foreach ($tags as $tag) {
// 		$deprecated = $tag->deprecated ? "\n * @deprecated" : '';
// 		$parent = implode('|', array_map(function ($tag) {
// 			if ($tag === 'Global tag') {
// 				return 'ContainerTag';
// 			}
// 			return StringHelper::pascal_case($tag).'Tag';
// 		}, $tag->parents));

// 		$attributes = [];
// 		if (array_key_exists($tag->tag, $tags_attributes)) {
// 			$attributes = implode("\n\t", array_map(function ($attr) {
// 				return "use \\Tagger\\Attributes\\{$attr}Attribute;";
// 			}, $tags_attributes[$tag->tag]));
// 		}
// 		$attributes = count($attributes) ? "\n\t${attributes}\n" : '';

// 		$children = [];
// 		foreach ($tag->children as $child_tag) {
// 			if (!array_key_exists($child_tag, $tags)) {
// 				throw new \InvalidArgumentException("Tag ${child_tag} does not exists");
// 			}
// 			$child = $tags[$child_tag];
// 			$children[] = "/**
// 	 * Append a <{$child->tag}> tag.
// 	 * MDN: {$child->doc}
// 	 *
// 	 * @see {$child->url}
// 	 *
// 	 * @return {$child->pascal}Tag
// 	 */
// 	public function {$child->snake}()
// 	{
// 		return \$this->append(new {$child->pascal}Tag());
// 	}";
// 		}
// 		$children = count($children) ? "\n\n\t".implode("\n\n\t", $children) : '';

// 		$content = "<?php
// namespace Tagger\\Tags;

// /**
//  * {$tag->doc}{$deprecated}
//  *
//  * @group {$tag->group}
//  *
//  * @see {$tag->url}
//  */
// class {$tag->pascal}Tag extends {$tag->inherit}
// {{$attributes}
// 	/**
// 	 * Constructor
// 	 */
// 	public function __construct()
// 	{
// 		parent::__construct('{$tag->tag}');
// 	}

// 	/**
// 	 * Return this parent
// 	 *
// 	 * @return {$parent}
// 	 */
// 	public function end()
// 	{
// 		return \$this->parent;
// 	}{$children}
// }
// ";
// 		$filename = "{$tag->pascal}Tag.php";
// 		$path = __DIR__."/src/Tags/${filename}";
// 		if (file_exists($path)) {
// 			unlink($path);
// 		}
// 		file_put_contents($path, $content);
// 	}

	$content = [];
	ksort($tags);
	// foreach (array_filter($tags, function ($tag) {
	// 	return $tag->global;
	// }) as $tag) {
	foreach ($tags as $tag) {
		$deprecated = $tag->deprecated ? "\n\t * @deprecated" : '';
		$mdn_doc = $tag->doc ? "\n\t * MDN: ".trim($tag->doc) : '';
		$class_name = str_replace('_', '', $tag->inherit);
		$return_item = 'return ';
		$return_self = '';
		$return_type = $class_name;

		$parents = implode(', ', array_map(function ($tag) {
			return $tag === "Global tag" || $tag === 'none' ? $tag : "<$tag>";
		}, $tag->parents));
		if ($parents) {
			$parents = "\n\t * \n\t * Parent tags allowed: $parents";
		}

		if ($class_name === "EmptyTag") {
			$return_item = '';
			$return_self = "\n\t\treturn \$this;";
			$return_type = "self As <$tag->tag> is empty, returns this instance. You do not need to call end().";
		}

		$content[] = "/**
	 * Append a <{$tag->tag}> tag.{$mdn_doc}{$parents}
	 *
	 * @see {$tag->url}{$deprecated}
	 *
	 * @return {$return_type}
	 */
	public function {$tag->snake}()
	{
		{$return_item}\$this->append(new {$class_name}('{$tag->tag}'));{$return_self}
	}";
	}
	$content = implode("\n\n\t", $content);
	$content = "<?php
namespace Tagger;

/**
 * Container Tag
 */
trait Tags
{
	${content}
}
";

	$path = __DIR__.'/src/Tags.php';
	if (file_exists($path)) {
		unlink($path);
	}
	file_put_contents($path, $content);
}

function parse_attr_trait($attr, $tags, $doc)
{
	$valid_attr = str_replace('*', 'key', $attr);
	$pascal_attr = StringHelper::pascal_case($valid_attr);
	$content = parse_attr($attr, $tags, $doc);

	return "<?php
namespace Tagger\\Attributes;

/**
 * Add getter and setter functions to control the ${attr} attribute
 */
trait {$pascal_attr}Attribute
{
	${content}
}
";
}

function parse_attr($attr, $tags, $doc)
{
	$valid_attr = $attr;

	$get_param = '';
	$get_param_doc = '';
	$get_getter_param = "'${attr}'";

	$set_param = '';
	$set_param_doc = '';
	$set_check_param = '';
	$set_setter = "'${attr}'";

	if (preg_match('/-\*$/', $attr)) {
		$valid_attr = str_replace('*', 'key', $attr);

		$get_param = '$key';
		$get_param_doc = "\n\t * @param string \$key";
		$get_getter_param = '"'.str_replace('*', '', $attr).'$key"';

		$set_param = '$key, ';
		$set_param_doc = '	 * @param string $key';
		$set_check_param = "
		if (!\$key) {
			throw new \\InvalidArgumentException('A valid key must be provided');
		}";
		$set_setter = '"'.str_replace('*', '', $attr).'$key"';
	}

	$func_name = StringHelper::snake_case($valid_attr);

	return "/**
	 * Get the ${attr} attribute value.
	 * MDN: ${doc}
	 * Requires: ${tags}
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/${attr}
	 * {$get_param_doc}
	 * @return bool|float|int|string
	 */
	public function get_{$func_name}({$get_param})
	{
		return \$this->get_attr(${get_getter_param});
	}

    /**
	 * Set the ${attr} attribute value.
	 * MDN: ${doc}
	 * Requires: ${tags}
	 *
	 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/${attr}
	 *${set_param_doc}
	 * @param bool|float|int|string \$value
	 *
	 * @return static
	 */
	public function set_{$func_name}({$set_param}\$value)
	{{$set_check_param}
		return \$this->attr({$set_setter}, \$value);
	}";
}

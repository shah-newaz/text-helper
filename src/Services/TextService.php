<?php
namespace Shahnewaz\TextHelper\Services;

class TextService {

	public function makeTitle ($text) {
		return title_case($text);
	}

	public function wordCount ($text) {
		$array = explode(' ', $text);
		return 'The sentence has '. count($array).' words.';
	}
}

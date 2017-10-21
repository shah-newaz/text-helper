<?php
namespace Shahnewaz\TextHelper\Services;

class TextService {

	public function makeTitle ($text) {
		return title_case($text);
	}
}

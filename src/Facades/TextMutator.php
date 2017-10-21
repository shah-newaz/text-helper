<?php

namespace Shahnewaz\TextHelper\Facades;

use Illuminate\Support\Facades\Facade;

class TextMutator extends Facade {
    protected static function getFacadeAccessor () {
        return 'texthelper';
    }
}

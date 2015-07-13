# PHP CodeSniffer Standards

A set of [Php CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) rules to perform code inspection based on the [PHP standards](https://developers.caddis.co/standards/php/) at [Caddis Interactive](https://caddis.co).

## Installation

Install PHP CodeSniffer via composer:

	composer global require "squizlabs/php_codesniffer=*"

Once installed, configure your editor or IDE to use `phpcs` for your code inspection and validation and set it to use the rules in this repository.

## Editor/IDE Instructions

* [PhpStorm](https://www.jetbrains.com/phpstorm/help/using-php-code-sniffer-tool.html)
* [Sublime Text](https://github.com/squizlabs/sublime-PHP_CodeSniffer)
* [Atom](https://github.com/AtomLinter/linter-phpcs)

## Rules

These rules follow [PSR standards](http://www.php-fig.org), with the following exceptions:

* Use tabs with a tab size of 4 instead of spaces
* No space should be placed after the `function` keyword in closures
	* `function()`, not `function ()`
* Files must not end with a newline

## License

Copyright 2015 Caddis Interactive, LLC

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

	http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
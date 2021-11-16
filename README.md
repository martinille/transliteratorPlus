# transliteratorPlus

This class extends the functionality of [PHP Transliterator class](https://www.php.net/manual/en/class.transliterator.php) and simplifies working with this class.


### Main functions
- Transliterates any text into Basic Latin.
- Overwrites language-specific characters, such as German "ß" to "ss" or Myanmar "æ" to "ae", etc.
- It can generate an URL-safe link using the functions *punctuation()*, *toLower()* and *setDelimiter()*.

### Install
Basic usage:

```php
// include main class
include_once '/path/to/transliteratorPlus.php';

// create object instance of the class
$tp = new transliteratorPlus();

// convert non-latin text to basic-latin
$output = $tp->getOutput("Falsches Üben von Xylophonmusik quält jeden größeren Zwerg.");

// returns: Falsches Uben von Xylophonmusik qualt jeden grosseren Zwerg.
echo $output; 
```

### How to create URL-safe link from a string
```php
// the string you need to make a secure SEO link
$string = "Jó foxim és don Quijote húszwattos lámpánál ülve egy pár bűvös cipőt készít. Árvíztűrő tükörfúrógép.";

// include main class
include_once '/path/to/transliteratorPlus.php'; 

// create object instance of the class
$tp = new transliteratorPlus();

// create URL/SEO safe link 
$seoLink = $tp->toLower(true)->punctuation(false)->setDelimiter('-')->getOutput($string);

// returns: jo-foxim-es-don-quijote-huszwattos-lampanal-ulve-egy-par-buvos-cipot-keszit-arvizturo-tukorfurogep
echo $seoLink;
```


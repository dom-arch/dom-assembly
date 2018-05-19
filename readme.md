# [BETA] DOMArch::DOMAssembly

## Create a document

```php
use DOMAssembly\HTML\Document;

$document = Document::create();
```

## Create an element

```php
use DOMAssembly\HTML\Tag\LabelTag;

$label = LabelTag::of($document);
```

## Append an element to another

```php
use DOMAssembly\HTML\Tag\InputTag;

$input = InputTag::of($document);
$label->append($input);
```

## Add a text node to an element

```php
$label->appendText('text');
```

## Add a translated text node to an element

```php
$label->appendText('translation-key', []);
```

## Add a translated text node to an element, with `sprintf` params

```php
$label->appendText('translation-key-with-value1=%1$s-and-value2=%2$s', ['a', 'b']);
```

## Translate the document

```php
use DOMAssembly\Translator\TranslatorInterface;

$document->translate(TranslatorInterface $translator);
```

## Turn the document to a string

```php
$html = $document->toString(bool $beautify = false);
```

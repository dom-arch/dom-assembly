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

## All together

```php
use DOMAssembly\ {
    Assembly,
    HTML\Attr\LangAttr,
    HTML\Document,
    HTML\Tag,
    HTML\Text,
    Translator\TranslatorInterface
};

class Translator
    implements TranslatorInterface
{
    public function translate(
        Assembly $node
    )
    {
        $locale = null;
        $parent = $node->getParent();

        while (!$locale && $parent) {
            $locale = $parent->get(LangAttr::NAME);
            $parent = $parent->getParent();
        }

        $sprintf_params = $node->getSprintfParams();
        $format = $node->toString();
        $text = sprintf($format, ...$sprintf_params);
        $node->getNode()->nodeValue = $text;
    }
}

echo ($doc = Document::create())
    ->append(Tag\HtmlTag::of($doc)
        ->setLang('fr')
        ->append(Tag\HeadTag::of($doc)
            ->append(Tag\MetaTag::of($doc)
                ->setCharsetUTF8())
            ->append(Tag\TitleTag::of($doc)
                ->append(Text::of($doc, 'My page number %1$s !!!', [1]))))
        ->append(Tag\BodyTag::of($doc)
            ->append(Tag\HeaderTag::of($doc)
                ->append(Tag\H1Tag::of($doc)
                    ->append(Text::of($doc, 'My page number %1$s !!!', [1]))))
            ->append(Tag\MainTag::of($doc)
                ->append(Tag\H1Tag::of($doc)
                    ->append(Text::of($doc, 'My section Title', [])))
                ->append(Tag\PTag::of($doc)
                    ->append(Text::of($doc, 'My paragraph\'s text number %1$s', [1]))
                        ->setTitle('My paragraph %1$s title', [1]))
                    ->append(Tag\BrTag::of($doc))
                    ->append(Text::of($doc, 'My paragraph\'s text number %1$s', [2])))
            ->append(Tag\FooterTag::of($doc)
                ->append(Tag\PTag::of($doc)
                    ->append(Text::of($doc, 'Powered by %1$s', ['Lcf.vs']))))))
    ->translate(new Translator())
    ->toString(2);
```

### Result
```html
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>My page number 1 !!!</title>
  </head>
  <body>
    <header>
      <h1>My page number 1 !!!</h1>
    </header>
    <main><h1>My section Title</h1><p title="My paragraph 1 title">My paragraph's text number 1</p><br/>My paragraph's text number 2</main>
    <footer>
      <p>Powered by Lcf.vs</p>
    </footer>
  </body>
</html>

```
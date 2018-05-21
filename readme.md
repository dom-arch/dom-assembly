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
    HTML\Document,
    HTML\Tag,
    HTML\Text,
    Translator\TranslatableInterface,
    Translator\TranslatorInterface
};

class Translator
    implements TranslatorInterface
{
    /**
     * @var array
     */
    private $translations = [];

    /**
     * Translator constructor.
     * @param array $translations
     */
    public function __construct(
        array $translations
    )
    {
        $this->translations = $translations;
    }

    /**
     * @param TranslatableInterface $node
     * @param string|null $locale
     * @return string
     */
    public function translate(
        TranslatableInterface $node,
        string $locale = null
    )
    {
        $sprintf_params = $node->getSprintfParams();
        $format = $node->toString();
        $translation = $this->translations[$locale][$format] ?? $format;

        return sprintf($translation, ...$sprintf_params);
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
                    ->append(Text::of($doc, 'My section title', [])))
                ->append(Tag\PTag::of($doc)
                    ->append(Text::of($doc, 'My paragraph\'s %1$s text number %2$s', [1, 1]))
                        ->setTitle('My paragraph %1$s title', [1])
                        ->append(Tag\BrTag::of($doc))
                        ->append(Text::of($doc, 'My paragraph\'s %1$s text number %2$s', [1, 2]))))
            ->append(Tag\FooterTag::of($doc)
                ->append(Tag\PTag::of($doc)
                    ->append(Text::of($doc, 'Powered by %1$s', ['Lcf.vs']))))))
    ->translate(new Translator([
        'fr' => [
            'My page number %1$s !!!' => 'Ma page n°%1$s',
            'My section title' => 'Titre de ma section',
            'My paragraph %1$s title' => 'Titre de mon paragraphe %1$s',
            'My paragraph\'s %1$s text number %2$s' => 'Texte %2$s de mon paragraphe %1$s',
            'Powered by %1$s' => 'Propulsé par %1$s'
        ]
    ]))
    ->toString(2);
```

### Result
```html
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title>Ma page n&#xB0;1</title>
  </head>
  <body>
    <header>
      <h1>Ma page n&#xB0;1</h1>
    </header>
    <main>
      <h1>Titre de ma section</h1>
      <p title="Titre de mon paragraphe 1">Texte 1 de mon paragraphe 1<br/>Texte 2 de mon paragraphe 1</p>
    </main>
    <footer>
      <p>Propuls&#xE9; par Lcf.vs</p>
    </footer>
  </body>
</html>
```
<?php

namespace DOMAssembly\DOM {

    use DOMAssembly\HTML;

    class Document
        extends \DOMDocument
    {
        /**
         * @var array
         */
        protected static $nodeClasses = [
            \DOMAttr::class => Attribute::class,
            \DOMElement::class => Element::class,
            \DOMText::class => Text::class
        ];

        /**
         * @var HTML\Document
         */
        private $assembly;

        /**
         * @return HTML\Document
         */
        public function getAssembly()
        {
            return $this->assembly;
        }

        /**
         * @param HTML\Document $document
         * @param string $encoding
         * @param bool $standalone
         * @param string $version
         * @param array|null $classes
         * @return static
         */
        public static function create(
            HTML\Document $document,
            string $encoding = 'utf-8',
            bool $standalone = true,
            string $version = '1.0',
            array $classes = null
        ) {
            $node = new static($version, $encoding);
            $node->xmlStandalone = $standalone;
            $classes = $classes ?? static::$nodeClasses;

            foreach ($classes as $base => $extended) {
                $node->registerNodeClass($base, $extended);
            }

            $node->assembly = $document;

            return $node;
        }
    }
}
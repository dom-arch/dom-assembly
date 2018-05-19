<?php

namespace DOMAssembly\DOM {

    use DOMAssembly\HTML;

    class Element
        extends \DOMElement
    {
        /**
         * @var HTML\Tag
         */
        private $assembly;

        /**
         * @var Document
         */
        public $ownerDocument;

        /**
         * @var Element|Document|null
         */
        public $parentNode;

        /**
         * @var Element|null
         */
        public $nextSibling;

        /**
         * @var Element|null
         */
        public $previousSibling;

        /**
         * @return HTML\Tag
         */
        public function getAssembly()
        {
            return $this->assembly;
        }

        /**
         * @param HTML\Tag $tag
         * @param Document $document
         * @param string $name
         * @param string|null $value
         * @return static
         */
        public static function create(
            HTML\Tag $tag,
            Document $document,
            string $name,
            string $value = null
        ) {
            $node = $document->createElement($name, $value);
            $node->assembly = $tag;

            return $node;
        }
    }
}
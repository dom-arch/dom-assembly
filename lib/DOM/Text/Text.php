<?php

namespace DOMAssembly\DOM {

    use DOMAssembly\HTML;

    class Text
        extends \DOMText
    {
        /**
         * @var HTML\Text
         */
        private $assembly;

        /**
         * @return HTML\Text
         */
        public function getAssembly()
        {
            return $this->assembly;
        }

        /**
         * @param HTML\Text $text
         * @param Document $document
         * @param string|null $value
         * @return \DOMText
         */
        public static function create(
            HTML\Text $text,
            Document $document,
            string $value = null
        ) {
            $node = $document->createTextNode($value);
            $node->assembly = $text;

            return $node;
        }
    }
}
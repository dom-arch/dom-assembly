<?php

namespace DOMAssembly\DOM {

    use DOMAssembly\HTML;

    class Attribute
        extends \DOMAttr
    {
        /**
         * @var HTML\Attr
         */
        private $assembly;

        /**
         * @return HTML\Attr
         */
        public function getAssembly()
        {
            return $this->assembly;
        }

        /**
         * @param HTML\Attr $attribute
         * @param Document $document
         * @param string $name
         * @param string|null $value
         * @return static
         */
        public static function create(
            HTML\Attr $attribute,
            Document $document,
            string $name,
            string $value = null
        ) {
            $node = new self($name, $value);
            $node->assembly = $attribute;

            return $node;
        }
    }
}
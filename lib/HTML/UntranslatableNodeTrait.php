<?php

namespace DOMAssembly\HTML {

    trait UntranslatableNodeTrait
    {
        /**
         * @param Document $document
         * @param null $value
         * @return static
         */
        public static function of(
            Document $document,
            $value = null
        )
        {
            return new static($document, static::NAME, $value);
        }
    }
}
<?php

namespace DOMAssembly\HTML {

    trait VoidNodeTrait
    {
        /**
         * @param Document $document
         * @return static
         */
        public static function of(
            Document $document
        )
        {
            return new static($document, static::NAME);
        }
    }
}
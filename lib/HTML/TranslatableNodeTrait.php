<?php

namespace DOMAssembly\HTML {

    trait TranslatableNodeTrait
    {
        /**
         * @param Document $document
         * @param null $value
         * @param array|null $sprintf_params
         * @return static
         */
        public static function of(
            Document $document,
            $value = null,
            array $sprintf_params = null
        )
        {
            if (defined('static::NAME')) {
                return new static($document, static::NAME, $value, $sprintf_params);
            }

            return new static($document, $value, $sprintf_params);
        }
    }
}
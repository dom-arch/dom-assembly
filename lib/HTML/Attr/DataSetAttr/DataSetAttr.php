<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Document;
    use DOMAssembly\HTML\Attr;

    class DataSetAttr
        extends Attr
    {
        const
            NAME = 'data-';

        /**
         * @param Document $document
         * @param string $name
         * @param null $value
         * @param array|null $sprintf_params
         * @return static
         */
        public static function of(
            Document $document,
            string $name,
            $value = null,
            array $sprintf_params = null
        ) {
            $name = static::NAME . $name;

            return new static($document, $name, $value, $sprintf_params);
        }
    }
}
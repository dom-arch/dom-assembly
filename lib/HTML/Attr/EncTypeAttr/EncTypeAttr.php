<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class EncTypeAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
        NAME = 'enctype',
        VALUE_URL_ENCODED = 'application/x-www-form-urlencoded',
        VALUE_FORM_DATA = 'multipart/form-data',
        VALUE_TEXT_PLAIN = 'text/plain';
    }
}
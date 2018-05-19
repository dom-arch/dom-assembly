<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class FormEncTypeAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
        NAME = 'formenctype',
        VALUE_URL_ENCODED = 'application/x-www-form-urlencoded',
        VALUE_FORM_DATA = 'multipart/form-data',
        VALUE_TEXT_PLAIN = 'text/plain';
    }
}
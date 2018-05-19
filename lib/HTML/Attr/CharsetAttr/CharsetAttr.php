<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class CharsetAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
        NAME = 'charset',
        VALUE_UTF_8 = 'utf-8',
        VALUE_DEFAULT = CharsetAttr::VALUE_UTF_8;
    }
}
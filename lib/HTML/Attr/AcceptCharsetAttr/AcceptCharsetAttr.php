<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class AcceptCharsetAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'accept-charset',
            VALUE_UTF_8 = 'utf-8',
            VALUE_DEFAULT = CharsetAttr::VALUE_UTF_8;
    }
}
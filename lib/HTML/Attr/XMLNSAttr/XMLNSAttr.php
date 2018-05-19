<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class XMLNSAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'xmlns',
            VALUE_XHTML = 'http://www.w3.org/1999/xhtml',
            VALUE_DEFAULT = XMLNSAttr::VALUE_XHTML;
    }
}
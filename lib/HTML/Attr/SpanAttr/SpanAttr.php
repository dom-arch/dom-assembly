<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class SpanAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'span',
            VALUE_DEFAULT = 1;
    }
}
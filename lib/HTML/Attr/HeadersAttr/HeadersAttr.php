<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class HeadersAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'headers';
    }
}
<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class AsyncAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'async',
            VALUE_DEFAULT = 'async';
    }
}
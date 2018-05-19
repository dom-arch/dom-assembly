<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class DeferAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'defer',
            VALUE_DEFAULT = 'defer';
    }
}
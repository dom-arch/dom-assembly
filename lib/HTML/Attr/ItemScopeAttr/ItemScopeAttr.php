<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ItemScopeAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'itemscope',
            VALUE_DEFAULT = 'itemscope';
    }
}
<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ItemRefAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'itemref';
    }
}
<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ItemIdAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'itemid';
    }
}
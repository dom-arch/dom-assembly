<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ItemTypeAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'itemtype';
    }
}
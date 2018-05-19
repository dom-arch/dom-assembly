<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ItemPropAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'itemprop';
    }
}
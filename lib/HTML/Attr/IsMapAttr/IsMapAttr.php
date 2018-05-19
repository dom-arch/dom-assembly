<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class IsMapAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'ismap';
    }
}
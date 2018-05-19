<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class TypeAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'type';
    }
}
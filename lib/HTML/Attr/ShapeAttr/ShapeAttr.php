<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ShapeAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'shape',
            VALUE_RECT = 'rect',
            VALUE_CIRCLE = 'circle',
            VALUE_POLY = 'poly',
            VALUE_DEFAULT = 'default';
    }
}
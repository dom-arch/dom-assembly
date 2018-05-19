<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ClassAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'class';
    }
}
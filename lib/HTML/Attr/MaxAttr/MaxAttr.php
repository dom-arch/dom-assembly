<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class MaxAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'max';
    }
}
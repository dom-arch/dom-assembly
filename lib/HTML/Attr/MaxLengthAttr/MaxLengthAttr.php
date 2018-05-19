<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class MaxLengthAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'maxlength';
    }
}
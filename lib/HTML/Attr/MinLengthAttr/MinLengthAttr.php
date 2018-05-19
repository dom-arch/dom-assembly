<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class MinLengthAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'minlength';
    }
}
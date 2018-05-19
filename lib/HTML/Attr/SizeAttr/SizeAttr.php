<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class SizeAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'size';
    }
}
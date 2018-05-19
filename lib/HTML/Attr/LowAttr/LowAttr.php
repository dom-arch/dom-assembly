<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class LowAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'low';
    }
}
<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class DefaultAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'default';
    }
}
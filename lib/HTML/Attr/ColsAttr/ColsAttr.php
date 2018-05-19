<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ColsAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'cols';
    }
}
<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ForAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'for';
    }
}
<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class WidthAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'width';
    }
}
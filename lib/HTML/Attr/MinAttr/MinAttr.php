<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class MinAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'min';
    }
}
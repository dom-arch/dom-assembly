<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class OpenAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'open';
    }
}
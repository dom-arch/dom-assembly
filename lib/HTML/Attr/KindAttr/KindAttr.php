<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class KindAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'kind';
    }
}
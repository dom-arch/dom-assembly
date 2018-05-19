<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class AcceptAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'accept';
    }
}
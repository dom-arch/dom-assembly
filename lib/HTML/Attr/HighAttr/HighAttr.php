<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class HighAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'high';
    }
}
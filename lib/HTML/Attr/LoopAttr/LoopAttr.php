<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class LoopAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'loop',
            VALUE_DEFAULT = 'true';
    }
}
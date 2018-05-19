<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class WrapAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'wrap',
            VALUE_SOFT = 'soft',
            VALUE_HARD = 'hard',
            VALUE_DEFAULT = WrapAttr::VALUE_SOFT;
    }
}
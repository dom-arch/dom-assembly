<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class TargetAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'target',
            VALUE_SELF = '_self',
            VALUE_BLANK = '_blank',
            VALUE_PARENT = '_parent',
            VALUE_TOP = '_top',
            VALUE_DEFAULT = TargetAttr::VALUE_SELF;
    }
}
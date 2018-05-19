<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class DisabledAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'disabled',
            VALUE_DEFAULT = 'disabled';
    }
}
<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class CheckedAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'checked',
            VALUE_DEFAULT = 'checked';
    }
}
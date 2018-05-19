<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ReadonlyAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'readonly',
            VALUE_DEFAULT = 'readonly';
    }
}
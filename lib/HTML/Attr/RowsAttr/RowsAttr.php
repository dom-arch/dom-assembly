<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class RowsAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'rows';
    }
}
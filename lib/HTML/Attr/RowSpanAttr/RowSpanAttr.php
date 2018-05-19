<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class RowSpanAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'rowspan';
    }
}
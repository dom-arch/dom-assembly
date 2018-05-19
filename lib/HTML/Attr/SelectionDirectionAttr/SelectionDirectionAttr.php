<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class SelectionDirectionAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'selectionDirection',
            VALUE_BACKWARD = 'backward',
            VALUE_FORWARD = 'forward',
            VALUE_NONE = 'none';
    }
}
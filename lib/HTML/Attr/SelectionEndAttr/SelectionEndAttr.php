<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class SelectionEndAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'selectionEnd';
    }
}
<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class SelectionStartAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'selectionStart';
    }
}
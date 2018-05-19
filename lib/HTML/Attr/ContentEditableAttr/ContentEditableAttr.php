<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ContentEditableAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'contenteditable';
    }
}
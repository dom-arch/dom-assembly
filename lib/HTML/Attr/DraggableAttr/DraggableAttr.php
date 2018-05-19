<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class DraggableAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'draggable';
    }
}
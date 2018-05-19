<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class SlotAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'slot';
    }
}
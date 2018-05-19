<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ColSpanAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'colspan';
    }
}
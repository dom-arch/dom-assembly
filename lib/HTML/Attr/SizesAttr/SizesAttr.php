<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class SizesAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'sizes';
    }
}
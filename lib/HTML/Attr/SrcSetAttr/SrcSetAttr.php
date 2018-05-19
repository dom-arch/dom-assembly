<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class SrcSetAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'srcset',
            TYPE_PIXEL_DENSITY = 'x',
            TYPE_WIDTH = 'w';
    }
}
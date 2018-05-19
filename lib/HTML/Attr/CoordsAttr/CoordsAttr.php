<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class CoordsAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'coords';
    }
}
<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class PosterAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'poster';
    }
}
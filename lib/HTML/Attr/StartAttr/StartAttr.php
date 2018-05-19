<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class StartAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'start';
    }
}
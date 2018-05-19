<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class UseMapAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'usemap';
    }
}
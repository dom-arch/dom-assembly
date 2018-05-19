<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class TabIndexAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'tabindex';
    }
}
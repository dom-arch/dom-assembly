<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class PlaysInlineAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'playsinline';
    }
}
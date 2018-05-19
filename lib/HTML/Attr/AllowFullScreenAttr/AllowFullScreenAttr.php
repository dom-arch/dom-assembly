<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class AllowFullScreenAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'allowfullscreen',
            VALUE_DEFAULT = 'false';
    }
}
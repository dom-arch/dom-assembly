<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ListAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'list';
    }
}
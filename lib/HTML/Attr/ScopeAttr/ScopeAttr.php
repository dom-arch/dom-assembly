<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ScopeAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'scope';
    }
}
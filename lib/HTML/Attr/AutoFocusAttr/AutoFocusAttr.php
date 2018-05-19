<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class AutoFocusAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'autofocus';
    }
}
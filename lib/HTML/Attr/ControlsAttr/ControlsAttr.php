<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ControlsAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'controls',
            VALUE_DEFAULT = 'true';
    }
}
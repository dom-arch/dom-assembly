<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class MutedAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'muted',
            VALUE_DEFAULT = 'false';
    }
}
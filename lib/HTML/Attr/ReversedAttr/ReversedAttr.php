<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class ReversedAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'reversed';
    }
}
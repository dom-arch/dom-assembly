<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class NoValidateAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'novalidate';
    }
}
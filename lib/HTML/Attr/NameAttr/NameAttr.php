<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class NameAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'name';
    }
}
<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class AccessKeyAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'accesskey';
    }
}
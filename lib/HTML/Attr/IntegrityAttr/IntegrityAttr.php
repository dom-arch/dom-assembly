<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class IntegrityAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'integrity';
    }
}
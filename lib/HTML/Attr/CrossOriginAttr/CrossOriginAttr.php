<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class CrossOriginAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'crossorigin',
            VALUE_ANONYMOUS = 'anonymous',
            VALUE_USE_CREDENTIALS = 'use-credentials';
    }
}
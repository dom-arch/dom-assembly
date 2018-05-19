<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class MethodAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'method',
            VALUE_GET = 'GET',
            VALUE_POST = 'POST',
            VALUE_PUT = 'PUT',
            VALUE_DELETE = 'DELETE';
    }
}
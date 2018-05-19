<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class RoleAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'role';
    }
}
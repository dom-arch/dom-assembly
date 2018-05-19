<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class RequiredAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'required',
            VALUE_DEFAULT = 'required';
    }
}
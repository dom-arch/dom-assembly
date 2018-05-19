<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class DirNameAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'dirname',
            VALUE_AUTO = 'auto',
            VALUE_LTR = 'ltr',
            VALUE_RTL = 'rtl';
    }
}
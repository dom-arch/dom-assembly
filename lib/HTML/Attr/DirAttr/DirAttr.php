<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class DirAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'dir',
            VALUE_AUTO = 'auto',
            VALUE_LTR = 'ltr',
            VALUE_RTL = 'rtl';
    }
}
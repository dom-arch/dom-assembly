<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class AutoPlayAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'autoplay',
            VALUE_DEFAULT = 'true';
    }
}
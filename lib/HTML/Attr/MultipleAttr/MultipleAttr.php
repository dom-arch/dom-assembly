<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class MultipleAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'multiple',
            VALUE_DEFAULT = 'multiple';
    }
}
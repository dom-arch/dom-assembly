<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class ValueAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
        NAME = 'value';
    }
}
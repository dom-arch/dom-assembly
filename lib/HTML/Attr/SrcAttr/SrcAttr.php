<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class SrcAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'src';
    }
}
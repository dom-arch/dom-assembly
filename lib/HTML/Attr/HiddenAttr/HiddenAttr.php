<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class HiddenAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'hidden';
    }
}
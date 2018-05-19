<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class HrefAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'href';
    }
}
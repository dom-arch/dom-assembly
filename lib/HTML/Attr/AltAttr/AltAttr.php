<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class AltAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'alt';
    }
}
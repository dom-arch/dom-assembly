<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class PlaceholderAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'placeholder';
    }
}
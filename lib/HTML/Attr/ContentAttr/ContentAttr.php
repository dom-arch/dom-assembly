<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class ContentAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'content';
    }
}
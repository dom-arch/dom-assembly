<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class HeightAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'height';
    }
}
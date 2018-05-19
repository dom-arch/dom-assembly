<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class AbbrAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'abbr';
    }
}
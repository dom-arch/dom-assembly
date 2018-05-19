<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class CiteAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'cite';
    }
}
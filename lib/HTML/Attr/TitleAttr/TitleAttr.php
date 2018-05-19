<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class TitleAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'title';
    }
}
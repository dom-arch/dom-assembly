<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class LangAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'lang';
    }
}
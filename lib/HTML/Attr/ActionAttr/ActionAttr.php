<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class ActionAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'action';
    }
}
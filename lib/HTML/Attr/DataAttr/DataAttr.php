<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class DataAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'data';
    }
}
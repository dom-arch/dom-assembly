<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class FormActionAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'formaction';
    }
}
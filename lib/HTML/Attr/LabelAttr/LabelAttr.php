<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class LabelAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'label';
    }
}
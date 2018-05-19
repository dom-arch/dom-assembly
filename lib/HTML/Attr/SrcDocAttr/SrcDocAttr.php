<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class SrcDocAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'srcdoc';
    }
}
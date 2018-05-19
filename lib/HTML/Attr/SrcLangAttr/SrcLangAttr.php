<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class SrcLangAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'srclang';
    }
}
<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class HrefLangAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'hreflang';
    }
}
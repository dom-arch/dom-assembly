<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class TranslateAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'translate';
    }
}
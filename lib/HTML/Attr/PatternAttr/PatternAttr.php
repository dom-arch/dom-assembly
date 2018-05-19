<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class PatternAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'pattern';
    }
}
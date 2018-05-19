<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class CaptureAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'capture';
    }
}
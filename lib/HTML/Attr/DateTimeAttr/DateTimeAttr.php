<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Document;
    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class DateTimeAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'datetime';
    }
}
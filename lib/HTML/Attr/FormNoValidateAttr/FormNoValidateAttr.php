<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class FormNoValidateAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
        NAME = 'formnovalidate';
    }
}
<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class FormAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
        NAME = 'form';
    }
}
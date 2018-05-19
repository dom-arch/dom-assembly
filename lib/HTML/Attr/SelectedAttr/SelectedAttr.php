<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class SelectedAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'selected',
            VALUE_DEFAULT = 'selected';
    }
}
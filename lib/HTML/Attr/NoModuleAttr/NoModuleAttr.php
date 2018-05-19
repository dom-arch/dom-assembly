<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class NoModuleAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'nomodule';
    }
}
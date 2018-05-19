<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class NonceAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'nonce';
    }
}
<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class DecodingAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'decoding',
            VALUE_ASYNC = 'async',
            VALUE_AUTO = 'auto',
            VALUE_SYNC = 'sync';
    }
}
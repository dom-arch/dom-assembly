<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class PreLoadAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'preload',
            VALUE_AUTO = 'auto',
            VALUE_METADATA = 'metadata',
            VALUE_NONE = 'none',
            VALUE_DEFAULT = PreFetchAttr::VALUE_METADATA;
    }
}
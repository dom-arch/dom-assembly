<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class VolumeAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'volume';
    }
}
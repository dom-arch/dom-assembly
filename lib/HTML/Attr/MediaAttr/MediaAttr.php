<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\UntranslatableNodeTrait;

    class MediaAttr
        extends Attr
    {
        use UntranslatableNodeTrait;

        const
            NAME = 'media';
    }
}
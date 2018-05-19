<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\ValueAttr\ValueTrait;

    class LiTag
        extends BlockContainerTag
    {
        use ValueTrait;

        const NAME = 'li';
    }
}
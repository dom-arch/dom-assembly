<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\OpenAttr\OpenTrait;

    class DialogTag
        extends BlockContainerTag
    {
        use OpenTrait;

        const NAME = 'dialog';
    }
}
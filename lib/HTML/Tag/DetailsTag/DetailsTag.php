<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\OpenAttr\OpenTrait;

    class DetailsTag
        extends BlockContainerTag
    {
        use OpenTrait;

        const NAME = 'details';
    }
}
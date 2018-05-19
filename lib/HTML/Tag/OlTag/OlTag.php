<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\ReversedAttr\ReversedTrait;
    use DOMAssembly\HTML\Attr\StartAttr\StartTrait;

    class OlTag
        extends BlockContainerTag
    {
        use ReversedTrait;
        use StartTrait;

        const NAME = 'ol';
    }
}
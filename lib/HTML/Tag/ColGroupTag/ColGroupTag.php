<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\SpanAttr\SpanTrait;

    class ColGroupTag
        extends BlockContainerTag
    {
        use SpanTrait;

        const NAME = 'colgroup';
    }
}
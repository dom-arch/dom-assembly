<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\SpanAttr\SpanTrait;

    class ColTag
        extends VoidTag
    {
        use SpanTrait;

        const NAME = 'col';
    }
}
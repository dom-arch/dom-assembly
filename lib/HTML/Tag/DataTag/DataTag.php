<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\ValueAttr\ValueTrait;

    class DataTag
        extends InlineContainerTag
    {
        use ValueTrait;

        const NAME = 'data';
    }
}
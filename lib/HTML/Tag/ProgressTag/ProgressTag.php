<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\MaxAttr\MaxTrait;
    use DOMAssembly\HTML\Attr\ValueAttr\ValueTrait;

    class ProgressTag
        extends InlineContainerTag
    {
        use MaxTrait;
        use ValueTrait;

        const NAME = 'progress';
    }
}
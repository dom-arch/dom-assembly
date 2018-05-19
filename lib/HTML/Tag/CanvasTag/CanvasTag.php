<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\HeightAttr\HeightTrait;
    use DOMAssembly\HTML\Attr\WidthAttr\WidthTrait;

    class CanvasTag
        extends InlineContainerTag
    {
        use HeightTrait;
        use WidthTrait;

        const NAME = 'canvas';
    }
}
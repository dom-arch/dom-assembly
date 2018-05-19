<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\XMLNSAttr\XMLNSTrait;

    class HtmlTag
        extends BlockContainerTag
    {
        use XMLNSTrait;

        const NAME = 'html';
    }
}
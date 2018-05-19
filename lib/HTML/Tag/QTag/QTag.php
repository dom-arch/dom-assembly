<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\CiteAttr\CiteTrait;

    class QTag
        extends InlineContainerTag
    {
        use CiteTrait;

        const NAME = 'q';
    }
}
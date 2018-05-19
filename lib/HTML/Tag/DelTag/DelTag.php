<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\CiteAttr\CiteTrait;
    use DOMAssembly\HTML\Attr\DateTimeAttr\DateTimeTrait;

    class DelTag
        extends InlineContainerTag
    {
        use CiteTrait;
        use DateTimeTrait;

        const NAME = 'del';
    }
}
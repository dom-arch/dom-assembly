<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\CiteAttr\CiteTrait;
    use DOMAssembly\HTML\Attr\DateTimeAttr\DateTimeTrait;

    class InsTag
        extends InlineContainerTag
    {
        use CiteTrait;
        use DateTimeTrait;

        const NAME = 'ins';
    }
}
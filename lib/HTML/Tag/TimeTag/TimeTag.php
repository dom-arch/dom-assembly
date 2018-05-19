<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\DateTimeAttr\DateTimeTrait;

    class TimeTag
        extends InlineContainerTag
    {
        use DateTimeTrait;

        const NAME = 'time';
    }
}
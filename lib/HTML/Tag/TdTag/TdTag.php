<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\ColSpanAttr\ColSpanTrait;
    use DOMAssembly\HTML\Attr\HeadersAttr\HeadersTrait;
    use DOMAssembly\HTML\Attr\RowSpanAttr\RowSpanTrait;

    class TdTag
        extends BlockContainerTag
    {
        use ColSpanTrait;
        use HeadersTrait;
        use RowSpanTrait;

        const NAME = 'td';
    }
}
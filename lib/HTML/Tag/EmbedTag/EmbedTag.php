<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\HeightAttr\HeightTrait;
    use DOMAssembly\HTML\Attr\SrcAttr\SrcTrait;
    use DOMAssembly\HTML\Attr\TypeAttr\TypeTrait;
    use DOMAssembly\HTML\Attr\WidthAttr\WidthTrait;

    class EmbedTag
        extends VoidTag
    {
        use HeightTrait;
        use SrcTrait;
        use TypeTrait;
        use WidthTrait;

        const NAME = 'embed';
    }
}
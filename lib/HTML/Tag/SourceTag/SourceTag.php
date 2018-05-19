<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\MediaAttr\MediaTrait;
    use DOMAssembly\HTML\Attr\SizesAttr\SizesTrait;
    use DOMAssembly\HTML\Attr\SrcAttr\SrcTrait;
    use DOMAssembly\HTML\Attr\SrcSetAttr\SrcSetTrait;
    use DOMAssembly\HTML\Attr\TypeAttr\TypeTrait;

    class SourceTag
        extends VoidTag
    {
        use MediaTrait;
        use SizesTrait;
        use SrcTrait;
        use SrcSetTrait;
        use TypeTrait;

        const NAME = 'source';
    }
}
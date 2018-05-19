<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\CrossOriginAttr\CrossOriginTrait;
    use DOMAssembly\HTML\Attr\DecodingAttr\DecodingTrait;
    use DOMAssembly\HTML\Attr\HeightAttr\HeightTrait;
    use DOMAssembly\HTML\Attr\IsMapAttr\IsMapTrait;
    use DOMAssembly\HTML\Attr\ReferrerPolicyAttr\ReferrerPolicyTrait;
    use DOMAssembly\HTML\Attr\SizesAttr\SizesTrait;
    use DOMAssembly\HTML\Attr\SrcAttr\SrcTrait;
    use DOMAssembly\HTML\Attr\SrcSetAttr\SrcSetTrait;
    use DOMAssembly\HTML\Attr\UseMapAttr\UseMapTrait;
    use DOMAssembly\HTML\Attr\WidthAttr\WidthTrait;

    class ImgTag
        extends VoidTag
    {
        use CrossOriginTrait;
        use DecodingTrait;
        use HeightTrait;
        use IsMapTrait;
        use ReferrerPolicyTrait;
        use SizesTrait;
        use SrcTrait;
        use SrcSetTrait;
        use WidthTrait;
        use UseMapTrait;

        const NAME = 'img';
    }
}
<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\MediaAttr\MediaTrait;
    use DOMAssembly\HTML\Attr\NonceAttr\NonceTrait;
    use DOMAssembly\HTML\Attr\TitleAttr\TitleTrait;
    use DOMAssembly\HTML\Attr\TypeAttr\TypeTrait;

    class StyleTag
        extends TextContainerTag
    {
        use MediaTrait;
        use NonceTrait;
        use TypeTrait;
        use TitleTrait;

        const NAME = 'style';
    }
}
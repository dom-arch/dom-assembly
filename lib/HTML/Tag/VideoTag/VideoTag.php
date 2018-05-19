<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\AutoPlayAttr\AutoPlayTrait;
    use DOMAssembly\HTML\Attr\BufferedAttr\BufferedTrait;
    use DOMAssembly\HTML\Attr\ControlsAttr\ControlsTrait;
    use DOMAssembly\HTML\Attr\CrossOriginAttr\CrossOriginTrait;
    use DOMAssembly\HTML\Attr\HeightAttr\HeightTrait;
    use DOMAssembly\HTML\Attr\LoopAttr\LoopTrait;
    use DOMAssembly\HTML\Attr\MutedAttr\MutedTrait;
    use DOMAssembly\HTML\Attr\PlayedAttr\PlayedTrait;
    use DOMAssembly\HTML\Attr\PlaysInlineAttr\PlaysInlineTrait;
    use DOMAssembly\HTML\Attr\PosterAttr\PosterTrait;
    use DOMAssembly\HTML\Attr\PreLoadAttr\PreLoadTrait;
    use DOMAssembly\HTML\Attr\SrcAttr\SrcTrait;
    use DOMAssembly\HTML\Attr\WidthAttr\WidthTrait;

    class VideoTag
        extends InlineContainerTag
    {
        use AutoPlayTrait;
        use BufferedTrait;
        use ControlsTrait;
        use CrossOriginTrait;
        use HeightTrait;
        use LoopTrait;
        use MutedTrait;
        use PlayedTrait;
        use PlaysInlineTrait;
        use PosterTrait;
        use PreLoadTrait;
        use SrcTrait;
        use WidthTrait;

        const NAME = 'video';
    }
}
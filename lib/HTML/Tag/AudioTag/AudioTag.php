<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\AutoPlayAttr\AutoPlayTrait;
    use DOMAssembly\HTML\Attr\BufferedAttr\BufferedTrait;
    use DOMAssembly\HTML\Attr\ControlsAttr\ControlsTrait;
    use DOMAssembly\HTML\Attr\MutedAttr\MutedTrait;
    use DOMAssembly\HTML\Attr\PlayedAttr\PlayedTrait;
    use DOMAssembly\HTML\Attr\PreloadAttr\PreLoadTrait;
    use DOMAssembly\HTML\Attr\SrcAttr\SrcTrait;
    use DOMAssembly\HTML\Attr\VolumeAttr\VolumeTrait;

    class AudioTag
        extends InlineContainerTag
    {
        use AutoPlayTrait;
        use BufferedTrait;
        use ControlsTrait;
        use MutedTrait;
        use PlayedTrait;
        use PreLoadTrait;
        use SrcTrait;
        use VolumeTrait;

        const NAME = 'audio';
    }
}
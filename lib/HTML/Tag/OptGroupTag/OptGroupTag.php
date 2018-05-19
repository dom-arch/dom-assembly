<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\DisabledAttr\DisabledTrait;
    use DOMAssembly\HTML\Attr\LabelAttr\LabelTrait;

    class OptGroupTag
        extends BlockContainerTag
    {
        use DisabledTrait;
        use LabelTrait;

        const NAME = 'optgroup';
    }
}
<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\DisabledAttr\DisabledTrait;
    use DOMAssembly\HTML\Attr\LabelAttr\LabelTrait;
    use DOMAssembly\HTML\Attr\SelectedAttr\SelectedTrait;
    use DOMAssembly\HTML\Attr\ValueAttr\ValueTrait;

    class OptionTag
        extends InlineContainerTag
    {
        use DisabledTrait;
        use LabelTrait;
        use SelectedTrait;
        use ValueTrait;

        const NAME = 'option';
    }
}
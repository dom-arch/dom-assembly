<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\AutoFocusAttr\AutoFocusTrait;
    use DOMAssembly\HTML\Attr\DisabledAttr\DisabledTrait;
    use DOMAssembly\HTML\Attr\FormAttr\FormTrait;
    use DOMAssembly\HTML\Attr\MultipleAttr\MultipleTrait;
    use DOMAssembly\HTML\Attr\NameAttr\NameTrait;
    use DOMAssembly\HTML\Attr\RequiredAttr\RequiredTrait;
    use DOMAssembly\HTML\Attr\SizeAttr\SizeTrait;

    class SelectTag
        extends InlineContainerTag
    {
        use AutoFocusTrait;
        use DisabledTrait;
        use FormTrait;
        use MultipleTrait;
        use NameTrait;
        use RequiredTrait;
        use SizeTrait;

        const NAME = 'select';
    }
}
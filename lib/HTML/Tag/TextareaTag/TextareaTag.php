<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\AutoCompleteAttr\AutoCompleteTrait;
    use DOMAssembly\HTML\Attr\AutoFocusAttr\AutoFocusTrait;
    use DOMAssembly\HTML\Attr\ColsAttr\ColsTrait;
    use DOMAssembly\HTML\Attr\DisabledAttr\DisabledTrait;
    use DOMAssembly\HTML\Attr\FormAttr\FormTrait;
    use DOMAssembly\HTML\Attr\MaxLengthAttr\MaxLengthTrait;
    use DOMAssembly\HTML\Attr\MinLengthAttr\MinLengthTrait;
    use DOMAssembly\HTML\Attr\NameAttr\NameTrait;
    use DOMAssembly\HTML\Attr\PlaceholderAttr\PlaceholderTrait;
    use DOMAssembly\HTML\Attr\ReadonlyAttr\ReadonlyTrait;
    use DOMAssembly\HTML\Attr\RequiredAttr\RequiredTrait;
    use DOMAssembly\HTML\Attr\RowsAttr\RowsTrait;
    use DOMAssembly\HTML\Attr\WrapAttr\WrapTrait;

    class TextareaTag
        extends InlineContainerTag
    {
        use AutoCompleteTrait;
        use AutoFocusTrait;
        use ColsTrait;
        use DisabledTrait;
        use FormTrait;
        use MaxLengthTrait;
        use MinLengthTrait;
        use NameTrait;
        use PlaceholderTrait;
        use ReadonlyTrait;
        use RequiredTrait;
        use RowsTrait;
        use WrapTrait;

        const NAME = 'textarea';
    }
}
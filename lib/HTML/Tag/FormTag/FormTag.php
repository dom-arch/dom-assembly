<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\AcceptCharsetAttr\AcceptCharsetTrait;
    use DOMAssembly\HTML\Attr\ActionAttr\ActionTrait;
    use DOMAssembly\HTML\Attr\AutoCompleteAttr\AutoCompleteTrait;
    use DOMAssembly\HTML\Attr\EncTypeAttr\EncTypeTrait;
    use DOMAssembly\HTML\Attr\MethodAttr\MethodTrait;
    use DOMAssembly\HTML\Attr\NameAttr\NameTrait;
    use DOMAssembly\HTML\Attr\NoValidateAttr\NoValidateTrait;
    use DOMAssembly\HTML\Attr\TargetAttr\TargetTrait;

    class FormTag
        extends BlockContainerTag
    {
        use AcceptCharsetTrait;
        use ActionTrait;
        use AutoCompleteTrait;
        use EncTypeTrait;
        use MethodTrait;
        use NameTrait;
        use NoValidateTrait;
        use TargetTrait;

        const NAME = 'form';
    }
}
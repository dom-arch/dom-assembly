<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\FormAttr\FormTrait;
    use DOMAssembly\HTML\Attr\HighAttr\HighTrait;
    use DOMAssembly\HTML\Attr\LowAttr\LowTrait;
    use DOMAssembly\HTML\Attr\MaxAttr\MaxTrait;
    use DOMAssembly\HTML\Attr\MinAttr\MinTrait;
    use DOMAssembly\HTML\Attr\OptimumAttr\OptimumTrait;
    use DOMAssembly\HTML\Attr\ValueAttr\ValueTrait;

    class MeterTag
        extends InlineContainerTag
    {
        use FormTrait;
        use HighTrait;
        use LowTrait;
        use MinTrait;
        use MaxTrait;
        use OptimumTrait;
        use ValueTrait;

        const NAME = 'meter';
    }
}
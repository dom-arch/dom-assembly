<?php

namespace DOMAssembly\HTML\Tag {

    use DOMAssembly\HTML\Attr\AllowFullscreenAttr\AllowFullScreenTrait;
    use DOMAssembly\HTML\Attr\AllowPaymentRequestAttr\AllowPaymentRequestTrait;
    use DOMAssembly\HTML\Attr\HeightAttr\HeightTrait;
    use DOMAssembly\HTML\Attr\NameAttr\NameTrait;
    use DOMAssembly\HTML\Attr\ReferrerPolicyAttr\ReferrerPolicyTrait;
    use DOMAssembly\HTML\Attr\SandboxAttr\SandboxTrait;
    use DOMAssembly\HTML\Attr\SrcAttr\SrcTrait;
    use DOMAssembly\HTML\Attr\SrcDocAttr\SrcDocTrait;
    use DOMAssembly\HTML\Attr\WidthAttr\WidthTrait;

    class IframeTag
        extends BlockContainerTag
    {
        use AllowFullScreenTrait;
        use AllowPaymentRequestTrait;
        use HeightTrait;
        use NameTrait;
        use ReferrerPolicyTrait;
        use SandboxTrait;
        use SrcTrait;
        use SrcDocTrait;
        use WidthTrait;

        const NAME = 'iframe';
    }
}
<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    trait RelClickableTrait
    {
        use RelCommonTrait;
        use RelBookmarkTrait;
        use RelExternalTrait;
        use RelNoFollowTrait;
        use RelNoOpenerTrait;
        use RelNoReferrerTrait;
        use RelTagTrait;
    }
}
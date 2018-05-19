<?php

namespace DOMAssembly\HTML\Attr {

    use DOMAssembly\HTML\Document;
    use DOMAssembly\HTML\Attr;
    use DOMAssembly\HTML\TranslatableNodeTrait;

    class DownloadAttr
        extends Attr
    {
        use TranslatableNodeTrait;

        const
            NAME = 'download';
    }
}
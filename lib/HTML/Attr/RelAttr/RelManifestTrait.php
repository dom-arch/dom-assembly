<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelManifestTrait
    {
        /**
         * @return $this
         */
        public function setRelManifest()
        {
            return $this->setRel(RelAttr::VALUE_MANIFEST);
        }
    }
}
<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelLicenseTrait
    {
        /**
         * @return $this
         */
        public function setRelLicense()
        {
            return $this->setRel(RelAttr::VALUE_LICENSE);
        }
    }
}
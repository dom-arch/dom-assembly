<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelImportTrait
    {
        /**
         * @return $this
         */
        public function setRelImport()
        {
            return $this->setRel(RelAttr::VALUE_IMPORT);
        }
    }
}
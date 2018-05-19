<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelStyleSheetTrait
    {
        /**
         * @return $this
         */
        public function setRelStyleSheet()
        {
            return $this->setRel(RelAttr::VALUE_STYLE_SHEET);
        }
    }
}
<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelHelpTrait
    {
        /**
         * @return $this
         */
        public function setRelHelp()
        {
            return $this->setRel(RelAttr::VALUE_HELP);
        }
    }
}
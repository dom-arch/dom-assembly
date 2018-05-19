<?php

namespace DOMAssembly\HTML\Attr\RelAttr {

    use DOMAssembly\HTML\Attr\RelAttr;

    trait RelPreRenderTrait
    {
        /**
         * @return $this
         */
        public function setRelPreRender()
        {
            return $this->setRel(RelAttr::VALUE_PRE_RENDER);
        }
    }
}
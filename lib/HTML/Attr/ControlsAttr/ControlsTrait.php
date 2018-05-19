<?php

namespace DOMAssembly\HTML\Attr\ControlsAttr {

    use DOMAssembly\HTML\Attr\ControlsAttr;

    trait ControlsTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setControls(
            bool $value = true
        )
        {
            if ($value) {
                $document = $this->getDocument();
                $attr = ControlsAttr::of($document, ControlsAttr::VALUE_DEFAULT);

                return $this->set($attr);
            }

            return $this->del(ControlsAttr::NAME);
        }
    }
}
<?php

namespace DOMAssembly\HTML\Attr\LowAttr {

    use DOMAssembly\HTML\Attr\LowAttr;

    trait LowTrait
    {
        /**
         * @param float $value
         * @return $this
         */
        public function setLow(
            float $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = LowAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}
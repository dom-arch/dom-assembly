<?php

namespace DOMAssembly\HTML\Attr\OptimumAttr {

    use DOMAssembly\HTML\Attr\OptimumAttr;

    trait OptimumTrait
    {
        /**
         * @param float $value
         * @return $this
         */
        public function setOptimum(
            float $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = OptimumAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}
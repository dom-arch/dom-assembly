<?php

namespace DOMAssembly\HTML\Attr\StepAttr {

    use DOMAssembly\HTML\Attr\StepAttr;

    trait StepTrait
    {
        /**
         * @param float $value
         * @return $this
         */
        public function setStep(
            float $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = StepAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}
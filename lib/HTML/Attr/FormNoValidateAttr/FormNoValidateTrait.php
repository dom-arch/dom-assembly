<?php

namespace DOMAssembly\HTML\Attr\FormNoValidateAttr {

    use DOMAssembly\HTML\Attr\FormNoValidateAttr;

    trait FormNoValidateTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setFormNoValidate(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = FormNoValidateAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}
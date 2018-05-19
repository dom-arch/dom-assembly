<?php

namespace DOMAssembly\HTML\Attr\NoValidateAttr {

    use DOMAssembly\HTML\Attr\NoValidateAttr;

    trait NoValidateTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setNoValidate(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = NoValidateAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}
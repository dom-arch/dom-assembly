<?php

namespace DOMAssembly\HTML\Attr\TypeMustMatchAttr {

    use DOMAssembly\HTML\Attr\TypeMustMatchAttr;

    trait TypeMustMatchTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setTypeMustMatch(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = TypeMustMatchAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}
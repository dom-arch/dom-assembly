<?php

namespace DOMAssembly\HTML\Attr\MinLengthAttr {

    use DOMAssembly\HTML\Attr\MinLengthAttr;

    trait MinLengthTrait
    {
        /**
         * @param int $value
         * @return $this
         */
        public function setMinLength(
            int $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = MinLengthAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}
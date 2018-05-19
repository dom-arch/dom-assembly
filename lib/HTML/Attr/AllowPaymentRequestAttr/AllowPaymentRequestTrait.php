<?php

namespace DOMAssembly\HTML\Attr\AllowPaymentRequestAttr {

    use DOMAssembly\HTML\Attr\AllowPaymentRequestAttr;

    trait AllowPaymentRequestTrait
    {
        /**
         * @param bool $value
         * @return $this
         */
        public function setAllowPaymentRequest(
            bool $value = true
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = AllowPaymentRequestAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}
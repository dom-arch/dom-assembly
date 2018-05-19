<?php

namespace DOMAssembly\HTML\Attr\MaxAttr {

    use DOMAssembly\HTML\Attr\MaxAttr;

    trait MaxTrait
    {
        /**
         * @param $value
         * @return $this
         */
        public function setMax(
            $value
        )
        {
            if (!is_string($value)) {
                $value = var_export($value, true);
            }

            $document = $this->getDocument();
            $attr = MaxAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}
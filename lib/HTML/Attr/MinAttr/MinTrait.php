<?php

namespace DOMAssembly\HTML\Attr\MinAttr {

    use DOMAssembly\HTML\Attr\MinAttr;

    trait MinTrait
    {
        /**
         * @param $value
         * @return $this
         */
        public function setMin(
            $value
        )
        {
            if (!is_string($value)) {
                $value = var_export($value, true);
            }

            $document = $this->getDocument();
            $attr = MinAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}
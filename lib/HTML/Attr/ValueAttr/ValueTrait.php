<?php

namespace DOMAssembly\HTML\Attr\ValueAttr {

    use DOMAssembly\HTML\Attr\ValueAttr;

    trait ValueTrait
    {
        /**
         * @param $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function setValue(
            $value,
            array $sprintf_params = null
        )
        {
            if (!is_string($value)) {
                $value = var_export($value, true);
            }

            $document = $this->getDocument();
            $attr = ValueAttr::of($document, $value, $sprintf_params);

            return $this->set($attr);
        }
    }
}
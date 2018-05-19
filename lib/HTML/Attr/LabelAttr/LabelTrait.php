<?php

namespace DOMAssembly\HTML\Attr\LabelAttr {

    use DOMAssembly\HTML\Attr\LabelAttr;

    trait LabelTrait
    {
        /**
         * @param string $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function setLabel(
            string $value,
            array $sprintf_params = null
        )
        {
            if (!is_string($value)) {
                $value = var_export($value);
            }

            $document = $this->getDocument();
            $attr = LabelAttr::of($document, $value, $sprintf_params);

            return $this->set($attr);
        }
    }
}
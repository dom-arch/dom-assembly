<?php

namespace DOMAssembly\HTML\Attr\PlaceholderAttr {

    use DOMAssembly\HTML\Attr\PlaceholderAttr;

    trait PlaceholderTrait
    {
        /**
         * @param $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function setPlaceholder(
            $value,
            array $sprintf_params = null
        )
        {
            if (!is_string($value)) {
                $value = var_export($value, true);
            }

            $document = $this->getDocument();
            $attr = PlaceholderAttr::of($document, $value, $sprintf_params);

            return $this->set($attr);
        }
    }
}
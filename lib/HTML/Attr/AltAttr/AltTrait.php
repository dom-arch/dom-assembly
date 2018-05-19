<?php

namespace DOMAssembly\HTML\Attr\AltAttr {

    use DOMAssembly\HTML\Attr\AltAttr;

    trait AltTrait
    {
        /**
         * @param string $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function setAlt(
            string $value,
            array $sprintf_params = null
        )
        {
            $document = $this->getDocument();
            $attr = AltAttr::of($document, $value, $sprintf_params);

            return $this->set($attr);
        }
    }
}
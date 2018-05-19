<?php

namespace DOMAssembly\HTML\Attr\AbbrAttr {

    use DOMAssembly\HTML\Attr\AbbrAttr;

    trait AbbrTrait
    {
        /**
         * @param string $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function setAbbr(
            string $value,
            array $sprintf_params = null
        )
        {
            $document = $this->getDocument();
            $attr = AbbrAttr::of($document, $value, $sprintf_params);

            return $this->set($attr);
        }
    }
}
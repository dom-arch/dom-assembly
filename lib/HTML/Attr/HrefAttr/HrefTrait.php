<?php

namespace DOMAssembly\HTML\Attr\HrefAttr {

    use DOMAssembly\HTML\Attr\HrefAttr;

    trait HrefTrait
    {
        /**
         * @param string $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function setHref(
            string $value,
            array $sprintf_params = null
        )
        {
            $document = $this->getDocument();
            $attr = HrefAttr::of($document, $value, $sprintf_params);

            return $this->set($attr);
        }
    }
}
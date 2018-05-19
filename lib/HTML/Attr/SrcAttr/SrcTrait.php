<?php

namespace DOMAssembly\HTML\Attr\SrcAttr {

    use DOMAssembly\HTML\Attr\SrcAttr;

    trait SrcTrait
    {
        /**
         * @param string $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function setSrc(
            string $value,
            array $sprintf_params = null
        )
        {
            $document = $this->getDocument();
            $attr = SrcAttr::of($document, $value, $sprintf_params);

            return $this->set($attr);
        }
    }
}
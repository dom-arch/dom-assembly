<?php

namespace DOMAssembly\HTML\Attr\SrcDocAttr {

    use DOMAssembly\HTML\Attr\SrcDocAttr;

    trait SrcDocTrait
    {
        /**
         * @param string $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function setSrcDoc(
            string $value,
            array $sprintf_params = null
        )
        {
            $document = $this->getDocument();
            $attr = SrcDocAttr::of($document, $value, $sprintf_params);

            return $this->set($attr);
        }
    }
}
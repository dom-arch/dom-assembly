<?php

namespace DOMAssembly\HTML\Attr\DataAttr {

    use DOMAssembly\HTML\Attr\DataAttr;

    trait DataTrait
    {
        /**
         * @param string $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function setData(
            string $value,
            array $sprintf_params = null
        )
        {
            $document = $this->getDocument();
            $attr = DataAttr::of($document, $value, $sprintf_params);

            return $this->set($attr);
        }
    }
}
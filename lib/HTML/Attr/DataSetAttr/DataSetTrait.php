<?php

namespace DOMAssembly\HTML\Attr\DataSetAttr {

    use DOMAssembly\HTML\Attr\DataSetAttr;

    trait DataSetTrait
    {
        /**
         * @param array $names
         * @param string $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function setDataSet(
            array $names,
            string $value,
            array $sprintf_params = null
        )
        {
            $name = implode('-', $names);
            $document = $this->getDocument();
            $attr = DataSetAttr::of($document, $name, $value, $sprintf_params);

            return $this->set($attr);
        }
    }
}
<?php

namespace DOMAssembly\HTML\Attr\CiteAttr {

    use DOMAssembly\HTML\Attr\CiteAttr;

    trait CiteTrait
    {
        /**
         * @param $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function setCite(
            $value,
            array $sprintf_params = null
        )
        {
            if (!is_string($value)) {
                $value = var_export($value, true);
            }

            $document = $this->getDocument();
            $attr = CiteAttr::of($document, $value, $sprintf_params);

            return $this->set($attr);
        }
    }
}
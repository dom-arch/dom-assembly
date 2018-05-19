<?php

namespace DOMAssembly\HTML\Attr\TitleAttr {

    use DOMAssembly\HTML\Attr\TitleAttr;

    trait TitleTrait
    {
        /**
         * @param string $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function setTitle(
            string $value,
            array $sprintf_params = null
        )
        {
            $document = $this->getDocument();
            $attr = TitleAttr::of($document, $value, $sprintf_params);

            return $this->set($attr);
        }
    }
}
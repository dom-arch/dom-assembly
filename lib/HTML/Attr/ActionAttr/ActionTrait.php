<?php

namespace DOMAssembly\HTML\Attr\ActionAttr {

    use DOMAssembly\HTML\Attr\ActionAttr;

    trait ActionTrait
    {
        /**
         * @param string $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function setAction(
            string $value,
            array $sprintf_params = null
        )
        {
            $document = $this->getDocument();
            $attr = ActionAttr::of($document, $value, $sprintf_params);

            return $this->set($attr);
        }
    }
}
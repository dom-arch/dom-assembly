<?php

namespace DOMAssembly\HTML\Attr\AccessKeyAttr {

    use DOMAssembly\HTML\Attr\AccessKeyAttr;

    trait AccessKeyTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setAccessKey(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = AccessKeyAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}
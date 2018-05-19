<?php

namespace DOMAssembly\HTML\Attr\WrapAttr {

    use DOMAssembly\HTML\Attr\WrapAttr;

    trait WrapTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setWrap(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = WrapAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setWrapDefault()
        {
            return $this->setWrap(WrapAttr::VALUE_DEFAULT);
        }

        /**
         * @return $this
         */
        public function setWrapSoft()
        {
            return $this->setWrap(WrapAttr::VALUE_SOFT);
        }

        /**
         * @return $this
         */
        public function setWrapHard()
        {
            return $this->setWrap(WrapAttr::VALUE_HARD);
        }
    }
}
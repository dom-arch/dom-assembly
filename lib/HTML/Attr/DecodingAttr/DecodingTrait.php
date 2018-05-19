<?php

namespace DOMAssembly\HTML\Attr\DecodingAttr {

    use DOMAssembly\HTML\Attr\DecodingAttr;

    trait DecodingTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setDecoding(
            string $value
        )
        {
            $document = $this->getDocument();
            $attr = DecodingAttr::of($document, $value);

            return $this->set($attr);
        }

        /**
         * @return $this
         */
        public function setDecodingAsync()
        {
            return $this->setDecoding(DecodingAttr::VALUE_ASYNC);
        }

        /**
         * @return $this
         */
        public function setDecodingAuto()
        {
            return $this->setDecoding(DecodingAttr::VALUE_AUTO);
        }

        /**
         * @return $this
         */
        public function setDecodingSync()
        {
            return $this->setDecoding(DecodingAttr::VALUE_SYNC);
        }
    }
}
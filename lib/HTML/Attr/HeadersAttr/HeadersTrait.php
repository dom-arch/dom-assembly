<?php

namespace DOMAssembly\HTML\Attr\HeadersAttr {

    use DOMAssembly\HTML\Attr\HeadersAttr;
    use DOMAssembly\HTML\Tag\ThContainerTag;

    trait HeadersTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function addHeader(
            string $value
        )
        {
            $header = $this->get(HeadersAttr::NAME);
            $values = explode(' ', $header);

            if (!in_array($value, $values)) {
                $values[] = $value;
                $header = implode(' ', $values);
            }

            $document = $this->getDocument();
            $attr = HeadersAttr::of($document, $header);

            return $this->set($attr);
        }

        /**
         * @param ThContainerTag $th
         * @return $this
         */
        public function addHeaderFromTh(
            ThContainerTag $th
        )
        {
            return $this->addHeader($th->getId());
        }

        /**
         * @param ThContainerTag[] $ths
         * @return $this
         */
        public function addHeaderFromThs(
            array $ths
        )
        {
            foreach ($ths as $th) {
                $this->addHeader($th->getId());
            }

            return $this;
        }
    }
}
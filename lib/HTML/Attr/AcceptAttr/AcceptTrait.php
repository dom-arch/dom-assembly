<?php

namespace DOMAssembly\HTML\Attr\AcceptAttr {

    use DOMAssembly\HTML\Attr\AcceptAttr;

    trait AcceptTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function addAccept(
            string $value
        )
        {
            $accept = $this->get(AcceptAttr::NAME) ?? '';
            $values = explode(',', $accept);

            if (!in_array($value, $values)) {
                $values[] = $value;
                $accept = implode(',', $values);
            }

            $document = $this->getDocument();
            $attr = AcceptAttr::of($document, $accept);

            return $this->set($attr);
        }

        /**
         * @param string[] $values
         * @return $this
         */
        public function addAccepts(
            array $values
        )
        {
            foreach ($values as $value) {
                $this->addAccept($value);
            }

            return $this;
        }
    }
}
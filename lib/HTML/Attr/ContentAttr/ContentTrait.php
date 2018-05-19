<?php

namespace DOMAssembly\HTML\Attr\ContentAttr {

    use DOMAssembly\HTML\Attr\ContentAttr;

    trait ContentTrait
    {
        /**
         * @param string $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function addContent(
            string $value,
            array $sprintf_params = null
        )
        {
            $content = $this->get(ContentAttr::NAME) ?? '';
            $values = explode(';', $content);

            if (!in_array($value, $values)) {
                $values[] = $value;
                $content = implode(';', $values);
            }

            $document = $this->getDocument();
            $attr = ContentAttr::of($document, $content, $sprintf_params);

            return $this->set($attr);
        }
    }
}
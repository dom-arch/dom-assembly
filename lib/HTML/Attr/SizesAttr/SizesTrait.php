<?php

namespace DOMAssembly\HTML\Attr\SizesAttr {

    use DOMAssembly\HTML\Attr\SizesAttr;

    trait SizesTrait
    {
        /**
         * @param int $width
         * @param string $condition
         * @return $this
         */
        public function addSize(
            int $width,
            string $condition = null
        )
        {
            $sizes = $this->get(SizesAttr::NAME) ?? '';
            $expressions = explode(',', $sizes);

            $value = is_string($condition)
                ? ($condition . ' ')
                : '';

            $value .= var_export($width, true) . 'w';

            if (!in_array($value, $expressions)) {
                $expressions[] = $value;
                $sizes = implode(',', $expressions);
            }

            $document = $this->getDocument();
            $attr = SizesAttr::of($document, $sizes);

            return $this->set($attr);
        }

        /**
         * @param string[] $values
         * @return $this
         */
        public function addSizes(
            array $values
        )
        {
            foreach ($values as $value) {
                $this->addSize(...$value);
            }

            return $this;
        }
    }
}
<?php

namespace DOMAssembly\HTML\Attr\SrcSetAttr {

    use DOMAssembly\HTML\Attr\SrcSetAttr;

    trait SrcSetTrait
    {
        /**
         * @param string $src
         * @param float $size
         * @param string $type
         * @return $this
         */
        public function addSrcSet(
            string $src,
            float $size,
            string $type
        )
        {
            $set = $this->get(SrcSetAttr::NAME) ?? '';
            $expressions = explode(',', $set);

            $value = $src . ' ' . var_export($size, true) . $type;

            if (!in_array($value, $expressions)) {
                $expressions[] = $value;
                $set = implode(',', $expressions);
            }

            $document = $this->getDocument();
            $attr = SrcSetAttr::of($document, $set);

            return $this->set($attr);
        }

        /**
         * @param string $src
         * @param float $size
         * @return $this
         */
        public function addSrcSetPixelDensity(
            string $src,
            float $size
        )
        {
            return $this->addSrcSet($src, $size, SrcSetAttr::TYPE_PIXEL_DENSITY);
        }

        /**
         * @param string $src
         * @param int $size
         * @return $this
         */
        public function addSrcSetWidth(
            string $src,
            int $size
        )
        {
            return $this->addSrcSet($src, $size, SrcSetAttr::TYPE_WIDTH);
        }
    }
}
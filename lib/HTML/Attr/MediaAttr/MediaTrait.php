<?php

namespace DOMAssembly\HTML\Attr\MediaAttr {

    use DOMAssembly\HTML\Attr\MediaAttr;

    trait MediaTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function addMedia(
            string $value
        )
        {
            $media = $this->get(MediaAttr::NAME) ?? '';
            $medias = explode(' and ', $media);

            if (!in_array($value, $medias)) {
                $medias[] = $value;
                $media = implode(' and ', $medias);
            }

            $document = $this->getDocument();
            $attr = MediaAttr::of($document, $media);

            return $this->set($attr);
        }

        /**
         * @param string[] $values
         * @return $this
         */
        public function addMedias(
            array $values
        )
        {
            foreach ($values as $value) {
                $this->addMedia($value);
            }

            return $this;
        }
    }
}
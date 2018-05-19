<?php

namespace DOMAssembly\HTML\Attr\VolumeAttr {

    use DOMAssembly\HTML\Attr\VolumeAttr;

    trait VolumeTrait
    {
        /**
         * @param float $value
         * @return $this
         */
        public function setVolume(
            float $value
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = VolumeAttr::of($document, $value);

            return $this->set($attr);
        }
    }
}
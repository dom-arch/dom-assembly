<?php

namespace DOMAssembly\HTML\Attr\DownloadAttr {

    use DOMAssembly\HTML\Attr\DownloadAttr;

    trait DownloadTrait
    {
        /**
         * @param string $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function setDownload(
            string $value,
            array $sprintf_params = null
        )
        {
            $value = var_export($value, true);
            $document = $this->getDocument();
            $attr = DownloadAttr::of($document, $value, $sprintf_params);

            return $this->set($attr);
        }
    }
}
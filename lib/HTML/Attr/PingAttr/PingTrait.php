<?php

namespace DOMAssembly\HTML\Attr\PingAttr {

    use DOMAssembly\HTML\Attr\PingAttr;

    trait PingTrait
    {
        /**
         * @param string $value
         * @param array|null $sprintf_params
         * @return $this
         */
        public function addPing(
            string $value,
            array $sprintf_params = null
        )
        {
            $ping = $this->get(PingAttr::NAME) ?? '';
            $pings = explode(' ', $ping);

            if (!in_array($value, $pings)) {
                $pings[] = $value;
                $ping = implode(' ', $pings);
            }

            $document = $this->getDocument();
            $attr = PingAttr::of($document, $ping);

            return $this->set($attr);
        }
    }
}
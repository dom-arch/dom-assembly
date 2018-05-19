<?php

namespace DOMAssembly\HTML\Attr\ReferrerPolicyAttr {

    use DOMAssembly\HTML\Attr\ReferrerPolicyAttr;

    trait ReferrerPolicyTrait
    {
        /**
         * @param string $value
         * @return $this
         */
        public function setReferrerPolicy(
            string $value = null
        )
        {
            if ($value) {
                $document = $this->getDocument();
                $attr = ReferrerPolicyAttr::of($document, $value);

                return $this->set($attr);
            }

            return $this->del(ReferrerPolicyAttr::NAME);
        }

        /**
         * @return $this
         */
        public function setReferrerPolicyDefault()
        {
            return $this->setReferrerPolicy(ReferrerPolicyAttr::VALUE_DEFAULT);
        }

        /**
         * @return $this
         */
        public function setReferrerPolicyNoReferer()
        {
            return $this->setReferrerPolicy(ReferrerPolicyAttr::VALUE_NO_REFERRER);
        }

        /**
         * @return $this
         */
        public function setReferrerPolicyNoRefererWhenDowngrade()
        {
            return $this->setReferrerPolicy(ReferrerPolicyAttr::VALUE_NO_REFERRER_WHEN_DOWNGRADE);
        }

        /**
         * @return $this
         */
        public function setReferrerPolicyOrigin()
        {
            return $this->setReferrerPolicy(ReferrerPolicyAttr::VALUE_ORIGIN);
        }

        /**
         * @return $this
         */
        public function setReferrerPolicyOriginWhenCrossOrigin()
        {
            return $this->setReferrerPolicy(ReferrerPolicyAttr::VALUE_ORIGIN_WHEN_CROSS_ORIGIN);
        }

        /**
         * @return $this
         */
        public function setReferrerPolicyUnsafeUrl()
        {
            return $this->setReferrerPolicy(ReferrerPolicyAttr::VALUE_UNSAFE_URL);
        }
    }
}
<?php
    class Task {
        private $name;
        private $createdDate;

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name): void
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getCreatedDate()
        {
            return $this->createdDate;
        }

        /**
         * @param mixed $createdDate
         */
        public function setCreatedDate($createdDate): void
        {
            $this->createdDate = $createdDate;
        }
    }
?>
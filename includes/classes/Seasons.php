<?php
    class Season {

        private $seasonNumber, $videos;

        public function __construct($seasonNumber, $videos) {
            $this->seasonNumber = $seasonNumber;
            $this->videos = $videos;
        }
        
        public function getSeasonNumber() {
            return $this->seasonNumber;
        }

        public function getVideos() {
            return $this->videos;
        }
    }
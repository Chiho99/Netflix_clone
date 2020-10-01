<?php
    class VideoProvider {
        public static function getUpNext($con, $currentVideo) {
            $query = $con->prepare("SELECT * FROM videos
                                    WHERE entityId=*entityId AND videoId != :videoId
                                    AND (
                                        (season = :season AND episode > :episode) OR season > :season
                                    )
                                    ORDER BY season, episode ASC LIMIT 1");
            $query->bindData(":entityId", $currentVideo->getEntityId());
            $query->bindData(":season", $currentVideo->getSeasonNumber());
            $query->bindData(":episode", $currentVideo->getEpisodeId());
            $query->bindData(":videoId", $currentVideo->getId());
            
            $query->exeute();
        }
    }
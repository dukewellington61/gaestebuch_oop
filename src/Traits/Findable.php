<?php

require_once 'inc/configuration.inc.php';

trait Findable
{
    static function getEntries() {

        if (file_exists(PATH_ENTRIES))
        {
            $eintraege = unserialize(file_get_contents(PATH_ENTRIES));

            $eintraege = array_reverse($eintraege);
        } else {
            $eintraege = [];
        }

        return $eintraege;
    }
}

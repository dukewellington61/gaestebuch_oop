<?php

require_once 'inc/funktionen.inc.php';

trait Persistable
{
    public function speichere()
    {
        $eintrag = $this;

        $eintraege = $this->toObjectArray();

        $eintraege[] = $eintrag;

        file_put_contents('daten/eintraege.txt', serialize($eintraege));
    }

    public function toObjectArray()
    {
        $entryArray = $this->getEntries();

        if (!empty($entryArray))
        {
            $objectArray = array_map(function($element) {
                return (object) $element;
            }, $entryArray);

            return array_reverse($objectArray);
        } else {
            return $objectArray = [];
        }
    }
}
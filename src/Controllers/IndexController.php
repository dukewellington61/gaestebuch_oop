<?php

require_once 'inc/funktionen.inc.php';

class IndexController extends AbstractBase
{
    protected function indexAction()
    {
        $this->addContext('eintraege', Eintrag::getEntries());
    }

    protected function neuAction()
    {
        $eintrag = new Eintrag();

        if ($_POST) {
            $eintrag->setDaten($_POST);
            $eintrag->speichere();
            redirect('index.php?action=danke');
        }

        $this->addContext('eintraege', $eintrag);
    }

    protected function dankeAction()
    {}
}

<?php

class Eintrag
{
    protected $titel = '';
    protected $inhalt = '';
    protected $name = '';
    protected $email = '';
    protected $homepage = '';
    protected $erstellungszeitpunkt = null;

    use Persistable, Findable;

    public function __construct(array $daten = [])
    {
        $this->setDaten($daten);
    }

    public function setDaten(array $daten)
    {
        if ($daten) {
            foreach ($daten as $k => $v) {
                $setterName = 'set' . ucfirst($k);

                if (method_exists($this, $setterName)) {
                    $this->$setterName($v);
                }
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitel()
    {
        return $this->titel;
    }

    public function setTitel($titel)
    {
        $this->titel = $titel;
    }

    public function getInhalt()
    {
        return $this->inhalt;
    }

    public function setInhalt($inhalt)
    {
        $this->inhalt = $inhalt;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getHomepage()
    {
        return $this->homepage;
    }

    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;
    }

    public function getErstellungszeitpunkt()
    {
        return $this->erstellungszeitpunkt;
    }

    public function setErstellungszeitpunkt()
    {
        $this->erstellungszeitpunkt = time();
    }

    public function makeLink($e)
{
    if ($e->getHomepage()) {
        return '<a href=' . $e->getHomepage() . '> ' . $e->getName() . ' </a>';
    } else {
        return $e->getName();
    }

}
}

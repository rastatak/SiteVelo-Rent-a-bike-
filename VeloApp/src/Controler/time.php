<?php 
class time {
    private $idtime;

    private $HJSM;

    private $timecol;

    private function __construct(int $idtime, string $HJSM, int $timecol)
    {
        $this->idtime = $idtime;
        $this->HJSM = $HJSM;
        $this->timecol = $timecol;
    }



    /**
     * Get the value of idtime
     */ 
    public function getIdtime()
    {
        return $this->idtime;
    }

    /**
     * Set the value of idtime
     *
     * @return  self
     */ 
    public function setIdtime($idtime)
    {
        $this->idtime = $idtime;

        return $this;
    }

    /**
     * Get the value of HJSM
     */ 
    public function getHJSM()
    {
        return $this->HJSM;
    }

    /**
     * Set the value of HJSM
     *
     * @return  self
     */ 
    public function setHJSM($HJSM)
    {
        $this->HJSM = $HJSM;

        return $this;
    }

    /**
     * Get the value of timecol
     */ 
    public function getTimecol()
    {
        return $this->timecol;
    }

    /**
     * Set the value of timecol
     *
     * @return  self
     */ 
    public function setTimecol($timecol)
    {
        $this->timecol = $timecol;

        return $this;
    }
}
?>
<?php

namespace kisspmmp;

use pocketmine\plugin\PluginBase;

class main extends PluginBase{

  public function onEnable(): void{
    //this version is coded on Github Web Editor, so untested
    $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
  }

  public function kissAction($player, $ps, $world){} //todo
}

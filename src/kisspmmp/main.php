<?php

namespace kisspmmp;

use pocketmine\plugin\PluginBase;
use pocketmine\world\particle\HeartParticle;

class main extends PluginBase{

  public function onEnable(): void{
    //this version is coded on Github Web Editor, so untested
    $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
  }

  public function kissAction($player, $ps, $world){
    $particle = new HeartParticle();
    $pos = $player->getPosition()->asVector3(); //make later custom by config
    $world->addParticle($pos, $particle);
  } //todo
}

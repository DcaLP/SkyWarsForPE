<?php

namespace larryTheCoder\Events;

use pocketmine\event\plugin\PluginEvent;
use pocketmine\Player;
use larryTheCoder\SkyWarsAPI;
use larryTheCoder\Arena\Arena;

/**
 * PlayerLoseArenaEvent : Player lose game Event
 * 
 * @copyright (c) 2016, larryTheHarry
 * CurrentVersion: < BETA | Testing >
 * 
 */
class PlayerLoseArenaEvent extends PluginEvent {

    protected $player;
    protected $arena;
    public static $handlerList = null;

    public function __construct(SkyWarsAPI $plugin, Player $player, Arena $arena) {
        parent::__construct($plugin);
        $this->player = $player;
        $this->arena = $arena;
    }

    public function getPlayer() {
        return $this->player;
    }

    public function getArena() {
        return $this->arena;
    }

    public function getArenaName() {
        return $this->arena->id;
    }

}

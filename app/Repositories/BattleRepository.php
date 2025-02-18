<?php

namespace App\Repositories;

use App\Interfaces\BattleRepositoryInterface;
use App\Models\Battle;
use Illuminate\Support\Collection;

class BattleRepository implements BattleRepositoryInterface
{
    public function getAllBattles(): Collection
    {
        return Battle::with('winner')->with('monsterA')->with('monsterB')->get();
    }
}

<?php

namespace App\Services;

use App\Models\Monster;
use App\Repositories\BattleRepository;
use App\Models\Battle;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

class BattleService
{
    /**
     * @var $battleRepository
     */
    protected $battleRepository;

    /**
     * BattleService constructor.
     *
     * @param BattleRepository $battleRepository
     *
     */
    public function __construct(BattleRepository $battleRepository)
    {
        $this->battleRepository = $battleRepository;
    }

    /**
     * Get all battles.
     *
     * @return Collection
     *
     */
    public function getAll(): Collection
    {
        return $this->battleRepository->getAllBattles();
    }

}

<?php

namespace App\Http\Controllers;

use App\Services\BattleService;
use App\Services\MonsterService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class BattleController extends Controller
{

    /**
     *
     * @var $battleService
     */
    protected $battleService;

    /**
     *
     * @var $monsterService
     */
    protected $monsterService;

    /**
     * BattleService constructor.
     *
     * @param BattleService $battleService
     * @param MonsterService $monsterService
     *
     */
    public function __construct(BattleService $battleService, MonsterService $monsterService)
    {
        $this->battleService = $battleService;
        $this->monsterService = $monsterService;
    }

    /**
     * Get all battles.
     *
     * @return JsonResponse
     *
     */
    public function index(): JsonResponse
    {
        return response()->json(
            [
                'data' => $this->battleService->getAll()
            ],
            Response::HTTP_OK
        );
    }

}

<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TeamRepository;
use App\Repositories\PlayerRepository;
use Illuminate\Support\Facades\Validator;

class PlayerController extends BaseController
{
    /**
     * Repository instance
    */
    public $teamRepository;
    public $playerRepository;

    public function __construct(TeamRepository $teamRepository, PlayerRepository $playerRepository)
    {
        $this->teamRepository = $teamRepository;
        $this->playerRepository = $playerRepository;
    }

    /**
     * PURPOSE : Get All players
     * METHOD: GET
     * REQ PARAMS: None
     * URL : /api/players
    */
    public function players()
    {
        $players = $this->playerRepository->getAll(null, 'team_id')->toArray();
        
        return  $this->sendResponse(
                    $players, 
                    'Players List Found', 
                    201
                );
    }
}

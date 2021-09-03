<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TeamRepository;
use App\Repositories\PlayerRepository;
use Illuminate\Support\Facades\Validator;

class TeamController extends BaseController
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
     * PURPOSE : Get All teams
     * METHOD: GET
     * REQ PARAMS: None
     * URL : /api/teams
    */
    public function teams()
    {
        $teams = $this->teamRepository->getAll()->toArray();
        
        return  $this->sendResponse(
                    $teams, 
                    'Teams List Found', 
                    201
                );
    }

    /**
     * PURPOSE: Get All player by team_id
     * METHOD: GET
     * REQ PARAMS: team_id 
     * URL: /api/team/{id}
    */
    public function getPlayers($team_id)
    {
        if (empty($this->teamRepository->findById($team_id))){
            return $this->sendError('No Team Found', 404);
        }

        $data = [];
        $data['teamDetails'] = $this->teamRepository->findById($team_id)->toArray();
        $data['players'] = $this->playerRepository->getAll($team_id)->toArray();

        return  $this->sendResponse(
                    $data, 
                    '', 
                    201
                );
    }

    /**
     * PURPOSE : Player details with team
     * METHOD: GET
     * REQ PARAMS : player_id 
     * URL : /api/player/{id}
    */
    public function getPlayer($player_id)
    {    
        if (empty($this->playerRepository->findById($player_id))){
            return $this->sendError('No Player Found', 404);
        }

        $data = [];
        $data = $this->playerRepository->findById($player_id)->toArray();
        
        return  $this->sendResponse(
                    $data, 
                    '', 
                    201
                );
    }
}

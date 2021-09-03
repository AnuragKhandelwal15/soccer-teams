<?php

namespace App\Http\Controllers;

use App\Repositories\TeamRepository;
use App\Repositories\PlayerRepository;
use Illuminate\Http\Request;

class FrontendController extends Controller
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
     * Display a listing of the teams.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = $this->teamRepository->getAll()->toArray();

        return view('home.teams')->with(compact('teams'));
    }

    /**
     * Fetch and display listing of team players
     * @param integer $id
     * @return \Illuminate\Http\Response
    */
    public function getPlayers($id)
    {
        $teamDetails = $this->teamRepository->findById($id)->toArray();
        $players = $this->playerRepository->getAll($id)->toArray();

        return view('home.team_players')->with(compact('players', 'teamDetails'));
    }

    /**
     * Fetch player details
     * @param string $name
     * @param integer $id
     * @return \Illuminate\Http\Response
    */
    public function getPlayer($name, $id)
    {
        $teamName = $name;
        $playerDetails = $this->playerRepository->findById($id)->toArray();

        return view('home.player_details')->with(compact('playerDetails', 'teamName'));
    }
}

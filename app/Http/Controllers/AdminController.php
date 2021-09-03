<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Redirect admin root routing to admin teams listing
     *
     * @return route redirection
     */
    public function show()
    {
        return redirect()->route('admin_teams');
    }

    /**
     * Display team listing with CRUD functionality
     *
     * @return \Illuminate\Http\Response
     */
    public function teams()
    {
        $teams = [];
        $response = $this->getData('/api/teams', 'GET', []);

        if(!empty($response['data'])) {
            $teams = $response['data'];
        }
        
        return view('admin.teams')->with(compact('teams'));
    }

    /**
     * Display player listing with CRUD functionality
     *
     * @return \Illuminate\Http\Response
     */
    public function players()
    {
        $players = [];
        $response = $this->getData('/api/players', 'GET', []);

        if(!empty($response['data'])) {
            $players = $response['data'];
        }
        
        return view('admin.players')->with(compact('players'));
    }
}

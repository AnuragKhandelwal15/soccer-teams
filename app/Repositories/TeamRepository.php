<?php

namespace App\Repositories;

use App\Models\Team;
use App\Repositories\SoccerRepository;

class TeamRepository implements SoccerRepository
{   
    protected $team = null;

    /**
     * Get all records as a result-set in an array
     *
     * @return array
     */
    public function getAll()
    {
        return Team::all();
    }

    /**
     * Get record based on ID
     *
     * @return array
     */
    public function findById($id)
    {
        return Team::find($id);
    }

    /**
     * Create or Update record in data-set in datatable
     *
     * @return boolean
     */
    public function createOrUpdate( $id = null, $collection = [] )
    {   
        if(is_null($id)) {
            $team = new User;
            $team->name = $collection['name'];
            $team->logo_url = $collection['logo_url'];

            return $team->save();
        }

        $team = Team::find($id);
        $team->name = $collection['name'];
        $team->logo_url = $collection['logo_url'];

        return $team->save();
    }
    
    /**
     * Delete record from data-set in data-table
     *
     * @return boolean
     */
    public function delete($id)
    {
        return Team::find($id)->delete();
    }
}
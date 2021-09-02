<?php

namespace App\Repositories;

use App\Models\Player;
use App\Repositories\SoccerRepository;

class PlayerRepository implements SoccerRepository
{   
    protected $player = null;

    /**
     * Get all records as a result-set in an array
     *
     * @return array
     */
    public function getAll( $id )
    {
        return Player::where('team_id', $id)
                    ->orderBy('first_name')
                    ->get();
    }

    /**
     * Get record based on ID
     *
     * @return array
     */
    public function findById($id)
    {
        return Player::find($id);
    }

    /**
     * Create or Update record in data-set in datatable
     *
     * @return boolean
     */
    public function createOrUpdate( $id = null, $collection = [] )
    {   
        if(is_null($id)) {
            $player = new User;
            $player->first_name = $collection['first_name'];
            $player->last_name = $collection['last_name'];
            $player->player_image_url = $collection['player_image_url'];
            $player->team_id = $collection['team_id'];

            return $player->save();
        }

        $player = Team::find($id);
        $player->first_name = $collection['first_name'];
        $player->last_name = $collection['last_name'];
        $player->player_image_url = $collection['player_image_url'];
        $player->team_id = $collection['team_id'];

        return $player->save();
    }
    
    /**
     * Delete record from data-set in data-table
     *
     * @return boolean
     */
    public function delete($id)
    {
        return Player::find($id)->delete();
    }
}
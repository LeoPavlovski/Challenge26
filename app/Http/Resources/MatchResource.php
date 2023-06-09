<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MatchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "team_1"=>$this->team_1,
            "team_2"=>$this->team_2,
            "score"=>$this->score,
            "date"=>$this->date,
        ];
    }
}

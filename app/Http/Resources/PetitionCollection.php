<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PetitionCollection extends ResourceCollection
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'version' => '0.0.1',
            'author' => 'datikken'
        ];
    }
}

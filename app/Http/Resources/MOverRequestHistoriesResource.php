<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class MOverRequestHistoriesResource extends JsonResource
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $message;

    /**
     * PostResource constructor.
     *
     * @param $resource
     * @param bool $status
     * @param string $message
     */
       public function __construct($status, $message = true, $data = 'List Data Over Request Histories')
    {
        parent::__construct($data);
        $this->status = $status;
        $this->message = $message;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'status' => $this->status,
            'message' => $this->message,
            'data' => $this->resource
        ];
    }
}

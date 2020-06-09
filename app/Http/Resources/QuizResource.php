<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuizResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'question' => $this->question,
            'category' => $this->category,
            'difficulty' => $this->difficulty,
            'option' => json_decode($this->option),
            'description' => $this->description,
            // 'correct_answer' => $this->correct_answer

        ];  
    }
}

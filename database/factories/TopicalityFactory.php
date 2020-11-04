<?php

namespace Database\Factories;

use App\Models\Topicality;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicalityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Topicality::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6, true),
            'content' => $this->faker->paragraphs(3, true)
        ];
    }
}

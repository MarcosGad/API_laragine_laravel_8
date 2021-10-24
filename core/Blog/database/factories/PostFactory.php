<?php

namespace Core\Blog\Database\Factories;

use Core\Blog\Models\Post as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(100),
            'body' => $this->faker->text(100),
            'thumbnail' => $this->faker->text(100),
        ];
    }
}

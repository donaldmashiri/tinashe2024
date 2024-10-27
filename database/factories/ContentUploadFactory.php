<?php

namespace Database\Factories;

use App\Models\ContentUpload;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContentUpload>
 */
class ContentUploadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ContentUpload::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'content_type' => $this->faker->randomElement(['research_paper', 'creative_work']),
            'file_path' => $this->faker->filePath(),
            'user_id' => 1,
        ];
    }
}

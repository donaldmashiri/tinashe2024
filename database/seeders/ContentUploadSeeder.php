<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentUploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $uploads = [
            [
                'title' => 'Impact of Climate Change on Coastal Ecosystems',
                'description' => 'A comprehensive study exploring the effects of rising sea levels and temperature on coastal biodiversity and ecosystem services.',
                'content_type' => 'research_paper',
                'file_path' => 'uploads/chapter1.docx',
                'user_id' => 1,
            ],
            [
                'title' => 'The Art of Modern Sculpture',
                'description' => 'An insightful exploration of contemporary sculpture, highlighting key artists and their contributions to modern art.',
                'content_type' => 'creative_work',
                'file_path' => 'uploads/chapter1.docx',
                'user_id' => 1,
            ],
            [
                'title' => 'Innovations in Renewable Energy Technology',
                'description' => 'An in-depth analysis of the latest advancements in renewable energy sources and their potential impact on global energy consumption.',
                'content_type' => 'research_paper',
                'file_path' => 'uploads/chapter1.docx',
                'user_id' => 1,
            ],
            [
                'title' => 'Exploring the Depths of Human Emotion',
                'description' => 'A creative narrative that delves into the complexities of human emotions through a series of short stories.',
                'content_type' => 'creative_work',
                'file_path' => 'uploads/chapter1.docx',
                'user_id' => 1,
            ],
            [
                'title' => 'The Role of Artificial Intelligence in Healthcare',
                'description' => 'A research paper discussing how AI technologies are transforming patient care, diagnostics, and treatment strategies.',
                'content_type' => 'research_paper',
                'file_path' => 'uploads/chapter1.docx',
                'user_id' => 1,
            ],
            [
                'title' => 'A Journey Through Abstract Expressionism',
                'description' => 'A detailed overview of the Abstract Expressionism movement, featuring influential artists and their groundbreaking works.',
                'content_type' => 'creative_work',
                'file_path' => 'uploads/chapter1.docx',
                'user_id' => 1,
            ],
            [
                'title' => 'The Future of Urban Transportation',
                'description' => 'An exploration of innovative transportation solutions for urban areas, focusing on sustainability and efficiency.',
                'content_type' => 'research_paper',
                'file_path' => 'uploads/chapter1.docx',
                'user_id' => 1,
            ],
            [
                'title' => 'Reflections on Nature and Humanity',
                'description' => 'A collection of poems that reflect on the relationship between nature and human existence.',
                'content_type' => 'creative_work',
                'file_path' => 'uploads/chapter1.docx',
                'user_id' => 1,
            ],
            [
                'title' => 'Advancements in Quantum Computing',
                'description' => 'A research study investigating the latest developments in quantum computing and their potential applications.',
                'content_type' => 'research_paper',
                'file_path' => 'uploads/chapter1.docx',
                'user_id' => 1,
            ],
            [
                'title' => 'The Intersection of Technology and Art',
                'description' => 'An exploration of how technology influences artistic expression and the creation of new art forms.',
                'content_type' => 'creative_work',
                'file_path' => 'uploads/chapter1.docx',
                'user_id' => 1,
            ],
        ];

        DB::table('content_uploads')->insert($uploads);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Quizzes;
use App\Models\Questions;


class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('quizzes')->insert([
            ['name' => 'ITクイズ'],
            ['name' => '他己紹介クイズ'],
            ['name' => '自己紹介クイズ']
        ]);

        DB::table('questions')->insert([
            [
                'image' => 'img-quiz01.png',
                'text' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
                'supplement' => '経済産業省 2019年3月 － IT 人材需給に関する調査',
                'quiz_id' => 1
            ],
            [
                'image' => 'img-quiz02.png',
                'text' => '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？',
                'supplement' => '',
                'quiz_id' => 1
            ],
            [
                'image' => 'img-quiz03.png',
                'text' => 'IoTとは何の略でしょう？',
                'supplement' => '',
                'quiz_id' => 1
            ],
        ]);
        DB::table('choices')->insert([
            [
                'question_id' => 1,
                'text' => '約28万人',
                'is_correct' => 0
            ],
            [
                'question_id' => 1,
                'text' => '約79万人',
                'is_correct' => 1
            ],
            [
                'question_id' => 1,
                'text' => '約183万人',
                'is_correct' => 0
            ],
            [
                'question_id' => 2,
                'text' => 'INTECH',
                'is_correct' => 0
            ],
            [
                'question_id' => 2,
                'text' => 'BIZZTECH',
                'is_correct' => 0
            ],
            [
                'question_id' => 2,
                'text' => 'X-TECH',
                'is_correct' => 1
            ],
            [
                'question_id' => 3,
                'text' => 'Internet of Things',
                'is_correct' => 1
            ],
            [
                'question_id' => 3,
                'text' => 'Integrate into Technology',
                'is_correct' => 0
            ],
            [
                'question_id' => 3,
                'text' => 'Information on Tool',
                'is_correct' => 0
            ]
        ]);
        #他己紹介クイズ
        DB::table('questions')->insert([
            [
                'image' => 'img-quiz04.png',
                'text' => 'しほが出ているコンテストの名前は？',
                'supplement' => 'ミクチャで配信を頑張っていてとにかくかわいい',
                'quiz_id' => 2
            ],
            [
                'image' => 'img-quiz05.png',
                'text' => 'チーム開発初級でしほにつけられたあだ名は？',
                'supplement' => '',
                'quiz_id' => 2
            ],
            [
                'image' => 'img-quiz06.png',
                'text' => '②で怒ると怖い人ランキング一位は？',
                'supplement' => '',
                'quiz_id' => 2
            ],
        ]);
        DB::table('choices')->insert([
            [
                'question_id' => 4,
                'text' => '流山美少女図鑑',
                'is_correct' => 0
            ],
            [
                'question_id' => 4,
                'text' => '美少女歌祭',
                'is_correct' => 1
            ],
            [
                'question_id' => 4,
                'text' => 'NEXT SINGER発掘コンテスト',
                'is_correct' => 0
            ],
            [
                'question_id' => 5,
                'text' => 'ぶっち',
                'is_correct' => 0
            ],
            [
                'question_id' => 5,
                'text' => 'オブちゃん',
                'is_correct' => 0
            ],
            [
                'question_id' => 5,
                'text' => 'しーちゃん',
                'is_correct' => 1
            ],
            [
                'question_id' => 6,
                'text' => 'しほ',
                'is_correct' => 1
            ],
            [
                'question_id' => 6,
                'text' => 'とも',
                'is_correct' => 0
            ],
            [
                'question_id' => 6,
                'text' => 'かっちゃん',
                'is_correct' => 0
            ]
        ]);
    }
}

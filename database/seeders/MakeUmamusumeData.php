<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Umamusume;

class MakeUmamusumeData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //JSONファイルを処理する処置を追加

        $json_Files = Storage::disk('private')->get('json/Umamusume.json');

        var_dump(json_decode($json_Files));

        // foreach($json_Files as $object){
        //     $umamusume  = new Umamusumetable();
        //     $umamusume->umamusume_id = 1;
        //     $umamusume->umamusume_name = 'スペシャルウィーク';
        //     $umamusume->turf_aptitude = 'A';
        //     $umamusume->dirt_aptitude = 'G';
        //     $umamusume->front_runner_aptitude = 'G';
        //     $umamusume->early_foot_aptitude = 'A';
        //     $umamusume->midfield_aptitude = 'A';
        //     $umamusume->closer_aptitude = 'C';
        //     $umamusume->sprint_aptitude = 'F';
        //     $umamusume->mile_aptitude = 'C';
        //     $umamusume->classic_aptitude = 'A';
        //     $umamusume->long_distance_aptitude = 'A';
        //     $umamusume->save();
        // }
    }
}

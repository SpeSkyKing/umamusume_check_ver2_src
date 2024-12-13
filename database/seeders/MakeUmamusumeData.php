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

        $json_Files = json_decode(Storage::disk('private')->get('json/Umamusume.json'));

        foreach($json_Files as $index => $object){
            if(!Umamusume::where('umamusume_name',$object->名前)->exists()){
                $umamusume  = new Umamusume();
                $umamusume->umamusume_id = int($index);
                $umamusume->umamusume_name = $object->名前;
                $umamusume->turf_aptitude = $object->芝;
                $umamusume->dirt_aptitude = $object->ダート;
                $umamusume->front_runner_aptitude = $object->逃げ;
                $umamusume->early_foot_aptitude = $object->先行;
                $umamusume->midfield_aptitude = $object->差し;
                $umamusume->closer_aptitude = $object->追込;
                $umamusume->sprint_aptitude = $object->短距離;
                $umamusume->mile_aptitude = $object->マイル;
                $umamusume->classic_aptitude = $object->中距離;
                $umamusume->long_distance_aptitude = $object->長距離;
                $umamusume->save();
            }  
        }
    }
}

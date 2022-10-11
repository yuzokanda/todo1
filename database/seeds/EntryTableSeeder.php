<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => '山田太郎',
            'master_category' => '食費',
            'entry_name' => 'サニー(スーパー)',
            'amount' => '1,250',
            'due_date' => '8/30',
          ];
      DB::table('entries')->insert($param);
  
      // 記述方法：DB::table('テーブル名')->insert(パラメータ);
    }
}

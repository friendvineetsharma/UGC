<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scores')->insert([
          'Rank'=>'10',
          'Title'=>'MATERIALS CHARACTERIZATION',
          'ISSN'=>'1095-6307',
          'Publisher'=>'jain',
          'UGC_listed'=>'yes',
          'Impact_Factor'=>'3.562',
          'No_of_coauthors'=>'2',
          'Are_you_main_author'=>'no',
          'Score'=>'0.06646586113920193',
        ]);

        DB::table('scores')->insert([
          'Rank'=>'11',
          'Title'=>'JOURNAL OF PHARMACOLOGY AND EXPERIMENTAL THERAPEUT..',
          'ISSN'=>'1095-6308',
          'Publisher'=>'jain',
          'UGC_listed'=>'yes',
          'Impact_Factor'=>'3.561',
          'No_of_coauthors'=>'4',
          'Are_you_main_author'=>'no',
          'Score'=>'0.00000008609344199999995',
        ]);

        DB::table('scores')->insert([
          'Rank'=>'9',
          'Title'=>'ECOGRAPHY',
          'ISSN'=>'1095-6306',
          'Publisher'=>'jain',
          'UGC_listed'=>'yes',
          'Impact_Factor'=>'6.455',
          'No_of_coauthors'=>'1',
          'Are_you_main_author'=>'yes',
          'Score'=>'25',
        ]);

        DB::table('scores')->insert([
          'Rank'=>'8',
          'Title'=>'Clinical & Translational Immunology',
          'ISSN'=>'1095-6305',
          'Publisher'=>'jain',
          'UGC_listed'=>'yes',
          'Impact_Factor'=>'6.464',
          'No_of_coauthors'=>'1',
          'Are_you_main_author'=>'yes',
          'Score'=>'25',
        ]);

        DB::table('scores')->insert([
          'Rank'=>'7',
          'Title'=>'AMERICAN JOURNAL OF PUBLIC HEALTH',
          'ISSN'=>'1095-6305',
          'Publisher'=>'jain',
          'UGC_listed'=>'yes',
          'Impact_Factor'=>'6.464',
          'No_of_coauthors'=>'5',
          'Are_you_main_author'=>'no',
          'Score'=>'0.00000010761680249999996',
        ]);

        DB::table('scores')->insert([
          'Rank'=>'14',
          'Title'=>'JOURNAL OF GEOPHYSICAL RESEARCH-OCEANS',
          'ISSN'=>'1095-6311',
          'Publisher'=>'ramesh',
          'UGC_listed'=>'yes',
          'Impact_Factor'=>'3.559',
          'No_of_coauthors'=>'2',
          'Are_you_main_author'=>'no',
          'Score'=>'0.06646586113920193',
        ]);
    }
}

<?php

//use Illuminate\Database\Seeder;
use Flynsarmy\CsvSeeder\CsvSeeder;

class LoyaltiesTableSeeder extends CsvSeeder
{
	public function __construct()
	{
		$this->table = 'loyalties';
		$this->csv_delimiter = '|';
		$this->filename = base_path().'/database/seeds/csvs/TND.csv';
		$this->offset_rows = 1;
		$this->mapping = [
		    0 => 'TXN_ID',
		    1 => 'CHANNEL_ID',
		    2 => 'TOTAL_ENTRY_AMT',
		    3 => 'NETWORK_ID',
		    4 => 'R_CRE_TIME',
		    5 => 'TXN_ENTRY_STATUS',
		    6 => 'CONSUMER_CODE',
		    7 => 'CORP_ID',
		    8 => 'TXN_TYPE',
		];
		$this->should_trim = true;
	}
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
		//DB::disableQueryLog();

		// Uncomment the below to wipe the table clean before populating
		DB::table($this->table)->truncate();

		parent::run();
    }
}

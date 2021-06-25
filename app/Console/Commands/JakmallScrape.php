<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Jakmall;
use Goutte\Client;

class JakmallScrape extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:jakmall';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape Jakmall Stock';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $jakmall=Jakmall::all();
        // echo "\r\n";
        $client = new Client();
        foreach($jakmall as $row){
            $crawler = $client->request('GET', $row["url"]);
            $json=$crawler->filterXpath('//script[@type="application/ld+json"]')->text();
            $a=json_decode($json,true);
            $res=$this->search($a,"http://schema.org/price");
            $sku_res=$this->search($a,"http://schema.org/sku");
            $price=false;
            if($res){
                $price=$res[0];
            }
            if($sku_res){
                $sku=$sku_res[0];
            }

            // echo $row["url"];
            if(strpos($json,"InStock")){
                $is_stock=1;
            }else{
                $is_stock=0;
            }
            // echo "\r\n";
            Jakmall::find($row["id"])->update(array(
                "price"=>$price,
                "sku"=>$sku,
                "is_stock"=>$is_stock
            ));
        }
    }

    function search($array, $key)
    {
        $results = array();

        if (is_array($array)) {
            if (isset($array[$key])) {
                $results[] = $array[$key];
            }

            foreach ($array as $subarray) {
                $results = array_merge($results, $this->search($subarray, $key));
            }
        }

        return $results;
    }
}

<?php
namespace App\Libraries;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;

class LumenRedis {

	private $url;

	public function __construct() {
		if(env('APP_ENV')  == 'production')
			$this->connection = 'production';
		else
			$this->connection = 'default';
	}

	public function redisConnection(){
        return Redis::connection($this->connection);
    }

}
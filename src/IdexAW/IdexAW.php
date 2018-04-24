<?php
namespace IdexAW;

class IdexAW
{
    public $ticker_data;

    public function __construct()
    {
        $this->ticker_data = $this->getTickerData();
    }

    public function getTickerData()
    {
        $full_url = 'https://api.idex.market/returnTicker';
        $handle = curl_init($full_url);
        curl_setopt($handle, CURLOPT_POST, 1);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($handle);
        curl_close($handle);
        return json_decode($result, true);
    }

    public function printLast($symbol)
    {
        echo $this->ticker_data["{$symbol}"]['last'];
    }

    public function printHigh($symbol)
    {
        echo $this->ticker_data["{$symbol}"]['high'];
    }

    public function printLow($symbol)
    {
        echo $this->ticker_data["{$symbol}"]['low'];
    }

    public function printLowestAsk($symbol)
    {
        echo $this->ticker_data["{$symbol}"]['lowestAsk'];
    }

    public function printHighestBid($symbol)
    {
        echo $this->ticker_data["{$symbol}"]['highestBid'];
    }

    public function printPercentChange($symbol)
    {
        echo $this->ticker_data["{$symbol}"]['percentChange'];
    }

    public function printBaseVolume($symbol)
    {
        echo $this->ticker_data["{$symbol}"]['baseVolume'];
    }

    public function printQuoteVolume($symbol)
    {
        echo $this->ticker_data["{$symbol}"]['quoteVolume'];
    }
}

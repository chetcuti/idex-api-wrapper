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
        $decoded_result = json_decode($result, true);
        return $decoded_result;
    }

    public function printLast($symbol)
    {
        return $this->ticker_data["{$symbol}"]['last'];
    }

    public function printHigh($symbol)
    {
        return $this->ticker_data["{$symbol}"]['high'];
    }

    public function printLow($symbol)
    {
        return $this->ticker_data["{$symbol}"]['low'];
    }

    public function printLowestAsk($symbol)
    {
        return $this->ticker_data["{$symbol}"]['lowestAsk'];
    }

    public function printHighestBid($symbol)
    {
        return $this->ticker_data["{$symbol}"]['highestBid'];
    }

    public function printPercentChange($symbol)
    {
        return $this->ticker_data["{$symbol}"]['percentChange'];
    }

    public function printBaseVolume($symbol)
    {
        return $this->ticker_data["{$symbol}"]['baseVolume'];
    }

    public function printQuoteVolume($symbol)
    {
        return $this->ticker_data["{$symbol}"]['quoteVolume'];
    }
}

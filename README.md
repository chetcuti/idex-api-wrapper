IDEX API Wrapper
================
A very simple PHP wrapper for the IDEX API.

Using a token's symbol you can retrieve its last price, highest price, lowest price, and so on. See below for the full command list.

Installing
----------
```
composer require chetcuti/idex-api-wrapper
```

Usage
-----
```
require_once '/vendor/autoload.php';
$api = new IdexAW\IdexAW();

// Print the last price of PAR (ETH)
$api->printLast('ETH_PAR')

// Print the highest price of PAR (ETH)
$api->printHigh('ETH_PAR')
```

Command List
------------
printLast
printHigh
printLow
printLowestAsk
printHighestBid
printPercentChange
printBaseVolume
printQuoteVolume

Requirements
------------
- PHP 5.3+  
- cURL

Support
-------
If you need any help feel free to email me at greg@chetcuti.com.

Changelog
---------
Please see the CHANGELOG file.

External Resources
------------------
IDEX, The First Ethereum-Based Decentralized Smart Contract Exchange - <https://idex.market>

License
-------
Copyright (c) 2018 Greg Chetcuti <greg@chetcuti.com>

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

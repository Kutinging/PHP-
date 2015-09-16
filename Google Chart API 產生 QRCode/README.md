#Google Chart API 產生 QRCode

```$info``` 及 ```$wg``` 可自行設定
而在php中```echo "<img src=\"https://chart.googleapis.com/chart?chs=".$wg."&cht=qr&chl=" . $info . "&choe=UTF-8\">";```
的 ```$info``` 及 ```$wg``` 也要跟著你設定的名稱一起更動。

```$_POST["info"]``` 及 ```$_POST["wg"]``` 中的 ```info``` 及 ```wg``` 也可以自行設定
而在HTML中 ```<input type="text" name="info"``` 及 ```select type="text" name="wg"```
兩者的 name 也要跟著你設定的名稱一起變動。

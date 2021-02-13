<?php
set_time_limit(0);
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
/////////////////////////////////////////
class userAgent {
    public $windows_os = [ '[Windows; |Windows; U; |]Windows NT 6.:number0-3:;[ Win64; x64| WOW64| x64|]',
                           '[Windows; |Windows; U; |]Windows NT 10.:number0-5:;[ Win64; x64| WOW64| x64|]', ];
    public $linux_os = [ '[Linux; |][U; |]Linux x86_64',
                         '[Linux; |][U; |]Linux i:number5-6::number4-8::number0-6: [x86_64|]' ];
    public $mac_os = [ 'Macintosh; [U; |]Intel Mac OS X :number7-9:_:number0-9:_:number0-9:',
                       'Macintosh; [U; |]Intel Mac OS X 10_:number0-12:_:number0-9:' ];
    public $androidVersions = [ '4.3.1',
                                '4.4',
                                '4.4.1',
                                '4.4.4',
                                '5.0',
                                '5.0.1',
                                '5.0.2',
                                '5.1',
                                '5.1.1',
                                '6.0',
                                '6.0.1',
                                '7.0',
                                '7.1',
                                '7.1.1' ];
    public $androidVersion;
    public $androidDevices = [ '4.3' => [ 'GT-I9:number2-5:00 Build/JDQ39',
                                          'Nokia 3:number1-3:[10|15] Build/IMM76D',
                                          '[SAMSUNG |]SM-G3:number1-5:0[R5|I|V|A|T|S] Build/JLS36C',
                                          'Ascend G3:number0-3:0 Build/JLS36I',
                                          '[SAMSUNG |]SM-G3:number3-6::number1-8::number0-9:[V|A|T|S|I|R5] Build/JLS36C',
                                          'HUAWEI G6-L:number10-11: Build/HuaweiG6-L:number10-11:',
                                          '[SAMSUNG |]SM-[G|N]:number7-9:1:number0-8:[S|A|V|T] Build/[JLS36C|JSS15J]',
                                          '[SAMSUNG |]SGH-N0:number6-9:5[T|V|A|S] Build/JSS15J',
                                          'Samsung Galaxy S[4|IV] Mega GT-I:number89-95:00 Build/JDQ39',
                                          'SAMSUNG SM-T:number24-28:5[s|a|t|v] Build/[JLS36C|JSS15J]',
                                          'HP :number63-73:5 Notebook PC Build/[JLS36C|JSS15J]',
                                          'HP Compaq 2:number1-3:10b Build/[JLS36C|JSS15J]',
                                          'HTC One 801[s|e] Build/[JLS36C|JSS15J]',
                                          'HTC One max Build/[JLS36C|JSS15J]',
                                          'HTC Xplorer A:number28-34:0[e|s] Build/GRJ90', ],
                               '4.4' => [ 'XT10:number5-8:0 Build/SU6-7.3',
                                          'XT10:number12-52: Build/[KXB20.9|KXC21.5]',
                                          'Nokia :number30-34:10 Build/IMM76D',
                                          'E:number:20-23::number0-3::number0-4: Build/24.0.[A|B].1.34',
                                          '[SAMSUNG |]SM-E500[F|L] Build/KTU84P',
                                          'LG Optimus G Build/KRT16M',
                                          'LG-E98:number7-9: Build/KOT49I',
                                          'Elephone P:number2-6:000 Build/KTU84P',
                                          'IQ450:number0-4: Quad Build/KOT49H',
                                          'LG-F:number2-5:00[K|S|L] Build/KOT49[I|H]',
                                          'LG-V:number3-7::number0-1:0 Build/KOT49I',
                                          '[SAMSUNG |]SM-J:number1-2::number0-1:0[G|F] Build/KTU84P',
                                          '[SAMSUNG |]SM-N80:number0-1:0 Build/[KVT49L|JZO54K]',
                                          '[SAMSUNG |]SM-N900:number5-8: Build/KOT49H',
                                          '[SAMSUNG-|]SGH-I337[|M] Build/[JSS15J|KOT49H]',
                                          '[SAMSUNG |]SM-G900[W8|9D|FD|H|V|FG|A|T] Build/KOT49H',
                                          '[SAMSUNG |]SM-T5:number30-35: Build/[KOT49H|KTU84P]',
                                          '[Google |]Nexus :number5-7: Build/KOT49H',
                                          'LG-H2:number0-2:0 Build/KOT49[I|H]',
                                          'HTC One[_M8|_M9|0P6B|801e|809d|0P8B2|mini 2|S][ dual sim|] Build/[KOT49H|KTU84L]',
                                          '[SAMSUNG |]GT-I9:number3-5:0:number0-6:[V|I|T|N] Build/KOT49H',
                                          'Lenovo P7:number7-8::number1-6: Build/[Lenovo|JRO03C]',
                                          'LG-D95:number1-8: Build/KOT49[I|H]',
                                          'LG-D:number1-8::number0-8:0 Build/KOT49[I|H]',
                                          'Nexus5 V:number6-7:.1 Build/KOT49H',
                                          'Nexus[_|] :number4-10: Build/[KOT49H|KTU84P]',
                                          'Nexus[_S_| S ][4G |]Build/GRJ22',
                                          '[HM NOTE|NOTE-III|NOTE2 1LTE[TD|W|T]',
                                          'ALCATEL ONE[| ]TOUCH 70:number2-4::number0-9:[X|D|E|A] Build/KOT49H',
                                          'MOTOROLA [MOTOG|MSM8960|RAZR] Build/KVT49L' ],
                               '5.0' => [ 'Nokia :number10-11:00 [wifi|4G|LTE] Build/GRK39F',
                                          'HTC 80:number1-2[s|w|e|t] Build/[LRX22G|JSS15J]',
                                          'Lenovo A7000-a Build/LRX21M;',
                                          'HTC Butterfly S [901|919][s|d|] Build/LRX22G',
                                          'HTC [M8|M9|M8 Pro Build/LRX22G',
                                          'LG-D3:number25-37: Build/LRX22G',
                                          'LG-D72:number0-9: Build/LRX22G',
                                          '[SAMSUNG |]SM-G4:number0-9:0 Build/LRX22[G|C]',
                                          '[|SAMSUNG ]SM-G9[00|25|20][FD|8|F|F-ORANGE|FG|FQ|H|I|L|M|S|T] Build/[LRX21T|KTU84F|KOT49H]',
                                          '[SAMSUNG |]SM-A:number7-8:00[F|I|T|H|] Build/[LRX22G|LMY47X]',
                                          '[SAMSUNG-|]SM-N91[0|5][A|V|F|G|FY] Build/LRX22C',
                                          '[SAMSUNG |]SM-[T|P][350|550|555|355|805|800|710|810|815] Build/LRX22G',
                                          'LG-D7:number0-2::number0-9: Build/LRX22G',
                                          '[LG|SM]-[D|G]:number8-9::number0-5::number0-9:[|P|K|T|I|F|T1] Build/[LRX22G|KOT49I|KVT49L|LMY47X]' ],
                               '5.1' => [ 'Nexus :number5-9: Build/[LMY48B|LRX22C]',
                                          '[|SAMSUNG ]SM-G9[28|25|20][X|FD|8|F|F-ORANGE|FG|FQ|H|I|L|M|S|T] Build/[LRX22G|LMY47X]',
                                          '[|SAMSUNG ]SM-G9[35|350][X|FD|8|F|F-ORANGE|FG|FQ|H|I|L|M|S|T] Build/[MMB29M|LMY47X]',
                                          '[MOTOROLA |][MOTO G|MOTO G XT1068|XT1021|MOTO E XT1021|MOTO XT1580|MOTO X FORCE XT1580|MOTO X PLAY XT1562|MOTO XT1562|MOTO XT1575|MOTO X PURE XT1575|MOTO XT1570 MOTO X STYLE] Build/[LXB22|LMY47Z|LPC23|LPK23|LPD23|LPH223]' ],
                               '6.0' => [ '[SAMSUNG |]SM-[G|D][920|925|928|9350][V|F|I|L|M|S|8|I] Build/[MMB29K|MMB29V|MDB08I|MDB08L]',
                                          'Nexus :number5-7:[P|X|] Build/[MMB29K|MMB29V|MDB08I|MDB08L]',
                                          'HTC One[_| ][M9|M8|M8 Pro] Build/MRA58K',
                                          'HTC One[_M8|_M9|0P6B|801e|809d|0P8B2|mini 2|S][ dual sim|] Build/MRA58K' ],
                               '7.0' => [ 'Pixel [XL|C] Build/[NRD90M|NME91E]',
                                          'Nexus :number5-9:[X|P|] Build/[NPD90G|NME91E]',
                                          '[SAMSUNG |]GT-I:number91-98:00 Build/KTU84P',
                                          'Xperia [V |]Build/NDE63X',
                                          'LG-H:number90-93:0 Build/NRD90[C|M]' ],
                               '7.1' => [ 'Pixel [XL|C] Build/[NRD90M|NME91E]',
                                          'Nexus :number5-9:[X|P|] Build/[NPD90G|NME91E]',
                                          '[SAMSUNG |]GT-I:number91-98:00 Build/KTU84P',
                                          'Xperia [V |]Build/NDE63X',
                                          'LG-H:number90-93:0 Build/NRD90[C|M]' ] ];
    public $android_os = [ 'Linux; Android :androidVersion:; :androidDevice:',
                           'Linux; U; Android :androidVersion:; :androidDevice:',
                           'Android; Android :androidVersion:; :androidDevice:', ];
    public $mobile_ios = [ 'iphone' => 'iPhone; CPU iPhone OS :number7-11:_:number0-9:_:number0-9:; like Mac OS X;',
                           'ipad' => 'iPad; CPU iPad OS :number7-11:_:number0-9:_:number0-9: like Mac OS X;',
                           'ipod' => 'iPod; CPU iPod OS :number7-11:_:number0-9:_:number0-9:; like Mac OS X;', ];
    public function getOS($os = NULL) {
        $_os = [];
        if($os === NULL || in_array($os, [ 'chrome', 'firefox', 'explorer' ])) {
            $_os = $os === 'explorer' ? $this->windows_os : array_merge($this->windows_os, $this->linux_os, $this->mac_os);
        } else {
            $_os += $this->{$os . '_os'};
        }
        $selected_os = rtrim($_os[random_int(0, count($_os) - 1)], ';');
        if(strpos($selected_os, '[') !== FALSE) {
            $selected_os = self::processSpinSyntax($selected_os);
        }
        if(strpos($selected_os, ':number') !== FALSE) {
            $selected_os = self::processRandomNumbers($selected_os);
        }
        
        if(random_int(1, 100) > 50) {
            $selected_os .= '; en-US';
        }
        return $selected_os;
    }
    public function getMobileOS($os = NULL) {
        $os = strtolower($os);
        $_os = [];
        switch( $os ) {
            case'android':
                $_os += $this->android_os;
            break;
            case 'iphone':
            case 'ipad':
            case 'ipod':
                $_os[] = $this->mobile_ios[$os];
            break;
            default:
                $_os = array_merge($this->android_os, array_values($this->mobile_ios));
        }
        $selected_os = rtrim($_os[random_int(0, count($_os) - 1)], ';');
        if(strpos($selected_os, ':androidVersion:') !== FALSE) {
            $selected_os = $this->processAndroidVersion($selected_os);
        }
        if(strpos($selected_os, ':androidDevice:') !== FALSE) {
            $selected_os = $this->addAndroidDevice($selected_os);
        }
        if(strpos($selected_os, ':number') !== FALSE) {
            $selected_os = self::processRandomNumbers($selected_os);
        }
        return $selected_os;
    }
    public static function processRandomNumbers($selected_os) {
        return preg_replace_callback('/:number(\d+)-(\d+):/i', function($matches) { return random_int($matches[1], $matches[2]); }, $selected_os);
    }
    public static function processSpinSyntax($selected_os) {
        return preg_replace_callback('/\[([\w\-\s|;]*?)\]/i', function($matches) {
            $shuffle = explode('|', $matches[1]);
            return $shuffle[array_rand($shuffle)];
        }, $selected_os);
    }
    public function processAndroidVersion($selected_os) {
        $this->androidVersion = $version = $this->androidVersions[array_rand($this->androidVersions)];
        return preg_replace_callback('/:androidVersion:/i', function($matches) use ($version) { return $version; }, $selected_os);
    }
    public function addAndroidDevice($selected_os) {
        $devices = $this->androidDevices[substr($this->androidVersion, 0, 3)];
        $device  = $devices[array_rand($devices)];
        
        $device = self::processSpinSyntax($device);
        return preg_replace_callback('/:androidDevice:/i', function($matches) use ($device) { return $device; }, $selected_os);
    }
    public static function chromeVersion($version) {
        return random_int($version['min'], $version['max']) . '.0.' . random_int(1000, 4000) . '.' . random_int(100, 400);
    }
    public static function firefoxVersion($version) {
        return random_int($version['min'], $version['max']) . '.' . random_int(0, 9);
    }
    public static function windows($version) {
        return random_int($version['min'], $version['max']) . '.' . random_int(0, 9);
    }
    public function generate($userAgent = NULL) {
        if($userAgent === NULL) {
            $r = random_int(0, 100);
            if($r >= 44) {
                $userAgent = array_rand([ 'firefox' => 1, 'chrome' => 1, 'explorer' => 1 ]);
            } else {
                $userAgent = array_rand([ 'iphone' => 1, 'android' => 1, 'mobile' => 1 ]);
            }
        } elseif($userAgent == 'windows' || $userAgent == 'mac' || $userAgent == 'linux') {
            $agents = [ 'firefox' => 1, 'chrome' => 1 ];
            if($userAgent == 'windows') {
                $agents['explorer'] = 1;
            }
            $userAgent = array_rand($agents);
        }
        $_SESSION['agent'] = $userAgent;
        if($userAgent == 'chrome') {
            return 'Mozilla/5.0 (' . $this->getOS($userAgent) . ') AppleWebKit/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(1, 50) . ' (KHTML, like Gecko) Chrome/' . self::chromeVersion([ 'min' => 47,
                                                                                                                                                                                                                                              'max' => 55 ]) . ' Safari/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603));
        } elseif($userAgent == 'firefox') {
            
            return 'Mozilla/5.0 (' . $this->getOS($userAgent) . ') Gecko/' . (random_int(1, 100) > 30 ? '20100101' : '20130401') . ' Firefox/' . self::firefoxVersion([ 'min' => 45,
                                                                                                                                                                        'max' => 74 ]);
        } elseif($userAgent == 'explorer') {
            
            return 'Mozilla / 5.0 (compatible; MSIE ' . ($int = random_int(7, 11)) . '.0; ' . $this->getOS('windows') . ' Trident / ' . ($int == 7 || $int == 8 ? '4' : ($int == 9 ? '5' : ($int == 10 ? '6' : '7'))) . '.0)';
        } elseif($userAgent == 'mobile' || $userAgent == 'android' || $userAgent == 'iphone' || $userAgent == 'ipad' || $userAgent == 'ipod') {
            
            return 'Mozilla/5.0 (' . $this->getMobileOS($userAgent) . ') AppleWebKit/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(1, 50) . ' (KHTML, like Gecko)  Chrome/' . self::chromeVersion([ 'min' => 47,
                                                                                                                                                                                                                                                     'max' => 55 ]) . ' Mobile Safari/' . (random_int(1, 100) > 50 ? random_int(533, 537) : random_int(600, 603)) . '.' . random_int(0, 9);
        } else {
            new Exception('Unable to determine user agent to generate');
        }
    }
}
interface AntiCaptchaTaskProtocol {
    
    public function getPostData();
    public function getTaskSolution();
    
}
class Anticaptcha {

    private $host = "api.anti-captcha.com";
    private $scheme = "https";
    private $clientKey;
    private $verboseMode = false;
    private $errorMessage;
    private $taskId;
    public $taskInfo;
    
    
    
    /**
     * Submit new task and receive tracking ID
     */
    public function createTask() {
        
        $postData = array(
            "clientKey" =>  $this->clientKey,
            "task"      =>  $this->getPostData()
        );
        $submitResult = $this->jsonPostRequest("createTask", $postData);
        
        if ($submitResult == false) {
            $this->debout("API error                \r", "red");
            return false;
        }
        
        if ($submitResult->errorId == 0) {
            $this->taskId = $submitResult->taskId;
            $this->debout("created task with ID {$this->taskId}                \r", "yellow");
            return true;
        } else {
            $this->debout("API error {$submitResult->errorCode} : {$submitResult->errorDescription}                \r", "red");
            $this->setErrorMessage($submitResult->errorDescription);
            return false;
        }
        
    }
    
    public function waitForResult($maxSeconds = 300, $currentSecond = 0) {
        $postData = array(
            "clientKey" =>  $this->clientKey,
            "taskId"    =>  $this->taskId
        );
        if ($currentSecond == 0) {
            $this->debout("waiting 15 seconds..                \r");
            sleep(15);
        } else {
            sleep(1);
        }
        $this->debout("requesting task status                \r");
        $postResult = $this->jsonPostRequest("getTaskResult", $postData);
        
        if ($postResult == false) {
            $this->debout("API error                \r", "red");
            return false;
        }
        
        $this->taskInfo = $postResult;
        
        
        if ($this->taskInfo->errorId == 0) {
            if ($this->taskInfo->status == "processing") {
                
                $this->debout("task is still processing                \r");
                //repeating attempt
				sleep(5);
                return $this->waitForResult($maxSeconds, $currentSecond+1);
                
            }
            if ($this->taskInfo->status == "ready") {
                $this->debout("task is complete                \r", "green");
                return true;
            }
            $this->setErrorMessage("unknown API status, update your software");
            return false;
            
        } else {
            $this->debout("API error {$this->taskInfo->errorCode} : {$this->taskInfo->errorDescription}                \r", "red");
            $this->setErrorMessage($this->taskInfo->errorDescription);
            return false;
        }
    }
    
    public function getBalance() {
        $postData = array(
            "clientKey" =>  $this->clientKey
        );
        $result = $this->jsonPostRequest("getBalance", $postData);
        if ($result == false) {
            $this->debout("API error                \r", "red");
            return false;
        }
        if ($result->errorId == 0) {
            return $result->balance;
        } else {
            return false;
        }
    }
    
    public function reportIncorrectImageCaptcha() {
        $result = $this->jsonPostRequest("reportIncorrectImageCaptcha", [
            "clientKey" =>  $this->clientKey,
            "taskId"    =>  $this->taskId
        ]);
        if ($result == false) {
            $this->debout("API error                \r", "red");
            return false;
        }
        if ($result->errorId == 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function reportIncorrectRecaptcha() {
        $result = $this->jsonPostRequest("reportIncorrectRecaptcha", [
            "clientKey" =>  $this->clientKey,
            "taskId"    =>  $this->taskId
        ]);
        if ($result == false) {
            $this->debout("API error                \r", "red");
            return false;
        }
        if ($result->errorId == 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function reportCorrectRecaptcha() {
        $result = $this->jsonPostRequest("reportCorrectRecaptcha", [
            "clientKey" =>  $this->clientKey,
            "taskId"    =>  $this->taskId
        ]);
        if ($result == false) {
            $this->debout("API error                \r", "red");
            return false;
        }
        if ($result->errorId == 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function jsonPostRequest($methodName, $postData) {
        
        
        if ($this->verboseMode) {
            //echo "making request to {$this->scheme}://{$this->host}/$methodName with following payload:\n";
            //print_r($postData);
        }
        
        
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,"{$this->scheme}://{$this->host}/$methodName");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_ENCODING,"gzip,deflate");
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "POST");   
        $postDataEncoded = json_encode($postData);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$postDataEncoded);
        curl_setopt($ch,CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',     
            'Accept: application/json',     
            'Content-Length: ' . strlen($postDataEncoded) 
        ));
        curl_setopt($ch,CURLOPT_TIMEOUT,30);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,30);
        $result = curl_exec($ch);
        if ($this->verboseMode) {
            //echo "API response:\n";
            //echo $result."\n";
        }
        $curlError = curl_error($ch);
        
        if ($curlError != "") {
            $this->errorMessage = "Network error: $curlError";
            $this->debout("Network error: $curlError                \r");
            return false;
        }
        curl_close($ch);
        return json_decode($result);
    }
    
    public function setVerboseMode($mode) {
        $this->verboseMode = $mode;
    }
    
    public function debout($message, $color = "white") {
        if (!$this->verboseMode) return false;
        if ($color != "white" and $color != "") {
            $CLIcolors = array(
                "cyan" => "0;36",
                "green" => "0;32",
                "blue"  => "0;34",
                "red"   => "0;31",
                "yellow" => "1;33"
            );
            
            $CLIMsg  = "\033[".$CLIcolors[$color]."m$message\033[0m";
            
        } else {
            $CLIMsg  = $message;
        }
        echo $CLIMsg."\n";
    }
    
    public function setErrorMessage($message) {
        $this->errorMessage = $message;
    }
    
    public function getErrorMessage() {
        return $this->errorMessage;
    }
    
    public function getTaskId() {
        return $this->taskId;
    }
    
    public function setTaskId($taskId) {
        $this->taskId = $taskId;
    }
    
    public function setHost($host) {
        $this->host = $host;
    }
    
    public function setScheme($scheme) {
        $this->scheme = $scheme;
    }
    
    /**
     * Set client access key, must be 32 bytes long
     * @param string $key
     */
    public function setKey($key) {
        $this->clientKey = $key;
    }
    

}
class RecaptchaV2Proxyless extends Anticaptcha implements AntiCaptchaTaskProtocol {

    private $websiteUrl;
    private $websiteKey;
    private $websiteSToken;
    private $dataSValue;
    private $isInvisible;
    
    public function getPostData() {
        return array(
            "type"                  =>  "RecaptchaV2TaskProxyless",
            "websiteURL"            =>  $this->websiteUrl,
            "websiteKey"            =>  $this->websiteKey,
            "websiteSToken"         =>  $this->websiteSToken,
            "recaptchaDataSValue"   =>  $this->dataSValue,
            "isInvisible"           =>  $this->isInvisible
        );
    }
    
    public function getTaskSolution() {
        return $this->taskInfo->solution->gRecaptchaResponse;
    }
    
    public function getWorkerCookies() {
        return $this->taskInfo->solution->cookies;
    }
    
    public function setWebsiteURL($value) {
        $this->websiteUrl = $value;
    }
    
    public function setWebsiteKey($value) {
        $this->websiteKey = $value;
    }
    
    public function setWebsiteSToken($value) {
        $this->websiteSToken = $value;
    }
    
    public function setDataSValue($value) {
        $this->dataSValue = $value;
    }
    
    public function setIsInvisible() {
        $this->isInvisible = true;
    }
    
}
$setting = 'setting.json';
if(!file_exists($setting)){
	echo '[1] Linux/Termux/VPS'."\n";
	echo '[2] Windows/RDP'."\n";
	$input = readline("Run Script in => ");
	switch($input){
		case 1:
			$data = "LINUX";
			break;
		case 2:
			$data = "WINDOWS";
			break;
	}
	$json = json_encode(array(
		"type" 	=> $data,
		"key"	=> $input
	),JSON_PRETTY_PRINT);
	file_put_contents($setting,$json);
}else{
	$data = json_decode(file_get_contents($setting), True);
	$input = $data["key"];
}
_clear($input);
/////////////////////////////////////////
class BOT {
	public function __construct() {
		$this->BANNER = "https://deska-script.site/banner.php";
		$this->FCONFIG = "config.json";
		$this->COOKIE = "cookie.txt";
		$this->CF = array(
			"NAMA-SC" => "GUDANGVIEW",
			"VERSION" => "1.0.0"
		);
		$this->CONFIG = json_decode(file_get_contents($this->FCONFIG),True);
		$this->Email = $this->CONFIG["email"];
		$this->Password = $this->CONFIG["password"];
		$this->User_agent = $this->CONFIG["user-agent"];
		$this->API_KEY = $this->CONFIG["api-key"];
		$this->BASE_URL = "https://gudangview.com/";
		$this->AK = array(
			"login" => "web/site/login",
			"list" => "web/contents/content-list-view",
			"view" => "web/contents/",
		);
		$this->HEADERS_GET = array(
			'Host: gudangview.com',
			'upgrade-insecure-requests: 1',
			'user-agent: '.$this->User_agent,
			'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
			'sec-fetch-site: none',
			'sec-fetch-mode: navigate',
			'sec-fetch-user: ?1',
			'sec-fetch-dest: document',
			'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7'
		);
		$this->HEADERS_POST = array(
			'Host: gudangview.com',
			'cache-control: max-age=0',
			'upgrade-insecure-requests: 1',
			'origin: https://gudangview.com',
			'content-type: application/x-www-form-urlencoded',
			'user-agent: '.$this->User_agent,
			'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
			'sec-fetch-site: same-origin',
			'sec-fetch-mode: navigate',
			'sec-fetch-user: ?1',
			'sec-fetch-dest: document',
			'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7'
		);
	}
	public function SAVES(){
		if(!file_exists($this->FCONFIG)){
			$username = readline("Input Email => ");
			$password = readline("Input Password => ");
			$api = readline("Input Api Key Anticaptcha => ");
			while(True){$ua = (new userAgent) -> generate();if(strlen($ua) != 0){break;}}
			$save = json_encode(array(
				"email" => strtolower($username),
				"password" => $password,
				"user-agent" => $ua,
				"api-key", $api
			),JSON_PRETTY_PRINT);
			file_put_contents($this->FCONFIG,$save);
		}
		$this->Email = $username;
		$this->Password = $password;
		$this->User_agent = $ua;
		$this->API_KEY = $api;
		return $this;
	}
	public function GETCOK(){
		$url = $this->BASE_URL;
		$header = $this->HEADERS_GET;
		$header[] = "referer: ".$this->BASE_URL;
		Echo "Login .                     \r";
		while(True){
			$curl = _curl($url, $header, $post='', $req='', $this->COOKIE);
			//file_put_contents("1.php",$curl);
			if($GLOBALS["H_CODE"] == 302 OR $GLOBALS["H_CODE"] == 200)break;
		}
	}
	public function LOGIN1(){
		$url = $this->BASE_URL.$this->AK["login"];
		$header = $this->HEADERS_GET;
		Echo "Login ..                     \r";
		while(True){
			$curl = _curl($url, $header, $post='', $req='', $this->COOKIE);
			//file_put_contents("2.php",$curl);
			if($GLOBALS["H_CODE"] == 302 OR $GLOBALS["H_CODE"] == 200){
				return explode('">',explode('name="_csrf" value="',$curl)[1])[0];
				break;
			}
		}
	}
	public function LOGIN2($csrf){
		$url = $this->BASE_URL.$this->AK["login"];
		$post = urldecode("_csrf=".urlencode($csrf)."&LoginForm%5Bemail%5D=".urlencode($this->Email)."&LoginForm%5Bpassword%5D=".$this->Password."&LoginForm%5BrememberMe%5D=0&LoginForm%5BrememberMe%5D=1&login-button=");
		$header = $this->HEADERS_POST;
		Echo "Login ...                     \r";
		while(True){
			$curl = _curl($url, $header, $post=$post, $req='POST', $this->COOKIE);
			//file_put_contents("3.php",$curl);
			if($GLOBALS["H_CODE"] == 302 OR $GLOBALS["H_CODE"] == 200){
				return "=> Success                   \n";
				break;
			}
		}
	}
	public function LIST_VIEW(){
		$url = $this->BASE_URL.$this->AK["list"];
		$header = $this->HEADERS_GET;
		//Echo "List\n";
		while(True){
			$curl = _curl($url, $header, $post='', $req='', $this->COOKIE);
			//file_put_contents("4.php",$curl);
			if($GLOBALS["H_CODE"] == 200){
				$res["balance"] = explode('<',explode('Total Pendapatan : Rp ', $curl)[1])[0];
				$res["content"] = explode('href="/web/contents/', $curl);
				$res["page"] = explode('href="/web/contents/content-list-view?', $curl);
				$res["name"] = explode('Log Out',explode('class="fa fa-sign-out pull-right"></i>', $curl)[1])[0];
				return $res;
				break;
			}
		}
	}
	public function LIST_VIEW_P($page){
	$url = $this->BASE_URL.$this->AK["list"]."?page={$page}&per-page=12";
		$header = $this->HEADERS_GET;
		//Echo "List\n";
		while(True){
			$curl = _curl($url, $header, $post='', $req='', $this->COOKIE);
			//file_put_contents("4.php",$curl);
			if($GLOBALS["H_CODE"] == 200){
				$res["balance"] = explode('<',explode('Total Pendapatan : Rp ', $curl)[1])[0];
				$res["content"] = explode('href="/web/contents/', $curl);
				$res["page"] = explode('href="/web/contents/content-list-view?', $curl);
				$res["name"] = explode('Log Out',explode('class="fa fa-sign-out pull-right"></i>', $curl)[1])[0];
				return $res;
				break;
			}
		}
	}
	public function VIEW1($id){
		$url = $this->BASE_URL.$this->AK["view"].$id;
		$header = $this->HEADERS_GET;
		while(True){
			$curl = _curl($url, $header, $post='', $req='', $this->COOKIE);
			//file_put_contents("5.php",$curl);
			if($GLOBALS["H_CODE"] == 200){
				$res["cpc"] = explode('="',explode('class="g-recaptcha" ', $curl)[1])[0];
				$res["csrf"] = explode('">',explode('name="_csrf" value="',$curl)[1])[0];
				$res["csrftoken"] = explode('">',explode('name="csrf-token" content="',$curl)[1])[0];
				$res["url"] = explode('"',explode('var formURL = "/', $curl)[1])[0];
				$res["saldo"] = explode(' ',explode('Telah Masuk Ke Saldo Anda Rp "+', $curl)[1])[0];
				$res["time"] = explode(';',explode('var count = ', $curl)[1])[0];
				$res["userid"] = explode(',',explode('user_id: ', $curl)[1])[0];;
				return $res;
				break;
			}
		}
	}
	public function VIEW2($id, $csrf, $token){
		$url = $this->BASE_URL.$this->AK["view"].$id;
		$header = $this->HEADERS_POST;
		$post = "_csrf=".$csrf."&".urlencode("Contents[reCaptcha]")."=".$token."&g-recaptcha-response=".$token;
		//print_r($url);echo"\n";
		while(True){
			$curl = _curl($url, $header, $post=$post, $req='POST', $this->COOKIE);
			//file_put_contents("6.php",$curl);
			if($GLOBALS["H_CODE"] == 200){
				$res["csrftoken"] = explode('">',explode('name="csrf-token" content="',$curl)[1])[0];
				$res["url"] = explode('"',explode('var formURL = "/', $curl)[1])[0];
				$res["saldo"] = explode(' ',explode('Telah Masuk Ke Saldo Anda Rp "+', $curl)[1])[0];
				$res["time"] = explode(';',explode('var count = ', $curl)[1])[0];
				$res["userid"] = explode(',',explode('user_id: ', $curl)[1])[0];;
				return $res;
				break;
			}
		}
	}
	public function INSERT($url, $csrf, $userid, $id){
		$url = $this->BASE_URL.$url;
		$header = $this->HEADERS_POST;
		$post = "_csrf=".$csrf."&user_id=".$userid."&content_id=".$id;
		//print_r($post);echo"\n";
		while(True){
			$curl = _curl($url, $header, $post=$post, $req='POST', $this->COOKIE);
			//file_put_contents("7.php",$curl);
			if($GLOBALS["H_CODE"] == 200){
				return json_decode($curl, True);
				break;
			}
		}
	}
}
while(True){
	$bot = new BOT();
	if(file_exists($bot->COOKIE)){_delete($input, $bot->COOKIE);}
	Banner($bot->CF["NAMA-SC"],$bot->CF["VERSION"]);
	(new BOT) -> SAVES();
	_clear($input);
	$bot = new BOT();
	Banner($bot->CF["NAMA-SC"],$bot->CF["VERSION"]);
	echo "=> Login ...                       \r";
	$api = new RecaptchaV2Proxyless();
	$api->setVerboseMode(False);
	$api->setKey($bot->API_KEY);  //API KEY
	//recaptcha key from target website
	$api->setWebsiteURL($bot->BASE_URL);
	$api->setWebsiteKey("6LeaxTQaAAAAAMDwDPZ9k18dy1fiGJi4yzrDK5k0");
	$bot->GETCOK();
	$c = $bot->LOGIN1();
	echo $bot->LOGIN2($c)."\n";
	for($tr = 0; $tr <5; $tr++){
		$lview = $bot->LIST_VIEW();
		echo "=> Your Name : ". $lview["name"]."\n";
		echo "=> Total Pendapatan : Rp ".$lview["balance"]."\n";
		$bal = explode(',',$lview["balance"]);
		$balance = $bal[0].$bal[1];
		$ii = number_format(count($lview["content"])/2);
		//echo "=> Jumlah Iklan Page=1 [$ii]\n";
		echo "=> Cek Video Page 1                             \r";
		sleep(5);
		for($c = 2; $c < $ii; $c++){
			$c +=1;
			$id_content = explode('"', $lview["content"][$c])[0];
			if(is_numeric($id_content)){
				$view = $bot->VIEW1($id_content);
				if($view["cpc"] == "data-sitekey"){
					if (!$api->createTask()) {return false;}
					$taskId = $api->getTaskId();
					if (!$api->waitForResult()) {$api->debout("could not solve captcha", "red");$api->debout($api->getErrorMessage());}
					else {$recaptchaToken =   $api->getTaskSolution();}
					$view2 = $bot->VIEW2($id_content, $view["csrf"], $recaptchaToken);
					_timer_detik($view2["time"]);
					$insert = $bot->INSERT($view2["url"], $view2["csrftoken"], $view2["userid"], $id_content);
					$add = $view2["saldo"];
					if(strlen($add) >= 5){$add  = intval(strval($add*1000));}elseif(strlen($add) <= 5){$add  = intval(strval($add));}
					$balance = $balance + $add;
					if($insert["message"] == "Succes"){
						echo "=> [".date("h:i:s")."] -> +Rp. ".number_format($add)." -> Balance : Rp. ".number_format($balance)."           \n";
					}
				}else{
					_timer_detik($view["time"]);
					$insert = $bot->INSERT($view["url"], $view["csrftoken"], $view["userid"], $id_content);
					$add = $view["saldo"];
					$balance = $balance + $add;
					if(strlen($add) >= 5){$add  = intval(strval($add*1000));}elseif(strlen($add) <= 5){$add  = intval(strval($add));}
					if($insert["message"] == "Succes"){
						echo "=> [".date("h:i:s")."] -> +Rp. ".number_format($add)." -> Balance : Rp. ".number_format($balance)."           \n";
					}
				}
			}
		}
		for($v = 1; $v < 30; $v++){
			echo "=> Cek Video Page {$v}                             \r";
			sleep(5);
			$lview = $bot->LIST_VIEW_P($v);
			$bal = explode(',',$lview["balance"]);
			$balance = $bal[0].$bal[1];
			$ii = number_format(count($lview["content"])/2);
			//echo "=> Jumlah Iklan $page [$ii]\n";
			for($c = 2; $c < $ii; $c++){
				$c +=1;
				$id_content = explode('"', $lview["content"][$c])[0];
				if(is_numeric($id_content)){
					$view = $bot->VIEW1($id_content);
					//print_r($view);
					if($view["cpc"] == "data-sitekey"){
						if (!$api->createTask()) {$api->debout("API v2 send failed - ".$api->getErrorMessage(), "red");return false;}
						$taskId = $api->getTaskId();
						if (!$api->waitForResult()) {$api->debout("could not solve captcha", "red");$api->debout($api->getErrorMessage());}
						else {$recaptchaToken =   $api->getTaskSolution();}
						$view2 = $bot->VIEW2($id_content, $view["csrf"], $recaptchaToken);
						_timer_detik($view2["time"]);
						$insert = $bot->INSERT($view2["url"], $view2["csrftoken"], $view2["userid"], $id_content);
						$add = $view2["saldo"];
						if(strlen($add) >= 5){$add  = intval(strval($add*1000));}elseif(strlen($add) <= 5){$add  = intval(strval($add));}
						$balance = $balance + $add;
						if($insert["message"] == "Succes"){
							echo "=> [".date("h:i:s")."] -> +Rp. ".number_format($add)." -> Balance : Rp. ".number_format($balance)."           \n";
						}
					}else{
						_timer_detik($view["time"]);
						$insert = $bot->INSERT($view["url"], $view["csrftoken"], $view["userid"], $id_content);
						$add = $view["saldo"];
						if(strlen($add) >= 5){$add  = intval(strval($add*1000));}elseif(strlen($add) <= 5){$add  = intval(strval($add));}
						$balance = $balance + $add;
						if($insert["message"] == "Succes"){
							echo "=> [".date("h:i:s")."] -> +Rp. ".number_format($add)." -> Balance : Rp. ".number_format($balance)."           \n";
						}
					}
				}
			}
			
		}
		_timer_menit(1);
	}
	_timer_menit(30);
}
function _timer_detik($detik){
	while(True)
	{
		$detik--;
		if(strlen($detik) == 1){
			$detik = "0".$detik;
		}
		echo "                   ===== [/] {$detik} [/] =====            \r";
		usleep(500000);
		echo "                   ===== [\] {$detik} [\] =====            \r";
		usleep(500000);
		if($detik <= 0)break;
	}
}
function _timer_menit($menit){
	$menit -= 1;
	$detik  = 60;
	while(True)
	{
		$detik--;
		if(strlen($detik) == 1){
			$detik = "0".$detik;
		}
		if(strlen($menit) == 1){
			$menit = "0".$menit;
		}
		echo "                   ===== [/] 00:{$menit}:{$detik} [/] =====            \r";
		usleep(500000);
		echo "                   ===== [\] 00:{$menit}:{$detik} [\] =====            \r";
		usleep(500000);
		if($detik <= 0)
		{
			$menit -=1;
			$detik  = 60;
			if($menit <= -1)break;
		}
	}
}
function _timer_jam($jam){
	$jam  -= 1;
	$menit = 59;
	$detik = 60;
	while(True)
	{
		$detik--;
		if(strlen($detik) == 1){
			$detik = "0".$detik;
		}
		if(strlen($menit) == 1){
			$menit = "0".$menit;
		}
		if(strlen($jam) == 1){
			$jam = "0".$jam;
		}
		echo "                   ===== [\] {$jam}:{$menit}:{$detik} [\] =====            \r";
		usleep(500000);
		echo "                   ===== [/] {$jam}:{$menit}:{$detik} [/] =====            \r";
		usleep(500000);
		if($detik <= 0)
		{
			$menit -=1;
			$detik  = 60;
			if($menit <= -1)
			{
				$jam  -=1;
				$menit = 59;
				if($jam <= -1)break;
			}
		}
	}
}
function _timer($data){
	if($data < 59){
		$result = _timer_detik($data);
	}elseif($data < 3599){
		$data = $data / 60;
		$result = _timer_menit($data);
	}elseif($data > 3599){
		$data = $data / 60 / 60;
		$result = _timer_jam($data);
	}
	return $result;
}
function _login(){
	echo "Login..\r";
	usleep(200000);
	echo "Login....\r";
	usleep(200000);
	echo "Login......\r";
	usleep(200000);
	echo "Login........\r";
	usleep(200000);
	echo "Login.........\r";
	usleep(200000);
}
function _clear($input){
	switch($input){
		case 1:
			return popen("clear", "w");
			break;
		case 2:
			return popen("cls", "w");
			break;
	}
}
function _delete($input, $data){
	switch($input){
		case 1:
			return popen("rm -irf {$data}", "w");
			break;
		case 2:
			return popen("del {$data}", "w");
			break;
	}
}
function build($data){
	return http_build_query($data);
}
function cek_day(){
	$daftar_hari = array(
		'Sunday' => 'Minggu',
		'Monday' => 'Senin',
		'Tuesday' => 'Selasa',
		'Wednesday' => 'Rabu',
		'Thursday' => 'Kamis',
		'Friday' => 'Jumat',
		'Saturday' => 'Sabtu'
	);
	$date=date("Y/m/d");//"2012/05/03";
	$namahari = date('l', strtotime($date));
	return $daftar_hari[$namahari];
}
function strip(){
	//return "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
	return "---------------------------------------------------------------\n";
}
function _curl($url, $header, $post='', $req='', $CO){
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_ENCODING, "gzip");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
	curl_setopt($ch, CURLOPT_VERBOSE, False);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
	curl_setopt($ch, CURLOPT_COOKIEJAR, $CO);
	curl_setopt($ch, CURLOPT_COOKIEFILE, $CO);
	if($post != "")
	{
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		$header[] = "content-length: ".strlen($post);
	}
	if($req != "")
	{
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $req);
	}
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	$result = curl_exec($ch);
	$GLOBALS['H_CODE'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	$GLOBALS["INFO"] = curl_getinfo($ch);
	curl_close($ch);  
	return $result;
}
function Banner($script, $version){
	$bn = file_get_contents("https://deska-script.site/banner.php");
	echo $bn;
	echo strip();
	echo "Script \t\t: {$script}\n";
	echo "Version \t: {$version}\n";
	echo "Support \t: KELUARAGA RAJA SENSEI PREMIUM\n";
	echo "Warning!! \nScript Ilegal, Resiko di tanggung dewe,\njangan menyebarluaskan script ini keluar grub ctab premi\nkalau mau tetap legit/payout dan script ini open source,\nhanya untuk di pelajari bukan untuk disebarluaskan\n";
	echo strip();
}

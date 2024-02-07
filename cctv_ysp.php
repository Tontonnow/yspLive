<?php
$cache = new Cache(3600, "cache/");
$cctv_list = array(
    "cctv1_10m" => "http://live-tpgq.cctv.cn/live/cctv1.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv2_10m" => "http://live-tpgq.cctv.cn/live/cctv2.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv3_10m" => "http://live-tpgq.cctv.cn/live/cctv3.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv4_10m" => "http://live-tpgq.cctv.cn/live/cctv4.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv5_10m" => "http://live-tpgq.cctv.cn/live/cctv5.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv5p_10m" => "http://live-tpgq.cctv.cn/live/cctv5p.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv7_10m" => "http://live-tpgq.cctv.cn/live/cctv7.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv8_10m" => "http://live-tpgq.cctv.cn/live/cctv8.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv9_10m" => "http://live-tpgq.cctv.cn/live/cctv9.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv10_10m" => "http://live-tpgq.cctv.cn/live/cctv10.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv11_10m" => "http://live-tpgq.cctv.cn/live/cctv11.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv12_10m" => "http://live-tpgq.cctv.cn/live/cctv12.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv13_10m" => "http://live-tpgq.cctv.cn/live/cctv13.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv14_10m" => "http://live-tpgq.cctv.cn/live/cctv14.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv15_10m" => "http://live-tpgq.cctv.cn/live/cctv15.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv16_10m" => "http://live-tpgq.cctv.cn/live/cctv16.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv17_10m" => "http://live-tpgq.cctv.cn/live/cctv17.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cgtnar_10m" => "http://live-tpgq.cctv.cn/live/cgtnar.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cgtndoc_10m" => "http://live-tpgq.cctv.cn/live/cgtndoc.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cgtnen_10m" => "http://live-tpgq.cctv.cn/live/cgtnen.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cgtnfr_10m" => "http://live-tpgq.cctv.cn/live/cgtnfr.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cgtnru_10m" => "http://live-tpgq.cctv.cn/live/cgtnru.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cgtnsp_10m" => "http://live-tpgq.cctv.cn/live/cgtnsp.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv16_25m" => "http://live-tp4k.cctv.cn/live/CCTV16-4K.stream/playlist.m3u8,http://liveali-tp4k.cctv.cn/live/CCTV16-4K.stream/",
    "cctv4k_10m" => "http://live-tp4k.cctv.cn/live/4K10M.stream/playlist.m3u8,http://liveali-tp4k.cctv.cn/live/4K10M.stream/",
    "cctv4k10m" => "http://live-tpgq.cctv.cn/live/cctv4k10m.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv4k1610m" => "http://live-tpgq.cctv.cn/live/cctv4k1610m.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv4k16_36m" => "http://live-tpgq.cctv.cn/live/cctv4k16.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv4k_25m" => "http://live-tp4k.cctv.cn/live/4K0219.stream/playlist.m3u8,http://liveali-tp4k.cctv.cn/live/4K0219.stream/",
    "cctv4k_36m" => "http://live-tpgq.cctv.cn/live/cctv4k.m3u8,http://liveali-tpgq.cctv.cn/live/",
    "cctv8k_36m" => "http://live-tp4k.cctv.cn/live/4K36M/playlist.m3u8,http://liveali-tp4k.cctv.cn/live/4K36M/"
);
$channel = $_GET['channel'] or $channel = "cctv1_10m";
$uid = $_GET['uid'] or $uid = "1234123122";
if (!array_key_exists($channel, $cctv_list)) {
    echo "Channel not found!";
}
$datas = explode(",", $cctv_list[$channel]);
$data = get_url($channel, $datas[0], $uid, $datas[1], $cache);
$data = preg_replace('/(.*?.ts)/i', $datas[1] . '$1', $data);
header("Content-Disposition:attachment;filename=" . $channel . ".m3u8");
echo $data;
function get_url($id, $url, $uid, $path, $cache)
{
    //global $cache, $uid;
    $playUrl = $cache->get($id.$uid);
    if (!$playUrl) {
        $bstrURL = "https://ytpvdn.cctv.cn/cctvmobileinf/rest/cctv/videoliveUrl/getstream";
        $postData = 'appcommon={"ap":"cctv_app_tv","an":"央视投屏助手","adid":" '.$uid.'","av":"1.1.7"}&url=' . $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_URL, $bstrURL);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("User-Agent: cctv_app_tv", "Referer: api.cctv.cn", "UID: " . $uid));
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        $data = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($data);
        $playUrl = $obj->url;

        $cache->put($id.$uid, $playUrl);
    }
    $ch = curl_init();
    while (1){
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_URL, $playUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("User-Agent: cctv_app_tv", "Referer: api.cctv.cn", "UID: " . $uid));
        $data = curl_exec($ch);
        preg_match('/(.*\.m3u8\?.*)/', $data, $matches);
        if (!empty($matches)) {
            $m3u8_url = $matches[0];
            $playUrl = $path . $m3u8_url;
        } else {
            break;
        }
    }
    curl_close($ch);
    return $data;
}

// 以下缓存类来自互联网，请确保cache目录存在以及读写权限 //
class Cache
{

    private $cache_path;
    private $cache_expire;

    public function __construct($exp_time = 3600, $path = "cache/")
    {
        $this->cache_expire = $exp_time;
        $this->cache_path = $path;
    }

    private function fileName($key)
    {
        return $this->cache_path . md5($key);
    }

    public function put($key, $data)
    {

        $values = serialize($data);
        $filename = $this->fileName($key);
        $file = fopen($filename, 'w');
        if ($file) {

            fwrite($file, $values);
            fclose($file);
        } else return false;
    }

    public function get($key)
    {

        $filename = $this->fileName($key);

        if (!file_exists($filename) || !is_readable($filename)) {
            return false;
        }

        if (time() < (filemtime($filename) + $this->cache_expire)) {

            $file = fopen($filename, "r");

            if ($file) {

                $data = fread($file, filesize($filename));
                fclose($file);
                return unserialize($data);
            } else return false;

        } else return false;
    }
}

?>
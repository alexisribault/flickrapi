<?php

namespace App\Models;

use Illuminate\Support\Facades\Config;

class Flickr
{

    /**
     * set the url to retrieve the right data from flickr API
     *
     * @param null $query
     * @param int $page
     * @param int $per_page
     * @param string $format
     * @return mixed|null
     */
    public function search($query = null, $page = 1, $per_page = 5, $format = 'php_serial')
    {
        $parameters = [
            'method'   => 'flickr.photos.search',
            'api_key'  => Config::get('flickr.key'),
            'text'     => urlencode($query),
            'page'     => $page,
            'per_page' => Config::get('flickr.photoPerPage'),
            'format'   => $format
        ];
        $url = 'http://flickr.com/services/rest/?';
        $search = $url . http_build_query($parameters);
        $result = $this->file_get_contents_curl($search);
        if ($format == 'php_serial') $result = unserialize($result);
        return $result;
    }

    /**
     * use curl to grab the data.
     *
     * @param $url
     * @return mixed|null
     */
    private function file_get_contents_curl($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36');
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $data = curl_exec($ch);
        $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($retcode == 200) {
            return $data;
        } else {
            return null;
        }
    }
}


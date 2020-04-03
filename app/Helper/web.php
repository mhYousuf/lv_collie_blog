<?php
	function clean($string) {
       $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
       return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

    function webActive($name = null)
    {
        return (Route::is('users.'.$name)) ? 'active' : '';
    }

    function uniqNum()
    {
        return mt_rand(1, 1000) + time();
    }

    function generateToken($len = 32)
    {
        // Array of potential characters, shuffled.
        $chars = array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 
            'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
            'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 
            '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
        );
        shuffle($chars);
        $num_chars = count($chars) - 1;
        $token = '';
        // Create random token at the specified length.
        for ($i = 0; $i < $len; $i++)
        {
            $token .= $chars[mt_rand(0, $num_chars)];
        }
        return $token;
    }

    function dbClearFile($table, $where, $path, $files, $sizes = null)
    {
        foreach ($files as $file) {
            $old_data = DB::table($table)->select($file)->where($where)->first();
            
            if (is_array($sizes)) {
                foreach ($sizes as $size) {
                    if($size.$old_data->$file && file_exists($path.$size.$old_data->$file)) { unlink($path.$size.$old_data->$file); }
                }
            } else {
                if($old_data->$file && file_exists($path.$old_data->$file)) { unlink($path.$old_data->$file); }
            }
        }
    }

    function uploadPath($path)
    {
        return public_path($path);
    }

    function msgFlash($text = 'Session Flash Text', $type = 'success', $key = 'msg')
    {
        session()->flash($key, ['text' => $text, 'type' => $type]);
    }


?>
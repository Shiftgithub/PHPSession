<?php
    $username = "1234";

    /**
     * @param string $filename
     * @param string $mode
     * @return resource/false
     * Open a File
     */
    $file = fopen("$username.txt", "r") or die("Unable to open file!");
    
    /**
     * @param resource $file
     * @param int $length
     * @return string/false
     * @link https://php.net/manual/en/function.fread.php
     */
    echo fread($file, filesize("$username.txt"));

    /**
     *@param resource $handle
     *@return bool — true on success or false on failure.
     *@link https://php.net/manual/en/function.fclose.php
     */
    fclose($file);
?>
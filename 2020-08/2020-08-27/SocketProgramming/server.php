<?php
    class Chat
    {
        public function readFromServer()
        {
            return rtrim(fgets(STDIN));
        }
    }
?>
<?php
    $host = "localhost";
    $port = 80;
    set_time_limit(0);

    /**
    * @param int Donamin 
    * @param int type
    * @param int protocol.
    * @return resource/false
    */
    $socketCreate = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create Socket");

    /**
     * @param resource socket
     * @param string Address
     * @param int port
     * @return bool
     */
    $socketBind = socket_bind($socketCreate, $host, $port) or die("Could not bind Socket");

    /**
     * @param resource
     * @return bool
     */
    $socketLisent = socket_listen ( $socketCreate);

    if($socketLisent){
        echo "listening for Connection.......\n";

        do {
            /**
             * @param resource
             * @return resource/false
             */
            $socketAccept = socket_accept($socketCreate) or die("Could not accept incoming Connection...... :( ");

            /**
             * @param resource $socketCreate / $socketCreate
             * @param int length
             * @return string/false
             */
            $fromClint = socket_read($socketAccept, 1024) or die("Could not read input \n");

            $fromClint = trim($fromClint); //Strip whitespace from the beginning and end of a string.
            echo "\tClint Says :  \t" . $fromClint . "\n\n";

            $reply = new Chat();
            echo "\tEnter Reply : \t";
            $toClint = $reply->readFromServer();

            /**
             * @param resource $socketAccept
             * @param string message/buffer
             * @param int length
             * @return int/false
             */
            socket_write($socketAccept, $toClint, strlen($toClint));
        } while (true);

        /**
         * @param resource $socketCreate/$socketAccept
         * @return void
         */
        socket_close($socketAccept, $socketCreate);
    }

?>
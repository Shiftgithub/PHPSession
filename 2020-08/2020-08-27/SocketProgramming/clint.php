<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clint</title>
</head>

<body>


    <div align="center">
        <form method="POST">
            <table>
                <tr>
                    <td>
                        <label>Enter Message: </label>
                        <input type="text" name="txtMessage">
                        <input type="submit" name="btnSend" value="Send">
                    </td>
                </tr>
                <?php
                $host = "localhost";
                $port = 80;

                if (isset($_POST['btnSend'])) {
                    $toServer = $_POST['txtMessage'];

                    /**
                     * @param int Donamin 
                     * @param int type
                     * @param int protocol.
                     * @return resource/false
                     */
                    $socketCreate = socket_create(AF_INET, SOCK_STREAM, 0);

                    var_dump($socketCreate);
                    

                    /**
                     * @param resource $socketCreate
                     * @param string address
                     * @param int port
                     * @return bool
                     */
                    socket_connect($socketCreate, $host, $port);

                    /**
                     * @param resource $socketAccept
                     * @param string message/buffer
                     * @param int length
                     * @return int/false
                     */
                    socket_write($socketCreate, $toServer, strlen($toServer));

                    /**
                     * @param resource $socketCreate / $socketCreate
                     * @param int length
                     * @return string/false
                     */
                    $socketRead = socket_read($socketCreate, 1024);
                    if($socketRead != false){
                        $fromServer = trim($socketRead);
                        $fromServer = "Server Says :    " . $fromServer;
                    }
                }
                ?>
                <tr>
                    <td>
                        <textarea name="" id="" cols="30" rows="10"><?= !empty($fromServer) ? "$fromServer" : "" ?></textarea>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
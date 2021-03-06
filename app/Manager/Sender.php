<?php
/**
 * date 2019/10/9 17:46
 * create by PHPStrom
 */
namespace App\Manager;

/**
 * desc 信息统一发送
 * Class Sender
 * @package App\Manager
 */
class Sender
{
    const MSG_ROOM_ID       = 1001;
    const MSG_WAIT_PLAYER   = 1002;
    const MSG_ROOM_START    = 1003;
    const MSG_GAME_INFO     = 1004;
    const MSG_GAME_OVER     = 1005;


    const CODE_MSG = [
        self::MSG_ROOM_ID       => '房间ID',
        self::MSG_WAIT_PLAYER   => '正在等待其他玩家....',
        self::MSG_ROOM_START    => '游戏开始....',
        self::MSG_GAME_INFO     => 'game info',
        self::MSG_GAME_OVER     => '游戏结束啦',
    ];

    /**
     * @desc sendMessage 向客户端发送信息
     * @param $playerId
     * @param $code
     * @param array $data
     */
    public static function sendMessage($playerId, $code, $data = [])
    {
        $message = [
            'code' => $code,
            'msg'  => self::CODE_MSG[$code] ?? '',
            'data' => $data
        ];
        $playerFd = DataCenter::getPlayerFd($playerId);
        if (empty($playerFd)) {
            return;
        }
        DataCenter::$server->push($playerFd, json_encode($message));
    }
}

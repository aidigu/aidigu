<?php

namespace app\wechat\libs\officialAccount;

use EasyWeChat\Kernel\Contracts\EventHandlerInterface;
// 微信用户处理类
use app\wechat\libs\officialAccount\User;


class MediaMessageHandler implements EventHandlerInterface
{
    public function handle($message = null)
    {

        if (!method_exists($this, $message['MsgType'])) {
            return '异常消息';
        }
        return $this->{$message['MsgType']}($message);
        // switch ($message['MsgType']) {
                
        //         //收到事件消息
        //         case 'event':
        //             return $this->event($message);
        //         case 'text':
        //             return '收到文字消息';
        //             break;
        //         case 'image':
        //             return '收到图片消息';
        //             break;
        //         case 'voice':
        //             return '收到语音消息';
        //             break;
        //         case 'video':
        //             return '收到视频消息';
        //             break;
        //         case 'location':
        //             return '收到坐标消息';
        //             break;
        //         case 'link':
        //             return '收到链接消息';
        //             break;
        //         case 'file':
        //             return '收到文件消息';
        //         // ... 其它消息
        //         default:
        //             return '收到其它消息';
        //             break;
        //     }
    }

    public function text($message)
    {   
        // {"ToUserName":"gh_0776ea4ec0c3","FromUserName":"o3VP0vrgSFTOpkaZGv_q36lGPbNQ","CreateTime":"1702958639","MsgType":"text","Content":"1","MsgId":"24380504160245029"}
        file_put_contents('1.txt', json_encode($message));

        return 'hi';
    }

    public function video($message)
    {   
        // {"ToUserName":"gh_0776ea4ec0c3","FromUserName":"o3VP0vrgSFTOpkaZGv_q36lGPbNQ","CreateTime":"1702959136","MsgType":"video","MediaId":"6daRUVxRJ8MZ0_Wa-T14wG8cEP_rlNzqV7AmqCkvBEDrbsh1u061bZ7fJQZT0gUAiKPO1sXcf9n_bIQm89nKYw","ThumbMediaId":"6daRUVxRJ8MZ0_Wa-T14wEx33vutIKxzuAm_vC_wytnm7Wiqn9QMWzM2pbWrDhhK","MsgId":"24380514531812649"}
        file_put_contents('1.txt', json_encode($message));

        return 'hi';
    }

    public function image($message)
    {   
        // {"ToUserName":"gh_0776ea4ec0c3","FromUserName":"o3VP0vrgSFTOpkaZGv_q36lGPbNQ","CreateTime":"1702958639","MsgType":"text","Content":"1","MsgId":"24380504160245029"}
        // file_put_contents('1.txt', json_encode($message));
        
        return 'hi';
    }


    public function event($message)
    {
        // {"ToUserName":"gh_0776ea4ec0c3","FromUserName":"o3VP0vrgSFTOpkaZGv_q36lGPbNQ","CreateTime":"1702954926","MsgType":"event","Event":"subscribe","EventKey":null}
        // file_put_contents('1.txt', json_encode($message));
        // $message = json_decode(json_encode($message), true);
        // $event = $message['Event'];
        // $openId = $message['FromUserName'];

        // if ($event == 'subscribe') {
        //     // 创建新用户
        //     User::create($openId);
        //     return '欢迎关注爱嘀咕~';
        // }

        // // 个人号无法获取微信用户信息
        // $userInfo = User::info($openId);
        // // file_put_contents('1.txt', json_encode($userInfo));
        // // // 检查用户并登录
        // User::checkUser(json_decode(json_encode($userInfo), true), $message['EventKey']);
        return '欢迎关注爱嘀咕~';
    }
}
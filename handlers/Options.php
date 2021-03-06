<?php
/**
 * Class Handler_Options
 */
class Handler_Options extends HttpsDav_BaseHander
{
    /**
     * 执行客户端通过OPTIONS方法发来的请求任务并返回数组格式化结果
     * @return array
     */
    public function handler()
    {
        $response = [
            'code' => 200,
            'headers' => [
                'Accept-Charset: utf-8',
                'DAV: 1,2,3',
                'MS-Author-Via: DAV',
                'Allow: OPTIONS,GET,HEAD,DELETE,PROPFIND,PROPPATCH,COPY,MOVE,PUT,LOCK,UNLOCK',
                'Content-Length: 0',
                'cache-control: public, max-age=3600'
            ]
        ];
        return $response;
    }

    /**
     * 获取并数组格式化客户端发来的请求数据
     * @return mixed|void
     */
    protected function getArrInput()
    {
        //HttpsDav_Log::debug(json_encode(HttpsDav_Request::$_Headers, JSON_UNESCAPED_UNICODE));
    }
}
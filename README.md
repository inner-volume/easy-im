<p align="center">
	<strong>非官方即时通信SDK easy-im</strong>
</p>

> 非官方即时通信SDK，支持腾讯IM，环信IM，极光IM，融云IM，网易云信IM等


## 安装

~~~~
composer require pkg6/easy-im
~~~~

## 请求日志开启

~~~
\Pkg6\easyIm\Kernel\BaseClient::$request_log=true;
~~~

## 自定义缓存

> 基于https://packagist.org/packages/psr/simple-cache#1.0

~~~
$config = [
  'appId'      => '5978322198',
  'identifier' => 'administrator',
  'secretKey'  => 'nfugb53xtlhyfq2kgiriganruyoagh93it1zwysmh2tmj5tnnmuqhd2og5ofktjt',
  "cache"=>new \Pkg6\easyIm\Kernel\Cache\FileCache(["path"=>"./cache/"])
];
$im = Pkg6\easyIm\Factory::Tencent($config);
~~~


## 案例

### [腾讯IM](https://cloud.tencent.com/product/im) 

~~~
$config = [
  'appId'      => '5978322198',
  'identifier' => 'administrator',
  'secretKey'  => 'nfugb53xtlhyfq2kgiriganruyoagh93it1zwysmh2tmj5tnnmuqhd2og5ofktjt',
];
$im = Pkg6\easyIm\Factory::Tencent($config);
// 自定义请求(账号同步到云端)
$params = [
    'Identifier' => 'easyim',
    'Nick'       => 'easyim',
    'FaceUrl'    => 'https://github.com/Pkg6/easy-im',
];
$im->request->send('im_open_login_svc/account_import', $params);
~~~

### [环信IM](https://www.easemob.com/) 

~~~
$config = [
  'appKey'       => '',
  'clientId'     => '',
  'clientSecret' => '',
  'orgName'      => '',
  'appName'      => '',
];
$im = Pkg6\easyIm\Factory::Huanxin($config);

// 自定义请求(账号同步到云端)
$params = [
    'username' => 'easyim',
    'password' => '123456',
    'nickname' => 'easyim'
];
$im->request->send('post', 'users', $params);
~~~

### [极光IM](https://www.jiguang.cn/im)

~~~
$config = [
  'appKey'       => '',
  'masterSecret' => '',
];
$im = Pkg6\easyIm\Factory::Jiguang($config);

// 自定义请求(账号同步到云端)
$params = [[
    'username' => 'easyim',
    'password' => '123456',
]];
$im->request->send('post', 'v1/users/', $params);

//IM REST Report V2
//获取消息
$im->request->send('get', 'v2/messages?count=500&begin_time=2015-11-02 10:10:10&end_time=2015-11-02 10:10:12',[],true);
~~~

### [融云IM](https://www.jiguang.cn/im) 

~~~
$config = [
  'appKey'    => '',
  'appSecret' => '',
];
$im = Pkg6\easyIm\Factory::RongCloud($config);

// 自定义请求(账号同步到云端)
$params=[
    'userId' => 'easyim',
    'name'   => 'easyim',
];
$im->request->send('user/getToken.json', $params);
~~~
###  [网易云信IM](https://yunxin.163.com/) 

~~~
$config = [
  'appKey'    => '',
  'appSecret' => '',
];
$im = Pkg6\easyIm\Factory::Yunxin($config);
// 自定义请求（账号同步到云端）
$params = [
    'accid' => 'easyim',
    'name'  => 'easyim',
];
$im->request->send('nimserver/user/create.action', $params);
~~~




## 支持厂商

- [腾讯IM](https://cloud.tencent.com/product/im) 
- [环信IM](https://www.easemob.com/) 
- [极光IM](https://www.jiguang.cn/im)
- [融云IM](https://www.jiguang.cn/im) 
- [网易云信IM](https://yunxin.163.com/) 



##  加入我们

如果你认可我们的开源项目，有兴趣为 easy-im 的发展做贡献，竭诚欢迎加入我们一起开发完善。无论是 报告错误或 是 Pull Request 开发，那怕是修改一个错别字也是对我们莫大的帮助。


##  许可协议
[MIT](https://opensource.org/licenses/MIT)

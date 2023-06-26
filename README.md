## DSShop介绍
DSShop商城系统是基于ThinkPhp6.0+Vue开发的一套完善的B2C(单店铺商城)电商系统，DSShop商城系统能够快速积累客户、会员数据分析、智能转化客户、 有效提高销售、会员维护、网络营销的一款企业级应用，功能包含拼团、砍价、秒杀、优惠券、积分、分销、刮刮卡等功能，更适合企业二次开发

网站功能包含：网站设置、帐号同步、上传设置、权限设置、地区管理、数据备份、操作日志、分类管理、品牌管理、会员管理、会员级别、积分管理、预存款、实物订单、虚拟订单、退货管理、咨询管理、评价管理、文章分类、文章管理、三级分销、拼团、抢购管理、限时折扣、满即送、优惠套餐、活动管理、兑换礼品、行业分析、店铺统计、商品分析、营销分析等

## 导航栏目
 [帮助手册](http://www.csdeshang.com/home/help/index/id/111.html)
 | [功能清单](http://www.csdeshang.com/home/dsshop/feature.html)
 | [官网地址](http://www.csdeshang.com)
 | [TP6开发手册](https://www.kancloud.cn/manual/thinkphp6_0/1037479)
 | [Vue.js手册](https://cn.vuejs.org/)


## QQ交流群
DSShop开源商城官方群:549770277  <a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=727cfd470568a3b4905b391cb373a2dfd2318c87ff0104eec8a70cb711483362"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="DSShop单店铺商城官方群" title="DSShop单店铺商城官方群"></a>

## 演示Demo
| 演示角色  | 演示地址                                | 账号 | 账号 |
|-------|-------------------------------------|----|----|
| 后台PC端 | https://dsshop.csdeshang.com/admin/ |  dsshop  |  123456  |
| 用户PC端 | https://dsshop.csdeshang.com/ |  buyer  |  123456  |
| 用户手机端 | https://m.dsshop.csdeshang.com/ |  buyer  |  123456  |

## 系统功能
1. 设置：帐号同步、上传设置、SEO设置、邮箱短信、支付方式、权限设置、快递公司、运单模板、地区管理、数据备份、操作日志
2. 会员：会员管理、会员级别、经验值管理、会员通知、积分管理、预存款
3. 商品：商品分类、品牌管理、商品管理、类型管理、规格管理、空间管理
4. 交易：发货管理、实物订单、虚拟订单、退款管理、退货管理、虚拟订单退款、咨询管理、举报管理、评价管理、发货设置、售卖区域
5. 网站：文章分类、文章管理、会员协议、页面导航、广告管理、友情链接、平台客服
6. 营销：基本设置、分销设置、抢购管理、虚拟抢购设置、手机拼团管理、限时折扣、满即送、优惠套餐、代金券、活动管理、兑换礼品、平台充值卡
7. 统计：概述及设置、行业分析、会员统计、销量分析、商品分析、市场分析、售后分析
8. 公众号：公众号配置、微信菜单、关键字回复、绑定列表、消息推送

## 技术评价
1. B/S架构
2. MVC编码架构，采用Thinkphp6.0框架
3. 支持Compser
4. 支持阿里云存储
5. 支持负载均衡
6. 支持Mysql读写分离
7. 支持Redis/Memcached
8. 支持Linux/Unix/Windows服务器，支持Apache/IIS/Nginx等

## 相关依赖SDK安装
1. 多应用模式扩展  composer require topthink/think-multi-app
2. think-view      composer require topthink/think-view
3. think-captcha   composer require topthink/think-captcha
4. think-image     composer require topthink/think-image
5. thinkphp-jump   composer require liliuwei/thinkphp-jump
6. 阿里云OSS  composer require aliyuncs/oss-sdk-php   
介绍地址：https://help.aliyun.com/document_detail/32099.html?spm=5176.87240.400427.47.eaLg1R
7. phpmailer  composer require phpmailer/phpmailer
8. 阿里云短信  composer require alibabacloud/client
9. 腾讯云短信  composer require qcloudsms/qcloudsms_php

## 安装教程
1. 将源码解压到服务器空间
2. 域名应该指向到public目录，因为应用入口文件位于public/index.php。
比如我的DSShop项目在  D:\www\DSShop  域名应该指向到 D:\www\DSShop\public
3. 进行安装 http://域名/install/install.php
4. 后台地址：http://域名/index.php/admin
5. 前台地址：http://域名/index.php/home

如果还有什么不懂的到DSShop论坛(http://www.csdeshang.com)进行提问，以及下载最新版本。


## APIDOC 生成API
apidoc -i application/api/controller -o public/apidoc/

## 更新日志
#### V3.1.0
免费版更新
1. 修改 商品死锁
2. 修复 定时任务格式
3. 修复 后台商品列表页面商品状态不显示
4. 修复 后台地区管理新增售卖区域按钮错位
5. 优化 可视化编辑设置

授权版更新
1. 修复 商品详情页面 推荐商品图片不显示
2. 优化 商品列表页面进入到商品详情页面在返回时显示
3. 优化 部分页面
4. 优化 购物

#### V3.0.9
免费版更新
1. 新增 可视化编辑
2. 修改 新增购物车数量计算方式
3. 修复 加入购物车数量能超过商品库存
4. 修复 后台空间管理无法删除图片
5. 修复 后台不显示仓库商品 
6. 优化 类型数量排序
7. 优化 微信菜单
8. 优化 微信API接口

授权版更新
1. 新增 可视化编辑
2. 优化 充值流程
3. 优化 代金券
4. 优化 订单列表


#### V3.0.8
免费版更新
1. 新增 淘宝CSV导入说明
2. 新增 高德地图
3. 修复 编辑商品规格图片页面切换图片相册失效
4. 修复 推荐组合不显示和推荐组合商品勾选价格不更新
5. 优化 部分语言项
6. 优化 秒杀页面显示
7. 优化 翻页
8. 优化 后台礼品新增显示

授权版更新
1. 新增 订单列表商品名称搜索订单
2. 新增 商品列表商品排版切换
3. 优化 商品列表显示
4. 优化 首页部分显示
5. 优化 部分语言项


#### V3.0.7
免费版更新
1. 新增 商品详情页面SEO信息
2. 新增 商品分类默认图
3. 新增 平台后台设置页面网站LOGO栏目
4. 修复 仓库商品列表无法显示商品
5. 修复 发货语言项错误
6. 修复 平台后台咨询管理商品链接错误
7. 修复 平台后台商品分类设置里面推荐分类和推荐品牌无法清空勾选
8. 修复 同一个商品不能同时出现在两个会员的浏览记录里面
9. 优化 站点关闭
10.优化 商品规格为0时不能点击
11.优化 分销功能
12.优化 全站手机号显示

授权版更新
1. 新增 积分兑换代金券成功提示语
2. 修复 手机端评论只显示10条无法显示更多
3. 修复 文章列表只显示10篇文章无法显示更多
4. 修复 手机端广告到期还显示
5. 优化 商品规格库存为0时不能点击
6. 优化 登录成功后的返回
7. 优化 分销功能
8. 优化 浏览记录页面

#### V3.0.6
免费版更新
1. 新增 找回密码页面没有绑定手机的提示语和修改密码时的提示语
2. 新增 普通注册开关功能
3. 新增 收到货款的凭证号可以修改功能
4. 更新 为你推荐接口图片字段名，和新增售卖数量
5. 修复 tag有时候没起作用
6. 修复 无法使用代金券
7. 修复 F码商品 提交不了
8. 修复 手机号码注册的会员无法获取注册红包
9. 修复 所有商品分类显示 有个时候三级分类无法显示
10.修复 商品规格市场价批量处理的时候不能设置小数点
11.优化 退款退货流程
12.优化 商品搜索
13.优化 短信发送流程

授权版更新
1. 新增 找回密码页面没有绑定手机的提示语和修改密码时的提示语
2. 新增 普通注册开关功能
3. 更新 为你推荐接口图片字段名，和新增售卖数量
4. 修复 手机号码注册的会员无法获取注册红包
5. 优化 退款退货流程
6. 优化 商品搜索
7. 优化 短信发送流程

#### V3.0.5
免费版更新
1. 新增 下单页面显示已优惠金额
2. 新增 订单列表退货退款加上链接
3. 新增 阿里云OSS
4. 新增 百度敏感词过滤
5. 新增 百度色情图过滤
6. 更新 用户红包金额发放到充值卡余额
7. 修复 生成个人推广海报的时候 获取不到会员头像的问题
8. 修复 虚拟商品下单 选择代金券后商品总价不随代金券修改的问题
9. 优化 腾讯短信模块
10.优化 拼团功能和美化拼团页面
11.优化 快递鸟物流跟踪

授权版更新
1. 新增 手机端积分中心
2. 新增 待付款订单可预存款支付
3. 新增 下单页面显示已优惠金额
4. 新增 订单删除功能
5. 修复 分类图片不显示的问题
6. 修复 商品咨询验证码点击无法更换的问题
7. 优化 拼团功能和美化拼团页面
8. 优化 抢购活动
9. 优化 购物车页面
10.美化 商品详情页面和首页

#### V3.0.4
免费版更新
1. 修复 限时折扣活动结束后 不解除商品锁定的问题
2. 修复 公众号绑定已有账号的问题
3. 修复 会员统计-》价格分析按月查询报错
4. 修复 安装时设置数据库前缀不起效的bug
5. 优化 首页楼层二级商品分类排序
6. 优化 手机端积分记录描述和PC端不一致
 
授权版更新
1. 优化 商品详情图片点击返回键默认选择问题

#### V3.0.3
免费版更新
1. 修复 限时折扣活动结束后 不解除商品锁定的问题
2. 修复 商品详情要么 点击好评 中评 差评 不更新评论数据的问题
3. 修复 只显示一条评论的问题
4. 修复 平台后台可以添加重复名称的管理员的问题
5. 修复 后台无法恢复备份的问题
6. 修复 已退款成功的订单会出现在订单列表待评价页面
7. 修复 对比页面 对比商品的规格值不包含现有规格属性的时候出错的问题
8. 优化 验证码
9. 优化 分销功能
10.优化 商家发货通知
11.优化 登录注册页面显示
12.优化 后台 赠品 推荐合租样式
13.优化 订单打印页面印章图片位置
 

授权版更新
1. 新增 手机端赠品
2. 新增 猜你喜欢功能
3. 新增 手机端显示领取优惠券
4. 修复 手机端广告位不显示的问题
5. 修复 APP上 苹果手机无法使用微信登录的问题
6. 修复 手机端文章列表不能翻页的问题
7. 优化 手机端规格为空的提示

#### V3.0.2
免费版更新
1. 更新 上传大小限制
2. 修复 SQL注入漏洞
3. 修复 TP6.0版本小Bug
4. 修复 虚拟商品退款BUG
5. 优化 验证码刷新变5位问题

授权版更新
1. 新增 专题活动手机页
2. 更新 路由懒加载
3. 修复 详细地址地位不准确
4. 优化 界面美化
5. 优化 统一规格标签样式

#### V3.0.1
Thinkphp由TP5.0.24升级为TP6.0


#### V2.1.8
免费版更新
1. 新增 会员等级操作日志语言项
2. 新增 商品详情页面 限时折扣活动没有设置标题的默认标题
3. 新增 后台添加和编辑礼品页面  删除编辑器图片的成功提示
4. 新增 优惠套装，移除商品不会移除价格，导致新增优惠套装里面 没有商品也会添加成功，然后列表页面报错。现在移除商品方法里面添加 移除商品后更新价格。
5. 更新 支付宝SDK升级
6. 更新 支付宝优化+提现到支付宝、微信
7. 更新 后台商品分类编辑页面 类型区域新增下拉滚动条
8. 修复 使用百度地图接口不需要配置反向代理
9. 修复 商品规格显示
10.修复 微博API接口调用不了类的问题
11.修复 H5地址引用
12.修复 限时折扣 商品列表页面  商品名称带有单引号会报错 不显示商品列表的问题
13.修复 获取在售商品会获取到下架商品的BUG
14.修复 API接口 电子营业执照为空也带上默认路径的问题。
15.修复 第三方登录bug
16.修复 微博绑定nickname报错
17.修复 优惠套餐商品验证器失效的问题
18.优化 手机号注册隐藏中间四位
19.优化 微信模板放到后台消息模板里
20.优化 mbfeedback 名称规范为  feedback  新增前端意见反馈
21.优化 活动专题列表页面 图片的比例和详情页面的比例不一样，导致列表页面图片被压缩了，现和详情页同一比例
22.优化 意见反馈面包屑导航
23.优化 规范语言包
24.优化 搜索框搜索

授权版更新
1. 新增 H5支付中间页
2. 新增 手机端用户反馈
3. 新增 显示商品分销佣金
4. 新增 手机端代金券列表数据兑换所需积分数据
5. 新增 手机端商品详情页面新增显示满送活动里的赠送商品
6. 新增 会员资金相关页面  和退款页面的整合页面。
7. 更新 支付宝优化+提现到支付宝、微信
8. 修复 手机端浏览商品没有浏览记录的问题
9. 修复 用经纬度定位
10.修复 手机端购买组合BUG
11.修复 手机端领取代金券的提示语言项
12.修复 第三方登录bug
13.修复 手机验证码错误的bug
14.修复 订单预存款支付，支付密码填写错误提交后 就不会在弹出输入密码框
15.修复 商品详情库存显示
16.优化 手机端组合营销功能（优惠套餐）显示
17.优化 手机端组合营销功能（优惠套餐）显示

#### V2.1.7
免费版更新 
1. 新增 后台发送测试短信 短信错误码提示
2. 新增 淘宝导入支持JPG、PNG格式图片
3. 新增 售卖区域指定不邮寄功能
4. 更新 删除运单功能
5. 修复 手机端抽奖问题
6. 修复 快递鸟接口顺丰快递查询BUG
7. 优化 邮箱必选项
8. 优化 商品分类图片上传限制
9. 优化 一系列细节，提高用户体验

授权版更新
1. 新增 手机端商品详情骨架屏
2. 新增 手机端抢购及虚拟抢购列表
3. 更新 去除注册邮箱必填
4. 修复 手机端虚拟商品评价BUG
5. 修复 手机端点击商品规格无法切换BUG
6. 修复 IOS页面滑动卡顿BUG

#### V2.1.6
免费版更新 
1. 新增 支付宝微信退款原路返回功能
2. 新增 提现账户功能
3. 新增 会员等级折扣功能
4. 新增 虚拟拼团、虚拟代金券功能
5. 更新 去除商品分类图片上传限制
6. 修复 物流查询BUG
7. 优化 一系列细节，提高用户体验

授权版更新
1. 修复 手机端充值卡BUG
2. 修复 选择日期月份少一个月，IOS系统无法选择BUG
3. 修复 文章最后一条空白BUG
4. 修复 手机端禁止登录账户可正常登录BUG

#### V2.1.5
免费版更新 
1. 新增 实名认证功能，后台开启用户需实名认证才能购买商品。
2. 新增 单店铺门店模块，含子门店信息以及门店管理员
3. 修复 免运费功能缺陷
4. 优化 分享图片功能
5. 优化 支付方式，让显示更友好
6. 优化 一系列细节，提高用户体验
7. 优化 淘宝CSV文件的商品的导入导出

授权版更新
1. 修复 手机端不显示系统消息
2. 优化 手机端筛选功能


#### V2.1.3
免费版更新 
1. 新增 商品推荐
2. 新增 整站推荐功能
3. 新增 后台编辑店铺排序
4. 新增 套餐设置为0元时，店铺可免费使用。
5. 更新 去除订单取消时间的限制
6. 修复 管理员权限菜单bug、美化列表页
7. 修复 html过滤后商品名称过长的提示
8. 修复 店铺已关闭，店铺管理中心未有提示
9. 修复 取消订单时间限制
10.优化 导航管理
11.优化 用户中心侧边栏界面

授权版更新
1. 新增 红包、大转盘、刮刮卡、砸金蛋、生肖翻翻看等平台活动


#### V2.1.2
免费版更新 
1. 新增 初始安装环境监测openssl扩展 以及 BCMath扩展
2. 新增 部分API缓存
3. 修复 店铺导航显示问题
4. 修复 货号退款没有增加库存
5. 修复 取消微信支付报错
 
授权版更新
1. 新增 部分API缓存
2. 更新 微信分享
3. 修复 支付密码错误没提示
4. 优化 手机端详情用原图（因为压缩图显示不完整）

#### V2.1.1
免费版更新 
1. 更新 依据电商法行业规范新增单独的营业执照页
2. 修复 163邮箱乱码问题
3. 修复 用户中心通过缓存删除单条浏览记录
4. 修复 微信支付必须开启微信扫码支付
5. 修复 图片水印无法正常显示
6. 优化 PC端买家中心界面美化

授权版更新
1. 新增 手机端充值卡记录功能
2. 新增 签到赠送积分

#### V2.0.1
授权版更新（ThinkPHP+VUEJS）
1. 新增 举报商品
2. 新增 商品咨询
3. 更新 手机端使用VUEJS重构
4. 优化 用户绑定手机流程

免费版更新 
1. 新增 发票管理
2. 优化 用户绑定手机流程
3. 优化 商品界面
4. 优化 部分界面美化

#### V1.6.1
1. 新增 后台配置是否开启缓存功能
2. 新增 三级分销市场功能
3. 修复 规避重复发送短信的情况
4. 优化 验证器
5. 优化 整体代码结构

#### V1.6.0
1. 新增 后台配置是否开启缓存功能
2. 新增 三级分销市场功能
3. 修复 规避重复发送短信的情况
4. 优化 验证器
5. 优化 整体代码结构






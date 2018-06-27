/*
Navicat MySQL Data Transfer

Source Server         : bdm256143291.my3w.com_3306
Source Server Version : 50173
Source Host           : bdm256143291.my3w.com:3306
Source Database       : bdm256143291_db

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2018-03-12 20:36:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for food_advertises
-- ----------------------------
DROP TABLE IF EXISTS `food_advertises`;
CREATE TABLE `food_advertises` (
  `adid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `adtitle` varchar(255) NOT NULL,
  `adpic` varchar(255) NOT NULL,
  `adurl` varchar(255) NOT NULL,
  `adplace` char(20) NOT NULL,
  `adstarttime` int(10) NOT NULL,
  `adendtime` int(10) NOT NULL,
  PRIMARY KEY (`adid`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_advertises
-- ----------------------------
INSERT INTO `food_advertises` VALUES ('91', '拿铁', '2018-03-06/5a9e7072501bd.jpg', '133', '3', '1520265600', '1577289599');
INSERT INTO `food_advertises` VALUES ('90', '巧克力蛋糕', '2018-03-06/5a9e6b27e8b25.jpg', '125', '3', '1520265600', '1577289599');
INSERT INTO `food_advertises` VALUES ('89', '菲斯卡纳西餐自助', '2018-03-06/5a9e6862a4083.jpg', '121', '3', '1520265600', '1576684799');
INSERT INTO `food_advertises` VALUES ('88', '四川仁火锅（军工店）', '2018-03-06/5a9e6615e8b25.jpg', '116', '3', '1520265600', '1577289599');
INSERT INTO `food_advertises` VALUES ('87', '猪肉炖粉条', '2018-03-06/5a9e61162625a.jpg', '109', '3', '1520265600', '1577289599');
INSERT INTO `food_advertises` VALUES ('86', '麻团', '2018-03-06/5a9e5d68ec82e.jpg', '103', '3', '1520265600', '1577289599');
INSERT INTO `food_advertises` VALUES ('94', '早餐', '2018-03-06/5a9e762eca2dd.jpg', '100', '2', '1520265600', '1576684799');
INSERT INTO `food_advertises` VALUES ('95', '咖啡', '2018-03-06/5a9e765e89544.jpg', '135', '2', '1520265600', '1576684799');
INSERT INTO `food_advertises` VALUES ('96', '甜点', '2018-03-06/5a9e77545b8d8.jpg', '132', '2', '1520265600', '1576684799');

-- ----------------------------
-- Table structure for food_articleclasses
-- ----------------------------
DROP TABLE IF EXISTS `food_articleclasses`;
CREATE TABLE `food_articleclasses` (
  `acid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `acsort` tinyint(1) NOT NULL,
  `acname` varchar(255) NOT NULL,
  `acpath` varchar(255) NOT NULL,
  PRIMARY KEY (`acid`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_articleclasses
-- ----------------------------
INSERT INTO `food_articleclasses` VALUES ('27', '1', '新手入门1', '');
INSERT INTO `food_articleclasses` VALUES ('28', '2', '购物指南', '');
INSERT INTO `food_articleclasses` VALUES ('22', '1', '支付方式', '');
INSERT INTO `food_articleclasses` VALUES ('23', '2', '物流配送', '');
INSERT INTO `food_articleclasses` VALUES ('24', '3', '关于易迅', '');
INSERT INTO `food_articleclasses` VALUES ('26', '5', '常见问题', '');

-- ----------------------------
-- Table structure for food_articles
-- ----------------------------
DROP TABLE IF EXISTS `food_articles`;
CREATE TABLE `food_articles` (
  `aid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pacid` int(10) NOT NULL,
  `acontent` text NOT NULL,
  `atime` int(10) NOT NULL,
  `atitle` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_articles
-- ----------------------------
INSERT INTO `food_articles` VALUES ('43', '27', '<p>														</p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p>QQ号码规则</p><p><br/></p><p><br/></p><p><br/></p><p>【首部及导言】</p><p><br/></p><p style=\"text-indent:22px;\">为有效利用QQ号码资源，维护用户合法权益，特制订《QQ号码规则》（以下简称“本规则”）。请您务必审慎阅读、充分理解各条款内容，特别是免除或者限制责任的条款，以及开通或使用某项服务的单独协议，并选择接受或不接受。限制、免责条款可能以加粗形式提示您注意。					</p><p><br/></p><p style=\"text-indent:22px;\">除非您已阅读并接受本规则所有条款，否则您无权申请或使用QQ号码。您申请或使用QQ号码的行为即视为您已阅读并同意受本规则的约束。					</p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><h1>一、【规则的范围】</h1><p><br/></p><ul class=\" list-paddingleft-2\"><li><p>1.1 本规则是腾讯制定的关于获取和使用QQ号码的相关规则。本规则适用于腾讯提供的需要注册或使用QQ号码的全部软件和服务。						</p></li><li><p>1.2 本规则属于腾讯的业务规则，是<a href=\"http://www.qq.com/contract.shtml\" target=\"_blank\">《腾讯服务协议》</a>不可分割的组成部分。</p></li><li><p>1.3 您通过QQ号码使用腾讯的软件和服务时，须同时遵守各项服务的单独协议。						</p></li></ul><p><br/></p><p><br/></p><p><br/></p><h1>二、【QQ号码的性质】</h1><p><br/></p><ul class=\" list-paddingleft-2\"><li><p>\r\n						QQ号码是腾讯创设的用于识别用户身份的数字标识。<span class=\"bold\">QQ号码的所有权属于腾讯。</span></p></li></ul><p><br/></p><p><br/></p><p><br/></p><h1>三、【QQ号码的获取】</h1><p><br/></p><ul class=\" list-paddingleft-2\"><li><p>3.1 您可以通过如下方式免费或有偿申请注册QQ号码，包括但不限于：<br/>\r\n					（1）软件客户端；<br/>\r\n					（2）腾讯网站；<br/>\r\n					（3）手机短信、电话语音（IVR）；<br/>\r\n					（4）参与腾讯开展或授权开展的活动；<br/>\r\n					（5）其他腾讯授权的方式。<br/></p></li><li><p>3.2 您完成申请注册程序后，依照腾讯的业务规则获得该号码的使用权。</p></li><li><p>3.3 无论您通过何种方式获取QQ号码，均受本规则约束。						</p></li></ul><p><br/></p><p><br/></p><p><br/></p><h1>四、【用户身份信息验证】</h1><p><br/></p><ul class=\" list-paddingleft-2\"><li><p>4.1 您在申请QQ号码过程中，需要填写一些必要的信息，请保持这些信息的及时更新，以便腾讯向您提供帮助，或更好地为您提供服务。若国家法律法规有特殊规定的，您需要填写真实的身份信息。若您填写的信息不完整或不准确，则可能无法使用服务或在使用过程中受到限制。						</p></li><li><p>4.2 腾讯与用户一同致力于个人信息的保护，保护用户个人信息是腾讯的一项基本原则。未经您的同意，腾讯不会向腾讯以外的任何公司、组织和个人披露您的个人信息，但法律法规另有规定的除外。						</p></li></ul><p><br/></p><p><br/></p><p><br/></p><h1>五、【QQ号码的使用】</h1><p><br/></p><ul class=\" list-paddingleft-2\"><li><p>5.1 您可以按照腾讯的业务规则用QQ号码登录和使用腾讯提供的各种软件和服务。						</p></li><li><p>5.2 除了腾讯提供的软件和服务，您还可以用QQ号码登录使用腾讯合作伙伴的相关服务。						</p></li></ul><p><br/></p><p><br/></p><h1>六、【QQ号码的安全】</h1><p><br/></p><ul class=\" list-paddingleft-2\"><li><p>6.1 QQ密码由您自行设定。您应妥善保管您的QQ号码与密码。</p></li><li><p>6.2 腾讯与您共同负有维护QQ号码安全的责任。腾讯会采取并不断更新技术措施，努力保护您的QQ号码在服务器端的安全。</p></li><li><p>6.3 您需要采取特定措施保护您的号码安全，包括但不限于妥善保管QQ号码与密码、安装防病毒木马软件、定期更改密码等措施。						</p></li></ul><p><br/></p><p><br/></p><p><br/></p><h1>七、【QQ号码的找回】</h1><p><br/></p><ul class=\" list-paddingleft-2\"><li><p>\r\n					如果您的QQ号码被盗、密码遗忘或因其他原因导致无法正常登录，您可以按照腾讯的申诉途径进行申诉，并遵守<a href=\"http://aq.qq.com/htdocs/agreement.html\" target=\"_blank\">《QQ帐号申诉服务协议》</a>。<span class=\"bold\">腾讯并不承诺您一定能通过申诉找回QQ号码。</span></p></li></ul><p><br/></p><p><br/></p><p><br/></p><h1>八、【用户行为规范】</h1><p><br/></p><ul class=\" list-paddingleft-2\"><li><p>8.1 您不得恶意注册QQ号码。腾讯可以对恶意注册行为进行独立判断和处理。</p></li><li><p>8.2 QQ号码使用权仅属于初始申请注册人。未经腾讯许可，您不得赠与、借用、租用、转让或售卖QQ号码或者以其他方式许可非初始申请注册人使用QQ号码。</p></li><li><p>8.3 如果您当前使用的QQ号码并不是您初始申请注册的或者通过腾讯提供的其他途径获得的，但您却知悉该QQ号码当前的密码，您不得用该号码登录或进行任何操作，并请您在第一时间通知腾讯或者该号码的初始申请注册人。						 </p></li></ul><p><br/></p><p><br/></p><p><br/></p><h1>九、【责任承担】</h1><p><br/></p><ul class=\" list-paddingleft-2\"><li><p>9.1 您理解并同意，作为QQ号码的初始申请注册人和使用人，您应承担该号码项下所有活动产生的全部责任。</p></li><li><p>9.2 因腾讯原因导致您的QQ号码被盗，腾讯将依法承担相应责任。非因腾讯原因导致的，腾讯不承担任何责任。</p></li><li><p>9.3 腾讯依照业务规则限制、冻结或终止您的QQ号码使用，可能会给您造成一定的损失，该损失由您自行承担，腾讯不承担任何责任。</p></li><li><p>9.4 您不得有偿或无偿转让QQ号码，以免产生纠纷。您应当自行承担由此产生的任何责任，同时腾讯保留追究上述行为人法律责任的权利。</p></li></ul><p><br/></p><p><br/></p><p><br/></p><h1>十、【QQ号码使用的限制、冻结或终止】</h1><p><br/></p><ul class=\" list-paddingleft-2\"><li><p>10.1 如您违反法律法规、腾讯各服务协议或业务规则的规定，腾讯有权进行独立判断并随时限制、冻结或终止您对QQ号码的使用，且根据实际情况决定是否恢复使用。</p></li><li><p>10.2 如果腾讯发现您并非号码初始申请注册人，腾讯有权在未经通知的情况下终止您使用该号码。</p></li><li><p>10.3 为了充分利用QQ号码资源，如果您存在注册QQ号码后未及时进行初次登录使用，或长期未登陆使用QQ号码等情形，腾讯有权终止该号码的使用。					</p></li><li><p>10.4 腾讯按照本规则或相关法律法规，限制、冻结或终止您对QQ号码的使用，而由此给您带来的损失（包括但不限于通信中断，用户资料、邮件和游戏道具及相关数据等的清空等），由您自行承担。					</p></li></ul><p><br/></p><p><br/></p><p><br/></p><h1>十一、【客户服务】</h1><p><br/></p><ul class=\" list-paddingleft-2\"><li><p>如果您对腾讯采取的QQ号码的限制措施有异议或在使用QQ号码的过程中有其他问题的，均可联系腾讯客户服务部门（http://kf.qq.com），我们会给予您必要的帮助。					</p></li></ul><p><br/></p><p><br/></p><h1>十二、【其他】</h1><p><br/></p><ul class=\" list-paddingleft-2\"><li><p>12.1 \r\n您申请或使用QQ号码即视为您已阅读并同意受本规则的约束。腾讯有权在必要时修改本规则条款。您可以在腾讯相关页面查阅本规则的最新版本。本规则条款变更\r\n后，如果您继续使用QQ号码，即视为您已接受修改后的规则。如果您不接受修改后的规则，应当停止使用QQ号码。					</p></li><li><p>12.2 本规则内容同时包括《腾讯服务协议》等。上述内容一经正式发布，即为本规则不可分割的组成部分，您同样应当遵守。上述内容与本规则存在冲突的，以本规则为准。您对前述任何业务规则、协议的接受，即视为您对本规则全部的接受。</p></li><li><p>12.3 本规则签订地为中华人民共和国广东省深圳市南山区。					</p></li><li><p>12.4 本规则的成立、生效、履行、解释及纠纷解决，适用中华人民共和国大陆地区法律（不包括冲突法）。					</p></li><li><p>12.5 若您和腾讯之间发生任何纠纷或争议，首先应友好协商解决；协商不成的，您同意将纠纷或争议提交本规则签订地有管辖权的人民法院管辖。					</p></li><li><p>12.6 本规则所有条款的标题仅为阅读方便，本身并无实际涵义，不能作为本规则涵义解释的依据。					</p></li><li><p>12.7 本规则条款无论因何种原因部分无效或不可执行，其余条款仍有效，对双方具有约束力。（正文完）					</p></li></ul><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p>											</p>', '1517040452', '注册协议');
INSERT INTO `food_articles` VALUES ('22', '26', '<p>														</p><p><br/></p><h3>售前相关</h3><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">1</span>各种库存状态是什么意思？下单多久后可以发货？</p></li><li><p>有货 当日出货： 库存有货，下单后会尽快发货，您可以立即下单；<br/>有货 1-3日出货：商品将在内部配货，一般1-3天有货，您可立即下单；<br/>暂缺货： 商品已售完，暂不能下单购买。</p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">2</span>无货商品什么时候能到货？</p></li><li><p>无货商品的到货时间根据配货情况而不同，无法准确估计，但您可以使用“到货通知”功能，一旦商品有货，我们会通过电子邮件等方式通知您。</p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">3</span>如果我刚刚下单商品就降价了，能给我补偿吗？</p></li><li><p>易迅网的商品价格随市场价格的波动每日都会有涨价、降价或者优惠等变化。如果下完订单后价格发生了变化，请在收货前通过在线或电话的方式联系我们申请价格保护。</p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">4</span>下单后，我能做什么？</p></li><li><p>您可以进入“我的易迅”，找到您的订单，然后可随时查看订单处理状态，做好收货的准备。<br/>在您成功购物后，您还可以发表商品评价，向其他用户分享商品使用心得。</p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">5</span>为什么我无法登陆商城？</p></li><li><p>首先要检查您的用户名、密码是否正确，确认您的浏览器是否支持COOKIE。</p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">6</span>怎样咨询商品的详细信息？</p></li><li><p>请您在该商品页面下方点击“发表咨询”进行提问，相关商品管理员会为您回复。</p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">7</span>订单填写错了，如何修改？</p></li><li><p>当前易迅<a data-cke-saved-href=\"http://service.yixun.com/\" href=\"http://service.yixun.com/\">服务中心</a>提供修改订单收货地址、收货时间、修改收货发票抬头、取消订单服务。也可以拨打客服电话400-828-1878转1进行修改。</p></li></ul><p><span class=\"strong\">特别声明：以上内容由易迅网制定并保留所有的解释权和修改权。修改以网站公布为准，不做另行通知。 </span></p><p><br/></p><p><br/></p><p>											</p>', '1404218861', '售前相关');
INSERT INTO `food_articles` VALUES ('23', '26', '<p>														</p><h3>交易相关</h3><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">1</span>在线支付支持哪些银行卡，支持大额支付吗？</p></li><li><p>详见<a data-cke-saved-href=\"http://st.yixun.com/help/2-2-onlinepay.htm\" href=\"http://st.yixun.com/help/2-2-onlinepay.htm\" target=\"_blank\">付款指南</a></p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">2</span>在易迅网购物支持信用卡分期付款吗，如何申请？</p></li><li><p>易迅网目前支持招商银行的信用卡分期付款，支持分期的产品在“加入购物车按钮”的右方有分期付款的链接，您即可点击“分期付款”按钮申请分期付款，详见<a data-cke-saved-href=\"http://st.yixun.com/help/2-3-creditcard.htm\" href=\"http://st.yixun.com/help/2-3-creditcard.htm\" target=\"_blank\">分期付款说明</a></p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">3</span>在哪进行在线支付？</p></li><li><p>在易迅网首页的“会员登录”中输入用户名和密码进行登陆，登陆后点击“我的易迅”—“订单中心”—“订单管理”，点击“支付货款”后就可以进行在线支付了。</p></li></ul><p><span class=\"strong\">特别声明：以上内容由易迅网制定并保留所有的解释权和修改权。修改以网站公布为准，不做另行通知。 </span></p><p><br/></p><p>											</p>', '1404218869', '交易相关');
INSERT INTO `food_articles` VALUES ('24', '26', '<p>														</p><h3>物流相关</h3><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">1</span> 选择易迅快递，下单后何时可以收到货？</p></li><li><p>在\r\n商品有现货的情况下，上海一日三送区域地址，00:30前出库的订单，9：00—14:00安排配送；11:00前出库的订单，14:00—18:00安\r\n排配送；15:00前出库的订单，18:00-22:00安排配送；上海郊区地址，00:30前出库的订单， \r\n9:00—18:00安排配送。周日郊区不配送。<br/>其它地区用户，将根据您的收货地址及所选择的配送方式而不同，一般到货时间在2-4天（极偏远地区配送时间可能会更长一些）；<br/>如果商品处于预订状态，那么还应加上调配货时间。</p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">2</span>快递费是多少？</p></li><li><p>运费标准：易迅网上海、新疆、西藏试行满99元免运费政策，金额不足99元的订单，易迅快递将收取5元运费；其他地区满49元免运费。<a data-cke-saved-href=\"http://st.yixun.com/help/3-1-icson_delivery.htm\" href=\"http://st.yixun.com/help/3-1-icson_delivery.htm\" target=\"_blank\">查看具体详情</a></p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">3</span> 下单时可以指定送货时间吗？</p></li><li><p>我们目前只能确保会在某个时间段内送货，无法精确到具体时间点，另外，您还可以在订单备注里填写更具体的需求，我们会尽量满足您的要求。<br/>特别声明：以上内容由易迅网制定并保留所有的解释权和修改权。修改以网站公布为准，不做另行通知。</p></li></ul><p><span class=\"strong\">特别声明：以上内容由易迅网制定并保留所有的解释权和修改权。修改以网站公布为准，不做另行通知。 </span></p><p><br/></p><p>											</p>', '1404218876', '物流相关');
INSERT INTO `food_articles` VALUES ('25', '26', '<p>														</p><h3>售后相关</h3><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">1</span>易迅网所售商品都是正品行货吗？有售后保修吗？</p></li><li><p>易\r\n迅网所售商品都是正品行货，均自带机打发票。凭易迅网发票，所有商品都可以享受原厂保修或供应商提供的更换、维修和保养服务。厂家和供应商有责任履行相应\r\n责任及义务，为用户提供相应的保修、更换、维修和保养服务。易迅网将严格按照国家三包政策，针对所售商品履行保修、换货和退货的义务。当用户向厂家或供应\r\n商争取相关权益及应有服务时，易迅网会在用户需要的第一时间提供有关的联系及协调服务，协助用户维护自己应有的权益。详见 <a data-cke-saved-href=\"#\" href=\"http://st.yixun.com/help/6-4-aboutsaleafter.htm#\">保修及退货</a>。</p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">2</span>购买的商品能开发票？如果是公司购买，可以开增值税发票吗？开错发票怎么处理？</p></li><li><p>易迅网所售商品均自带机打发票，每张订单均自带中文机打的“商品专用发票”，此发票可用作单位报销凭证。 发票会随包裹一同发出，发票金额含配送费金额。 企业客户在提供《营业执照》、《税务登记证》二类证件复印件后，可向易迅开取增值税发票，开好后，发票可以随货发出。<br/>如果开错了发票，请您登录<a data-cke-saved-href=\"http://service.yixun.com/\" href=\"http://service.yixun.com/\">服务中心</a>，填写投诉建议，客服会尽快帮您处理。<br/><br/></p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">3</span>收货时发现问题可以拒收吗？</p></li><li><p>送达的商品您只需要检查包装是否完好，如果您不满意可以拒收商品； 如果您确认商品外包装没有问题可以付款后签收商品。易迅快递不提供先测试再付款收货的服务。如果您的商品在签收后发现任何质量问题，可以致电易迅网，售后服务部门会及时为您处理。</p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">4</span>产品如何保修？</p></li><li><p>易迅网销售的商品都以商品说明中的保修承诺为准，如果与国家相关规定冲突，以国家规定为准。</p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">5</span>非商品自身质量问题是否可以退货？</p></li><li><p>客户收到易迅商品起7日（含）内，在保证商品完好的前提下，可申请无理由退货。（部分商品除外，详情请见各商品细则）<br/></p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">6</span>如何将退款打回银行卡？</p></li><li><p>在线或电话联系我们登记退款方式，如是退银行卡需登记银行卡的开户行(详细到支行）、开户姓名、卡号，相关人员会为您处理，退款周期视您的货物是否发出而定，如果货物未出库发出，退款会在三个工作日内完成；如果货物已发出，则需货物返回我司物流中心后为您办理退款。</p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">7</span>商品包装问题？</p></li><li><p>我司所发送商品均由专人进行打包，商品在未签收前都由我司负责，如在收到商品时发现包装有破损或是其它方面问题，请直接致电我易迅售后服务电话，客服人员会帮您解决。</p></li></ul><p><span class=\"strong\">特别声明：以上内容由易迅网制定并保留所有的解释权和修改权。修改以网站公布为准，不做另行通知。</span></p><p><br/></p><p>											</p>', '1404218889', '售后相关');
INSERT INTO `food_articles` VALUES ('26', '26', '<p>														</p><p><br/></p><h3>沟通联系</h3><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">1</span>工作时间？</p></li><li><p>客服中心受理热线电话及订单处理时间为周一至周五9:00-0:30；周六日：9:00-18：00<br/>自提接待时间为周一至周日9：00-18：00。<br/>注：如遇国家法定节假日，则以易迅网公告发布放假时间为准，请大家届时关注。</p></li></ul><ul class=\"border_bottom_gray list-paddingleft-2\"><li><p><span class=\"num\">2</span>如果我有问题或建议是否可以通过邮件向你们反馈？</p></li><li><p>可以。易迅网客户服务中心信箱：service@yixun.com</p></li></ul><p><span class=\"strong\">特别声明：以上内容由易迅网制定并保留所有的解释权和修改权。修改以网站公布为准，不做另行通知。</span></p><p><br/></p><p><br/></p><p>											</p>', '1517040446', '沟通相关');
INSERT INTO `food_articles` VALUES ('27', '28', '<p>														</p><h3><span style=\"FONT-SIZE: 16px\">积分介绍</span></h3><h4 class=\"tit1\"><span style=\"FONT-SIZE: 14px\">积分获得（2013年4月份起实施新规则）</span></h4><p class=\"p1\">1.您在易迅网购物时，交易成功之后的24小时到3个月内，可通过商品评价功能，对所购商品进行体验评价，评价通过审核后，用户获得相应积分，高等级用户尊享高积分回馈特权，规则明细如下：</p><table class=\"table_biao cke_show_border\"><colgroup><col class=\"col1\"/><col class=\"col2\"/><col class=\"col3\"/><col class=\"col4\"/><col class=\"col5\"/><col class=\"col6\"/><col class=\"col7\"/><col class=\"col8\"/></colgroup><thead><tr class=\"firstRow\"><th>单件商品价格（元）</th><th>土星会员</th><th>铜盾会员</th><th>银盾会员</th><th>金盾会员</th><th>钻石会员</th><th>皇冠会员</th><th>易金鲸</th></tr></thead><tbody><tr><td>10-200元</td><td>3</td><td>4</td><td>7</td><td>8</td><td>10</td><td>10</td><td>10</td></tr><tr><td>201-500元</td><td>5</td><td>7</td><td>10</td><td>15</td><td>20</td><td>22</td><td>24</td></tr><tr><td>501-1000元</td><td>8</td><td>11</td><td>13</td><td>28</td><td>36</td><td>40</td><td>44</td></tr><tr><td>1001元以上</td><td>12</td><td>14</td><td>17</td><td>32</td><td>40</td><td>48</td><td>79</td></tr></tbody></table><p>2.三十天内，多次购买同款商品发表体验评论，只获得一次积分<br/>3.评论被加精可额外获得20积分奖励：<br/>4.同一个商品前5位发表体验评论的用户可以获得双倍积分；更多评论送积分规则请<a data-cke-saved-href=\"http://st.yixun.com/help/1-7-terms.htm\" href=\"http://st.yixun.com/help/1-7-terms.htm\">查看评论规则</a><br/>5.可以通过参加易迅网各类评论送积分活动，获得相应的积分奖励。</p><p>温馨提示：1.所有评价一律由系统自动赠送积分，无效评价不给分，赠品可以评价但不赠送积分；</p><p style=\"PADDING-LEFT: 60px\">2.经销商不返积分；</p><p class=\"border_bottom_gray\" style=\"PADDING-LEFT: 60px\">3.单件商品价格在10元以下（不包括10元），不赠送积分。<br/>4.您所获得的积分将在24小时内到账。</p><h4 class=\"ti2\">积分使用</h4><p class=\"p2  border_bottom_gray\">1.易迅网的一个积分可以在本站购物时抵扣0.1元，即10积分=1元；<br/>2.易迅网的所有商品均可使用积分抵扣支付；<br/>3.您选购好商品去结算时，请根据结算页面的“本单积分支付范围:XX～XXX”，将您想要支付的积分数额填写在 “您本次想支付的积分：”栏中，订单生成时会自动减少相应的支付金额；<br/>4.积分只可购买商品，交易产生的运费、保价费、手续费（网上支付）等无法使用积分支付，部分个别商品如礼品卡不支持使用积分。</p><h4 class=\"tit3\">积分查询</h4><p class=\"p3  border_bottom_gray\">您登录后，在“我的易迅”-“我的积分”中查看当前积分及积分历史记录。<br/><br/></p><h4 class=\"tit3\">积分有效期（2013 年5月份起实施新规则）</h4><p>1.2013年5月15日之后获得积分，有效期截止到第二年的当月月底。举例：您在2013年8月8日获得的一笔积分，该笔积分有效期截止到2014年8月31日。<br/>2.特殊说明：礼品卡充值的积分，有效期截止到第四年的当月月底。2013年5月15日之前获得的积分，有效期均截止到2016年5月31日。</p><p><br/></p><p class=\"p3  border_bottom_gray\"><br/></p><h4 class=\"tit4\">积分退还</h4><p class=\"p4  border_bottom_gray\">1.客户使用积分购买的商品如需退货，易迅网将按照本单现金与积分支付比例退还积分到客户帐户中。<br/>计算方法：(单品价格 / 订单总价)X购买商品时所使用的积分<br/>2.若您所购的商品中赠送积分，但是遇到退货的情况，易迅网将会在您的帐户中扣除相应的积分，退款金额不变；若您的积分不足，优先扣除积分，不足积分将换算成人民币在退款金额中扣除。（10个积分=1元）</p><h4 class=\"tit6\">注意</h4><p class=\"p6\">1.积分只可购买商品，交易产生的运费、保价费、手续费（网上支付）等无法使用积分支付；<br/>2.通过体验评论、价格举报、产品问题补偿获得的积分，以及邮费转换的积分，以上积分在购买商品中用于支付的金额，不予提供发票； 通过退货的积分、多付款转换的积分在购买商品中的抵值可以提供发票。</p><h4 class=\"tit7\">针对各个级别会员特别声明</h4><p class=\"p7\"><span class=\"strong\">* </span>会员账号禁止转借或转让他人使用，如因转借或转让他人使用所带来的一切后果，易迅网概不负责，如被易迅网发现有转借或转让使用情况，易迅网有权立即取消此会员账号的相应级别资格。<br/><span class=\"strong\">* </span>如易迅网发现相应的级别中有经销商，易迅网有权立即取消此会员帐号的相应级别资格。</p><h4 class=\"tit8\">免责声明</h4><p class=\"p8  border_bottom_gray\">本积分奖励计划由易迅网制定并保留所有的解释权和修改权。修改以网站公布为准，不做另行通知。</p><p><br/></p><p>											</p>', '1404219147', '积分介绍');
INSERT INTO `food_articles` VALUES ('28', '28', '<p>														</p><p style=\"padding: 0px; margin: 0px; font-size: 14px;\"><span style=\"font-size:12px;\"><strong>账户余额获得</strong></span></p><p>1.您在易迅网购物及退换货流程中，因为您已支付相应余额但是因为某些原因需要退回时，经您同意，易迅网会将相应的钱款退至您的账户余额。<br/>2.部分用户的帐号余额，是在原有积分中把退款补偿积分按照10积分=1元直接迁移至账户余额的。<br/>3.其它账户余额的获得通道正在建设中，敬请期待。<br/><br/></p><p><span style=\"font-size:12px;\"><strong>账户余额使用</strong></span><br/>您在易迅进行结算时，可以使用账户余额直接冲抵支付金额。<br/><br/></p><p><span style=\"font-size:12px;\"><strong>注意</strong></span><br/><span style=\"color: rgb(255, 0, 0);\">*</span> 部分用户在订单阶段或者手机等场景查询或使用账户余额时，可能账户余额与您的积分混合在一起。均按照10积分=1元结算，不会影响您的数额。<br/><span style=\"color: rgb(255, 0, 0);\">*&nbsp;</span>部分个别商品如礼品卡不支持使用积分。<br/><br/></p><p><span style=\"font-size:12px;\"><strong>免责声明</strong></span><br/>账户余额在易迅网制定并保留所有的解释权和修改权。修改以网站公布为准，不做另行通知。</p><p><br/></p><p>											</p>', '1404219159', '余额介绍');
INSERT INTO `food_articles` VALUES ('29', '28', '<p>														</p><h3>会员制介绍</h3><p style=\"text-indent:2em;\">易迅网会员制传承互联网开放、平等、自由的精神，根据会员的购物金额将会员划为土星会员、铜盾会员、银盾会员、钻石会员、皇冠会员、易金鲸7个等级，消费越高，会员级别越高，拥有会员特权越丰富！</p><p style=\"text-indent:2em;\">会员级别升级无需申请，只要您在易迅全站的实物购物金额（不含充值、票务等虚拟消费途径及易迅网特别说明的其他消费方式）达到对应的级别标准，系统为您自动升级。让您体验易迅网购物的尊贵和乐趣！</p><h4 class=\"ti2\"><br/></h4><h4 class=\"tit3\">等级与权益：</h4><table class=\"table_biao id_table_member cke_show_border\"><colgroup><col class=\"col1\"/><col class=\"col2\"/><col class=\"col3\"/></colgroup><thead><tr class=\"firstRow\"><th style=\"text-align: left;\">会员等级</th><th style=\"text-align: left;\">消费金额</th><th style=\"text-align: left;white-space:nowrap;\">会员权益</th></tr></thead><tbody><tr><td><img alt=\"\" data-cke-saved-src=\"http://img2.icson.com/IcsonPic/Fixed_Template/111.png\" src=\"http://img2.icson.com/IcsonPic/Fixed_Template/111.png\" style=\"width: 16px; height: 16px;\"/>土星会员</td><td>0-150</td><td>积分权益</td></tr><tr><td><img alt=\"\" data-cke-saved-src=\"http://img2.icson.com/IcsonPic/Fixed_Template/222.png\" src=\"http://img2.icson.com/IcsonPic/Fixed_Template/222.png\" style=\"width: 16px; height: 16px;\"/>铜盾会员</td><td>151-3000</td><td>积分加速、会员日、会员价</td></tr><tr><td><img alt=\"\" data-cke-saved-src=\"http://img2.icson.com/IcsonPic/Fixed_Template/333.png\" src=\"http://img2.icson.com/IcsonPic/Fixed_Template/333.png\" style=\"width: 16px; height: 16px;\"/>银盾会员</td><td>3001-7000</td><td>积分加速、会员日、会员价、延保优惠</td></tr><tr><td><img alt=\"\" data-cke-saved-src=\"http://img2.icson.com/IcsonPic/Fixed_Template/444.png\" src=\"http://img2.icson.com/IcsonPic/Fixed_Template/444.png\" style=\"width: 16px; height: 16px;\"/>金盾会员</td><td>7001-30000</td><td>积分加速、会员日、会员价、延保优惠</td></tr><tr><td><img alt=\"\" data-cke-saved-src=\"http://img2.icson.com/IcsonPic/Fixed_Template/555.png\" src=\"http://img2.icson.com/IcsonPic/Fixed_Template/555.png\" style=\"width: 16px; height: 16px;\"/>钻石会员</td><td>30001-60000</td><td>积分加速、会员日、会员价、延保优惠、优先发货</td></tr><tr><td><img alt=\"\" data-cke-saved-src=\"http://img2.icson.com/IcsonPic/Fixed_Template/666.png\" src=\"http://img2.icson.com/IcsonPic/Fixed_Template/666.png\" style=\"width: 16px; height: 16px;\"/>皇冠会员</td><td>60001-100000</td><td>积分加速、会员日、会员价、延保优惠、优先发货</td></tr><tr><td><img alt=\"\" data-cke-saved-src=\"http://img2.icson.com/IcsonPic/Fixed_Template/777.png\" src=\"http://img2.icson.com/IcsonPic/Fixed_Template/777.png\" style=\"width: 16px; height: 16px;\"/>易金鲸</td><td>100000以上</td><td>积分加速、会员日、会员价、延保优惠、优先发货、VIP客服</td></tr></tbody></table><p style=\"text-align:right;width:700px;\">了解您的会员权益 <a data-cke-saved-href=\"http://vip.yixun.com/\" href=\"http://vip.yixun.com/\" target=\"_blank\">会员俱乐部</a></p><h4 class=\"tit3\">会员战略合作</h4><p>QQ会员尊享易迅会员特权，只需一键激活，即可一秒变身易迅会员！<a data-cke-saved-href=\"http://vip.yixun.com/activate.html\" href=\"http://vip.yixun.com/activate.html\" target=\"_blank\">了解规则，快速激活</a></p><p><br/></p><p>											</p>', '1404219168', '会员介绍');
INSERT INTO `food_articles` VALUES ('30', '28', '<p>														</p><h3><br/></h3><h3><span style=\"font-size:14px;\">评论规则</span></h3><h4 class=\"tit1\"><br/></h4><h4 class=\"tit1\">发表评论的规则</h4><p><br/></p><p>1.您只需在易迅网有购买商品的记录即可发表对该商品的评论，评论是用户提出对商品的质量、使用情况、用后心得体验等等和商品本身息息相关的内容，而不是针对支付，配送等购物过程；<br/>2.为了让您能够在充分使用商品后分享更有价值的经验体会，在您收到商品后的24小时到3个月之内，均可对该商品发表体验评论；<br/>3.您所发表的商品评论，均需先通过易迅网的审核，才能在商品页面显示并根据商品的价格获得相应的积分；<br/>（如您发表商品评论后并未立即在页面上显示，我们会尽快审核，审核后即可显示）；<br/>4.交易成功后，发表商品评论可根据商品的价格获得相应的积分</p><p class=\"all_indent\">&nbsp;1）同一个商品前5位发表体验评论的用户可以获得双倍积分，10积分=1元；<br/>&nbsp;2）同一订单，任意相同商品仅可获得一次评论积分，如果在评论中包含一些违禁内容，或者使用非正常渠道进行评论，易迅将有权删除评论或取消相应积分；<br/>&nbsp;3）购买二手商品，发表体验评论不获得积分<br/>&nbsp;4）30天内，多次购买同款商品发表体验评论，只获得一次积分。<br/>&nbsp;5）您所获得的积分将在24小时内到账。</p><p><br/>5.易迅网对商品讨论、商品回复，限制经验值大于等于20的用户才能发起。具体请查看易迅积分说明；<br/><br/>6.为了让更多的用户能从您的评论内容中获取商品相关的信息，发表评论时，请遵守易迅网评论规则，包含以下内容的评论一经发现，将不会被审核通过，同时不会获得积分：</p><p class=\"all_indent\">&nbsp;1）违反国家法律法规以及社会道德标准；<br/>&nbsp;2）评论内容过于简单（类似于“好”、“很好”、“不错”、“拿分走人”等）或标点符号过多；<br/>&nbsp;3）评论内容没有任何参考价值或与商品本身无关；<br/>&nbsp;4）抄袭其它用户的评论或在多次发表相同内容的评论；<br/>&nbsp;5）评论或对评论的回复中出现恶意攻击或粗口等，直接删除内容，并封锁账号；<br/>&nbsp;6）涉及广告、推销、价格比较及外部网站链接，直接删除内容，并封锁账号。</p><p>温馨提醒：因系统确认收货需要一定的时间，如遇到不能评论，请耐心等待，给您带来不便，敬请原谅。</p><h4 class=\"ti2\">发表商品咨询的规则</h4><p><br/></p><p class=\"p2 \">商品咨询是易迅为您提供的疑难问答，在这里您可以与工作人员直接进行交流。因发起咨询的用户较多，可能无法及时进行回复，我们将在最快的时间内为您解答。</p><p>温馨提醒：1.您需要在“我的易迅-个人资料”里进行手机验证后，可以发布咨询；</p><p style=\"padding-left:60px;\">2.因部分生产厂商可能在未提前通知的情况下，更改产品的外包装、颜色、产地，随机更换附件及赠品等，易迅网的回复是仅在回复当时对提问者有效，其他迅友仅供参考！若由此给您带来不便，敬请谅解；</p><h4 class=\"tit3\">发表商品讨论的规则</h4><p><br/></p><p>1.您需要在“我的易迅-个人资料”里进行手机验证后，可以发表讨论，如需针对讨论信息发表回复，也需要进行手机验证；<br/>2.请遵守国家法律法规及社会道德标准，易迅网有权删除我们认为的违法和不良信息；<br/>3.不得以任何方式污蔑和攻击易迅网，如果您在购买商品的过程中出现问题，请及时联系易迅网获得帮助；<br/>4.严禁假借民族、种族、宗教、信仰、历史、性别、地域、语别、年龄、社会问题、产品喜好、收入状况、学历职称等名义实行语言攻击、谩骂、挑拨等破坏讨论气氛的言论；<br/>5.严禁发表任何意图或客观上破坏正常商品讨论气氛的言论，诸如：“进来看表演”、“路过进来看看”、“召唤xxx”、“围观xxx”或者其它会造成干扰讨论气氛的言论；<br/>6.网友讨论仅代表网友本人意见，不表明易迅网同意其观点或立场。</p><p><br/></p><p>											</p>', '1404219186', '评论规则');
INSERT INTO `food_articles` VALUES ('31', '28', '<p>														</p><h3>优惠券介绍</h3><h4 class=\"tit1\">优惠券类型</h4><p><strong>一、按照使用方式分类：</strong><br/><br/>1. 个人优惠券：通过购物返券、活动赠送等方式获得，直接赠送到用户的易迅账户中，可以在“我的易迅”——“我的优惠券”中查询；<br/>2. 公共优惠券：通过线下广告单或线上活动页面领取到的优惠码，需要用户自己保存，在购物下单页面输出优惠码使用。<br/></p><p><br/><strong>二、按适用商品范围分类：</strong><br/><br/>1. 整网优惠券<br/></p><p class=\"indent\">购买易迅网所有正价商品均可使用，特价商品除外。</p><p>2. 类别优惠券<br/></p><p class=\"indent\">购买优惠券指定类别的商品即可使用，特价商品除外。</p><p>3. 品牌优惠券<br/></p><p class=\"indent\">购买优惠券指定品牌的商品时可使用，特价商品除外。</p><p>4. 商品优惠券<br/></p><p class=\"indent\">购买优惠券指定商品时可使用。</p><p>说明：不能使用优惠券的特价商品，会在加入购物车后进行提示。</p><h4 class=\"ti2\">优惠券的获得</h4><p>1. 购物返券</p><p class=\"indent\">根据具体活动细则，购物后赠送客户优惠券，可以在 “我的易迅”—“我的优惠券” 中查询优惠券。</p><p>2. 活动赠送</p><p class=\"indent\">根据具体活动细则，直接赠送客户优惠券，可以&quot;我的易迅”—“我的优惠券”中查询优惠券。</p><p>3. 公用券</p><p class=\"indent\">过线下广告单或线上活动页面领取到优惠码，需要用户自己保存，在购物下单页面输出优惠码使用。</p><h4 class=\"tit3\">如何使用优惠券？</h4><p>1.&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"color:#ff0000;\">个人优惠券</span><br/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;如果您的易迅账户中有可使用的优惠券，在提交订单前的下单确认页面，“使用优惠券“选项下，勾选相应的优惠券即可使用；<br/>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; 如果当前易迅账户中无可使用的优惠券，订单确认页不展示优惠券信息。<br/>2.&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"color:#ff0000;\">公共优惠券</span><br/>&nbsp; &nbsp; &nbsp; &nbsp; 如果您有易迅的公共优惠券的优惠码，在提交订单页前的下单确认页面，“使用优惠券“选项下，勾选”使用优惠码“，输入相应的优惠码即可使用。<br/></p><p class=\"p3 indent  border_bottom_gray\">&nbsp;<img alt=\"\" style=\"width: 670px; height: 163px;\" data-cke-saved-src=\"http://img3.icson.com/event/2013/11/07/138379243135762300_20131107104526.jpg\" src=\"http://img3.icson.com/event/2013/11/07/138379243135762300_20131107104526.jpg\"/></p><h4 class=\"tit4\">优惠券使用细则</h4><p class=\"p4  border_bottom_gray\">1.使用优惠券之前需了解您手中的优惠券类型和使用范围（我们会在具体活动细则中说明或者您也可以在“我的易迅”—“我的优惠券”中查看）。<br/>2.一个订单只能使用一张优惠券。<br/>3.优惠券应当在有效期内使用，过期则无法使用。<br/>4.优惠券一旦使用，订单交易成功后，将无法退回。如果您取消订单，订单中所使用的优惠券将返还回个人账户，公共优惠券不予返还。<br/>5.优惠券金额大于订单金额，则差额不予退回；如优惠券金额小于订单金额，则需由客户支付差额；优惠券不能用来支付相关运费；不可兑现，且不开发票。<br/>6.使用优惠券支付的订单，退款结算按照实际支付金额退款；部分退货的订单，按照退货部分所占订单金额的比例使用优惠券，优惠券余额不予补给。<br/>7.快递货到付款的商品，如果需要部分退货，则取消该订单的优惠券待遇且优惠券将无法再次使用。<br/>8.购物返券获得的优惠券，如果发生退货且不符合购物返券活动规则，易迅网有权取消该优惠券。<br/>9.易迅网优惠券只限于供普通消费者使用，如发现有经销商使用优惠券，易迅网有权立即取消订单并做相关处理。<br/><br/></p><p class=\"p5\"><br/>易迅网在法律允许范围内拥有本规则解释权。</p><p><br/></p><p>											</p>', '1404219197', '优惠劵介绍');
INSERT INTO `food_articles` VALUES ('32', '28', '<p>														</p><h3>订单说明</h3><h4 class=\"tit1\">订单状态</h4><p class=\"p1\">在易迅网购物的过程中，您的订单分别会有<span class=\"strong\">待客服处理</span>，<span class=\"strong\">待支付</span>，<span class=\"strong\">待出库</span>，<span class=\"strong\">已出库</span>，<span class=\"strong\">客户作废</span>，<span class=\"strong\">员工作废</span>，<span class=\"strong\">系统作废</span>这七种状态，分别说明如下：</p><h4 class=\"ti2\">1.待客服处理：</h4><p class=\"p2\">易迅的审核人员即将开始审核，最迟当天（工作时间内）会审核完成，我们会尽快处理，感谢您的耐心等待。</p><h4 class=\"tit3\">2.待支付：</h4><p class=\"p3\">您选择的是在线支付、银行转帐、邮局汇款等非货到付款的支付方式来购买商品，在易迅网没有收到您的货款之前，您的订单会显示“待支付”，货款到后即可发货。</p><h4 class=\"tit4\">3.待出库：</h4><p class=\"p4\">我们已经收到您的货款（货到付款除外），并且已经通过业务人员的审核，仓库正在备货、核查、包装。</p><h4 class=\"tit5\">4.已出库：</h4><p class=\"p5\">仓库正在检货、包装、安排配送，我们会尽快发出，感谢您的耐心等待。</p><h4 class=\"tit6\">5.客户作废：</h4><p class=\"p6\">若您的订单还是“待审核”状态，您可以在“我的易迅” — “我的订单”中作废您的订单。</p><h4 class=\"tit7\">6.员工作废：</h4><p class=\"p7\">1) 您来电要求作废订单<br/>2) 由于您的订单重复、地址不详等原因，易迅员工将您的订单作废<br/>3) 由于拆单、合并订单、修改订单等原因，将原订单先作废</p><h4 class=\"tit7\">7.系统作废：</h4><p class=\"p7\">您选择在线支付的方式购买商品，但未在规定的交易时限内完成支付，系统将自动作废您的订单。</p><p><br/></p><p>逾期规则如下：<br/>a. 在线支付订单：保留6小时（即订单生成时间起6小时内仍未完成支付，系统将自动作废订单；含抢购类的商品，PC与APP在线支付保留时效为1小时、微信保留是15分钟<br/>b. 银行转账订单：保留4天(包含周末)（以订单生成时间算起，4天后如我们还未收到您的货款，系统将自动作废您的订单）<br/>c. 邮局汇款订单：保留7天(包含周末)（以订单生成时间算起，7天后如我们还未收到您的货款，系统将自动作废您的订单）<br/><br/></p><h4 class=\"tit1\">虚拟充值订单状态：</h4><h4 class=\"ti2\">1.待支付：</h4><p class=\"p2\">您的订单尚未支付，我们将为订单保留24小时。</p><h4 class=\"tit3\">2.充值中：</h4><p class=\"p3\">正在为您充值，一般1-10分钟到账；月初、月末为充值高峰期，可能会有一定的延时，敬请谅解。</p><h4 class=\"tit3\">3.充值失败退款：</h4><p class=\"p3\">如超过24小时未充值到账，我们将在3个工作日内为您办理退款！退款到账时间视各银行情况而定，一般在3-7个工作日内退款至您的帐户中。这种情况一般极少出现，您可以在网站上继续充值。</p><h4 class=\"tit3\">4.充值成功：</h4><p class=\"p3\">已经为您充值成功，希望您继续支持易迅网的手机充值业务！</p><h4 class=\"tit3\">5.已作废：</h4><p class=\"p3\">您的订单超过24小时未支付，系统将自动作废。</p><p><br/></p><p>											</p>', '1404219216', '订单说明');
INSERT INTO `food_articles` VALUES ('33', '28', '<p>														</p><h3>条款承诺</h3><h4 class=\"tit1 border_bottom\">交易条款</h4><h4>有效性</h4><p class=\"p1\">所有交易条件的条款适用于由易迅网为您提供的商品销售服务。任何对于这些条款的修正，易迅网都会即时在网站“公告”加以公布。</p><h4 class=\"ti2\">我们和您之间的契约</h4><p class=\"p2\">易迅网有权在发现了网站显现的产品及订单的明显错误或缺货的情况下，单方面撤回任何契约。(参见下面第 4 条款)。易迅网同时保留对产品订购数量的限制权。</p><h4 class=\"tit3\">定价和商品状态</h4><p class=\"p3\">产品定价和商品状态都在易迅网上每个商品后进行了注明。这些信息将随时更改且不发任何通知（我们会尽量保证信息的准确性）。如果发生了意外情况，在确认了您的订单后，商品发生了价格变化，网站会通过邮件通知您，在网站没有取消订单的情况下，让您决定是否取消订单。</p><h4 class=\"tit4\">送货</h4><p class=\"p4\">易迅网将会把商品送到您所指定的送货地址。所有在网站上列出的正常的处理时间和送货时间都为估计得出的数字，我们会尽量使实际运输时间为最短。</p><h4 class=\"tit5\">适用的法律和管辖权</h4><p class=\"p5\">您和易迅网之间的契约将适用中华人民共和国的法律，所有的争端将诉诸于易迅网注册所在地的人民法院。</p><h4 class=\"tit6\">条款的无效性及其条件</h4><p class=\"p6\">如果出于任何原因，这些条款及其条件的部分不能得以实行，其他条款及其条件的有效性将不受影响。</p><p><br/><br/></p><h4 class=\"border_bottom\">用户条款</h4><h4 class=\"tit1\">一． 服务条款的确认和接纳</h4><p class=\"p1\">本服务协议双方为上海易迅电子商务发展有限公司（下称“易迅”）与易迅网用户，本服务协议具有合同效力。<br/>本服务协议内容包括协议正文及所有易迅已经发布的或将来可能发布的各类服务条款。所有条款为协议不可分割的一部分，与协议正文具有同等法律效力。<br/>易迅网的各项服务的所有权和运作权归易迅。易迅提供的服务将完全按照其发布的服务条款和操作规则严格执行。<br/>用\r\n户在使用易迅提供的各项服务的同时，承诺接受并遵守各项相关条款的规定。易迅有权根据需要不时地制定、修改本协议或各项条款，如本协议有任何变更，易迅 \r\n将在网站上刊载公告，通知予用户。如用户不同意相关变更，必须停止使用易迅所提供的服务。经修订的协议一经在易迅网公布后，立即自动生效。各项条款会在发\r\n \r\n布后生效，亦成为本协议的一部分。登录或继续使用易迅所提供的服务将表示用户接受经修订的协议。除另行明确声明外，任何使易迅所提供的服务的范围扩大或功\r\n 能增强的新内容均受本协议约束。<br/>用户确认本服务协议后，本服务协议即在用户和易迅之间产生法律效力。请用户务必在注册之前认真阅读全部服务协议内容，如有任何疑问，可向易迅咨询。<br/>无论用户事实上是否在注册之前认真阅读了本服务协议，只要用户点击协议正本下方的“确认”按钮并按照易迅注册程序成功注册为用户，用户的行为仍然表示其同意并签署了本服务协议。<br/>用户确认：本协议条款是处理双方权利义务的当然约定依据，除非违反国家强制性法律，否则始终有效。在下订单的同时，用户也同时承认了用户拥有购买这些产品的权利能力和行为能力，并且对用户在订单中提供的所有信息的真实性负责。<br/>用户确认：易迅网中积分制度、优惠券仅适用普通消费者。如易迅确认非普通消费者在易迅购买商品并获得积分、优惠券的，易迅有权予以撤销。</p><h4 class=\"tit2\">二． 服务简介</h4><p class=\"p2\">易迅运用自己的操作系统通过国际互联网络为用户提供网络服务。同时，用户必须：<br/>(1)自行配备上网的所需设备，包括个人电脑、调制解调器或其它必备上网装置。<br/>(2)自行负担个人上网所支付的与此服务有关的电话费用、网络费用。<br/>基于易迅所提供的网络服务的重要性，用户应同意：<br/>(1)提供详尽、准确的个人资料。<br/>(2)不断更新注册资料，符合及时、详尽、准确的要求。<br/>易迅不公开用户的姓名、地址、电子邮箱和笔名， 除以下情况外：<br/>(1)用户授权易迅透露这些信息。<br/>(2)相应的法律及程序要求易迅提供用户的个人资料。<br/>如果用户提供的资料包含有不正确的信息，易迅保留结束用户使用网络服务资格的权利。</p><h4 class=\"tit3\">三． 订单</h4><p class=\"p3\">(1)\r\n除法律强制规定外，双方约定如下：易迅网上易迅展示的商品和价格等信息仅仅是要约邀请，用户下单时须填写希望购买的商品数量、价款及支付方式、收货 \r\n人、联系方式、收货地址（合同履行地点）、合同履行方式等信息内容；系统生成的订单信息是计算机信息系统根据用户填写的内容自动生成的数据，仅是用户向易\r\n \r\n迅提交的订货单，该订货单视为合同要约；易迅收到用户的订单信息后，将根据实际库存等客观情况进行确认，易迅将用户在订单中订购的商品从仓库实际直接向用\r\n 户发出（ 以快递实际配送为准），方视为易迅接受订单的标志。如未接受订单，易迅网不受用户订单的任何约束。<br/>(2)如果用户在一份订单里订购了多款商品并且易迅只给用户发出了部分商品时，用户与易迅之间仅就实际出库的商品建立了合同关系。用户可以随时登陆账户，查询用户的订单状态。<br/>(3)由于市场变化及各种以合理商业努力难以控制的因素的影响，本站无法保证用户提交的订单信息中希望购买的商品都会有货；如用户拟购买的商品，发生缺货，用户有权取消订单。</p><h4 class=\"tit4\">四． 送货及费用</h4><p class=\"p4\">易迅将会把产品送到用户所指定的送货地址。所有在易迅网上列出的送货时间为参考时间，参考时间的计算是根据库存状况、正常的处理过程和送货时间、送货地点的基础上估计得出的。送货费用根据用户选择的配送方式的不同而异。<br/>请清楚准确地填写用户的真实姓名、送货地址及联系方式。因如下情况造成订单延迟或无法配送等，易迅将不承担责任：<br/>(1)客户提供错误信息和不详细的地址；<br/>(2)货物送达无人签收，由此造成的重复配送所产生的费用及相关的后果。<br/>(3)不可抗力，例如：自然灾害、交通戒严、突发战争等。</p><h4 class=\"tit5\">五． 用户隐私制度</h4><p class=\"p5\">1.尊重用户个人隐私是易迅的一项基本政策。易迅一定不会在未经合法用户授权时公开、编辑或透露其注册资料及保存在易迅网中的非公开内容，除非有法律许可要求或易迅在诚信的基础上认为透露这些信件在以下四种情况是必要的：<br/>(1)遵守有关法律规定，遵从易迅合法服务程序。<br/>(2)保持维护易迅的商标所有权。<br/>(3)在紧急情况下竭力维护用户个人和社会大众的隐私安全。<br/>(4)符合其它相关的要求。<br/>2.用户的帐号，密码和安全性<br/>用\r\n户一旦注册成功，成为易迅网的合法用户，将得到一个密码和用户名。用户可随时根据指示改变用户的密码。用户将对用户名和密码安全负全部责任。另外，每个 \r\n用户都要对以其用户名进行的所有活动和事件负全责。用户若发现任何非法使用用户帐号或存在安全漏洞的情况，请立即通告易迅。</p><h4 class=\"tit6\">六． 拒绝提供担保</h4><p class=\"p6\">用\r\n户个人对网络服务的使用承担风险。易迅对此不作任何类型的担保，不论是明确的或隐含的，但是不对商业性的隐含 \r\n担保、特定目的和不违反规定的适当担保作限制。易迅不担保服务一定能满足用户的要求，也不担保服务不会受中断，对服务的及时性，安全性，出错发生都不作担\r\n 保。易迅对在易迅网上得到的任何商品购物服务或交易进程，不作担保。</p><h4 class=\"tit7\">七． 有限责任</h4><p class=\"p7\">易迅对任何直接、间接、偶然、特殊及继起的损害不负责任，这些损害可能来自：不正当使用网络服务，在网上购买商品或进行同类型服务，在网上进行交易，非法使用网络服务或用户传送的信息有所变动。这些行为都有可能会导致易迅的形象受损，所以易迅事先提出这种损害的可能性。</p><h4 class=\"tit7\">八． 对用户信息的存储和限制</h4><p class=\"p7\">易迅不对用户所发布信息的删除或储存失败负责。易迅有判定用户的行为是否符合易迅服务条款的要求和精神的保留权利，如果用户违背了服务条款的规定，易迅有中断对其提供网络服务的权利。</p><h4 class=\"tit7\">九． 用户管理</h4><p class=\"p7\">用户单独承担发布内容的责任。用户对服务的使用是根据所有适用于易迅的国家法律、地方法律和国际法律标准的。用户必须遵循：<br/>(1)从中国境内向外传输技术性资料时必须符合中国有关法规。<br/>(2)使用网络服务不作非法用途。<br/>(3)不干扰或混乱网络服务。<br/>(4)遵守所有使用网络服务的网络协议、规定、程序和惯例。<br/>用\r\n户须承诺不传输任何非法的、骚扰性的、中伤他人的、辱骂性的、恐吓性的、伤害性的、庸俗的，淫秽等信息资料。另外，用户也不能传输何教唆他人构成犯罪行 \r\n为的资料；不能传输助长国内不利条件和涉及国家安全的资料；不能传输任何不符合当地法规、国家法律和国际法律的资料。未经许可而非法进入其它电脑系统是禁\r\n 止的。<br/>若用户的行为不符合以上提到的服务条款，易迅将作出独立判断立即取消用户服务帐号。用户需对自己在网上的行为承担法律责任。用户若在易迅网上散布和传播反动、色情或其它违反国家法律的信息，易迅网的系统记录有可能作为用户违反法律的证据。</p><h4 class=\"tit7\">十． 保障用户</h4><p class=\"p7\">易迅同意保障和维护易迅全体成员的利益，负责支付违反服务条款的损害补偿费用等。</p><h4 class=\"tit7\">十一． 结束服务</h4><p class=\"p7\">用户或易迅可随时根据实际情况中断一项或多项网络服务。易迅不需对任何个人或第三方负责而随时中断服务。用户对后来的条款修改有异议，或对易迅的服务不满，可以行使如下权利：<br/>(1)停止使用易迅的网络服务。<br/>(2)通告易迅停止对该用户的服务。<br/>结束用户服务后，用户使用网络服务的权利马上中止。从那时起，用户有权利，易迅也没有义务传送任何未处理的信息或未完成的服务给户或第三方。</p><h4 class=\"tit7\">十二． 通告</h4><p class=\"p7\">所有发给用户的通告都可通过重要页面的公告或电子邮件或常规的信件传送。用户协议条款的修改、服务变更、或其它重要事件的通告都会以此形式进行。</p><h4 class=\"tit7\">十三． 参与广告策划</h4><p class=\"p7\">用\r\n户在他们发表的信息中加入宣传资料或参与广告策划，在易迅网的免费服务上展示他们的产品，任何这类促销方法， \r\n包括运输货物、付款、服务、商业条件、担保及与广告有关的描述都只是在相应的用户和广告销售商之间发生。易迅不承担任何责任，易迅没有义务为这类广告销售\r\n 负任何一部分的责任。</p><h4 class=\"tit7\">十四． 网络服务内容的所有权</h4><p class=\"p7\">易迅定义的网络\r\n服务内容包括：文字、软件、声音、图片、录象、图表、广告中的全部内容；电子邮件的全部内容；易 \r\n迅为用户提供的其它信息。所有这些内容受版权、商标、标签和其它财产所有权法律的保护。所以，用户只能在易迅和广告商授权下才能使用这些内容，而不能擅自\r\n \r\n复制、再造这些内容、或创造与内容有关的派生产品。易迅所有的文章版权归原文作者和易迅共同所有，任何人需要转载易迅网的文章，必须征得原文作者或易迅授\r\n 权。</p><h4 class=\"tit7\">十五． 责任限制</h4><p class=\"p7\">如因不可抗力或其它易迅无法控制的原因使易迅销售系统崩溃或无法正常使用导致网上交易无法完成或丢失有关的信息、记录等，易迅不承担责任。但是易迅会尽可能合理地协助处理善后事宜，并努力使客户免受经济损失。<br/>除\r\n了易迅的使用条件中规定的其它限制和除外情况之外，在中国法律法规所允许的限度内，对于因交易而引起的或与之有关的任何直接的、间接的、特殊的、附带 \r\n的、后果性的或惩罚性的损害，或任何其它性质的损害，易迅、易迅的董事、管理人员、雇员、代理或其它代表在任何情况下都不承担责任。易迅的全部责任，不论\r\n 是合同、保证、侵权(包括过失)项下的还是其它的责任，均不超过用户所购买的与该索赔有关的商品价值额。</p><h4 class=\"tit7\">十六． 法律管辖和适用</h4><p class=\"p7\">本协议的订立、执行和解释及争议的解决均应适用中国法律。<br/>如发生易迅服务条款与中国法律相抵触时，则这些条款将完全按法律规定重新解释，而其它合法条款则依旧保持对用户产生法律效力和影响。<br/>本协议的规定是可分割的，如本协议任何规定被裁定为无效或不可执行，该规定可被删除而其余条款应予以执行。<br/>如双方就本协议内容或其执行发生任何争议，双方应尽力友好协商解决；协商不成时，任何一方均可向易迅所在地的人民法院提起诉讼。</p><p><br/></p><p>											</p>', '1404219226', '条款承诺');
INSERT INTO `food_articles` VALUES ('34', '22', '<p>														</p><h3>货到付款</h3><ul class=\" list-paddingleft-2\"><li><p>货到付款是商品送到您指定的收货地址后，由收货人支付货款给易迅快递人员。</p><p style=\"PADDING-LEFT: 60px\"><span style=\"FLOAT: left; MARGIN-LEFT: -60px\">温馨提示：</span>1.送达的商品您只需要检查包装是否完好，若您确认商品外包装没有问题可以付款后签收商品，若产品外包装破损请直接拒收，产品破损或者缺少附件请在收货后24小时内联系我们，否则无法判定；</p><p style=\"PADDING-LEFT: 60px\">2.易迅快递不提供先测试再付款收货的服务，因为测试需要一段等待时间，可能会耽误其他客人的商品配送，请您谅解；</p><p style=\"PADDING-LEFT: 60px\">3.如果您的商品在签收后发现任何质量问题，都可以致电易迅网，售后部门会为您服务处理。</p></li></ul><p><br/></p><p>											</p>', '1404216424', '货到付款');
INSERT INTO `food_articles` VALUES ('35', '22', '&lt;h3&gt;在线支付&lt;/h3&gt;&lt;p&gt;易迅网为您提供的网上支付方式有中国银行，中国工商银行，中国农业银行，招商银行，中国建设银行，交通银行，广东发展银行，浦发银行，中信银行，兴业银行，上海银行，中国民生银行，中国光大银行，深圳发展银行，支付宝、财付通、快钱。&lt;br/&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong class=&quot;color_black&quot;&gt;温馨提醒：&lt;/strong&gt;1.目前各银行对于网上支付均有卡种、金额的限制，因各银行政策不同，建议您在申请网上支付功能时向银行咨询相关事宜；&lt;/p&gt;&lt;p style=&quot;text-indent:60px;&quot;&gt;2.上海地区用户还支持新华一城卡（手续费：2%）、环迅IPS;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p class=&quot;bold&quot;&gt;银行卡在线支付详情介绍：&lt;/p&gt;&lt;table class=&quot;cke_show_border&quot;&gt;&lt;thead&gt;&lt;tr class=&quot;firstRow&quot;&gt;&lt;td class=&quot;td_bg&quot; colspan=&quot;2&quot;&gt;银行名称&lt;/td&gt;&lt;td class=&quot;td_bg&quot;&gt;支持卡种和限额&lt;/td&gt;&lt;td class=&quot;td_bg&quot;&gt;服务热线&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot;&gt;&lt;img alt=&quot;中国银行&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/bank_china.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/81541404216624.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;中国银行&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211562&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211562&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;95566&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot;&gt;&lt;img alt=&quot;中国工商银行&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/bank_icbc.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/92051404216624.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;中国工商银行&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211546&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211546&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;95588&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot;&gt;&lt;img alt=&quot;中国农业银行&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/bank_abc.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/67691404216624.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;中国农业银行&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211552&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211552&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;95599&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot;&gt;&lt;img alt=&quot;招商银行&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/bank_cmb.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/48151404216624.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;招商银行&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211576&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211576&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;95555&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot;&gt;&lt;img alt=&quot;中国建设银行&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/bank_ccb.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/35431404216624.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;中国建设银行&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211567&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211567&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;95533&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot;&gt;&lt;img alt=&quot;交通银行&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/bank_com.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/22751404216625.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;交通银行&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211574&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211574&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;95559&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot;&gt;&lt;img alt=&quot;广东发展银行&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/bank_guangdong.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/45311404216625.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;广东发展银行&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211636&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211636&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;400-830-8003&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot;&gt;&lt;img alt=&quot;浦发银行&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/bank_spd.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/15471404216625.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;浦发银行&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211623&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211623&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;95528&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot;&gt;&lt;img alt=&quot;中信银行&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/bank_citic.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/54761404216625.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;中信银行&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211616&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211616&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;95558&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot;&gt;&lt;img alt=&quot;兴业银行&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/bank_cib.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/85291404216625.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;兴业银行&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211645&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211645&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;95561&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot;&gt;&lt;img alt=&quot;上海银行&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/bank_shanghai.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/93061404216625.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;上海银行&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=212752&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=212752&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;021-962888&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot;&gt;&lt;img alt=&quot;中国民生银行&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/bank_cmbc.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/25571404216625.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;中国民生银行&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211604&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211604&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;95568&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot;&gt;&lt;img alt=&quot;中国光大银行&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/bank_ceb.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/36391404216626.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;中国光大银行&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211618&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211618&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;95595&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot;&gt;&lt;img alt=&quot;深圳发展银行&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/bank_shenzhen.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/39041404216626.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;深圳发展银行&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211649&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211649&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;95501&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p class=&quot;bold&quot;&gt;支付平台详情介绍：&lt;/p&gt;&lt;table class=&quot;platform cke_show_border&quot;&gt;&lt;thead&gt;&lt;tr class=&quot;firstRow&quot;&gt;&lt;td class=&quot;td_bg&quot; colspan=&quot;2&quot;&gt;银行名称&lt;/td&gt;&lt;td class=&quot;td_bg&quot;&gt;支持银行卡种&lt;/td&gt;&lt;td class=&quot;td_bg&quot;&gt;服务热线&lt;/td&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot; align=&quot;center&quot; valign=&quot;middle&quot;&gt;&lt;img alt=&quot;财付通支付&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/tenpay.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/82791404216626.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;财付通支付&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.tenpay.com/cgi-bin/helpcenter/help_center.cgi?id=89541&quot; href=&quot;http://help.tenpay.com/cgi-bin/helpcenter/help_center.cgi?id=89541&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;0755-86013860&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot; align=&quot;center&quot; valign=&quot;middle&quot;&gt;&lt;img alt=&quot;支付宝即时到账&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/alipay.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/12811404216626.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;支付宝即时到账&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211661&quot; href=&quot;http://help.alipay.com/lab/help_detail.htm?help_id=211661&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;0571-88156688&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot; align=&quot;center&quot; valign=&quot;middle&quot;&gt;&lt;img alt=&quot;快钱支付&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/99bill.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/27191404216626.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;快钱支付&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://club.99bill.com/viewthread.php?tid=44547&quot; href=&quot;http://club.99bill.com/viewthread.php?tid=44547&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;021-58776399&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td class=&quot;td0&quot; align=&quot;center&quot; valign=&quot;middle&quot;&gt;&lt;img alt=&quot;环迅支付IPS（仅限上海地区）&quot; data-cke-saved-src=&quot;http://st.yixun.com/static_v1/img/help/pic/ips.jpg&quot; src=&quot;/Public/admin/js/ueditor/php/upload/93371404216626.jpg&quot; align=&quot;absmiddle&quot;/&gt;&lt;/td&gt;&lt;td class=&quot;td1&quot;&gt;环迅支付IPS&lt;br/&gt;（仅限上海地区）&lt;/td&gt;&lt;td class=&quot;td2&quot;&gt;&lt;a data-cke-saved-href=&quot;http://main.ips.com.cn/Service/PDetail.aspx?id=10454&amp;amp;pid=0&amp;amp;cid=0&quot; href=&quot;http://main.ips.com.cn/Service/PDetail.aspx?id=10454&amp;pid=0&amp;cid=0&quot; target=&quot;_blank&quot;&gt;点击查看&lt;/a&gt;&lt;/td&gt;&lt;td class=&quot;td3&quot;&gt;021-34019501&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1404216629', '在线支付');
INSERT INTO `food_articles` VALUES ('36', '22', '&lt;h3 style=&quot;padding: 0px; margin: 0px; font-size: 14px; &quot;&gt;发票说明&lt;/h3&gt;&lt;p&gt;尊敬的顾客，您在易迅购物后都会收到我们开具的正规发票，请您仔细阅读本须知。&lt;/p&gt;&lt;p&gt;&lt;strong&gt;一、发票的开具&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;1. 开具发票的金额以实际支付的金额为准。&lt;/p&gt;&lt;p&gt;2. 易迅网提供的发票种类有“普通发票”和“增值税专用发票”两种。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;二、普通发票&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;1. 个人及不具有一般纳税人资格的企业客户，均开具普通发票。&lt;/p&gt;&lt;p&gt;2. 开具普通发票时，抬头默认为收货人“个人姓名”，请需要更改抬头的客户在修改信息中进行修改。&lt;/p&gt;&lt;p&gt;3. 普通发票信息与您输入的信息一致的情况下，发票一经开出，恕不退换。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;三、增值税专用发票&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;1.请需要开具增值税专用发票的客户一定要勾选“增值税专用发票”，否则系统将默认开具普通发票。&lt;/p&gt;&lt;p&gt;2.\r\n为了正确的使用增值税专用发票，请您将一般纳税人资格证明的复印件（营业执照、税务登记证等）写上您的用户名，深圳仓服务省份（广东、福建、江西、海南、\r\n云南、广西、新疆、西藏）的用户传真至0514-82930139，其他省份下单的用户传真至021-61831107。&lt;/p&gt;&lt;p&gt;3.为使客户能及时有效地使用增值税专用发票，请详细填写公司名称、地址、电话、税号、开户银行和帐号，并注意所填的内容须与纳税信息一致。&lt;/p&gt;&lt;p&gt;公司名称必须为工商注册登记的名称。&lt;/p&gt;&lt;p&gt;公司的地址和电话是您开票信息上的地址和电话。&lt;/p&gt;&lt;p&gt;税务登记号是您公司《税务登记证》的编号，一般为15位，请仔细核对后输入。&lt;/p&gt;&lt;p&gt;开户银行名称与银行帐号两者必须都要填写，缺一不可。&lt;/p&gt;&lt;p&gt;根据您输入的信息开具增值税专用发票，如影响认证抵扣，易迅网不会受理重新开具增值税专用发票的要求，请务必认真校对开票信息。&lt;/p&gt;&lt;p&gt;4.\r\n根据《 \r\n国家税务总局关于修订增值税专用发票使用规定的补充通知》（国税发[2007]18号）第一条第三项规定：“因开票有误购买方拒收专用发票的，销售方须在\r\n专用发票认证期限内向主管税务机关填报申请单，并在申请单上填写具体原因以及相对应蓝字专用发票的信息，同时提供由购买方出具的写明拒收理由、错误具体项\r\n目以及正确内容的书面材料，主管税务机关审核确认后出具通知单。销售方凭通知单开具红字专用发票。”&lt;/p&gt;&lt;p&gt;5.根据国家税务总局增值税发票管理规定，商业企业一边纳税人零售的烟、酒、食品、服装、鞋帽（不包含劳保专用部分）、化妆品等消费品不得开具专用发票（国税【2006】156号 ）。 &amp;nbsp;因此，采购包含上述不得开具专用发票的产品订单，将不能取得增值税专用发票。&lt;/p&gt;&lt;p&gt;资料：&lt;/p&gt;&lt;p&gt;1）开具红字发票申请单（敲好章）&lt;/p&gt;&lt;p&gt;2）税务登记证副本&lt;/p&gt;&lt;p&gt;3）发票&lt;/p&gt;&lt;p&gt;4）拒收证明&lt;/p&gt;&lt;p&gt;5）经办人身份证&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;温馨提示：&lt;/p&gt;&lt;p&gt;一个订单不能选择多种发票类型。&lt;/p&gt;&lt;p&gt;如果您对以上开票信息有任何疑义，可咨询您公司的财务人员。&lt;/p&gt;&lt;p&gt;如果您在收到货物时请检查发票，并在送货签收单上签字，一旦签字即代表您已收到发票，并且发票无误。&lt;/p&gt;&lt;p&gt;如果您在收到货物时未收到发票，请您在送货签收单上注明无发票，并及时与我们的客服人员联系，我们会尽快处理。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;四、发票的退换&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;1.如果您收到的发票与您输入的开票信息、订单信息不一致，请先联系我们的客服人员，我们会以最快的速度为你更换正确的发票。&lt;/p&gt;&lt;p&gt;2.未经易迅客服人员的允许，财务部门将不接受电话、传真、邮件、邮寄等形式的重开发票申请，如您擅自将发票寄到我公司的任一办公地址，在寄送过程中发生的发票遗失、缺失等情况，恕我们概不负责。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;五、电子发票&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;根据《中华人民共和国发票管理办法》（国务院令第587号）和《网络发票管理办法》（国家税务总局令第30号）相关规定，经研究决定，自2013年12月28日起，在上海市开展电子发票应用试点。现将有关事项公告如下：&lt;/p&gt;&lt;p&gt;　　一、本公告所称电子发票是指在购销商品、提供或者接受服务以及从事其他经营活动中，开具、收取的以电子方式存储的收付款凭证。&lt;/p&gt;&lt;p&gt;　　二、电子发票应用试点范围，限于经上海市商务委员会确认的在上海市注册登记并由上海市国家税务局确认上线运行电子发票系统的电子商务企业，在其自营电子商务平台面向个人销售商品时开具；待相关条件成熟后，可向在上海市注册登记的企业销售商品时开具。&lt;/p&gt;&lt;p&gt;　　三、电子发票的业务和技术标准由税务机关统一制订。试点企业通过上海市国家税务局电子发票系统办理电子发票开户登记、在线生成、发票开具、数据传输等事项。&lt;/p&gt;&lt;p&gt;　　四、电子发票应按照规定的时限、顺序、栏目如实完整开具，并按照税务机关的规定保存、报送。&lt;/p&gt;&lt;p&gt;　　五、试点开具的电子发票与纸质发票在财务会计、消费者权益保护等方面具有同等效力。&lt;/p&gt;&lt;p&gt;　　六、试点企业应确保电子发票信息的真实性、完整性，不得篡改、删除、伪造。&lt;/p&gt;&lt;p&gt;　　七、电子发票的信息可以在上海市国家税务局网站或授权的其他网站进行查询验证。取得电子发票的单位和个人，应及时查询验证电子发票信息的真实性、完整性，对不符合规定的电子发票，任何单位和个人有权拒收。&lt;/p&gt;&lt;p&gt;　　八、电子发票开具后，如发生开票错误、销货退回或销售折让等，应开具红字电子发票。开具红字电子发票后，在上海市国家税务局网站或授权的其他网站查询对应的原电子发票信息时，查询结果包括开具金额为负数的红字电子发票的内容。&lt;/p&gt;&lt;p&gt;　　九、任何单位和个人不得虚开、伪造、变造电子发票或从事其它发票违法活动；不得通过红冲电子发票等手段牟取非法利益。违反相关规定的，按照《中华人民共和国发票管理办法》有关规定处理。&lt;/p&gt;&lt;p&gt;　　本公告自2013年12月28日起施行。&lt;/p&gt;&lt;p&gt;谢谢您的配合，祝您购物愉快！&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1404216841', '发票说明');
INSERT INTO `food_articles` VALUES ('37', '23', '&lt;h3&gt;物流配送查询&lt;/h3&gt;&lt;p class=&quot;t&quot; style=&quot;FLOAT: left&quot;&gt;根据收货地址与购买商品，您可享有对应的闪电送服务，具体请查看所购商品的详情页与订单提交页&lt;/p&gt;&lt;h4 class=&quot;tit&quot;&gt;配送时间：&lt;/h4&gt;&lt;table class=&quot;table_biao table_time cke_show_border&quot;&gt;&lt;colgroup&gt;&lt;col class=&quot;col1&quot;/&gt;&lt;col class=&quot;col2&quot;/&gt;&lt;col class=&quot;col3&quot;/&gt;&lt;/colgroup&gt;&lt;thead&gt;&lt;tr class=&quot;firstRow&quot;&gt;&lt;th&gt;易迅快递&lt;/th&gt;&lt;th&gt;下单时间&lt;/th&gt;&lt;th&gt;送达时间&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td rowspan=&quot;3&quot;&gt;&lt;p class=&quot;icon&quot;&gt;&lt;span class=&quot;icon_ps icon_day_3&quot;&gt;一日三送&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;&lt;td&gt;当日00:30 - 当日11:00&lt;/td&gt;&lt;td&gt;当日14:00 - 当日18:00&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;当日11:00 - 当日15:00&lt;/td&gt;&lt;td&gt;当日18:00 - 当日22:00&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;当日15:00 - 次日00:30&lt;/td&gt;&lt;td&gt;次日09:00 - 次日14:00&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td rowspan=&quot;2&quot;&gt;&lt;p class=&quot;icon&quot;&gt;&lt;span class=&quot;icon_ps icon_day_2&quot;&gt;一日二送&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;&lt;td&gt;当日00:30 - 当日11:00&lt;/td&gt;&lt;td&gt;当日14:00 - 当日18:00&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;当日11:00 - 次日00:30&lt;/td&gt;&lt;td&gt;次日09:00 - 次日14:00&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;&lt;p class=&quot;icon&quot;&gt;&lt;span class=&quot;icon_ps icon_day_1&quot;&gt;一日一送&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;&lt;td&gt;当日00:00 - 当日24:00&lt;/td&gt;&lt;td&gt;次日09:00 - 次日18:00&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;&lt;p class=&quot;icon&quot;&gt;&lt;span class=&quot;icon_ps icon_day_0&quot;&gt;隔日送&lt;/span&gt;&lt;/p&gt;&lt;/td&gt;&lt;td&gt;当日00:00 - 当日24:00&lt;/td&gt;&lt;td&gt;第三日09:00 - 第三日18:00&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;br/&gt;&lt;strong&gt;运费标准：上海、新疆、西藏&lt;/strong&gt;满99元免运费，金额不足99元的订单，易迅快递将收取5元运费；&lt;br/&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;其他地区满49元免运费，金额不足49元的订单，易迅将收取5元运费。&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p class=&quot;c_tx5&quot;&gt;&lt;br/&gt;&lt;strong&gt;特殊说明：&lt;/strong&gt;超重或者尺寸超大商品，只能支持一日一送，此类商品的送货时间可能会有所延迟，请不要着急，我们的客服人员会与您联系!易迅快递暂不提供指定时间送货服务，比如指定下午3点送到的 服务要求目前无法提供，请谅解。&lt;/p&gt;&lt;h4 class=&quot;tit&quot;&gt;收货提醒：&lt;/h4&gt;&lt;p&gt;1、签收货物时请您当场仔细检查发票及货品与送货单是否一致，确认无误后签收；如果发现商品有外观问题或数量/型号不符等，请于配送人员还在现场时与易迅客服4008281878联系；&lt;/p&gt;&lt;p&gt;2、如您已签收或由他人代为签收，则视为商品外观、商品数量及型号等无误，货物签收后易迅网将无法受理此类问题；&lt;/p&gt;&lt;p&gt;3、需专业人员开箱验视的产品，如冰箱、彩电、空调等（具体以易迅网商品详情页面介绍为准），仅需检验外包装的完整性，请勿私自拆箱，否则出现问题将无法受理；&lt;/p&gt;&lt;p&gt;4、电子类商品如笔记本、手机、相机等，请您在确认外观无损的情况下开机试用，如开机试用后，发现外观问题将无法受理。&amp;nbsp;&lt;/p&gt;&lt;p&gt;5、易迅快递不提供先测试再付款收货的服务，因为测试需要一段等待时间，可能会耽误其他客人的商品配送，请您谅解；&lt;/p&gt;&lt;p&gt;6、如果您的商品在签收后发现任何质量方面的问题，都可申请退换货或返修，详见&lt;a data-cke-saved-href=&quot;http://st.yixun.com/help/4-2-exchange.htm&quot; href=&quot;http://st.yixun.com/help/4-2-exchange.htm&quot;&gt;退换货说明&amp;gt;&amp;gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1404217045', '易迅快递');
INSERT INTO `food_articles` VALUES ('38', '23', '&lt;h3&gt;普通快递&lt;/h3&gt;&lt;p&gt;易迅网目前除了提供本身自营的快递服务之外，还提供更多样的配送方式，适合更多地区的配送服务，目前提供圆通快递、邮政EMS特快专递等。&lt;br/&gt;&amp;nbsp;&amp;nbsp;&lt;br/&gt;&lt;strong&gt;圆通快递&lt;/strong&gt;&lt;br/&gt;&lt;br/&gt;&lt;strong&gt;1、邮寄说明&lt;/strong&gt;&lt;br/&gt;&lt;br/&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;strong&gt;快件查询方式：&lt;/strong&gt;圆通官网 &lt;a data-cke-saved-href=&quot;http://www.yto.net.cn&quot; href=&quot;http://www.yto.net.cn&quot;&gt;www.yto.net.cn&lt;/a&gt;&lt;br/&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;strong&gt;配送时效说明：&lt;/strong&gt;鉴\r\n于圆通快递在全国各地承诺超配送范围与全国行政区划分有较大差异，以及圆通会对其配送范围内进行不定期调整，我们目前无法实现准确定位。如果您不确定自己\r\n所在区域是否处于圆通承诺配送范围之内，请在下单前至圆通官网查询或致电当地圆通分部确认。对于因上述原因造成超无法送达，易迅网不承担法律责任，但我们\r\n会尽力协助您解决问题。&amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;br/&gt;&lt;br/&gt;&lt;/p&gt;&lt;h4 class=&quot;tit&quot;&gt;2、资费标准（易迅网优惠）&lt;/h4&gt;&lt;table class=&quot;table_biao cke_show_border&quot;&gt;&lt;thead&gt;&lt;tr class=&quot;firstRow&quot;&gt;&lt;th&gt;收货地址所在省市&lt;/th&gt;&lt;th&gt;免邮额度&lt;/th&gt;&lt;th&gt;备注&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td&gt;上海、新疆、西藏&lt;/td&gt;&lt;td&gt;99元&lt;/td&gt;&lt;td colspan=&quot;1&quot; rowspan=&quot;2&quot;&gt;如订单金额未达到免邮额度，每单将收取5元运费&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;中国大陆其他省市（不含港澳台地区）&lt;/td&gt;&lt;td&gt;49元&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;h4 class=&quot;tit&quot;&gt;3、配送限制&lt;/h4&gt;&lt;p class=&quot;strong&quot;&gt;北京、天津、河北、河南、湖北、广东、福建、山东、江西、山西、湖南、江苏、浙江、安徽以外地区，部分笔记本和打火机限运。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1404217198', '普通快递');
INSERT INTO `food_articles` VALUES ('39', '23', '&lt;h3&gt;邮政EMS特快专递&lt;/h3&gt;&lt;h4 class=&quot;tit&quot;&gt;1.邮寄说明&lt;/h4&gt;&lt;p&gt;快件查询电话：各地11185&lt;br/&gt;配送时效：按邮政系统服务时限1～3天（节假日不休息）&lt;/p&gt;&lt;h4 class=&quot;tit&quot;&gt;2.资费标准(易迅优惠价)&lt;/h4&gt;&lt;table class=&quot;table_biao cke_show_border&quot;&gt;&lt;thead&gt;&lt;tr class=&quot;firstRow&quot;&gt;&lt;th&gt;收货地址所在省市&lt;/th&gt;&lt;th&gt;免邮额度&lt;/th&gt;&lt;th&gt;备注&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td&gt;上海、新疆、西藏&lt;/td&gt;&lt;td&gt;99元&lt;/td&gt;&lt;td colspan=&quot;1&quot; rowspan=&quot;2&quot;&gt;如订单金额未达到免邮额度，每单将收取5元运费&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;中国大陆其他省市（不含港澳台地区）&lt;/td&gt;&lt;td&gt;49元&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;h4 class=&quot;tit&quot;&gt;&lt;br/&gt;3.配送限制&lt;/h4&gt;&lt;p&gt;液晶显示器(24寸以上)、液晶电视(24寸以上)、音箱耳机、液体、打火机全国范围限运。&lt;br/&gt;北京、天津、河北、河南、湖北、广东、福建、山东、江西、山西、湖南、江苏、浙江、安徽以外地区，部分笔记本限运。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1404217389', '邮政EMS');
INSERT INTO `food_articles` VALUES ('40', '24', '&lt;h3&gt;&lt;strong&gt;&lt;br/&gt;易迅网用户服务协议&lt;/strong&gt;&lt;/h3&gt;&lt;p&gt;&lt;strong&gt;&lt;br/&gt;重要提示：&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;易迅网（www.yixun.com）由上海易迅电子商务发展有限公司或其关联公司（以下统称“易迅”）负责运营。易迅依据本协议的规定通过易迅网为用户提供服务，本协议在用户和易迅之间具有合同的法律效力。&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;易迅在此特别提醒用户认真阅读、充分理解本协议各条款，特别是其中所涉及的免除、限制易迅责任的条款、对用户权利限制条款、争议解决和法律适用等条款。&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;请用户审慎阅读并选择是否接受本协议。除非用户接受本协议所有条款，否则用户无权使用易迅于本协议下所提供的服务。点击“同意以下协议并注册”按钮后，本协议即构成对双方有约束力的法律文件。&lt;br/&gt;&lt;br/&gt;&lt;/strong&gt;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;一、用户注册&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;1.1 易迅网的各项服务的所有权和运作权归易迅所有。为了保障用户的权益，用户在自愿注册使用易迅网服务前，必须仔细阅读本服务协议所有条款。用户同意并接受本协议所有条款并完成注册程序，才能成为易迅网的正式用户。&lt;/p&gt;&lt;p&gt;&lt;strong&gt;1.2 本协议内容包括协议正文及所有易迅已经发布或将来可能发布的各类服务条款及规则。所有条款与规则为协议不可分割的组成部分，与协议具有同等法律效力。&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;1.3\r\n \r\n用户在使用易迅提供的各项服务时，承诺接受并遵守各项相关条款的规定。易迅有权根据需要不时地制定、修改本协议或各项条款。如本协议有任何变更，易迅将在\r\n易迅网上刊载公告，通知用户。如用户不同意相关变更，必须停止使用易迅所提供的服务。经修订的协议一经在易迅网公布后，立即自动生效。各项条款会在发布后\r\n生效，亦成为本协议的一部分。登录或继续使用易迅所提供的服务表示用户接受经修订的协议。&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;1.4 \r\n用户必须是具有完全民事行为能力的自然人，或者是具有合法经营资格的实体组织。无民事行为能力人、限制民事行为能力人以及无合法经营资格的组织不得注册为\r\n易迅用户或超过其民事权利或行为能力范围与易迅进行交易，如与易迅进行交易的，则服务协议自始无效，易迅有权立即停止与该用户的交易、注销该用户账户，并\r\n有权要求其承担相应的法律责任。&lt;/p&gt;&lt;p&gt;1.5 用户点击同意本协议的，即视为用户确认自己具有享受易迅网服务、下单购物等相应的权利能力和行为能力，能够独立承担法律责任，并且对用户在订单中提供的所有信息的真实性负责。&lt;br/&gt;&lt;br/&gt;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;二、用户账户&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;2.1 用户注册成功后，易迅将为用户开通一个账户，作为用户在易迅网交易及使用易迅网服务时的唯一身份标识，该账户的用户名和密码由用户负责保管。&lt;/p&gt;&lt;p&gt;2.2 用户使用易迅网服务时，应谨慎、合理、安全地保存和使用用户名及密码，用户应对以其用户名和密码进行的操作和交易活动负责。用户如发现任何非法使用用户账号或存在安全漏洞的情况，应立即通知易迅并向公安机关报案。&lt;br/&gt;&lt;br/&gt;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;三、用户信息收集、使用和保护&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;3.1\r\n \r\n用户在使用易迅网服务时需要根据要求披露一些信息，这些信息包括但不限于：真实姓名或名称、联系地址、邮箱和联系电话等。用户应保证这些信息在提供时是真\r\n实、准确、有效且完整的，且应及时根据实际情况或者易迅的要求更新这些信息。由于信息披露不完整、不真实或者信息更新不及时导致用户在享受易迅网服务时受\r\n到限制或损失的，应由用户独立承担责任。除了必要信息外，用户也有权自行决定披露一些其他信息。&lt;/p&gt;&lt;p&gt;3.2 用户授权易迅网收集您的用户信息，这些信息可能包括注册信息、产品信息和交易信息，易迅网对用户信息的收集将遵循相关法律的规定。&lt;/p&gt;&lt;p&gt;3.3\r\n \r\n易迅网将采取适当措施，根据相关法律的要求，对用户信息提供充分的信息安全保障。用户应妥善保管、使用其用户信息，包括QQ号码及其密码、微信帐号及其密\r\n码、与交易有关的支付账号及密码、联系方式、地址等信息，因上述信息泄露而导致用户的任何损失，包括使用易迅网的任何第三方应用软件造成信息泄露而导致的\r\n任何损失，由用户独立承担责任。如用户泄露上述任何信息，用户还应及时将泄露的情况以有效方式立即通知易迅网，以便易迅在合理时间内采取措施防止损失继续\r\n扩大，但易迅对采取措施前已经产生的后果不承担任何责任。&lt;/p&gt;&lt;p&gt;3.4 易迅保证不对外公开或向任何第三方提供用户的个人信息，但是存在下列情形之一的除外：&lt;/p&gt;&lt;p&gt;3.4.1 公开或提供相关信息之前获得用户许可的；&lt;/p&gt;&lt;p&gt;3.4.2 根据法律或政策的规定而公开或提供的；&lt;/p&gt;&lt;p&gt;3.4.3 只有公开或提供用户的个人信息，才能提供用户需要的商品或服务的；&lt;/p&gt;&lt;p&gt;3.4.4 根据国家权力机关要求公开或提供的；&lt;/p&gt;&lt;p&gt;3.4.5 根据本协议其他条款约定而公开或提供的。&lt;/p&gt;&lt;p&gt;3.5 为了向用户提供更优质的易迅网和腾讯电商平台服务，提升电商购物体验，用户同意易迅可将您的个人信息提供给易迅及腾讯电商的关联公司。&lt;/p&gt;&lt;p&gt;3.6 用户理解并认同，在易迅发生重组、解散、破产清算、并购等情况时，易迅可能会向第三方出售或转让。在该等交易中，作为易迅网不可分割的一部分，您的用户信息也可能将被转让给该第三方，以使该第三方可以继续为您提供服务。&lt;br/&gt;&lt;br/&gt;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;四、商品交易&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;4.1 商品的基本信息、价格和可获性等信息均在易迅网上标明并随时变动更新，对此类信息变动易迅不作特别通知。&lt;/p&gt;&lt;p&gt;&lt;strong&gt;4.2 易迅网上展示的商品的基本信息、价格和可获性等信息仅为要约邀请；用户的订单为订购商品的要约；易迅向用户发出订单确认及商品出库的电子邮件，或直接将商品发送至用户指定的收货地址时，构成易迅对该订单的承诺，此时商品订购合同即告成立。&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;4.3 如果用户在一份订单里订购了多种商品并且易迅只发出了部分商品出库的电子邮件，则只有这部分商品的订购合同成立；直到易迅向用户发出其他商品出库的电子邮件，用户与易迅关于其他商品的订购合同才成立。&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;4.4 易迅保留对商品订购数量的限制权。用户在下订单时，承诺具有订购相应商品的权利能力和行为能力，并且对在订单中提供的所有信息的真实性负责。&lt;/p&gt;&lt;p&gt;4.5 用户可以随时登录在易迅网注册的账户，查询订单状态。&lt;/p&gt;&lt;p&gt;4.6 商品的价格都包含了增值税。如果发生了意外情况，在确认了用户的订单后，由于供应商提价，税额变化引起的价格变化，或是由于网站的错误等造成商品价格变化，用户有权取消订单，并希望用户能及时通过电子邮件或电话通知易迅客户服务部。&lt;/p&gt;&lt;p&gt;4.7 用户所订购的商品，如果发生缺货，用户有权取消定单。&lt;/p&gt;&lt;p&gt;4.8 在下列情况下，用户有权取消订单：&lt;/p&gt;&lt;p&gt;4.8.1 经用户和易迅协商达成一致的；&lt;/p&gt;&lt;p&gt;4.8.2 易迅就用户提交的订单做出承诺前；&lt;/p&gt;&lt;p&gt;4.8.3 易迅网公布的商品价格发生变化或错误，用户在易迅发货之前通知易迅的。&lt;/p&gt;&lt;p&gt;4.9 在下列情况下，易迅有权取消订单：&lt;/p&gt;&lt;p&gt;4.9.1 经用户和易迅协商达成一致的；&lt;/p&gt;&lt;p&gt;4.9.2 易迅网显示的商品信息明显错误或缺货的；&lt;/p&gt;&lt;p&gt;4.9.3 用户订单信息明显错误或订货量超出易迅存货量；&lt;/p&gt;&lt;p&gt;4.9.4 因不可抗力、易迅网发生系统故障或遭受第三方攻击，以及易迅无法控制的其他情形。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;五、商品配送&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;5.1 易迅将把商品送到用户指定的送货地址。所有在易迅网上列出的送货时间均为参考时间，参考时间的计算是根据库存状况、正常的处理过程和送货时间、送货地点的基础上估计得出的。&lt;/p&gt;&lt;p&gt;5.2 送货费用根据用户选择的配送方式不同而有所差异。&lt;/p&gt;&lt;p&gt;5.3 为保证易迅能准确及时将商品送达，用户应清楚准确地填写用户或收货人的真实姓名、收货地址及联系方式等信息。&lt;/p&gt;&lt;p&gt;5.4 因如下情况造成订单延迟或无法配送等，易迅将不承担责任：&lt;/p&gt;&lt;p&gt;5.4.1 用户提供错误信息或不详细的地址，导致商品无法投递；&lt;/p&gt;&lt;p&gt;5.4.2 商品送达无人签收，由此造成的重复配送所产生的费用及相关的后果；&lt;/p&gt;&lt;p&gt;5.4.3 不可抗力事件，如自然灾害、交通戒严、罢工、骚乱、突发战争等。&lt;br/&gt;&lt;br/&gt;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;六、服务规则&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;6.1 价格信息&lt;/p&gt;&lt;p&gt;6.1.1 易迅将尽最大努力保证用户所购商品与网站上公布的价格一致，但价目表并不构成要约。尽管做出最大的努力，但因互联网技术等客观原因，易迅网的部分商品可能会有定价错误。如果发现错误定价，易迅网有权采取下列措施之一：&lt;/p&gt;&lt;p&gt;6.1.1.1 如果某一商品的正确定价低于错误定价，易迅将按照较低的定价向用户销售该商品；&lt;/p&gt;&lt;p&gt;6.1.1.2 如果某一商品的正确定价高于错误定价，易迅将根据具体情况，在交付前联系用户寻求指示, 或者取消订单并通知用户。&lt;/p&gt;&lt;p&gt;6.2 商品缺货&lt;/p&gt;&lt;p&gt;6.2.1 如果用户拟购买的商品发生缺货，则用户和易迅均有权取消该订单。&lt;/p&gt;&lt;p&gt;6.2.2 易迅可对缺货商品进行预售登记，并尽最大努力在最短时间内满足用户的购买需求。当缺货商品到货，易迅将第一时间通过邮件、短信或电话通知用户，方便用户进行购买。预售登记并不做订单处理，不构成要约。&lt;/p&gt;&lt;p&gt;6.3 服务通知&lt;/p&gt;&lt;p&gt;6.3.1\r\n \r\n同意接收广告、营销信息：用户同意接收来自易迅网的信息，包括但不限于营销活动信息、商品交易信息、促销信息等。为使用户及时了解丰富的商品信息，提升电\r\n商服务体验，易迅网其合作的第三方可以在法律法规允许的范围内，通过短信、电话、邮件等各种方式向用户提供前述信息。&lt;/p&gt;&lt;p&gt;6.3.2 如果用户不想接收除订单以外的邮件和短信，可以办理退阅。&lt;/p&gt;&lt;p&gt;6.4 退换货/补货/退款&lt;/p&gt;&lt;p&gt;6.4.1 易迅保留对商品退换货、补货的解释权和限制权。下订单即表明接受易迅网的退换货、补货规则。退换货、补货规则具体以易迅网公布内容为准。&lt;/p&gt;&lt;p&gt;6.4.2 因退换货产生的退款，退回方式视用户的支付方式不同而有所区别：&lt;/p&gt;&lt;p&gt;6.4.2.1 网上支付的订单，退款退回至原支付卡；&lt;/p&gt;&lt;p&gt;6.4.2.2 银行转账支付的订单，退款退回至支付订单的账户中；&lt;/p&gt;&lt;p&gt;6.4.2.3 现金支付的，则退还现金给用户。&lt;/p&gt;&lt;p&gt;&lt;strong&gt;6.5 规则变更&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;6.5.1 易迅可以根据需要变更本服务规则。对服务规则的修改和变更将被包含在易迅网更新后的规则中。所有变更具有可分性，如果部分变更或条款被认定为无效的，不影响其他变更或条款的有效性。&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;6.5.2\r\n \r\n用户在使用易迅网提供的各项服务时，承诺接受并遵守各项相关规则的规定。易迅有权根据需要不时地制定、修改本协议或各类规则，如本协议有任何变更，易迅将\r\n在网站重要页面上提示修改内容。如果用户不同意相关变更，则应当停止使用易迅网服务。经修订的协议及服务规则一经在网站公布后，则立即生效。登录或继续使\r\n用易迅网服务表示用户同意接受修订的后的协议或规则。&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;七、责任限制&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&lt;strong&gt;7.1 在法律法规允许的限度内，因使用易迅网服务而引起的任何损害或经济损失，易迅承担的全部责任均不超过用户所购买的与该索赔有关的商品金额。&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;7.2 除非另有书面说明，易迅不对易迅网的运营及其包含的信息、内容、材料、产品（包括软件）或服务作任何形式的、明示或默示的声明或担保。&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;7.3 易迅不担保易迅网提供给用户的全部信息，从易迅网或其服务器发出的电子邮件、信息等没有病毒或其他有害成份。&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;7.4 如因不可抗力或其他易迅无法控制的原因使易迅网系统崩溃或无法正常使用导致网上交易无法完成或丢失有关的信息、记录等，易迅不承担责任。但是易迅会尽可能合理地协助处理善后事宜，并努力使用户免受经济损失。&lt;br/&gt;&lt;br/&gt;&lt;/strong&gt;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;八、终止服务&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;8.1 如用户向易迅提出注销用户账号时，经易迅审核同意后予以注销其账号，用户即解除与易迅的服务协议关系。但注销该用户账号后，易迅仍保留以下权利：&lt;/p&gt;&lt;p&gt;8.1.1 易迅有权保留该用户的注册信息及以前的交易信息；&lt;/p&gt;&lt;p&gt;8.1.2 如用户在注销前在易迅网上存在违法行为或违反本协议的行为，易迅仍可行使本协议所规定的权利。&lt;/p&gt;&lt;p&gt;8.2 下列情形，易迅可以通过注销用户的方式终止服务：&amp;nbsp;&lt;/p&gt;&lt;p&gt;8.2.1 用户违反本协议相关规定，易迅有权终止向该用户提供服务。&lt;/p&gt;&lt;p&gt;8.2.2 易迅发现用户注册信息中主要内容是虚假的，易迅有权随时终止向该用户提供服务。&lt;/p&gt;&lt;p&gt;8.2.3 本协议终止或更新时，用户不愿接受新的服务协议的。&lt;br/&gt;&lt;br/&gt;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;九、用户管理&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;9.1 用户不得在易迅网发表包含以下内容的言论：&lt;/p&gt;&lt;p&gt;9.1.1 反对宪法所确定的基本原则，煽动、抗拒、破坏宪法和法律、行政法规实施的；&lt;/p&gt;&lt;p&gt;9.1.2 煽动颠覆国家政权，推翻社会主义制度，煽动、分裂国家，破坏国家统一的；&lt;/p&gt;&lt;p&gt;9.1.3 损害国家荣誉和利益的；&lt;/p&gt;&lt;p&gt;9.1.4 煽动民族仇恨、民族歧视，破坏民族团结的；&lt;/p&gt;&lt;p&gt;9.1.5 任何包含对种族、性别、宗教、地域内容等歧视的；&lt;/p&gt;&lt;p&gt;9.1.6 捏造或者歪曲事实，散布谣言，扰乱社会秩序的；&lt;/p&gt;&lt;p&gt;9.1.7 宣扬封建迷信、邪教、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的；&lt;/p&gt;&lt;p&gt;9.1.8 公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的；&lt;/p&gt;&lt;p&gt;9.1.9 其他违反宪法和法律法规的。&lt;/p&gt;&lt;p&gt;9.2 用户同意严格遵守以下义务：&lt;/p&gt;&lt;p&gt;9.2.1 不得利用易迅网从事洗钱、窃取商业秘密、窃取个人信息等违法犯罪活动；&lt;/p&gt;&lt;p&gt;9.2.2 不得干扰易迅网的正常运营，不得侵入网站及计算机信息系统；&lt;/p&gt;&lt;p&gt;9.2.3 不得利用在易迅网注册的账户进行牟利性经营活动；&lt;/p&gt;&lt;p&gt;9.2.4 不得发布任何侵犯他人著作权、商标权等知识产权或其他合法权利的内容。&lt;/p&gt;&lt;p&gt;9.3 如用户未遵守以上规定的，易迅有权作出独立判断并采取暂停或注销用户账户等措施。用户对自己在网上的言论和行为独立承担法律责任。&lt;br/&gt;&lt;br/&gt;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;十、知识产权&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;10.1\r\n \r\n易迅网的所有内容诸如文字、图表、标识、声音、图片、数字下载、数据编辑和软件、商标等全部内容，均是易迅网或其内容提供者的财产，受著作权、商标及其他\r\n知识产权法律的保护。未经易迅网或其内容提供者的书面授权或许可，任何人不得以任何目的进行复制、复印等或以其他方式加以利用。&lt;/p&gt;&lt;p&gt;10.2 易迅有权将用户在易迅网发表的商品使用体验、商品讨论或图片进行使用或者与其他人合作使用，使用范围包括但不限于网站、电子杂志、杂志、刊物等，使用时需为作者署名，以用户发表文章时注明的署名为准。作品有附带版权声明者除外。&lt;/p&gt;&lt;p&gt;10.3 除法律另有强制性规定外，未经易迅明确的特别书面许可，任何单位或个人不得以任何方式非法地全部或部分复制、转载、引用、链接、抓取或以其他方式使用易迅网的信息内容。&lt;br/&gt;&lt;br/&gt;&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;十一、法律适用和争议管辖&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;11.1 本协议的订立、执行和解释及争议的解决均应适用中华人民共和国法律。&lt;/p&gt;&lt;p&gt;11.2 如发生易迅服务条款与中国法律相抵触时，则该等条款将按法律规定解释，而其他条款继续有效。&lt;/p&gt;&lt;p&gt;11.3 如用户与易迅就本协议内容或其履行等发生的一切争议，双方应努力通过友好协商解决；协商不能解决时，任何一方均应将争议提交上海易迅电子商务发展有限公司所在地有管辖权的人民法院诉讼解决。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1404217598', '用户条款');
INSERT INTO `food_articles` VALUES ('41', '24', '&lt;h3 style=&quot;PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-SIZE: 14px; PADDING-TOP: 0px&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://img2.icson.com/ICSONAD/201308/1_big20130809164057849651.jpg&quot; data-cke-saved-src=&quot;http://img2.icson.com/ICSONAD/201308/1_big20130809164057849651.jpg&quot; height=&quot;278&quot; width=&quot;1153&quot;/&gt;&lt;/h3&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;&lt;strong&gt;易迅的廉政态度 &lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;￭ &amp;nbsp;易迅网一直秉承“诚信、服务、执行、突破”的价值观，以“超越客户预期”为服务理念，致力于为用户提供丰富的商品选择、便捷购物方式和完善售后服务，打造超越客户预期的E时代购物体验。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;￭ &amp;nbsp;易迅网的稳定发展离不开所有合作伙伴的真诚支持。 &lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;￭ &amp;nbsp;易迅网认为，商业贿赂行为违背市场经济的基本原则，破坏市场秩序，妨碍公平竞争和资源的合理配置，增加 企业经营成本，损害合作双方关系的健康发展；商业贿赂败坏社会风气，腐蚀企 &amp;nbsp; &amp;nbsp;业从业人员，成为滋生腐败行为和经济犯罪的温床。&lt;br/&gt;￭&amp;nbsp;&amp;nbsp;易迅坚持廉洁奉公，对有违公正的行为一直保持“零容忍”的态度，一旦证实有员工有触犯以下准则，易迅网将严肃处理，直至开除和追究法律责任，绝不法外姑息！&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;&lt;strong&gt;&lt;span style=&quot;COLOR: #ff0000&quot;&gt;&lt;span style=&quot;FONT-SIZE: 14px&quot;&gt;杜绝贿赂，公平竞争&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;&lt;strong&gt;易迅的商业合作原则 &lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;￭ &amp;nbsp;我们鼓励在商业交往中的礼貌行为，但是坚决反对企图通过赠与礼物、给与佣金或其他形式的私人好处而对相互关系施加不当影响的商业贿赂行为。 &lt;br/&gt;￭ &amp;nbsp;易迅网与供应商伙伴在履行共同的商业行为过程中，应严格遵守并督促本公司员工遵守双方所在地有关反商业贿赂的法律法规，其中包含且不限于中国的《反不正当竞争法》。 &lt;br/&gt;￭ &amp;nbsp;易迅网对于合作伙伴的投诉和意见将给予严格保密，请各位伙伴可放心实名投诉。 &lt;br/&gt;￭ &amp;nbsp;若易迅网内部员工出现收受贿赂、不公平竞争的情况，一经查实，我公司必将给予严肃处理直至司法程序。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;&lt;span style=&quot;COLOR: #ff0000&quot;&gt;&amp;nbsp; &amp;nbsp; 为了让这些原则切实得到遵守，易迅网需要得到各位供应商合作伙伴的支持；&lt;br/&gt;希望你们在和易迅网的员工接触时对于他们遵守上述规定的情况进行监督，并对违反上述规定的情况和易迅网的廉政管理部联系。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;&lt;strong&gt;易迅的廉政管理部 &lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;￭&amp;nbsp;易迅网设有廉政管理部，独立于业务的职能机构，负责各类商业贿赂投诉案件的调查、取证和处理，直接向董事会下属审计委员会汇报工作； &lt;br/&gt;￭&amp;nbsp;廉政管理部有权力审视、追溯、调查公司所有相关的业务活动，并保持独立判断。 &lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;&lt;strong&gt;职责 &lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;&lt;span style=&quot;COLOR: rgb(34,34,34)&quot;&gt;￭ &amp;nbsp;&amp;nbsp;&lt;/span&gt;通过接受投诉、业务数据分析、访谈等方法，最大化的发现违背本制度的信息； &lt;br/&gt;￭ &amp;nbsp;对立案调查的案件进行调查、取证和判断； &lt;br/&gt;￭ &amp;nbsp;向全体员工培训和宣导公司的态度以及发生案例，预防廉政案件发生； &lt;br/&gt;￭ &amp;nbsp;反馈廉政调查中发现的组织、制度、流程缺陷，并与相关业务部门沟通推动改善。 &lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;&lt;strong&gt;权利 &lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;￭ &amp;nbsp;要求业务部门提供调查所需的业务数据； &lt;br/&gt;￭ &amp;nbsp;要求业务部门相关工作人员向廉政办公室说明业务过程中的事实。 &lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;&lt;strong&gt;人员操守 &lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;￭ &amp;nbsp;对调查案件严格保密； &lt;br/&gt;￭ &amp;nbsp;保持客观公正，不得掺杂主观喜好； &lt;br/&gt;￭ &amp;nbsp;对于举报信息不得私自截留； &lt;br/&gt;￭ &amp;nbsp;对于未经证实的信息不得进行评价和传播。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;&lt;strong&gt;&lt;span style=&quot;COLOR: #ff0000&quot;&gt;严谨调查、独立判断&lt;/span&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;&lt;strong&gt;易迅的廉政举报渠道&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;FONT-FAMILY: 宋体&quot;&gt;&lt;span style=&quot;COLOR: #ff0000&quot;&gt;举报人身份和举报的内容（包括且不限于投诉人姓名、联系方式、投诉内容、公司背景）将被视作绝密，在极小的范围内知情；请大家放心投诉的触达性和保密性。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;COLOR: #ff0000&quot;&gt;&lt;strong&gt;举报电话：021-61831103&lt;br/&gt;举报邮箱：lianzheng@yixun.com&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1404217897', '阳光行动');
INSERT INTO `food_articles` VALUES ('42', '27', '<p>														</p><p><br/></p><p><br/></p><p class=\"bold\">重要提示：</p><p><br/></p><p class=\"s1\"><strong>易迅网（www.yixun.com）由上海易迅电子商务发展有限公司或其关联公司（以下统称“易迅”）负责运营。易迅依据本协议的规定通过易迅网为用户提供服务，本协议在用户和易迅之间具有合同的法律效力。</strong></p><p><br/></p><p class=\"s1\"><strong>易迅在此特别提醒用户认真阅读、充分理解本协议各条款，特别是其中所涉及的免除、限制易迅责任的条款、对用户权利限制条款、争议解决和法律适用等条款。</strong></p><p><br/></p><p class=\"s1\"><strong>请用户审慎阅读并选择是否接受本协议。除非用户接受本协议所有条款，否则用户无权使用易迅于本协议下所提供的服务。点击“同意以下协议并注册”按钮后，本协议即构成对双方有约束力的法律文件。</strong></p><p><br/></p><p class=\"t1\">一、用户注册</p><p><br/></p><p class=\"s1\">1.1 易迅网的各项服务的所有权和运作权归易迅所有。为了保障用户的权益，用户在自愿注册使用易迅网服务前，必须仔细阅读本服务协议所有条款。用户同意并接受本协议所有条款并完成注册程序，才能成为易迅网的正式用户。</p><p><br/></p><p class=\"s1\"><strong>1.2 本协议内容包括协议正文及所有易迅已经发布或将来可能发布的各类服务条款及规则。所有条款与规则为协议不可分割的组成部分，与协议具有同等法律效力。</strong></p><p><br/></p><p class=\"s1\"><strong>1.3 \r\n用户在使用易迅提供的各项服务时，承诺接受并遵守各项相关条款的规定。易迅有权根据需要不时地制定、修改本协议或各项条款。如本协议有任何变更，易迅将在\r\n易迅网上刊载公告，通知用户。如用户不同意相关变更，必须停止使用易迅所提供的服务。经修订的协议一经在易迅网公布后，立即自动生效。各项条款会在发布后\r\n生效，亦成为本协议的一部分。登录或继续使用易迅所提供的服务表示用户接受经修订的协议。</strong></p><p><br/></p><p class=\"s1\">1.4 \r\n用户必须是具有完全民事行为能力的自然人，或者是具有合法经营资格的实体组织。无民事行为能力人、限制民事行为能力人以及无合法经营资格的组织不得注册为\r\n易迅用户或超过其民事权利或行为能力范围与易迅进行交易，如与易迅进行交易的，则服务协议自始无效，易迅有权立即停止与该用户的交易、注销该用户账户，并\r\n有权要求其承担相应的法律责任。</p><p><br/></p><p class=\"s1\">1.5 用户点击同意本协议的，即视为用户确认自己具有享受易迅网服务、下单购物等相应的权利能力和行为能力，能够独立承担法律责任，并且对用户在订单中提供的所有信息的真实性负责。</p><p><br/></p><p class=\"t1\">二、用户账户</p><p><br/></p><p class=\"s1\">2.1 用户注册成功后，易迅将为用户开通一个账户，作为用户在易迅网交易及使用易迅网服务时的唯一身份标识，该账户的用户名和密码由用户负责保管。</p><p><br/></p><p class=\"s1\">2.2 用户使用易迅网服务时，应谨慎、合理、安全地保存和使用用户名及密码，用户应对以其用户名和密码进行的操作和交易活动负责。用户如发现任何非法使用用户账号或存在安全漏洞的情况，应立即通知易迅并向公安机关报案。</p><p><br/></p><p class=\"t1\">三、用户信息收集、使用和保护</p><p><br/></p><p class=\"s1\">3.1 \r\n用户在使用易迅网服务时需要根据要求披露一些信息，这些信息包括但不限于：真实姓名或名称、联系地址、邮箱和联系电话等。用户应保证这些信息在提供时是真\r\n实、准确、有效且完整的，且应及时根据实际情况或者易迅的要求更新这些信息。由于信息披露不完整、不真实或者信息更新不及时导致用户在享受易迅网服务时受\r\n到限制或损失的，应由用户独立承担责任。除了必要信息外，用户也有权自行决定披露一些其他信息。</p><p><br/></p><p class=\"s1\">3.2 用户授权易迅网收集您的用户信息，这些信息可能包括注册信息、产品信息和交易信息，易迅网对用户信息的收集将遵循相关法律的规定。</p><p><br/></p><p class=\"s1\">3.3 \r\n易迅网将采取适当措施，根据相关法律的要求，对用户信息提供充分的信息安全保障。用户应妥善保管、使用其用户信息，包括QQ号码及其密码、微信帐号及其密\r\n码、与交易有关的支付账号及密码、联系方式、地址等信息，因上述信息泄露而导致用户的任何损失，包括使用易迅网的任何第三方应用软件造成信息泄露而导致的\r\n任何损失，由用户独立承担责任。如用户泄露上述任何信息，用户还应及时将泄露的情况以有效方式立即通知易迅网，以便易迅在合理时间内采取措施防止损失继续\r\n扩大，但易迅对采取措施前已经产生的后果不承担任何责任。</p><p><br/></p><p class=\"s1\">3.4 易迅保证不对外公开或向任何第三方提供用户的个人信息，但是存在下列情形之一的除外：</p><p><br/></p><p class=\"s2\">3.4.1 公开或提供相关信息之前获得用户许可的；</p><p><br/></p><p class=\"s2\">3.4.2 根据法律或政策的规定而公开或提供的；</p><p><br/></p><p class=\"s2\">3.4.3 只有公开或提供用户的个人信息，才能提供用户需要的商品或服务的；</p><p><br/></p><p class=\"s2\">3.4.4 根据国家权力机关要求公开或提供的；</p><p><br/></p><p class=\"s2\">3.4.5 根据本协议其他条款约定而公开或提供的。</p><p><br/></p><p class=\"s1\">3.5 为了向用户提供更优质的易迅网和腾讯电商平台服务，提升电商购物体验，用户同意易迅可将您的个人信息提供给易迅及腾讯电商的关联公司。</p><p><br/></p><p class=\"s1\">3.6 用户理解并认同，在易迅发生重组、解散、破产清算、并购等情况时，易迅可能会向第三方出售或转让。在该等交易中，作为易迅网不可分割的一部分，您的用户信息也可能将被转让给该第三方，以使该第三方可以继续为您提供服务。</p><p><br/></p><p class=\"t1\">四、商品交易</p><p><br/></p><p class=\"s1\">4.1 商品的基本信息、价格和可获性等信息均在易迅网上标明并随时变动更新，对此类信息变动易迅不作特别通知。</p><p><br/></p><p class=\"s1\"><strong>4.2 易迅网上展示的商品的基本信息、价格和可获性等信息仅为要约邀请；用户的订单为订购商品的要约；易迅向用户发出订单确认及商品出库的电子邮件，或直接将商品发送至用户指定的收货地址时，构成易迅对该订单的承诺，此时商品订购合同即告成立。</strong></p><p><br/></p><p class=\"s1\"><strong>4.3 如果用户在一份订单里订购了多种商品并且易迅只发出了部分商品出库的电子邮件，则只有这部分商品的订购合同成立；直到易迅向用户发出其他商品出库的电子邮件，用户与易迅关于其他商品的订购合同才成立。</strong></p><p><br/></p><p class=\"s1\">4.4 易迅保留对商品订购数量的限制权。用户在下订单时，承诺具有订购相应商品的权利能力和行为能力，并且对在订单中提供的所有信息的真实性负责。</p><p><br/></p><p class=\"s1\">4.5 用户可以随时登录在易迅网注册的账户，查询订单状态。</p><p><br/></p><p class=\"s1\">4.6 商品的价格都包含了增值税。如果发生了意外情况，在确认了用户的订单后，由于供应商提价，税额变化引起的价格变化，或是由于网站的错误等造成商品价格变化，用户有权取消订单，并希望用户能及时通过电子邮件或电话通知易迅客户服务部。</p><p><br/></p><p class=\"s1\">4.7 用户所订购的商品，如果发生缺货，用户有权取消定单。</p><p><br/></p><p class=\"s1\">4.8 在下列情况下，用户有权取消订单：</p><p><br/></p><p class=\"s2\">4.8.1 经用户和易迅协商达成一致的；</p><p><br/></p><p class=\"s2\">4.8.2 易迅就用户提交的订单做出承诺前；</p><p><br/></p><p class=\"s2\">4.8.3 易迅网公布的商品价格发生变化或错误，用户在易迅发货之前通知易迅的。</p><p><br/></p><p class=\"s1\">4.9 在下列情况下，易迅有权取消订单：</p><p><br/></p><p class=\"s2\">4.9.1 经用户和易迅协商达成一致的；</p><p><br/></p><p class=\"s2\">4.9.2 易迅网显示的商品信息明显错误或缺货的；</p><p><br/></p><p class=\"s2\">4.9.3 用户订单信息明显错误或订货量超出易迅存货量；</p><p><br/></p><p class=\"s2\">4.9.4 因不可抗力、易迅网发生系统故障或遭受第三方攻击，以及易迅无法控制的其他情形。</p><p><br/></p><p class=\"t1\">五、商品配送</p><p><br/></p><p class=\"s1\">5.1 易迅将把商品送到用户指定的送货地址。所有在易迅网上列出的送货时间均为参考时间，参考时间的计算是根据库存状况、正常的处理过程和送货时间、送货地点的基础上估计得出的。</p><p><br/></p><p class=\"s1\">5.2 送货费用根据用户选择的配送方式不同而有所差异。</p><p><br/></p><p class=\"s1\">5.3 为保证易迅能准确及时将商品送达，用户应清楚准确地填写用户或收货人的真实姓名、收货地址及联系方式等信息。</p><p><br/></p><p class=\"s1\">5.4 因如下情况造成订单延迟或无法配送等，易迅将不承担责任：</p><p><br/></p><p class=\"s2\">5.4.1 用户提供错误信息或不详细的地址，导致商品无法投递；</p><p><br/></p><p class=\"s2\">5.4.2 商品送达无人签收，由此造成的重复配送所产生的费用及相关的后果；</p><p><br/></p><p class=\"s2\">5.4.3 不可抗力事件，如自然灾害、交通戒严、罢工、骚乱、突发战争等。</p><p><br/></p><p class=\"t1\">六、服务规则</p><p><br/></p><p class=\"s1\">6.1 价格信息</p><p><br/></p><p class=\"s2\">6.1.1 易迅将尽最大努力保证用户所购商品与网站上公布的价格一致，但价目表并不构成要约。尽管做出最大的努力，但因互联网技术等客观原因，易迅网的部分商品可能会有定价错误。如果发现错误定价，易迅网有权采取下列措施之一：</p><p><br/></p><p class=\"s3\">6.1.1.1 如果某一商品的正确定价低于错误定价，易迅将按照较低的定价向用户销售该商品；</p><p><br/></p><p class=\"s3\">6.1.1.2 如果某一商品的正确定价高于错误定价，易迅将根据具体情况，在交付前联系用户寻求指示, 或者取消订单并通知用户。</p><p><br/></p><p class=\"s1\">6.2 商品缺货</p><p><br/></p><p class=\"s2\">6.2.1 如果用户拟购买的商品发生缺货，则用户和易迅均有权取消该订单。</p><p><br/></p><p class=\"s2\">6.2.2 易迅可对缺货商品进行预售登记，并尽最大努力在最短时间内满足用户的购买需求。当缺货商品到货，易迅将第一时间通过邮件、短信或电话通知用户，方便用户进行购买。预售登记并不做订单处理，不构成要约。</p><p><br/></p><p class=\"s1\">6.3 服务通知</p><p><br/></p><p class=\"s2\">6.3.1 \r\n同意接收广告、营销信息：用户同意接收来自易迅网的信息，包括但不限于营销活动信息、商品交易信息、促销信息等。为使用户及时了解丰富的商品信息，提升电\r\n商服务体验，易迅网其合作的第三方可以在法律法规允许的范围内，通过短信、电话、邮件等各种方式向用户提供前述信息。</p><p><br/></p><p class=\"s2\">6.3.2 如果用户不想接收除订单以外的邮件和短信，可以办理退阅。</p><p><br/></p><p class=\"s1\">6.4 退换货/补货/退款</p><p><br/></p><p class=\"s2\">6.4.1 易迅保留对商品退换货、补货的解释权和限制权。下订单即表明接受易迅网的退换货、补货规则。退换货、补货规则具体以易迅网公布内容为准。</p><p><br/></p><p class=\"s2\">6.4.2 因退换货产生的退款，退回方式视用户的支付方式不同而有所区别：</p><p><br/></p><p class=\"s3\">6.4.2.1 网上支付的订单，退款退回至原支付卡；</p><p><br/></p><p class=\"s3\">6.4.2.2 银行转账支付的订单，退款退回至支付订单的账户中；</p><p><br/></p><p class=\"s3\">6.4.2.3 现金支付的，则退还现金给用户。</p><p><br/></p><p class=\"s1\"><strong>6.5 规则变更</strong></p><p><br/></p><p class=\"s2\"><strong>6.5.1 易迅可以根据需要变更本服务规则。对服务规则的修改和变更将被包含在易迅网更新后的规则中。所有变更具有可分性，如果部分变更或条款被认定为无效的，不影响其他变更或条款的有效性。</strong></p><p><br/></p><p class=\"s2\"><strong>6.5.2 \r\n用户在使用易迅网提供的各项服务时，承诺接受并遵守各项相关规则的规定。易迅有权根据需要不时地制定、修改本协议或各类规则，如本协议有任何变更，易迅将\r\n在网站重要页面上提示修改内容。如果用户不同意相关变更，则应当停止使用易迅网服务。经修订的协议及服务规则一经在网站公布后，则立即生效。登录或继续使\r\n用易迅网服务表示用户同意接受修订的后的协议或规则。</strong></p><p><br/></p><p class=\"t1\">七、责任限制</p><p><br/></p><p class=\"s1\"><strong>7.1 在法律法规允许的限度内，因使用易迅网服务而引起的任何损害或经济损失，易迅承担的全部责任均不超过用户所购买的与该索赔有关的商品金额。</strong></p><p><br/></p><p class=\"s1\"><strong>7.2 除非另有书面说明，易迅不对易迅网的运营及其包含的信息、内容、材料、产品（包括软件）或服务作任何形式的、明示或默示的声明或担保。</strong></p><p><br/></p><p class=\"s1\"><strong>7.3 易迅不担保易迅网提供给用户的全部信息，从易迅网或其服务器发出的电子邮件、信息等没有病毒或其他有害成份。</strong></p><p><br/></p><p class=\"s1\"><strong>7.4 如因不可抗力或其他易迅无法控制的原因使易迅网系统崩溃或无法正常使用导致网上交易无法完成或丢失有关的信息、记录等，易迅不承担责任。但是易迅会尽可能合理地协助处理善后事宜，并努力使用户免受经济损失。</strong></p><p><br/></p><p class=\"t1\">八、终止服务</p><p><br/></p><p class=\"s1\">8.1 如用户向易迅提出注销用户账号时，经易迅审核同意后予以注销其账号，用户即解除与易迅的服务协议关系。但注销该用户账号后，易迅仍保留以下权利：</p><p><br/></p><p class=\"s2\">8.1.1 易迅有权保留该用户的注册信息及以前的交易信息；</p><p><br/></p><p class=\"s2\">8.1.2 如用户在注销前在易迅网上存在违法行为或违反本协议的行为，易迅仍可行使本协议所规定的权利。</p><p><br/></p><p class=\"s1\">8.2 下列情形，易迅可以通过注销用户的方式终止服务：</p><p><br/></p><p class=\"s2\">8.2.1 用户违反本协议相关规定，易迅有权终止向该用户提供服务。</p><p><br/></p><p class=\"s2\">8.2.2 易迅发现用户注册信息中主要内容是虚假的，易迅有权随时终止向该用户提供服务。</p><p><br/></p><p class=\"s2\">8.2.3 本协议终止或更新时，用户不愿接受新的服务协议的。</p><p><br/></p><p class=\"t1\">九、用户管理</p><p><br/></p><p class=\"s1\">9.1 用户不得在易迅网发表包含以下内容的言论：</p><p><br/></p><p class=\"s2\">9.1.1 反对宪法所确定的基本原则，煽动、抗拒、破坏宪法和法律、行政法规实施的；</p><p><br/></p><p class=\"s2\">9.1.2 煽动颠覆国家政权，推翻社会主义制度，煽动、分裂国家，破坏国家统一的；</p><p><br/></p><p class=\"s2\">9.1.3 损害国家荣誉和利益的；</p><p><br/></p><p class=\"s2\">9.1.4 煽动民族仇恨、民族歧视，破坏民族团结的；</p><p><br/></p><p class=\"s2\">9.1.5 任何包含对种族、性别、宗教、地域内容等歧视的；</p><p><br/></p><p class=\"s2\">9.1.6 捏造或者歪曲事实，散布谣言，扰乱社会秩序的；</p><p><br/></p><p class=\"s2\">9.1.7 宣扬封建迷信、邪教、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的；</p><p><br/></p><p class=\"s2\">9.1.8 公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的；</p><p><br/></p><p class=\"s2\">9.1.9 其他违反宪法和法律法规的。</p><p><br/></p><p class=\"s1\">9.2 用户同意严格遵守以下义务：</p><p><br/></p><p class=\"s2\">9.2.1 不得利用易迅网从事洗钱、窃取商业秘密、窃取个人信息等违法犯罪活动；</p><p><br/></p><p class=\"s2\">9.2.2 不得干扰易迅网的正常运营，不得侵入网站及计算机信息系统；</p><p><br/></p><p class=\"s2\">9.2.3 不得利用在易迅网注册的账户进行牟利性经营活动；</p><p><br/></p><p class=\"s2\">9.2.4 不得发布任何侵犯他人著作权、商标权等知识产权或其他合法权利的内容。</p><p><br/></p><p class=\"s1\">9.3 如用户未遵守以上规定的，易迅有权作出独立判断并采取暂停或注销用户账户等措施。用户对自己在网上的言论和行为独立承担法律责任。</p><p><br/></p><p class=\"t1\">十、知识产权</p><p><br/></p><p class=\"s1\">10.1 \r\n易迅网的所有内容诸如文字、图表、标识、声音、图片、数字下载、数据编辑和软件、商标等全部内容，均是易迅网或其内容提供者的财产，受著作权、商标及其他\r\n知识产权法律的保护。未经易迅网或其内容提供者的书面授权或许可，任何人不得以任何目的进行复制、复印等或以其他方式加以利用。</p><p><br/></p><p class=\"s1\">10.2 易迅有权将用户在易迅网发表的商品使用体验、商品讨论或图片进行使用或者与其他人合作使用，使用范围包括但不限于网站、电子杂志、杂志、刊物等，使用时需为作者署名，以用户发表文章时注明的署名为准。作品有附带版权声明者除外。</p><p><br/></p><p class=\"s1\">10.3 除法律另有强制性规定外，未经易迅明确的特别书面许可，任何单位或个人不得以任何方式非法地全部或部分复制、转载、引用、链接、抓取或以其他方式使用易迅网的信息内容。</p><p><br/></p><p class=\"t1\">十一、法律适用和争议管辖</p><p><br/></p><p class=\"s1\">11.1 本协议的订立、执行和解释及争议的解决均应适用中华人民共和国法律。</p><p><br/></p><p class=\"s1\">11.2 如发生易迅服务条款与中国法律相抵触时，则该等条款将按法律规定解释，而其他条款继续有效。</p><p><br/></p><p class=\"s1\">11.3 如用户与易迅就本协议内容或其履行等发生的一切争议，双方应努力通过友好协商解决；协商不能解决时，任何一方均应将争议提交上海易迅电子商务发展有限公司所在地有管辖权的人民法院诉讼解决。</p><p><br/></p><p><br/></p><p><br/></p><p>											</p>', '1404221829', '用户登录');

-- ----------------------------
-- Table structure for food_attribute
-- ----------------------------
DROP TABLE IF EXISTS `food_attribute`;
CREATE TABLE `food_attribute` (
  `attrid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `attrname` varchar(255) NOT NULL,
  `attrsort` int(11) NOT NULL DEFAULT '0',
  `cid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`attrid`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_attribute
-- ----------------------------
INSERT INTO `food_attribute` VALUES ('10', '屏幕尺寸', '0', '77');
INSERT INTO `food_attribute` VALUES ('21', ' 容量', '0', '80');
INSERT INTO `food_attribute` VALUES ('11', '操作系统', '0', '77');
INSERT INTO `food_attribute` VALUES ('12', ' 适用网络制式', '0', '77');
INSERT INTO `food_attribute` VALUES ('13', 'CPU核心数', '0', '77');
INSERT INTO `food_attribute` VALUES ('14', '主摄像头像素', '0', '77');
INSERT INTO `food_attribute` VALUES ('15', '主屏分辨率', '0', '77');
INSERT INTO `food_attribute` VALUES ('16', '运行内存RAM', '0', '77');
INSERT INTO `food_attribute` VALUES ('17', '卡模类型', '0', '77');
INSERT INTO `food_attribute` VALUES ('18', '对讲机类别', '0', '78');
INSERT INTO `food_attribute` VALUES ('19', '对讲机配件', '0', '78');
INSERT INTO `food_attribute` VALUES ('20', '有无显示屏', '0', '78');
INSERT INTO `food_attribute` VALUES ('22', '电源样式', '0', '80');
INSERT INTO `food_attribute` VALUES ('23', ' 电池类型', '0', '80');
INSERT INTO `food_attribute` VALUES ('24', 'LED照明', '0', '80');
INSERT INTO `food_attribute` VALUES ('25', '是否支持太阳能', '0', '80');
INSERT INTO `food_attribute` VALUES ('26', 'CPU系列', '0', '143');

-- ----------------------------
-- Table structure for food_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `food_auth_group`;
CREATE TABLE `food_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` varchar(500) NOT NULL DEFAULT '',
  `description` char(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_auth_group
-- ----------------------------
INSERT INTO `food_auth_group` VALUES ('7', '首页管理员', '1', '13,14,15,16,17,18,19,20,21,22,23,24,25,26,9', '能够管理首页推荐位');
INSERT INTO `food_auth_group` VALUES ('4', '超级管理员', '1', '13,14,15,16,17,18,19,20,21,22,23,24,25,26,89,27,28,29,30,31,32,80,81,33,34,35,36,37,38,39,41,42,43,44,45,46,47,48,49,50,51,52,82,83,84,85,87,88,9,10,11,12,86,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,7913,14,15,16,17,18,19,20,21,22,23,24,25,26,89,27,28,29,30,31,32,80,81,33,34,35,36,37,38,39,41,42,43,44,45,46,47,48,49,50,51,52,82,83,84,85,87,88,9,10,11,12,86,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79', '拥有所有权限的管理员');
INSERT INTO `food_auth_group` VALUES ('8', '广告管理员', '1', '27,28,29,30,31,32,9', '管理全部广告');
INSERT INTO `food_auth_group` VALUES ('9', '分类管理员', '1', '33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,9', '分类管理员');
INSERT INTO `food_auth_group` VALUES ('10', '优惠券管理', '1', '53,54,55,56,57,58,59,60', '优惠券管理');

-- ----------------------------
-- Table structure for food_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `food_auth_group_access`;
CREATE TABLE `food_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_auth_group_access
-- ----------------------------
INSERT INTO `food_auth_group_access` VALUES ('1089', '7');
INSERT INTO `food_auth_group_access` VALUES ('1091', '8');
INSERT INTO `food_auth_group_access` VALUES ('1095', '4');
INSERT INTO `food_auth_group_access` VALUES ('1096', '7');

-- ----------------------------
-- Table structure for food_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `food_auth_rule`;
CREATE TABLE `food_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `mid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_auth_rule
-- ----------------------------
INSERT INTO `food_auth_rule` VALUES ('9', 'Admin/Index/index', '登录首页', '1', '1', '', '9');
INSERT INTO `food_auth_rule` VALUES ('10', 'Admin/Websetting/index', '基础配置', '1', '1', '', '9');
INSERT INTO `food_auth_rule` VALUES ('11', 'Admin/Navsetting/index', '导航配置', '1', '1', '', '9');
INSERT INTO `food_auth_rule` VALUES ('12', 'Admin/Friendlink/index', '友情链接配置', '1', '1', '', '9');
INSERT INTO `food_auth_rule` VALUES ('13', 'Admin/Indexset/index', '查看首页管理', '1', '1', '', '1');
INSERT INTO `food_auth_rule` VALUES ('14', 'Admin/Indexset/addFloor', '添加楼层', '1', '1', '', '1');
INSERT INTO `food_auth_rule` VALUES ('15', 'Admin/Indexset/modifyFloor', '修改楼层', '1', '1', '', '1');
INSERT INTO `food_auth_rule` VALUES ('16', 'Admin/Indexset/deleteFloor', '删除楼层', '1', '1', '', '1');
INSERT INTO `food_auth_rule` VALUES ('17', 'Admin/Indexset/loadData', '显示楼层图片广告', '1', '1', '', '1');
INSERT INTO `food_auth_rule` VALUES ('18', 'Admin/Indexset/viewClass', '查看可添加楼层', '1', '1', '', '1');
INSERT INTO `food_auth_rule` VALUES ('19', 'Admin/Indexset/editAd', '修改楼层广告', '1', '1', '', '1');
INSERT INTO `food_auth_rule` VALUES ('20', 'Admin/Indexset/insertAd', '添加楼层广告', '1', '1', '', '1');
INSERT INTO `food_auth_rule` VALUES ('21', 'Admin/Indexset/deleteAd', '删除楼层广告', '1', '1', '', '1');
INSERT INTO `food_auth_rule` VALUES ('22', 'Admin/Indexset/createPic', '添加楼层广告页面', '1', '1', '', '1');
INSERT INTO `food_auth_rule` VALUES ('23', 'Admin/Indexset/createText', '添加楼层文字广告页面', '1', '1', '', '1');
INSERT INTO `food_auth_rule` VALUES ('24', 'Admin/Indexset/editPic', '修改楼层广告页面', '1', '1', '', '1');
INSERT INTO `food_auth_rule` VALUES ('25', 'Admin/Indexset/editText', '修改楼层文字广告页面', '1', '1', '', '1');
INSERT INTO `food_auth_rule` VALUES ('26', 'Admin/Indexset/loadText', '显示楼层文字广告', '1', '1', '', '1');
INSERT INTO `food_auth_rule` VALUES ('27', 'Admin/Adset/index', '广告管理首页', '1', '1', '', '2');
INSERT INTO `food_auth_rule` VALUES ('28', 'Admin/Adset/createAd', '广告添加页面', '1', '1', '', '2');
INSERT INTO `food_auth_rule` VALUES ('29', 'Admin/Adset/insertAd', '广告添加', '1', '1', '', '2');
INSERT INTO `food_auth_rule` VALUES ('30', 'Admin/Adset/editAd', '广告修改页面', '1', '1', '', '2');
INSERT INTO `food_auth_rule` VALUES ('31', 'Admin/Adset/updataAd', '广告修改', '1', '1', '', '2');
INSERT INTO `food_auth_rule` VALUES ('32', 'Admin/Adset/deleteAd', '广告删除', '1', '1', '', '2');
INSERT INTO `food_auth_rule` VALUES ('33', 'Admin/GoodsClass/index', '商品分类显示', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('34', 'Admin/GoodsClass/addClass', '商品分类添加页面', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('35', 'Admin/GoodsClass/modifyClass', '商品分类修改页面', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('36', 'Admin/GoodsClass/insertClass', '商品分类添加', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('37', 'Admin/GoodsClass/updataClass', '商品分类修改', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('38', 'Admin/GoodsClass/deleteClass', '商品分类删除', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('39', 'Admin/GoodsClass/viewClassId', '商品分类显示分类id', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('41', 'Admin/Goodsattr/index', '商品属性查看', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('42', 'Admin/Goodsattr/addAttr', '商品属性添加页面', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('43', 'Admin/Goodsattr/modifyAttr', '商品属性修改页面', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('44', 'Admin/Goodsattr/insertAttr', '商品属性添加', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('45', 'Admin/Goodsattr/updataAttr', '商品属性修改', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('46', 'Admin/Goodsattr/deleteAttr', '商品属性删除', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('47', 'Admin/Goodsbrand/index', '商品品牌查看', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('48', 'Admin/Goodsbrand/addBrand', '商品品牌添加页面', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('49', 'Admin/Goodsbrand/modifyBrand', '商品品牌修改页面', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('50', 'Admin/Goodsbrand/insertBrand', '商品品牌添加', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('51', 'Admin/Goodsbrand/updataBrand', '商品品牌修改', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('52', 'Admin/Goodsbrand/deleteBrand', '商品品牌删除', '1', '1', '', '4');
INSERT INTO `food_auth_rule` VALUES ('53', 'Admin/Couponmanage/index', '显示优惠券组列表', '1', '1', '', '7');
INSERT INTO `food_auth_rule` VALUES ('54', 'Admin/Couponmanage/coupons', '优惠券详情列表', '1', '1', '', '7');
INSERT INTO `food_auth_rule` VALUES ('55', 'Admin/Couponmanage/addCoupon', '添加优惠券', '1', '1', '', '7');
INSERT INTO `food_auth_rule` VALUES ('56', 'Admin/Couponmanage/modifyCoupon', '修改优惠券', '1', '1', '', '7');
INSERT INTO `food_auth_rule` VALUES ('57', 'Admin/Couponmanage/insertCoupon', '优惠券添加', '1', '1', '', '7');
INSERT INTO `food_auth_rule` VALUES ('58', 'Admin/Couponmanage/updataCoupon', '优惠券修改', '1', '1', '', '7');
INSERT INTO `food_auth_rule` VALUES ('59', 'Admin/Couponmanage/deleteCoupon', '删除优惠券', '1', '1', '', '7');
INSERT INTO `food_auth_rule` VALUES ('60', 'Admin/Couponmanage/couponState', '更新优惠券状态', '1', '1', '', '7');
INSERT INTO `food_auth_rule` VALUES ('62', 'Admin/Accesslist/index', '权限列表页面', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('63', 'Admin/Accesslist/addAccess', '权限添加页面', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('64', 'Admin/Accesslist/modifyAccess', '权限修改页面', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('65', 'Admin/Accesslist/insertAccess', '权限添加', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('66', 'Admin/Accesslist/updataAccess', '权限修改', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('67', 'Admin/Accesslist/deleteAccess', '权限删除', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('68', 'Admin/Accesslist/accessState', '权限状态更新', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('69', 'Admin/Grouplist/index', '角色管理页面', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('70', 'Admin/Grouplist/addGroup', '角色添加页面', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('71', 'Admin/Grouplist/modifyGroup', '角色修改页面', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('72', 'Admin/Grouplist/insertGroup', '角色添加', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('73', 'Admin/Grouplist/updataGroup', '角色修改', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('74', 'Admin/Grouplist/deleteGroup', '角色删除', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('75', 'Admin/Grouplist/groupState', '角色状态更新', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('76', 'Admin/Grouplist/groupMem', '角色成员管理页面', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('77', 'Admin/Grouplist/addMem', '角色成员添加页面', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('78', 'Admin/Grouplist/insertMem', '角色成员添加', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('79', 'Admin/Grouplist/deleteMem', '角色成员删除', '1', '1', '', '10');
INSERT INTO `food_auth_rule` VALUES ('80', 'Admin/Member/index', '用户管理', '1', '1', '', '3');
INSERT INTO `food_auth_rule` VALUES ('81', 'Admin/Memlevel/index', '用户等级', '1', '1', '', '3');
INSERT INTO `food_auth_rule` VALUES ('82', 'Admin/Goodsissue/index', '商品发布', '1', '1', '', '5');
INSERT INTO `food_auth_rule` VALUES ('83', 'Admin/Goodsup/index', '商品上架', '1', '1', '', '5');
INSERT INTO `food_auth_rule` VALUES ('84', 'Admin/Goodsdown/index', '商品下架', '1', '1', '', '5');
INSERT INTO `food_auth_rule` VALUES ('85', 'Admin/Ordermanage/index', '订单管理', '1', '1', '', '6');
INSERT INTO `food_auth_rule` VALUES ('86', 'Admin/Reviewmanage/index', '评价管理', '1', '1', '', '9');
INSERT INTO `food_auth_rule` VALUES ('87', 'Admin/Articleclasses/index', '文章分类', '1', '1', '', '8');
INSERT INTO `food_auth_rule` VALUES ('88', 'Admin/Articlemanage/index', '文章管理', '1', '1', '', '8');
INSERT INTO `food_auth_rule` VALUES ('89', 'Admin/index/mang', '网站管理', '1', '1', '', '1');

-- ----------------------------
-- Table structure for food_brand
-- ----------------------------
DROP TABLE IF EXISTS `food_brand`;
CREATE TABLE `food_brand` (
  `bid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bname` varchar(255) NOT NULL,
  `firstchar` char(1) NOT NULL,
  `brandpic` varchar(255) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_brand
-- ----------------------------
INSERT INTO `food_brand` VALUES ('120', '测试', 'C', '');

-- ----------------------------
-- Table structure for food_brandtoclass
-- ----------------------------
DROP TABLE IF EXISTS `food_brandtoclass`;
CREATE TABLE `food_brandtoclass` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bid` mediumint(8) unsigned NOT NULL,
  `cid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bid` (`bid`,`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=332 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_brandtoclass
-- ----------------------------
INSERT INTO `food_brandtoclass` VALUES ('103', '25', '111');
INSERT INTO `food_brandtoclass` VALUES ('102', '25', '110');
INSERT INTO `food_brandtoclass` VALUES ('101', '25', '108');
INSERT INTO `food_brandtoclass` VALUES ('100', '25', '107');
INSERT INTO `food_brandtoclass` VALUES ('99', '25', '106');
INSERT INTO `food_brandtoclass` VALUES ('98', '25', '105');
INSERT INTO `food_brandtoclass` VALUES ('97', '25', '103');
INSERT INTO `food_brandtoclass` VALUES ('96', '25', '102');
INSERT INTO `food_brandtoclass` VALUES ('95', '25', '99');
INSERT INTO `food_brandtoclass` VALUES ('94', '25', '98');
INSERT INTO `food_brandtoclass` VALUES ('93', '25', '97');
INSERT INTO `food_brandtoclass` VALUES ('92', '25', '94');
INSERT INTO `food_brandtoclass` VALUES ('91', '25', '91');
INSERT INTO `food_brandtoclass` VALUES ('90', '25', '90');
INSERT INTO `food_brandtoclass` VALUES ('89', '25', '89');
INSERT INTO `food_brandtoclass` VALUES ('88', '25', '88');
INSERT INTO `food_brandtoclass` VALUES ('87', '25', '87');
INSERT INTO `food_brandtoclass` VALUES ('86', '25', '86');
INSERT INTO `food_brandtoclass` VALUES ('85', '25', '85');
INSERT INTO `food_brandtoclass` VALUES ('84', '25', '83');
INSERT INTO `food_brandtoclass` VALUES ('83', '25', '82');
INSERT INTO `food_brandtoclass` VALUES ('82', '25', '81');
INSERT INTO `food_brandtoclass` VALUES ('81', '25', '80');
INSERT INTO `food_brandtoclass` VALUES ('80', '25', '78');
INSERT INTO `food_brandtoclass` VALUES ('79', '25', '77');
INSERT INTO `food_brandtoclass` VALUES ('56', '22', '61');
INSERT INTO `food_brandtoclass` VALUES ('55', '22', '60');
INSERT INTO `food_brandtoclass` VALUES ('54', '22', '59');
INSERT INTO `food_brandtoclass` VALUES ('53', '22', '57');
INSERT INTO `food_brandtoclass` VALUES ('52', '22', '56');
INSERT INTO `food_brandtoclass` VALUES ('61', '23', '56');
INSERT INTO `food_brandtoclass` VALUES ('62', '23', '57');
INSERT INTO `food_brandtoclass` VALUES ('63', '23', '59');
INSERT INTO `food_brandtoclass` VALUES ('64', '23', '60');
INSERT INTO `food_brandtoclass` VALUES ('65', '23', '61');
INSERT INTO `food_brandtoclass` VALUES ('66', '23', '62');
INSERT INTO `food_brandtoclass` VALUES ('67', '23', '63');
INSERT INTO `food_brandtoclass` VALUES ('68', '23', '64');
INSERT INTO `food_brandtoclass` VALUES ('69', '23', '65');
INSERT INTO `food_brandtoclass` VALUES ('70', '24', '56');
INSERT INTO `food_brandtoclass` VALUES ('71', '24', '57');
INSERT INTO `food_brandtoclass` VALUES ('72', '24', '59');
INSERT INTO `food_brandtoclass` VALUES ('73', '24', '60');
INSERT INTO `food_brandtoclass` VALUES ('74', '24', '61');
INSERT INTO `food_brandtoclass` VALUES ('75', '24', '62');
INSERT INTO `food_brandtoclass` VALUES ('76', '24', '63');
INSERT INTO `food_brandtoclass` VALUES ('77', '24', '64');
INSERT INTO `food_brandtoclass` VALUES ('78', '24', '65');
INSERT INTO `food_brandtoclass` VALUES ('104', '25', '112');
INSERT INTO `food_brandtoclass` VALUES ('105', '25', '113');
INSERT INTO `food_brandtoclass` VALUES ('106', '25', '114');
INSERT INTO `food_brandtoclass` VALUES ('107', '25', '115');
INSERT INTO `food_brandtoclass` VALUES ('108', '25', '117');
INSERT INTO `food_brandtoclass` VALUES ('109', '25', '118');
INSERT INTO `food_brandtoclass` VALUES ('110', '25', '119');
INSERT INTO `food_brandtoclass` VALUES ('111', '25', '120');
INSERT INTO `food_brandtoclass` VALUES ('112', '25', '121');
INSERT INTO `food_brandtoclass` VALUES ('113', '25', '122');
INSERT INTO `food_brandtoclass` VALUES ('114', '25', '134');
INSERT INTO `food_brandtoclass` VALUES ('115', '25', '135');
INSERT INTO `food_brandtoclass` VALUES ('116', '25', '136');
INSERT INTO `food_brandtoclass` VALUES ('117', '25', '137');
INSERT INTO `food_brandtoclass` VALUES ('118', '25', '138');
INSERT INTO `food_brandtoclass` VALUES ('119', '25', '139');
INSERT INTO `food_brandtoclass` VALUES ('120', '25', '141');
INSERT INTO `food_brandtoclass` VALUES ('121', '25', '143');
INSERT INTO `food_brandtoclass` VALUES ('122', '25', '144');
INSERT INTO `food_brandtoclass` VALUES ('123', '25', '145');
INSERT INTO `food_brandtoclass` VALUES ('124', '25', '146');
INSERT INTO `food_brandtoclass` VALUES ('125', '25', '152');
INSERT INTO `food_brandtoclass` VALUES ('126', '25', '153');
INSERT INTO `food_brandtoclass` VALUES ('127', '25', '154');
INSERT INTO `food_brandtoclass` VALUES ('128', '25', '166');
INSERT INTO `food_brandtoclass` VALUES ('129', '25', '172');
INSERT INTO `food_brandtoclass` VALUES ('130', '26', '77');
INSERT INTO `food_brandtoclass` VALUES ('228', '28', '127');
INSERT INTO `food_brandtoclass` VALUES ('227', '28', '126');
INSERT INTO `food_brandtoclass` VALUES ('226', '28', '125');
INSERT INTO `food_brandtoclass` VALUES ('225', '28', '124');
INSERT INTO `food_brandtoclass` VALUES ('224', '28', '77');
INSERT INTO `food_brandtoclass` VALUES ('223', '27', '141');
INSERT INTO `food_brandtoclass` VALUES ('222', '27', '140');
INSERT INTO `food_brandtoclass` VALUES ('221', '27', '139');
INSERT INTO `food_brandtoclass` VALUES ('220', '27', '138');
INSERT INTO `food_brandtoclass` VALUES ('219', '27', '137');
INSERT INTO `food_brandtoclass` VALUES ('218', '27', '136');
INSERT INTO `food_brandtoclass` VALUES ('217', '27', '135');
INSERT INTO `food_brandtoclass` VALUES ('216', '27', '134');
INSERT INTO `food_brandtoclass` VALUES ('215', '27', '122');
INSERT INTO `food_brandtoclass` VALUES ('214', '27', '121');
INSERT INTO `food_brandtoclass` VALUES ('213', '27', '120');
INSERT INTO `food_brandtoclass` VALUES ('212', '27', '119');
INSERT INTO `food_brandtoclass` VALUES ('211', '27', '118');
INSERT INTO `food_brandtoclass` VALUES ('210', '27', '117');
INSERT INTO `food_brandtoclass` VALUES ('209', '27', '116');
INSERT INTO `food_brandtoclass` VALUES ('208', '27', '115');
INSERT INTO `food_brandtoclass` VALUES ('207', '27', '114');
INSERT INTO `food_brandtoclass` VALUES ('206', '27', '113');
INSERT INTO `food_brandtoclass` VALUES ('205', '27', '112');
INSERT INTO `food_brandtoclass` VALUES ('204', '27', '111');
INSERT INTO `food_brandtoclass` VALUES ('203', '27', '110');
INSERT INTO `food_brandtoclass` VALUES ('202', '27', '109');
INSERT INTO `food_brandtoclass` VALUES ('201', '27', '108');
INSERT INTO `food_brandtoclass` VALUES ('200', '27', '107');
INSERT INTO `food_brandtoclass` VALUES ('199', '27', '106');
INSERT INTO `food_brandtoclass` VALUES ('198', '27', '105');
INSERT INTO `food_brandtoclass` VALUES ('197', '27', '97');
INSERT INTO `food_brandtoclass` VALUES ('196', '27', '95');
INSERT INTO `food_brandtoclass` VALUES ('195', '27', '94');
INSERT INTO `food_brandtoclass` VALUES ('194', '27', '93');
INSERT INTO `food_brandtoclass` VALUES ('193', '27', '91');
INSERT INTO `food_brandtoclass` VALUES ('192', '27', '90');
INSERT INTO `food_brandtoclass` VALUES ('191', '27', '89');
INSERT INTO `food_brandtoclass` VALUES ('190', '27', '88');
INSERT INTO `food_brandtoclass` VALUES ('189', '27', '87');
INSERT INTO `food_brandtoclass` VALUES ('188', '27', '86');
INSERT INTO `food_brandtoclass` VALUES ('187', '27', '85');
INSERT INTO `food_brandtoclass` VALUES ('186', '27', '84');
INSERT INTO `food_brandtoclass` VALUES ('185', '27', '83');
INSERT INTO `food_brandtoclass` VALUES ('184', '27', '82');
INSERT INTO `food_brandtoclass` VALUES ('183', '27', '81');
INSERT INTO `food_brandtoclass` VALUES ('182', '27', '80');
INSERT INTO `food_brandtoclass` VALUES ('181', '27', '77');
INSERT INTO `food_brandtoclass` VALUES ('180', '27', '78');
INSERT INTO `food_brandtoclass` VALUES ('229', '28', '128');
INSERT INTO `food_brandtoclass` VALUES ('230', '28', '129');
INSERT INTO `food_brandtoclass` VALUES ('231', '28', '130');
INSERT INTO `food_brandtoclass` VALUES ('232', '28', '131');
INSERT INTO `food_brandtoclass` VALUES ('233', '28', '132');
INSERT INTO `food_brandtoclass` VALUES ('234', '28', '143');
INSERT INTO `food_brandtoclass` VALUES ('235', '28', '144');
INSERT INTO `food_brandtoclass` VALUES ('236', '28', '146');
INSERT INTO `food_brandtoclass` VALUES ('237', '29', '77');
INSERT INTO `food_brandtoclass` VALUES ('238', '30', '77');
INSERT INTO `food_brandtoclass` VALUES ('239', '31', '77');
INSERT INTO `food_brandtoclass` VALUES ('240', '32', '77');
INSERT INTO `food_brandtoclass` VALUES ('241', '33', '77');
INSERT INTO `food_brandtoclass` VALUES ('242', '34', '77');
INSERT INTO `food_brandtoclass` VALUES ('243', '35', '77');
INSERT INTO `food_brandtoclass` VALUES ('244', '36', '77');
INSERT INTO `food_brandtoclass` VALUES ('245', '37', '77');
INSERT INTO `food_brandtoclass` VALUES ('246', '38', '77');
INSERT INTO `food_brandtoclass` VALUES ('247', '39', '77');
INSERT INTO `food_brandtoclass` VALUES ('248', '40', '77');
INSERT INTO `food_brandtoclass` VALUES ('249', '41', '77');
INSERT INTO `food_brandtoclass` VALUES ('250', '42', '77');
INSERT INTO `food_brandtoclass` VALUES ('251', '43', '77');
INSERT INTO `food_brandtoclass` VALUES ('252', '44', '77');
INSERT INTO `food_brandtoclass` VALUES ('253', '45', '77');
INSERT INTO `food_brandtoclass` VALUES ('254', '46', '77');
INSERT INTO `food_brandtoclass` VALUES ('255', '47', '77');
INSERT INTO `food_brandtoclass` VALUES ('256', '48', '77');
INSERT INTO `food_brandtoclass` VALUES ('257', '49', '77');
INSERT INTO `food_brandtoclass` VALUES ('258', '50', '77');
INSERT INTO `food_brandtoclass` VALUES ('259', '51', '77');
INSERT INTO `food_brandtoclass` VALUES ('260', '52', '77');
INSERT INTO `food_brandtoclass` VALUES ('261', '53', '77');
INSERT INTO `food_brandtoclass` VALUES ('262', '54', '77');
INSERT INTO `food_brandtoclass` VALUES ('263', '55', '77');
INSERT INTO `food_brandtoclass` VALUES ('264', '56', '77');
INSERT INTO `food_brandtoclass` VALUES ('265', '57', '77');
INSERT INTO `food_brandtoclass` VALUES ('266', '58', '77');
INSERT INTO `food_brandtoclass` VALUES ('267', '59', '77');
INSERT INTO `food_brandtoclass` VALUES ('268', '60', '77');
INSERT INTO `food_brandtoclass` VALUES ('269', '61', '77');
INSERT INTO `food_brandtoclass` VALUES ('270', '62', '77');
INSERT INTO `food_brandtoclass` VALUES ('271', '63', '77');
INSERT INTO `food_brandtoclass` VALUES ('272', '64', '77');
INSERT INTO `food_brandtoclass` VALUES ('273', '65', '77');
INSERT INTO `food_brandtoclass` VALUES ('274', '66', '77');
INSERT INTO `food_brandtoclass` VALUES ('275', '67', '77');
INSERT INTO `food_brandtoclass` VALUES ('276', '68', '77');
INSERT INTO `food_brandtoclass` VALUES ('277', '69', '77');
INSERT INTO `food_brandtoclass` VALUES ('278', '70', '77');
INSERT INTO `food_brandtoclass` VALUES ('279', '71', '77');
INSERT INTO `food_brandtoclass` VALUES ('280', '72', '77');
INSERT INTO `food_brandtoclass` VALUES ('281', '73', '77');
INSERT INTO `food_brandtoclass` VALUES ('282', '74', '77');
INSERT INTO `food_brandtoclass` VALUES ('283', '75', '77');
INSERT INTO `food_brandtoclass` VALUES ('284', '76', '77');
INSERT INTO `food_brandtoclass` VALUES ('285', '77', '77');
INSERT INTO `food_brandtoclass` VALUES ('286', '78', '77');
INSERT INTO `food_brandtoclass` VALUES ('287', '79', '77');
INSERT INTO `food_brandtoclass` VALUES ('288', '80', '77');
INSERT INTO `food_brandtoclass` VALUES ('289', '81', '77');
INSERT INTO `food_brandtoclass` VALUES ('290', '82', '77');
INSERT INTO `food_brandtoclass` VALUES ('291', '83', '77');
INSERT INTO `food_brandtoclass` VALUES ('292', '84', '77');
INSERT INTO `food_brandtoclass` VALUES ('293', '85', '77');
INSERT INTO `food_brandtoclass` VALUES ('294', '86', '77');
INSERT INTO `food_brandtoclass` VALUES ('295', '87', '77');
INSERT INTO `food_brandtoclass` VALUES ('296', '88', '77');
INSERT INTO `food_brandtoclass` VALUES ('297', '89', '77');
INSERT INTO `food_brandtoclass` VALUES ('298', '90', '77');
INSERT INTO `food_brandtoclass` VALUES ('299', '91', '77');
INSERT INTO `food_brandtoclass` VALUES ('300', '92', '77');
INSERT INTO `food_brandtoclass` VALUES ('301', '93', '77');
INSERT INTO `food_brandtoclass` VALUES ('302', '94', '77');
INSERT INTO `food_brandtoclass` VALUES ('303', '95', '77');
INSERT INTO `food_brandtoclass` VALUES ('304', '96', '77');
INSERT INTO `food_brandtoclass` VALUES ('305', '97', '77');
INSERT INTO `food_brandtoclass` VALUES ('306', '98', '77');
INSERT INTO `food_brandtoclass` VALUES ('307', '99', '77');
INSERT INTO `food_brandtoclass` VALUES ('308', '100', '77');
INSERT INTO `food_brandtoclass` VALUES ('309', '101', '77');
INSERT INTO `food_brandtoclass` VALUES ('310', '102', '77');
INSERT INTO `food_brandtoclass` VALUES ('311', '103', '77');
INSERT INTO `food_brandtoclass` VALUES ('312', '104', '77');
INSERT INTO `food_brandtoclass` VALUES ('313', '105', '77');
INSERT INTO `food_brandtoclass` VALUES ('314', '106', '77');
INSERT INTO `food_brandtoclass` VALUES ('315', '107', '77');
INSERT INTO `food_brandtoclass` VALUES ('316', '108', '77');
INSERT INTO `food_brandtoclass` VALUES ('317', '109', '77');
INSERT INTO `food_brandtoclass` VALUES ('318', '110', '77');
INSERT INTO `food_brandtoclass` VALUES ('319', '111', '77');
INSERT INTO `food_brandtoclass` VALUES ('320', '112', '77');
INSERT INTO `food_brandtoclass` VALUES ('321', '113', '77');
INSERT INTO `food_brandtoclass` VALUES ('322', '114', '77');
INSERT INTO `food_brandtoclass` VALUES ('323', '115', '77');
INSERT INTO `food_brandtoclass` VALUES ('324', '116', '77');
INSERT INTO `food_brandtoclass` VALUES ('325', '117', '77');
INSERT INTO `food_brandtoclass` VALUES ('326', '118', '77');
INSERT INTO `food_brandtoclass` VALUES ('327', '119', '77');
INSERT INTO `food_brandtoclass` VALUES ('328', '119', '80');
INSERT INTO `food_brandtoclass` VALUES ('329', '120', '347');
INSERT INTO `food_brandtoclass` VALUES ('330', '120', '348');
INSERT INTO `food_brandtoclass` VALUES ('331', '120', '349');

-- ----------------------------
-- Table structure for food_classify
-- ----------------------------
DROP TABLE IF EXISTS `food_classify`;
CREATE TABLE `food_classify` (
  `cid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `parentid` mediumint(8) NOT NULL,
  `cpath` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=387 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_classify
-- ----------------------------
INSERT INTO `food_classify` VALUES ('382', '点心', '379', '0-379');
INSERT INTO `food_classify` VALUES ('381', '蛋糕', '379', '0-379');
INSERT INTO `food_classify` VALUES ('380', '饮品少不了', '0', '0');
INSERT INTO `food_classify` VALUES ('379', '糕点最美味', '0', '0');
INSERT INTO `food_classify` VALUES ('378', '自助', '375', '0-375');
INSERT INTO `food_classify` VALUES ('377', '烤肉', '375', '0-375');
INSERT INTO `food_classify` VALUES ('376', '火锅', '375', '0-375');
INSERT INTO `food_classify` VALUES ('375', '火到没朋友', '0', '0');
INSERT INTO `food_classify` VALUES ('374', '其他', '371', '0-371');
INSERT INTO `food_classify` VALUES ('373', '东北菜', '371', '0-371');
INSERT INTO `food_classify` VALUES ('372', '家常菜', '371', '0-371');
INSERT INTO `food_classify` VALUES ('371', '饭菜最实惠', '0', '0');
INSERT INTO `food_classify` VALUES ('370', '其他', '367', '0-367');
INSERT INTO `food_classify` VALUES ('369', '包子、饼', '367', '0-367');
INSERT INTO `food_classify` VALUES ('368', '粥', '367', '0-367');
INSERT INTO `food_classify` VALUES ('367', '早餐要营养', '0', '0');
INSERT INTO `food_classify` VALUES ('383', '甜品', '379', '0-379');
INSERT INTO `food_classify` VALUES ('384', '咖啡', '380', '0-380');
INSERT INTO `food_classify` VALUES ('385', '茶', '380', '0-380');
INSERT INTO `food_classify` VALUES ('386', '奶茶', '380', '0-380');

-- ----------------------------
-- Table structure for food_consignee
-- ----------------------------
DROP TABLE IF EXISTS `food_consignee`;
CREATE TABLE `food_consignee` (
  `cid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) unsigned NOT NULL,
  `consignee` char(16) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `cphone` char(11) NOT NULL,
  `ctelphone` char(12) NOT NULL,
  `cpostcode` mediumint(6) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_consignee
-- ----------------------------

-- ----------------------------
-- Table structure for food_coupongroups
-- ----------------------------
DROP TABLE IF EXISTS `food_coupongroups`;
CREATE TABLE `food_coupongroups` (
  `cgid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cid` mediumint(8) unsigned NOT NULL,
  `cgname` varchar(255) NOT NULL,
  `cgspend` int(6) unsigned NOT NULL DEFAULT '0',
  `cgreduce` int(6) NOT NULL DEFAULT '0',
  `cgstarttime` int(10) unsigned NOT NULL,
  `cgendtime` int(10) unsigned NOT NULL,
  `cgnums` int(10) unsigned NOT NULL,
  `cgprefix` char(20) NOT NULL,
  `cgstate` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cgid`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_coupongroups
-- ----------------------------
INSERT INTO `food_coupongroups` VALUES ('28', '0', '全场通用优惠券', '100', '10', '1434556800', '1446739199', '10', 'Q', '1');

-- ----------------------------
-- Table structure for food_coupons_28
-- ----------------------------
DROP TABLE IF EXISTS `food_coupons_28`;
CREATE TABLE `food_coupons_28` (
  `cpid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cgid` mediumint(8) unsigned NOT NULL,
  `uid` mediumint(8) DEFAULT NULL,
  `cpcode` char(24) NOT NULL,
  `cpstate` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cpid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_coupons_28
-- ----------------------------
INSERT INTO `food_coupons_28` VALUES ('1', '28', null, 'Q5583849B93EA8', '0');
INSERT INTO `food_coupons_28` VALUES ('2', '28', null, 'Q5583849B94678', '0');
INSERT INTO `food_coupons_28` VALUES ('3', '28', null, 'Q5583849B94E48', '0');
INSERT INTO `food_coupons_28` VALUES ('4', '28', null, 'Q5583849B95230', '0');
INSERT INTO `food_coupons_28` VALUES ('5', '28', null, 'Q5583849B95A01', '0');
INSERT INTO `food_coupons_28` VALUES ('6', '28', null, 'Q5583849B95DE9', '0');
INSERT INTO `food_coupons_28` VALUES ('7', '28', null, 'Q5583849B965B9', '0');
INSERT INTO `food_coupons_28` VALUES ('8', '28', null, 'Q5583849B96D89', '0');
INSERT INTO `food_coupons_28` VALUES ('9', '28', null, 'Q5583849B97171', '0');
INSERT INTO `food_coupons_28` VALUES ('10', '28', null, 'Q5583849B97941', '0');

-- ----------------------------
-- Table structure for food_deliveryaddress
-- ----------------------------
DROP TABLE IF EXISTS `food_deliveryaddress`;
CREATE TABLE `food_deliveryaddress` (
  `addid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) unsigned NOT NULL,
  `address` varchar(255) NOT NULL,
  `consignee` char(30) NOT NULL,
  `mphone` char(11) NOT NULL,
  `phone` char(20) NOT NULL,
  `zipcode` mediumint(6) NOT NULL,
  `tagging` varchar(30) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`addid`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_deliveryaddress
-- ----------------------------
INSERT INTO `food_deliveryaddress` VALUES ('25', '1110', '河北省-秦皇岛市-抚宁县- 1号楼', '李想', '18804601926', '', '51800', '李想', '1');

-- ----------------------------
-- Table structure for food_floorads
-- ----------------------------
DROP TABLE IF EXISTS `food_floorads`;
CREATE TABLE `food_floorads` (
  `fadid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `frid` mediumint(8) unsigned NOT NULL,
  `fadtitle` varchar(255) NOT NULL,
  `fadpic` varchar(255) NOT NULL,
  `fadurl` varchar(255) NOT NULL,
  `fadplace` smallint(5) NOT NULL,
  `fadstarttime` int(10) NOT NULL,
  `fadendtime` int(10) NOT NULL,
  PRIMARY KEY (`fadid`)
) ENGINE=MyISAM AUTO_INCREMENT=227 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_floorads
-- ----------------------------
INSERT INTO `food_floorads` VALUES ('226', '38', '早餐', '2018-03-09/5aa1a7923ee57.jpg', '105', '2', '1520524800', '1577894399');
INSERT INTO `food_floorads` VALUES ('225', '38', '早餐', '2018-03-09/5aa1a72090512.jpg', '104', '2', '1520524800', '1577894399');
INSERT INTO `food_floorads` VALUES ('224', '38', '早餐', '2018-03-09/5aa1a66422fef.jpg', '98', '2', '1520524800', '1577894399');
INSERT INTO `food_floorads` VALUES ('223', '38', '早餐', '2018-03-09/5aa1a5e052f5c.jpg', '100', '2', '1520524800', '1577894399');
INSERT INTO `food_floorads` VALUES ('222', '38', '早餐', '2018-03-09/5aa1a48a36bed.jpg', '100', '3', '1520524800', '1577894399');
INSERT INTO `food_floorads` VALUES ('221', '38', '早餐', '2018-03-09/5aa1a3e14673e.jpg', '101', '1', '1520524800', '1577894399');

-- ----------------------------
-- Table structure for food_floors
-- ----------------------------
DROP TABLE IF EXISTS `food_floors`;
CREATE TABLE `food_floors` (
  `frid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `frsort` tinyint(1) NOT NULL,
  `cid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`frid`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_floors
-- ----------------------------
INSERT INTO `food_floors` VALUES ('38', '1', '367');

-- ----------------------------
-- Table structure for food_floortext
-- ----------------------------
DROP TABLE IF EXISTS `food_floortext`;
CREATE TABLE `food_floortext` (
  `ftid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `frid` mediumint(8) NOT NULL,
  `ftext` varchar(20) NOT NULL,
  `fturl` varchar(255) NOT NULL,
  PRIMARY KEY (`ftid`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_floortext
-- ----------------------------

-- ----------------------------
-- Table structure for food_friendlink
-- ----------------------------
DROP TABLE IF EXISTS `food_friendlink`;
CREATE TABLE `food_friendlink` (
  `fid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `furl` varchar(255) NOT NULL,
  `flogo` varchar(255) NOT NULL,
  `ftime` varchar(255) NOT NULL,
  `fsort` int(11) NOT NULL,
  `fcontact` varchar(255) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_friendlink
-- ----------------------------
INSERT INTO `food_friendlink` VALUES ('25', '京东', 'www.jd.com1', '2014-06-30/53b0d32ab3597.jpg', '1404096390', '4', '123456789');
INSERT INTO `food_friendlink` VALUES ('20', '百度', 'www.baidu.com', '2014-06-30/53b0d309374f5.jpg', '1403243760', '1', '123456789');
INSERT INTO `food_friendlink` VALUES ('19', '搜狐', 'www.souhu.com', '2014-06-30/53b0d313bd97c.jpg', '1403157414', '3', '123456789');
INSERT INTO `food_friendlink` VALUES ('23', '新浪', 'www.sina.com', '2014-06-30/53b0d31f59031.jpg', '1404093234', '3', '123456789');
INSERT INTO `food_friendlink` VALUES ('26', '淘宝', 'www.taobao.com', '2014-06-30/53b0d343941c8.jpg', '1404096469', '5', '123456789');
INSERT INTO `food_friendlink` VALUES ('27', '天猫', 'www.tmall', '2014-06-30/53b0d351c4f2f.jpg', '1404096829', '6', '123456789');

-- ----------------------------
-- Table structure for food_goods
-- ----------------------------
DROP TABLE IF EXISTS `food_goods`;
CREATE TABLE `food_goods` (
  `gid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `gnum` int(10) unsigned NOT NULL,
  `gclassification` mediumint(8) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `gpic` text NOT NULL,
  `gintroduce` text NOT NULL,
  `goldprice` varchar(11) NOT NULL,
  `gprice` varchar(11) NOT NULL,
  `gissuetime` int(10) NOT NULL,
  `issale` tinyint(1) NOT NULL,
  `guptime` int(10) NOT NULL,
  `gdowntime` int(10) NOT NULL,
  `goodnums` int(10) NOT NULL,
  `gattribute` tinytext NOT NULL,
  `gspecifications` text NOT NULL,
  `gsellnums` int(10) NOT NULL DEFAULT '0',
  `bid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`gid`),
  UNIQUE KEY `gnum` (`gnum`)
) ENGINE=MyISAM AUTO_INCREMENT=142 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_goods
-- ----------------------------
INSERT INTO `food_goods` VALUES ('140', '1520333974', '386', '珍珠奶茶', '2018-03-06/2018030618593117178851645a9e74936ea05.jpg,2018-03-06/201803061859312992291135a9e74937270e.jpg,2018-03-06/2018030618593115921226355a9e749376417.jpg,2018-03-06/2018030618593114515047225a9e749376417.jpg,2018-03-06/2018030618593115571352715a9e74937a120.jpg', '<p>珍珠奶茶珍珠奶茶珍珠奶茶珍珠奶茶珍珠奶茶珍珠奶茶珍珠奶茶</p>', '25', '21', '1520333974', '1', '1520333974', '0', '11', '', '<p>杯</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('141', '1520334146', '386', '蒙古奶茶', '2018-03-06/20180306190224261485755a9e7540a037a.jpg,2018-03-06/2018030619022419639405575a9e7540a037a.jpg,2018-03-06/201803061902241362268285a9e7540a037a.jpg,2018-03-06/2018030619022417182241065a9e7540a4083.jpg,2018-03-06/2018030619022413056866855a9e7540a4083.jpg', '<p>蒙古奶茶蒙古奶茶蒙古奶茶蒙古奶茶蒙古奶茶蒙古奶茶蒙古奶茶蒙古奶茶蒙古奶茶蒙古奶茶蒙古奶茶蒙古奶茶</p>', '35', '26', '1520334146', '1', '1520334146', '0', '16', '', '<p>杯</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('133', '1520332878', '384', '拿铁', '2018-03-06/2018030618411616646576075a9e704ccdfe6.jpg,2018-03-06/2018030618411620600692765a9e704cd1cef.jpg,2018-03-06/2018030618411615933802055a9e704cd59f8.jpg,2018-03-06/201803061841161583787665a9e704cd59f8.jpg,2018-03-06/201803061841161309236445a9e704cd9701.jpg', '<p>拿铁拿铁拿铁拿铁拿铁拿铁拿铁拿铁</p>', '88', '78', '1520332878', '1', '1520332878', '0', '18', '', '<p>杯</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('134', '1520333040', '384', '雪顶咖啡', '2018-03-06/2018030618435819248134905a9e70ee4c4b4.jpg,2018-03-06/2018030618435820487899435a9e70ee501bd.jpg,2018-03-06/2018030618435818595854195a9e70ee501bd.jpg,2018-03-06/2018030618435818688976715a9e70ee53ec6.jpg,2018-03-06/201803061843582244527785a9e70ee53ec6.jpg', '<p>雪顶咖啡雪顶咖啡雪顶咖啡雪顶咖啡雪顶咖啡雪顶咖啡雪顶咖啡</p>', '68', '58', '1520333040', '1', '1520333040', '0', '18', '', '<p>杯</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('135', '1520333254', '384', '摩卡咖啡', '2018-03-06/2018030618473315244395365a9e71c51e848.jpg,2018-03-06/20180306184733285337005a9e71c51e848.jpg,2018-03-06/201803061847336241356875a9e71c522551.jpg,2018-03-06/2018030618473320911634145a9e71c52625a.jpg', '<p>摩卡咖啡摩卡咖啡摩卡咖啡摩卡咖啡摩卡咖啡摩卡咖啡</p>', '58', '48', '1520333254', '1', '1520333254', '0', '18', '', '<p>杯</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('136', '1520333389', '385', '绿茶', '2018-03-06/201803061849479797142225a9e724b6acfc.jpg,2018-03-06/201803061849479504328315a9e724b6acfc.jpg,2018-03-06/2018030618494717742987035a9e724b6ea05.jpg,2018-03-06/2018030618494715488114085a9e724b6ea05.jpg,2018-03-06/201803061849476877070055a9e724b6ea05.jpg', '<p>绿茶绿茶绿茶绿茶绿茶绿茶绿茶绿茶绿茶绿茶绿茶绿茶绿茶</p>', '28', '26', '1520333389', '1', '1520333389', '0', '16', '', '<p>杯</p><p><br/></p>', '0', '0');
INSERT INTO `food_goods` VALUES ('137', '1520333558', '385', '普洱', '2018-03-06/2018030618523519060411475a9e72f3baeb9.jpg,2018-03-06/201803061852356445618685a9e72f3baeb9.jpg,2018-03-06/201803061852359570559885a9e72f3bebc2.jpg,2018-03-06/2018030618523511649795405a9e72f3bebc2.jpg,2018-03-06/201803061852353548247555a9e72f3c28cb.jpg', '<p>普洱普洱普洱普洱普洱普洱普洱普洱普洱普洱普洱普洱普洱普洱普洱普洱普洱普洱普洱普洱</p>', '38', '35', '1520333558', '1', '1520333558', '0', '15', '', '<p>壶</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('138', '1520333694', '385', '铁观音', '2018-03-06/201803061854526208853225a9e737c07a12.png,2018-03-06/2018030618545214625521325a9e737c0b71b.png,2018-03-06/2018030618545212130813505a9e737c0b71b.png,2018-03-06/2018030618545218316142795a9e737c0f424.png,2018-03-06/2018030618545211908992415a9e737c1312d.png', '<p>铁观音铁观音铁观音铁观音铁观音铁观音铁观音铁观音铁观音铁观音</p>', '45', '38', '1520333694', '1', '1520333694', '0', '18', '', '<p>杯</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('139', '1520333819', '386', '草莓奶茶', '2018-03-06/201803061856579223004405a9e73f9a4083.jpg,2018-03-06/201803061856578535683185a9e73f9a7d8c.jpg,2018-03-06/2018030618565712649564075a9e73f9a7d8c.jpg,2018-03-06/2018030618565713972766175a9e73f9aba95.jpg,2018-03-06/201803061856579086866935a9e73f9aba95.jpg', '<p>草莓奶茶草莓奶茶草莓奶茶草莓奶茶草莓奶茶草莓奶茶草莓奶茶草莓奶茶草莓奶茶草莓奶茶草莓奶茶草莓奶茶草莓奶茶</p>', '28', '25', '1520333819', '1', '1520333819', '0', '15', '', '<p>杯</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('130', '1520332412', '383', '马卡龙', '2018-03-06/201803061833305774109045a9e6e7a81b32.jpg,2018-03-06/201803061833305768294025a9e6e7a81b32.jpg,2018-03-06/2018030618333016080502205a9e6e7a8583b.jpg,2018-03-06/2018030618333087918305a9e6e7a8583b.jpg,2018-03-06/201803061833302891782655a9e6e7a89544.jpg', '<p>马卡龙马卡龙马卡龙马卡龙马卡龙</p>', '88', '78', '1520332412', '1', '1520332412', '0', '18', '', '<p>盒</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('131', '1520332527', '383', '甜甜圈', '2018-03-06/201803061835254564425245a9e6eed40d99.jpg,2018-03-06/2018030618352519076128025a9e6eed44aa2.jpg,2018-03-06/20180306183525512665805a9e6eed487ab.jpg,2018-03-06/201803061835259197755465a9e6eed487ab.jpg,2018-03-06/2018030618352516352893695a9e6eed4c4b4.jpg', '<p>甜甜圈甜甜圈甜甜圈甜甜圈甜甜圈甜甜圈</p>', '58', '48', '1520332527', '1', '1520332527', '0', '18', '', '<p>盒</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('132', '1520332645', '383', '泡芙', '2018-03-06/2018030618372215422689515a9e6f6294c5f.jpg,2018-03-06/2018030618372214181824395a9e6f6294c5f.jpg,2018-03-06/201803061837222487192975a9e6f6298968.jpg,2018-03-06/2018030618372219383104855a9e6f6298968.jpg,2018-03-06/2018030618372213787856015a9e6f629c671.jpg', '<p>泡芙泡芙泡芙泡芙泡芙泡芙</p>', '28', '25', '1520332645', '1', '1520332645', '0', '15', '', '<p>盒</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('128', '1520332067', '382', '粉色点心', '2018-03-06/2018030618274614456250905a9e6d222dc6c.jpg,2018-03-06/2018030618274612927109545a9e6d222dc6c.jpg,2018-03-06/2018030618274615474664375a9e6d2231975.jpg,2018-03-06/201803061827466033516805a9e6d2231975.jpg,2018-03-06/201803061827468564261765a9e6d223567e.jpg', '<p>粉色点心粉色点心粉色点心粉色点心粉色点心粉色点心粉色点心</p>', '56', '48', '1520332067', '1', '1520332067', '0', '18', '', '<p>份</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('129', '1520332164', '382', '苏式点心', '2018-03-06/201803061829223609088245a9e6d827a120.jpg,2018-03-06/2018030618292211748259535a9e6d827de29.jpg,2018-03-06/2018030618292215744562655a9e6d8281b32.jpg,2018-03-06/201803061829228478517005a9e6d8281b32.jpg,2018-03-06/2018030618292212188566105a9e6d8281b32.jpg', '<h3 class=\"lb_title\" id=\"lbTitle\" style=\"margin: 0px 0px 10px; padding: 0px; font-size: 18px; overflow: hidden; text-overflow: ellipsis; color: rgb(51, 51, 51); font-weight: 400; line-height: 24px; font-family: &quot;microsoft yahei&quot;, arial, sans-serif; background-color: rgb(251, 251, 251);\"><a href=\"http://www.nipic.com/show/1/55/6445950kcf3b8323.html\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"search-view\" title=\"苏式点心摄影图_产品摄影_传统美食_餐饮美食\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51);\">苏式<span style=\"margin: 0px; padding: 0px; font-weight: 700;\">点心</span></a></h3><h3 class=\"lb_title\" id=\"lbTitle\" style=\"margin: 0px 0px 10px; padding: 0px; font-size: 18px; overflow: hidden; text-overflow: ellipsis; color: rgb(51, 51, 51); font-weight: 400; line-height: 24px; font-family: &quot;microsoft yahei&quot;, arial, sans-serif; background-color: rgb(251, 251, 251);\"><a href=\"http://www.nipic.com/show/1/55/6445950kcf3b8323.html\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"search-view\" title=\"苏式点心摄影图_产品摄影_传统美食_餐饮美食\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51);\">苏式<span style=\"margin: 0px; padding: 0px; font-weight: 700;\">点心</span></a></h3><h3 class=\"lb_title\" id=\"lbTitle\" style=\"margin: 0px 0px 10px; padding: 0px; font-size: 18px; overflow: hidden; text-overflow: ellipsis; color: rgb(51, 51, 51); font-weight: 400; line-height: 24px; font-family: &quot;microsoft yahei&quot;, arial, sans-serif; background-color: rgb(251, 251, 251);\"><a href=\"http://www.nipic.com/show/1/55/6445950kcf3b8323.html\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"search-view\" title=\"苏式点心摄影图_产品摄影_传统美食_餐饮美食\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51);\">苏式<span style=\"margin: 0px; padding: 0px; font-weight: 700;\">点心</span></a></h3><h3 class=\"lb_title\" id=\"lbTitle\" style=\"margin: 0px 0px 10px; padding: 0px; font-size: 18px; overflow: hidden; text-overflow: ellipsis; color: rgb(51, 51, 51); font-weight: 400; line-height: 24px; font-family: &quot;microsoft yahei&quot;, arial, sans-serif; background-color: rgb(251, 251, 251);\"><a href=\"http://www.nipic.com/show/1/55/6445950kcf3b8323.html\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"search-view\" title=\"苏式点心摄影图_产品摄影_传统美食_餐饮美食\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51);\">苏式<span style=\"margin: 0px; padding: 0px; font-weight: 700;\">点心</span></a></h3><h3 class=\"lb_title\" id=\"lbTitle\" style=\"margin: 0px 0px 10px; padding: 0px; font-size: 18px; overflow: hidden; text-overflow: ellipsis; color: rgb(51, 51, 51); font-weight: 400; line-height: 24px; font-family: &quot;microsoft yahei&quot;, arial, sans-serif; background-color: rgb(251, 251, 251);\"><a href=\"http://www.nipic.com/show/1/55/6445950kcf3b8323.html\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"search-view\" title=\"苏式点心摄影图_产品摄影_传统美食_餐饮美食\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51);\">苏式<span style=\"margin: 0px; padding: 0px; font-weight: 700;\">点心</span></a></h3><p><br/></p>', '35', '28', '1520332164', '1', '1520332164', '0', '18', '', '<p>盒</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('124', '1520331413', '381', '水果蛋糕', '2018-03-06/2018030618165113670395875a9e6a93f0537.jpg,2018-03-06/201803061816512277230235a9e6a93f0537.jpg,2018-03-06/2018030618165213258048815a9e6a9400000.jpg,2018-03-06/201803061816526324661155a9e6a9400000.jpg,2018-03-06/2018030618165218294834405a9e6a9403d09.jpg', '<p>水果蛋糕水果蛋糕水果蛋糕水果蛋糕</p>', '108', '88', '1520331413', '1', '1520331413', '0', '18', '', '<p>个</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('125', '1520331538', '381', '巧克力蛋糕', '2018-03-06/201803061917322484620015a9e78cccdfe6.jpg,2018-03-06/2018030619173213273865875a9e78cccdfe6.jpg,2018-03-06/2018030619173217608334865a9e78ccd1cef.jpg,2018-03-06/201803061917321212555485a9e78ccd59f8.jpg,2018-03-06/2018030619173216763595505a9e78ccdd40a.jpg', '<p>巧克力蛋糕巧克力蛋糕巧克力蛋糕巧克力蛋糕巧克力蛋糕</p>', '128', '128', '1520331538', '1', '1520331538', '0', '18', '', '<p>个</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('126', '1520331670', '381', '奶油蛋糕', '2018-03-06/2018030618231713490054355a9e6c156ea05.jpg,2018-03-06/2018030618210813103947645a9e6b9444aa2.jpg,2018-03-06/201803061823175144628595a9e6c157270e.jpg,2018-03-06/2018030618222113146532215a9e6bdd29f63.jpg,2018-03-06/201803061821088542617425a9e6b94487ab.jpg', '<p>奶油蛋糕奶油蛋糕奶油蛋糕奶油蛋糕奶油蛋糕奶油蛋糕奶油蛋糕</p>', '78', '78', '1520331670', '1', '1520331670', '0', '18', '', '<p>个</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('127', '1520331956', '382', '创意中式白皮酥点心', '2018-03-06/201803061825553187605885a9e6cb30b71b.jpg,2018-03-06/201803061825554979527015a9e6cb30f424.jpg,2018-03-06/201803061825558039639265a9e6cb30f424.jpg,2018-03-06/2018030618255516237835525a9e6cb31312d.jpg,2018-03-06/2018030618255518374816395a9e6cb31312d.jpg', '<h3 class=\"lb_title\" id=\"lbTitle\" style=\"margin: 0px 0px 10px; padding: 0px; font-size: 18px; overflow: hidden; text-overflow: ellipsis; color: rgb(51, 51, 51); font-weight: 400; line-height: 24px; font-family: &quot;microsoft yahei&quot;, arial, sans-serif; background-color: rgb(251, 251, 251);\"><a href=\"http://gouwu.mediav.com/ads-cps.html?cT3ngrnlv4PnhafniYcmdD3liJvmhI%2FkuK3lvI%2Fnmb3nmq7phaXngrnlv4PkuYvnuqLmooXmiqXmmKXnmoTlgZrms5Vf44CQ5Zu%2B6KejLi4uJmltZz1odHRwOi8vY3AyLmRvdWd1by5uZXQvdXBsb2FkL2NhaWt1LzAvNy8wLzYwMHg0MDBfMDdjMjQ4ZGZmY2ZkOWVjYzJkMDI2Y2IxNTlmZGFkNDAuanBnJmtleT10MDE2NWNiMzI4N2ViZmFmYzRhLmpwZyZ3PTYwMCZoPTQwMA%3D%3D&src=ts\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"search-view\" title=\"创意中式白皮酥点心之红梅报春的做法_【图解\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); text-decoration: none;\">创意中式白皮酥<span style=\"margin: 0px; padding: 0px; font-weight: 700;\">点心</span></a></h3><h3 class=\"lb_title\" id=\"lbTitle\" style=\"margin: 0px 0px 10px; padding: 0px; font-size: 18px; overflow: hidden; text-overflow: ellipsis; color: rgb(51, 51, 51); font-weight: 400; line-height: 24px; font-family: &quot;microsoft yahei&quot;, arial, sans-serif; background-color: rgb(251, 251, 251);\"><a href=\"http://gouwu.mediav.com/ads-cps.html?cT3ngrnlv4PnhafniYcmdD3liJvmhI%2FkuK3lvI%2Fnmb3nmq7phaXngrnlv4PkuYvnuqLmooXmiqXmmKXnmoTlgZrms5Vf44CQ5Zu%2B6KejLi4uJmltZz1odHRwOi8vY3AyLmRvdWd1by5uZXQvdXBsb2FkL2NhaWt1LzAvNy8wLzYwMHg0MDBfMDdjMjQ4ZGZmY2ZkOWVjYzJkMDI2Y2IxNTlmZGFkNDAuanBnJmtleT10MDE2NWNiMzI4N2ViZmFmYzRhLmpwZyZ3PTYwMCZoPTQwMA%3D%3D&src=ts\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"search-view\" title=\"创意中式白皮酥点心之红梅报春的做法_【图解\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); text-decoration: none;\">创意中式白皮酥<span style=\"margin: 0px; padding: 0px; font-weight: 700;\">点心</span></a></h3><h3 class=\"lb_title\" id=\"lbTitle\" style=\"margin: 0px 0px 10px; padding: 0px; font-size: 18px; overflow: hidden; text-overflow: ellipsis; color: rgb(51, 51, 51); font-weight: 400; line-height: 24px; font-family: &quot;microsoft yahei&quot;, arial, sans-serif; background-color: rgb(251, 251, 251);\"><a href=\"http://gouwu.mediav.com/ads-cps.html?cT3ngrnlv4PnhafniYcmdD3liJvmhI%2FkuK3lvI%2Fnmb3nmq7phaXngrnlv4PkuYvnuqLmooXmiqXmmKXnmoTlgZrms5Vf44CQ5Zu%2B6KejLi4uJmltZz1odHRwOi8vY3AyLmRvdWd1by5uZXQvdXBsb2FkL2NhaWt1LzAvNy8wLzYwMHg0MDBfMDdjMjQ4ZGZmY2ZkOWVjYzJkMDI2Y2IxNTlmZGFkNDAuanBnJmtleT10MDE2NWNiMzI4N2ViZmFmYzRhLmpwZyZ3PTYwMCZoPTQwMA%3D%3D&src=ts\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"search-view\" title=\"创意中式白皮酥点心之红梅报春的做法_【图解\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); text-decoration: none;\">创意中式白皮酥<span style=\"margin: 0px; padding: 0px; font-weight: 700;\">点心</span></a></h3><h3 class=\"lb_title\" id=\"lbTitle\" style=\"margin: 0px 0px 10px; padding: 0px; font-size: 18px; overflow: hidden; text-overflow: ellipsis; color: rgb(51, 51, 51); font-weight: 400; line-height: 24px; font-family: &quot;microsoft yahei&quot;, arial, sans-serif; background-color: rgb(251, 251, 251);\"><a href=\"http://gouwu.mediav.com/ads-cps.html?cT3ngrnlv4PnhafniYcmdD3liJvmhI%2FkuK3lvI%2Fnmb3nmq7phaXngrnlv4PkuYvnuqLmooXmiqXmmKXnmoTlgZrms5Vf44CQ5Zu%2B6KejLi4uJmltZz1odHRwOi8vY3AyLmRvdWd1by5uZXQvdXBsb2FkL2NhaWt1LzAvNy8wLzYwMHg0MDBfMDdjMjQ4ZGZmY2ZkOWVjYzJkMDI2Y2IxNTlmZGFkNDAuanBnJmtleT10MDE2NWNiMzI4N2ViZmFmYzRhLmpwZyZ3PTYwMCZoPTQwMA%3D%3D&src=ts\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"search-view\" title=\"创意中式白皮酥点心之红梅报春的做法_【图解\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); text-decoration: none;\">创意中式白皮酥<span style=\"margin: 0px; padding: 0px; font-weight: 700;\">点心</span></a></h3><p><br/></p>', '35', '28', '1520331956', '1', '1520331956', '0', '18', '', '<p>份</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('121', '1520330808', '378', '菲斯卡纳西餐自助', '2018-03-06/20180306180646798185785a9e6836f0537.jpg,2018-03-06/2018030618064714139862825a9e683700000.jpg,2018-03-06/2018030618064715837582775a9e683700000.jpg,2018-03-06/2018030618064716434877795a9e683700000.jpg,2018-03-06/2018030618064716725939455a9e683703d09.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">菲斯卡纳西餐自助</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">菲斯卡纳西餐自助</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">菲斯卡纳西餐自助</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">菲斯卡纳西餐自助</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">菲斯卡纳西餐自助</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">菲斯卡纳西餐自助</span></p>', '188', '158', '1520330808', '1', '1520330808', '0', '18', '', '<p>份</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('122', '1520330941', '378', '韩盛炭火自助烤肉', '2018-03-06/201803061809008009134345a9e68bc29f63.jpg,2018-03-06/201803061809004388141235a9e68bc29f63.jpg,2018-03-06/2018030618090014310010015a9e68bc2dc6c.jpg,2018-03-06/201803061809004358880025a9e68bc2dc6c.jpg,2018-03-06/201803061809004295763925a9e68bc31975.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">韩盛炭火自助烤肉</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">韩盛炭火自助烤肉</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">韩盛炭火自助烤肉</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">韩盛炭火自助烤肉</span></p>', '88', '68', '1520330941', '1', '1520330941', '0', '18', '', '<p>份</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('123', '1520331026', '378', '添乐自助烤肉', '2018-03-06/2018030618102416767039515a9e691098968.jpg,2018-03-06/201803061810242849176065a9e69109c671.jpg,2018-03-06/201803061810242854148735a9e6910a037a.jpg,2018-03-06/2018030618102417497701935a9e6910a037a.jpg,2018-03-06/201803061810247347190565a9e6910a4083.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">添乐自助烤肉</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">添乐自助烤肉</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">添乐自助烤肉</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">添乐自助烤肉</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">添乐自助烤肉</span></p>', '99', '88', '1520331026', '1', '1520331026', '0', '18', '', '<p>份</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('118', '1520330496', '377', '鼎香烤肉（学院路二店）', '2018-03-06/2018030618013320746810315a9e66fd8d24d.jpg,2018-03-06/201803061801332603809905a9e66fd8d24d.jpg,2018-03-06/2018030618013316643355165a9e66fd90f56.jpg,2018-03-06/201803061801333082514935a9e66fd90f56.jpg,2018-03-06/2018030618013314074506915a9e66fd94c5f.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">鼎香烤肉（学院路二店）</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">鼎香烤肉（学院路二店）</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">鼎香烤肉（学院路二店）</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">鼎香烤肉（学院路二店）</span></p>', '248', '208', '1520330496', '1', '1520330496', '0', '18', '', '<p>份</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('119', '1520330614', '377', '三子木烤肉（群力店）', '2018-03-06/2018030618032018020621895a9e6768e4e1c.jpg,2018-03-06/2018030618032115590142145a9e676900000.jpg,2018-03-06/2018030618032120812618755a9e67690f424.jpg,2018-03-06/2018030618032110297141645a9e676922551.jpg,2018-03-06/2018030618032116307181705a9e67692dc6c.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">三子木烤肉（群力店）</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">三子木烤肉（群力店）</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">三子木烤肉（群力店）</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">三子木烤肉（群力店）</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">三子木烤肉（群力店）</span></p>', '188', '168', '1520330614', '1', '1520330614', '0', '18', '', '<p>份</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('120', '1520330655', '377', '炭花岛烤肉', '2018-03-06/201803061804149220086475a9e679e00000.jpg,2018-03-06/2018030618041417971809205a9e679e00000.jpg,2018-03-06/201803061804147782427635a9e679e00000.jpg,2018-03-06/2018030618041419693767045a9e679e03d09.jpg,2018-03-06/2018030618041417301514335a9e679e07a12.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">炭花岛烤肉</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">炭花岛烤肉</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">炭花岛烤肉</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">炭花岛烤肉</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">炭花岛烤肉</span></p>', '188', '168', '1520330655', '1', '1520330655', '0', '18', '', '<p>份</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('106', '1520328650', '372', '地三鲜', '2018-03-06/2018030617304811036932245a9e5fc8b34a7.jpg,2018-03-06/201803061730488323794185a9e5fc8b71b0.jpg,2018-03-06/2018030617304817722971055a9e5fc8b71b0.jpg,2018-03-06/201803061730486089923295a9e5fc8baeb9.jpg,2018-03-06/2018030617304817024067405a9e5fc8baeb9.jpg', '<p>地三鲜地三鲜地三鲜地三鲜地三鲜</p>', '34', '28', '1520328650', '1', '1520328650', '0', '10', '', '<p>盘</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('107', '1520328709', '372', '家常凉菜', '2018-03-06/2018030617314716013606305a9e600339387.jpg,2018-03-06/2018030617314713891020495a9e600340d99.jpg,2018-03-06/201803061731473725158845a9e600340d99.jpg,2018-03-06/2018030617314719871728895a9e600344aa2.jpg,2018-03-06/201803061731471911391355a9e6003487ab.jpg', '<p>家常凉菜家常凉菜家常凉菜家常凉菜</p>', '18', '15', '1520328709', '1', '1520328709', '0', '10', '', '<p>盘</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('108', '1520328838', '372', '炒干豆腐', '2018-03-06/20180306173357181846365a9e60850f424.jpg,2018-03-06/2018030617335716125980895a9e60850f424.jpg,2018-03-06/201803061733573105904435a9e60851312d.jpg,2018-03-06/201803061733578208251925a9e608516e36.jpg,2018-03-06/2018030617335719037747505a9e608516e36.jpg', '<p>炒干豆腐炒干豆腐炒干豆腐炒干豆腐</p>', '19', '16', '1520328838', '1', '1520328838', '0', '10', '', '<p>盘</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('109', '1520328960', '373', '猪肉炖粉条', '2018-03-06/201803061735594652259885a9e60ff2625a.jpg,2018-03-06/2018030617355912221850925a9e60ff2625a.jpg,2018-03-06/201803061735593410052665a9e60ff2625a.jpg,2018-03-06/2018030617355919278974085a9e60ff29f63.jpg,2018-03-06/2018030617355910353359385a9e60ff29f63.jpg', '<p>猪肉炖粉条猪肉炖粉条猪肉炖粉条猪肉炖粉条猪肉炖粉条</p>', '45', '38', '1520328960', '1', '1520328960', '0', '10', '', '<p>盘</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('110', '1520329137', '373', '小鸡炖蘑菇', '2018-03-06/201803061738541491188845a9e61ae31975.jpg,2018-03-06/201803061738545595725005a9e61ae3567e.jpg,2018-03-06/2018030617385416539892395a9e61ae39387.jpg,2018-03-06/201803061738548521529345a9e61ae39387.jpg,2018-03-06/2018030617385416325933395a9e61ae3d090.jpg', '<p>小鸡炖蘑菇小鸡炖蘑菇小鸡炖蘑菇小鸡炖蘑菇</p>', '48', '43', '1520329137', '1', '1520329137', '0', '10', '', '<p>盘</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('111', '1520329300', '373', '排骨炖豆角', '2018-03-06/2018030617413918047251925a9e62531e848.jpg,2018-03-06/2018030617413920151756845a9e62531e848.jpg,2018-03-06/201803061741394698429425a9e625322551.jpg,2018-03-06/2018030617413910507130065a9e62532625a.jpg,2018-03-06/2018030617413914675656625a9e62532625a.jpg', '<p>排骨炖豆角排骨炖豆角排骨炖豆角</p>', '48', '42', '1520329300', '1', '1520329300', '0', '10', '', '<p>盘</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('112', '1520329461', '374', '水煮鱼', '2018-03-06/201803061744195457166325a9e62f3501bd.jpg,2018-03-06/2018030617441918749503545a9e62f353ec6.jpg,2018-03-06/20180306174419968647615a9e62f353ec6.jpg,2018-03-06/201803061744198461347475a9e62f357bcf.jpg,2018-03-06/2018030617441917022849295a9e62f35b8d8.jpg', '<p>水煮鱼水煮鱼水煮鱼水煮鱼</p>', '38', '34', '1520329461', '1', '1520329461', '0', '10', '', '<p>盘</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('113', '1520329586', '374', '水煮肉', '2018-03-06/20180306174624734018265a9e637081b32.jpg,2018-03-06/201803061746244683025695a9e637081b32.jpg,2018-03-06/201803061746248586075825a9e63708583b.jpg,2018-03-06/2018030617462417658607025a9e63708583b.jpg,2018-03-06/2018030617462420396989175a9e637089544.jpg', '<p>水煮肉水煮肉水煮肉水煮肉水煮肉水煮肉</p>', '35', '32', '1520329586', '1', '1520329586', '0', '10', '', '<p>盘</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('114', '1520329749', '374', '虾锅', '2018-03-06/2018030617490815858437025a9e641400000.jpg,2018-03-06/201803061749082440980135a9e641400000.jpg,2018-03-06/2018030617490811636850335a9e641400000.jpg,2018-03-06/20180306174908632656335a9e641403d09.jpg,2018-03-06/2018030617490818816212875a9e641403d09.jpg', '<p>虾锅虾锅虾锅虾锅虾锅</p>', '48', '45', '1520329749', '1', '1520329749', '0', '10', '', '<p>盘</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('115', '1520330116', '376', '红太郎欢乐火锅', '2018-03-06/2018030617551512629675955a9e658344aa2.jpg,2018-03-06/2018030617551515547561445a9e6583487ab.jpg,2018-03-06/2018030617551518214831335a9e65834c4b4.jpg,2018-03-06/201803061755154917516935a9e65834c4b4.jpg,2018-03-06/20180306175515404106605a9e65834c4b4.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">红太郎欢乐火锅</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">红太郎欢乐火锅</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">红太郎欢乐火锅</span></p>', '198', '168', '1520330116', '1', '1520330116', '0', '10', '', '<p>份</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('116', '1520330233', '376', '四川仁火锅（军工店）', '2018-03-06/2018030617571215265269645a9e65f82dc6c.jpg,2018-03-06/201803061757122041339495a9e65f82dc6c.jpg,2018-03-06/201803061757122076065415a9e65f831975.jpg,2018-03-06/20180306175712713899395a9e65f831975.jpg,2018-03-06/201803061757124861638105a9e65f83567e.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">四川仁火锅（军工店）</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">四川仁火锅（军工店）</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">四川仁火锅（军工店）</span></p>', '208', '188', '1520330233', '1', '1520330233', '0', '10', '', '<p>份</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('117', '1520330359', '376', '打滨炉康乐火锅（世茂店）', '2018-03-06/201803061759187073896185a9e6676a7d8c.jpg,2018-03-06/201803061759184694252265a9e6676aba95.jpg,2018-03-06/201803061759186207374805a9e6676aba95.jpg,2018-03-06/2018030617591814396214755a9e6676af79e.jpg,2018-03-06/2018030617591813335411095a9e6676af79e.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">打滨炉康乐火锅（世茂店）</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">打滨炉康乐火锅（世茂店）</span><span style=\"color: rgb(102, 102, 102); font-family: -apple-system, BlinkMacSystemFont, Roboto, &quot;Helvetica Neue&quot;, &quot;MIcrosoft YaHei&quot;, sans-serif; font-size: 26px; background-color: rgb(255, 255, 255);\">打滨炉康乐火锅（世茂店）</span></p>', '166', '138', '1520330359', '1', '1520330359', '0', '18', '', '<p>份</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('97', '1520323990', '368', '小米粥', '2018-03-06/201803061614196862035365a9e4ddbe4e1c.jpg,2018-03-06/20180306161419685682545a9e4ddbe8b25.jpg,2018-03-06/201803061613094897525575a9e4d953567e.jpg,2018-03-06/2018030616130917580244965a9e4d953567e.jpg,2018-03-06/2018030616130913605233415a9e4d9539387.jpg', '<p>小米粥小米粥小米粥小米粥小米粥小米粥小米粥小米粥小米粥</p>', '2', '2', '1520323990', '1', '1520323990', '0', '100', '', '<p>碗<br/></p>', '0', '0');
INSERT INTO `food_goods` VALUES ('98', '1520324246', '368', '皮蛋瘦肉粥', '2018-03-06/2018030616190412343742815a9e4ef82dc6c.jpg,2018-03-06/2018030616190411607759625a9e4ef82dc6c.jpg,2018-03-06/2018030616190418971586425a9e4ef831975.jpg,2018-03-06/201803061619045914880575a9e4ef831975.jpg,2018-03-06/201803061619049666609035a9e4ef83567e.jpg', '<p>皮蛋瘦肉粥皮蛋瘦肉粥皮蛋瘦肉粥皮蛋瘦肉粥皮蛋瘦肉粥</p>', '3', '3', '1520324246', '1', '1520324246', '0', '100', '', '<p>碗</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('99', '1520324838', '368', '黑芝麻粥', '2018-03-06/2018030616271612248835855a9e50e4a7d8c.jpg,2018-03-06/2018030616271612815166125a9e50e4aba95.jpg,2018-03-06/2018030616271619814082675a9e50e4aba95.png,2018-03-06/2018030616271613451345945a9e50e4aba95.jpg,2018-03-06/2018030616271620136749465a9e50e4af79e.jpg', '<p>黑芝麻粥黑芝麻粥黑芝麻粥黑芝麻粥黑芝麻粥黑芝麻粥黑芝麻粥</p>', '4', '3', '1520324838', '1', '1520324838', '0', '100', '', '<p>碗</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('100', '1520325073', '369', '包子', '2018-03-06/2018030616311116817365665a9e51cf4c4b4.jpg,2018-03-06/2018030616311112670712725a9e51cf4c4b4.jpg,2018-03-06/2018030616311120211305105a9e51cf4c4b4.jpg,2018-03-06/2018030616311114452952125a9e51cf501bd.jpg,2018-03-06/201803061631115873401445a9e51cf501bd.jpg', '<p>包子包子包子包子包子包子</p>', '2', '1', '1520325073', '1', '1520325073', '0', '100', '', '<p>个</p>', '1', '0');
INSERT INTO `food_goods` VALUES ('101', '1520325348', '369', '烧饼', '2018-03-06/2018030616354715150508765a9e52e3c65d4.jpg,2018-03-06/201803061635475152362385a9e52e3c65d4.jpg,2018-03-06/201803061635477499119325a9e52e3ca2dd.jpg,2018-03-06/2018030616354720889597245a9e52e3ca2dd.jpg,2018-03-06/20180306163547700254215a9e52e3ca2dd.jpg', '<p>烧饼烧饼烧饼烧饼烧饼烧饼</p>', '2', '1', '1520325348', '1', '1520325348', '0', '100', '', '<p>个</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('102', '1520327221', '369', '馅饼', '2018-03-06/2018030617065813961850095a9e5a32d1cef.jpg,2018-03-06/201803061706588755821545a9e5a32d59f8.jpg,2018-03-06/2018030617065820090573815a9e5a32d59f8.jpg,2018-03-06/201803061706585691458335a9e5a32d59f8.jpg,2018-03-06/201803061706587291618795a9e5a32d59f8.jpg', '<p>馅饼馅饼馅饼馅饼馅饼馅饼馅饼</p>', '3', '2', '1520327221', '1', '1520327221', '0', '100', '', '<p>张</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('103', '1520328003', '370', '麻团', '2018-03-06/2018030617200014454141785a9e5d4066ff3.jpg,2018-03-06/201803061720006270651705a9e5d407de29.jpg,2018-03-06/201803061720002942387195a9e5d4081b32.jpg,2018-03-06/2018030617200019260055025a9e5d408583b.jpg,2018-03-06/201803061720001294814795a9e5d408583b.jpg', '<p>麻团麻团麻团麻团麻团</p>', '2', '1', '1520328003', '1', '1520328003', '0', '100', '', '<p>个</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('104', '1520328158', '370', '卷饼', '2018-03-06/201803061722377386127415a9e5dddb34a7.jpg,2018-03-06/2018030617223718036910555a9e5dddb71b0.jpg,2018-03-06/201803061722372476420465a9e5dddb71b0.jpg,2018-03-06/2018030617223711071040765a9e5dddbaeb9.jpg,2018-03-06/201803061722372329882775a9e5dddbaeb9.jpg', '<p>卷饼卷饼卷饼卷饼卷饼卷饼</p>', '5', '4', '1520328158', '1', '1520328158', '0', '100', '', '<p>个</p>', '0', '0');
INSERT INTO `food_goods` VALUES ('105', '1520328343', '370', '豆浆', '2018-03-06/201803061725428947875485a9e5e960f424.jpg,2018-03-06/201803061725422956635065a9e5e960f424.jpg,2018-03-06/201803061725426459067095a9e5e961312d.jpg,2018-03-06/20180306172542265676425a9e5e961312d.jpg,2018-03-06/2018030617254210617878345a9e5e9616e36.jpg', '<p>豆浆豆浆豆浆豆浆豆浆</p>', '2', '1', '1520328343', '1', '1520328343', '0', '100', '', '<p>杯</p>', '0', '0');

-- ----------------------------
-- Table structure for food_goodscollection
-- ----------------------------
DROP TABLE IF EXISTS `food_goodscollection`;
CREATE TABLE `food_goodscollection` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `gid` mediumint(8) unsigned NOT NULL,
  `uid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_goodscollection
-- ----------------------------

-- ----------------------------
-- Table structure for food_goodsreview
-- ----------------------------
DROP TABLE IF EXISTS `food_goodsreview`;
CREATE TABLE `food_goodsreview` (
  `rid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `gid` mediumint(8) unsigned NOT NULL,
  `uid` mediumint(8) unsigned NOT NULL,
  `integral` tinyint(1) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_goodsreview
-- ----------------------------
INSERT INTO `food_goodsreview` VALUES ('14', '100', '1110', '5', '包子非常好吃！');

-- ----------------------------
-- Table structure for food_goodstoattr
-- ----------------------------
DROP TABLE IF EXISTS `food_goodstoattr`;
CREATE TABLE `food_goodstoattr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attrid` mediumint(8) unsigned NOT NULL,
  `attrvalue` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `attrid` (`attrid`,`attrvalue`)
) ENGINE=MyISAM AUTO_INCREMENT=170 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_goodstoattr
-- ----------------------------

-- ----------------------------
-- Table structure for food_member
-- ----------------------------
DROP TABLE IF EXISTS `food_member`;
CREATE TABLE `food_member` (
  `uid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `paypass` char(32) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `level` tinyint(1) DEFAULT '1',
  `scores` int(10) unsigned DEFAULT '100',
  `balance` int(10) unsigned DEFAULT NULL,
  `regtime` int(10) unsigned DEFAULT NULL,
  `logintime` int(10) unsigned NOT NULL,
  `truename` varchar(20) DEFAULT NULL,
  `sex` int(2) DEFAULT NULL,
  `status` tinyint(2) unsigned DEFAULT '2' COMMENT '1后台管理员2会员',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uname` (`uname`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=1111 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_member
-- ----------------------------
INSERT INTO `food_member` VALUES ('2', 'admin', 'c20ad4d76fe97759aa27a0c99bff6710', null, '3778431181@qq.com', '1', '100', null, '1404116000', '1404452808', '吴松键', '2', '1');
INSERT INTO `food_member` VALUES ('1110', '18804601926', 'e10adc3949ba59abbe56e057f20f883e', null, null, '1', '110', null, '1520543947', '1520543947', '李想', '2', '2');

-- ----------------------------
-- Table structure for food_memlevel
-- ----------------------------
DROP TABLE IF EXISTS `food_memlevel`;
CREATE TABLE `food_memlevel` (
  `lid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `llevel` tinyint(1) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `licon` varchar(255) NOT NULL,
  `needscores` mediumint(8) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_memlevel
-- ----------------------------
INSERT INTO `food_memlevel` VALUES ('8', '2', '土星会员', '2014-07-04/53b655115b8d8.png', '0');
INSERT INTO `food_memlevel` VALUES ('2', '2', '铜盾会员', '2014-07-04/53b6551d22551.png', '151');
INSERT INTO `food_memlevel` VALUES ('3', '3', '银盾会员', '2014-07-04/53b6552a1312d.png', '3001');
INSERT INTO `food_memlevel` VALUES ('4', '4', '金盾会员', '2014-07-04/53b655345f5e1.png', '7001');
INSERT INTO `food_memlevel` VALUES ('5', '5', '钻石会员', '2014-07-04/53b6554b0f424.png', '30001');
INSERT INTO `food_memlevel` VALUES ('6', '6', '皇冠会员', '2014-07-04/53b65556e1113.png', '60001');
INSERT INTO `food_memlevel` VALUES ('7', '7', '易金鲸', '2014-07-04/53b65568501bd.png', '100000');

-- ----------------------------
-- Table structure for food_message
-- ----------------------------
DROP TABLE IF EXISTS `food_message`;
CREATE TABLE `food_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `times` int(11) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `an_times` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of food_message
-- ----------------------------
INSERT INTO `food_message` VALUES ('11', '1110', '请问你家有运费吗？', '1520544069', '免费包邮的', '1520544084');

-- ----------------------------
-- Table structure for food_modules
-- ----------------------------
DROP TABLE IF EXISTS `food_modules`;
CREATE TABLE `food_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `moduleName` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_modules
-- ----------------------------
INSERT INTO `food_modules` VALUES ('1', '首页设置');
INSERT INTO `food_modules` VALUES ('2', '广告管理');
INSERT INTO `food_modules` VALUES ('3', '用户管理');
INSERT INTO `food_modules` VALUES ('4', '分类管理');
INSERT INTO `food_modules` VALUES ('5', '商品管理');
INSERT INTO `food_modules` VALUES ('6', '订单管理');
INSERT INTO `food_modules` VALUES ('8', '文章管理');
INSERT INTO `food_modules` VALUES ('9', '评价管理');
INSERT INTO `food_modules` VALUES ('10', '权限管理');

-- ----------------------------
-- Table structure for food_nav
-- ----------------------------
DROP TABLE IF EXISTS `food_nav`;
CREATE TABLE `food_nav` (
  `nid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `nname` varchar(255) NOT NULL,
  `nweb` varchar(255) NOT NULL,
  `nsort` mediumint(8) DEFAULT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_nav
-- ----------------------------

-- ----------------------------
-- Table structure for food_orders
-- ----------------------------
DROP TABLE IF EXISTS `food_orders`;
CREATE TABLE `food_orders` (
  `oid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `onumber` char(20) NOT NULL,
  `uid` mediumint(8) unsigned NOT NULL,
  `total` int(10) unsigned NOT NULL,
  `otime` char(10) NOT NULL,
  `ocoupon` char(1) NOT NULL DEFAULT '0',
  `expressnum` int(11) NOT NULL,
  `freight` int(10) unsigned NOT NULL,
  `integral` int(10) unsigned NOT NULL,
  `deliveryaddress` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `paymethod` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0未支付1微信支付2支付宝支付3货到付款',
  PRIMARY KEY (`oid`),
  UNIQUE KEY `onumber` (`onumber`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_orders
-- ----------------------------
INSERT INTO `food_orders` VALUES ('55', '2018030905194926', '1110', '2', '2018-03-09', '0', '0', '0', '0', '河北省秦皇岛市抚宁县 1号楼 consignee李想consignee 18804601926 ', '', '0');

-- ----------------------------
-- Table structure for food_ordersdetails
-- ----------------------------
DROP TABLE IF EXISTS `food_ordersdetails`;
CREATE TABLE `food_ordersdetails` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `oid` int(10) unsigned NOT NULL,
  `gid` mediumint(8) unsigned NOT NULL,
  `gprice` int(10) unsigned NOT NULL,
  `gnums` int(10) unsigned NOT NULL,
  `ostate` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_ordersdetails
-- ----------------------------
INSERT INTO `food_ordersdetails` VALUES ('81', '55', '100', '2', '1', '6');

-- ----------------------------
-- Table structure for food_shoppingcart
-- ----------------------------
DROP TABLE IF EXISTS `food_shoppingcart`;
CREATE TABLE `food_shoppingcart` (
  `cartid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) unsigned NOT NULL,
  `gid` mediumint(8) unsigned NOT NULL,
  `nums` mediumint(8) unsigned NOT NULL,
  `price` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cartid`)
) ENGINE=MyISAM AUTO_INCREMENT=170 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_shoppingcart
-- ----------------------------

-- ----------------------------
-- Table structure for food_webconfig
-- ----------------------------
DROP TABLE IF EXISTS `food_webconfig`;
CREATE TABLE `food_webconfig` (
  `wid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `wname` varchar(255) NOT NULL,
  `wdescribe` varchar(255) NOT NULL,
  `wlogo` varchar(255) NOT NULL,
  `weibo` varchar(20) NOT NULL,
  `qqnum` varchar(20) NOT NULL,
  `weixin` varchar(20) NOT NULL,
  `wcontact` varchar(255) NOT NULL,
  `wlocation` varchar(255) NOT NULL,
  `wrecords` varchar(255) NOT NULL,
  `wcode` varchar(255) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_webconfig
-- ----------------------------
INSERT INTO `food_webconfig` VALUES ('2', '美食商城', '美食商城美食商城美食商城美食商城美食商城', '2018-03-09/5aa1a10b1b98f.png', '123456222', '123456222', '123456222', '156117757512', '美食商城', '美食商城', '1111111111');

<div class="foot">
    <div class="main">

        <ul class="b_nav fl">
            <li>
                <dl><dt>关于集号吧</dt>
                    <dd><a href="/about/about.htm" rel="nofollow">集号吧简介</a></dd>
                    <dd><a href="/about/safe.htm" rel="nofollow">交易方式</a></dd>
                    <dd><a href="/zhuanti/guide/buy.htm" rel="nofollow">买号码</a></dd>
                </dl>
            </li>

            <li>
                <dl><dt>联系我们</dt>
                    <dd><a href="/about/contact.htm" title="联系我们" rel="nofollow">联系我们</a></dd>
                    <dd><a href="/about/payment.htm" title="付款方式" rel="nofollow">付款方式</a></dd>
                    <dd><a href="/about/sitemap.htm" title="网站地图">网站地图</a></dd>
                </dl>
            </li>
            <li>
                <dl><dt>加盟合作</dt>
                    <dd><a href="/about/vip.htm" rel="nofollow">VIP会员</a></dd>
                </dl>
            </li>
            <div class="clear"></div>
        </ul>
        <div class="f_kf fl">
            <span class="foot_title">客服热线</span>
            <h1>4008-915-925</h1>

            <span class="foot_title">投诉/建议</span>
            <h1>156-0024-8111</h1>
            <p>（AM 8:00-12:00 PM 14:00-18:00）</p>
        </div>
        <div class="find_us fr">
            <span class="foot_title">找到我们</span>
            <div class="foot_icon">

                <a class="weibo" href="#" >
                    <em></em>
                    <span class="weibo_ewm kuang" ><img src="../Picture/weibo-ewm.jpg" width="100" height="100" alt="集号吧微博" /></span>
                    <span class="f_arrow"><span class="arr"></span><span class="arr1"></span></span>
                </a>
                <a href="#" class="weixin" >
                    <em></em>
                    <span class="weixin_ewm kuang">
                    <img src="../Picture/foot_dy.png" width="100" height="auto" alt="集号吧订阅号" />
                    <img src="../Picture/foot_fw.png" width="100" height="auto" alt="集号吧服务号" />
                    </span>
                    <span class="f_arrow"><span class="arr"></span><span class="arr1"></span></span>
                </a>
                <a href="#"  class="xiaochengxu">
                    <em></em>
                    <span class="xiaochengxu_ewm   kuang"><img src="../Picture/xcx_ewm.png" width="100" height="100" alt="集号吧微博" /></span>
                    <span class="f_arrow"><span class="arr"></span><span class="arr1"></span></span>
                </a>



                <a href="//p.qiao.baidu.com/cps/chat?siteId=7649321&userId=18077514" target="_blank"  class="kefu" >
                    <em></em>
                </a>

            </div>
        </div>
        <script src="../Scripts/jquery.min.js"></script>
        <script src="../Scripts/jquery.cookie.js"></script>
        <script src="../Scripts/gundong.js"></script>
        <script src="../Scripts/index_banner.js"></script>
        <script src="../Scripts/home.js"></script>
        <script type="text/javascript" src="../Scripts/index.js"></script>
        <script type="text/javascript">
            $(function() {
                //登陆用户头部显示登陆信息
                $.ajax({
                    type : "get",
                    url :"http://user.jihaoba.com/loginuser",
                    data :'',
                    dataType :"jsonp",
                    jsonp: false,
                    jsonpCallback: "getuserLogin",
                    success : function(data){
                        if(data.success) {
                            $('#loginusername').html(data.user.msg);
                            $('#havelogin').css('display','');
                            $('#nologin').css('display','none');
                        } else {
                            $('#havelogin').css('display','none');
                            $('#nologin').css('display','');
                        }
                    },
                    error : function(){
                        $('#havelogin').css('display','none');
                        $('#nologin').css('display','');
                    }
                });
            })
            function show_msg(id, msg) {
                $('#' + id).css('display', 'block');
                $('#show-ceng').css('display', 'block');
                $('#show-msg').html('<span></span>'+msg);
            }
            function hide_msg(id) {
                $('#' + id).css('display', 'none');
                $('#show-ceng').css('display', 'none');
            }
        </script>
        <div class="clear"></div>
        <div class="copyright">大量靓号转让、求购信息，尽在集号吧！可查看手机靓号、固定电话、400电话！<br />Copyright 2008-2019 jihaoba.com, All Rights Reserved 吉ICP备16006087号
            <br /><a href="/escrow/">手机号码</a>　<a href="http://m.jihaoba.com">集号吧手机版</a>　长春吉号吧科技有限公司&nbsp;<script type="text/javascript">var cnzz_protocol = (" https:");window.onload = document.write(unescape("%3Cspan id='cnzz_stat_icon_1585341'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s23.cnzz.com/stat.php%3Fid%3D1585341%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><br />
        </div></div>
</div>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="dns-prefetch" href="//static1.jihaoba.com/">

    <link rel="dns-prefetch" href="//static2.jihaoba.com/">

    <link rel="dns-prefetch" href="//static3.jihaoba.com/">
    <title>集号吧会员中心</title>
    <meta name="keywords" content="集号吧会员中心" />
    <meta name="description" content="" />
    <link href="/member/css/public.css?v=201512031448" rel="stylesheet">
    <link href="/member/css/buy.css?v=201801031136" rel="stylesheet">
    <link href="/member/css/ui-dialog.css?v=201512101022" rel="stylesheet">

    <script src="http://static1.jihaoba.com/js/jquery.min.js"></script>
    <script src="http://static1.jihaoba.com/member/js/common.js"></script>
    <script src="http://static1.jihaoba.com/js/bootstrap.min.js"></script>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="dns-prefetch" href="//static1.jihaoba.com/">

    <link rel="dns-prefetch" href="//static2.jihaoba.com/">

    <link rel="dns-prefetch" href="//static3.jihaoba.com/">
    <title>集号吧会员中心</title>
    <meta name="keywords" content="集号吧会员中心" />
    <meta name="description" content="" />
    <link href="/member/css/public.css?v=201512031448" rel="stylesheet">
    <link href="/member/css/buy.css?v=201801031136" rel="stylesheet">
    <link href="/member/css/ui-dialog.css?v=201512101022" rel="stylesheet">

    <script src="http://static1.jihaoba.com/js/jquery.min.js"></script>
    <script src="http://static1.jihaoba.com/member/js/common.js"></script>
    <script src="http://static1.jihaoba.com/js/bootstrap.min.js"></script>
</head>
<body>

<div class="topmember">
    <!--头部通栏-->
    <div class="top-top">
        <div class="top-topcon">
            <div class="fleft">免费注册，享受一站式靓号服务！<span><a href="http://user.jihaoba.com/logging" class="red">会员登陆</a></span></div>
            <div class="fright">
                <ul class="menu">
                    <li>
                        <a target="_blank" href="#" >我的账户<i></i></a>
                        <div class="zs2" style="width:74px;">
                            <div class="accountlist">
                                <a href="/profile/index">个人资料</a>
                                <a href="/profile/password">修改密码</a>
                                <a href="/logout">退出登录</a>
                            </div>
                        </div>
                        <span></span>
                    </li>

                    <li>
                        <a target="_blank" href="javascript:void(0);">联系客服<i></i></a>
                        <div class="zs4" style="width:210px;">
								<span class="saom2">400电话：4008-915-925(免长途费)
																</span>
                        </div>

                    </li>
                    <li>
                        <a href="http://user.jihaoba.com/logout">退出登录</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--头部通栏结束-->
    <div class="top_con">
        <div class="top_right">
            <p>没有账号，<a href="http://user.jihaoba.com/register">立即注册</a></p>
        </div>
        <a href="http://www.jihaoba.com" target="_blank"><img src="/member/images/logo.png" width="147" height="70" /></a>
        <div class="clear"></div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $('#switchSubmit').bind('click', function() {
            if($('#switchpassword').val().length < 6) {
                $('#switchtip').addClass('text-error');
                return false;
            }
            return true;
        });
        $('#switchpassword').bind('focus', function() {
            $('#switchtip').removeClass('text-error');
        });
        $('a[name=loginswitch]').each(function(index, item){
            $(this).bind('click', function(){
                var uid = $(this).attr('value');
                $('#switchuid').val(uid);
                $('#switchModalLabel').html('切换至' + uid + '号店铺');
                $('#switchModal').modal('show');
                return false;
            });
        });
    });
</script>


<div class="zc_frame">
    <div class="content_frame fleft">
        <form id="form1" autocomplete="off">
            <h2> 一个账号，享受一站式靓号服务！</h2>
            <ul class="list">
                <li>
                    <input id="inputMobile" type="text"  name="1951mobile" placeholder="手机号码/门牌号" class="login_input input_user input_width01" autocomplete="off">
                    <div class="prompt tipwrong" style="display: none;"><em class="wrong" id="usernameerror">请输入手机号码或门牌号</em></div>
                    <div class="prompt tipok" style="display:none;"><em class="correct"></em></div>
                </li>
                <li class="pow">
                    <input id="inputPassword" type="password"  name="1951password" class="login_input input_password input_width01 " placeholder="密码" onfocus="this.type='password'"  autocomplete="off">
                    <script language="javascript">
                        window.load = function(){
                            document.getElementById('inputPassword').value='';
                        };
                    </script>


                    <div class="prompt tipwrong" style="display: none;"><em class="wrong">密码不正确</em></div>
                    <div class="prompt tipok" style="display:none;"><em class="correct"></em></div>
                </li>
                <li id="li_code" class="yz" style="display: block;">
                    <input id="inputCode" name="1951code" type="text" placeholder="输入右侧验证码" class="login_input input_width02">
                    <div class="code"> <img id="img_code" src="/misc/captcha?w=112&h=45&f=19" alt="点击图片换一张" class="changeCode"> </div>
                    <a href="javascript:void(0);" title="看不清换一张" id="changeCode" class="refresh changeCode">看不清换一张</a>
                    <div class="prompt tipwrong" style="display: none;"><em class="wrong">验证码不正确</em></div>
                    <div class="prompt tipok" style="display:none;"><em class="correct"></em></div>
                </li>
                <li class="shopnumber" style="display: none;">
                    <select id="shoplist">
                        <option value="">请选择登录门牌</option>
                    </select>
                    <div class="prompt"><em class="wrong">请选择门牌号</em></div>
                </li>
                <li class="zddl">
                    <div class="content_frame_left">
                        <label>
                            <input id="loginmonth" type="checkbox" value="true">30天内免登录 </label>
                    </div>
                    <div class="content_frame_right"> <a href="/getpassword">忘记密码</a> <span>|</span> <a href="/register">免费注册</a> </div>
                </li>
                <li>
                    <input id="submit" type="submit" class="input_orange button_380_55" value="立即登录">
                </li>
            </ul>
        </form>
        <div class="clear"> </div>
    </div>
    <div class="zc_frame_right">
        <dl class="list">
            <dt>集号吧靓号网</dt>
            <dd>选号码就上集号吧，号码展示平台！</dd>
            <dd>号码类型：固话电话、车牌号、400号、QQ号。 </dd>
            <!--<dd><a href="http://user.jihaoba.com/qqconnect/oauth/index.php"><img src="http://user.jihaoba.com/qqconnect/img/qq_login.png"></a></dd>-->

        </dl>
    </div>
    <div class="clear"> </div>
</div>
<script type="text/javascript">
    function checkmobile() {
        var mobile = $('#inputMobile');
        return /^\d{1,11}$/.test(mobile.val());
    }
    function checkpassword() {
        var password = $('#inputPassword');
        if(password.val().length < 6 || password.val().length > 24) {
            return false;
        }
        return true;
    }
    function checkcode() {
        var code = $('#inputCode');
        if(code.val().length == 4 && /^\w{4}$/.test(code.val())) {
            return true;
        }
        return false;
    }
    $(function() {
        $('.changeCode').bind('click', function() {
            var src = '/misc/captcha?w=112&h=45&f=19&r='+Math.random();
            $('#img_code').attr('src', src);
            return false;
        });
        var submiting = false;
        $('#submit').bind('click', function() {
            var result = true;
            if(!checkmobile()) {
                $('#inputMobile').trigger("blur");
                result = false;
            }
            if(!checkpassword()) {
                $('#inputPassword').trigger("blur");
                result = false;
            }
            if(!checkcode()) {
                $('#inputCode').trigger("blur");
                result = false;
            }
            if(result && !submiting) {
                $('#inputMobile').attr('disabled', true);
                $('#inputPassword').attr('disabled', true);
                $('#inputCode').attr('disabled', true);
                submiting = true;
                $(this).attr('value', '登录中...');
                var data = {'1951mobile':$('#inputMobile').val(), '1951password': $('#inputPassword').val(), '1951code': $('#inputCode').val(), 'loginmonth':$('#loginmonth').prop('checked')};
                $.post('/logging?submit=1', data, function(result) {
                    if(result.status == -1) {//用户名错误
                        $('#usernameerror').html('用户名错误或不存在');
                        $('#inputMobile').siblings('div .tipwrong').css('display', 'block');
                        $('#inputMobile').siblings('div .tipok').css('display', 'none');
                        $('#inputMobile').addClass('input_border_red');

                    } else if(result.status == -2) {//密码错误
                        $('#inputPassword').siblings('div .tipwrong').css('display', 'block');
                        $('#inputPassword').siblings('div .tipok').css('display', 'none');
                        $('#inputPassword').addClass('input_border_red');
                    } else if(result.status == -3) {//用户选择登陆
                        $('li.shopnumber').css('display', '');
                        $("#shoplist").empty();
                        $("#shoplist").append('<option value="">请选择登录门牌</option>');
                        for(var i = 0; i < result.user.length; i++) {
                            $("#shoplist").append('<option value="'+result.user[i]['id']+'">'+result.user[i]['id']+'('+result.user[i]['nick']+')</option>');
                        }
                    } else if(result.status == -4) {//验证码错误
                        $('#inputCode').siblings('div .tipok').css('display', 'none');
                        $('#inputCode').siblings('div .tipwrong').css('display', 'block');
                        $('#inputCode').addClass('input_border_red');
                    } else {//登陆成功跳转
                        var referer = '';
                        if(referer) {
                            location.href = referer;
                        } else {
                            location.href = result.url;
                        }
                    }
                    $('#inputMobile').attr('disabled', false);
                    $('#inputPassword').attr('disabled', false);
                    $('#inputCode').attr('disabled', false);
                    $('#submit').attr('value', '立即登录');
                    submiting = false;
                }, 'json');
            }
            return false;
        });
        $('#inputMobile').blur(function() {
            if(!checkmobile()) {
                $(this).siblings('div .tipwrong').css('display', 'block');
                $(this).siblings('div .tipok').css('display', 'none');
                $(this).removeClass('input_text');
                $(this).addClass('input_border_red');
            } else {
                $(this).addClass('input_text');
                $(this).siblings('div .tipwrong').css('display', 'none');
                $(this).siblings('div .tipok').css('display', 'block');
                $(this).removeClass('input_border_red');
            }
        }).bind('focus', function(){
            $(this).siblings('div .tipwrong').css('display', 'none');
            $(this).siblings('div .tipok').css('display', 'none');
            $(this).removeClass('input_border_red');
        });
        $('#inputPassword').blur(function() {
            if(!checkpassword()) {
                $(this).siblings('div .tipwrong').css('display', 'block');
                $(this).siblings('div .tipok').css('display', 'none');
                $(this).addClass('input_border_red');
                $(this).removeClass('input_text');
            } else {
                $(this).addClass('input_text');
                $(this).siblings('div .tipwrong').css('display', 'none');
                $(this).siblings('div .tipok').css('display', 'block');
                $(this).removeClass('input_border_red');
            }
        }).bind('focus', function(){
            $(this).siblings('div .tipwrong').css('display', 'none');
            $(this).siblings('div .tipok').css('display', 'none');
            $(this).removeClass('input_border_red');
        });
        $('#inputCode').blur(function() {
            if(!checkcode()) {
                $(this).siblings('div .tipwrong').css('display', 'block');
                $(this).siblings('div .tipok').css('display', 'none');
                $(this).addClass('input_border_red');
                $(this).removeClass('input_text');
            } else {
                $(this).siblings('div .tipwrong').css('display', 'none');
                $(this).siblings('div .tipok').css('display', 'block');
                $(this).removeClass('input_border_red');
                $(this).addClass('input_text');
            }
        }).bind('focus', function(){
            $(this).siblings('div .tipwrong').css('display', 'none');
            $(this).siblings('div .tipok').css('display', 'none');
            $(this).removeClass('input_border_red');
        });
        $('#shoplist').bind('change', function() {
            var shopid = $(this).val();
            if(shopid > 0) {
                $('#inputMobile').val(shopid);
                $('#shoplist').siblings('div .prompt').css('display', 'none');
            } else {
                $('#shoplist').siblings('div .prompt').css('display', 'block');
            }
            return false;
        });
    });
</script>
<div class="clear"> </div>
<div class="foot">
    <div class="foot_txt">
        <p>Copyright 2008-2016 jihaoba.com, All Rights Reserved 吉ICP备16006087号 <br />
            客服热线：4008-915-925</p>
    </div>
</div>
</body>
</html>


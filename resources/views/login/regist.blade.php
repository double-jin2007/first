

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
    <link href="{{asset('static/css/user/public.css')}}" rel="stylesheet">
    <link href="{{asset('static/css/user/buy.css')}}" rel="stylesheet">
    <link href="{{asset('static/css/user/ui-dialog.css')}}" rel="stylesheet">

    <script src="{{asset('static/js/jquery.min.js')}}"></script>
    <script src="{{asset('static/js/user/common.js')}}"></script>
    <script src="{{asset('static/js/bootstrap.min.js')}}"></script>
</head>
<body>

<div class="topmember">
    <!--头部通栏-->
    <div class="top-top">
        <div class="top-topcon">
            <div class="fleft">免费注册，享受一站式靓号服务！<span><a href="{{url('Login/login')}}" class="red">会员登陆</a></span></div>
            <div class="fright">
                <ul class="menu">
                    <li>
                        <a target="_blank" href="#" >我的账户<i></i></a>
                        <div class="zs2" style="width:74px;">
                            <div class="accountlist">
                                <a href="/profile/index">个人资料</a>
                                <a href="/profile/password">修改密码</a>
                                <a href="{{url('Login/loginout')}}">退出登录</a>
                            </div>
                        </div>
                        <span></span>
                    </li>

                    <li>
                        <a target="_blank" href="javascript:void(0);">联系客服<i></i></a>
                        <div class="zs4" style="width:210px;">
								<span class="saom2">400电话：4007-111-111(免长途费)
																</span>
                        </div>

                    </li>
                    <li>
                        <a href="">退出登录</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--头部通栏结束-->
    <div class="top_con">
        <div class="top_right">
            <p>已有账号，<a href="{{url('Login/login')}}">立即登录</a></p>
        </div>
        <a href="http://www.#####.com" target="_blank"><img src="{{asset('static/images/logo.png')}}" width="147" height="70" /></a>
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


<!--主体内容-->
<div class="zc_frame">
    <div class="zc_frame_left">
        <form id="form1"method="post" action="/register" onsubmit="return submitcheck();">
            <input type="hidden" name="url" value="" />
            <input type="hidden" name="formhash" value="e9272a88" />
            <h2> 注册帐号，玩转所有号码服务！</h2>
            <ul class="list">
                <li><i>用户昵称：</i>
                    <input type="text" name="username" id="username" class="zc_input input_width03" placeholder="3-15个汉字或英文">
                    <div class="prompt tipwrong" style="display:none;"><em class="wrong">请输入用户名</em></div>
                    <div class="prompt tipok" style="display:none;"><em class="correct">注册成功后将不可修改</em></div>
                </li>
                <li><i>密码：</i>
                    <input type="password" name="password" id="password" class="zc_input input_width03" placeholder="6-16个英文字母或数字">
                    <div class="prompt tipwrong" style="display:none;"><em class="wrong">请输入6-16位的密码</em></div>
                    <div class="prompt tipok" style="display:none;"><em class="correct"></em></div>
                </li>
                <li class="yz"><i>验证码：</i>
                    <input id="code" type="text" name="code" class="zc_input input_width04">
                    <div class="code"> <img id="img_code" src="{{url('User/getCode/1')}}" alt="点击图片重新获取验证码" onclick="this.src='{{url('Home/Users/captcha')}}/'+Math.random()" class="changeCode"> </div>
                    <a href="javascript:void(0);" act="ChangeImgCode" class="refresh changeCode">看不清？换一张</a>
                    <div class="prompt tipwrong" style="display: none;"><em class="wrong">请输入图片中字符</em></div>
                    <div class="prompt tipok" style="display:none;"><em class="correct"></em></div>
                </li>
                <li class="z_index"><i id="lalName">手机：</i>
                    <input id="mobile" name="mobile" type="text" class="zc_input input_width03 input_text"  placeholder="请输入11位手机号" value="" maxlength="11">
                    <div class="prompt tipwrong" style="display:none;"><em class="wrong">请输入11位手机号</em></div>
                    <div class="prompt tipok" style="display:none;"><em class="correct"></em></div>
                </li>
                <li id="verifyCode" class="yz" style="overflow:visible;"><i>邀请码：</i>
                    <input type="text" id="mobilecode" class="zc_input input_width04" name="mobilecode">
                    <input id="getcode" type="button" class="input_gray button_jym" value="免费获取邀请码短信">
                    <div>一分钟内没有收到邀请码请点击右侧联系客服
                        <!-- WPA Button Begin -->
                        <script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzgwMDA2MDcwOF8zNjE4MjRfODAwMDYwNzA4Xw"></script>
                        <!-- WPA Button End --></div>
                    <div id="tishi_jym" class="tishi_jym" style="display:none;">已将邀请码发送到您手机，请填写。<a href="javascript:void(0);">没收到？</a>
                        <div class="open_jym" style="display:none;"> <sub></sub>
                            <p>请检查填写的手机号是否可以正常接收短信。如果依旧无法收到邀请码，请致电4000-168-168获得邀请码。</p>
                        </div>
                    </div>
                    <div class="prompt1 tipwrong" style="display: none;"><em class="wrong">请输入手机邀请码</em></div>
                    <div class="prompt1 tipok" style="display:none;"><em class="correct"></em></div>
                </li>
                <li class="xy"><i>&nbsp;</i>
                    <label> <input  checked="checked" name="cbxAgree" type="checkbox" value="">
                        <span>我已经看过并同意<a href="http://www.jihaoba.com/news/show/19" target="_blank">《网络服务协议》</a></span></label></li>
                <li class="button_zc"><i></i>
                    <input type="submit" value="立即注册" class="input_orange" id="submit" name="submit">
                    <a class="qhyx" href="http://www.jihaoba.com/about/contact.htm" target="_blank">求助！注册总是不成功&gt;&gt;</a>
                </li>
            </ul>
        </form>
    </div>
    <div class="zc_frame_right">
        <dl class="list">
            <dt>集号吧靓号网</dt>
            <dd>选号码就上集号吧，号码展示平台！</dd>
            <dd>号码类型：固话电话、车牌号、400号、QQ号。</dd>
            <dd></dd>
            <dd></dd>
        </dl>
    </div>
    <div class="clear"> </div>
</div>
<script type="text/javascript">
    var validate = true;
    var oldusername = '';
    var oldmobilecode = '';
    var oldcode = '';
    $(function() {
        $('.changeCode').bind('click', function() {
            var src = '{{url('User/getCode')}}/'+Math.random();
            $('#img_code').attr('src', src);
            return false;
        });
        $('#username').bind('blur', function() {
            var username = $(this).val();
            if(username.length < 3 || username.length > 15) {
                validate = false;
                $(this).siblings('div .tipwrong').css('display', 'block');
                $(this).siblings('div .tipwrong').find('em').text('请输入用户名');
                $(this).siblings('div .tipok').css('display', 'none');
                $(this).addClass('input_border_red');
            } else {
                if(oldusername == username) {
                    return false;
                }
                oldusername = username;
                $.get('{{url('User/checkuser')}}?username='+username, function(result){
                    if(result.status==1) {
                        $('#username').siblings('div .tipok').css('display', 'block');
                        $('#username').siblings('div .tipwrong').css('display', 'none');
                        $('#username').removeClass('input_border_red');
                    } else {
                        validate = false;
                        $('#username').siblings('div .tipwrong').css('display', 'block');
                        $('#username').siblings('div .tipwrong').find('em').text(result.msg);
                        $('#username').siblings('div .tipok').css('display', 'none');
                        $('#username').addClass('input_border_red');
                    }
                }, 'json');
            }
        });
        $('#password').bind('blur', function() {
            var password = $(this).val();
            if(password.length >= 6 && password.length <= 16) {
                $(this).siblings('div .tipok').css('display', 'block');
                $(this).siblings('div .tipwrong').css('display', 'none');
                $(this).removeClass('input_border_red');
            } else {
                validate = false;
                $(this).siblings('div .tipwrong').css('display', 'block');
                $(this).siblings('div .tipok').css('display', 'none');
                $(this).addClass('input_border_red');
            }
        });
        $('#mobile').bind('blur', function() {
            if(/^1[3|4|5|7|8]\d{9}$/.test($(this).val())) {
                $(this).siblings('div .tipok').css('display', 'block');
                $(this).siblings('div .tipwrong').css('display', 'none');
                $(this).removeClass('input_border_red');
            } else {
                validate = false;
                $(this).siblings('div .tipwrong').css('display', 'block');
                $(this).siblings('div .tipok').css('display', 'none');
                $(this).addClass('input_border_red');
            }
        });
        $('#code').bind('blur', function() {
            var code = $(this).val();
            if(/^\w{4}$/.test(code)) {
                if(oldcode == code) {
                    return false;
                }
                oldcode = code;
                $.get('/misc/checkcode?code='+code, function(result){
                    if(result.success) {
                        $('#code').siblings('div .tipok').css('display', 'block');
                        $('#code').siblings('div .tipwrong').css('display', 'none');
                        $('#code').removeClass('input_border_red');
                    } else {
                        validate = false;
                        $('#code').siblings('div .tipwrong').css('display', 'block');
                        $('#code').siblings('div .tipwrong').find('em').text('图片验证码错误!');
                        $('#code').siblings('div .tipok').css('display', 'none');
                        $('#code').addClass('input_border_red');
                    }
                }, 'json');
            } else {
                validate = false;
                $(this).siblings('div .tipwrong').css('display', 'block');
                $('#code').siblings('div .tipwrong').find('em').text('输入图片验证码!');
                $(this).siblings('div .tipok').css('display', 'none');
                $(this).addClass('input_border_red');
            }
            return false;
        });

        $('#mobilecode').bind('blur', function() {
            var mobilecode = $(this).val();
            if(/^\d{6}$/.test(mobilecode) || /^\d{8}$/.test(mobilecode)) {
                if(oldmobilecode == mobilecode) {
                    return false;
                }
                oldmobilecode = mobilecode;
                $.get('/misc/checkmobilecode?mobile='+$('#mobile').val()+'&code='+mobilecode, function(result){
                    if(result.success) {
                        $('#mobilecode').siblings('div .tipok').css('display', 'block');
                        $('#mobilecode').siblings('div .tipwrong').css('display', 'none');
                        $('#mobilecode').removeClass('input_border_red');
                    } else {
                        validate = false;
                        $('#mobilecode').siblings('div .tipwrong').css('display', 'block');
                        $('#mobilecode').siblings('div .tipwrong').find('em').text('手机校验码错误!');
                        $('#mobilecode').siblings('div .tipok').css('display', 'none');
                        $('#mobilecode').addClass('input_border_red');
                    }
                }, 'json');
            } else {
                validate = false;
                $(this).siblings('div .tipwrong').css('display', 'block');
                $('#code').siblings('div .tipwrong').find('em').text('输入图片验证码!');
                $(this).siblings('div .tipok').css('display', 'none');
                $(this).addClass('input_border_red');
            }
            return false;
        });

        $('#getcode').bind('click', function() {
            validate = true;
            $('#mobile').trigger('blur');
            $('#code').trigger('blur');
            var mobile = $('#mobile').val();
            var code = $('#code').val();
            if(/^1[3|4|5|7|8]\d{9}$/.test(mobile) && code.length == 4 && validate) {
                $(this).attr('disabled', true);
                $.ajax({
                    url: '/passport/code?mobile=' + mobile + '&code='+code,
                    data: null,
                    success: function(result) {
                        if(result.success) {
                            $('#mobilecode').siblings('div .tipwrong').css('display', 'none');
                            $('#mobilecode').siblings('div .tipok').css('display', 'none');
                            var time = 60;
                            var wait = setInterval(function() {
                                if(time <= 0) {
                                    $('#getcode').val('重新获取校验码');
                                    clearInterval(wait);
                                    $('#getcode').attr('disabled', false);
                                } else {
                                    $('#getcode').val(time + '秒后重新获取');
                                    time -= 1;
                                }
                            }, 1000);
                        } else {
                            validate = false;
                            $('#mobilecode').siblings('div .tipwrong').css('display', 'block');
                            $('#mobilecode').siblings('div .tipwrong').find('em').text(result.msg);
                            $('#mobilecode').siblings('div .tipok').css('display', 'none');
                            $('#mobilecode').addClass('input_border_red');
                            $('#getcode').attr('disabled', false);
                        }
                    },
                    dataType: 'json'
                });
            }
            return false;
        });
    });
    function submitcheck() {
        validate = true;
        $('#username').trigger('blur');
        $('#password').trigger('blur');
        $('#mobile').trigger('blur');
        $('#code').trigger('blur');
        $('#mobilecode').trigger('blur');
        return validate;
    }
</script>
<div class="clear"> </div>
<div class="foot">
    <div class="foot_txt">
        <p>Copyright 2008-2018 jihaoba.com, All Rights Reserved 豫ICP备16006088号 <br />
            客服热线：4002-000-000</p>
    </div>
</div>
</body>
</html>


G.app.review = {
    version: "2013072511",
    DOMAIN:'pinglun.yixun.com',
    EXPER_DEF_VAL: "��л����С�׵�֧�֣�����С������ṩ����Ʒ�ͷ��������𣿷�����룬���л��ֽ���Ŷ��",
    ASKING_DEF_VAL: "������������5-1000����֮�䡣",
    DISCU_DEF_VAL: "������������5-1000����֮�䡣",
    initTextArea: function(a,defaultMsg) {

        if(window.location.host == "item.51buy.com"){
            G.app.review.DOMAIN = "item.51buy.com";
        }
        var b = $("textarea[name=content]", a);
        G.logic.validate.lenMon({
            target: b,
            minLen: 0,
            maxLen: 1000,
            sucClass: "",
            failClass: "strong",
            tipCtrl: $("span[t=word_calc]", a),
            charLenStyle: false
        });
        G.ui.tips.swapInput({
            target: b,
            defaultValue: defaultMsg,
            focusClass: "",
            blurClass: "nor"
        }).keydown(function(c) {
            if (c.ctrlKey && (c.which == 13 || c.which == 10)) {
                $("a[t=submit]", a).click()
            }
        }).focus(function() {
            G.ui.tips.none($(this))
        }).blur();
        $("input[t=accept_rule]").click(function() {
            if ($(this).attr("checked")) {
                G.ui.tips.none($("p[t=tipArea]", a))
            }
        });
        b.focus().blur();
        return b
    },
    initDiscussion: function() {
        var a = $("#review_discussion_box"),
        b = G.app.review.initTextArea(a,G.app.review.DISCU_DEF_VAL);
        G.app.review.codeChaneg();
        $("a[t=submit]", a).click(function() {
            if (G.logic.login.ifLogin(this, arguments) === false) {
                return
            }
            var e = G.logic.login.getLoginUid(),
            i = b.val();
            if ($("input[t=accept_rule]:checked").length <= 0) {
                G.ui.tips.warn("����ϸ�Ķ���Ѹ�������۹��򣬽��ܺ󷽿ɷ������ۣ�", $("p[t=tipArea]", a));
                return
            }
            i = $.trim(i);
            if (i == G.app.review.DISCU_DEF_VAL) {
                i = ""
            }
            if (i.length <= 0) {
                G.ui.tips.warn("����д�������ݣ�", b);
                return
            }
            var f = $.trim($(".verify_input").val());
            if (f.length <= 0) {
                G.ui.tips.warn("����д��֤�롣", b);
                return
            }
            if (i.length < 5 || i.length > 1000) {
                G.ui.tips.warn(G.app.review.DISCU_DEF_VAL, b);
                return
            }
            var d = itemInfo.pid,
            g = {
                pid: d,
                content: i,
                codeNum: f
            };
            var h = $("input[name=nick]", a);
            if (h.length > 0) {
                g.nick = h.val()
            }
            G.app.review.loading.open();
            G.util.post(G.util.token.addToken("http://"+G.app.review.DOMAIN+"/json.php?mod=review&act=adddiscussion&uid=" + e,'jq'), g,
            function(j) {
                G.app.review.loading.close();
                if (j && j.errno == 0) {
                    location.href = "http://item.yixun.com/item-" + d + ".html#review_box"
                } else {
                    if (j && j.errno == 14) {
                        G.ui.tips.warn("��֤�����", b);
                        G.app.review.codeChaneg();
                        return
                    } else {
                        var c = {
                            12 : "���ݹ�������ɾ���������ݺ����",
                            14 : "����д�ǳ�",
                            777 : "������������ݿ��ܰ���������Ϣ�����ǻᾡ����ˣ�������Ա���ͨ�������۽���ʾ��ҳ���С�",
                            600 : "���ķ���Ƶ�ʹ��죬���Ժ��ٷ���",
                            602 : "���ľ���ֵ���㣬�޷��������ۣ������κ���������������ѯ",
                            776 : "��������������к��в�ǡ������Ϣ���������������ٷ���"
                        };
                        if (j && (j.errno - 0) in c) {
                            return G.ui.popup.showMsg(c[j.errno])
                        }
                        G.ui.popup.showMsg("��Ǹ����������ʧ�ܣ�")
                    }
                }
            })
        })
    },

    initExperience: function() {
        var a = $("#review_experience_box"),
            b = {};
            defultMsg = G.app.review.EXPER_DEF_VAL;

        $.ajax({
          url: 'http://'+G.app.review.DOMAIN+'/json.php?mod=review&act=guide&jsontype=str&pid=' + itemInfo.pid,
          success: function(o){
            if (o && o.errno == 0 && o.data != "" ) {
                G.app.review.EXPER_DEF_VAL = o.data;
                b = G.app.review.initTextArea(a,defultMsg);
            }else{
                 //do nothing
                 b = G.app.review.initTextArea(a,defultMsg);
            }
          },
          timeout:function(){
            b = G.app.review.initTextArea(a,defultMsg);
          },
          error:function(){
            b = G.app.review.initTextArea(a,defultMsg);
          },
          dataType: "jsonp",
          timeout: 1200
        });

        $("input[oname=����]").attr("checked", true);
        a.data("star", 0);

        $("#review_grade_box .grade li").each(function(c) {
            $(this).mouseover(function() {
                $(this).addClass("strong");
                $("#review_grade_box .grade li .star").addClass("no_star").filter(":lt(" + (c + 1) + ")").removeClass("no_star")
            }).mouseout(function() {
                $(this).removeClass("strong");
                $("#review_grade_box .grade li .star").addClass("no_star").filter(":lt(" + a.data("star") + ")").removeClass("no_star")
            }).click(function() {
                a.data("star", c - 0 + 1);
                G.ui.tips.none($("#review_grade_box .grade"))
            })
        });

        $("a[t=submit]", a).click(function() {
            if (G.logic.login.ifLogin(this, arguments) === false) {
                return
            }
            var f = G.logic.login.getLoginUid(),
            j = b.val();
            if ($("input[t=accept_rule]:checked").length <= 0) {
                G.ui.tips.warn("����ϸ�Ķ���Ѹ�������۹��򣬽��ܺ󷽿ɷ������ۣ�", $("p[t=tipArea]", a));
                return
            }
            j = $.trim(j);
            if (j == G.app.review.EXPER_DEF_VAL) {
                j = ""
            }
            if (a.data("star") <= 0) {
                G.ui.tips.warn("��ֱ�ӵ����Ӧ���Ǽ��������֣�", $("#review_grade_box .grade"));
                return
            }
            if (j.length <= 0) {
                G.ui.tips.warn("����д�������ݣ�", b);
                return
            }
            if (j.length < 5 || j.length > 1000) {
                G.ui.tips.warn("������������5~1000����֮�䡣", b);
                return
            }
            var e = $("input[type=radio][oname]"),
            h = [];
            if (e.length > 0) {
                e.filter(":checked").each(function() {
                    h.push($(this).val())
                })
            }
            h = h.join(",");
            var d = itemInfo.pid,
            g = {
                pid: d,
                content: j,
                satisfaction: a.data("star"),
                votes: h
            };
            var i = $("input[name=nick]", a);
            if (i.length > 0) {
                g.nick = i.val()
            }
            G.app.review.loading.open();
            G.util.post(G.util.token.addToken("http://"+G.app.review.DOMAIN+"/json.php?mod=review&act=addexperience&uid=" + f,'jq'), g,
            function(k) {
                G.app.review.loading.close();
                if (k && ("errno" in k)) {
                    if (k.errno == 0) {
                        if (("data" in k) && ("user_is_no_score" in k.data)) {
                            G.ui.popup.showMsg("��������ҵ�û����������۲��ٻ�û��֡����������µ�ͷ�ѯ�ʡ�", 1,
                            function() {
                                location.href = "http://item.yixun.com/item-" + d + ".html#review_box"
                            },
                            function() {
                                location.href = "http://item.yixun.com/item-" + d + ".html#review_box"
                            },
                            function() {},
                            "��֪����")
                        } else {
                            G.ui.popup.showMsg("����ɹ�<p><b>���������ѳɹ��ύ����Ӧ���ֽ���ʱ���ŵ������˻�������������Ʒ������Ʒ���������Ż��֣���л֧�֡�</b></p>", {
                                type: 3,
                                okText: "����ҳ���",
                                okFn: function() {
                                    location.href = "http://www.yixun.com";
                                    return;
                                },
                                closeFn: function() {
                                    location.href = "http://item.yixun.com/item-" + d + ".html#review_box"
                                },
                                cancelText: "�رյ�ǰҳ",
                                btns: 3,
                                cancelFn: function() {
                                    var browserName = navigator.appName;
                                    if (browserName=="Netscape") {
                                        window.open('', '_self', '');
                                        window.close();
                                    }else {
                                        if (browserName == "Microsoft Internet Explorer"){
                                            window.opener = "whocares";
                                            window.opener = null;
                                            window.open('', '_top');
                                            window.close();
                                        }
                                    }
                                    return;
                                }
                            });
                        }
                    } else {
                        var c = {
                            18 : "��û�й��������Ʒ���޷����������ĵã�",
                            21 : "���Ѿ��Ը���Ʒ����������ĵ��ˣ�",
                            22 : "����д�ǳ�",
                            23 : "����δ�������Ʒ���޷������������ۣ���ӭ��������Ʒ���ۻ�������ۣ�",
                            24 : "��������48Сʱ֮�󷽿ɷ��������ĵã�",
                            27 : "���������Ʒ�Ѿ������˿����۵����ޣ������Զ�һ����֮�ڵĶ��������������۲���ȡ���֡���л������Ѹ����һ�������֧�֣�",
                            28 : "���Ķ�����δ��ɣ���ʱ�޷������������ۣ�",
                            600 : "���ķ���Ƶ�ʹ��죬���Ժ��ٷ���",
                            776 : "��������������ĵ��к��в�ǡ������Ϣ���������������ٷ���"
                        };
                        k.errno = parseInt(k.errno);
                        if (k.errno in c) {
                            G.ui.popup.showMsg(c[k.errno])
                        } else {
                            G.ui.popup.showMsg("��Ǹ���������ĵ�ʧ�ܡ�")
                        }
                    }
                } else {
                    G.ui.popup.showMsg("��Ǹ���������ĵ�ʧ�ܡ�")
                }
            })
        })
    },
    initAsking: function() {
        var a = $("#review_asking_box"),
			b = G.app.review.initTextArea(a,G.app.review.ASKING_DEF_VAL),
			hasBindPop = false;
        G.app.review.codeChaneg();
        $("a[t=submit]", a).click(function() {
            if (G.logic.login.ifLogin(this, arguments) === false) {
                return
            }
            var j = G.logic.login.getLoginUid(),
            k = b.val();
            if ($("input[t=accept_rule]:checked").length <= 0) {
                G.ui.tips.warn("����ϸ�Ķ���Ѹ�������۹��򣬽��ܺ󷽿ɷ������ۣ�", $("p[t=tipArea]", a));
                return
            }
            k = $.trim(k);
            if (k == G.app.review.ASKING_DEF_VAL) {
                k = ""
            }
            if (k.length <= 0) {
                G.ui.tips.warn("����д�������ݣ�", b);
                return
            }
            var f = $.trim($(".verify_input").val());
            if (f.length <= 0) {
                G.ui.tips.warn("����д��֤�롣", b);
                return
            }
            if (k.length < 5 || k.length > 1000) {
                G.ui.tips.warn("������������5~1000����֮�䡣", b);
                return
            }
            var l = 1,
            e = {
                1 : "asking",
                2 : "tranandpayasking",
                3 : "invoiceandmaintasking"
            },
            d = $("input[name=asking_type]:checked", a).val();
            if (e[d]) {
                l = d
            }
            var i = itemInfo.pid;
            var h = {
                pid: i,
                content: k,
                codeNum: f
            };
            var g = $("input[name=nick]", a);
            if (g.length > 0) {
                h.nick = g.val()
            }
            G.app.review.loading.open();
            G.util.post(G.util.token.addToken("http://"+G.app.review.DOMAIN+"/json1.php?mod=reviews&act=addasking&type=" + e[l] + "&uid=" + j,'jq'), h,
            function(m) {
                G.app.review.loading.close();
                if (m && m.errno == 0) {
					var content="<div id='J_PopSuccess'>��л������ѯ�����ǽ�����ظ����������ҵ���Ѹ-<a href='http://base.yixun.com/myconsult.html' ><b>��Ʒ��ѯ</b></a>��ѯ��</div>";
					G.ui.popup.showMsg(content);
					if ( hasBindPop == false ) {
						$( '#J_PopSuccess' ).parents( '.layer_global' ).click( function( e ) {
							location.href = "http://item.yixun.com/item-" + i + ".html#asking_box";
						});
						hasBindPop = true;
					}
					//setTimeout( function() { location.href = "http://item.yixun.com/item-" + i + ".html#asking_box"; }, 1 );
                } else {
                    if (m && m.errno == 14) {
                        G.ui.tips.warn("��֤�����", b);
                        G.app.review.codeChaneg();
                        return
                    } else {
                        var c = {
                            12 : "���ݹ�������ɾ���������ݺ����",
                            14 : "����д�ǳ�",
                            777 : "������������ݿ��ܰ���������Ϣ�����ǻᾡ����ˣ�������Ա���ͨ������ѯ����ʾ��ҳ���С�",
                            600 : "���ķ���Ƶ�ʹ��죬���Ժ��ٷ���",
                            776 : "�����������ѯ�к��в�ǡ������Ϣ���������������ٷ���"
                        };
                        if (m && (m.errno - 0) in c) {
                            return G.ui.popup.showMsg(c[m.errno])
                        }
                        G.ui.popup.showMsg("��Ǹ��������ѯʧ�ܣ�")
                    }
                }
            })
        })
    },
    codeChaneg: function() {
        $("#codeimg").attr("src", "http://"+G.app.review.DOMAIN+"/json.php?jsontype=str&mod=review&act=vcode&_=" + Math.random())
    },
    loading: (function() {
        var a = null;
        function b() {
            if (!a) {
                a = G.ui.popup.create({
                    title: "�����ύ��...",
                    width: 500
                });
                a.paint(function(c) {
                    $(c.content).empty().html('<span class="loading_58_58">���ڼ�����</span>')
                })
            }
            return a
        }
        return {
            open: function() {
                b().show()
            },
            close: function() {
                b().close()
            }
        }
    })()
};/*  |xGv00|d27cc74a982cfaa274e4eb83ba2d3f3b */
$(function(){
    //点击搜索按钮提交表单
    $('.form_1_btn').click(function(){
        $('.form_1').submit();
    })


    //编辑商户信息
    $('.edit').click(function(){

        //表单显示
        $('#hidden_form').css('visibility','visible');

        //获取'编辑'按钮之前的所有td
        var pre=$(this).prevAll('td');
        $('#hidden_form_id').val(pre.eq(6).text());
        $('#hidden_form_storeId').val(pre.eq(5).text());
        $('#hidden_form_storeName').val(pre.eq(4).text());
        $('#hidden_form_storeContact').val(pre.eq(3).text());
        $('#hidden_form_storeTel').val(pre.eq(2).text());
    });

    //商户-编辑按钮
    $('.edit_store_power').click(function(){

        //表单显示
        $('#hidden_form').css('visibility','visible');

        //获取'编辑'按钮之前的所有td
        var prea=$(this).prevAll('td');
        $('#hidden_form_id').val(prea.eq(6).text());
        $('#hidden_form_id_list').val(prea.eq(0).text());
    });

    //点击新增
    $('#add_company').click(function(){

        //表单显示
        $('#hidden_form').css('visibility','visible');
    })

    //涨跌幅红色、绿色
    $('.range').each(function(){
        var range =$(this).text();
        if(range==''){
            $(this).text('--');
        }
        if(parseFloat(range) < 0){
            $(this).css('color','green')
        }else{
            //console.log($('.range').text());
            $(this).css('color','red')
        }
    });

    //代销基金列表
    $('.fund_agency_li').click(function(){
        $(this).addClass('fund_agency_li_click').siblings().removeClass('fund_agency_li_click');
        $(".table-scrollable").remove();
    });
});

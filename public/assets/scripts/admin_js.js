//搜索按钮，提交表单
$('.submit_input').click(function(){
    $('#is_excel').val('0');
    $('#sh_form').submit();
})


//清空筛选
$('.clear_input').click(function(){
    $('input').not('input[type=hidden]').val('');
    $('#is_excel').val('0');
    $('select').val('');

    $('#sh_form').submit();
});

//导出excel
$('.export_excel').click(function(){
    if ($(this).attr('data-value') > 4000) {
        alert('单次导出数据上限为4000条，请调整查询时间分批导出');
        return false;
    }
    $('#is_excel').val('1');
    $('#sh_form').submit();
});

/**
 * 将数值格式化成金额形式
 *
 * @param num 数值(Number或者String)
 * @param precision 精度，默认不变
 * @param separator 分隔符，默认为逗号
 * @return 金额格式的字符串,如'1,234,567'，默认返回NaN
 * @type String
 */
function formatNumber(num, precision, separator) {
    var parts;
    // 判断是否为数字
    if (!isNaN(parseFloat(num)) && isFinite(num)) {
        // 把类似 .5, 5. 之类的数据转化成0.5, 5, 为数据精度处理做准, 至于为什么
        // 不在判断中直接写 if (!isNaN(num = parseFloat(num)) && isFinite(num))
        // 是因为parseFloat有一个奇怪的精度问题, 比如 parseFloat(12312312.1234567119)
        // 的值变成了 12312312.123456713
        num = Number(num);
        // 处理小数点位数
        num = (typeof precision !== 'undefined' ? (Math.round(num * Math.pow(10,precision)) / Math.pow(10,precision)).toFixed(precision) : num).toString();
        // 分离数字的小数部分和整数部分
        parts = num.split('.');
        // 整数部分加[separator]分隔, 借用一个著名的正则表达式
        parts[0] = parts[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1' + (separator || ','));

        return parts.join('.');
    }
    return NaN;
}
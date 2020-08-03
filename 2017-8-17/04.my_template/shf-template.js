function shf_template(id,data) {
    var str=document.querySelector('#'+id).innerHTML
    // 定义正则
    var reg=/{{(\w+)}}/
    // 检索
    var result=reg.exec(str)
    while (result){
        // 循环替换 直到为null
        str=str.replace(result[0],data[result[1]])
        // 再次检索
        result=reg.exec(str)
    }
    return  str
}
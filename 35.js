function get(url,data,success) {
    var xhr=new XMLHttpRequest()
    if (data){
        url+='?'
        url+=data
    }
    xhr.open('get',url)
    xhr.onreadystatechange=function () {
        if (xhr.readyState===4&&xhr.status===200){
            // console.log(xhr.responseText)
            // console.log(JSON.parse(xhr.responseText))
            // console.log(xhr.responseXML)
            // return xhr.responseXML // return拿不到数据
            success(xhr.responseText)
        }
    }
    xhr.send(null)
}
function post(url,data,success) {
    var xhr=new XMLHttpRequest()
    xhr.open('post',url)
    if (data){
        xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    }
    xhr.onreadystatechange=function () {
        if (xhr.readyState===4&&xhr.status===200){
            success(xhr.responseText)
        }
    }
    xhr.send(data)
}
function ajax(url,type,data,success) {
    var xhr=new XMLHttpRequest()
    if (type==='get'&&data){
        url+='?'
        url+=data
        data=null
    }
    xhr.open(type,url)
    if (type==='post'&&data){
        xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    }
    xhr.onreadystatechange=function () {
        if (xhr.readyState===4&&xhr.status===200){
            success(xhr.responseText)
        }
    }
    xhr.send(data)
}
function ajax1(option) {
    var xhr=new XMLHttpRequest()
    if (option.type==='get'&&option.data){
        option.url+='?'
        option.url+=option.data
        option.data=null
    }
    xhr.open(option.type,option.url)
    if (option.type==='post'&&option.data){
        xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    }
    xhr.onreadystatechange=function () {
        if (xhr.readyState===4&&xhr.status===200){
            console.log(xhr.getResponseHeader('content-type'))
            var type=xhr.getResponseHeader('content-type')
            if (type.indexOf('json')!==-1){
                option.success(JSON.parse(xhr.responseText))
            } else if (type.indexOf('xml')!==-1){
                option.success(xhr.responseXML)
            } else {
                option.success(xhr.responseText)
            }
        }
    }
    xhr.send(option.data)
}
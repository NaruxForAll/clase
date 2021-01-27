require('./bootstrap');


document.getElementById("send").addEventListener("click", ()=>{
    var title1 = document.getElementById("title1").value
    var title2 = document.getElementById("title2").value
    var title3 = document.getElementById("title3").value
    if(title1 != "" && title2 != "" && title3 != ""){
        var form = new FormData(document.getElementById("form"))
        fetch(url,{
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            },
            body: form
        })
        console.log(form)
        document.getElementById("data").innerHTML += "<tr><td>"+title1+"</td>"+"<td>"+title2+"</td>"+"<td>"+title3+"</td></tr>"
    } else{
        alert("Te has dejado algún campo vacío")
    }
})

document.getElementById("edit").addEventListener("click", ()=>{
    var form = new FormData(document.getElementById("form"))
    fetch(url,{
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        },
        body: form
    })
console.log("funciona")
})

document.getElementById("delete").addEventListener("click", ()=>{
    fetch(url,{
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        },
    })
console.log("funciona")
})

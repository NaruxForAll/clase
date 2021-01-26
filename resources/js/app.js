require('./bootstrap');

document.getElementById("send").addEventListener("click", ()=>{
    var title1 = document.getElementById("title1").value
    var title2 = document.getElementById("title2").value
    var title3 = document.getElementById("title3").value

    if(title1 != null && title2 != null && title3 != null){
        document.getElementById("data").innerHTML =+ "<tr><td>"+title1+"</td>"+"<td>"+title2+"</td>"+"<td>"+title3+"</td></tr>"
    } else{
        alert("Te has dejado algún campo vacío")
    }
})

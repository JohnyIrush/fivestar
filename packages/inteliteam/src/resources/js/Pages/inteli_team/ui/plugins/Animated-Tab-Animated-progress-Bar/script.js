document.getElementsByClassName("st1").addEventListener('click',function() {
    document.getElementsByClassName("profile").prop("checked", true)
})

document.getElementsByClassName("st2").addEventListener('click',function() {
    document.getElementsByClassName("settings").prop("checked", true)
})

document.getElementsByClassName("st3").addEventListener('click',function() {
    document.getElementsByClassName("posts").prop("checked", true)
})

document.getElementsByClassName("st4").addEventListener('click',function() {
    document.getElementsByClassName("books").prop("checked", true)
})

document.getElementsByClassName("l li").addEventListener('click',function() {
    document.getElementsByClassName(tis).addClass("active").siblings().removeClass("active");
})
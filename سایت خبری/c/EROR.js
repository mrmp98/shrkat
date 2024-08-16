 
window.addEventListener('offline' , function()
{
    this.localStorage.setItem ('locashen'  , this.window.location.href)
    this.location.href = '../eror/eror.html'  

 })
 setInterval(function()
 {
    this.localStorage.setItem ('locashen'  , this.window.location.href)
    this.location.href = '../eror/eror.html'  
 } , 1000)

var g = false ; 
let like  = document.querySelector('#likee') ;
function api(){
    let p = document.querySelectorAll('#qw') ;
        p.forEach(pp => { 
            pp.addEventListener('click' , function(){

                
               $.ajax({
                    type : 'POST' , 
                    url  : 'like.php' , 
                    data : { id:pp.className , vaz: g} , 
                    success: function(response) {
                   if(g== false){
                       g =true ; 

                   }else{
                    g = false ; 
                   }
                    $('#response').html(response);
                },
                
                })
                
            })
        })
    
    
}

api() ; 
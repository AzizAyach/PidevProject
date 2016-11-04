
function  resultat_rech(){
    var x= $('#3alleni').val();
    $.ajax({
              type:'get',
             url:'http://localhost/FreelancerWeb/web/app_dev.php/Freelancer/projet/rechercher/'+x,
                                    
          success: function (data) {
            if(data.res){
                  $('#content').empty();
        
                  i=new Object();
                for(i in data.res){
                  
                  $('#content').append(
               '<div class="container"><h1><a href="http://localhost/FreelancerWeb/web/app_dev.php/Freelancer/projet/'+data.res[i].id+'/show">'+data.res[i].nom+'</a></h1><br><p>'+data.res[i].desc+'</p> </div><br> '
                
                              );    
                } 
            } 
        }    
    });
    
    
    
    
}

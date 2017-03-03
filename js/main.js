var pos=0;
var intv;
$(document).on('ready',function(){
    init();
});

function init(){
    $('.slider_control li').on('click',handleClick);
    var width = $('.slider_content').width();
    $('.slide').each(function(i,e){
        var url=$(e).data('background');
        $(e).css('width',width+'px');
         $(e).css('background-image',"url("+(url+".jpg")+")");
    });
    //clearInterval(initv); a trabajar
    initv= setInterval(handleClick,10000);
    
}
google.maps.event.addDomListener(window,"load",drawMap);
function drawMap(){
   
    var mapa;
    var opcionesMapa={
        zoom:15,
           
             
            scrollwheel: false,
             
        mapTypeId:google.maps.MapTypeId.ROADMAP
        
    }
     var image = 'img/dentist.png';
    mapa = new google.maps.Map(document.getElementById("loc"),opcionesMapa);
   
        var geolocalizacion= new google.maps.LatLng(-40.581149,-73.127359);
        var marcador = new google.maps.Marker({
          
            map:mapa,
            draggable:true,
            position:geolocalizacion,
            visible:true, 
            icon: image
        });
        marcador.setTitle("Clinica dental Barros Arrana");                
        mapa.setCenter(geolocalizacion);
       
    
}

function handleClick(){
   var slide_target = 0;
    if($(this).parent().hasClass('slider_control')){
        slide_target=$(this).index();
        pos=slide_target;
        clearInterval(intv);
        intv = setInterval(handleClick,10000);
    }
    else{
        pos++;
        if(pos>=$('.slide').length){
            pos=0;
        }
        slide_target=pos;
        
    }
    
    $('.sliderContent').fadeOut('slow',function(){
        $(this).animate({
           'margin-left':-(slide_target * $('.slider_content').width())+'px' 
        },'slow',function(){
            $(this).fadeIn();
        });
    });
 }
 
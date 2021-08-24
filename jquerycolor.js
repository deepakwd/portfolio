 $(document).ready(function(){
           
            $("#themewhite").click(function(){
                
                $(":root").css({"--blue":"white","--color":"black","--midblack":"#cbd2d9","--blakli":"rgba(255, 255, 255, 0.329)"});
            });
            $("#themeblack").click(function(){
                $(":root").css({"--blue":"black","--color":"white","--midblack":"rgba(0, 0, 0, 0.719)","--blakli":"rgba(0, 0, 0, 0.329)"});
            });
            $("#thememidnightblue").click(function(){
                $(":root").css({"--blue":"midnightblue","--color":"whitesmoke","--midblack":"rgba(25, 25, 112, 0.729)","--blakli":"rgba(25, 25, 112, 0.329)"});
            });
     
        });
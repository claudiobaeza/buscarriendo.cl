/*
 /* ------------------------ SPA Marco de Trabajo ------------------------------
 Copyright (C ) 2013 - Federico Vicente - mail@federicovicente.com.ar

 Este programa es software libre: usted puede redistribuirlo y / o modificarlo
 bajo los tÃ©rminos de la Licencia PÃºblica General GNU publicada por
 la FundaciÃ³n para el Software Libre , ya sea la versiÃ³n 3 de la Licencia, o
 (a su elecciÃ³n ) cualquier versiÃ³n posterior.

 Este programa se distribuye con la esperanza de que sea Ãºtil,
 pero SIN NINGUNA GARANTÃA, incluso sin la garantÃ­a implÃ­cita de
 COMERCIALIZACIÃ“N o IDONEIDAD PARA UN PROPÃ“SITO PARTICULAR . Consulte la
 GNU General Public License para mÃ¡s detalles.

 DeberÃ­a haber recibido una copia de la Licencia PÃºblica General de GNU
 junto con este programa . Si no es asÃ­ , consulte http://www.gnu.org/licenses/.



 */

// script para irarriba
function irarriba() {
    var s = $(".irarriba");
    var pos = 500;

    $(window).scroll(function () {
        var windowpos = $(window).scrollTop();

        if (windowpos >= pos) {
            s.removeClass("ocultar");
            s.addClass("visible");
        } else {
            s.removeClass("visible");
            s.addClass("ocultar");
        }
    });
}


//script para fijar barra vertical de menu
function fijar(objeto) {
    var pantalla = $(window).width();
    var f = $("#" + objeto);
    var fijarinicio = $('#' + objeto).attr("data-start");
    var fijarfin = $('#' + objeto).attr("data-end");
    $(window).scroll(function () {
        var windowpos = $(window).scrollTop();
        if (windowpos >= fijarinicio && windowpos <= fijarfin) {
            if (pantalla >= 801) {
                f.addClass("fijar");
//                console.log(windowpos + " fijando" + pantalla);
            }
        } else {
            if (pantalla >= 801) {
//                console.log(windowpos + " no fijando");
                f.removeClass("fijar");
            }
        }
    });

}

// script para navbar
function navbar() {
    var pos = 500;
    $(window).scroll(function () {
        var windowpos = $(window).scrollTop();

        if (windowpos >= pos) {
            $("#barra").removeClass("fondo-nube");
            $("#barra").addClass("fondo-asbesto");
            $("#barra").find('a').removeClass("texto-negro");
            $("#barra").find('a').addClass("texto-blanco");
            $("#barra").find('li').removeClass("texto-negro");
            $("#barra").find('li').addClass("texto-blanco");
            $("#iso").attr("src", "img/isoblanco.svg");
        } else {
            $("#barra").removeClass("fondo-asbesto");
            $("#barra").addClass("fondo-nube");
            $("#barra").find('a').removeClass("texto-blanco");
            $("#barra").find('a').addClass("texto-negro");
            $("#barra").find('li').removeClass("texto-blanco");
            $("#barra").find('li').addClass("texto-negro");
            $("#iso").attr("src", "img/iso.svg");
        }
    });
}

//script para scroll-suave

$(document).on('click', 'a.scroll-suave', function (e) {
    e.preventDefault();
    var $link = $(this);
    var anchor = $link.attr('href');
    $('html, body').stop().animate({
        scrollTop: $(anchor).offset().top
    }, 1000);
});

//script para banner
function bannerVertical(id, alto, tiempo, tiempoAnimacion) {
    var cantidadItems = $(id + '.banner-vertical ul li').size();

    if (alto == "") {
        alto = Math.ceil($(id + '.banner-vertical').width() / 3);
    }

    //seteando banner;
    $(id + '.banner-vertical').width("100%");
    $(id + '.banner-vertical').height(alto);

    $(id + '.banner-vertical ul li').width("100%");
    $(id + '.banner-vertical ul li').height(alto);

    $(id + '.banner-vertical ul li img').width("100%");
    $(id + '.banner-vertical ul li img').height(alto);

    $(id + '.banner-vertical').scrollTop(0);

    var totalalto = Math.ceil(alto * cantidadItems);
    var offset = 0;

//    console.log("cantidad de lista - " + cantidadItems);
//    console.log("baner height - " + alto);
//    console.log("total height - " + Math.ceil(alto * cantidadItems));

    //iniciando banner
    setInterval(function () {
        offset = Math.ceil(offset + alto);
        if (offset < totalalto) {
//            console.log('deslizo a '+offset);
            $(id + '.banner-vertical').animate({
                scrollTop: offset,
                easing: "linear"
            }, tiempoAnimacion);
        } else {
            offset = 0;
//            console.log('deslizo a '+offset);
            $(id + '.banner-vertical').animate({
                scrollTop: offset,
                easing: "linear"
            }, tiempoAnimacion);
        }
    }, tiempo);
}


function bannerDesvanecido(id, alto, tiempo) {
    var cantidadItems = $(id + '.banner-desvanecido ul li').size();

    if (alto == "") {
        alto = Math.ceil($(id + '.banner-desvanecido').width() / 3);
    }

    //seteando banner;
    $(id + '.banner-desvanecido').width("100%");
    $(id + '.banner-desvanecido').height(alto);

    $(id + '.banner-desvanecido ul li').width("100%");
    $(id + '.banner-desvanecido ul li').height(alto);

    $(id + '.banner-desvanecido ul li img').width("100%");
    $(id + '.banner-desvanecido ul li img').height(alto);

    //seteando z-index
    var offset = 0;
    for (var i = 0; i < cantidadItems; i++) {
        $(id + '.banner-desvanecido ul li:eq(' + i + ')').css('z-index', 100 + cantidadItems - 1)
    }

    //iniciando banner
    $(id + '.banner-desvanecido ul li:eq(' + (offset) + ')').fadeIn("slow");
//    console.log("aparece "+offset+" de "+ cantidadItems);
    setInterval(function () {
        if (offset < cantidadItems - 1) {
            $(id + '.banner-desvanecido ul li:eq(' + (offset) + ')').fadeOut("slow");
            offset++;
//            console.log("aparece "+offset+" de "+ cantidadItems);
            $(id + '.banner-desvanecido ul li:eq(' + (offset) + ')').fadeIn("slow");
        } else {
            $(id + '.banner-desvanecido ul li:eq(' + (offset) + ')').fadeOut("slow");
            offset = 0;
//            console.log("aparece "+offset+" de "+ cantidadItems);
            $(id + '.banner-desvanecido ul li:eq(' + (offset) + ')').fadeIn("slow");
        }
    }, tiempo);
}

//scrip para tabs vertical
function tabVertical(id) {
    $(id+".tabsVertical div.lista ul li").on("click",function(){
        var tabActivo=$(id).find("li.tabActivoV").attr('id');
        $('#'+tabActivo).removeClass("tabActivoV");
        $('#'+tabActivo+'contenido').addClass("ocultar");
        $('#'+$(this).attr('id')+"contenido").removeClass("ocultar");
        $('#'+$(this).attr('id')).addClass("tabActivoV");
    })
}

//scrip para tabs horizontal
function tabHorizontal(id) {
    $(id+".tabsHorizontal div.lista ul li").on("click",function(){
        var tabActivo=$(id).find("li.tabActivoH").attr('id');
        $('#'+tabActivo).removeClass("tabActivoH");
        $('#'+tabActivo+'contenido').addClass("ocultar");
        $('#'+$(this).attr('id')+"contenido").removeClass("ocultar");
        $('#'+$(this).attr('id')).addClass("tabActivoH");
    })
}

//alertas
function alertas(idboton) {
    var idventana=$(idboton).data("display");
    var tipo=$(idboton).data("type");
    $(idboton).on("click",function(){
        $(".fondo-alertas").addClass(tipo).addClass("fondo-alertas-mostrar");
        $("#"+idventana+".alertas").addClass("alertas-mostrar");
    });
    $("#"+idventana +" a.cerrar-alerta").on("click",function(){
        $(".fondo-alertas").removeClass(tipo).removeClass("fondo-alertas-mostrar");
        $("#"+idventana+".alertas").removeClass("alertas-mostrar");
    });
}

//paneles
$(".panel-plegable .iconos").on("click",function(){
    var id=$(this).parent().attr("id");
    if ($("#"+id).height()!=($(this).outerHeight())){
        $("#"+id+" .contenido").addClass("ocultar");
        $("#"+id).css("height",0);
        $("#"+id+" .iconos").html("<i class='icon-eye-open'></i>");
    } else {
        $("#"+id+" .contenido").removeClass("ocultar");
        $("#"+id).css("height","auto");
        $("#"+id+" .iconos").html("<i class='icon-eye-close'></i>");
    }
})

$(".panel-ocultable .iconos").on("click",function(){
    var id=$(this).parent().attr("id");
    $("#"+id).addClass("ocultar");
})
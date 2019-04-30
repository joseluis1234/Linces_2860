$(document).ready(function () {
    $('#CalendarioWeb').fullCalendar({
        header:{
            left:'today, prev, next, Miboton',
            center:'title',
            right:'month, basicWeek, basicDay, agendaWeek, agendaDay'
        },
        customButtons:{
            Miboton:{
                text:'Solicitar Vacaciones',
                click:function () {
                    swal({
                        title:"error",
                        text:"Debe ingresar su número de usuario",
                        icon:"success",
                        timer:5000,
                    });
                }
            }
        },
        dayClick:function (date,jsEvent,view) {
            alert("Valor seleccionado:" + date.format());
            alert("Valor seleccionado:" + view.name);
            $(this).css('background-color','gray');
            $('#exampleModal').modal();
        },
        eventSources:[{
            events:[
                {
                    title: 'Evento 1, llegamos a 8,000',
                    start: '2019-02-01',
                    hiddenDays:[2,7],
                    color: 'blue',
                    textColor: 'white'
                },
                {
                    title: 'Evento 2, llegamos a 8,004',
                    start:  '2019-02-11',
                    end:    '2019-02-13',
                    color:'gray',
                    textColor:'black'
                },
                {
                    title: 'Evento 3, saludos Lactalis',
                    start: '2019-02-15T12:30:00',
                    allDay: false
                }
            ]

        }],

    });
});

var btnCargar   =   document.getElementById('cargar');
function cargarContenido() {
    var xhr =   new XMLHttpRequest();
     xhr.open("GET","prueba.txt",true);
     xhr.onreadystatechange =   function () {
         if (xhr.readyState ==  4   && xhr.status   == 200){
             console.log("Se cargo correctamente");
             var cont   =    document.getElementById('contenido');
             cont.innerHTML =   xhr.responseText;

             swal({
                 text: "Todo bien",
                 icon:"success"
             });

         }
         
     }

     xhr.send();
}
btnCargar.addEventListener('click',cargarContenido)
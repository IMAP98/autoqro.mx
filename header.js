
const btn_aceptar__cookies = document.getElementById('btn_aceptar__cookies');
const aviso_cookies = document.getElementById('aviso_cookies');
const fondo_aviso__cookies = document.getElementById('fondo_aviso__cookies');

dataLayer = [];

$(document).ready(function () {
    
    navbarMenu()

    if (!localStorage.getItem('cookies_aceptadas')) {

        aviso_cookies.classList.add('activo');
        fondo_aviso__cookies.classList.add('activo');
    
    } else{
    
        dataLayer.push({'event' : 'cookies_aceptadas'});
        
    }
    
    btn_aceptar__cookies.addEventListener('click', () => {
    
        aviso_cookies.classList.remove('activo');
        fondo_aviso__cookies.classList.remove('activo');
    
        localStorage.setItem('cookies_aceptadas', true);
    
        dataLayer.push({'event' : 'cookies_aceptadas'});
    
    });

})

function navbarMenu() {

    // Inicio del dropdown para el elemento "Asociados"
    $('.asociados').mouseover(function () {
        $('.menu-asociados').show();
    })

    $('.asociados').mouseout(function () {
        t = setTimeout(function () {
            $('.menu-asociados').hide();
        }, 100);

        $('.menu-asociados').on('mouseenter', function () {
            $('.menu-asociados').show();
            clearTimeout(t);
        }).on('mouseleave', function () {
            $('.menu-asociados').hide();
        })
    })
    // Fin del dropdown para el elemento "Asociados"

    // Inicio del dropdown para el elemento "Idioma"
    $('.idioma').mouseover(function () {
        $('.menu-idioma').show();
    })

    $('.idioma').mouseout(function () {
        t = setTimeout(function () {
            $('.menu-idioma').hide();
        }, 100);

        $('.menu-idioma').on('mouseenter', function () {
            $('.menu-idioma').show();
            clearTimeout(t);
        }).on('mouseleave', function () {
            $('.menu-idioma').hide();
        })
    })
    // Fin del dropdown para el elemento "Idioma"

}

// $('#enviarFormAso').click(function (e) { 
    
//     let nomEmpSol = getElementById('nomEmpSol');
//     let proSerSol = getElementById('proSerSol');
//     let prinCliSol = getElementById('prinCliSol');
//     let ubiPlanSol = getElementById('ubiPlanSol');
//     let emailSol = getElementById('emailSol');
//     let presCorpSol = getElementById('presCorpSol');

//     let enlace = "nomEmpSol="+nomEmpSol+"&proSerSol="+proSerSol+"&prinCliSol="+prinCliSol+"&ubiPlanSol="+ubiPlanSol+"&emailSol="+emailSol+"&presCorpSol="+presCorpSol;

//     $.ajax({
//         type: "post",
//         url: "./../back-end/php/API/form_aso.php",
//         data: "data",
//         success: function (response) {
            
//         }
//     });
    
// });

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')

      }, false)
    })
  })()

  $('input[type="file"]').on('change', function(){

    var ext = $( this ).val().split('.').pop();

    if ($( this ).val() != '') {

      if(ext == "pdf"){

        if($(this)[0].files[0].size > 10000000){

          alert("El documento excede el tamaño máximo: " + ext);
          $('#modal-title').text('¡Precaución!');
          $('#modal-msg').html("Se solicita un archivo no mayor a 10MB. Por favor verifica.");
          $("#modal-gral").modal();           
          $(this).val('');

        }else{

          $("#modal-gral").hide();

        }

      }else{

        $( this ).val('');
        alert("Extensión no permitida: " + ext);

      }

    }

  });
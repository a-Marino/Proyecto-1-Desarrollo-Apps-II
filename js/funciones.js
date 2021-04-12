$(document).ready(function () {
  // verifica si cambia el valor del campo DNI del paciente
  $("#DNI_vacunado").change(function () {
    // Oculta DIV de mensaje
    $("#mensaje_vac").css("visibility", "hidden");
    // asigna el valor de DNI a la variable y si es >0 realiza la consulta SQL
    var DNI = $("#DNI_vacunado").val();
    if (DNI > 0) {
      $.ajax({
        url: "busca_vacunado.php",
        type: "POST",
        async: true,
        data: { DNI: DNI },
        // Si recupera la informacion del vacunado la carga en los campos del formulario
        success: function (response) {
          console.log(response);
          if (response != "error") {
            var rta = JSON.parse(response);
            $("#apelnom_v").val(rta.apelnom);
            $("#edad_vacunado").val(rta.edad);
            $("#domicilio_vacunado").val(rta.domicilio);
            $("#grupo_riesgo").val(rta.grupo_riesgo).attr("selected", true);
            $("#tipo_vacuna").val(rta.tipo_vacuna).attr("selected", true);
            $("#domicilio_vacunado").val(rta.domicilio);
            // Informa fecha Dosis 1
            $("#dosis1").text("Dosis 1: " + rta.f1);
            $("#btn-registrar-vacunado").css("visibility", "visible");
            // Si RUP2 es >0 es por que tiene la 2 dosis
            if (rta.RUP2 > 0) {
              $("#dosis2").text("Dosis 2: " + rta.f2);
              $("#btn-registrar-vacunado").css("visibility", "hidden");
            } else {
              // Si el vacunatorio registrado en la tabla != al registrado en los datos del vacunador
              // genera el mensaje de error y oculta el boton de registrar vacunado
              if ($("#Id_vacunatorio").val() != rta.Id_vacunatorio) {
                $("#mensaje_vac").removeClass("bg-green-400");
                $("#mensaje_vac").addClass("bg-red-400");
                $("#men_error").text(
                  "Paciente Registrado en Vacunatorio #" + rta.Id_vacunatorio
                );
                $("#mensaje_vac").css("visibility", "visible");
                $("#btn-registrar-vacunado").css("visibility", "hidden");
              }
            }

            // La variable #turno = 2 si graba segunda dosis (Update)
            $("#turno").val(2);

            // Deshabilita campos del formulario para 2 Dosis o Vacunacion Completa
            $("#apelnom_v").prop("disabled", true);
            $("#edad_vacunado").prop("disabled", true);
            $("#domicilio_vacunado").prop("disabled", true);
            $("#grupo_riesgo").prop("disabled", true);
            $("#tipo_vacuna").prop("disabled", true);
          } else {
            // Habilita campos del formulario si se registra 1 Dosis
            $("#apelnom_v").prop("disabled", false).val("");
            $("#edad_vacunado").prop("disabled", false).val("");
            $("#domicilio_vacunado").prop("disabled", false).val("");
            $("#grupo_riesgo").prop("disabled", false).val("");
            $("#tipo_vacuna").prop("disabled", false).val("");
            $("#btn-registrar-vacunado").css("visibility", "visible");
            // La variable #turno indica 1 si es un nuevo vacunado (Insert)
            $("#turno").val(1);
            return console.error();
          }
        },
      });
    }
  });
});

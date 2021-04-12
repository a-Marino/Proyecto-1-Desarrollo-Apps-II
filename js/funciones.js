
$(document).ready(function () {

    // Selector de Puesto Solicitado
    $("#DNI_vacunado").change(function () {
        $("#mensaje_vac").css('visibility', 'hidden');
        var DNI = $("#DNI_vacunado").val();
        if (DNI > 0) {

            $.ajax({
                url: "busca_vacunado.php",
                type: "POST",
                async: true,
                data: { DNI: DNI },

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
                        $("#dosis1").text('Dosis 1: ' + rta.f1);
                        $("#btn-registrar-vacunado").attr('value', 'graba_vacunado');

                        if (rta.RUP2 > 0) {
                            $("#dosis2").text('Dosis 2: ' + rta.f2);
                            $("#btn-registrar-vacunado").attr('value', 'registrar-vacunado');
                        } else {


                            if ($('#Id_vacunatorio').val() != rta.Id_vacunatorio) {
                                $("#mensaje_vac").removeClass("bg-green-400");
                                $("#mensaje_vac").addClass("bg-red-400");
                                $("#men_error").text('Paciente Registrado en Vacunatorio #' + rta.Id_vacunatorio);
                                $("#mensaje_vac").css('visibility', 'visible');
                                $("#btn-registrar-vacunado").attr('value', 'registrar-vacunado');

                            }


                        }


                        $("#turno").val(2);

                        $("#apelnom_v").prop('disabled', true);
                        $("#edad_vacunado").prop('disabled', true);
                        $("#domicilio_vacunado").prop('disabled', true);
                        $("#grupo_riesgo").prop('disabled', true);
                        $("#tipo_vacuna").prop('disabled', true);

                    } else {
                        $("#apelnom_v").prop('disabled', false).val('');
                        $("#edad_vacunado").prop('disabled', false).val('');
                        $("#domicilio_vacunado").prop('disabled', false).val('');
                        $("#grupo_riesgo").prop('disabled', false).val('');
                        $("#tipo_vacuna").prop('disabled', false).val('');
                        $("#btn-registrar-vacunado").attr('value', 'graba_vacunado');

                        $("#turno").val(1);
                        return console.error();
                    }
                }

            });
        }
    });

});
$(document).ready(function() {
    console.log("se cargó el archivo");

    $(".reservation").on("click", function() {
        var id = $(this).attr("id");
        var departure_name = $(`#departure-name-${id}`).text();
        var departure_date = $(`#departure-date-${id}`).text();
        var arrival_name = $(`#arrival-name-${id}`).text();
        var arrival_date = $(`#arrival-date-${id}`).text();

        $("#departure-flight-name").text(departure_name);
        $("#departure-flight-date").text(departure_date);
        $("#arrival-flight-name").text(arrival_name);
        $("#arrival-flight-date").text(arrival_date);

        console.log("id: ", id);
        console.log("departure_name: ", departure_name);
        console.log("departure_date: ", departure_date);

        $("#reservation_modal").modal();
    });

    $("#first-class").on("click", function() {
        var params = {
            id = id,
            type = 'first_class'
        }
        ajaxCall($params)
        console.log("clickeo first");
    });
    $("#economy-class").on("click", function() {
        var params = {
            id = id,
            type = 'economy_class'
        }
        console.log("clickeo economy");
    });

    function ajaxCall(params) {
        var request = $.ajax({
            url: "script.php",
            method: "POST",
            data: {
                id: params.id,
                type: params.type
            },
            beforeSend: function() {
                console.log('comenzo el request')
                console.log('data a enviar: ', data)
            },
            dataType: "json"
        });

        request.done(function(msg) {
            console.log("Request done: ", msg);
            $("#log").html(msg);
        });

        request.fail(function(jqXHR, textStatus) {
            console.log("Request failed: ", textStatus);
        });
    }
});

<div id="reservation_modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reserva</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <p><span class="font-weight-bold">Partida: </span><span id="departure-flight-name"></span> (<span id="departure-flight-date"></span>)</p>
                    </div>
                    <div class="col-12">
                        <p><span class="font-weight-bold">Destino: </span><span id="arrival-flight-name"></span> (<span id="arrival-flight-date"></span>)</p>
                    </div>
                </div>
                <button type="button" id="first-class" class="btn btn-primary first-class">Primera</button>
                <button type="button" id="economy-class" class="btn btn-secondary economy-class">Económica</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

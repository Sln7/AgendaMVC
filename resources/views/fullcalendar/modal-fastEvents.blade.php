<div class="modal fade" id="modalFastEvent" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModal">Titulo do modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="message"></div>

                <form id="formFastEvent">
                    <div class="form-group row">
                        <label for="title" class="col-sm-4 col-form-label">Titulo</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="title" name="title">
                            <input type="hidden" name="id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="start" class="col-sm-4 col-form-label">Hora Inicial</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control time" id="start" name="start">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="end" class="col-sm-4 col-form-label">Hora Final</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control time" id="end" name="end">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="color" class="col-sm-4 col-form-label">Cor do Evento</label>
                        <div class="col-sm-8">
                            <input type="color" class="form-control" id="color" name="color">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger deleteFastEvent">Excluir</button>
                <button type="button" class="btn btn-primary saveFastEvent">Salvar</button>
            </div>
        </div>
    </div>
</div>

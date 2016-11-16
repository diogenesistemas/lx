$(document).ready(function () {

    var url = $("input[name='route']").val();
    var token = $("input[name='_token']").val();
    var addfile = false;
    var _templete = "<div class=\"dz-preview dz-file-preview\">" +
        "<div class=\"dz-details\">" +
        "<div class=\"dz-filename\"><span data-dz-name></span></div>" +
        "<div class=\"dz-size\" data-dz-size></div>" +
        "<img data-dz-thumbnail />" +
        "</div>" +
        "<div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div>" +
        "<div class=\"dz-success-mark\"><span>✔</span></div>" +
        "<div class=\"dz-error-mark\"><span>✘</span></div>" +
        "<div class=\"dz-error-message\"><span data-dz-errormessage></span></div>" +
        "</div>";

    Dropzone.options.demoUpload = {

        init: function () {
            
            _this = this;
            $('#send').click(function () {
                sendValidationMessage(_this, null, null, false);
            });

            this.on("success", function (file, json) {
                file.id = json.file_id;
                addfile = false;
                this.removeFile(file);

            });

            this.on("removedfile", function (file) {
                if (addfile == true) {
                    swal(
                        'Arquivo removido!',
                        'O arquivo ' + file.name + " foi removido com sucesso",
                        'success'
                    )
                }
            });

            this.on("error", function (file, message) {
                var _this = this

                swal({
                    title: 'Atenção',
                    text: message,
                    type: 'warning',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Sim, delete este!',
                    confirmButtonClass: 'btn btn-success',
                    buttonsStyling: false
                }).then(function () {
                    addfile = true;
                    _this.removeFile(file);
                }, function (dismiss) {

                })
            });

            this.on("drop", function (event, file) {
                addfile = true;
                send(this, token, file, url);
            });

            this.on("addedfile", function (file) {
                addfile = true;
                send(this, token, file, url);
            });

        },

        url: url,
        paramName: 'file',
        uploadMultiple: false,
        maxFilesize: 10,
        parallelUploads: 1,
        maxFiles: 1,
        autoProcessQueue: false,
        dictFileTooBig: 'Não carregado, o tamanho máximo do arquivo é {{maxFilesize}}MB, seu arquivo possui {{filesize}}MB.',
        dictCancelUpload: 'Cancelar',
        dictRemoveFile: 'Excluir',
        dictMaxFilesExceeded: 'Excedeu a quantidade máxima de arquivos permitida.',
        addRemoveLinks: true,
        previewTemplate: _templete
    };

    function send(_this, token, file, url) {
        $('#send').click(function () {

            var contact = $("input[name=contact]").val();
            console.log(contact);
            var message = $("textarea[name=message]").val();
            console.log(message);

            _this.options.url = url + "?_token=" + token + "&contact=" + contact + "&message=" + message;
            var valid = sendValidationMessage(_this, message, contact, true)
            if (valid) {
                _this.processQueue(file);
            }

        })
    }

    function sendValidationMessage(_this, message, contact, active) {
        console.log(_this.files.length);
        if (_this.files.length == 0) {
            swal(
                'Você ja inseriu um arquivo?',
                'Por favor clique em ok e para voltar e inserir',
                'question'
            )
            console.log('clicando sem arquivo');
            return false;
        } else {
            if (active) {
                if (!message == "" && !contact == "") {
                    return true;
                } else {
                    swal(
                        'Esqueceu de preencher algum campo?',
                        'Por favor clique em ok e para voltar e preencher',
                        'question'
                    )
                    console.log('nao preenchido');
                    return false;
                }
            }

        }
    }


});

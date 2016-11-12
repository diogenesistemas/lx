$(document).ready(function () {
    url = $("input[name='route']").val();
    token = $("input[name='_token']").val();
    method="DELETE";

    Dropzone.options.demoUpload = {
        init: function () {

            this.on("success", function (file, json) {
                file.id = json.file_id;
            });

            this.on("removedfile", function (file) {
                $.ajax({
                    method: 'POST',
                    url: url+'/delete/'+file.id+'?_token='+token+'&_method='+method,
                    success: function (result) {
                        // console.log(result);
                    }
                });

            });

            this.on("error", function (file) {
                file.id = null;

            });

        },


        url: url + "?_token=" + token,
        paramName: 'file',
        uploadMultiple: false,
        maxFilesize: 10, // MB
        parallelUploads: 1,
        // maxFiles: 1,
        dictFileTooBig: 'Não carregado, o tamanho máximo do arquivo é {{maxFilesize}}MB, seu arquivo possui {{filesize}}MB.',
        // dictDefaultMessage: '1',
        // dictFallbackMessage: '2',
        // dictFallbackText: '3',
        // dictInvalidFileType: '4',
        // dictFileTooBig: '5',
        // dictResponseError: '6',
        dictCancelUpload: 'Cancelar',
        // dictCancelUploadConfirmation: '8',
        dictRemoveFile: 'Excluir',
        dictMaxFilesExceeded: 'Excedeu a quantidade máxima de arquivos permitida.',
        addRemoveLinks: true,
        previewTemplate: "<div class=\"dz-preview dz-file-preview\">" +
        "<div class=\"dz-details\">" +
        "<div class=\"dz-filename\"><span data-dz-name></span></div>" +
        "<div class=\"dz-size\" data-dz-size></div>" +
        "<img data-dz-thumbnail />" +
        "</div>" +
        "<div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div>" +
        "<div class=\"dz-success-mark\"><span>✔</span></div>" +
        "<div class=\"dz-error-mark\"><span>✘</span></div>" +
        "<div class=\"dz-error-message\"><span data-dz-errormessage></span></div>" +
        "</div>,"
    };


});

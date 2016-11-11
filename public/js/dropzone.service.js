$(document).ready(function () {
    var url = $("input[name='route']").val()
    var token = $("input[name='_token']").val()
    Dropzone.options.demoUpload = {
        init: function() {
            this.on("addedfile", function(file) {
                var removeButton = Dropzone.createElement("<button>Remove file</button>");
                var _this = this;
                removeButton.addEventListener("click", function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    _this.removeFile(file);
                });
                file.previewElement.appendChild(removeButton);
            });
        },
        url: url+"?_token="+token,
        paramName: 'file',
        uploadMultiple: false,
        maxFilesize: 2, // MB
        parallelUploads: 1,
        maxFiles: 1,
        dictFileTooBig: 'Não carregado, o tamanho máximo do arquivo é {{maxFilesize}}MB, seu arquivo possui {{filesize}}MB.',
        // dictDefaultMessage: '1',
        // dictFallbackMessage: '2',
        // dictFallbackText: '3',
        // dictInvalidFileType: '4',
        // dictFileTooBig: '5',
        // dictResponseError: '6',
        // dictCancelUpload: '7',
        // dictCancelUploadConfirmation: '8',
        // dictRemoveFile: '9',
        dictMaxFilesExceeded: 'Excedeu a quantidade máxima de arquivos permitida.',
    };




});

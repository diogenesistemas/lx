<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teste Envio Email</title>
	<link rel="stylesheet" type="text/css" href="css/loader.css">
	<link rel="stylesheet" type="text/css" href="css/dropzone.css">
	<link rel="stylesheet" type="text/css" href="css/style-dropzone.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/dropzone-basic.css"> -->
</head>
<body>

<!-- Área de envio de arquivo -->
 <section class="section-padding">
   <div class="container">
      <div class="row">
        <div class="col-md-12 text-center wow fadeIn">
          <h2 id="try-it-out" class="heading">Envie seu arquivo para Impressão</h1>
          <div id="dropzone">
              <form action="/acao" class="dropzone needsclick" id="demo-upload"  method="post" enctype="multipart/form-data">              
                <div class="dz-message needsclick">
                   Arraste e solte arquivos nesta área ou clique para carregar.<br />
                    <span class="note needsclick">(Tamanho máximo <strong>3MB</strong>.)</span>
                </div> 
              </form>
          </div>
        </div>
      </div>
  </div>
</section>

	
<script src="js/dropzone.js"></script>
</body>
</html>
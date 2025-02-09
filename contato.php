<?php 

$strTitulo = "Contato";
$strTagTitle = $strTitulo." - ".$strNomeSite;
$strTagDescription = $strTitulo." - ".$strNomeSite;
$strTagKeywords = $strTitulo." - ".$strNomeSite;

$arrRecursos[] = 'mask';
include('_header.php');
?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-12 d-flex justify-content-center flex-column" data-aos="fade-up" data-aos-duration="1000">
				<div class="card d-flex blur justify-content-center p-4 shadow-lg mt-4">
					<div class="text-center mb-4">
						
						<h3 class="text-gradient text-primary">Entre em Contato com a XWeb.</h3>
						<p class="mb-0">
							Tem dúvidas ou quer mais informações? estamos disponíveis para ajudar.
						</p>
						<p class="mb-0">
							<i class="bi bi-envelope"></i> <a class="link-primary text-bold" href="mailto:contato@xweb.com.br">contato@xweb.com.br</a><br><i class="bi bi-telephone"></i> <a class="link-primary text-bold" href="tel:5511999999999" target="_blank">(11) 99999-9999</a><br><i class="bi bi-whatsapp"></i> <a class="link-primary text-bold" href="https://wa.me/5511999999999" target="_blank">(11) 99999-9999</a><br>
						</p>
						<p class="mt-4 mb-0 text-bold">
							Preencha o formulário abaixo, e responderemos o mais rápido possível.
						</p>
					</div>
					<?php if(!empty($strAlertaSisitema)){ echo $strAlertaSisitema; } ?>
					<form action="<?php echo URL_ATUAL; ?>" method="POST" autocomplete="off">
						<div class="card-body pb-2">
							<div class="row">
								<div class="col-md-6">
									<label>Nome</label>
									<div class="input-group mb-4">
										<input type="text" name="strNome" class="form-control" placeholder="Digite seu nome">
									</div>
								</div>
								<div class="col-md-6 ps-md-2">
									<label>E-mail</label>
									<div class="input-group">
										<input type="email" name="strEmail" class="form-control" placeholder="Digite seu e-mail">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 ps-md-2">
									<label>Telefone</label>
									<div class="input-group">
										<input type="text" name="strTelefone" class="form-control mask_telcel" placeholder="Digite seu telefone">
									</div>
								</div>
								<div class="col-md-6">
									<label>Assunto</label>
									<div class="input-group mb-4">
										<input type="text" name="strAssunto" class="form-control" placeholder="Digite o assunto">
									</div>
								</div>
							</div>
							<div class="form-group mb-0 mt-md-0 mt-4">
								<label>Mensagem</label>
								<textarea name="strMensagem" class="form-control" id="message" rows="6" placeholder="Descreva sua mensagem"></textarea>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<button type="submit" name="submitForm" value="contato-site" class="btn btn-md btn-primary bg-gradient-primary mt-3 px-5">Enviar</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include '_footer.php'; ?>
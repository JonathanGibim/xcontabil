<?php 

$strTitulo = "Gestão Contábil que Transforma Negócios!";
$strSubTitulo = "Simplifique sua gestão financeira e conquiste resultados com a XWeb Contabilidade. Soluções personalizadas para o sucesso da sua empresa";
$strTagTitle = $strTitulo." - ".$strNomeSite;
$strTagDescription = $strTitulo." - ".$strNomeSite;
$strTagKeywords = $strTitulo." - ".$strNomeSite;

$strIndex = true;
$arrRecursos[] = 'tilt'; 
include('_header.php');
?>

<main>

    <?php include('_servicos.php'); ?>

    <section class="pt-sm-8 pb-5 position-relative bg-gradient-primary">
        <div class="position-absolute w-100 z-inde-1 top-0 mt-n3">
            <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>wave-down</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g fill="#FFFFFF" fill-rule="nonzero">
                        <g id="wave-down">
                            <path d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z" id="Path-Copy-2" transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) "></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="container py-10">
            <div class="row pt-5">
                <div class="col-md-5 col-12 my-auto" data-aos="fade-right" data-aos-duration="1000">
                    <img class="w-100 border-radius-md" src="<?php echo URL; ?>assets/img/cont-9.png" alt="image">
                </div>
                <div class="col-md-7 col-12 my-auto ps-5" data-aos="fade-left" data-aos-duration="1000">
                    <h3 class="text-white">Por Que Escolher a XWeb?</h3>
                    <p class="text-white">
                        <br><i class="bi bi-arrow-right-circle"></i> Experiência comprovada em diversas áreas de contabilidade.
                        <br><br><i class="bi bi-arrow-right-circle"></i> Atendimento humanizado e soluções personalizadas.
                        <br><br><i class="bi bi-arrow-right-circle"></i> Tecnologia avançada para maior eficiência.
                        <br><br><i class="bi bi-arrow-right-circle"></i> Ética e transparência em cada processo.
                        <br><br>
                    </p>
                    <div class="github-buttons mt-2">
                        <a href="<?php echo URL; ?>servicos" rel="nofollow" class="btn btn-lg btn-primary bg-gradient-primary border-white"><i class="bi bi-list"></i> Conheça nossos serviços</a>
                        <div class="github-button">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute w-100 bottom-0 mn-n1">
            <svg width="100%" viewBox="0 -1 1920 166" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>wave-up</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(0.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g id="wave-up" transform="translate(0.000000, -5.000000)">
                            <path d="M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z" fill="#ffffff"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </section>

    <section class="pt-sm-8 position-relative">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-7 col-12 my-auto ps-5" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="text-gradient text-primary fs-1">Fale com um dos nossos especialistas.</h3>
                    <p class="text-dark">
                        Está enfrentando desafios com a gestão contábil, fiscal ou tributária da sua empresa? Nossa equipe de especialistas está pronta para ajudar!
                        <br>
                        Com atendimento personalizado e soluções sob medida, oferecemos o suporte que você precisa para simplificar processos, reduzir custos e garantir o sucesso do seu negócio.
                        <br>
                        Por que falar com um especialista da XWeb?
                        <br><br><i class="bi bi-arrow-right-circle"></i> Respostas rápidas e claras para suas dúvidas.
                        <br><br><i class="bi bi-arrow-right-circle"></i> Orientações estratégicas para melhorar sua gestão.
                        <br><br><i class="bi bi-arrow-right-circle"></i> Soluções práticas, alinhadas às necessidades da sua empresa.
                        <br><br>
                    </p>
                    <div class="github-buttons mt-2">
                        <a href="<?php echo URL; ?>contato" rel="nofollow" class="btn btn-primary bg-gradient-primary btn-lg"><i class="bi bi-telephone"></i> Entre em contato</a>
                    </div>
                </div>
                <div class="col-md-5 col-12 my-auto" data-aos="fade-up" data-aos-duration="1000">
                    <img class="w-100 border-radius-md" src="<?php echo URL; ?>assets/img/cont-8.png" alt="image">
                </div>
            </div>
        </div>
    </section>

</main>

<?php include('_footer.php'); ?>
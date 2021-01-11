<?php

//requisitando conexao com o banco de dados
require_once('conn/conn.php');

class Trabalhos{

	public function buscarTodosMini(){
		$smtp = Conexao::getConection()->prepare("SELECT `port_nome`, `port_desc`, `port_image`, `port_link` FROM `portfolio`");		
		if($smtp->execute()){
			if($smtp->rowCount() > 0){
				while($row = $smtp->fetch(PDO::FETCH_ASSOC)) {

					$numPort = 1;
					echo "<div class='col-md-6 col-lg-4'>
					          <div class='portfolio-item mx-auto' data-toggle='modal' data-target='#portfolioModal".$numPort."'>
					            <div class='portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100'>
					              <div class='portfolio-item-caption-content text-center text-white'>
					                <i class='fas fa-plus fa-3x'></i>
					              </div>
					            </div>
					            <img class='img-fluid' src='img/portfolio/".$row['port_image']."' alt='".$row['port_nome']."'>
					          </div>
					        </div> 			 
					    </div>";
					    $numPort++;
				}
			}
		}
	}

	public function buscaTodosModal($modal_id){
		$smtp = Conexao::getConection()->prepare("SELECT `port_nome`, `port_desc`, `port_image`, `port_link` FROM `portfolio` WHERE controle_id = '$modal_id'");
		if($smtp->execute()){
			if($smtp->rowCount() > 0){
				$row = $smtp->fetch(PDO::FETCH_ASSOC
					echo "<div class='portfolio-modal modal fade' id='portfolioModal".$numPort."' tabindex='-1' role='dialog' aria-labelledby='portfolioModal".$numPort."Label' aria-hidden='true'>
						    <div class='modal-dialog modal-xl' role='document'>
						      <div class='modal-content'>
						        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
						          <span aria-hidden='true'>
						            <i class='fas fa-times'></i>
						          </span>
						        </button>
						        <div class='modal-body text-center'>
						          <div class='container'>
						            <div class='row justify-content-center'>
						              <div class='col-lg-8'>
						                <!-- Portfolio Modal - Title -->
						                <h2 class='portfolio-modal-title text-secondary text-uppercase mb-0'>".$row['port_nome']."</h2>
						                <!-- Icon Divider -->
						                <div class='divider-custom'>
						                  <div class='divider-custom-line'></div>
						                  <div class='divider-custom-icon'>
						                    <i class='fas fa-star'></i>
						                  </div>
						                  <div class='divider-custom-line'></div>
						                </div>
						                <!-- Portfolio Modal - Image -->
						                <img class='img-fluid rounded mb-5' src='img/portfolio/".$row['port_image']."' alt=''>
						                <!-- Portfolio Modal - Text -->
						                <p class='mb-5'>".$row['port_desc']."<br> <a target='_blank' href='".$row['port_link']."'>Link</a></p>
						                <button class='btn btn-primary' href='#' data-dismiss='modal'>
						                  <i class='fas fa-times fa-fw'></i>
						                  Fechar Janela
						                </button>
						              </div>
						            </div>
						          </div>
						        </div>
						      </div>
						    </div>
						  </div>";
			}
		}
	}

}
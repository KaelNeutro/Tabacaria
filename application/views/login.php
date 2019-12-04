<div class="container-fluid signup-section">
	<div class="row">
		<div class="col-md-4">
		<!-- box login -->
			<div class="">
				<p style=""> <i class=""></i> Login</p>
				<div class="field">
					<form method="POST" id="form_login">
						<p><label >Email</label><br />
						<input type="text" name="email_login" />
						</p>
						<p><label >Senha</label><br />
						<input type="password"  name="senha_login" /><br /><br />
						<button type="button" id="bt_login" ><i class="fa fa-check-square-o"></i> Entrar</button>
						<p >Esqueceu a senha?</p>
						<p ><input type="checkbox" name=""> Mantenha conectado</p>
						</p>
						<div id="box_msg_login_failure" ></div>
					</form>
				</div>
			</div>
			<!-- fim box login -->
		</div>
		<div class="col-md-8">
			<div class="box-cadastro" >
				<?php
					if(isset($_SESSION['carrinho'])): ?>
				<div class="alert alert-warning alert-dismissable">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong><i class="fa fa-warning"></i> Verificamos que você não está logado.</strong> Para finalizar a compra, faça login ou cadastre-se. <a href="<?php echo site_url();?>carrinho"><i class="fa fa-shopping-cart"></i> Ver meu carrinho</a>
				</div>
				<?php endif;?>
				<p >Cadastre-se! É super rápido.</p>
				<div class="row">
					<form method="POST" id="form_cadastro">
						<div class="col-md-6">
							<p><label>Nome:</label><br />
							<input type="text" name="nome_cliente" class="field-cadastro" ></p>
							<p><label>Sobrenome:</label><br />
							<input type="text" name="sobrenome_cliente" class="field-cadastro" ></p>
							<p><label>Email:</label><br />
							<input type="email" name="email_cliente" class="field-cadastro" ></p>
							<p><label>Senha:</label><br />
							<input type="text" name="senha_cliente" class="field-cadastro" ></p>
							<p><label>Telefone:</label><br />
							<input type="text" name="phone_cliente" id="phone_cliente" class="field-cadastro" ></p>
							<p ><label>Sexo:</label><br />
							<select id="field_sexo" name="sexo_cliente">
								<option>Masculino</option>
								<option>Feminino</option>
							</select></p>
							<p ><label>Idade:</label><br />
							<input type="text" onkeyup="somenteNumeros(this);" pattern="[0-9]+$" name="idade_cliente" id="field_idade" class="field-cadastro" style="" /></p>
							<span  id="box_msg_cadastro"></span>
						</div>
						<div class="col-md-6">
							<p><label>Cep: (Endereço para entrega)</label><br />
							<input type="text" name="cep_cliente" id="cep_cliente" onblur="cadastroCliente();" class="field-cadastro" ></p>
							<p ><label>Endereço:</label><br />
							<input type="text" name="logradouro_cliente" id="logradouro_cliente" class="field-cadastro" ></p>
							<p ><label>Numero:</label><br />
							<input type="text" name="numero_cliente" id="numero_cliente" class="field-cadastro" ></p>
							<p><label>Complemento:</label><br />
							<input type="text" unabled="unabled" name="complemento_cliente" id="complemento_cliente" class="field-cadastro"></p>
							<p><label>Bairro:</label><br />
							<input type="text" name="bairro_cliente" id="bairro_cliente" class="field-cadastro" ></p>
							<p><label>Cidade:</label><br />
							<input type="text" name="cidade_cliente" id="cidade_cliente" class="field-cadastro" ></p>
							<p ><label>Estado:</label><br />
							<input type="text" name="estado_cliente" id="estado_cliente" class="field-cadastro" ></p>
							<button type="button" id="bt_cadastra_cliente"><i class="fa fa-check-square-o"></i> Cadastrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
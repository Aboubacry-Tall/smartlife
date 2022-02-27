<?php  
	
	class Core{

		public static function sendErreurs($erreurs){
			$_SESSION['erreurs'] = $erreurs;
		}

		public static function viewErreurs(){
			if (isset($_SESSION['erreurs']) && count($_SESSION['erreurs']) != 0) {
				?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?php  
							foreach ($_SESSION['erreurs'] as $erreur) {
								echo $erreur.'</br>';
							}
						?>
					  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					</div>
					<?php unset($_SESSION['erreurs']); ?>
				<?php
			}
		}

		public static function sendMsg($msg, $type="primary"){
			$_SESSION['notification']['msg'] = $msg;
			$_SESSION['notification']['type'] = $type;
		}

		public static function viewMsg(){
			if (isset($_SESSION['notification']['msg'])) {?>
				<div class="alert alert-<?=$_SESSION['notification']['type'];?> alert-dismissible fade show" 
					role="alert">
			  		<?php echo $_SESSION['notification']['msg']; ?>
				  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    		<span aria-hidden="true">&times;</span>
			  		</button>
				</div>
			    <?php unset($_SESSION['notification']); ?>
			<?php };
		}

		public static function redirige($page){
			header('Location: '.$page);
			exit();
		} 

		public static function filter(){
			if (!isset($_SESSION['admin']) || $_SESSION['admin'] != 'smartcode') {
				self::redirige('login');
			}
		}
	}
?>
<?php

class DataAccess{
    private $connection;	
    
    function connect(){
        $bd= "sportin5_tpsib17-p4";
        //$user = "sportin5_tpsib-4";
		$user = "root";
        $pwd = "";
        $server = "localhost";
		
        $this->connection = mysqli_connect($server, $user, $pwd, $bd);
        
        //verificar se a conexão está bem aberta        
        if( mysqli_select_db($this->connection, $bd) == false){
            //erro
            die("Não conseguiu ligar-se à base de dados".mysqli_error($this->connection));            
			
        }else{
			
            mysqli_query($this->connection, "set names 'utf8'");
            mysqli_query($this->connection, "set character_set_connection=utf8");
            mysqli_query($this->connection, "set character_set_client=utf8");
            mysqli_query($this->connection, "set character_set_results=utf8");
        }        
    }
    
    function execute($query){
        $res = mysqli_query($this->connection, $query);
        if(!$res){
            die("Comando inválido".mysqli_error($this->connection));
        }else
            return $res;
    }
    
    function disconnect(){
		mysqli_close($this->connection);
    }
	
	   
    function login($email, $password){
        $query = "select *
					from utilizadores 
					where email = '$email' and 
					password = '$password'";
        $this->connect();
        $res = $this->execute($query);
        $this->disconnect();
        return $res;
    }
	
	function inserirUtilizador($nome, $email,
							$password){
		$query = "insert into utilizadores 
					(nome, email, password)
					values 
					('$nome','$email','$password')";
		$this->connect();
        $this->execute($query);
        $this->disconnect();
	}
	
	function getGuessWho(){
		$this->connect();
		$sql = "select * from guesswho";
		$result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            $res= mysqli_fetch_array($result);
        }
		$this->disconnect();
		return $res;
	}
	function getGuessWhoAnswer(){
		$query = "select guessWhoAnswer from guesswho";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
	
	function getCompleteSentece($id){
		$query = "select * from completesentece where id = '$id'";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
}
?>
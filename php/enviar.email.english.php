<?php
  //Variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['Telefone'];
  $interesse = $_POST['interesse'];
  $infoadd = $_POST['infoadd'];
  $curriculo = $_POST['curriculo'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Telefone:</b>$telefone</p>
      <p><b> Area de interesse:</b>$interesse</p>
      <p><b> Informações adicionais:<b>$interesse</p>
      <p><b> Currículo:<b>$curriculo</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "costamaritimacf@gmail.com";
  $assunto = "Costa Marítima";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../english.work.html'>";
?>
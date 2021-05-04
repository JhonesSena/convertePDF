$nome_da_imagem = trim(sha1(date("dmYHis")));

$diretorio = '..'.$pasta.'/';

$pasta_tmp = "../temp/";  //pasta temporaria
$file_name = $_FILES['arquivo']['name'];
$file_size = $_FILES['arquivo']['size'];
$file_tmp = $_FILES['arquivo']['tmp_name'];
$mimetype = $_FILES['arquivo']['type'];
$array=((explode('.',$_FILES['arquivo']['name'])));
$file_ext=strtolower(end($array));
$extensao = $file_ext;


    if( $mimetype == ( "application/pdf" ) or
    $mimetype == ( "image/png" ) or
    $mimetype == ( "image/jpeg" )
    //$mimetype == ( "image/gif" )
    ) { }
    else { echo '<script>alert("Arquivo inválido. Selecione um arquivo correto.****")</script>';
    echo '<script>history.back()</script>';
    exit;
    }

$extensions= array("jpeg","jpg","png","pdf");
    if(in_array($file_ext,$extensions)=== false){
    echo '<script>alert("Tipo do arquivo inválido. Selecione um arquivo correto. (JPG, PNG, PDF)")</script>';
    echo '<script>history.back()</script>';
    exit;
    }

if($file_size > (2097152*2)) {
    echo '<script>alert("Arquivo com tamanho muito grande. ")</script>';
    echo '<script>history.back()</script>';
    exit;
    }

$arquivo_final = $acres.".".$file_ext;

else{
	$url = $arquivo;
	$save_T = $pasta_tmp.'/TEMP'.$acres.'.pdf';
		exec("convert -trim -geometry 1600x1600 -density 200x200 -define jpeg:extent=400kb  -quality 80 -flatten ".$arquivo_completado." ".$save_T."");	
	try { exec("ps2pdf ".$save_T." ".$save."");	
	}
	catch(Exception $e) {
		echo $e->getMessage();
	exit; 
	}
	}


<?php

/**********************************************************************
 * ********************************************************************
 * GERENTE DE UPLOADS MAYKONSILVEIRA.COM.BR E MAYKON SILVEIRA
 * 
 * ********************************************************************
 * MAYKONSILVEIRA.COM.BR DEREICIONANDO VOCÊ PARA O CAMINHO DO SUCESSO #*
 * *************MAYKON***SILVEIRA**************************************
 * *************sheep**PHP***********************************
 * ********************************************************************
 * TUDO AQUI FOI CRIADO NO DIA 01-10-2021 POR MAYKON SILVEIRA
 * TODOS OS DIREITOS RESERVADOS E CÓDIGO FONTE RASTREADO COM ARQUIVOS 
 * CRIADO POR MAYKONSILVEIRA.COM.BR DESDE 2007 *********
 * TODA SABEDORIA PARA CRIAR ESTES SISTEMAS VEM DO SANTO E ETERNOR PAI
 * O SANTO SENHOR DEUS DE ABRAÃO, ISSAC E JACÓ E DO MEU ÚNICO SENHOR 
 * O MESSIAS NOSSO SALVADOR, POIS A GLROIA É DO PAI E DO FILHO PARA SEMPRE
 * ********************************************************************
 */
class Uploads
{

    private $File;
    private $Name;
    private $Send;
    private $Width;
    private $Image;
    private $Result;
    private $Error;
    private $Folder;
    private static $BaseDir;

    function __construct($BaseDir = null)
    {

        //para alterar o nome padrão da pasta de uploads de imagens basta alterar '../uploads/'
        self::$BaseDir = ((string) $BaseDir ? $BaseDir : '../sheep-imagens/');
        if (!file_exists(self::$BaseDir) && !is_dir(self::$BaseDir)) :
            mkdir(self::$BaseDir, 0755);

        endif;
    }


    public function Image(array $Image, $Name = null, $Width = null, $Folder = null)
    {
        $this->File = $Image;
        $this->Name = ((string) $Name ? $Name : substr($Image['name'], 0, strrpos($Image['name'], '.')));
        $this->Width = ((int) $Width ? $Width : 2000);
        $this->Folder = ((string) $Folder ? $Folder : 'images');
    
        // Verifica o tamanho do arquivo
        $maxSize = 5 * 1024 * 1024 * 1024; // 5 GB
        if ($this->File['size'] > $maxSize) {
            $this->Result = false;
            $this->Error = "O tamanho máximo do arquivo é de 5GB!";
            return;
        }
    
        // Verifica tipos de arquivos proibidos
        $forbiddenExtensions = [
            '.php', '.phtml', '.xhtml', '.html', '.sql',
            '.js', '.shell', '.jdk', '.json', '.htaccess', '.xml'
        ];
    
        foreach ($forbiddenExtensions as $extension) {
            if (strpos($this->File['name'], $extension) !== false) {
                $this->Result = false;
                $this->Error = "Não aceitamos arquivos " . trim($extension, ".");
                return;
            }
        }
    
        $this->CheckFolder($this->Folder);
        $this->setFileName();
        $this->UploadImage();
    }

    /**
     * <b>Enviar Arquivo:</b> Basta envelopar um $_FILES de um arquivo e caso queira um nome e um tamanho personalizado.
     * Caso não informe o tamanho será 2mb!
     * @param FILES $File = Enviar envelope de $_FILES (PDF)
     * @param STRING $Name = Nome do arquivo ( ou do artigo )
     * @param STRING $Folder = Pasta personalizada
     * @param STRING $MaxFileSize = Tamanho máximo do arquivo (2mb)
     */

     public function File(array $File, $Name = null, $Folder = null, $MaxFileSize = null)
     {
         $this->File = $File;
         $this->Name = $Name ? (string)$Name : substr($File['name'], 0, strrpos($File['name'], '.'));
         $this->Folder = $Folder ? (string)$Folder : 'maykon_arquivos';
     
         // 5GB em bytes
         $defaultMaxSize = 5 * 1024 * 1024 * 1024;
         $MaxFileSize = $MaxFileSize ? $MaxFileSize : $defaultMaxSize;
     
         // Tipos de arquivo aceitáveis
         $FileAccept = [
             'application/pdf',
             'application/x-msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
             'application/vnd.ms-excel', 'application/excel', 'application/x-excel',
             'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 
             'application/msword', 'application/octet-stream',
             'application/zip', 'application/x-zip-compressed', 'application/x-gzip', 'multipart/x-gzip',
             'application/x-rar-compressed',
             'application/x-7z-compressed',
             'text/plain'
         ];
     
         // Extensões de arquivo proibidas
         $forbiddenExtensions = ['.php', '.phtml', '.xhtml', '.html', '.sql', '.js', '.shell', '.jdk', '.json', '.htaccess', '.xml'];
     
         foreach ($forbiddenExtensions as $extension) {
             if (strpos($this->File['name'], $extension) !== false) {
                 $this->Result = false;
                 $this->Error = "Não aceitamos arquivos com extensão " . trim($extension, ".");
                 return;
             }
         }
     
         if ($this->File['size'] > $MaxFileSize) {
             $this->Result = false;
             $this->Error = "Arquivo muito grande, tamanho máximo permitido de " . ($MaxFileSize / (1024 * 1024)) . "MB";
             return;
         }
     
         if (!in_array($this->File['type'], $FileAccept)) {
             $this->Result = false;
             $this->Error = "Só poderá enviar arquivos nos formatos PDF, ZIP, DOC, XLS, TXT. Se continuar enviando arquivos inválidos, sua conta será suspensa.";
             return;
         }
     
         $this->CheckFolder($this->Folder);
         $this->setFileName();
         $this->MoveFile();
     }


    /**
     * <b>Enviar Mídia:</b> Basta envelopar um $_FILES de uma mídia e caso queira um nome e um tamanho personalizado.
     * Caso não informe o tamanho será 40mb!
     * @param FILES $Media = Enviar envelope de $_FILES (ZIP, MP3 ou MP4)
     * @param STRING $Name = Nome do arquivo ( ou do artigo )
     * @param STRING $Folder = Pasta personalizada
     * @param STRING $MaxFileSize = Tamanho máximo do arquivo (40mb)
     */
    public function Media(array $Media, $Name = null, $Folder = null, $MaxFileSize = null)
{
    $this->File = $Media;
    $this->Name = $Name ? (string)$Name : substr($Media['name'], 0, strrpos($Media['name'], '.'));
    
    // Diretório padrão para a criação da pasta
    $this->Folder = $Folder ? (string)$Folder : 'media';

    // 10GB em bytes
    $defaultMaxSize = 10 * 1024 * 1024 * 1024;
    $MaxFileSize = $MaxFileSize ? (int)$MaxFileSize : $defaultMaxSize;

    // Tipos de arquivo aceitáveis
    $FileAccept = [
        'audio/mp3', 'audio/mpeg', 'audio/ogg', 'audio/*', 'application/octet-stream',
        'video/mp4', 'video/webm', 'video/ogg'
    ];

    // Extensões de arquivo proibidas
    $forbiddenExtensions = ['.php', '.phtml', '.xhtml', '.html', '.sql', '.js', '.shell', '.jdk', '.json', '.htaccess', '.xml'];

    foreach ($forbiddenExtensions as $extension) {
        if (strpos($this->File['name'], $extension) !== false) {
            $this->Result = false;
            $this->Error = "Não aceitamos arquivos com extensão " . trim($extension, ".");
            return;
        }
    }

    if ($this->File['size'] > $MaxFileSize) {
        $this->Result = false;
        $this->Error = "Arquivo muito grande, tamanho máximo permitido de " . ($MaxFileSize / (1024 * 1024)) . "MB";
        return;
    }

    if (!in_array($this->File['type'], $FileAccept)) {
        $this->Result = false;
        $this->Error = "Só poderá enviar arquivos nos formatos MP3 ou MP4. Se continuar enviando arquivos inválidos, sua conta será suspensa.";
        return;
    }

    $this->CheckFolder($this->Folder);
    $this->setFileName();
    $this->MoveFile();
}


public function Gif(array $Gif, $Name = null, $Folder = null)
{
    $this->File = $Gif;
    $this->Name = ((string) $Name ? $Name : pathinfo($Gif['name'], PATHINFO_FILENAME));
    $this->Folder = ((string) $Folder ? $Folder : 'gifs');

    if ($Gif['type'] !== "image/gif") {
        $this->Result = false;
        $this->Error = "Formato inválido. Apenas GIFs são permitidos.";
        return;
    }

    $this->CheckFolder($this->Folder);
    $this->setFileName();
    $this->MoveFile();
}



    public function getResult()
    {
        return $this->Result;
    }


    public function getError()
    {
        return $this->Error;
    }

    /**
     * ***********MAYKONSILVEIRA.COM.BR*************
     * ********** PRIVATE METHODS *************
     * ************MAYKON***SILVEIRA************
     */

    //Verifica e cria os diretórios com base em tipo de arquivo, ano e mês!
    private function CheckFolder($Folder)
    {
        list($y, $m) = explode('/', date('Y/m'));
        $this->CreateFolder("{$Folder}");
        $this->CreateFolder("{$Folder}/{$y}");
        $this->CreateFolder("{$Folder}/{$y}/{$m}/");
        $this->Send = "{$Folder}/{$y}/{$m}/";
    }

    //Verifica e cria o diretório base!
    private function CreateFolder($Folder)
    {
        if (!file_exists(self::$BaseDir . $Folder) && !is_dir(self::$BaseDir . $Folder)) :
            mkdir(self::$BaseDir . $Folder, 0755);

        endif;
    }

    //Verifica e monta o nome dos arquivos tratando a string!
    private function setFileName()
    {
        $FileName = Formata::Name($this->Name) . strrchr($this->File['name'], '.');
        if (file_exists(self::$BaseDir . $this->Send . $FileName)) :
            $FileName = Formata::Name($this->Name) . '-' . time() . strrchr($this->File['name'], '.');
        endif;
        $this->Name = $FileName;
    }


    //Realiza o upload de imagens redimensionando a mesma!
    public function UploadImage()
    {
        // Limite de tamanho de 5GB em bytes
        $maxSize = 5 * 1024 * 1024 * 1024;
        
        if ($this->File['size'] > $maxSize) {
            $this->Result = false;
            $this->Error = 'Arquivo muito grande, tamanho máximo permitido é 5GB!';
            return;
        }
    
        switch ($this->File['type']) {
            case 'image/jpg':
            case 'image/jpeg':
            case 'image/pjpeg':
                $this->Image = imagecreatefromjpeg($this->File['tmp_name']);
                $outputFunction = 'imagejpeg';
                break;
    
            case 'image/png':
            case 'image/x-png':
                $this->Image = imagecreatefrompng($this->File['tmp_name']);
                $outputFunction = 'imagepng';
                break;
    
            case 'image/gif':
                $this->Image = imagecreatefromgif($this->File['tmp_name']);
                $outputFunction = 'imagegif';
                break;
    
            default:
                $this->Image = false;
                break;
        }
    
        if (!$this->Image) {
            $this->Result = false;
            $this->Error = 'Tipo de arquivo inválido, envie imagens JPG, GIF ou PNG!';
            return;
        }
    
        $x = imagesx($this->Image);
        $y = imagesy($this->Image);
        $ImageX = ($this->Width < $x ? $this->Width : $x);
        $ImageH = ($ImageX * $y) / $x;
    
        $NewImage = imagecreatetruecolor($ImageX, $ImageH);
        imagealphablending($NewImage, false);
        imagesavealpha($NewImage, true);
        imagecopyresampled($NewImage, $this->Image, 0, 0, 0, 0, $ImageX, $ImageH, $x, $y);
    
        if (!$NewImage) {
            $this->Result = false;
            $this->Error = 'Erro ao processar a imagem!';
            return;
        }
    
        $outputFunction($NewImage, self::$BaseDir . $this->Send . $this->Name);
        $this->Result = $this->Send . $this->Name;
        $this->Error = null;
    
        imagedestroy($this->Image);
        imagedestroy($NewImage);
    }

    //envia arquivos e midias
    private function MoveFile()
   {
    $destination = self::$BaseDir . $this->Send . $this->Name;

    if (move_uploaded_file($this->File['tmp_name'], $destination)) {
        $this->Result = $this->Send . $this->Name;
        $this->Error = null;
    } else {
        $this->Result = false;
        $this->Error = 'Erro ao mover o arquivo para o servidor. Favor tente mais tarde!';
    }
   } 
}

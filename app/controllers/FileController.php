<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2014/11/14
 * Time: 15:28
 */

class FileController extends BaseController {
    public $target = '/uploads';// Relative to the root

    public function __construct()
    {
        parent::__construct();
        $path = $this->target.'/'.date('Ym',time());
        if(!is_dir(public_path().$path))
        {
            mkdir(public_path().$path,0777,true);
        }
        $this->target = $path;
    }

    public function upload()
    {
        $verifyToken = md5('unique_salt' . $_POST['timestamp']);
        if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
            $tempFile = $_FILES['Filedata']['tmp_name'];
            $targetPath = public_path() . $this->target;
            $fileName = date('YmdHis',time()).'_'. $_FILES['Filedata']['name'];
            $targetFile = rtrim($targetPath,'/') . '/' .$fileName ;

            $fileTypes = array('jpg','jpeg','gif','png'); // File extensions
            $fileParts = pathinfo($_FILES['Filedata']['name']);
            if (in_array($fileParts['extension'],$fileTypes)) {
                move_uploaded_file($tempFile,$targetFile);
                echo $this->target. '/' .$fileName;
            } else {
                echo 'InvalidFileType.';
            }
        }
        else
        {
            echo 'InvalidParam';
        }
        exit();
    }

    public function checkExist()
    {
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $this->target . '/' . $_POST['filename'])) {
            echo 1;
        } else {
            echo 0;
        }
    }



} 
<? 
/*
 *	==================================
 *	PROJECT:	SSL - Lab 01
 *	FILE:		models/views.php
 *	AUTHOR: 	Lindsay Roberts
 *	CREATED:	11/30/2014
 *	==================================
 */
class views{
    public function getView($filename="", $data=array()){
        include $filename;
    }
}
?>
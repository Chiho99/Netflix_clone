<?php
    // sanitization
    class FormSanitizer {

        public static function sanitizeFormString($inputText){
            $inputText = strip_tags($inputText);
            $inputText = str_replace(" ", "", $inputText); //" ": space, "": empty string 
            // $inputText = trim($inputText);
            $inputText = strtolower($inputText); //Change to lower case ex fot first letter
            $inputText = ucfirst($inputText); //Capitalize first letter
            return $inputText;
        }
        
        public static function sanitizeFormUserName($inputText){
            $inputText = strip_tags($inputText);
            $inputText = str_replace(" ", "", $inputText); //" ": space, "": empty string 
            return $inputText;
        }

        public static function sanitizeFormEmail($inputText){
            $inputText = strip_tags($inputText);
            $inputText = str_replace(" ", "", $inputText); //" ": space, "": empty string 
            return $inputText;
        }
        
        public static function sanitizeFormPassword($inputText){
            $inputText = strip_tags($inputText);
            return $inputText;
        }
    }


?>

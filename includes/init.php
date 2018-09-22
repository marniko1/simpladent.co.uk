<?php 
    // Set the Requested Language
    $defaulLang = "en";
    
    
    // Conrtact Mail setting for contact form (One is sent to Local Parter, one to HQ)
    $contactMail = "antonina.ihde@gmail.com,bettykabir@gmail.com";
    
    
   
    if(isset($_SESSION['lang'])){ 
        
        // Check If the Language should be changed
        
        if(isset($_GET['l'])) {
        
        $allowedLang = array('en','ru');
        if(in_array(filter_input(INPUT_GET, 'l'),$allowedLang)){
            $language = filter_input(INPUT_GET, 'l');  
            $_SESSION['lang'] = filter_input(INPUT_GET, 'l');
        } else {
            
            $language = $_SESSION['lang'];  
            
        }
        } else {
            
            $language = $_SESSION['lang'];  
            
        }
        
    } else if(isset($_GET['l'])) {
        
        // Check If the Language should be changed
        $allowedLang = array('en','ru');
        if(in_array(filter_input(INPUT_GET, 'l'),$allowedLang)){
            $language = filter_input(INPUT_GET, 'l');  
            $_SESSION['lang'] = filter_input(INPUT_GET, 'l');
        } else {
            $language = $defaulLang;
            $_SESSION['lang'] = $defaulLang;
            
        }
    } else {
        $language = $defaulLang ;
        $_SESSION['lang'] = $defaulLang;
    }
    
    
    // Load Language File
    if(!isset($appointment)){
        $elFile = "./languages/$language/elements.xml";
        if(is_file($elFile)){
            $elements = simplexml_load_file($elFile);
        } else {
            $elements = simplexml_load_file("languages/de/elements.xml") or die('Cant open Languagefile');
        }
    } else {
        
        $elFile = "../../languages/$language/elements.xml";
        if(is_file($elFile)){
            $elements = simplexml_load_file($elFile);
        } else {
            $elements = simplexml_load_file("languages/de/elements.xml") or die('Cant open Languagefile');
        }
        
        
    }
    // Load language image
    $img = 'en';

    if (isset($_SESSION['lang'])) {
        $img = $_SESSION['lang'];
    }
    // load testemonials
    $testFile = '../../testimonials/testimonials.xml';
    if (!is_file($testFile)) {
        $testFile = 'testimonials/testimonials.xml';
    }
    $testimonials = simplexml_load_file($testFile);
<?php

class Helpers {
    
    
    
    
    public function getLinksCategory(){
        //return DB::table('link_categories')->get();
        //return User::all();
        
        $links              = Link::with('linkcategories')->get();
        $link_categories    = LinkCategory::get();
        
        return array('links' => $links, 'link_categories' => $link_categories);
    }
    //=================================
    
    
    public function getDateOfBirth($age){
    
        $year = date('Y', time()) - $age;
        
        return date('Y-m-d H:m:s', mktime(0, 0, 0, 1, 1, $year));
    
    
	//$age = $this->common_helpers->getDateOfBirth(19);
	//print_r($age);
	//die;
    }
    //=================================
    
    public function getAge($date_of_birth){
        
        $month 	= date('m',strtotime($date_of_birth));
	$day 	= date('d',strtotime($date_of_birth));
	$year 	= date('Y',strtotime($date_of_birth));
        
        
        $age = (
                date("md", date("U", mktime(0, 0, 0, $month, $day, $year))) > date("md")
                ? ((date("Y") - $year) - 1)
                : (date("Y") - $year)
            );
        return  $age;
    
    
        //$age = $this->common_helpers->getAge($result->date_of_birth);
	//print_r($age);
	//die;
    }
    //=================================
    
    public function getProfileId(){
        return 'M'.time();
    }
    //=================================
    
    public function getUserName(){
        return 'U'.time();
    }
    //=================================
    
    public function getRandomPassword(){
        return 'p'.time();
    }
    //=================================
    
    
    public function getKeyValueArray($key, $array){
        
        if(!empty($array)){
            
            if(array_key_exists($key, $array)){
                return $array[$key];    
            }
        }
        return false;
    }
    //=================================
    
    
    public function genderArray(){
        return array(1=>'Male', 2=>'Female');
    }
    //=================================
    
    public function maritalStatusArray(){
        return array(1=>'Yes', 2=>'No');
    }
    //=================================
    
    public function heightArray(){
        
        $k = 0 ;
        for($i= 4; $i <= 6; $i++ ){
            
            for($j= 0; $j <= 11; $j++ ){
            
                $height[$k] = $i . ' feet '. $j . ' inch';
                $k++;    
            }
            
        }
        
        return $height;
    }
    //=================================
    
    public function weightArray(){
        
        $k = 0 ;
        $j = 0;
        for($i= 30; $i <= 99; $i++ ){
            
            while($j <= 9){
                $height[$k] = $i . ' kilo '. $j . ' gram';
                $k++;
                $j++;
            }
            
        }

        return $height;
    }
    //=================================
    
    public function bodyTypeArray(){
        return array(1=>'slim', 2=>'Average',  3=>'Athletic', 4=>'Heavy');
    }
    //=================================
    
    public function complexionArray(){
        return array( 1=>'Very Fair', 2=>'Fair', 3=>'Wheatish', 4=>'Wheatish brown', 5=>'Dark');
    }
    //=================================
    
    public function employeedInArray(){
        return array(1=>'Government', 2=>'Private', 3=>'Business',  4=>'Defence', 5=>'Self Employed', 6=>'Not Working');
    }
    //=================================
    
    public function foodArray(){
        return array(1=>'Vegetarian', 2=>'Non-Vegetarian', 3=>'Eggetarian');
    }
    //=================================
    
    public function smokeDrinkArray(){
        return array(1=>'No', 2=>'Occasionally', 3=>'Yes');
    }
    //=================================
    
    public function manglikArray(){
        return array(1=>'No', 2=>'Yes', 3=>'don\'t know');
    }
    //=================================
    
    public function rashiArray(){
        return array( '1'=> 'Mesha [Aries]', '2'=> 'Vrishabha [Taurus]', '3'=> 'Mithuna [Gemini]', '4'=> 'Karka [Cancer]',
                '5'=> 'Simha [Leo]', '6'=> 'Kanya [Virgo]', '7'=> 'Tula [Libra]', '8'=> 'Vrishchika [Scorpio]',
                '9'=> 'Dhanu [Sagittarius]', '10'=> 'Makara [Capricorn]', '11'=> 'Kumbha [Aquarius]', '12'=> 'Meena [Pisces]'
            );
    }
    //=================================
    
    public function familyStatusArray(){
        return array(1=>'Lower class', 2=>'Middle class', 3=>'Upper middle class', 4=>'Rich',  5=>'Affluent');
    }
    //=================================
    
    public function familyTypeArray(){
        return array(1=>'Joint', 2=>'Nuclear');
    }
    //=================================
    
    
    public function familyValuesArray(){
        return array(0=>'don\'t know', 1=>'Orthodox', 2=>'Traditional', 3=>'Moderate', 4=>'Liberal');
    }
    //=================================
    
    
    public function archiveArray(){
        return array(1=>'Archived', 2=>'Not Archived');
    }
    //=================================
    
    public function approvalArray(){
        return array(1=>'Approved', 2=>'Not Approvad');
    }
    //=================================
    
    
    public function isEnabledArray(){
        return array(1=>'Enabled', 2=>'Disabled');
    }
    //=================================
    

}


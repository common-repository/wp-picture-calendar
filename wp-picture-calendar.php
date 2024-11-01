<?php
/*
Plugin Name: WP Picture Calendar
Version: 1.0.1
Plugin URI: http://www.ism-soft.com/tool/wp-picture-calendar-plugin
Description: WP Picture Calendar shows a simple image calendar of World Days whith short description on Your sidebar.
Author: ISM
Author URI: http://www.ism-soft.com/
*/

function wp_get_picture_calendar($before_title="",$after_title="") {

	$wp_picture_calendar_start = '
<style>
 #wp-picture_calendar{  }
 #wp_picture_calendar_image_in{padding: 0px 0px 0px 0px; width: 100%; text-align: center; height:230px;}
 #img_wp_picture_calendar{ display: block; margin: 2px auto;
		width: 190px; height: 173px; 
		background: url(\''.get_option('home')  .'/wp-content/plugins/wp-picture-calendar/img/bg.png\');}
 #url_wp_picture_calendar{width: 130px; margin: 0px auto; display: block; text-align: left; height: 10px;}
 .wp_picture_calendar_img{ width: 150px; height:136px; margin: 20px 12px; border: 0px;}
 #desc_wp_picture_calendar{ margin: 0px auto; line-height: 12px; width: 170px; padding: 0px 10px;}

</style>
		<div id="wp_picture_calendar_image_in">
		<div id="img_wp_picture_calendar">
	
			';
	
	
	
	$wp_picture_calendar_end ="
		</div>
		<div id='url_wp_picture_calendar' style='font-size: 7px;  line-height: 10px; height: 10px;'>
			WP Picture Calendar by <a style='font-size: 7px;' href='http://www.ism-soft.com' title='WP Picture Calendar Plugin by ISM' >ISM</a> 
		</div>
		
		</div>
	";

$wp_picture_calendar = array(
	1 => array("name" => "World Water Day",
		"day"=> 22,
		"month" => 3,
		"img" => "/woda.png",
		"url" => "http://www.worldwaterday.org/",
	),
	2 => array("name" => "The International Day of Peace",
		"day"=> 21,
		"month" => 9,
		"img" => "/peace.png",
		"url" => "http://en.wikipedia.org/wiki/International_Day_of_Peace",
	),
	3 => array("name" => "International Labor Day",
		"day"=> 1,
		"month" => 5,
		"img" => "/1maj.png",
		"url" => "http://en.wikipedia.org/wiki/May_Day",
	
	),
	4 => array("name" => "International Women's Day",
		"day"=> 8,
		"month" => 3,
		"img" => "/fem.png",
		"url" => "http://en.wikipedia.org/wiki/International_Women%27s_Day",
	),
	5 => array("name" => "World AIDS Day",
		"day"=> 1,
		"month" => 12,
		"img" => "/aids.png",
		"url" => "http://en.wikipedia.org/wiki/World_AIDS_Day",
	
	),
	6 => array("name" => "International Men's Day",
		"day"=> 19,
		"month" => 11,
		"img" => "/male.png",
		"url" => "http://en.wikipedia.org/wiki/International_Men%27s_Day",
	),
	7 => array("name" => "World Carfree Day",
		"day"=> 22,
		"month" => 9,
		"img" => "/car.png",
		"url" => "http://en.wikipedia.org/wiki/Car-Free_Days",
	),
	8 => array("name" => "The World Day for Cultural Diversity for Dialogue and Development",
		"day"=> 21,
		"month" => 5,
		"img" => "/cult.png",
		"url" => "http://en.wikipedia.org/wiki/World_Day_for_Cultural_Diversity_for_Dialogue_and_Development",

	),
	9 => array("name" => "International Children's Day",
		"day"=> 1,
		"month" => 6,
		"img" => "/kids.png",
		"url" => "http://en.wikipedia.org/wiki/Children%27s_Day",
	),
	10 => array("name" => "World Cat-Day",
		"day"=> 8,
		"month" => 8,
		"img" => "/cat.png",
		"url" => "",
	),
	11 => array("name" => "World Day of Snowman",
		"day"=> 18,
		"month" => 1,
		"img" => "/snow.png",
		"url" => "http://en.wikipedia.org/wiki/Snowman",
	),
	12 => array("name" => "Pi Day",
		"day"=> 14,
		"month" => 3,
		"img" => "/pi.png",
		"url" => "http://en.wikipedia.org/wiki/Pi_Day",
	),
	13 => array("name" => "Pi Approximation Day",
		"day"=> 22,
		"month" => 7,
	"img" => "/pia.png",
	"url" => "http://en.wikipedia.org/wiki/Pi_Day",
	),
	14 => array("name" => "World Oceans Day",
		"day"=> 8,
		"month" => 6,
	"img" => "/ocean.png",
	"url" => "http://en.wikipedia.org/wiki/World_Oceans_Day",
	
	),
	15 => array("name" => "The European Day of Languages",
		"day"=> 26,
		"month" => 9,
		"img" => "/europa.png",
		"url" => "http://en.wikipedia.org/wiki/European_Day_of_Languages",
	),
	16 => array("name" => "International Day for the Elimination of Racial Discrimination",
		"day"=> 21,
		"month" => 3,
		"img" => "/racism.png",
		"url" => "http://en.wikipedia.org/wiki/International_Day_for_the_Elimination_of_Racial_Discrimination",
	),
	17 => array("name" => "World Press Freedom Day",
		"day"=> 3,
		"month" => 5,
		"img" => "/press.png",
		"url" => "http://en.wikipedia.org/wiki/World_Press_Freedom_Day",
	),
	18 => array("name" => "International Day of the African Child",
		"day"=> 16,
		"month" => 6,
		"img" => "/aft.png",
		"url" => "http://en.wikipedia.org/wiki/International_Day_of_the_African_Child",

	),
	19 => array("name" => "International Day for Biological Diversity",
		"day"=> 22,
		"month" => 5,
		"img" => "/diversity.png",
		"url" => "http://en.wikipedia.org/wiki/International_Day_for_Biological_Diversity",
	
	),
	20 => array("name" => "International Day in Support of Victims of Torture",
		"day"=> 26,
		"month" => 6,
		"img" => "/tort.png",
		"url" => "http://en.wikipedia.org/wiki/International_Day_in_Support_of_Torture_Victims",

	),
	21 => array("name" => "International Day of Persons with Disabilities",
		"day"=> 3,
		"month" => 12,
		"img" => "/wozek.png",
		"url" => "http://en.wikipedia.org/wiki/International_Day_of_Persons_with_Disabilities",
	),
	22 => array("name" => "Human Rights Day",
		"day"=> 10,
		"month" => 12,
		"img" => "/human.png",
		"url" => "http://en.wikipedia.org/wiki/Human_Rights_Day",

	),
	23 => array("name" => "International Migrant's Day",
		"day"=> 18,
		"month" =>12 ,
		"img" => "/migrant.png",
		"url" => "http://en.wikipedia.org/wiki/International_Migrants_Day",
	),
	24 => array("name" => "World Kiss Day",
		"day"=> 6,
		"month" => 7,
		"img" => "/kiss.png",
		"url" => "http://en.wikipedia.org/wiki/International_Kissing_Day",
	),
	25 => array("name" => "World Animal Day",
		"day"=> 4,
		"month" =>10 ,
		"img" => "/wad.png",
		"url" => "http://en.wikipedia.org/wiki/World_Animal_Day",
	),
	26 => array("name" => "International Dance Day",
		"day"=> 29,
		"month" => 4,
		"img" => "/dance.png",
		"url" => "http://en.wikipedia.org/wiki/International_Dance_Day",
	),
	27 => array("name" => "World Forestry Day",
		"day"=> 21,
		"month" =>3 ,
		"img" => "/forest.png",
		"url" => "",
		
	),
	28 => array("name" => "Global Family Day",
		"day"=> 1,
		"month" => 1,
		"img" => "/family.png",
		"url" => "http://en.wikipedia.org/wiki/Global_Family_Day",
		
	),
	29 => array("name" => "The International Holocaust Remembrance Day",
		"day"=> 27,
		"month" =>1 ,
		"img" => "/holo.png",
		"url" => "http://en.wikipedia.org/wiki/International_Holocaust_Remembrance_Day",
	),
	30 => array("name" => "World Day of the Sick",
		"day"=> 11,
		"month" =>2 ,
		"img" => "/sick.png",
		"url" => "http://en.wikipedia.org/wiki/World_Day_of_the_Sick",
	),
	31 => array("name" => "World Autism Awareness Day",
		"day"=> 2,
		"month" => 4,
		"img" => "/waa.png",
		"url" => "http://en.wikipedia.org/wiki/World_Autism_Awareness_Day",
	),
	32 => array("name" => "World Health Day",
		"day"=>7 ,
		"month" => 4,
		"img" => "/med.png",
		"url" => "http://en.wikipedia.org/wiki/World_Health_Day",
		
	),
	33 => array("name" => "International Day of the Book",
		"day"=> 23,
		"month" => 4,
		"img" => "/book.png",
		"url" => "http://en.wikipedia.org/wiki/World_Book_and_Copyright_Day",
	
	),
	34 => array("name" => "World Malaria Day",
		"day"=> 25,
		"month" => 4,
		"img" => "/mala.png",
		"url" => "http://en.wikipedia.org/wiki/World_Malaria_Day",

	),
	35 => array("name" => "International Firefighters' Day",
		"day"=> 4,
		"month" =>5 ,
		"img" => "/fire.png",
		"url" => "http://en.wikipedia.org/wiki/International_Firefighters%27_Day",
	),
	36 => array("name" => "World Turtle Day",
		"day"=> 23,
		"month" => 5,
		"img" => "/turtle.png",
		"url" => "http://en.wikipedia.org/wiki/World_Turtle_Day",

	),
	37 => array("name" => "World No Tobacco Day",
		"day"=> 31,
		"month" => 5,
		"img" => "/papieros.png",
		"url" => "http://en.wikipedia.org/wiki/World_No_Tobacco_Day",
	
	),
	38 => array("name" => "World Environment Day",
		"day"=> 5,
		"month" => 6,
		"img" => "/env.png",
		"url" => "http://en.wikipedia.org/wiki/World_Environment_Day",

	),
	39 => array("name" => "World Blood Donor Day",
		"day"=> 14,
		"month" => 6,
		"img" => "/blood.png",
		"url" => "http://en.wikipedia.org/wiki/World_Blood_Donor_Day",
		
	),
	40 => array("name" => "World Music Day",
		"day"=> 21,
		"month" => 6,
		"img" => "/music.png",
		"url" => "http://en.wikipedia.org/wiki/World_music",
	
	),
	41 => array("name" => "International Day against Drug Abuse and Illicit Trafficking",
		"day"=> 26,
		"month" => 6,
		"img" => "/drugs.png",
		"url" => "http://en.wikipedia.org/wiki/International_Day_against_Drug_Abuse_and_Illicit_Trafficking",

	),
	42 => array("name" => "World Population Day",
		"day"=> 11,
		"month" => 7,
		"img" => "/pop.png",
		"url" => "http://en.wikipedia.org/wiki/World_Population_Day",

	),
	43 => array("name" => "International Youth Day",
		"day"=> 12,
		"month" => 8,
		"img" => "/youth.png",
		"url" => "http://en.wikipedia.org/wiki/International_Youth_Day",

	),
	44 => array("name" => "International Day of Democracy",
		"day"=> 15,
		"month" => 9,
		"img" => "/vote.png",
		"url" => "http://en.wikipedia.org/wiki/International_Day_of_Democracy",
		
	),
	45 => array("name" => "World Vegetarian Day",
		"day"=> 1,
		"month" => 10,
		"img" => "/veg.png",
		"url" => "http://en.wikipedia.org/wiki/World_Vegetarian_Day",

	),
	46 => array("name" => "World Teachers' Day",
		"day"=> 5,
		"month" => 10,
		"img" => "/teacher.png",
		"url" => "http://en.wikipedia.org/wiki/World_Teachers%27_Day",
		
	),
	47 => array("name" => "International Students' Day",
		"day"=> 17,
		"month" => 11,
		"img" => "/student.png",
		"url" => "http://en.wikipedia.org/wiki/International_Students%27_Day",
	),
	48 => array("name" => "International Mountain Day",
		"day"=> 11,
		"month" => 12,
		"img" => "/mountain.png",
		"url" => "http://en.wikipedia.org/wiki/Mountain_Day",
	
	),

);

	$min = 1 ; $max = count($wp_picture_calendar);
	$output = $wp_picture_calendar[rand(1,$max)];

	$found = false ;
	foreach ($wp_picture_calendar as $day) {
		if( $day['month'] == date('m') ){
			if( $day['day'] == date('d') ){
				$found = true ;
				$output = $day;
			} 
		}
		if( $found ){
			break;
		} 
	}

	$random_txt = '';
	if( !$found ){
		$random_txt = 'Random World Day: ';
		
		$min_countdown = 365*24*60*60 ;
		
			
				$tmp = mktime(0, 0, 0,  $output['month'] , $output['day'],date("Y")) - mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
				
				if( $tmp < $min_countdown && $tmp > 0){
					$min_countdown = $tmp;
					$found = true ;
					
				} else {
					$tmp = mktime(0, 0, 0,  $output['month'] , $output['day'],date("Y")+1) - mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
					
					if( $tmp < $min_countdown && $tmp > 0){
						$min_countdown = $tmp;
						$found = true ;
						
					}
				}
		
		if( $found ){
			$random_txt = 'Random World Day in ' . ($min_countdown/(24*60*60) ).' day/s';
		}
	} 

	
	$output_fin = '<ul class="wp_picture_calendar">' . $wp_picture_calendar_start . '<a rel="nofallow" title="'.$output["name"].'" href="'. $output["url"] .'"><img class="wp_picture_calendar_img" src="'. get_option('home')  .'/wp-content/plugins/wp-picture-calendar/img' 
	. $output["img"]. '" alt="'.  $output["name"] .'"  title="'.  $output["name"] .'" ></a>'
	. '</div><div id="desc_wp_picture_calendar">'. $random_txt .' <br/>'. date("M", mktime(0, 0, 0, $output["month"], 1, 2000)).' ' . $output["day"]  .' <br/> '. $output["name"] . $wp_picture_calendar_end . '<div style="clear: both; height:1px;"></div></ul>';
	
	return $output_fin;
}

function wp_picture_calendar(){
	
	$output = wp_get_picture_calendar() ;

	echo $output;
}



add_action('plugins_loaded', 'widget_sidebar_wp_picture_calendar');
function widget_sidebar_wp_picture_calendar() {
	function widget_wp_picture_calendar($args) {
	    extract($args);
		
		echo $before_widget;
		
		$output = wp_get_picture_calendar($before_title,$after_title);
		echo $output;
		echo $after_widget;
	}
	register_sidebar_widget('WP Picture Calendar', 'widget_wp_picture_calendar');
}



